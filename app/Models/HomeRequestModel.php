<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class HomeRequestModel extends Model
{
	
    protected $table = 'home_request';
	protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'city','bedrooms','price_range','square','property_type','home_type','preferences','details','banned'];	
	protected $returnType = 'array';
	
}