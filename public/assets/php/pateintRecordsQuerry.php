<?php

$conn="";

try {

$hostname = "localhost";
$dbname="project";
$username="root";
$password="";

$conn= new PDO("mysql:host=$hostname; dbname=project",
        $username,$password
        
        
);

$conn->setAttribute(PDO::ATTR_ERRMODE,  
PDO::ERRMODE_EXCEPTION); 

} catch(PDOException $e) { 
    echo "Connection failed: " 
        . $e->getMessage(); 
} 




// $con=mysqli_connect($hostname,$username,$password,$database);

// $result=mysqli_query($con,"SELECT * FROM patients");
// $rows =array();

// $num_rows=mysqli_num_rows($result);

// while ($row=mysqli_fetch_assoc($result)){
//     $rows=$row;
// }

?>