<?php

    /*$number1 = 20;
    $number2 = 30;
    $addition =  $number1 + $number2;
    echo $addition;
    */

    /*
    PostgresSQL Database connection 
    Developer: Jhon
    */
    $host = "localhost";  //127.0.0.1
    $username = "postgres"; 
    $password = "Unicesmag";
    $dbname = "beta";
    $port = "5432";

       $conn = pg_connect(
        $host,
        $username,
        $password,
        $dbname,
        $port
    );

    if(!$conn){
        die("Connection failed: ". pg_last_error());
    }else{
        echo "Connected successfully";
    }
    
    pg_close($conn);

?>