<?php
class Controller {

    public function model($model)
    {
        //Todo: error handling
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
       require_once '../app/views/'. $view . '.php';
    }
}