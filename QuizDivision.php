<!DOCTYPE html>

<head>
	<title>Digital Maths Academy </title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
					
 			<link rel="shortcut icon" href="images/icon1.ico"/>
	
	<link rel="stylesheet" type="text/css" href="css/Quiz.css" />
</head>

<body>

	<div class="navbar-fixed-top navbar-default fixed customColourNavbar" id="home">
				<div class="container">
					<div class="navbar-brand">
						The Digital Maths Academy
					</div> 
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						Menu
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse"> 
						<ul class="nav navbar-nav navbar-right navHover">
							<li><a href="home.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							
							<li class="dropdown">
						        <a class="dropdown-toggle customColourNavbar" data-toggle="dropdown" href="#">Activities
						        <span class="caret"></span></a>
						        <ul class="dropdown-menu customColourNavbar">
						        <li><a href="Quiz.html">Quiz</a></li>
						        <li><a href="leaderboards.php">Leaderboards</a></li> 
								<li><a href="Games.html">Games</a></li> 
						        </ul>
						    </li>
						    
							<li><a href="contact.html">Contact</a></li>												
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>	
			
			
			<div class="jumbotron">
				<div class=" container">
					<div class=" row smlPadding">
						<div class="col-md-4 text-center smlPadding"> 	

						</div>							
						
						<div class="col-md-4 text-center smlPadding whiteText"> 
						<br />
								<h1> Division Quiz </h1>
								<br />
								<br />
								 			
						</div>
						
						<div class="col-md-4 text-justify smlPadding"> 

						</div>										
					</div>
				</div>
			</div>
			
			
			
	<div class="container">
	    <div class=" row lrgPadding">
			<div class="col-md-3 text-center smlPadding"> 	
			</div>
						
			<div class="col-md-6 text-center smlPadding">

            <form action="gradeDivision.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>What is 9 &divide; 3? </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 3 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 12 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 9</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 10 &divide; 2?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 8</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 10</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) 10 &divide; 1 = 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 5 &divide; 5 = 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) 4 &divide; 2 = 2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) 12 &divide; 4 = 3 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 4 &divide; 2 = 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 2 &divide; 1 = 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 8 &divide; 4 = 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 6 &divide; 6 = 1</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 12 &divide; __ = 6 </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 2</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>What is 6 &divide; 3</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) 9 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) 2 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) 1</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 3 &divide; 3</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) 9</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) 9 &divide; 2 = 4.5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) 10 &divide; 2 = 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) 5 &divide; 2 = 2.5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) 11 &divide; 2 = 5.5 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) 4 &divide; 2 = 8</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) 1 &divide; 2 = 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) 10 &divide; 5 = 2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) 6 &divide; 6 = 12</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 12 &divide; __ = 1</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) 12</label>
                    </div>
                    
                
                </li>
            
            </ol>
            
            <input type="submit" class="btn submitButton roundBtn greenHoverBtn" value="Submit Quiz"  />
		
		</form>
		</br>
	</div>
	<div class="col-md-3 text-center smlPadding"></div>	
		</div>
	</div>
	
	
	
	
	
	
	 	<!-- Footer including footer-icons to undertake various tasks within the application -->
				<div class ="topFooter">
	                 <div class="container whiteText">
						<div class=" row medPadding">
							<div class="col-md-2 text-center"> 			
							<h4></h4>
							</div>
							<div class="col-md-2 text-center">
								<a href ="logout.php" ><img class="footerIcon" src="images/logout2.png" /></a>
								<br/>								
								<strong>Logout</strong>
							</div>
							
							<div class="col-md-2 text-center"> 			
								<a href ="leaderboards.php" ><img class="footerIcon" src="images/Leaderboards2.png" /></a> 
								<br/>
								<strong>Leaderboards</strong>
							</div>
							<div class="col-md-2 text-center"> 			
								<a href ="Quiz.html" ><img class="footerIcon" src="images/quiz2.png" /></a>
								<br/>								
								<strong>Quiz</strong>
							</div>
							<div class="col-md-2 text-center"> 			
								<a href ="maps.php" ><img class="footerIcon" src="images/map2.png" /></a>
								<br/>								
								<strong>Maps</strong>
							</div>							
							<div class="col-md-2 text-right"> 			
			
							</div>							
						</div>
					</div>
				</div>
				
				<div class="topFooter whiteText">
					<div class="container whiteText">
						<div class=" row smlPadding">
							<div class="col-md-2 text-center"> 			
								<h4></h4>
							</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Educational Links</strong></h4>		
								</div>	
								<div class="col-md-2 text-center"> 			
									<h4><strong>About Us</strong></h4>		
								</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Meet the Team</strong></h4>		
								</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Terms of Service</strong></h4>		
								</div>								
							<div class="col-md-2 text-right"> 			
							</div>							
						</div>
					</div>
				</div>
				
                <div class="footer footerBackground whiteText">
					<div class=" row smlPadding">
						<div class="col-md-6 text-center"> 			
						<h4><strong>The Digital Maths Academy</strong></h4>
						</div>
						<div class="col-md-5 text-center"> 			
							<h4><strong>Copyright 2016 &copy;</strong></h4>		
						</div>	
						<div class="col-md-1 text-right"> 			
		
						</div>							
					</div>
				</div>
                	
                		
                		
            <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.js"></script>	
			<script type="text/javascript" src="js/script.js"></script>	
			
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>
<!-- 
The PHP quizes were taken from the below source, they were altered to ensure they suited our application
The quiz scores are sent to the database when they are completed
If the user has only achieved a lower score than they has already, their higher score will remain within the database
Resource: https://css-tricks.com/building-a-simple-quiz/ 
-->
</html>