<?php include("inc/header.php"); ?>
<div id="container">
<div class="jumbotron">
<h3 class="text-center display-3 text-bold"> PROCESSING FILE</h3>
<div class="row">
	<?php echo anchor("users/generateReports","BACK",['class'=>'ml-3 btn btn-primary']); ?>
</div>
</div>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
<th scope="col">FILE_ID</th>
<th scope="col">FILE_NAME</th>
<th scope="col">SENDER</th>
<th scope="col">RECEIVER</th>
</tr>
</thead>
<tbody>
	<?php if(count($files)):?>
		<?php foreach($files as $file): ?>
<tr class="table-active">
<td><?php echo $file->f_id; ?></td>
<td><?php echo $file->filename; ?></td>
<td><?php echo $file->sender; ?></td>
<td><?php echo $file->receiver; ?></td>

</tr>
<?php endforeach;?>
<?php else:?>
	<tr><td>No Records Found</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
<?php include("inc/footer.php"); ?>
