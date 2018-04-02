<?php
class BaseModel
{
    public $form_data;
    public $form_msg;
    public $form_confirm;
    public $db;
    public $controller;
    public $parameters;
    public $userdata;
    protected $table;
    
    public static function all() {
        $db = new DB();
        //return $db->select('SELECT * FROM $this->table');
    }

    public static function find($id) {
        //$db = new DB();
        //return $db->select('SELECT * FROM $this->table WHERE $this->primaryKey = $id');
        return array('batata' => 'cenoura');
    }
}