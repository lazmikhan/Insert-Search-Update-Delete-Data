<?php

include_once 'config.php';

$idNum = $_GET['studentId'];
$sql= "DELETE FROM student WHERE student_id ='$idNum'";

if($conn->query($sql)==TRUE)
{
    echo "<h2> Student Record deleted uccessfully</h2>";
}

else {
    echo "error";
}
?>