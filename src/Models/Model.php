<?php
namespace App\Models;

use App\DB;

class Model {
    protected static $table;

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id']);
        if(isset($this->id)){
            $db->update(static::$table, $fields, $this->id);
            
        }else{
            $db->insert(static::$table, $fields);
        }
        
    }
    public static function find($id){
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }
    public function delete(){
        $db = new DB();
        return $db->delete(static::$table,$this->id);
    }
}