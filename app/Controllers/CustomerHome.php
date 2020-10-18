<?php namespace App\Controllers;

class CustomerHome extends BaseController
{
	
	
	public function index()
	{  
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='C'){ 
			return redirect()->to( base_url('login'));
		}
		
		return view('customer/dashboard',$data);
	} 
	
	public function new_home(){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='C'){ 
			return redirect()->to( base_url('login'));
		}
		if($this->request->getVar('action')!==null){
			$city=$this->request->getVar('city');
			$price_range=json_encode(array("min"=>$this->request->getVar('price_min'),"max"=>$this->request->getVar('price_max')));
			if($this->request->getVar('home_field_bedrooms')!==null) $bedrooms=implode(",",$this->request->getVar('home_field_bedrooms')); else $bedrooms=null;
			if($this->request->getVar('home_field_square')!==null) $square=implode(",",$this->request->getVar('home_field_square')); else $square=null;
			if($this->request->getVar('home_field_property_type')!==null) $property_type=implode(",",$this->request->getVar('home_field_property_type')); else $property_type=null;
			
			if($this->request->getVar('home_field_type_home')!==null) $home_type=implode(",",$this->request->getVar('home_field_type_home')); else $home_type=null;
			if($this->request->getVar('home_field_preferences')!==null) $preferences=implode(",",$this->request->getVar('home_field_preferences')); else $preferences=null;
			
			$dd=array("user_id"=>$common_data['user_data']['id'],
			"city"=>$city,
			"bedrooms"=>$bedrooms,
			"price_range"=>$price_range,
			"square"=>$square,
			"property_type"=>$property_type,
			"home_type"=>$home_type,
			"preferences"=>$preferences,
			"details"=>$this->request->getVar('details')
			);
			
			$request_id=$this->HomeRequestModel->insert($dd);
			foreach($this->request->getVar('buyer_info_def') as $k=>$v){
				$def=$v;
				$first_name=$this->request->getVar('buyer_info_first_name')[$k];
				$last_name=$this->request->getVar('buyer_info_last_name')[$k];
				$phone=$this->request->getVar('buyer_info_phone')[$k];
				$email=$this->request->getVar('buyer_info_email')[$k];
				$birthdate=$this->request->getVar('buyer_info_birthdate')[$k];
				$dd=array("request_id"=>$request_id,
					'first_name'=>$first_name,
					'last_name'=>$last_name,
					'phone'=>$phone,
					'email'=>$email,
					'birthdate'=>$birthdate,
					'def'=>$def
				);
				$this->HomeBuyerModel->insert($dd);
			}
			
			$data['success']=lang('app.success_add_home_request');
			
		}
		$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
		$data['inf_profile']=$inf_profile;
		return view('customer/home_new',$data);
	}
}?>