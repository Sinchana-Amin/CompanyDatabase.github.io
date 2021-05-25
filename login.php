<?php include'css/style3.css'?>
<!DOCTYPE <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
	</head>
	<body class="bodyy">
		<div class="container">
			<div class="login-box">
				<div class="row">
					<div class="col-lg-6 login-left">
						<h2>Login Form</h2>
						<form action="validation.php" method="post">
							<div class="form-group">
								<label>username</label>
								<input type="text"name="user" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password"name="password" class="form-control">
							</div>
							<button type="submit"class="btn btn-primary">Login</button>
						</form>
					</div>
					<div class="col-lg-6 login-right">
						<h2>Signin Form</h2>
						<form action="registration.php" method="post">
							<div class="form-group">
								<label>username</label>
								<input type="text"name="user" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password"name="password" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary">Signin</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>