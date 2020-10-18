<?php namespace App\Controllers;

class Messages extends BaseController
{
	public function index(){
		$common_data=$this->common_data();
		$data=$common_data;
		if($common_data['is_logged']==false || $common_data['user_data']['role']!='A'){ 
			return redirect()->to( base_url('login'));
		}
		
		//$ll=$this->MessagesModel->getM();
		//
		//$ll=$this->MessagesModel->orderby('sended_at','DESC')->findAll();
		$ll=$this->UserModel->where('role','C')->findAll();
		foreach($ll as $k=>$vv){
			$v=array();
			$v=$this->MessagesModel->where('user_id',$vv['id'])->first();
			$tab[$vv['id']]=array();
			$inf_user=$this->UserProfileModel->where('user_id',$vv['id'])->first();
			
			$tab[$vv['id']]['inf_user']=$inf_user;
			if($v['sended_at']!="") $tab[$vv['id']]['last']=$v['sended_at']; else $tab[$vv['id']]['last']="";
			$nb=$this->MessagesModel->where('user_id',$vv['id'])->where('sender_id',$vv['id'])->where('readed','no')->countAllResults();
			$tab[$vv['id']]['unreaded']=$nb;
		}
		
		$data['list']=$tab;
		return view('admin/messages',$data);
	}
	
	public function new_message(){
		$common_data=$this->common_data();
		$data=$common_data;
		$inf_admin=$this->UserModel->where('role','A')->first();
		$data['admin_name']=$inf_admin['display_name'];
		
		$ll=$this->MessagesModel->where('user_id',$common_data['user_data']['id'])->orderby('sended_at','ASC')->findAll();
		//var_dump($ll);
		foreach($ll as $k=>$v){
			
			
			if($v['sender_id']==$common_data['user_data']['id']){
				$inf_profile=$this->UserProfileModel->where('user_id',$common_data['user_data']['id'])->first();
				$sender_name=lang('app.you');
			
				if($inf_profile['image']!='') $sender_image='<img alt="Pic" src="'.base_url('uploads/customers/'.$inf_profile['image']).'" />';
				else $sender_image='<span class="font-size-h3 symbol-label font-weight-boldest">'.strtoupper(substr($inf_profile['first_name'],0,1).substr($inf_profile['last_name'],0,1)).'</span>';
			}
			else{
				$inf_sender=$this->UserModel->find($v['sender_id']);
			//$inf_profile=$this->UserProfileModel->where('user_id',$v['sender_id'])->first();
				$this->MessagesModel->update($v['id'],array('readed'=>'yes'));
				//$inf_user=$this->UserModel->find($v['user_id']);
				//$inf_profile=$this->UserProfileModel->where('user_id',$v['user_id'])->first();
					$sender_name=$inf_sender['display_name'];
					$xx=explode(" ",$inf_sender['display_name']);
				 $sender_image='<span class="font-size-h3 symbol-label font-weight-boldest">'.strtoupper(substr($xx[0],0,1).substr($xx[1],0,1)).'</span>';
	
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
		$data['tab']=$tab;
		$inf_admin=$this->UserModel->where('role','A')->first();
		$xx=explode(" ",$inf_admin['display_name']);
		$short_name=strtoupper(substr($xx[0],0,1).substr($xx[1],0,1));
		$last="";
		$ll=$this->MessagesModel->where('user_id',$common_data['user_data']['id'])->where('sender_id',$inf_admin['id'])->orderby('sended_at','DESC')->first();
		if(!empty($ll)){
			$last=$ll['sended_at'];
		}
		$nb=$this->MessagesModel->where('user_id',$vv['id'])->where('sender_id',$inf_admin['id'])->where('readed','no')->countAllResults();
		$tab_admin=array("short_name"=>$short_name,
		'display_name'=>$inf_admin['display_name'],
		'last'=>$last,
		'unreaded'=>$nb);
		$data['admin']=$tab_admin;
		
		return view('customer/messages',$data);
	}
}
?>