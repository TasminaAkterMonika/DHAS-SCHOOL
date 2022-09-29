<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class advisory extends Sximo  {
	
	protected $table = 'advisory';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT advisory.* FROM advisory  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE advisory.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
