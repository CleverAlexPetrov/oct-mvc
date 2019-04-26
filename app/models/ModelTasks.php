<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {

    /**
     *
     * @var mysqli
     */
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    }
    
    public function validateTasks($tasks) {
        if(empty($tasks)){
            $massages = 'Нет задачи';
        } else {
            return true;
        }
        return $massages;
    }

    public function addTasks($tasks) {
        $query = "INSERT INTO tasks VALUES (NULL, '".$tasks."')";
        $this->db->query($query);
    }

    public function all() {
        $query = 'SELECT * FROM tasks;';
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
}
