<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MessagesModel extends Model
{
	
    protected $table = 'messages';
	protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'sender_id','msg','readed','sended_at','attachment'];	
	protected $returnType = 'array';
	
	public function getM(){
		$db = \Config\Database::connect();
		$req="SELECT distinct(user_id) FROM ".$this->table." order by sended_at DESC ";
		
		$query = $db->query($req);
		$results = $query->getResultArray();
		return $results;	
	}
}