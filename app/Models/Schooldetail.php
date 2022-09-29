<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class schooldetail extends Sximo  {
	
	protected $table = 'schooldetail';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT schooldetail.* FROM schooldetail  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE schooldetail.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
