<?php
session_start();
include('includes/header.php');
?>

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>Login form</h5>
            
                    </div>
                    <div class="card-body" >
                    <?php
                         include('message.php');
                             ?>
                        <form action="logincode.php" method="POST">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Emaail">

                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="submit" name="login_btn" value="login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>