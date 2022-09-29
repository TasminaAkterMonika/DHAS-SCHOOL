<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class project extends Sximo  {
	
	protected $table = 'project';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT project.* FROM project  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE project.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
