<?php
   session_start();
   $participantID = $_SESSION['participantID'];
   $name = $_SESSION['name'];
   $_SESSION['quiz_start_time'] = time();
?>  
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TechnoCase</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   
   <!-- body -->
   <body class="main-layout inner_page" background="../home/images/p8.png">
       
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo1.png" alt="#" height="70" width="70" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <nav class="navigation navbar navbar-expand-md navbar-dark container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="P_event_details.php">Event Details</a>
                              </li>
                              <li class="nav-item"> 
                                 <a class="nav-link" href="P_select_event.php">Select Event</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="P_view_result.php">view Result</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="P_view_profile.php">view Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="P_feedback.php">Feedback</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"> </a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"> </a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"> </a>
                             </li>
                             <li class="nav-item">
                             <a class="nav-link" style="color : orange"><?php echo $name ?></a>
                             </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html" style="color:darkorange;">LOG_OUT</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
       <br>
       <div id="timer" class="text_align_center" style="font-size : large; font-weight : bold ; background-color : lightgreen; color : black"></div><br>
       <div class="content-wrapper">
         <div class="container">
             
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="panel panel-primary">
                     
                     <div class="col-md=8">
                     <div class="container">
                        <form id="quizForm" method="post" action="../php resource/P_submit_quiz.php"> <!-- Form submits to "submit_responses.php" -->
                           <?php
                           // Step 1: Connect to the database
                           $host = 'localhost';
                           $username = 'root';
                           $password = '';
                           $database = 'technocase';

                           $connection = mysqli_connect($host, $username, $password, $database);

                           // Check connection
                           if (mysqli_connect_errno()) {
                              die("Database connection failed: " . mysqli_connect_error());
                           }

                           // Step 2: Retrieve multiple questions and options
                           $query = "select * from quiz order by rand() limit 5";
                           $result = mysqli_query($connection, $query);
                           $index = 1 ;

                           if ($result && mysqli_num_rows($result) > 0) {
                           // Step 3: Display each question and options with radio buttons
                           while ($question = mysqli_fetch_assoc($result)) {
                                 $question_id = $question['quizID'];
                                 $question_text = $question['question'];
                                 //$correct = $question['correctOption'];
                                 $option1=$question['option1'];
                                 $option2=$question['option2'];
                                 $option3=$question['option3'];
                                 $option4=$question['option4'];

                                 echo "<h2>$index. {$question_text}</h2><br>";
                                 echo "<ul>";
                                 echo "<li><h3><input type='radio' name='questions[{$question_id}]' value='$option1' required> <label>{$question['option1']}</label></h3></li>";
                                 echo "<li><h3><input type='radio' name='questions[{$question_id}]' value='$option2' required> <label>{$question['option2']}</label></h3></li>";
                                 echo "<li><h3><input type='radio' name='questions[{$question_id}]' value='$option3' required> <label>{$question['option3']}</label></h3></li>";
                                 echo "<li><h3><input type='radio' name='questions[{$question_id}]' value='$option4' required> <label>{$question['option4']}</label></h3></li>";
                                 //echo "<li><input type='radio' name='questions[{$question_id}]' value='correctoption'> <label>{$question['correctOption']}</label></li>";
                                 //"<li name='questions[{$question_id}]' value='correctOption'> <label>{$question['correctOption']}</label></li>";
                                    
                                 echo "</ul>";
                                 echo "<hr>"; // Add a horizontal rule to separate questions
                                 $index++;
                           }
                           } else {
                              echo "<p>No questions found in the database.</p>";
                           }

                           // Step 4: Close the database connection
                           mysqli_close($connection);
                           ?>

                           <input style="background-color :orange; font-weight : bold ;" type="submit" value="Submit Quiz"> <!-- The submit button to send responses to "submit_responses.php" -->
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         var timeLeft = 150; // Set the time in seconds
         var timer = setInterval(function() {
            document.getElementById("timer").innerHTML = timeLeft + " seconds remaining";
            timeLeft--;
            if (timeLeft < 0) {
                  clearInterval(timer);
                  // Automatically submit the quiz form
                  document.getElementById("quizForm").submit();
            }
         }, 1000);
    </script>
      <footer>
         <div class="copyright text_align_left">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-6">
                     <p>© 2023 Technocase Event , IICMR  <a href="https://html.design/"> </a></p>
                  </div>
                  <div class="col-md-6">
                     <ul class="social_icon text_align_center">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>