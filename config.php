

<?php 
$conndb = new mysqli('localhost', 'root','');
//check connection

if($conndb->connect_error)
{
die("ERROR: Could not connect.");
}
$dbsql = "CREATE DATABASE IF NOT EXISTS mydatabase";


$conn = new mysqli('localhost', 'root','','mydatabase');
$sql='CREATE TABLE IF NOT EXISTS student(
    student_id int not null auto_increment,
    student_name varchar(255),
    student_email varchar(255),
    student_matric varchar(255),
    primary key (student_id),
    unique(student_matric)
    );';
   
?>