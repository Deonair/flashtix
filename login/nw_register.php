<?php
$conn = new PDO("mysql:host=localhost;dbname=ajaxdata", "root", ""); 
// input
$user = $_GET['user'];
$email = $_GET['email'];
$password = $_GET['Pwd'];


$
// prepare SQL
$sql = "INSERT INTO users(user, email,password) VALUES (:user,:email,:pwd)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":user",$user);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":password",$password);
//executing the query
$stmt->execute(); 
?>
