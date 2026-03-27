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

    //encriptar
    $enc_pass = md5($pswd);

    //query to insert into sql
    $sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, pasword) 
    VALUES ('$f_name', '$l_name', '$mail', '$phone', '$enc_pass')";

    //execute query
    pg_query($sql);
    //email 
    $check_email = "SELECT email FROM users WHERE email = '$mail'";
    $res_email = pg_query($local_conn, $check_email);

    if (pg_num_rows($res_email) > 0) {
        echo "Error: El correo electrónico '$mail' ya está registrado. Por favor, use uno diferente.\n";
        exit();
    }
?>