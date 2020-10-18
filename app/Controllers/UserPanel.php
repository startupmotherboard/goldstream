<?php namespace App\Controllers;

class UserPanel extends BaseController
{
	
	
	public function index()
	{  
		$common_data=$this->common_data();
		if($common_data['is_logged']==true){
			if($common_data['user_data']['role']=='A') return redirect()->to( base_url('admin/dashboard'));
			else return redirect()->to( base_url('customer/dashboard'));
		}
		else return redirect()->to( base_url('login'));
	} 
	
	public function logout(){
		$common_data=$this->common_data();
		$this->session->remove('user_data');
		return redirect()->to( base_url('login'));
	}
	
	public function login(){
		$common_data=$this->common_data();
		if($common_data['is_logged']==true){
			if($common_data['user_data']['role']=='A') return redirect()->to( base_url('admin/dashboard'));
			else return redirect()->to( base_url('customer/dashboard'));
		}
		$data=$common_data;
		return view('login',$data);
	}
	
	public function signup(){
		$common_data=$this->common_data();
		if($common_data['is_logged']==true){
			if($common_data['user_data']['role']=='A') return redirect()->to( base_url('admin/dashboard'));
			else return redirect()->to( base_url('customer/dashboard'));
		}
		$data=$common_data;
		return view('signup',$data);
	}
	
	public function forgot(){
		$common_data=$this->common_data();
		/*if($common_data['is_logged']==true){
			if($common_data['user_data']['role']=='A') return redirect()->to( base_url('admin/dashboard'));
			else return redirect()->to( base_url('customer/dashboard'));
		}*/
		$data=$common_data;
		return view('forgot',$data);
	}
	
	
	public function profile()
	{	
			$user_data=$this->session->get('user_data');
		
		
		if(!is_null($this->request->getVar('action'))){
			
			
				$data_user['email']=$this->request->getVar('email');
				$data_user['display_name']=$this->request->getVar('display_name');//$this->request->getVar('nome').' '.$this->request->getVar('cognome');
				if(!is_null($this->request->getVar('password')) && $this->request->getVar('password')!=""){
					$data_user['password']=md5($this->request->getVar('password'));
				}
			
				$this->UserModel->edit($user_data['id'],$data_user);
				$inf_profile=$this->UserProfileModel->where('user_id',$user_data['id'])->find();
				
				 $validated = $this->validate([
							'logo' => [
								'uploaded[logo]',
								'mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]',
								'max_size[logo,4096]',
							],
						]);
						
						if ($validated) { 
							$avatar_logo = $this->request->getFile('logo');
							 $logo_name = $avatar_logo->getRandomName();
							
							$avatar_logo->move(ROOTPATH.'public/uploads/logo/',$logo_name);
						
						
						}
						//else $logo_name=null;
				
				$data=array('id'=>$inf_profile[0]['id'],
					
				
					'nome'=>$this->request->getVar('nome'),
					'cognome'=>$this->request->getVar('cognome'),
				    'email' => $this->request->getVar('email'),		
					'mobile' =>$this->request->getVar('mobile'),								
					'telefono' =>$this->request->getVar('telefono'),
				    'cf' => $this->request->getVar('cf'),
				'residenza_stato' =>$this->request->getVar('residenza_stato'),			
				'residenza_provincia' => $this->request->getVar('residenza_provincia'),
				'residenza_comune' =>$this->request->getVar('residenza_comune'),
				'residenza_cap' =>$this->request->getVar('residenza_cap'),	
				'residenza_indirizzo' =>$this->request->getVar('residenza_indirizzo'),			
				   'nascita_data' => $this->request->getVar('nascita_data'),
				   'nascita_stato' =>$this->request->getVar('nascita_stato'),				
				   'nascita_provincia' =>$this->request->getVar('nascita_provincia'),
			
				);
				if($logo_name!=""){
					$data['logo']=$logo_name;
				}
				
				
				
				$this->UserProfileModel->save($data);
				$success=lang('app.success_update_profile');
		}
		
	
		$inf_user=$this->UserModel->find($user_data['id']);
		
		$common_data=$this->common_data();
		if($common_data['is_logged']==false) return redirect()->to( base_url('login'));
		$data=$common_data;
		$data['profile_data']=$inf_user;
		
		$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->find();
		$data['inf_profile']=$inf_profile[0];
		
		$data['menu']='profile';
		$list_nazioni=$this->NazioniModel->where('status','enable')->orderby("nazione",'asc')->findAll();
		$data['list_nazioni']=$list_nazioni;
		
			$list_provincia=$this->ProvinceModel->orderby("provincia",'asc')->findAll();
			$data['list_provincia']=$list_provincia;
			$data['list_comuni']=array();
			if(is_numeric($inf_profile[0]['residenza_provincia']) && $inf_profile[0]['residenza_provincia']>0){
				$list_comuni=$this->ComuniModel->where('id_prov',$inf_profile[0]['residenza_provincia'])->orderby("comune",'asc')->findAll();
				$data['list_comuni']=$list_comuni;
				
			}
		
		
		
		if(isset($success)) $data['success']=$success;
		return view('profile',$data);
	}
	
	public function resetPassword($email,$token){
		
		$common_data=$this->common_data();
		$data=$common_data;
		$data['redirect_url']=$this->session->get('forgot_redirect');
		
		$exist=$this->UserModel->where('token', $token)
						->where('email', $email)
						->find();
					
		if(empty($exist)){
			$data['error']=lang('app.error_reset_password');
		}
		else{
			
			$data['exist']=$exist;
			
		}
		return view('reset_password',$data);
	}
}// end controller class