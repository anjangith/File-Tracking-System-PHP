<?php include("inc/loginheader.php"); ?>
<div class="jumbotron">
<legend class="text-center"> Welcome <?php echo $this->session->userdata('username') ?> </legend>
<p class="text-center"><?php echo $this->session->userdata('email') ?></p>

</div>
<div class="container">
<h1 class="display-3 text-center">Admin</h1>



<div class="row mt-5">
    <div class="col-6 col-md-4"><?php echo anchor("users/addUser","Add User",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>
    <div class="col-6 col-md-4"><?php echo anchor("users/newDept","Add Department",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>
    <div class="col-6 col-md-4"><?php echo anchor("users/checkFileStatus","Check File Status",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>

</div>

<div class="row mt-5">
  <div class="col-6 col-md-4"><?php echo anchor("homepage/adminlogin","Delete User",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>
  <div class="col-6 col-md-4"><?php echo anchor("homepage/adminlogin","Change Password",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>
  <div class="col-6 col-md-4"><?php echo anchor("users/generateReports","Generate Report",['class'=>'btn btn-primary btn-lg btn-block']); ?></div>

</div>

</div>
<?php include("inc/footer.php"); ?>
