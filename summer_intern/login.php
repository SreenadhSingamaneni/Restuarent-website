<?php 



	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.html");
						die;
					}
				}
			}
			
			
			echo "Please enter correct details, either username or password is wrong!";
		}else
		{
			echo "Please enter correct details, either username or password is wrong!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

body {
    height: 820px;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
       background-image: url(https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80);
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
		border-radius:20px;
		border-width: 8px;
		margin: auto;
		width: 300px;
		padding: 50px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: black;"><center><h3 style="font-family:'Times New Roman', Times, serif";>LOGIN</h3></center></div>

			<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
			
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>
<center>
			<input id="button" type="submit" value="Login" name="submit"><br><br>

			<button style="float:right;"><a href="sign_up.php" style="text-decoration:none;">Register</a></button><br><br>
		</form>
	</div>
</body>
</html>