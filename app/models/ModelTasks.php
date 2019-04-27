<?php

namespace models;

use core\Model;

class ModelTasks extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = "tasks";
    }

    public function validateTasks($tasks) {
        if (empty($tasks)) {
            $massages = 'Нет задачи';
        } else {
            return true;
        }
        return $massages;
    }

    public function addTasks($tasks) {
        $query = "INSERT INTO tasks VALUES (NULL, '" . $tasks . "')";
        $this->db->query($query);
    }

}
