<?php
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-md-12">
          <?php
          include('message.php');
          ?>
          </div>
        </div><!-- /.row -->
     </div><!-- /.container-fluid -->
    </div>
</div><!-- /.content-header -->

<?php
include('includes/script.php');
?>
<?php
include('includes/footer.php');
?>