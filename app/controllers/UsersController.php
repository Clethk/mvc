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
            echo "Welcome " .$data['Username'];

        } else {
            echo "$username does not exist in our system";
        }


        //print_r($data);


    }

    public function signin(){

        $this->view('home/signin');

    }
    public function signinhandler(){
        $username= $_POST['Username'];
        $password = $_POST['Password'];
        $this->login($username, $password);

    }

















}