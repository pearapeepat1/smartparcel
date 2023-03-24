<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel = "icon" href = 
"https://i.pinimg.com/564x/85/25/33/852533b08e1010f0a0e37811a5753cd6.jpg" 
        type = "image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
	 body {
        background-image: url('img/bg-login22.png');
        background-repeat: no-repeat;
        background-position: center top;
}
.bg{
   background-color: #dcdde2; 
}
</style>
<body class="bg">


    <div class="d-flex justify-content-center align-items-center vh-100 ">
    	<form class="shadow w-450 p-3" 
		action="php/login.php"
		 method="post">	
		<center><img src="img/logo-removebg-preview.png" alt="" sizes="50" srcset=""></center>
    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		<button type="submit" name="submit" class="btn btn-primary">Login</button>
		  <a href="index.php" class="link-secondary btn ">Sign Up</a>
		  <a href="start.php" class="link-secondary btn" alt="right">Back</a>
		</form>
		
    </div>
	
</body>
</html>