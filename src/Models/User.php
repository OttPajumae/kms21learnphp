<?php
namespace App\Models;

class User extends Model {
    protected static $table="users";

    public static function auth(){
        if(isset($_SESSION['userid'])){
           return self::find($_SESSION['userid']);
        } else{
            return false;
        }
    }
}