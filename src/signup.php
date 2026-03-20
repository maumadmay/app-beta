<?php
    //otra forma
    //require('../config/database.php'); 
    require('../config/database.php');

    //get data 
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $mail   = $_POST['email'];
    $phone  = $_POST['mphone'];
    $pswd   = $_POST['passwd']; 

    //query to insert into sql
    $sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, pasword) 
    VALUES ('$f_name', '$l_name', '$mail', '$phone', '$pswd')";

    //execute query
    pg_query($sql);
?>