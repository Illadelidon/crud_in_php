<?php
    require "blocks/header.php"
?>
<h1>Home</h1>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="newDB_1";

$conn=new mysqli($servername,$username,$password,$dbname);
/////////////////////////////////////////Connection to db
//if($conn->connect_error)
//{
//    die("Connection failed:".$conn->connect_error);
//}
//echo"Connection successfully\n";
//////////////////////////////////////////Create db
//$sql="CREATE DATABASE newDB";
//
//if($conn->query($sql)===TRUE){
//    echo "Database created successfully";
//}
//else{
//    echo"Error".$conn->error;
//}
/////////////////////////////////////////Create a table in db
//$sqlTable="CREATE TABLE users(
//        name VARCHAR(30) NOT NULL,
//        surname VARCHAR(30) NOT NULL PRIMARY KEY,
//        password VARCHAR(30) NOT NULL)";
//
//if($conn->query($sqlTable)===TRUE)
//{
//    echo "Table users created successfully";
//}
//else
//{
//    echo "Error".$conn->error;
//}
//
//$conn->close();
////////////////////////////////////////Add info to db
//$sql="INSERT INTO users (name,surname,password)
//    VALUES('Ivan','Ivanovich','123321')";
//if ($conn->query($sql)===TRUE)
//{
//    echo "Record created";
//}
////////////////////////////////////////
//$sqldb="CREATE DATABASE newDB_1";
//if($conn->query($sqldb)===TRUE)
//{
//    echo "Database created successfully\n";
//}
//else
//{
//    echo "Error".$conn->error;
//}
//$sqltable="CREATE TABLE users(
//        name VARCHAR(30) NOT NULL,
//        surname VARCHAR(30) NOT NULL PRIMARY KEY,
//        password VARCHAR(30) NOT NULL)";
//
//if($conn->query($sqltable)===TRUE)
//{
//    echo "Table users created successfully\n";
//}
//else
//{
//    echo "Error".$conn->error;
//}
//$sqlInfo="INSERT INTO users(name,surname,password)
//        VALUES('Ivan','Ivanovich','123321')";
//if($conn->query($sqlInfo)===TRUE)
//{
//    echo "Record created";
//}
//else
//{
//    echo "Error".$conn->error;
//}
/////////////////////////////////////////////////////Add multiple records in a table
//$sqlInfo ="INSERT INTO users(name,surname,password)
//        VALUES('Ivan','Ivanovich234','12323321');";
//$sqlInfo .="INSERT INTO users(name,surname,password)
//        VALUES('Ilya','Ivanovich345','12334321');";
//$sqlInfo .="INSERT INTO users(name,surname,password)
//        VALUES('Roman','Ivanovich123','123456321')";
//
//if($conn->multi_query($sqlInfo)===TRUE)
//{
//    echo "record created";
//}
//$conn->close();
///////////////////////////////////////////////////////Get All Users
//$sql="SELECT * FROM users";
//$result=$conn->query($sql);
//
//if($result->num_rows>0)
//{
//while ($row=$result->fetch_assoc())
//{
//    echo "<br>Name:".$row["name"] . "<br>Surname:".$row["surname"] . "<br>Password:".$row["password"];
//}
//}
/////////////////////////////////////////////////////////Update info
//$sql="UPDATE users SET name='Ivan'WHERE name='Roman'";
//
//if($conn->query($sql)===TRUE)
//{
//    echo "Record update";
//}
//$conn->close();
////////////////////////////////////////////////////////Delete info
//$sql="DELETE FROM users WHERE name='Ilya'";
//if($conn->query($sql)===TRUE)
//{
//    echo "User deleted";
//}
//$conn->close();


    require "blocks/footer.php"
?>


