<?php
session_start();
$mqsqli = new mysqli("mysql:host=localhost;dbname=ajaxdata", "root", ""); 
if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $password = md5($pass);
    $hasil = $mysqli->prepare("SELECT * FROM users WHERE EMAIL email=?");
    $hasil ->bind_param("d", $email);
    $hasil ->execute();
    $hasil ->bind_result($id, $user, $myemail $mypass);
    $hasil->fetch();
    if($mypass==password){
        echo"ok";
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $user;

    } else{
       echo "email password is wrong" 
    }
}
?>