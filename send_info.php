<?php
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(trim($name)==""){
        echo "Field is empty";
    }
    else if(strlen(trim($name))<=2)
    {
        echo "Name cannot be less than 2 characters";
    }
    else
    {
        // echo "<h1>Info</h1>";
        // foreach($_POST as $key=>$value)
        // {
        //     echo "<p>$value</p>";
        // }
        header('Location:index.php');
        exit;
    }