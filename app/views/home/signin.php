<?php
/**
 * Created by PhpStorm.
 * User: cecil
 * Date: 25-04-2018
 * Time: 13:26
 */

?>

<html>

<body>


<form action="http://localhost/testingphp/sessions/mvc/public/users/signinhandler" method="post">
    <fieldset>
        <legend>Login</legend>
        <input type="text" name="Username" placeholder="Username">
        <input type="password" name="Password" placeholder="Password">
        <button type="submit">Login</button>
    </fieldset>
</form>


<br><br>

<form action="signup.php" method="post">
    <fieldset>
        <legend>Sign Up</legend>
        <input type="text" name="Name" placeholder="Name">
        <input type="text" name="Phone_number" placeholder="Phonenumber">
        <input type="text" name="Adresse" placeholder="Adresse">
        <input type="text" name="Zipcode" placeholder="Zipcode">
        <input type="text" name="Email_username" placeholder="Email">
        <input type="password" name="Password" placeholder="Password">
        <button type="submit">Sign Up</button>
    </fieldset>
</form>
