<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class studentlist extends Sximo  {
	
	protected $table = 'student_details';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT student_details.* FROM student_details  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE student_details.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
