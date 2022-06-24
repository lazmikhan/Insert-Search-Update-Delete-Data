<?php
include_once 'config.php';

$Name =$_POST['stud_name'];
$Email=$_POST['stud_email'];
$Matric =$_POST['stud_matric'];
$sql = "INSERT INTO student ( student_name,student_matric,student_email) VALUES ('$Name','$Matric',
'	$Email')";
if(mysqli_query($conn,$sql))
{
    echo "<h2> Data Stored in Database Sucessfully</h2>";

    echo "Name:".$Name ;
    echo "<br>";
    echo "Email:".$Email;
    echo "<br>";
    echo "Matric:".$Matric;
}
else {
    echo "error". mysqli_error($conn);
}

?>