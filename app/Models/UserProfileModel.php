<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UserProfileModel extends Model
{
	
    protected $table = 'user_profile';
	protected $primaryKey = 'id';
    protected $allowedFields = [ 'user_id','first_name','last_name','email','mobile','phone','adr1','province','city','zip','adr2','birthdate','image'];
	protected $returnType = 'array';

}