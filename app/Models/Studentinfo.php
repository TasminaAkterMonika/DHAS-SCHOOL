<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class studentinfo extends Sximo  {
	
	protected $table = 'studentinfo';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT studentinfo.* FROM studentinfo  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE studentinfo.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
