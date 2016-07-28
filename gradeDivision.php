<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />

  <title>Digital Maths Academy</title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta name="viewport" content="width=device-width, initial scale=1" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="shortcut icon" href="images/icon1.ico" />
</head>

<body>
  <div class="navbar-fixed-top navbar-default fixed customColourNavbar" id="home">
    <div class="container">
      <div class="navbar-brand">
        The Digital Maths Academy
      </div><button class="navbar-toggle" data-toggle="collapse" data-target=
      ".navHeaderCollapse">Menu</button>

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
      <div class=" row medPadding">
        <div class="col-md-12 text-center smlPadding whiteText">
          <h1>Quiz Score!</h1>
        </div>

        <div class="col-md-4 text-justify smlPadding"></div>
      </div>
    </div>
  </div><?php

              $answer1 = $_POST['question-1-answers'];
              $answer2 = $_POST['question-2-answers'];
              $answer3 = $_POST['question-3-answers'];
              $answer4 = $_POST['question-4-answers'];
              $answer5 = $_POST['question-5-answers'];
              $answer6 = $_POST['question-6-answers'];
              $answer7 = $_POST['question-7-answers'];
              $answer8 = $_POST['question-8-answers'];
              $answer9 = $_POST['question-9-answers'];
              $answer10 = $_POST['question-10-answers'];
              
              $totalCorrectEnd = 0;
              
               if ($answer1 == "A") { $totalCorrect++; }
              if ($answer2 == "C") { $totalCorrect++; }
              if ($answer3 == "B") { $totalCorrect++; }
              if ($answer4 == "D") { $totalCorrect++; }
              if ($answer5 == "D") { $totalCorrect++; }
              if ($answer6 == "C") { $totalCorrect++; }
              if ($answer7 == "A") { $totalCorrect++; }
              if ($answer8 == "B") { $totalCorrect++; }
              if ($answer9 == "C") { $totalCorrect++; }
              if ($answer10 == "D") { $totalCorrect++; }
              
              
              
              
                          $servername = "localhost";
                          $username = "leonmul";
                          $password = "";
                          $dbname = "leaderboard";
                          
                          // Create connection
                          $conn = mysqli_connect($servername, $username, $password, $dbname);
                          
                          
          
                          
                          //Grab the current users score from the database and save it as a php variable ($dbUserScore)
                                          $sql = "SELECT score FROM divisionQuiz WHERE email='{$_SESSION['$myemail']}'";
                                          $result = mysqli_query($conn, $sql);
                                          
                                                  //Fetch result from db and then save to PHP Variable
                                          if (mysqli_num_rows($result) > 0) {
                                              while($row = mysqli_fetch_assoc($result)) {
                                                  $dbUserScore = $row['score'];
                                              }
                                          }

                          
                          //If the user has already posted a score and they get a better score, the new higher score will overwrite the 
                          if($dbUserScore<$totalCorrect){
                                  $sql="REPLACE INTO divisionQuiz(email,score) VALUES('{$_SESSION['$myemail']}','$totalCorrect')";
                                  $last_id = mysqli_insert_id($conn);
                                  if (mysqli_query($conn, $sql)) {
                                      echo "Your score has been posted to the database!!";
                                  } else {
                                          echo "An error occured trying to post - compare score section!";
                                  }
                          }
                          
                                  //If the user did not previously post their score, a new entry will be traversed into the database
                          else{
                          $sql="INSERT INTO divisionQuiz(email,score) VALUES('{$_SESSION['$myemail']}','$totalCorrect')";
                          
                                  if (mysqli_query($conn, $sql)) {
                                      $last_id = mysqli_insert_id($conn);
                                      echo "Your score has been posted to the database!!";
                                  } else {
                                           echo "<script>alert('Your score did did not replace your previous score and your old score shall remain on the leaderboard, try again next time!');</script>";
                                  }
                          }                       
                  

                          
                          mysqli_close($conn);
                          
                          
                          
                          ?>

  <div class="container">
    <div class="col-md-3"></div>

    <div class="col-md-6">
      <h1>Final Quiz
      Grade</h1><?php echo "<div id='results'> $totalCorrect / 10 correct</div>";
                                      ?><br />
      <a class="btn submitButton roundBtn greenHoverBtn" href="Quiz.html">Return to Quiz
      Page</a>
    </div>
  </div><br />
  <br />
  <!-- Footer including footer-icons to undertake various tasks within the application -->

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
  </div>&gt;

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
  </div><script src="https://code.jquery.com/jquery-1.11.3.min.js" type=
  "text/javascript">
</script><script src="js/bootstrap.js" type="text/javascript">
</script><script type="text/javascript" src="js/script.js">
</script>
</body>
</html>
