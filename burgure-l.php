<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="awesom/all.css">
	<style>
		body{
				background: #c6b3f5;
		}
		.container{
			    margin-top: 7%;
		}
		.container form h3{
				color: white;
			    background: #3573ff;
		        height: 63px;
				line-height: 56px;
			    font-size: 25px;
			    font-family: cursive;
		        border-top-right-radius: 40px;
		        

		}
		.container form{
			    background: #8b89ff;
			    margin: auto;
			    border-bottom-left-radius: 40px;
		        border-top-right-radius: 40px;


		}
		.container form input{
			    border-radius: 2px;
			    height: 26px;
			    width: 70%;
			    margin-top: 32px;
			    background: #8b89ff;
			    border: none;
			    padding: 14px;
			    color: white;
			    border-bottom: 1px solid white;
		        padding-bottom: 23px;
		}
		.container form input:focus-visible{
			outline: none;
		}
		.container form input::placeholder{
			color: white;
		}
		.container form button{
		        width: 32%;
			    height: 5px;
			    padding-bottom: 28px;
			    border-radius: 3px;
			    margin-bottom: 41px;
			    background: #8b89ff;
			    color: white;
			    font-size: 17px;
			    margin-top: 26px;
			    font-family: inherit;
			    font-weight: bold;
			    border: 1px solid white;
			    transition: .4s ease;
		}
		.container form button:hover{
				background: #a76dd2;
		}
		.container form button a{
				color: black;
		}
		.container form .for-m{
			    padding-top: 20px;
		}
		.container form p{
				color: white;
			    font-size: 12px;
			    /* display: flex; */
			    text-align: left;
			    margin-left: 15%;
			    margin-top: 10px;
		}
		.container form p a{
			    font-weight: 700;
			    font-size: 10px;
			    color: #2b5e94;
			    padding-left: 5px;
			    text-decoration: none;
			    background-color: transparent;
			    font-family: inherit;
			    letter-spacing: 1px;
}
		}
		.container form button:active{
			background: #ac6fda;
		}
		.container form button:focus{
			box-shadow: none;
		}
	</style>
</head>
<body>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-5 m-auto ">
		<form action="backend.php" method="POST">
			<h3>Create Account</h3>
			<div class="for-m"><input type="text" name="username" required="required" placeholder="Username"></div>
			<input type="email" name="email" required="required" placeholder="E-mail">
			<input type="password" name="password" required="required" placeholder="Password">
			<input type="phone" name="phone" required="required" placeholder="Phone">
			<p>Have you account ? <a href="login.php">Login Please</a></p> <br>
			<button class="btn" name="submit" type="submit"> Next</button>

		</form>
		</div>
		</div>
	</div>
</body>
</html>