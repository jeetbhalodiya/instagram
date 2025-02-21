<?php 
    $host = 'localhost';
    $db = 'instagram';         // Database name
    $user = 'root';            // MySQL user 
    $password = '';  // MySQL password for root user

    $conn = new mysqli($host, $user, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

