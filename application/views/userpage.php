<?php include("inc/loginheader.php"); ?>
<div class="jumbotron">
<legend class="text-center"> Welcome <?php echo $this->session->userdata('username') ?> </legend>
<p class="text-center"><?php echo $this->session->userdata('email') ?></p>
</div>
<div class="container">
  <div class="row">
  <div class="col"><?php echo anchor("users/addFile","Add File",['class'=>'btn btn-success btn-lg btn-block']); ?></div>
  <div class="col"><?php echo anchor("users/dispatchFile","Dispatch File",['class'=>'btn btn-success btn-lg btn-block']); ?></div>
  <div class="col"><?php echo anchor("users/checkIn","Check In",['class'=>'btn btn-success btn-lg btn-block']); ?></div>
  <div class="col"><?php echo anchor("users/trackFile","Track My File",['class'=>'btn btn-success btn-lg btn-block']); ?></div>
</div>
  </div>
<?php include("inc/footer.php"); ?>
