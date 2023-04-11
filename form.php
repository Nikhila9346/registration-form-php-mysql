<?php include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <header>Registration Form</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter your first name" required>
                </div>
                <div class="field input">
                    <label for="mname">Middle Name</label>
                    <input type="text" name="mname" placeholder="Enter your middle name" id="mname">
                </div>
                <div class="field input">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter your last name" id="lname" required>
                </div>
                <div class="field input">
                    <label for="studentid">Student ID</label>
                    <input type="text" name="id" id="id" placeholder="Enter your 10-digit student ID" pattern="([0-9]{2})([D][4][1][A])([0-9]{2}[0-9]{2})" title="Must include correct college code" required>
                </div>
                <div class="field input">
                    <label for="Emailid">Email</label>
                    <input type="text" name="emailid" id="emailid" placeholder="Enter valid email ID" required>
                </div>
                <div class="field input">
                    <label for="Phone">Mobile No.</label>
                    <input type="tel" name="mobileno" id="mobileno" placeholder="Enter a 10-digit mobile number" required>
                </div>
                <div class="field input">
                    <label for="DOB">DOB</label>
                    <input type="date" name="dob" id="dob" placeholder="select from calender" required>
                </div>
                <div class="field input">
                    <label for="college">College</label>
                    <input type="text" name="college" placeholder="Enter your college name" required>
                </div>
                <div class="address">
                    <label for="address">Address</label>
                    <textarea id="Address" name="address" rows="2" cols="32" placeholder="City, State, Country" required></textarea>
                </div>
                <div class="button-submit">
                    <input type="submit" class="button" name="submit" id="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
   if(isset($_POST['submit'])){

      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];
      $id=$_POST['id'];
      $email=$_POST['emailid'];
      $phone=$_POST['mobileno'];
      $DOB=$_POST['dob'];
      $college=$_POST['college'];
      $address=$_POST['address'];
     
      $query="INSERT INTO $tablename values('$fname','$mname','$lname','$id','$email','$phone','$DOB','$college','$address')";

      $data=mysqli_query($conn,$query);
       
        if($data){ 
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered")';
        echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Student ID,Email ID and Mobile Number should be unique")';
            echo '</script>';;
        }
   }
?>

