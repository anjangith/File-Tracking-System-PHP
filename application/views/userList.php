<?php include("inc/header.php"); ?>
<div id="container">
<div class="jumbotron">
<h3 class="text-center display-3 text-bold"> USERS</h3>
<div class="row">
	<?php echo anchor("users/generateReports","BACK",['class'=>'ml-3 btn btn-primary']); ?>
</div>
</div>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
<th scope="col">U_ID</th>
<th scope="col">U_NAME</th>
<th scope="col">EMAIL</th>

</tr>
</thead>
<tbody>
	<?php if(count($users)):?>
		<?php foreach($users as $user): ?>
<tr class="table-active">
<td><?php echo $user->u_id; ?></td>
<td><?php echo $user->username; ?></td>
<td><?php echo $user->email; ?></td>
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
