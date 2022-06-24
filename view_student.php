<?php

include_once 'config.php';

$searchMatric = $_POST['st_matric'];
$sql = "SELECT student_matric , student_name, student_email, student_id FROM student WHERE  student_matric LIKE '%{$searchMatric}%'";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)>0)

{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<h1>Student Information</h1>";
        echo "<br>";


        echo "Student ID:".$row['student_id'];
        echo "<br>";

        $studentId = $row['student_id'];
       
        echo "Student Name:".$row['student_name'];
        echo "<br>";
        $studentName = $row['student_name'];
        echo "Student Email:".$row['student_email'];
        $studentEmail = $row['student_email'];
        echo "<br>";
        echo "Student Matric:".$row['student_matric'];
        $studentMatric = $row['student_matric'];
    }

    
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/lab3&4/update_form.php?searchMatric=',$studentMatric,'& studentName=',$studentName,'& studentEmail=',$studentEmail,'& studentId=',$studentId,' ">Update Record </a>';
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/lab3&4/delete_student.php?searchMatric=',$studentMatric,'& studentName=',$studentName,'& studentEmail=',$studentEmail,'& studentId=',$studentId,'">Delete Reord</a>';
    


}
else {
    echo "results 0";
}
?>
<br>

<br>

<?php
/*

echo "<br>";
  echo ' <a href="http://localhost/lab3&4/update_form.php?searchMatric=',$studentMatric,'& studentName=',$studentName,'& studentEmail=',$studentEmail,'& studentId=',$studentId,' ">Update Record </a>'; 
  echo ' <a href="http://localhost/lab3&4/delete_student.php?searchMatric=',$studentMatric,'& studentName=',$studentName,'& studentEmail=',$studentEmail,'& studentId=',$studentId,' ">Delete Record </a>'; 
  echo  "<br>";

*/
?>