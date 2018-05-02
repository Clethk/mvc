<?php
class User {

    private $name;

    function getUser($username, $password){
        //return $this->name = ucfirst($name);
        // Connect to the database:
        $dbc = mysqli_connect('localhost', 'root', '', 'sem7');
        $q = "SELECT * FROM users WHERE Username='$username'";
        $r = mysqli_query($dbc, $q);

        if(! $result =mysqli_fetch_array($r, MYSQLI_ASSOC)){
            return false;
        }

        return $result;



    }

    public function getUserDetail($user)
    {
        if($user == 'homayoon') {
            $user_details_from_db = [
                'First Name' => 'Homayoon',
                'Last Name' => 'Fayez',
                'Email' => 'mofa@easj.dk'
            ];
        } else {
            $user_details_from_db = "User [$user] does not exist";
        }

        return $user_details_from_db;
    }

}