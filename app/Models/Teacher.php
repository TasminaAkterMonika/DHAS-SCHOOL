<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class teacher extends Sximo  {
	
	protected $table = 'teacher';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT teacher.* FROM teacher  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE teacher.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
