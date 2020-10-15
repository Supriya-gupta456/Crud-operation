<!DOCTYPE html>
	<html>
	<head>
		<title>login page </title>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body style="background-image: url('log1.jpg');">


	
		
	<header>
		<h1 style="text-align: center; "> <u>PLEASE LOGIN !!!</u></h1>
		<!-- <div style="text-align: center;"> -->
	</header>
	 <nav style="float: right;">

   <a href="home.php"><button style="border-style: 5px solid black;">HOME</button> 
   </a></nav>

<div style="text-align: center;">
	<form action="function2.php" method="post">

	<section>
	<div class = "enteries">
			&nbsp;&nbsp;&nbsp;UserId : &nbsp;&nbsp;<input type="email" name="userid" id="userid" ><br>

	
	<br>
			Password : <input type="password" name="password" id="password" >
	
	<br><br><br><br>
	</div> 
	
	<button type="submit"  name="login" id="login" style ="background-color: powderblue ; font-style: bold;
	         font-size: 30px;">LogIn
	</button><br>
	<script type="text/javascript">

			$(document).ready(function(){
             $("#login").click(function(){

             	valid=true;

             	if(valid && $("#userid").val()=='' && $("#password").val()==''){
             		alert(" Fill the fields");

            } 
             });

			});	
	</script>
			
		
			<p style="font-size: 15px;"> New user??<button><a href="register.php">SIGNUP</a></button></p>
				<button style="text-decoration-color: blue; font-size: 15px;"> <u><a href="password.php">Forget Password 
				</a></u></button>
			
	</section>
	</form>
	</div>	

	</body>

	

	</html>

		
	 
	