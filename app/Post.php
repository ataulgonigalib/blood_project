<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post_tb' ;
    public static function getUserName($user_id){
        $model= Users::where('id',$user_id)->first();
        if($model){
        return $model->email;
        }
        return "";
    }
}
