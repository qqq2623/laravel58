<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AdminUser extends Model
{
    protected $table = "admin_user";
	protected $primaryKey = "user_id";
	public $timestamps = false;
//	const UPDATED_AT = "add_time";

	use SoftDeletes;  //软删除必须添加这个

	public function role(){
		return $this->belongsTo(Role::class , "role_id" , "id");
	}

	/**
	 * 访问器
	 * @author 张宇<xxxxxxxxxxxxx>
	 *
	 * @param $value
	 *
	 * @return string
	 */
	public function getUserNameAttribute($value){
		return $value . "啦啦啦啦";
	}

	public function setUserNameAttribute($value) {
		$this->attributes['user_name_2'] = $value."AAAAA";

	}

}
