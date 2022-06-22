<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bg"></div>
<div class="log-wrapper">
	<ul class="h-tab">
		<li id="signin-btn" class="active">Sign In</li>
		<li>|</li>
		<li id="signup-btn">Sign Up</li>
	</ul>
<div class="signin-form" >
	<form name="signin" action="signup-process.php?action=signin" method="POST">
		<div class="form-group">
			<i class="far fa-user"></i>
			<input type="email" name="email_in" class="form-input" placeholder="Email" required>
		</div>
		<div class="form-group">
			<i class="fas fa-key"></i>
			<input type="password" name="pwd_in" class="form-input" placeholder="Password" required >
			<div class="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>

		<button type="submit" class="form-submit">Login</button>

	</form>
</div> 
	<div class="signup-form">
	<form name="signup" action="signup-process.php?action=signup" method="POST" >
		<div class="form-group">
			<input type="text" name="id" class="form-input" placeholder="Identity Card" required>
		</div>
		<div class="form-group">
			<input type="text" name="username" class="form-input" placeholder="User Name" required>
		</div>
		<div class="form-group">
			<input type="text" name="phonenumber" class="form-input" placeholder="Phone Number" required>
		</div>
		<div class="form-group">
			<input type="text" name="email" class="form-input" placeholder="Email" required>
		</div>
		<div class="form-group">
			<input type="text" name="address" class="form-input" placeholder="Address" required>
		</div>
		<div class="form-group">
			<input type="password" name="pwd" class="form-input" placeholder="Password" required>
			<div class="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>
		<div class="form-group">
			<input type="password" name="repwd" class="form-input" placeholder="Password" required>
			<div class="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>
		<div class="checkbox">
			<label for="">Register as a seller</label>
			<input type="checkbox" name="seller_register" value=1>
			<div class="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>

		<button class="form-submit">Submit</button>

	</form>
</div>
<div id="msg"></div>
</div>
<script>
	document.querySelector('#signin-btn');
	document.querySelector('#signin-btn').addEventListener("click", function(){
		this.classList.add('active');
		document.querySelector('#signup-btn').classList.remove('active');
		document.querySelector('.signin-form').style.display = "block";
		document.querySelector('.signup-form').style.display = "none";
	})
	document.querySelector('#signup-btn').addEventListener("click", function(){
		this.classList.add('active');
		document.querySelector('#signin-btn').classList.remove('active');
		document.querySelector('.signup-form').style.display = "block";
		document.querySelector('.signin-form').style.display = "none";
	})
</script>
</body>
</html>
