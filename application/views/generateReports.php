<?php include("inc/loginheader.php"); ?>
<div class="container">
<div class="jumbotron">
<h1 class="display-4">Generate Reports</h1>
<?php echo anchor("users/adminpage","BACK",['class'=>'ml-3 btn btn-primary']); ?>
</div>
<div class="row">
  <div class="col"><?php echo anchor("users/userList","User List",['class'=>'ml-3 mt-3 btn btn-primary']); ?></div>
  <div class="col"><?php echo anchor("users/sanctionList","Sanctioned File",['class'=>'ml-3 mt-3 btn btn-success']); ?></div>
  <div class="col"><?php echo anchor("users/rejectedFile","Rejected File",['class'=>'ml-3 mt-3 btn btn-primary']); ?></div>
  <div class="col"><?php echo anchor("users/processedFile","Processing File",['class'=>'ml-3 mt-3 btn btn-success']); ?></div>
</div>
</div>
<?php include("inc/footer.php"); ?>
