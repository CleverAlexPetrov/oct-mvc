<?php

namespace controllers;

use core\Controller;
use models\ModelTasks;

class ControllerTasks extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelTasks();
    }

    public function action_index() {
        $this->view->tasks = $this->model->all();
        $this->view->render('tasks_index_view');
    }

    public function action_create() {
        $this->view->render('tasks_create_view');
    }

    public function action_add() {
        $tasks = filter_input(INPUT_POST, 'tasks');
        $massege = $this->model->validateTasks($tasks);
        if ($massege === true) {
            $this->model->addTasks($tasks);
            header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/tasks');
        } else {
            $this->view->error = $massege;
            $this->view->render('tasks_create_view');
        }
    }

    public function action_delete() {
        $tasks = filter_input(INPUT_POST, 'deleteTaskId');
        $this->model->deleteTasks($tasks);
        header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/tasks');
    }

    public function action_edit() {
        $task_id = filter_input(INPUT_POST, 'editTaskId');
        $this->model->updateTasks($task_id);
        $this->view->render('tasks_edit_view');
    }

    public function action_save() {
        $tasks = filter_input(INPUT_POST, "new_task");
        $this->model->editTasks($tasks);
        $task = $this->model->updateTasks($task_id);
        var_dump($task);
        header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/tasks');
    }

}
