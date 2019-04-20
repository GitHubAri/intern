<!DOCTYPE html>
<html>
<head>
	<title>View Comments</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
</head>
<body>

	<?php 
		require('connect.php');
		$sql = "SELECT * FROM comments";
		$res = mysqli_query($connection, $sql);
	?>
	<div class="panel panel-default">
	<div class="panel-heading">Comments</div>
	<table class="table table-striped"> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Name</th> 
				<th>Comment</th> 
				<th>Time</th> 
				<th>Status</th> 
				<th>Operations</th> 
			</tr> 
		</thead> 
		<tbody> 

			<?php
				while ( $r = mysqli_fetch_assoc($res)) {
			?>
				<tr> 
					<th scope="row"><?php echo $r['id']; ?></th> 
					<td><?php echo $r['name'] ?></td> 
					<td><?php echo $r['subject']; ?></td> 
					<td><?php echo $r['submittime']; ?></td> 
					<td><?php if(isset($r['status']) & !empty($r['status'])){echo $r['status'];}else{echo "NA";} ?></td>  
				</tr> 
			<?php } ?>

		</tbody> 
	</table>
</div>
</body>
</html>
