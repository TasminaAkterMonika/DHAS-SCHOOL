<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class picture extends Sximo  {
	
	protected $table = 'picture';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT picture.* FROM picture  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE picture.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
