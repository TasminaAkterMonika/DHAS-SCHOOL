<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class admissionrequest extends Sximo  {
	
	protected $table = 'admission_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT admission_request.* FROM admission_request  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE admission_request.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
