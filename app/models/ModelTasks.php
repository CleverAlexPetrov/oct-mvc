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
        $query = $task;
        return $query;
    }
    
    public function editTasks($tasks,$task) {
        $id = $task;
        $query = "UPDATE tasks SET name = '$tasks' WHERE id = '$id'";
        $this->db->query($query);
    }

}
