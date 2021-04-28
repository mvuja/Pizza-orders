<?php 

    // connect to database (MySQLi(using) or PDO)
    $conn = mysqli_connect('localhost', 'vuja', 'vuja1234', 'vuja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>