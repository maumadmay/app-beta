<?php
    //Local atabase config
    $LOCAL_HOST     = '127.0.0.1'; //localhost
    $LOCAL_DBNAME   = 'app_beta';
    $LOCAL_USERNAME = 'postgres';
    $LOCAL_PASSWORD = 'unicesmag';
    $LOCAL_PORT     = '5432';
    
    //Supabase database config
    $SUPA_HOST      = '';
    $SUPA_DBNAME    = '';
    $SUPA_USERNAME  = '';
    $SUPA_PASSWORD  = '';
    $SUPA_PORT      = '';

    $data_connection = "
        host     = $LOCAL_HOST
        dbname   = $LOCAL_DBNAME
        user     = $LOCAL_USERNAME
        password = $LOCAL_PASSWORD
        port     = $LOCAL_PORT
    ";

    $conn = pg_connect($data_connection);
    if(!$conn){
        echo "Error: Unable to connect to database...";
        exit();
    }else{
        echo "Satisfactory connecction...";
    }
    
    /*
    echo "<font size = 40 <b>Hola, bienvenido </b> </font>";
    $num1 = 10;
    $num2 = 20;
    $add = $num1 + $num2;
    echo "<br>";
    echo "<font color = 'RED' <b>The result is = </b> </font>". $add;
    if($num1>$num2){
        echo "<br>You win";
    }else{
        echo "<br>You lose";
    }*/
?>