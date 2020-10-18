<?php namespace App\Controllers;

class CustomerDash extends BaseController
{
	
	
	public function index()
	{  
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='C'){ 
			return redirect()->to( base_url('login'));
		}
		//return redirect()->to( base_url('customer/profile'));
		return view('customer/dashboard',$data);
	} 
	
	public function profile()
	{  
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='C'){ 
			return redirect()->to( base_url('login'));
		}
		if($this->request->getVar('action')!==null){
			switch($this->request->getVar('action')){
				case 'edit_profil_perso':
					$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
					$email=$this->request->getVar('email');
					
					$first_name=ucfirst(strtolower( $this->request->getVar('first_name')));
					$last_name=ucfirst(strtolower( $this->request->getVar('last_name')));
					$display_name=$first_name.' '.$last_name;
					$adr1=$this->request->getVar('adr1');
					$adr2=$this->request->getVar('adr2');
					$city=$this->request->getVar('city');
					$zip=$this->request->getVar('zip');
					$province=$this->request->getVar('province');
					$phone=$this->request->getVar('phone');
					$birthdate=$this->request->getVar('birthdate');
					$val = $this->validate([
						'email' => ['label' => lang('app.field_email'), 'rules' => 'is_unique[users.email,id,'.$common_data['user_data']['id'].']'],
					]);
					if (!$val)
					{
							//var_dump($this->validator);
							$validation=$this->validator;
							$error_msg=$validation->listErrors();
							$data['error']=$error_msg;
					}
					else{
					
					
					$this->UserModel->edit($common_data['user_data']['id'],array('display_name'=>$display_name,'email'=>$email));
					
					$validated = $this->validate([
							'profile_avatar' => [
								'uploaded[profile_avatar]',
								'mime_in[profile_avatar,image/jpg,image/jpeg,image/gif,image/png]',
								'max_size[profile_avatar,4096]',
							],
						]);
						$dd=array(
					
					"first_name"=>$first_name,
					"last_name"=>$last_name,
					"adr1"=>$adr1,
					"adr2"=>$adr2,
					"city"=>$city,
					"zip"=>$zip,
					"province"=>$province,
					"phone"=>$phone,
					"birthdate"=>$birthdate,
					"email"=>$email,
				);
						if ($validated) { 
							$avatar_logo = $this->request->getFile('profile_avatar');
							 $logo_name = $avatar_logo->getRandomName();
							$dd['image']= $logo_name;
							$avatar_logo->move(ROOTPATH.'public/uploads/customers/',$logo_name);
						
						
						}
					if($this->request->getVar('profile_avatar_remove')=='1') 	$dd['image']= "";
					
					
				$this->UserProfileModel->update($inf_profile['id'],$dd);
					}//end validation unique email
				break;
			}
		}
		$inf_user=$this->UserModel->find($common_data['user_data']['id']);
		$data['inf_user']=$inf_user;
		$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
		$data['inf_profile']=$inf_profile;
		return view('customer/profile',$data);
	} 
	
	public function profile_account(){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='C'){ 
			return redirect()->to( base_url('login'));
		}
		if($this->request->getVar('action')!==null){
			switch($this->request->getVar('action')){
				case 'edit_profil_account':
					//$email=$this->request->getVar('email');
					$password=$this->request->getVar('password');
					//$dd=array("email"=>$email);
					if($password!=""){ $dd['password']=md5($password);
						$this->UserModel->edit($common_data['user_data']['id'],$dd);
						$data['success']=lang('app.success_update');
					}
				break;
			}
		}
		$inf_user=$this->UserModel->find($common_data['user_data']['id']);
		$data['inf_user']=$inf_user;
		$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
		$data['inf_profile']=$inf_profile;
		return view('customer/profile_account',$data);
	}
}
?>