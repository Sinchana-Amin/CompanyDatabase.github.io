<!DOCTYPE html>
<html lang="en">
<head>
  <title>company database</title>
  <!--bootstrap links-->
  <?php include'links.php' ?> 
  <?php include 'css/style1.css' ?>
</head>
<body>
	<div class="container register">
		<div class="row">
			<div class="col-md-3 register-left">
				<img src="images/wd.jpg"alt=""/>
				<h3>welcome</h3>
				<p>please fill all the details carefully.This form can change your life</p>
				<a href="display1.php">Check Form</a> <br/>
			</div>
			<div class="col-md-9 register-right">
				
				<div class="tab-content"id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel"aria-labelledby="home-tab">
						<h3 class="register-heading">Apply for App Developer Post</h3>
						<form action=""method="POST">
							<div class="row register-form">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control"
										placeholder="enter your name*" name="user"
										value="" required/>
									</div>

									<div class="form-group">
										<input type="tel" class="form-control"
										placeholder="mobile number*" name="mobile"
										value=""required/>
									</div>

									<div class="form-group">
										<input type="text"class="form-control"
										placeholder="Any references*"name="refer"
										value=""required/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control"
										placeholder="enter your qualification*" name="degree"value=""required/>
								</div>
								<div class="form-group">
									<input type="email" class="form-control"
									placeholder="email id*"name="email" value=""required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="App developer post*"name="jobprofile" value="App Developer"/>
								</div> 
								<input type="submit"class="btnRegister" name="submit" value="Register"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php 
include 'connection1.php';

if(isset($_POST['submit'])){
	$name = $_POST['user'];
	$degree = $_POST['degree'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$refer = $_POST['refer'];
	$jobprofile = $_POST['jobprofile'];

	$insertquery = "insert into app_development(name,degree,mobile,email,refer,jobpost)
	values('$name','$degree','$mobile','$email','$refer','$jobprofile')";

	$res = mysqli_query($con,$insertquery);

	if($res){
		?>
		<script>
			alert("data inserted properly");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("data not inserted");
		</script>
		<?php
	}


}
?>