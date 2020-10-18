<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class HomeBuyerModel extends Model
{
	
    protected $table = 'home_buyer';
	protected $primaryKey = 'id';
    protected $allowedFields = ['request_id', 'first_name','last_name','phone','email','birthdate','def','banned'];	
	protected $returnType = 'array';
	
}