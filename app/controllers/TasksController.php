<?php

class TasksController extends Controller {

    public function index(){
        echo "nothing here<br>";
        echo "To get tasks list try: [/mvc/public/tasks/all]";
    }

    public function all(){

       $model = $this->model('Task');

       $tasks = $model->getTasks();

       $this->view('tasks', $tasks);

    }
}