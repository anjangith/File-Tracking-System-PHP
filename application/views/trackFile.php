<?php include("inc/loginheader.php"); ?>
<div id="container">
<div class="jumbotron">
<h3 class="text-center display-3 text-bold">TRACK FILE</h3>
<?php echo anchor("users/find","GO BACK",["class"=>"btn btn-primary"]); ?>

</div>
<div class="container">
<div class="row">
<table class="table table-hover">
<thead>
<tr>
<th scope="col">User Name</th>
<th scope="col">File Name</th>
<th scope="col">Sender Department</th>
<th scope="col">Receiver Department</th>
<th scope="col">Remark</th>
<th scope="col">Dispatch Status</th>
<th scope="col">Receive Status</th>
<th scope="col">Current Location of File</th>
<th scope="col">File Status</th>
<th scope="col">DATE & TIME</th>
</tr>
</thead>
<tbody>
	<?php if(count($files)):?>
		<?php foreach($files as $file): ?>
<tr class="table-active">
<td><?php echo $file->username; ?></td>
<td><?php echo $file->filename; ?></td>
<td><?php echo $file->sender; ?></td>
<td><?php echo $file->receiver; ?></td>
<td><?php echo $file->remark; ?></td>
<td><?php echo $file->dispatchstatus; ?></td>
<td><?php echo $file->receivestatus; ?></td>
<td><?php echo $file->curlocation; ?></td>
<td><?php echo $file->filestatus; ?></td>
<td><?php echo $file->time; ?></td>
</tr>
<?php endforeach;?>
<?php else:?>
	<tr><td>No Records Found</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
</div>
<?php include("inc/footer.php"); ?>
