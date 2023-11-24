<?php 
    session_start();

    if (empty($_POST) or (empty($_POST["username"]) or empty($_POST["password"]))) {
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sqlVerifyUsername = "SELECT * FROM users WHERE username = '{$username}'";

    $sqlVerifyPassword = "SELECT * FROM users WHERE password = '{$password}'";

    $resVerifyUsername = $conn->query($sqlVerifyUsername) or die($conn->error);

    $rowUsername = $resVerifyUsername->fetch_object();
    $qtdUsername = $resVerifyUsername->num_rows;

    if ($qtdUsername > 0) {

        $resVerifyPassword = $conn->query($sqlVerifyPassword) or die($conn->error);
    
        $rowPassword = $resVerifyPassword->fetch_object();
        $qtdPassword = $resVerifyPassword->num_rows;

        if ($qtdPassword > 0){

            $_SESSION["username"] = $username;
            $_SESSION["name"] = $rowUsername->name;
            $_SESSION["type"] = $rowUsername->type;
            
            print "<script>location.href='dashboard.php';</script>";
        }
        else{
            print "<script>alert('Username or password is wrong');</script>";
            print "<script>location.href='index.php';</script>";
        }
    }
    else{
        print "<script>alert('Username or password is wrong');</script>";
        print "<script>location.href='index.php';</script>";
    }
?>