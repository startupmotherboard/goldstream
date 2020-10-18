<?php namespace App\Controllers;

class AdminClients extends BaseController
{
	public function get_info($user_id){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
			return redirect()->to( base_url('login'));
		}
		
		$inf=$this->UserModel->find($user_id);
		if(empty($inf)) return redirect()->to( base_url('dashboard'));
		$data['inf_user']=$inf;
		$inf_profile=$this->UserProfileModel->where('user_id',$user_id)->first();
		$data['inf_profile']=$inf_profile;
		return view('admin/client_details',$data);
	}
	public function get_home_client($user_id){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
			return redirect()->to( base_url('login'));
		}
		
		$inf=$this->UserModel->find($user_id);
		if(empty($inf)) return redirect()->to( base_url('dashboard'));
		$data['inf_user']=$inf;
		$inf_profile=$this->UserProfileModel->where('user_id',$user_id)->first();
		$data['inf_profile']=$inf_profile;
		
		$list_home=$this->HomeRequestModel->where('user_id',$user_id)->where('banned','no')->findAll();
		foreach($list_home as $k=>$v){
				$inf_buyers=$this->HomeBuyerModel->where('request_id',$v['id'])->where('banned','no')->findAll();
				$v['list_buyers']=$inf_buyers;
				$list_home[$k]=$v;
		}
		$data['list_home']=$list_home;
		return view('admin/client_home',$data);
	}
	
}
?>