<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
	
    protected $table = 'users';
	protected $primaryKey = 'id';
    protected $allowedFields = ['role', 'email','password','display_name','active','token','creator'];
	protected $useSoftDeletes = true;
	protected $returnType = 'array';
	protected $useTimestamps = true;
    protected $createdField  = 'created_at';
	protected $deletedField  = 'deleted_at';
	
	
	
	public function login($email,$password,$role=null){
		$db = \Config\Database::connect();
		$req="SELECT * FROM ".$this->table." where deleted_at IS NULL ";
		if(!is_null($role)) $req.=" and role='".$role."'";
		if(!is_null($email)) $req.=" and email='".$email."'";
		if(!is_null($password)) $req.=" and password='".md5($password)."'";
		$query = $db->query($req);
		$results = $query->getResultArray();
		return $results;
	}
	
	public function add($role,$email,$password,$display_name,$active,$token='',$creator=''){
		$db = \Config\Database::connect();
		
		 $req="INSERT INTO ".$this->table."(role,email,password,display_name,active,token,creator) VALUES('".$role."','".$email."','".md5($password)."','".$display_name."','".$active."','".$token."','".$creator."')";
		$query = $db->query($req);
		return $db->insertID();
	}
	
	public function edit($id,$data){
		$db = \Config\Database::connect();
		$req="update ".$this->table." set ";
		foreach($data as $col=>$val){
			$req.=$col."='".$db->escapeString($val)."',";
		}
		 $req=substr($req,0,-1);
		 $req.=" where id='".$id."'";
		$query = $db->query($req);
		return true;
	}
	
	public function activate($id,$active,$token=null){
		$db = \Config\Database::connect();
		$req="update ".$this->table." set active='".$active."'";
		if(!is_null($token)) $req.=",token='".$token."'";
		$req.=" where id='".$id."'";
		$query = $db->query($req);
		return true;
	}
	
	public function search($role=null,$display_name=null,$email=null,$active=null,$creator=null){
		/** find data related to variables **/
		$db = \Config\Database::connect();
		$req="SELECT * FROM ".$this->table." where deleted_at is NULL";
		if(!is_null($role)) $req.=" and role='".$role."'";
		if(!is_null($display_name)) $req.=" and display_name LIKE '%".$db->escapeLikeString($display_name)."%' ESCAPE '!'";
		if(!is_null($email)) $req.=" and email LIKE '%".$db->escapeLikeString($email)."%' ESCAPE '!'";		
		if(!is_null($active)) $req.=" and active='".$active."'";
		
		
		if(!is_null($creator)) $req.=" and creator='".$creator."'";
		//echo $req;
		
		$query = $db->query($req);
		$results = $query->getResultArray();
		return $results;
	}
	
	public function searchDash($page=1,$per_page=20,$role='C'){
		$db = \Config\Database::connect();
		$req="SELECT users.display_name,user_profile.* FROM ".$this->table.", user_profile where users.id=user_profile.user_id and deleted_at is NULL";
		if(!is_null($role)) $req.=" and role='".$role."'";
		
		$st=($page-1)*$per_page;
		$req.=" limit $st,$per_page";
		
		//echo $req;
		$query = $db->query($req);
		$results = $query->getResultArray();
		return $results;
	}
	public function searchDashTot($role='C'){
		$db = \Config\Database::connect();
		$req="SELECT count(*) as c FROM ".$this->table." where deleted_at is NULL";
		if(!is_null($role)) $req.=" and role='".$role."'";

		//echo $req;
		$query = $db->query($req);
		$results = $query->getResultArray();
		return $results[0]['c'];
	}
}