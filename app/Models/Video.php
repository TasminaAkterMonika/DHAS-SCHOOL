<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class video extends Sximo  {
	
	protected $table = 'video';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT video.* FROM video  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE video.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
