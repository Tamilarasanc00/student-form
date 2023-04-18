<!DOCTYPE html>
<html>
<head>
    <title>Reg Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script>
        function validate() 
        {
            var fname = document.reg_form.fname;
            var pass = document.reg_form.pass;
            var dob = document.reg_form.dob;
            
            var age = document.reg_form.age;
            var email = document.reg_form.email;
            var mobile = document.reg_form.mobile;
           
           
           

            if (fname.value.length <= 0) {
                alert("Name is required");
                fname.focus();
                return false;
            }
            if (pass.value.length <= 0) {
                alert("password is required");
                pass.focus();
                return false;
            }
            if (dob.value.length <= 0) {
                alert("Date Of Birth is required");
                dob.focus();
                return false;
            }
            if (age.value<= 18) {
                alert("Age is required 18+");
                course.focus();
                return false;
            }
            if (email.value.length <= 0) {
                alert("email is required");
                email.focus();
                return false;
            }

            if (mobile.value.length <= 0) {
                alert("mobile is required");
                mobile.focus();
                return false;
            }
           
    
           
            

           
       
       
       
        }


    </script>
</head>
<body>
<center><h1>Student Form</h1></center>
    <hr>
    <form method="post" action="store.php" name="reg_form"  onsubmit="return validate()">
        <h2>Registration Form</h2>
        <table>
            <tr>
                <td><label>Student Name : </label></td>
                <td>
                    <input type="text" name="fname" placeholder="Enter your Name">
                </td>
            </tr>
           
            <tr>
                <td><label>Password: </label></td>
                <td>
                    <input type="password" size="32" name="pass" id="pass"  placeholder="Ender your Abcde@123 in 8 digit"pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
	
                </td>
            </tr>

             <tr>
                <td><label>Date of Birth: </label></td>
                <td>
                  
                   <input type="date" id="dob" name="dob">
                  
                </td>
            </tr>

            <tr>
                <td><label>Age: </label></td>
                <td>
                <input type="text" name="age" id="age"  placeholder="Enter your Age">
                    
                </td>
            </tr>
            <tr>
                <td><label>Email Id: </label></td>
                <td>
                    <input type="text" name="email" id="email" placeholder="example@gmail.com">
                </td>
            </tr>
            <tr>
                <td><label>Mobile: </label></td>
                <td>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter your Mobile No">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="save" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                    
                </td>
            </tr>
        </table>
       
    </form>
    <center> <a href="admin.php"><button class="btn btn-primary btn-sm">Admin</button></a></center>
</body>
</html>