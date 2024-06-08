<?php
require('code.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <title>welcome page</title>

    <style>
        .main {
            height: 100vh;
            background: linear-gradient(0deg, rgba(59, 93, 80, 1) 42%, rgba(13, 13, 12, 1) 100%);
            font-family: 'Jost', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            font-size: 36px;


        }
        .main button{
	width: 30%;
	height: 40px;
	color: #fff;
    background: #1e362d;
	font-size: 18px;
	font-weight: bold;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #274238;
}
    </style>
</head>

<body>
    <div class="main">
        <form action="" method="POST">
        <button type="submit" name="logoutBtn" value="logout">Logout</button>
            <h3>Welcome <?php echo $_SESSION['lusername']; ?></h3>
        </form>  
    </div>
</body>

</html>