<?php
    
    if(isset($_REQUEST['submit'])){
    //print_r($_GET);

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
    }else{
        if($username == $password){
            echo "Valid user";
        }else{
            echo "Invalid user";
        }
    }else{
    }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method = "post" action = "" enctype="multipart/form-data"
    Username: <input type="text" name = "name" value=""><?php if(isset($_POST['username'])){echo $username;}?
    Password: <input type="text" name="password" value=""><br>
    <input type="submit" name= "submit" value="Submit">
</body>
</html>