<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class event extends Sximo  {
	
	protected $table = 'event';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT event.* FROM event  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE event.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
