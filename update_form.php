
<?php 

$searcMatric = $_GET['searchMatric'];
$namee = $_GET['studentName'];
$email = $_GET['studentEmail'];
$id = $_GET['studentId'];

?>

    <h2>Update Student Record</h2>
    <form action="http://localhost/lab3&4/update_student.php" method="post">
			
        <p>
                    <label for="Name">Name:</label>
                    <br>
                    <input type="text" name="student_n" id="student_n" value="<?php
                    echo $namee
                    ?>">
                    
        </p>
             
        
                    
        <p>
                    <label for="Email">Email:</label>
                    <br>
                    <input type="text" name="student_e" id="student_e"value="<?php
                    echo $email
                    ?>">
                    </p>
                   
                </p>
                <p>
                    <label for="Matric">Matric:</label>
                    <br>
                     <input type="text" name="student_m" id="student_m" value="<?php
                     echo $searcMatric
                    ?>">
                     <br>
                     </p>
                     <p>

                        
                        <br>
                         <input type="hidden" name="id" id="id"  value="<?php
                     echo $id
                    ?>">
                         <br>
                     </p>
                    
        
        
                    <input value="Update" type="submit" >
                </form>
