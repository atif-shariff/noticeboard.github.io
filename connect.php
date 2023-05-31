<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$queries ="";

$name = $_POST['name'];
$email = $_POST['email'];
$queries = $_POST['queries'];

//databaseconnection

$conn= mysqli_connect('localhost', 'root', '', 'test1');
if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(name,email,queries)
        values(?,?,?)");
    $stmt->bind_param("sss",$name, $email, $queries);
    $stmt->execute();
    echo "registration Successfully..";
    $stmt->close();
    $conn->close();
}