<?php

class UserModel extends BaseModel {
    function __construct() {
        $this->table = "Users";
        $this->primaryKey = "UserId";
    }
    function __destruct() {
        $this->table = null;
        $this->primaryKey = null;
    }
}

?>