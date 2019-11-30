<?php include("inc/loginheader.php"); ?>
<div id="container">
	<?php echo form_open("users/postDispatchFile", ['class' => 'form-horizontal']); ?>
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
	<h6 class="text-center text-bold display-3">Dispatch File</h6>
	<hr>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label class="col-md-3 ml-3 control-label">File</label>
	<select class="col-md-9 ml-3" name="file_id">
			<option value="">Select</option>
			<?php if(count($files)):?>
				<?php foreach($files as $file):?>
						<option value=<?php echo $file->f_id?>><?php echo $file->f_name?></option>
				<?php endforeach; ?>
				<?php endif;?>
	</select>
</div>
</div>
</div>
<div class="col-md-6">
	<?php echo form_error('file_id','<div class="text-danger ml-3">','</div>');
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
<div class="form-group">
<label class="col-md-3 ml-3 control-label">Remarks</label>
      <textarea class="form-control" id="remarks" name="remarks" rows="2"></textarea></div>
<div class="col-md-6">
	<?php echo form_error('remarks','<div class="text-danger ml-3">','</div>');
	?>
</div>



</div>
<button type="submit" class="btn btn-primary ml-3 mt-3">ADD</button>
<?php echo anchor("users/find","BACK",['class'=>'ml-3 mt-3 btn btn-secondary']); ?>
<div>
<?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
