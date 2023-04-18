<?php

include ('db.php');

if(isset($_POST['save']))
{

   $fname =$_POST['fname'];
   $pass =$_POST['pass'];
   $dob= $_POST['dob'];
    $age=$_POST['age'];
    $email = $_POST['email'];
    $mobile= $_POST['mobile'];

   
   

  
    $sql= "insert into student_info (stud_name,password,dob,age,email,mobile)values('$fname','$pass','$dob','$age','$email','$mobile')";
     if($conn->query($sql) === TRUE)
     {
        header('location:index.php');
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
  ?>