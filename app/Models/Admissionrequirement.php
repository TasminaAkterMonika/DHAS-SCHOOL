<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class admissionrequirement extends Sximo  {
	
	protected $table = 'adrequirement';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT adrequirement.* FROM adrequirement  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE adrequirement.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
