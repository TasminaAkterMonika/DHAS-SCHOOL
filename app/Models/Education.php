<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class education extends Sximo  {
	
	protected $table = 'education';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT education.* FROM education  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE education.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
