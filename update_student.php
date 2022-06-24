<?php

include_once 'config.php';

$stuName= $_POST['student_n'];
$stuEm= $_POST['student_e'];
$stuMat= $_POST['student_m'];
$stuId =$_POST['id'];

$sql ="UPDATE student SET student_name='$stuName' , student_email='$stuEm', student_matric=' $stuMat'  WHERE student_id ='$stuId'";
$selectsql= "SELECT student_matric , student_name, student_email, student_id FROM student WHERE  student_id LIKE '%{$stuId}%'";
$result = mysqli_query($conn, $selectsql);
if($conn->query($sql)==TRUE)
{
    
    if(mysqli_num_rows($result)>0)
    {
        echo "Record Updated Sucessfully";
    }
    else{
        echo "wrong ID has been input";
    }
}

else 
{
    echo "error";
}
?>