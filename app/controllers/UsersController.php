<?php

class UsersController extends Controller{

    public function index($name = ''){
        $model = $this->model('User');
        $userName = $model->getUser($name);
        $details = $model->getUserDetail($name);

        $this->view('home/index', ['name' => $userName, 'details' => $details]);
    }
    public function login($username, $password)
    {
        $model = $this->model('User');
        $data = $model->getUser($username, $password);
        if($data){

            $this->view ('home/welcome', $data);
        } else {
            $error = ['error' => "Something's wrong with your login, please try again"];
            $this->view('login', $error );
            // echo "$username does not exist in our system";
        }


        //print_r($data);


    }

    public function signin(){

        $this->view('home/signin');

    }


















}