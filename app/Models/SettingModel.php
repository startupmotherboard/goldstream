<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class SettingModel extends Model
{
    protected $table = 'setting';
	protected $primaryKey = 'id';
    protected $allowedFields = ['meta_key', 'meta_value'];
	protected $returnType = 'array';
	
	public function getByMetaKey(){
		$res=array();
		$all=$this->findAll();
		foreach($all as $k=>$v){
			$res[$v['meta_key']]=$v['meta_value'];
		}
		return $res;
	}
	
}