<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Contact us Form</title>
      <link rel="stylesheet" href="register.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      
    <div class="container">
        <div class="text">Contact us Form</div>
        <form action="#" method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="fname" required>
                 <div class="underline"></div>
                 <label for="">First Name</label>
              </div>
              <div class="input-data">
                 <input type="text" name="lname" required>
                 <div class="underline"></div>
                 <label for="">Last Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email" required>
                 <div class="underline"></div>
                 <label for="">Email Address</label>
              </div>
              <div class="input-data">
                 <input type="text" name="pnumber" required>
                 <div class="underline"></div>
                 <label for="">Phone Number</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" required></textarea>
                 <br />
                 <div class="underline"></div>
                 <label for="" >Write your message</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit" name="register">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>


<?php 
include("registerconnection.php");
?>

<?php

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['pnumber'];
    $address = $_POST['address'];
    
     
     //$query ="INSERT INTO gogreen(id,fname,lname,email,address,profession,pnumber,password,cmpassword) VALUES('$fname','$lname','$pwd','$cpwd','$profession','$email','$phone','$address')";
     $query="INSERT INTO `call`(`id`, `fname`, `lname`, `email`, `address`, `pnumber`) VALUES ('','$fname','$lname','$email','$phone','$address')";

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