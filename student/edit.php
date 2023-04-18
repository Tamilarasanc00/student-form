
<?php
include ('db.php');

$id=$_GET['id'];

if(isset($_POST['save'])){

    $fname =$_POST['fname'];
   $pass =$_POST['pass'];
   $dob= $_POST['dob'];
    $age=$_POST['age'];
    $email = $_POST['email'];
    $mobile= $_POST['mobile'];








    
    $res= mysqli_query($conn, "UPDATE `student_info` SET stud_name= '$fname', password = '$pass', dob='$dob',  age = '$age', email = '$email',mobile='$mobile' WHERE id='$id' ") or die('query failed');

    if($res===TRUE){
        header("location:admin.php");
    }
    else{
        echo"error"; 
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            font-family: Calibri;
        }
        input[type="text"] {
            width: 250px;
        }
        input[type="submit"], input[type="reset"] {
            width: 77px;
            height: 27px;
            position: relative;left: 180px;
        }
        form{
            text-align: center;
            font-family: Calibri;
            font-size: 20px;
            border: 3px solid black;
            width: 600px;
            margin: 20px auto;
        }
        td {
            padding: 10px;
        }
        td:first-child {
            text-align: right;
            font-weight: bold;
        }
        td:last-child {
            text-align: left;
        }
    </style>

</head>
<body>
<center><h1>Student Form</h1></center>
    <hr>


<?php
      $select = mysqli_query($conn, "SELECT * FROM `student_info` WHERE id='$id' ") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

    <form method="post" action="" name="reg_form"  onsubmit="return validate()">
        <h2>Registration Form</h2>
        <table>
            <tr>
                <td><label>Student Name : </label></td>
                <td>
                    <input type="text" name="fname" value="<?php echo $fetch['stud_name']; ?>" placeholder="Enter your Name">
                </td>
            </tr>
           
            <tr>
                <td><label>Password: </label></td>
                <td>
                    <input type="text" size="32" name="pass" value="<?php echo $fetch['password']; ?>" id="pass"  placeholder="Ender your  digit password"pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
	
                </td>
            </tr>

             <tr>
                <td><label>Date of Birth: </label></td>
                <td>
                  
                   <input type="date" id="dob" value="<?php echo $fetch['dob']; ?>" name="dob">
                  
                </td>
            </tr>

            <tr>
                <td><label>Age: </label></td>
                <td>
                <input type="text" name="age" value="<?php echo $fetch['age']; ?>" id="age"  placeholder="Enter your Age">
                    
                </td>
            </tr>
            <tr>
                <td><label>Email Id: </label></td>
                <td>
                    <input type="text" name="email" value="<?php echo $fetch['email']; ?>" id="email" placeholder="example@gmail.com">
                </td>
            </tr>
            <tr>
                <td><label>Mobile: </label></td>
                <td>
                    <input type="text" value="<?php echo $fetch['mobile']; ?>" name="mobile" id="mobile">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="save" value="Submit">
                    

                </td>
            </tr>
        </table>
    </form>
    <center> <a href="admin.php"><button class="btn btn-success">Back</button></a></center>
</body>
</html>