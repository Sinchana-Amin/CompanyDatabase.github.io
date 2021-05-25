<?php 
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<?php include'css/style3.css'?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<body class="bod">
<div class="container">	
	<h2 class="text-center"> Welcome <?php echo $_SESSION['username']; ?> </h2>
	<h2 class="text-center heading">Apply for the below given designations</h2>
	<div class="col-md-11">
	<div class="pp">
		<a href="index.php"><input type="submit"class="btnRegister" name="submit" value="Web developer"/></a> 
	</div>
	<div class="pp">
		<a href="index1.php"><input type="submit"class="btnRegister" name="submit" value="App developer"/></a>
	</div>
	<div class="pp">
		<a href="index2.php"><input type="submit"class="btnRegister" name="submit" value="Data Scientist"/></a>
	</div>
	<div class="logoutt">
		<a href="logout.php"> <input type="submit"class="logout" name="submit" value="LOGOUT"/></a>
	</div>
	</div>

	
</body>
</html>