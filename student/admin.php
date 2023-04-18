<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title> Admin</title>
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student.no</th>
      <th scope="col">Student Name</th>
      <th scope="col">Password</th>
      <th scope="col">Date od Birth</th>
      <th scope="col">Age</th>
      <th scope="col">Email id</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <?php
      include ('db.php');
      
      $res=mysqli_query($conn,"SELECT * from student_info ORDER BY id ASC ");
   
      
      while($row=mysqli_fetch_array($res)) {
        echo'
  <tbody>
    <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['stud_name'].'</td>
      <td>'.$row['password'].'</td>
      <td>'.$row['dob'].'</td>
      <td>'.$row['age'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['mobile'].'</td>
      <td><a href="edit.php?id='.$row['id'].'"><button class="btn btn-primary">Edit</button></a></td>
      <td><a href="delete.php?deleteid='.$row['id'].'"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    
  </tbody>';
      }
      ?>
</table>
</body>
</html>