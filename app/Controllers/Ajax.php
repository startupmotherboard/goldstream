<?php namespace App\Controllers;

class Ajax extends BaseController
{
	public function index(){
		echo 'Silence!';
	}
	
	public function submit_signin_form(){
		$val = $this->validate([
	
				'email' => ['label' => lang('app.field_email'), 'rules' => 'trim|required|valid_email'],
				'password' => ['label' => lang('app.field_password'), 'rules' => 'trim|required'],
				
		]);
		$email=$this->request->getVar('email');
		$password=$this->request->getVar('password');
		$res=array("error"=>true);
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
			else{
				$user_data=$this->UserModel->login($email,$password);
				if(!empty($user_data)){
					$this->session->set(array('user_data'=>$user_data[0]));
					$res=array("error"=>false,"data"=>$user_data);
				}
				else{
					$res=array("error"=>true,"validation"=>lang('app.error_account'));
				}
				
			}
		echo json_encode($res);
	}
	
	public function submit_signup_form(){
		$val = $this->validate([
				
				'first_name' => ['label' => lang('app.field_first_name'), 'rules' => 'trim|required'],	
				'last_name' => ['label' => lang('app.field_last_name'), 'rules' => 'trim|required'],
				'email' => ['label' => lang('app.field_email'), 'rules' => 'trim|required|valid_email'],
				'password' => ['label' => lang('app.field_password'), 'rules' => 'trim|required'],
				'confirm_password' => ['label' => lang('app.field_confirm_password'), 'rules' => 'required|matches[password]'],
				'adr1' => ['label' => lang('app.field_adr1'), 'rules' => 'trim|required'],	
				'city' => ['label' => lang('app.field_city'), 'rules' => 'trim|required'],	
				'zip' => ['label' => lang('app.field_zip'), 'rules' => 'trim|required'],	
				'province' => ['label' => lang('app.field_province'), 'rules' => 'trim|required'],	
				'phone' => ['label' => lang('app.field_phone'), 'rules' => 'trim|required'],
				
		]);
		
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg,"error_form_email"=>false);
			}
			else{
				$val = $this->validate([
				'email' => ['label' => lang('app.field_email'), 'rules' => 'is_unique[users.email]'],
				]);
				if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg,"error_form_email"=>true);
			}
			else{
				// insertion in DB and creation session
				$email=$this->request->getVar('email');
				$password=$this->request->getVar('password');
				$first_name=ucfirst(strtolower( $this->request->getVar('first_name')));
				$last_name=ucfirst(strtolower( $this->request->getVar('last_name')));
				$display_name=$first_name.' '.$last_name;
				$adr1=$this->request->getVar('adr1');
				$adr2=$this->request->getVar('adr2');
				$city=$this->request->getVar('city');
				$zip=$this->request->getVar('zip');
				$province=$this->request->getVar('province');
				$phone=$this->request->getVar('phone');
				
				$user_id=$this->UserModel->add('C',$email,$password,$display_name,'yes','',0);
				$this->UserProfileModel->insert(array(
					"user_id"=>$user_id,
					"first_name"=>$first_name,
					"last_name"=>$last_name,
					"adr1"=>$adr1,
					"adr2"=>$adr2,
					"city"=>$city,
					"zip"=>$zip,
					"province"=>$province,
					"phone"=>$phone,
					"email"=>$email,
				));
				
				$user_data=$this->UserModel->login($email,$password,'C');
			//	var_dump($user_data);
				$this->session->set(array('user_data'=>$user_data[0]));
				 $res=array("error"=>false);
				} 
			}
		
		echo json_encode($res);
	}
	
	public function submit_forgot_form(){
		$common_data=$this->common_data();
		$email=$this->request->getVar('email');
		$exist=$this->UserModel->where('email',$email)->find();
		if(empty($exist)){
			$res=array("error"=>true,"validation"=>"Error");
		}
		else{
				$new_token=random_string('alnum', 12);
				$this->UserModel->edit($exist[0]['id'],array("token"=>$new_token));
				############## email #########################
				
				$email = \Config\Services::email();
				$subscribe_email=$this->request->getVar('email');
				$settings=$common_data['settings'];
				$email->setFrom($settings['sender_email'],$settings['sender_name']);
			
				$email->setTo($subscribe_email);
				$link=base_url().'/resetPassword/'.$subscribe_email.'/'.$new_token;
				
				$temp=$this->TemplatesModel->where('module','forgot_pass')->find();
			
				$html=str_replace(array("{var_website_name}","{var_user_name}","{var_varification_link}"),
				array($settings['sender_name'],$exist[0]['display_name'],$link),
				$temp[0]['html']);
				$email->setSubject($temp[0]['subject']);
				$email->setMessage($html);
				$email->setAltMessage(strip_tags($html));
				
				//var_dump($email);
				$xxx=$email->send();
				$res=array("error"=>false,"xxx"=>$xxx);
		}
		echo json_encode($res);
	}
	
	public function submit_reset_form(){
		$token=$this->request->getVar('token');
		$email=$this->request->getVar('email');
		$password=$this->request->getVar('password');
		$confirm_password=$this->request->getVar('confirm_password');
		$val = $this->validate([
				
				'token' => ['label' => lang('app.field_first_name'), 'rules' => 'trim|required'],	
				'email' => ['label' => lang('app.field_email'), 'rules' => 'trim|required|valid_email'],
				'password' => ['label' => lang('app.field_password'), 'rules' => 'trim|required'],
				'confirm_password' => ['label' => lang('app.field_confirm_password'), 'rules' => 'required|matches[password]'],
				
		]);
		
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
			else{
				$exist=$this->UserModel->where('token', $token)
								->where('email', $email)
								->find();
							
				if(empty($exist)){
					
					$res=array("error"=>true,"validation"=>lang('app.error_reset_password'));
				}
				else{
					$new_token=random_string('alnum', 12);
					$this->UserModel->edit($exist[0]['id'],array("password"=>md5($password),'token'=>$new_token));
					$res=array("error"=>false);
				}
			}
			
		echo json_encode($res);
	}
	
	public function validation_profile_perso(){
		$val = $this->validate([
				
				'first_name' => ['label' => lang('app.field_first_name'), 'rules' => 'trim|required'],	
				'last_name' => ['label' => lang('app.field_last_name'), 'rules' => 'trim|required'],
				'email' => ['label' => lang('app.field_email'), 'rules' => 'trim|required|valid_email'],
				'adr1' => ['label' => lang('app.field_adr1'), 'rules' => 'trim|required'],	
				'city' => ['label' => lang('app.field_city'), 'rules' => 'trim|required'],	
				'zip' => ['label' => lang('app.field_zip'), 'rules' => 'trim|required'],	
				'province' => ['label' => lang('app.field_province'), 'rules' => 'trim|required'],	
				'phone' => ['label' => lang('app.field_phone'), 'rules' => 'trim|required'],
				
		]);
		
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
			else{
				$res=array("error"=>false,"validation"=>$error_msg);
			}
		echo json_encode($res);
	}
	
	public function validation_profile_account(){
		$common_data=$this->common_data();
		$data=$common_data;
		$val = $this->validate([
				'current_password' => ['label' => lang('app.field_current_password'), 'rules' => 'trim|required'],
				'password' => ['label' => lang('app.field_password'), 'rules' => 'trim|required'],
				'confirm_password' => ['label' => lang('app.field_confirm_password'), 'rules' => 'matches[password]'],
		]);
		
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
			else{
				$verify_pass=$this->UserModel->find($common_data['user_data']['id']);
				if($verify_pass['password']!=md5($this->request->getVar('current_password'))){
					$res=array("error"=>true,"validation"=>lang('app.error_current_password'));
				}
				else
				$res=array("error"=>false,"validation"=>$error_msg);
			}
		echo json_encode($res);
	}
	
	public function add_bloc_buyer(){
		echo view('customer/includes/bloc_buyer');
	}
	
	public function validation_add_home(){
		$val = $this->validate([
				
				'city' => ['label' => lang('app.field_city'), 'rules' => 'trim|required'],	
				'price_min' => ['label' => lang('app.home_field_price_min'), 'rules' => 'trim|required|numeric'],
				'price_max' => ['label' => lang('app.home_field_price_max'), 'rules' => 'trim|required|numeric'],
				
				
		]);
		 $def_buyer_first_name=$this->request->getVar('buyer_info_first_name')[0];
		 $def_buyer_last_name=$this->request->getVar('buyer_info_last_name')[0];
		 $def_buyer_phone=$this->request->getVar('buyer_info_phone')[0];
			if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
			elseif($def_buyer_first_name=="" || $def_buyer_last_name=="" || $def_buyer_phone==""){
				$error_msg=lang('app.error_required_def_buyer');
				$res=array("error"=>true,"validation"=>$error_msg);
			}
			else{
				$res=array("error"=>false,"validation"=>$error_msg);
			}
		echo json_encode($res);
	}
	
	public function save_message(){
		$val = $this->validate([
				
				'message' => ['label' => lang('app.field_city'), 'rules' => 'trim|required'],	
				
				
				
		]);
		if (!$val)
			{
					//var_dump($this->validator);
					$validation=$this->validator;
					$error_msg=$validation->listErrors();
					$res=array("error"=>true,"validation"=>$error_msg);
			}
		else{
			$common_data=$this->common_data();
			if($common_data['user_data']['role']=='C') $user_id=$common_data['user_data']['id'];
			else  $user_id=$this->request->getVar('user_id');
			$dd=array('user_id'=>$user_id,
				'sender_id'=>$common_data['user_data']['id'],
				'msg'=>$this->request->getVar('message'),
				'readed'=>'no'
			);
			$this->MessagesModel->insert($dd);
			ob_start();?>
			<div class="d-flex flex-column mb-5 align-items-end">
				<div class="d-flex align-items-center">
					<div>
						<span class="text-muted font-size-sm"><?php echo date('H:i')?></span>
						<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6"><?php echo lang('app.you')?></a>
					</div>
					<div class="symbol symbol-circle symbol-40 ml-3">
					<?php if($common_data['user_data']['role']=='C'){
						$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
						if($inf_profile['image']!=""){?>
							<img alt="Pic" src="<?php echo base_url('uploads/customers/'.$inf_profile['image'])?>" />
						<?php } else{?>
							<span class="font-size-h3 symbol-label font-weight-boldest"><?php echo strtoupper(substr($inf_profile['first_name'],0,1).substr($inf_profile['last_name'],0,1))?></span>
						<?php } 
					}else{?>
					<span class="font-size-h3 symbol-label font-weight-boldest"><?php 
					$vv=explode(" ",$common_data['user_data']['display_name']);
					echo strtoupper(substr($vv[0],0,1).substr($vv[1],0,1))?></span>
					<?php } ?>
					</div>
				</div>
				<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px"><?php echo $this->request->getVar('message')?></div>
			</div>
			
			<?php $msg=ob_get_clean();
			$res=array("error"=>false,"msg"=>$msg);
			
		}
		echo json_encode($res);
	}
	
	public function get_messages_by_admin(){
		$common_data=$this->common_data();
		$user_id=$this->request->getVar('user_id');
		$inf_uu=$this->UserModel->find($user_id);
		
		$ll=$this->MessagesModel->where('user_id',$user_id)->orderby('sended_at','ASC')->findAll();
		$tab=array();
		foreach($ll as $k=>$v){
			$inf_sender=$this->UserModel->find($v['sender_id']);
			$inf_profile=$this->UserProfileModel->where('user_id',$v['sender_id'])->first();
			
			if($v['sender_id']==$common_data['user_data']['id']){
				$sender_name=lang('app.you');
				$xx=explode(" ",$inf_sender['display_name']);
				if($inf_profile['image']!='') $sender_image='<img alt="Pic" src="'.base_url('uploads/customers/'.$inf_profile['image']).'" />';
				else $sender_image='<span class="font-size-h3 symbol-label font-weight-boldest">'.strtoupper(substr($xx[0],0,1).substr($xx[1],0,1)).'</span>';
			}
			else{
				$this->MessagesModel->update($v['id'],array('readed'=>'yes'));
				//$inf_user=$this->UserModel->find($v['user_id']);
				//$inf_profile=$this->UserProfileModel->where('user_id',$v['user_id'])->first();
					$sender_name=$inf_profile['first_name'].' '.$inf_profile['last_name'];
					$xx=explode(" ",$inf_sender['display_name']);
				if($inf_profile['image']!='') $sender_image='<img alt="Pic" src="'.base_url('uploads/customers/'.$inf_profile['image']).'" />';
				else $sender_image='<span class="font-size-h3 symbol-label font-weight-boldest">'.strtoupper(substr($xx[0],0,1).substr($xx[1],0,1)).'</span>';
	
			}
			$msg=$v['msg'];
			$send_date=$v['sended_at'];
			$tab[]=array(
				'sender_name'=>$sender_name,
				'sender_image'=>$sender_image,
				'send_date'=>$send_date,
				'msg'=>$msg
			);
			
			
		}
		
			?>
			<input type="hidden" id="current_user_id" value="<?php echo $user_id?>">
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header align-items-center px-4 py-3">
												
												<div class="text-center flex-grow-1">
													<div class="text-dark-75 font-weight-bold font-size-h5"><?php echo $inf_uu['display_name']?></div>
													<div>
														<span class="label label-sm label-dot label-success"></span>
														<span class="font-weight-bold text-muted font-size-sm">Client</span>
													</div>
												</div>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="scroll scroll-pull" data-mobile-height="350">
													<!--begin::Messages-->
													<div class="messages">
														<!--begin::Message In-->
											<?php	if(!empty($tab)){
												foreach($tab as $one){ ?>
														<!--begin::Message In-->
														<div class="d-flex flex-column mb-5 <?php if($one['sender_name']==lang('app.you'))  echo 'align-items-start'; else echo 'align-items-end'?>">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<?php echo $one['sender_image']?>
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6"><?php echo $one['sender_name']?></a>
																	<span class="text-muted font-size-sm"><?php echo date('d M - H:i',strtotime($one['send_date']))?></span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px"><?php echo $one['msg']?></div>
														</div>
														<!--end::Message In-->
											<?php } }?>
													</div>
													<!--end::Messages-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer align-items-center">
												<!--begin::Compose-->
												<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message" name="message" id="message"></textarea>
												<div class="d-flex align-items-center justify-content-between mt-5">
													
													<div>
														<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6" onclick="send_message();"><?php echo lang('app.btn_send')?></button>
													</div>
												</div>
												<!--begin::Compose-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Card-->
		<?php
	}
}
?>