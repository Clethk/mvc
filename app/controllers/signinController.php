<?php
/**
 * Created by PhpStorm.
 * User: cecil
 * Date: 25-04-2018
 * Time: 13:23
 */
class SigninController extends Controller{
    public function signin($username, $password){

        $this->view('home/signin');

    }
    public function signinhandler(){
        $username= $_GET['Username'];

    }
}