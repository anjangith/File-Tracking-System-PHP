<?php include("inc/loginheader.php"); ?>
<div id="container">
	<?php echo form_open("users/createNewDept", ['class' => 'form-horizontal']); ?>
	<?php if($error = $this->session->flashdata('message')):?>
		<div class="row">
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-success">
						<?php echo $error ?>
					</div>
				</div>
		</div>
	<?php endif; ?>
	<div class="jumbotron">
	<h6 class="text-center text-bold display-3">Add Department</h6>
	<hr>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label class="col-md-3 ml-3 control-label">Department</label>
	<div class="col-md-9">
		<?php echo form_input(['name' => 'department','class'=>'form-control','placeholder'=>'as273863@gmail.com','value'=>set_value('user_name')]); ?>
	</div>
</div>
</div>
</div>
<div class="col-md-6">
	<?php echo form_error('department','<div class="text-danger ml-3">','</div>');
	?>
</div>



</div>
<button type="submit" class="btn btn-primary ml-3 mt-3">ADD</button>
<?php echo anchor("users/adminpage","BACK",['class'=>'ml-3 mt-3 btn btn-secondary']); ?>
<div>
<?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
