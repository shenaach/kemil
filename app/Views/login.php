<html>
	<head>
		<title>Login - Maw n Paw</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Google fonts NUNITO -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

	<style>
		html, body{
			height: 100%;
		}
		body{
		background: rgb(157,65,65);
		}
		.cont-login{
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.jumb-login{
			background: rgb(229,206,206);
			width: 612px;
			height: 395px;
		}
		.jumbotron h1{
			font-family: 'Nunito', sans-serif;
			font-weight: bold;
			font-size: 36px;
			color: #452E2E;
		}
		.teks{
			font-family: 'Nunito', sans-serif;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			line-height: 25px;
			display: flex;
			align-items: center;

			color: #452E2E;
		}
		.masuk-btn{
			width: 150px;
			height: 50px;
			margin: 0 auto;
			padding: 0;
			display: inline-block;
			line-height: 50px;
			text-align: center;
			background: #452E2E;
			border-radius: 20px;
			font-family: Nunito;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			line-height: 25px;
			color: #E5CECE;
		}
		div.parentElement{text-align: center;}

		.btn-work {
			width: 150px;
			height: 50px;
			margin: 0 auto;
			padding: 0;
			display: inline-block;
			line-height: 50px;
			text-align: center;
		}
		.form-input{
			height: 47px;
			background: #FFFFFF;
			border-radius: 15px;
		}
	</style>
	</head>
	
	<body>
	<div class="container cont-login">
	<div class="jumbotron jumbotron-fluid jumb-login">
		<h1>Login</h1>
		<!--<form class="form-horizontal form-group" method="post">
		<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Email:</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter email" />
				<span class="text-danger"></span>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="pwd">Password:</label>
			  <div class="col-sm-10">          
				<input type="password" class="form-control" id="user_password" placeholder="Enter password" name="user_password" />
				<span class="text-danger" style="font-size:30px;"></span>
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
				  <label><input type="checkbox" name="remember"> Remember me</label>
				</div>
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-default" value="Login" name="login"/>
				<a>&nbsp Sign up</a>
			  </div>
			</div>
		</form>-->
		<form action="/action_page.php">
			<div class="form-group">
				<label for="email" class="teks">Username:</label>
				<input type="email" class="form-control form-input" id="email" placeholder="Masukkan username Anda" name="email">
			</div>
			<div class="form-group">
				<label for="pwd" class="teks">Password:</label>
				<input type="password" class="form-control form-input" id="pwd" placeholder="Masukkan password Anda" name="pswd">
			</div>
			<button type="submit" class="btn masuk-btn float-right">Masuk</button>
		</form>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>