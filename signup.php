<!DOCTYPE html>
<html>
<head>
	<title>Signup - my website</title>
    <style>
  
  *{
     margin:0;
     padding:0;
     font-family: sans-serif;
     box-sizing:border-box;
      
  }
  body{
      display:flex;
      justify-content:center;
      align-items:center;
      flex-direction:column;
     
      background-color:antiquewhite;
      background-size:cover;
  }
  form{
  margin-top:50px;
  text-align:center;
  }
  input{
      display:block;
      width: 350px;
      height: 40px;
      margin: 20px;
      outline:none;
      border:none;
      font-size: 20px;
      border-bottom:1px solid black;
      background:transparent;
  
  }
  button{
      width: 350px;
      height: 40px;
      font-size: 20px;
      color:white;
      border:none;
      background-color:#1a5875;
  
  }
  form h1{
      margin-bottom:30px;
  }
  
  
</style>  
</head>
<body>




		<div style="margin: auto;max-width: 600px">

			<h1 style="text-align: center;">Signup</h1>

			<form method="post" action="signup_action.php" style="margin: auto;padding:10px;">
			<center>	
				<input type="text" name="username" placeholder="Username" required><br>
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="text" name="password" placeholder="Password" ><br>
</center>
				<?php

					if(isset($_GET['flag'])){
						if($_GET['flag']==1)
							echo "<b>please insert a number in your pass!!<b>";
							
					} 
				

				?>

				<button>Signup</button>
			</form>	
		</div>


</body>
</html>