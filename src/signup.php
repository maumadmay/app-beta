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

    //rama 1
    $check_email = "SELECT email FROM users WHERE email = '$mail'";
    $res_email = pg_query($local_conn, $check_email);

    if (pg_num_rows($res_email) > 0) {
        echo "Error: El correo electrónico '$mail' ya está registrado. Por favor, use uno diferente.\n";
        exit();
    }

    //telefono 
    $check_phone = "SELECT mobile_phone FROM users_model WHERE mobile_phone = '$m_phone'";
    $res_phone = pg_query($local_conn, $check_phone);

    if (pg_num_rows($res_phone) > 0) {
        echo "Error: El número de celular '$m_phone' ya está registrado en nuestro sistema."; 
        exit();
    }

    $res_local = pg_query($local_conn, $sql); 
    //pg_query($sql);
?>