<?php include("Connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">

        <title>PHP CRUD Operations</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST"> 

            <div class="title">
                REGISTRATION FORM
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

           
            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
              <select class="selectbox" name="gender" required>
                <option value="">Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
              </select>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea name="address" required></textarea>
            </div>

            <div class="input_field">
                <label>Comment</label>
                <textarea name="comment"></textarea>
            </div>

            <div class="input_field terms">
             <label class="check">
                 <input type="checkbox" required>
                 <span class="checkmark"></span>
             </label>
             <p>Please Check this block for confirmation.</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
        </div>
            </form>
        </div>
    </body>
</html>


<?php
   if($_POST['submit'])
   {
      $fname      = $_POST['fname'];
      $lname      = $_POST['lname'];
      $email      = $_POST['email'];
      $password   = $_POST['password'];
      $conpassword = $_POST['conpassword'];
      $gender     = $_POST['gender'];
      $address    = $_POST['address'];
      $comment    = $_POST['comment'];
     

       $query= "INSERT INTO tableform (fname,lname,email,password,conpassword,gender,address,comment) values('$fname','$lname','$email','$password','$conpassword','$gender','$address','$comment')";
       $data= mysqli_query($conn,$query);

       if($data)
       {
           echo "Data Inserted";
       }
       else{
           echo "Failed";
       }
    }

   ?>