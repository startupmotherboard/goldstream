<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$common_data=$this->common_data();
		if($common_data['is_logged']==true){
			if($common_data['user_data']['role']=='A') return redirect()->to( base_url('admin/dashboard'));
			else return redirect()->to( base_url('customer/dashboard'));
		}
		else return redirect()->to( base_url('login'));
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
