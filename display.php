<?php
#echo $nums; to display num of rows

#$res = mysqli_fetch_array($query);
#echo $res[2]; displays single single attribute of row everytime when we refresh
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<?php include 'links.php'; ?>
	<?php include 'css/style.css';?>
</head>
<body>
	<div class="main-div">
		<h1>List of candidates for Web developer job</h1>

		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thread>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Degree</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Refer</th>
							<th>Jobpost</th>
							<th colspan="2">Operation</th>
						</tr>
					</thread>
					<tbody>
						<?php
							include 'connection.php';

							$selectquery = " select * from job_registration ";

							$query = mysqli_query($con,$selectquery);

							$nums = mysqli_num_rows($query);

							while ($res = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $res['ID'] ?></td>
									<td><?php echo $res['Name'] ?></td>
									<td><?php echo $res['Degree'] ?></td>
									<td><?php echo $res['Mobile'] ?></td>
									<td><span class="email-style"><?php echo $res['Email'] ?></span></td>
									<td><?php echo $res['Refer'] ?></td>
									<td><?php echo $res['Jobpost'] ?></td>
									<td><a href="updates.php?id=<?php  echo $res['ID'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a href="delete.php?id=<?php  echo $res['ID'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
								</tr>
							<?php	
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>