<?php
error_reporting(0);
session_start();
include('config/dbcon.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

$fullname = $_GET['fullname'];
$email   =  $_GET['email'];
$contact = $_GET['contact'];
$password = $_GET['password'];
$image_path = $_GET['image_path'];

?>

         

<link rel="stylesheet" href="assets/dist/css/style.css">


          

<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <form action="code.php" method="POST">

 <div class="modal-body">

 <?php
 if(isset($_GET['id']))

 {

    $user_id = $_GET['id'];
    $query ="SELECT * FROM user WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)

    {
        foreach($query_run as $row)
    {
  
  ?>
  <input type="hidden" name="user_id" value="<?php echo$row['id']?>">

<div class="form-group">
         <label for="">Full Name</label>
         <input type="text" name="fullname" value="<?php echo $row['fullname'];?>" class="form-control" placeholder="fullname">
     </div>
 
 <div class="form-group">
         <label for="">Full Name</label>
         <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control" placeholder="email">
     </div>

     <div class="form-group">
         <label for="">Contact</label>
         <input type="text" name="contact" value="<?php echo $row['contact']; ?>" class="form-control" placeholder="contact">
     </div>

     <div class="form-group">
         <label for=""></label>
         <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="password">
     </div>

     <div class="form-group">
         <label for="">Image</label>
         <input type="file" name="image" value="<?php echo $row['image_path']; ?>" class="form-control" placeholder="image_path">
     </div>
<?php

    }
}
else {
echo "not found";
}

}      
  

 ?>

     <div class="modal-footer">
     <input class="btn btn-primary" type="submit"  name="updateuser" value="Update">
     </div>
 </div>		
 </form>
</div>		
 </div>
 </div>


 </div><!-- /.col -->
         
       </div><!-- /.row -->
    </div><!-- /.container-fluid -->
   </div>
</div><!-- /.content-header -->
<?php

include('includes/footer.php');
?>