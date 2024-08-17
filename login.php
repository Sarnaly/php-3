<?php
 session_start();
 if(isset($_SESSION['user_login'])){
   header("location:../Project_php/index.php");
     
 }


require_once "../Project_php/admin_dbcon.php";
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
 
   $input_error=array();
   if(empty($username)){
      $input_error['username']="error";
   }
   if(empty($password)){
      $input_error['password']="error";
   }

   $username_check=mysqli_query($dbcon, "SELECT * FROM `register_form` WHERE `username`='$username'");
   if(mysqli_num_rows(  $username_check)==1){
      $rows=mysqli_fetch_assoc($username_check);
      if($rows['password']==md5($password)){
         if($rows['status']=='Active'){
            $_SESSION['user_login']=$username;
            header("location:../Project_php/index.php");
           
         }else{
            echo'
               <script>
                  alert("Your account inactive, Please at first active your account!");
                  Window.Location.href="../login_form/login.php";
               
               </script>
            ';
         }

      }else{
            echo'
               <script>
                  alert("Wrong Password!");
                  Window.Location.href="../login_form/login.php";
               
               </script>
            ';
         }

   }else{
      echo'
         <script>
            alert("Username not found!");
            Window.Location.href="../login_form/login.php";
         
         </script>
      ';
   }


} 
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
    
         
         <div class="container">
           
            <div class="text">
               Login Form
            </div>
            <form action="" method="POST" >
               <div class="data">
                  <label>Username</label>
                  <input type="text" class="<?php if(isset($input_error['username'])){echo $input_error['username'];}?>" placeholder="Username"  name="username">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" class="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>" placeholder="Password"  name="password">
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="submit">Login</button>
               </div>
              

               <div class="login" style="text-align:center; font-size: 15px;">
        <span class="signup">Don't have an account?
         <label for="check"><a style="cursor: pointer; color:crimson; text-decoration:none; font-size: 17px;" href="../Register_form/index.php">Register</a></label>
        </span>
      </div>

             
            </form>
         </div>

   </body>
</html>