<?php
   session_start();
   $participantID = $_SESSION['participantID'];
   $name = $_SESSION['name'];
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
                                 <a class="nav-link" href="P_view_result.php">View Result</a>
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
      </header><br>
      <!-- end header -->
       
      <div class="schdule">
        <div class="text_align_center">
            <h2 style='font-size : xxx-large'><b>PARTICIPANT RESULT</b></h2>
        </div><br>
      <?php
            $conn = mysqli_connect('localhost', 'root', '', 'technocase');
            if(isset($_POST['result'])){
                $eventType = $_POST['event'];
                $query="select P.name,P.course,P.college,R.eventType,R.participantScore,R.totalMarks,R.percent from participant P JOIN result R ON P.participantID = R.participantID where P.participantID = $participantID and R.eventType = '$eventType' ";
                $result=mysqli_query($conn,$query);
                
                if(mysqli_num_rows($result)>0){
                    echo"<div><div class='text_align_center' style='font-weight: bold; padding : 10px 80px; color : black ;  font-size: x-large;'><table border='5px' style='background-color : white; text-align: center; '><table border='5px' style='background-color : white; text-align: center; '>";
                    while ($row = mysqli_fetch_assoc($result)){
                         
                            echo "<div><tr><td>Name   </td><td> {$row['name']}<td></tr></div>";
                            echo "<div><tr><td>Course   </td><td> {$row['course']}<td></tr></div>";
                            echo "<div><tr><td width = 20%>College   </td><td width = 80%> {$row['college']}<td></tr></div>";
                            echo "<div><tr><td>Event Type   </td><td> {$row['eventType']}<td></tr></div>";
                            echo "<div><tr><td>Your Score   </td><td> {$row['participantScore']}<td></tr></div>";
                            echo "<div><tr><td>Total Score   </td><td> {$row['totalMarks']}<td></tr></div>";
                            echo "<div><tr><td>Percentage   </td><td> {$row['percent']}<td></tr></div>";
                    }
                    echo"</table></div></div>";
                }
                else{
                    echo"Error";
                }
            }
            else{
                echo"error";
            }
            mysqli_close($conn);
         ?>                 
      </div><br><br>
       <!-- end header -->
     
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