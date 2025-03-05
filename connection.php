<?php 
  
    
    $conn = new mysqli('localhost', 'root', '', 'database1');

    if($conn->connect_error){
        die("invalid credentials".$conn->connect_error);
    }
    echo " ";
    
    ?>