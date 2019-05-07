<?php

namespace models;

use core\Model;

use core\Controller;

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

    public function deleteTasks($task) {
        $id = $task;
        $query = "DELETE FROM tasks WHERE id = '$id'";
        $this->db->query($query);
    }
    
    public function idTasks($task) {
        var_dump($task);
        return $task;
    }
    
    public function editTasks($tasks) {
        $id = $task;
        $query = "UPDATE tasks SET name = '$tasks' WHERE id = '41'";
        $this->db->query($query);
    }

}
