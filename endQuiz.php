<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />

  <title>Digital Maths Academy</title>
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
      <div class=" row smlPadding">
        <div class="col-md-4 text-center smlPadding"></div>

        <div class="col-md-4 text-center smlPadding whiteText">
          <br />

          <h1>Competition Quiz</h1><br />
          <br />
        </div>

        <div class="col-md-4 text-justify smlPadding"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class=" row lrgPadding">
      <div class="col-md-3 text-center smlPadding"></div>

      <div class="col-md-6 text-center smlPadding">
        <form action="gradeEnd.php" method="post" id="quiz" name="quiz">
          <ol>
            <li>
              <h3>What is 12 + 9?</h3>

              <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-A"
                value="A" /> <label for="question-1-answers-A">A) 9</label>
              </div>

              <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-B"
                value="B" /> <label for="question-1-answers-B">B) 12</label>
              </div>

              <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-C"
                value="C" /> <label for="question-1-answers-C">C) 3</label>
              </div>

              <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-D"
                value="D" /> <label for="question-1-answers-D">D) 21</label>
              </div>
            </li>

            <li>
              <h3>What is 12 - 7</h3>

              <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-A"
                value="A" /> <label for="question-2-answers-A">A) 4</label>
              </div>

              <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-B"
                value="B" /> <label for="question-2-answers-B">B) 5</label>
              </div>

              <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-C"
                value="C" /> <label for="question-2-answers-C">C) 19</label>
              </div>

              <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-D"
                value="D" /> <label for="question-2-answers-D">D) 12</label>
              </div>
            </li>

            <li>
              <h3>Which sum is incorrect?</h3>

              <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A"
                value="A" /> <label for="question-3-answers-A">A) 12 &times; 0 =
                0</label>
              </div>

              <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B"
                value="B" /> <label for="question-3-answers-B">B) 5 &times; 5 =
                25</label>
              </div>

              <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C"
                value="C" /> <label for="question-3-answers-C">C) 3 &times; 6 =
                18</label>
              </div>

              <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D"
                value="D" /> <label for="question-3-answers-D">D) 4 &times; 9 =
                13</label>
              </div>
            </li>

            <li>
              <h3>Which sum is correct?</h3>

              <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A"
                value="A" /> <label for="question-4-answers-A">A) 4 &divide; 2 =
                6</label>
              </div>

              <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B"
                value="B" /> <label for="question-4-answers-B">B) 2 &divide; 2 =
                4</label>
              </div>

              <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C"
                value="C" /> <label for="question-4-answers-C">C) 18 &divide; 3 =
                6</label>
              </div>

              <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D"
                value="D" /> <label for="question-4-answers-D">D) 24 &divide; 12 =
                12</label>
              </div>
            </li>

            <li>
              <h3>Which number makes this sum correct 12 &times; __ = 144</h3>

              <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A"
                value="A" /> <label for="question-5-answers-A">A) 10</label>
              </div>

              <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B"
                value="B" /> <label for="question-5-answers-B">B) 11</label>
              </div>

              <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C"
                value="C" /> <label for="question-5-answers-C">C) 9</label>
              </div>

              <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D"
                value="D" /> <label for="question-5-answers-D">D) 12</label>
              </div>
            </li>

            <li>
              <h3>What is 19 - 12?</h3>

              <div>
                <input type="radio" name="question-6-answers" id="question-6-answers-A"
                value="A" /> <label for="question-6-answers-A">A) 7</label>
              </div>

              <div>
                <input type="radio" name="question-6-answers" id="question-6-answers-B"
                value="B" /> <label for="question-6-answers-B">B) 31</label>
              </div>

              <div>
                <input type="radio" name="question-6-answers" id="question-6-answers-C"
                value="C" /> <label for="question-6-answers-C">C) 10</label>
              </div>

              <div>
                <input type="radio" name="question-6-answers" id="question-6-answers-D"
                value="D" /> <label for="question-6-answers-D">D) 6</label>
              </div>
            </li>

            <li>
              <h3>What is 49 &divide; 7</h3>

              <div>
                <input type="radio" name="question-7-answers" id="question-7-answers-A"
                value="A" /> <label for="question-7-answers-A">A) 7</label>
              </div>

              <div>
                <input type="radio" name="question-7-answers" id="question-7-answers-B"
                value="B" /> <label for="question-7-answers-B">B) 56</label>
              </div>

              <div>
                <input type="radio" name="question-7-answers" id="question-7-answers-C"
                value="C" /> <label for="question-7-answers-C">C) 42</label>
              </div>

              <div>
                <input type="radio" name="question-7-answers" id="question-7-answers-D"
                value="D" /> <label for="question-7-answers-D">D) 8</label>
              </div>
            </li>

            <li>
              <h3>Which sum is incorrect?</h3>

              <div>
                <input type="radio" name="question-8-answers" id="question-8-answers-A"
                value="A" /> <label for="question-8-answers-A">A) 1 &times; 0 = 0</label>
              </div>

              <div>
                <input type="radio" name="question-8-answers" id="question-8-answers-B"
                value="B" /> <label for="question-8-answers-B">B) 9 &times; 9 =
                81</label>
              </div>

              <div>
                <input type="radio" name="question-8-answers" id="question-8-answers-C"
                value="C" /> <label for="question-8-answers-C">C) 8 &times; 6 =
                14</label>
              </div>

              <div>
                <input type="radio" name="question-8-answers" id="question-8-answers-D"
                value="D" /> <label for="question-8-answers-D">D) 2 &times; 8 =
                16</label>
              </div>
            </li>

            <li>
              <h3>Which sum is correct?</h3>

              <div>
                <input type="radio" name="question-9-answers" id="question-9-answers-A"
                value="A" /> <label for="question-9-answers-A">A) 18 + 2 = 16</label>
              </div>

              <div>
                <input type="radio" name="question-9-answers" id="question-9-answers-B"
                value="B" /> <label for="question-9-answers-B">B) 10 + 10 = 20</label>
              </div>

              <div>
                <input type="radio" name="question-9-answers" id="question-9-answers-C"
                value="C" /> <label for="question-9-answers-C">C) 7 + 13 = 6</label>
              </div>

              <div>
                <input type="radio" name="question-9-answers" id="question-9-answers-D"
                value="D" /> <label for="question-9-answers-D">D) 1 + 1 = 11</label>
              </div>
            </li>

            <li>
              <h3>Which number makes this sum correct 7 + __ = 23</h3>

              <div>
                <input type="radio" name="question-10-answers" id="question-10-answers-A"
                value="A" /> <label for="question-10-answers-A">A) 17</label>
              </div>

              <div>
                <input type="radio" name="question-10-answers" id="question-10-answers-B"
                value="B" /> <label for="question-10-answers-B">B) 15</label>
              </div>

              <div>
                <input type="radio" name="question-10-answers" id="question-10-answers-C"
                value="C" /> <label for="question-10-answers-C">C) 16</label>
              </div>

              <div>
                <input type="radio" name="question-10-answers" id="question-10-answers-D"
                value="D" /> <label for="question-10-answers-D">D) 20</label>
              </div>
            </li>

            <li>
              <h3>What is 8 &times; 9</h3>

              <div>
                <input type="radio" name="question-11-answers" id="question-11-answers-A"
                value="A" /> <label for="question-11-answers-A">A) 17</label>
              </div>

              <div>
                <input type="radio" name="question-11-answers" id="question-11-answers-B"
                value="B" /> <label for="question-11-answers-B">B) 1</label>
              </div>

              <div>
                <input type="radio" name="question-11-answers" id="question-11-answers-C"
                value="C" /> <label for="question-11-answers-C">C) 81</label>
              </div>

              <div>
                <input type="radio" name="question-11-answers" id="question-11-answers-D"
                value="D" /> <label for="question-11-answers-D">D) 72</label>
              </div>
            </li>

            <li>
              <h3>What is 22 - 13</h3>

              <div>
                <input type="radio" name="question-12-answers" id="question-12-answers-A"
                value="A" /> <label for="question-12-answers-A">A) 35</label>
              </div>

              <div>
                <input type="radio" name="question-12-answers" id="question-12-answers-B"
                value="B" /> <label for="question-12-answers-B">B) 9</label>
              </div>

              <div>
                <input type="radio" name="question-12-answers" id="question-12-answers-C"
                value="C" /> <label for="question-12-answers-C">C) 10</label>
              </div>

              <div>
                <input type="radio" name="question-12-answers" id="question-12-answers-D"
                value="D" /> <label for="question-12-answers-D">D) 8</label>
              </div>
            </li>

            <li>
              <h3>Which sum is incorrect?</h3>

              <div>
                <input type="radio" name="question-13-answers" id="question-13-answers-A"
                value="A" /> <label for="question-13-answers-A">A) 26 &divide; 13 =
                13</label>
              </div>

              <div>
                <input type="radio" name="question-13-answers" id="question-13-answers-B"
                value="B" /> <label for="question-13-answers-B">B) 5 &divide; 5 =
                1</label>
              </div>

              <div>
                <input type="radio" name="question-13-answers" id="question-13-answers-C"
                value="C" /> <label for="question-13-answers-C">C) 39 &divide; 3 =
                13</label>
              </div>

              <div>
                <input type="radio" name="question-13-answers" id="question-13-answers-D"
                value="D" /> <label for="question-13-answers-D">D) 45 &divide; 5 =
                9</label>
              </div>
            </li>

            <li>
              <h3>Which sum is correct?</h3>

              <div>
                <input type="radio" name="question-14-answers" id="question-14-answers-A"
                value="A" /> <label for="question-14-answers-A">A) 5 + 1 = 7</label>
              </div>

              <div>
                <input type="radio" name="question-14-answers" id="question-4-answers-B"
                value="B" /> <label for="question-14-answers-B">B) 19 + 2 = 20</label>
              </div>

              <div>
                <input type="radio" name="question-14-answers" id="question-14-answers-C"
                value="C" /> <label for="question-14-answers-C">C) 18 + 5 = 23</label>
              </div>

              <div>
                <input type="radio" name="question-14-answers" id="question-14-answers-D"
                value="D" /> <label for="question-14-answers-D">D) 6 + 18 = 12</label>
              </div>
            </li>

            <li>
              <h3>Which number makes this sum correct 90 &divide; __ = 10</h3>

              <div>
                <input type="radio" name="question-15-answers" id="question-15-answers-A"
                value="A" /> <label for="question-15-answers-A">A) 10</label>
              </div>

              <div>
                <input type="radio" name="question-15-answers" id="question-15-answers-B"
                value="B" /> <label for="question-15-answers-B">B) 9</label>
              </div>

              <div>
                <input type="radio" name="question-15-answers" id="question-15-answers-C"
                value="C" /> <label for="question-15-answers-C">C) 11</label>
              </div>

              <div>
                <input type="radio" name="question-15-answers" id="question-15-answers-D"
                value="D" /> <label for="question-15-answers-D">D) 0</label>
              </div>
            </li>

            <li>
              <h3>What is 49 - 12?</h3>

              <div>
                <input type="radio" name="question-16-answers" id="question-16-answers-A"
                value="A" /> <label for="question-16-answers-A">A) 37</label>
              </div>

              <div>
                <input type="radio" name="question-16-answers" id="question-16-answers-B"
                value="B" /> <label for="question-16-answers-B">B) 61</label>
              </div>

              <div>
                <input type="radio" name="question-16-answers" id="question-16-answers-C"
                value="C" /> <label for="question-16-answers-C">C) 51</label>
              </div>

              <div>
                <input type="radio" name="question-16-answers" id="question-16-answers-D"
                value="D" /> <label for="question-16-answers-D">D) 35</label>
              </div>
            </li>

            <li>
              <h3>What is 11 &times; 11</h3>

              <div>
                <input type="radio" name="question-17-answers" id="question-17-answers-A"
                value="A" /> <label for="question-17-answers-A">A) 111</label>
              </div>

              <div>
                <input type="radio" name="question-17-answers" id="question-17-answers-B"
                value="B" /> <label for="question-17-answers-B">B) 110</label>
              </div>

              <div>
                <input type="radio" name="question-17-answers" id="question-17-answers-C"
                value="C" /> <label for="question-17-answers-C">C) 121</label>
              </div>

              <div>
                <input type="radio" name="question-17-answers" id="question-17-answers-D"
                value="D" /> <label for="question-17-answers-D">D) 1111</label>
              </div>
            </li>

            <li>
              <h3>Which sum is incorrect?</h3>

              <div>
                <input type="radio" name="question-18-answers" id="question-18-answers-A"
                value="A" /> <label for="question-18-answers-A">A) 15 &divide; 3 =
                5</label>
              </div>

              <div>
                <input type="radio" name="question-18-answers" id="question-18-answers-B"
                value="B" /> <label for="question-18-answers-B">B) 94 &divide; 7 =
                12</label>
              </div>

              <div>
                <input type="radio" name="question-18-answers" id="question-18-answers-C"
                value="C" /> <label for="question-18-answers-C">C) 48 &divide; 6 =
                8</label>
              </div>

              <div>
                <input type="radio" name="question-18-answers" id="question-18-answers-D"
                value="D" /> <label for="question-18-answers-D">D) 100 &divide; 50 =
                50</label>
              </div>
            </li>

            <li>
              <h3>Which sum is correct?</h3>

              <div>
                <input type="radio" name="question-19-answers" id="question-19-answers-A"
                value="A" /> <label for="question-19-answers-A">A) 18 + 7 = 11</label>
              </div>

              <div>
                <input type="radio" name="question-19-answers" id="question-19-answers-B"
                value="B" /> <label for="question-19-answers-B">B) 22 + 12 = 45</label>
              </div>

              <div>
                <input type="radio" name="question-19-answers" id="question-19-answers-C"
                value="C" /> <label for="question-19-answers-C">C) 13 + 7 = 6</label>
              </div>

              <div>
                <input type="radio" name="question-19-answers" id="question-19-answers-D"
                value="D" /> <label for="question-19-answers-D">D) 11 + 11 = 22</label>
              </div>
            </li>

            <li>
              <h3>Which number makes this sum correct 48 - __ = 19</h3>

              <div>
                <input type="radio" name="question-20-answers" id="question-20-answers-A"
                value="A" /> <label for="question-20-answers-A">A) 29</label>
              </div>

              <div>
                <input type="radio" name="question-20-answers" id="question-20-answers-B"
                value="B" /> <label for="question-20-answers-B">B) 19</label>
              </div>

              <div>
                <input type="radio" name="question-20-answers" id="question-20-answers-C"
                value="C" /> <label for="question-20-answers-C">C) 20</label>
              </div>

              <div>
                <input type="radio" name="question-20-answers" id="question-20-answers-D"
                value="D" /> <label for="question-20-answers-D">D) 21</label>
              </div>
            </li><!-- <li>
                
                    <h3>What is 27 &divide; 9</h3>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                        <label for="question-21-answers-A">A) 9 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                        <label for="question-21-answers-B">B) 3 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                        <label for="question-21-answers-C">C) 36 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                        <label for="question-21-answers-D">D) 8 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 2 + 3</h3>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                        <label for="question-22-answers-A">A) 4 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                        <label for="question-22-answers-B">B) 5 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                        <label for="question-22-answers-C">C) 6 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                        <label for="question-22-answers-D">D) 9 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                        <label for="question-23-answers-A">A) 10 &times; 0 = 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                        <label for="question-23-answers-B">B) 5 &times; 5 = 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                        <label for="question-23-answers-C">C) 3 &times; 6 = 9</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                        <label for="question-23-answers-D">D) 4 &times; 8 = 12 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                        <label for="question-24-answers-A">A) 4 - 2 = 7</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                        <label for="question-24-answers-B">B) 1 - 2 = 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                        <label for="question-24-answers-C">C) 3 - 5 = 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                        <label for="question-24-answers-D">D) 6 - 6 = 12</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 9 + __ = 10</h3>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                        <label for="question-25-answers-A">A) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                        <label for="question-25-answers-B">B) 1 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                        <label for="question-25-answers-C">C) 3 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                        <label for="question-25-answers-D">D) 2 </label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>What is 0 &divide; 12?</h3>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                        <label for="question-26-answers-A">A) 4 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                        <label for="question-26-answers-B">B) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                        <label for="question-26-answers-C">C) 12 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                        <label for="question-26-answers-D">D) 6 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 4 &times; 7</h3>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                        <label for="question-27-answers-A">A) 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                        <label for="question-27-answers-B">B) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                        <label for="question-27-answers-C">C) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                        <label for="question-27-answers-D">D) 6</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />
                        <label for="question-28-answers-A">A) 1 + 0 = 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                        <label for="question-28-answers-B">B) 5 + 7 = 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                        <label for="question-28-answers-C">C) 3 + 6 = 8</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                        <label for="question-28-answers-D">D) 2 + 8 = 10 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                        <label for="question-29-answers-A">A) 8 - 2 = 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                        <label for="question-29-answers-B">B) 2 - 2 = 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                        <label for="question-29-answers-C">C) 3 - 5 = 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                        <label for="question-29-answers-D">D) 1 - 1 = 2</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 7 &times; __ = 30</h3>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                        <label for="question-30-answers-A">A) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                        <label for="question-30-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                        <label for="question-30-answers-C">C) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                        <label for="question-30-answers-D">D) 2</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h3>What is 7 - 5</h3>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-A" value="A" />
                        <label for="question-31-answers-A">A) 9 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                        <label for="question-31-answers-B">B) 11 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-C" value="C" />
                        <label for="question-31-answers-C">C) 12 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-D" value="D" />
                        <label for="question-31-answers-D">D) 8 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 2 + 3</h3>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-A" value="A" />
                        <label for="question-32-answers-A">A) 4 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                        <label for="question-32-answers-B">B) 5 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-C" value="C" />
                        <label for="question-32-answers-C">C) 6 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-D" value="D" />
                        <label for="question-32-answers-D">D) 9 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-A" value="A" />
                        <label for="question-33-answers-A">A) 10 &times; 0 = 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                        <label for="question-33-answers-B">B) 5 &times; 5 = 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-C" value="C" />
                        <label for="question-33-answers-C">C) 3 &times; 6 = 9</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-D" value="D" />
                        <label for="question-33-answers-D">D) 4 &times; 8 = 12 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-A" value="A" />
                        <label for="question-34-answers-A">A) 4 &divide; 2 = 7</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                        <label for="question-34-answers-B">B) 1 &divide; 2 = 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-C" value="C" />
                        <label for="question-34-answers-C">C) 3 &divide; 5 = 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-D" value="D" />
                        <label for="question-34-answers-D">D) 6 &divide; 6 = 12</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 9 - __ = 10</h3>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-A" value="A" />
                        <label for="question-35-answers-A">A) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                        <label for="question-35-answers-B">B) 1 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-C" value="C" />
                        <label for="question-35-answers-C">C) 3 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-D" value="D" />
                        <label for="question-35-answers-D">D) 2 </label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>What is 0 &divide; 12?</h3>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-A" value="A" />
                        <label for="question-36-answers-A">A) 4 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                        <label for="question-36-answers-B">B) 0 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-C" value="C" />
                        <label for="question-36-answers-C">C) 12 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-D" value="D" />
                        <label for="question-36-answers-D">D) 6 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is 4 &times; 7</h3>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-A" value="A" />
                        <label for="question-37-answers-A">A) 10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                        <label for="question-37-answers-B">B) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-C" value="C" />
                        <label for="question-37-answers-C">C) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-D" value="D" />
                        <label for="question-37-answers-D">D) 6</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which sum is incorrect?</h3>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-A" value="A" />
                        <label for="question-38-answers-A">A) 1 - 0 = 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                        <label for="question-38-answers-B">B) 5 - 7 = 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-C" value="C" />
                        <label for="question-38-answers-C">C) 3 - 6 = 8</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-D" value="D" />
                        <label for="question-38-answers-D">D) 2 - 8 = 10 </label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Which sum is correct?</h3>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-A" value="A" />
                        <label for="question-39-answers-A">A) 8 + 2 = 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                        <label for="question-39-answers-B">B) 2 + 2 = 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-C" value="C" />
                        <label for="question-39-answers-C">C) 3 + 5 = 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-D" value="D" />
                        <label for="question-39-answers-D">D) 1 + 1 = 2</label>
                    </div>
                    
                
                </li>
                <li>
                
                    <h3>Which number makes this sum correct 7 &divide; __ = 40</h3>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-A" value="A" />
                        <label for="question-40-answers-A">A) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                        <label for="question-40-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-C" value="C" />
                        <label for="question-40-answers-C">C) 0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-D" value="D" />
                        <label for="question-40-answers-D">D) 2</label>
                    </div>
                    
                
                </li>-->
          </ol><input type="submit" class="btn submitButton roundBtn greenHoverBtn"
          value="Submit Quiz" />
        </form><br />
      </div>

      <div class="col-md-3 text-center smlPadding"></div>
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
  </div><script src="https://code.jquery.com/jquery-1.11.3.min.js" type=
  "text/javascript">
</script><script src="js/bootstrap.js" type="text/javascript">
</script><script type="text/javascript" src="js/script.js">
</script>
</body>
</html>
