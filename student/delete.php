<?php
include ('db.php');
if(isset($_GET['deleteid']))
{
$id=$_GET['deleteid'];
$sql= "delete from student_info where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:admin.php");
}
else{
    echo"ERROR DELETEDONEE";
}

}



?>