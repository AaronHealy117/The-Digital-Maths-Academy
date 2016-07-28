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

	<div class="navbar-fixed-top navbar-inverse" id="home">
				<div class="container">
					<div class="navbar-brand">
						The Digital Maths Academy
					</div> 
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						Menu
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse"> 
						<ul class="nav navbar-nav navbar-right navHover">
					
									<li><a href="home.html">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="Games.html">Games</a></li>
									<li><a href="contact.html">Contact</a></li>	
									<li><a href="Index.html">Logout</a></li>

						</ul>
					</div>
				</div>
			</div>	
			
			
				<div class="jumbotron">
				<div class=" container">
					<div class=" row medPadding">
						<div class="col-md-12 text-center smlPadding"> 	
						<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<img src="images/pixel.png">
						</div>							
								
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
						<div class="col-md-4 text-justify smlPadding"> 

						</div>										
					</div>
				</div>
			</div>
			
			
			
	<div id="page-wrap">

		
		


<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>DCG stands for...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Design communication graphics </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Dark cert graphics</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Duck circus group </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Select the Geometric Principle</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) A sphere appears as a circle in every view.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Two planes intersect at an angle.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Parallel lines appear parallel in some orthographic views.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) None of the above. </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which one should not be here?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) End Elevation</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Vertical Plane</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Plan</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Elevation </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>This years project is...</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Design a water bottle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Redesign a clock</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) A phone/walkman</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Design a console</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz"  />
		
		</form>
	</div>
	
	
	
	 	<div class ="topFooter">
	                 <div class="container whiteText">
						<div class=" row medPadding">
							<div class="col-md-4 text-center"> 			
							<h4></h4>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href ="Index.html" ><img class="footerIcon" src="images/logout2.png" /></a>
								<strong>Logout</strong>
							</div>	
							<div class="col-md-1 text-center"> 			
								<img class="footerIcon" src="images/Leaderboards2.png" />	
								<strong>Leaderboards</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<img class="footerIcon" src="images/quiz2.png" />
								<strong>Quiz</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<img class="footerIcon" src="images/map2.png" />
								<strong>Maps</strong>
							</div>							
							<div class="col-md-4 text-right"> 			
			
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

</html>