<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";

	public function adminUser(){
		return $this->hasMany(AdminUser::class , "role_id" , "id");

//		return $this->belongsToMany(AdminUser::class , "role_id" , "id");
	}

}
