<?php
error_reporting(0);
session_start();
include('config/dbcon.php');

if(isset($_POST['adduser']))

{

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $image_path=$_POST['image_path'];
   
    

    

    


        $admin_query="INSERT INTO user(fullname,email,contact,password,image_path)VALUES
        ('$fullname','$email','$contact','$password','$image_path')";
         $admin_query_run = mysqli_query($con, $admin_query);

        if($admin_query_run){
          move_img_file($_FILES["image_path"]["tmp_name"], "upload/".$_FILES["image_path"]["name"]);
          $_SESSION['Status']="Registration Sucessfull!";
          }
  
}
   if(isset($_POST['updateuser']))

{
    $user_id = $_POST['user_id'];

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $image_path=$_POST['image_path'];

    $query = "UPDATE user SET fullname='$fullname',email='$email',contact='$contact',password='$password',image_path='$image_path' WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);
   
   if($query_run)
   {
    move_img_file($_FILES["image_path"]["tmp_name"], "upload/".$_FILES["image_path"]["name"]);
    $_SESSION['status']="Updating Sucessfull!";
    header("Location:blog.php");
    }
    else
    {
      $_SESSION['status']="Updating  failed!";
      header("Location:blog.php");
    }
  }

?>