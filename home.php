<?php 
session_start();
?>
<!DOCTYPE html>

<head>
  <title>Digital Maths Academy</title>
  <meta name="viewport" content="width=device-width, initial scale=1" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="shortcut icon" href="images/companyLogo.ico" />
</head>

<body class="">
  <div class="navbar-fixed-top navbar-default fixed customColourNavbar" id="home">
    <div class="container">
      <div class="navbar-brand">
        The Digital Maths Academy
      </div>
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">Menu</button>

      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right navHover">
          <li><a href="home.php">Home</a></li>

          <li><a href="about.html">About</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle customColourNavbar" data-toggle="dropdown" href=
            "#">Activities</a>

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
        <div class="col-md-4 text-center smlPadding"></div>

        <div class="col-md-4 text-center smlPadding whiteText">
          <h1>Welcome back</h1>

          <h2>
          <?php
             echo $_SESSION['$myemail'];
          ?></h2>

          <h2>View your progress below!</h2><br />
        </div>

        <div class="col-md-4 text-justify smlPadding"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class=" row lrgPadding">
      <div class="col-md-2 text-justify smlPadding"></div>      
      <div class="col-md-8 text-center smlPadding">
    <img class="logo lrgPadding" src="images/companyLogo.png" /></a>
    
      <hr class="shortHr smlPadding" />
        <h2><strong>Pick a topic to revise!</strong></h2>

        <h3>Below you will find some of our main topics.<br />
        These include activities to test your knowledge in the four most prominent maths
        subjects.</h3>
      </div>
        <div class="col-md-2 text-justify smlPadding"></div>      
    </div>
  </div>
  <hr class="shortHr" />

  <div class="container">
    <div class=" row lrgPadding">
      <div class="col-md-3 text-center smlPadding">
        <a href="QuizAddition.php" class="subjectHomeImg"><img class="subjectHomeImg"
        src="images/addition2.png" /></a>

        <h3><strong>Addition</strong></h3>
      </div>

      <div class="col-md-3 text-center smlPadding">
        <a href="QuizSubtraction.php" class="subjectHomeImg"><img class="subjectHomeImg"
        src="images/subtraction2.png" /></a>

        <h3><strong>Subtraction</strong></h3>
      </div>

      <div class="col-md-3 text-center smlPadding">
        <a href="QuizMulti.php" class="subjectHomeImg"><img class="subjectHomeImg" src=
        "images/multiplication2.png" /></a>

        <h3><strong>Multiplication</strong></h3>
      </div>

      <div class="col-md-3 text-center smlPadding">
        <a href="QuizDivision.php" class="subjectHomeImg"><img class="subjectHomeImg"
        src="images/division2.png" /></a>

        <h3><strong>Division</strong></h3>
      </div>
    </div>
  </div>
  <hr class="shortHr" />

  <div class="container">
    <div class=" row lrgPadding">
      <div class="col-md-12 text-center smlPadding">
        <h2><strong>Your local vicinity!</strong></h2><iframe src=
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=
        ""></iframe><br />
      </div>
    </div>
  </div>

  <div class="homeSection3">
    <div class="container">
      <div class=" row lrgPadding">
        <div class="col-md-3 text-center smlPadding">
          <a href="Games.html"><img class="iconSetHome" src="images/game.png" /></a>

          <h3><strong>Games</strong></h3>
        </div>

        <div class="col-md-3 text-center smlPadding">
          <a href="maps.php"><img class="iconSetHome" src="images/gps.png" /></a>

          <h3><strong>Maps</strong></h3>
        </div>

        <div class="col-md-3 text-center smlPadding">
          <img class="iconSetHome" src="images/shape.png" />

          <h3><strong>Your School</strong></h3>
        </div>

        <div class="col-md-3 text-center smlPadding">
          <a href="Quiz.html" class="subjectHomeImg"><img class="iconSetHome" src=
          "images/squares.png" /></a>

          <h3><strong>Quizzes</strong></h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class=" row medPadding">
      <div class="col-md-2 text center smlPadding"></div>
      <div class="col-md-8 text-center smlPadding">
        <h2><strong>View leaderboards in more detail in the leaderboard
        section!</strong></h2><br />

        <h1>Competition Quiz Leaderboard!</h1>
        
        <?php
                                                $servername = "localhost";
                                                $username = "leonmul";
                                                $password = "";
                                                $dbname = "leaderboard";
                                                
                                                // Create connection
                                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                // Check connection
                                                if (!$conn) {
                                                    die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                                $sql = "SELECT  email, score FROM endQuiz GROUP BY email ORDER BY score DESC LIMIT 0, 10 ";
                                                $result = mysqli_query($conn, $sql);
                                                
                                                
                                                echo "<div class='container table-responsive'>
                                                                <div class='col-md-2 table-responsive'></div>
                                                                <table class='table-hover table-bordered '>
                                                                <tr>
                                                                <th>Name</th>
                                                                <th>Score</th>
                                                                </tr>";
                                                                
                                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                     //output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                         echo "<tr>";
                
                                                                  echo "<td>" . $row['email'] . "</td>";
                                                                
                                                                  echo "<td>" . $row['score'] . "</td>";
                                                                
                                                                  echo "</tr>";
                                                                
                                                                  }
                                                        
                                                                echo "</div> </table>";
                                                } else {
                                            echo "0 results";
                                                }
                
                                                mysqli_close($conn);
                                        ?>
      </div><br />
        <div class="col-md-2 text center smlPadding"></div>
    </div>
  </div>
  <hr class="shortHr" />

  <div class="container padding darkGreyText" id="contact">
    <div class="col-md-2 text-center smlPadding"></div>

    <div class="col-md-8 text-center smlPadding darkGreyText">
      <h2><strong>Subscribe to our weekly newsletter!</strong></h2>
      
      <!--This form runs the PHP script "newsletter.php which posts the name and email to the form, we could not get the emails sending from cloud 9 due to security issues,so we stored the email in the db-->
      <form name="newsletter" method="post" action="newsletter.php" class="form" id=
      "newsletter">
        <div class="form-group">
          <label for="name">Name:</label> <input type="text" name="name" value="" class=
          "form-control" required="" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label> <input type="text" name="email" value=""
          class="form-control" required="" />
        </div><button type="submit" name="submit" value="submit" class=
        "btn greenHoverBtn roundBtn">Recieve Newsletter!</button>
      </form>
    </div>

    <div class="col-md-2 text-center smlPadding"></div>
  </div><br />
  <br />
  
  <!-- Footer including footer-icons to undertake various tasks within the application -->
	</div>
  <div class="topFooter">
    <div class="container whiteText">
      <div class=" row medPadding">
        <div class="col-md-2 text-center"></div>

        <div class="col-md-2 text-center">
          <a href="logout.php"><img class="footerIcon" src=
          "images/logout2.png" /></a><br />
          <strong>Logout</strong>
        </div>

        <div class="col-md-2 text-center">
          <a href="leaderboards.php"><img class="footerIcon" src=
          "images/Leaderboards2.png" /></a><br />
          <strong>Leaderboards</strong>
        </div>

        <div class="col-md-2 text-center">
          <a href="Quiz.html"><img class="footerIcon" src="images/quiz2.png" /></a><br />
          <strong>Quiz</strong>
        </div>

        <div class="col-md-2 text-center">
          <a href="maps.php"><img class="footerIcon" src="images/map2.png" /></a><br />
          <strong>Maps</strong>
        </div>

        <div class="col-md-2 text-right"></div>
      </div>
    </div>
  </div>

  <div class="topFooter whiteText">
    <div class="container whiteText">
      <div class=" row smlPadding">
        <div class="col-md-2 text-center"></div>

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

        <div class="col-md-2 text-right"></div>
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

      <div class="col-md-1 text-right"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>