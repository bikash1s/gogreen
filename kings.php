
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form</title>
    <link rel="stylesheet" href="kings.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="lname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email"  name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number"  name="pnumber" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address"  name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Profession</span>
            <input type="text" placeholder="Enter your profession"  name="profession" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="cmpassword" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="register">
          
        </div>
        <div class="buttons">
        <a href ="index.php">Back</a>
        </div>

      </form>
    </div>
  </div>

</body>
</html>

<?php 
include("kingsconnection.php");
?>

<?php

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cmpassword'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['pnumber'];
    $address = $_POST['address'];
    
     
     //$query ="INSERT INTO gogreen(id,fname,lname,email,address,profession,pnumber,password,cmpassword) VALUES('$fname','$lname','$pwd','$cpwd','$profession','$email','$phone','$address')";
     $query="INSERT INTO `gogreen`(`id`, `fname`, `lname`, `email`, `address`, `profession`, `pnumber`, `password`, `cmpassword`) VALUES ('','$fname','$lname','$pwd','$cpwd','$profession','$email','$phone','$address')";

     $data = mysqli_query($conn,$query);

     if($data){
      //echo "Data Inserted into Database";
      
   

       echo'<script type="text/javascript"> alert("your data is successfully upload")</script>';
       echo '<script>window.location="index.php"</script>';

   }
   else{
     echo'<script type="text/javascript"> alert("your data is not upload")</script>';
   }
  
}

?>