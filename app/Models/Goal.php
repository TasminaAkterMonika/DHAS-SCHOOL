<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class goal extends Sximo  {
	
	protected $table = 'goal';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT goal.* FROM goal  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE goal.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
