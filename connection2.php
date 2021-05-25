<?php
$username ="root";
$password ="";
$server = 'localhost';
$database = 'company';

#$con = mysqli_connect($server,$username,$password,$database); or 

$con = mysqli_connect($server,$username,$password);
$db = mysqli_select_db($con,$database);
if($con){
	//echo"connection successful";
	?>
	<script>
		alert('connection successful');
	</script>
	<?php
}else{
	echo "no connection";
	#die("no connection".mysqli_connect_error()); will very helpful in otherlamp editor
}
?>