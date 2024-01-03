
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP CRUD OPERATION</title>

</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname">
            </div>
            <div class="input_field">
                <label>Password</label>
                <input type="Password" class="input" name="password">
            </div>
            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword">
            </div>
            <div class="input_field">
               <label>Gender</label>
               <div class="custom_select">
                   <select name="gender">
                   <option>Select</option>
                   <option>Male</option>
                   <option>Female</option>
               </select>
               </div>
            </div>

            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Phone</label>
                <input type="text" class="input" name="phone">
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address"></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree with terms and conditions</p>
            </div>
        <div class="input_field">
            <input type="submit" value="Register" class="btn" name="register">
        </div>

        </div>
    </form>
    </div>
</body>
</html>

<?php include("connection.php");
?>

<?php
if($_POST['register']){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
     
     $query ="INSERT INTO form VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";

     $data = mysqli_query($conn,$query);

     if($data){
         //echo "Data Inserted into Database";
         
      

          echo'<script type="text/javascript"> alert("your data is successfully upload")</script>';
          echo '<script>window.location="race.php"</script>';

      }
      else{
        echo'<script type="text/javascript"> alert("your data is not upload")</script>';
      }
     
}

?>


