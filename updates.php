<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>company database</title>
  <!--bootstrap links-->
  <?php include'links.php' ?> 
  <?php include 'css/style.css' ?>
</head>
<body>
	<div class="container register">
		<div class="row">
			<div class="col-md-3 register-left">
				<img src=""alt=""/>
				<h3>welcome</h3>
				<p>please fill all the details carefully.This form can change your life</p>
				<a href="display.php">Check Form</a> <br/>
			</div>
			<div class="col-md-9 register-right">
				
				<div class="tab-content"id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel"aria-labelledby="home-tab">
						<h3 class="register-heading">Apply for web Developer Post</h3>
						<form action=""method="POST">
							<div class="row register-form">

								<?php 
								include 'connection.php';
								$ids = $_GET['id']; 
								$showquery = "select * from job_registration where id={$ids}";
								$showdata = mysqli_query($con,$showquery);
								$arraydata = mysqli_fetch_array($showdata);

								if(isset($_POST['submit'])){
									$idupdate = $_GET['id']; 

									$name = $_POST['user'];
									$degree = $_POST['degree'];
									$mobile = $_POST['mobile'];
									$email = $_POST['email'];
									$refer = $_POST['refer'];
									$jobprofile = $_POST['jobprofile'];

									//$insertquery = "insert into job_registration(name,degree,mobile,email,refer,jobpost)
									//values('$name','$degree','$mobile','$email','$refer','$jobprofile')";

									$query = "update job_registration set id=$idupdate, name='$name',degree='$degree',
									mobile='$mobile',email='$email',refer='$refer',jobpost='$jobprofile' where id= '$idupdate'";

									$res = mysqli_query($con,$query);

									if($res){
										?>
										<script>
											alert("data updated properly");
										</script>
										<?php
									}else{
										?>
										<script>
											alert("data not updated");
										</script>
									<?php
									}


								}
								?>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control"
										placeholder="enter your name*" name="user"
										value="<?php echo $arraydata['Name'] ?>" required/>
									</div>

									<div class="form-group">
										<input type="tel" class="form-control"
										placeholder="mobile number*" name="mobile"
										value="<?php echo $arraydata['Mobile'] ?>"required/>
									</div>

									<div class="form-group">
										<input type="text"class="form-control"
										placeholder="Any references*"name="refer"
										value="<?php echo $arraydata['Refer'] ?>"required/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control"
										placeholder="enter your qualification*" name="degree"value="<?php echo $arraydata['Degree'] ?>"required/>
								</div>
								<div class="form-group">
									<input type="email" class="form-control"
									placeholder="email id*"name="email" value="<?php echo $arraydata['Email'] ?>"required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="Webdeveloper post*"name="jobprofile" value="Web Developer"/>
								</div> 
								<input type="submit"class="btnRegister" name="submit" value="Update"/>
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

