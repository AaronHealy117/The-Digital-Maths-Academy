<!DOCTYPE html>

<html>
<head>
  
  <title>Digital Maths Academy</title>
  <meta name="viewport" content="width=device-width, initial scale=1" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script src="js/slideshow.js" type="text/javascript"></script>
   <link rel="shortcut icon" href="images/companyLogo.ico" />
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
          <br />
          <br />
          <br />

          <h1>Leaderboards</h1>
        </div><br />
        <br />

        <div class="col-md-4 text-justify smlPadding"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class=" row smlPadding">
      <div class="col-md-2"></div>

      <div class="col-md-8 text-center smlPadding darkGreyText">
        <h2><strong>Below are leaderboard for the entire player base, check to see if
        your on top!</strong></h2>

        <h4>There are leaderboards for each of the revision sections, but the main one is
        the competition quiz!</h4>
      </div>

      <div class="col-md-2"></div>
    </div>
  </div>
  <!--just a panel hiding the leaderboards, page seems less cluttered, opens and closes when clicked-->

  <div class="container">
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <h4 class="panel-title text-center"></h4>

          <h3><a data-toggle="collapse" href="#collapse1">Revision Section Quiz
          Scores</a></h3>
        </div>

        <div id="collapse1" class="panel-collapse collapse">
          <ul class="list-group">
            <li class="list-group-item"><?php
                                                    //connects to and accessed the database to grab required data
                                            
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
                                                    
                                                    //The sql statement selects the email and score 
                                                    $sql = "SELECT email, score FROM additionQuiz ORDER BY score DESC LIMIT 0, 5 ";
                                                    $result = mysqli_query($conn, $sql);
                                                    
                                                    //creates div for the table 
                                                    echo "<div class='container table-responsive'>
                                                                    <div class='col-md-2'></div>
                                                                    <h3><strong>Addition</strong></h3>
                                                                    <table class='table-hover table-bordered table-striped'>
                                                                    <tr>
                                                                    <th>Email</th>
                                                                    <th>Score</th>
                                                                    </tr>";
                                                                    
                                                            /*This is a fetch query used to enable the user to grab the information from the database -  
                                                            Resource : http://www.w3schools.com/php/php_mysql_select.asp 
                                                            As we were not as farmiliar with PHP and SQL, we used a variety of sources to undertake our project,but one of the most prominent was W3schools
                                                            */
                                                            
                                                    if (mysqli_num_rows($result) > 0) {
                                                         //output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                             echo "<tr>";
                                                          //Once the rows are grabbed from the database, they are printed to the application using the echo statement in PHP
                                                                      echo "<td>" . $row['email'] . "</td>";
                                                                    
                                                                      echo "<td>" . $row['score'] . "</td>";
                                                                    
                                                                      echo "</tr>";
                                                                    
                                                                      }
                                                            
                                                                    echo "</div> </table>";
                                                
                                                    } else {
                                                      //return 0 results if no fields can be grabbed from the database
                                                echo "0 results";
                                                    }
                    
                                                    mysqli_close($conn);
                                            ?></li>

            <li class="list-group-item"><?php
                                                    //The same procedure as above
                                            
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
                                                    
                                                    $sql = "SELECT email, score FROM subtractionQuiz ORDER BY score DESC LIMIT 0, 5 ";
                                                    $result = mysqli_query($conn, $sql);
                                                    
                                                    //creates div for the table 
                                                    echo "<div class='container table-responsive'>
                                                                    <div class='col-md-2'></div>
                                                                    <h3><strong>Subtraction</strong></h3>
                                                                    <table class='table-hover table-bordered table-striped'>
                                                                    <tr>
                                                                    <th>Email</th>
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
                                            ?></li>

            <li class="list-group-item"><?php
                                                    //Each section used to grab the leaderboard information is identical, and the same resources were used the only thing was that the table chosen was altered
                                            
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
                                                    
                                                    $sql = "SELECT email, score FROM multiplicationQuiz ORDER BY score DESC LIMIT 0, 5 ";
                                                    $result = mysqli_query($conn, $sql);
                                                    
                                                    //creates div for the table 
                                                    echo "<div class='container table-responsive'>
                                                                    <div class='col-md-2'></div>
                                                                    <h3><strong>Multiplication</strong></h3>
                                                                    <table class='table-hover table-bordered table-striped'>
                                                                    <tr>
                                                                    <th>Email</th>
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
                                            ?></li>

            <li class="list-group-item"><?php
                                                    //connects to and accessed the database to grab required data
                                            
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
                                                    
                                                    $sql = "SELECT email, score FROM divisionQuiz ORDER BY score DESC LIMIT 0, 5 ";
                                                    $result = mysqli_query($conn, $sql);
                                                    
                                                    //creates div for the table 
                                                    echo "<div class='container table-responsive'>
                                                                    <div class='col-md-2'></div>
                                                                    <h3><strong>Division</strong></h3>
                                                                    <table class='table-hover table-bordered table-striped'>
                                                                    <tr>
                                                                    <th>Email</th>
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
                                            ?></li>
          </ul>

          <div class="panel-footer">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class=" row medPadding">
      <div class="col-md-12 text-center smlPadding">
        <br />

        <h1>Competition Quiz!</h1>

        <h1>TOP 10</h1><?php
                                                //connects to and accessed the database to grab required data
                                        
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
                                                
                                                $sql = "SELECT email, score FROM endQuiz ORDER BY score DESC LIMIT 0, 10 ";
                                                $result = mysqli_query($conn, $sql);
                                                
                                                //creates div for the table 
                                                echo "<div class='container table-responsive'>
                                                                <div class='col-md-2'></div>
                                                                <table class='table-hover table-bordered table-striped'>
                                                                <tr>
                                                                <th>Email</th>
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
        </div>
      </div>
    </div>
  </div>
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
  <script src="https://code.jquery.com/jquery-1.11.3.min.js" type=
  "text/javascript">
</script><script src="js/bootstrap.js" type="text/javascript">
</script><script type="text/javascript" src="js/script.js">
</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"
  type="text/javascript">
</script><script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
  type="text/javascript">
</script>
</body>
</html>
