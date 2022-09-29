<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class upevent extends Sximo  {
	
	protected $table = 'upevent';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT upevent.* FROM upevent  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE upevent.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
