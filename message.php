<?php

if(isset($_SESSION['status']))
{
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Invalid</strong> Password or Email .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
unset($_SESSION['status']);

}
?>

