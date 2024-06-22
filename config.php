
<?php
//error handling 
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

try{
    $conn = mysqli_connect('localhost','ddbb','12121212','mydb_db');
    
    /*if(!$conn){
        echo "connection failed" . mysqli_connect_error();
    }*/
    /*else{
        echo "connection successful";
    }   */
}
catch(Exception $e){
    echo 'The Error: ' . $e-> getMessage(); 
}
?>