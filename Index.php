<DOCTYPE html>
<html>
	<head>
		<title>The Digital Maths Academy</title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href=" css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="shortcut icon" href="images/companyLogo.ico"/>
	</head>
	<body class="bgndImg">
			<br />
			<br />
			<br />
			<br />
			<br />
				<br />
																		
			<div class="container" id="">
				<div class="row">
					<div class="col-md-3 text-center"> 	
		
					</div>
					
					<div class="col-md-6 text-center"> 			
						<h1 class = "text-center whiteText">Welcome to the Digital Maths Academy</h1>					
					<div class="col-md-3 text-center"> 			
					</div>	
					
				</div>
			</div>	
			
			<div class=" container">
				<div class="row text-center">
					<div class="col-md-3 text-center"> 		

					</div>	
					
					<div class="col-md-6 text-center"> 	
						<h2 class="whiteText"> Sign in! </h2>
						<br />	
						
						<!-- Form used by the user to login - The PHP script in 'VerifyLogin.php'  wiil be run which will ocmpare the entered details with that of the database -->
						
						<form name="login" method="POST" action="verifyLogin.php" class="form">
						  <div class="form-group">
						  
						  <div class="form-group">
							<label for="email" class="whiteText">Email:</label>
							<input type="text" name="email" value="" class="form-control" required>
						  </div>
						  
						  <div class="form-group">
							<label for="password" class="whiteText">Password:</label>
							<input type="password" name="password" class="form-control" required>
						  </div>						  
						  
						  	<button type="submit" name="submit" value="submit" class="btn greenHoverBtn roundBtn">Login</button>
						</form>	

						  <a button type="" class="btn greenHoverBtn roundBtnt"  href = "registration.html" name="signInBtn">Sign Up</button></a>						
					</div>
					
					<div class="col-md-3 text-center"> 			
					</div>				
				</div>
			</div>	
			
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/script.js"></script>
		
	</body>
</html>
