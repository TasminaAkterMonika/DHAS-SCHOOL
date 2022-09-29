<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class shortbanner extends Sximo  {
	
	protected $table = 'shortbanner';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT shortbanner.* FROM shortbanner  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE shortbanner.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
