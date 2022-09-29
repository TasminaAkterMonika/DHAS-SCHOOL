<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class managing extends Sximo  {
	
	protected $table = 'managing';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT managing.* FROM managing  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE managing.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
