<?php
include('config/dbcon.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');


?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
        
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

       <!-- Main content -->
       <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <?php
          if(isset($_SESSION['status']))
          {
            echo $_SESSION['status'];
            unset($_SESSION['status']);
          }
          ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                       <th>id</th>
                        <th>fullname</th>
                        <th>email</th>
                        <th>contact</th>
                        <th>password</th>
                        <th>image</th>
                        <th>Delete</th>
                        <th>Update</th>
                        </tr>
                    
                                <?php

                                include('config/dbcon.php'); 
                                $q = "select * from user ";

                                $query = mysqli_query($con,$q);

                                while($res = mysqli_fetch_array($query)){
                                ?>
                                <tr class="text-center">
                                <td> <?php echo $res['id'];  ?> </td>
                                <td> <?php echo $res['fullname'];  ?> </td>
                                <td> <?php echo $res['email'];  ?> </td>
                                <td> <?php echo $res['contact'];  ?> </td>
                                <td> <?php echo $res['password'];  ?> </td>
                                <td>
                                <img src="<?php echo "upload/".$res['image_path'];  ?>"width="70px" alt="image"> 
                                </td>

                                <td>
                                <a href="delete.php?id=<?php echo $res['id']; ?>"class= "btn btn-danger">Delete</a>
                                </td>
                                <td>
                                <a href="menu.php?id=<?php echo $res['id']; ?>"class= "btn btn-info">Update</a>
                                </td>

                                </tr>
                                
                                <?php 
                                }
                                ?>
                                
                                </table>  

                                </div>
                                </div>

                                <script type="text/javascript">
                                
                                $(document).ready(function(){
                                $('#tabledata').DataTable();
                                }) 
                                
                                </script>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php
include('includes/script.php');

?>

    <?php
include('includes/footer.php');
?>