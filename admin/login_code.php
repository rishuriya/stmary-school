<?php
session_start();
include 'security.php';
//mysqli_select_db($connection,'nischay_userdata');

if(isset($_POST['login_btn']))
{
    $name=$_POST['username'];
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register WHERE username='$email_login' AND password='$password_login'";
    echo "ma";
    $query_run = mysqli_query($connection,$query);
    $usertypes=mysqli_fetch_array($query_run);


   if($usertypes['password']=== $password_login)
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else if ($usertypes['usertype']== 'user') {
     $_SESSION['username'] = $email_login;
     header('Location: ../index.php'); 
       }
   else{
        $_SESSION['status'] = 'Email or Paswword not match' ;
        header('Location: login.php');
   }
    
}
?>