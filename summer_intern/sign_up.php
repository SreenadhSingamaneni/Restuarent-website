<?php 


	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			if($result){
				if($result && mysqli_num_rows($result) == 0)
				{

			//save to database
			$user_id = random_num(20);
			$query1 = "insert into users (name,user_id,email,user_name,password) values ('$name','$user_id','$email','$user_name','$password')";

			mysqli_query($con, $query1);

			header("Location: login.php");
			die;}
			else{
				echo "user-name already exists, please try different user name";
			}}
			
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
		body {
    height: 820px;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
       
       background-image: url(https://wallpaperaccess.com/full/767277.jpg);
        color: black;
}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{

		border-style: solid;
		border-radius:10px;
		border-width: 5px;
		margin: 100px;
		width: 300px;
		padding: 50px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: Black;"><center><h3 style="font-family: 'Times New Roman', Times, serif;">SIGN UP</h3></center></div>
			<input id="text" type="text" name="name" placeholder="Name" required> <br><br>
			<input id="text" type="text" name="user_name" placeholder="User name" required><br><br>
			<input id="text" type="email" name="email" placeholder="E-mail" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>
			

			<input id="button" type="submit" value="Signup"><br><br>

			<button style="float:right;"><a href="login.php" style="text-decoration:none;">Sign In</a></button><br><br>
		</form>
	</div>
</body>
</html>