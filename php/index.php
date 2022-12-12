<?php
include("connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo $name, $email, $message;
 
$sql = $conn->prepare("INSERT INTO caique(nome, email, mensagem) values ('$name','$email', '$message');"); 

$sql->execute();

header('location: ../index.html')
?>