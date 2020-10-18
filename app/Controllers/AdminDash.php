<?php namespace App\Controllers;

class AdminDash extends BaseController
{
	
	
	public function index()
	{  
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
			return redirect()->to( base_url('login'));
		}
		
		$per_page=10;
		if($this->request->getVar('per_page')!==null) $per_page=$this->request->getVar('per_page');
		$page=1;
		if($this->request->getVar('page')!==null) $page=$this->request->getVar('page');
		
		
		$list=$this->UserModel->searchDash($page,$per_page,'C');
		$data['list']=$list;
		$data['tot']=$this->UserModel->searchDashTot('C');
		$data['per_page']=$per_page;
		$nb_pages=ceil($data['tot']/$per_page);
		$data['nb_pages']=$nb_pages;
		$data['page']=$page;
		return view('admin/dashboard',$data);
	} 
	
	public function profile()
	{  
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
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
					$this->UserModel->edit($common_data['user_data']['id'],array('display_name'=>$display_name));
					
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
					if($inf_profile['id']!="") $dd['id']=$inf_profile['id'];
					
				$this->UserProfileModel->save($dd);
				
				break;
			}
		}
		$inf_user=$this->UserModel->find($common_data['user_data']['id']);
		$data['inf_user']=$inf_user;
		$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
		$data['inf_profile']=$inf_profile;
		return view('admin/profile',$data);
	} 
	
	public function profile_account(){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
			return redirect()->to( base_url('login'));
		}
		if($this->request->getVar('action')!==null){
			switch($this->request->getVar('action')){
				case 'edit_profil_account':
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
		return view('admin/profile_account',$data);
	}
}
?>