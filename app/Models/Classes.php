<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class classes extends Sximo  {
	
	protected $table = 'class';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT class.* FROM class  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE class.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
