<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class program extends Sximo  {
	
	protected $table = 'program';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT program.* FROM program  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE program.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
