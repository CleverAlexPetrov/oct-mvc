<?php

namespace models;

namespace models;

use core\Model;
use core\Controller;
use mysqli;

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

    public function updateTasks($task_id) {
        $query = "INSERT INTO `tasks` (`id`, `name`) VALUES (NULL, '$task_id');";
	$result = $this->db->query($query);
        //TODO запись и вычитание из БД
    }

    

    public function editTasks($tasks) {
        $query = "UPDATE tasks SET name = '$tasks' WHERE id = '44'";
        $this->db->query($query);
    }

}
