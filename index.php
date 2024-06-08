<?php
require('code.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
    background: linear-gradient(0deg, rgba(59,93,80,1) 32%, rgba(13,13,12,1) 100%);
}
.main{
	width: 400px;
	height: 560px;
	overflow: hidden;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 10px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 70%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
    background: #1e362d;
	font-size: 1em;
	font-weight: bold;
	/* margin-top: 20px; */
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #274238;
}
.main p{
    font-size: small;
    text-align: center;
    margin-top: 20px;
}
.main p a{
    color: #fff;
}

</style>


</head>
<body>
	<div class="main">  	
				<form action="" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="susername" placeholder="Username" required="">
					<input type="email" name="semail" placeholder="Email" required="">
					<input type="password" name="spassword" placeholder="Password" required="">
					<input type="text" name="saddress" placeholder="Address" required="">
					<input type="text" name="scity" placeholder="City" required="">
					<input type="number" name="smob" placeholder="Mobile" required="" maxlength="10" minlength="10">
                    <button type="submit" name="signup">Signup</button>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </form>
	</div>
</body>
</html>

