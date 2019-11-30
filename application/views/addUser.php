<?php include("inc/loginheader.php"); ?>
<div id="container">
	<?php echo form_open("users/createNewUser", ['class' => 'form-horizontal']); ?>
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
	<h6 class="text-center text-bold display-3">Add User</h6>
	<hr>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label class="col-md-3 ml-3 control-label">Name</label>
	<div class="col-md-9">
		<?php echo form_input(['name' => 'name','class'=>'form-control','placeholder'=>'Nick124','value'=>set_value('studentname')]); ?>
	</div>
</div>
</div>
</div>
<div class="col-md-6">
	<?php echo form_error('name','<div class="text-danger ml-3">','</div>');
	?>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label class="col-md-3 ml-3 control-label">Email</label>
	<div class="col-md-9">
		<?php echo form_input(['name' => 'email','class'=>'form-control','placeholder'=>'as273863@gmail.com','value'=>set_value('user_name')]); ?>
	</div>
</div>
</div>
</div>
<div class="col-md-6">
	<?php echo form_error('email','<div class="text-danger ml-3">','</div>');
	?>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label class="col-md-3 ml-3 control-label">Department</label>
	<select class="col-md-9 ml-3" name="college_id">
			<option value="">Select</option>
			<?php if(count($depts)):?>
				<?php foreach($depts as $dept):?>
						<option value=<?php echo $dept->d_id?>><?php echo $dept->d_name?></option>
				<?php endforeach; ?>
				<?php endif;?>
	</select>
</div>
</div>
</div>
<div class="col-md-6">
	<?php echo form_error('college_id','<div class="text-danger ml-3">','</div>');
	?>
</div>


<div class="row">
<div class="col-md-12">
<dicv class="form-group">
	<label class="col-md-12 control-label">Password</label>
	<div class="col-md-12">
		<?php echo form_password(['name' => 'password','class'=>'form-control','placeholder'=>'Password']); ?>
	</div>
</div>
</div>
</div>
<div class="col-md-12">
	<?php echo form_error('password','<div class="text-danger">','</div>');
	?>
</div>

</div>
<button type="submit" class="btn btn-primary ml-3 mt-3">ADD</button>
<?php echo anchor("users/adminpage","BACK",['class'=>'ml-3 mt-3 btn btn-secondary']); ?>
<div>
<?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
