<?php
$user_id = $_GET['id'];
include('config/dbcon.php');

$sql ="DELETE FROM user WHERE id = {$user_id}";
$query_run = mysqli_query($con, $sql);

header("Location: http://localhost/project/Admin/blog.php");

mysqli_close($con);





?>