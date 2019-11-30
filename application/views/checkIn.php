<?php include("inc/loginheader.php"); ?>
<div class="jumbotron">
<h6 class="text-center text-bold display-3">Check In File</h6>
<?php echo anchor("users/find","Go Back",['class'=>'ml-3 mt-3 btn btn-info']); ?>
<hr>
</div>
<div class="container">
	<?php echo form_open("users/updateFileCheck", ['class' => 'form-horizontal']); ?>
	<?php if($error = $this->session->flashdata('message')):?>
		<div class="row">
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-success">
						<?php echo $error ?>
					</div>
				</div>
		</div>
	<?php endif; ?>


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

<button type="submit" name="checkbtn" value="accept" class="btn btn-primary ml-3 mt-3">ACCEPT FILE</button>
<button type="submit" name="checkbtn" value="reject" class="btn btn-primary ml-3 mt-3">REJECT FILE</button>
<button type="submit" name="checkbtn" value="sanction" class="btn btn-primary ml-3 mt-3">SANCTION FILE</button>
<?php echo anchor("users/dispatchFile","Dispatch File",['class'=>'ml-3 mt-3 btn btn-info']); ?>

<div>
<?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
