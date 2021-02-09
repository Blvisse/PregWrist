<?php

$hostname = "localhost";
$database="project";
$username="root";
$password="";


$con=mysqli_connect($hostname,$username,$password,$database);

$result=mysqli_query($con,"SELECT * FROM patients ");
$row = mysqli_fetch_array($result);

$num_rows=mysqli_num_rows($result);


?>