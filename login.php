<?php
require('code.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
	height: 430px;
	overflow: hidden;
	border-radius: 10px;
	box-shadow: 2px 2px 20px #000;
    background: linear-gradient(0deg, rgba(59,93,80,1) 42%, rgba(13,13,12,1) 100%);

}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
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
	margin: 30px auto 20px auto;
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
	/* color: black; */
}
.main p a{
    color: #fff;
}

</style>
</head>
<body>
	<div class="main">  	
        <div class="login">
            <form action="" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="lusername" placeholder="Username" required="">
                <input type="password" name="lpassword" placeholder="Password" required="">
                <button type="submit" name="login" value="loginBtn">Login</button>
				<p>Don't have an account? <a href="index.php">Signup</a></p>

            </form>

        </div>
	</div>
</body>
</html>

