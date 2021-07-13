<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email = $_POST['email'];
    $password =$_POST['password'];

    $log_query = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
    $log_query_run = mysqli_query($con, $log_query);
   
    if(mysqli_num_rows($log_query_run)>0)
    {
        foreach($log_query_run as $row){
            $user_id = $row['id'];
            $user_fullname = $row['fullname'];
            $user_email = $row['email'];
            $user_contact = $row['contact'];
            
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            '$user_id' =>$user_id,
            '$user_fullname' =>$user_fullname,
            '$user_email' =>$user_email,
            '$user_contact' =>$user_contact
            


        ];
 
        $_SESSION['status'] = "login sucessfully";
        header('Location: index.php');
    }


    else
    {
            $_SESSION['status'] = "invalid email or passworrd";
        header('Location: login.php');
    }
}
?>