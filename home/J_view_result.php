
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
                  <div class="col-md-8  ">
                     <nav class="navigation navbar navbar-expand-md navbar-dark container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="J_event_details.php">Event Details</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="J_selectpartquiz.php">View Quiz Response</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="J_selectpartcase.php">View CaseStudy Response</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="J_selectpartpost.php">View Poster Response</a>
                             </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="J_view_result.php">View Result</a>
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
                                <a class="nav-link" href="#"> </a>
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
      <div class="schedule">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                  
                 </div>
              </div>
           </div>
        </div>
     </div>
      
      <!-- end header -->
    
      <div class="schdule">
        <div class="text_align_center">
            <h2 style='font-size : xxx-large'><b>TECHNOCASE OVERALL RESULT </b></h2>
        </div><br>
      <?php
            $conn = mysqli_connect('localhost', 'root', '', 'technocase');
            $query="select P.name,P.course,P.college,R.eventType,R.percent from participant P JOIN result R ON P.participantID = R.participantID order by R.eventType desc, R.percent desc";
            $result=mysqli_query($conn,$query);
            $rank=1;
            echo"<div class='text_align_center' style='font-weight: bold; color : black ;  font-size: large;'><center><table border='5px' style='background-color : white; text-align: center; '>";
                echo "<tr>";
                        echo "<div><th><b>SR. NO.</b></th></div>";
                        echo "<div><th><b>Name</b></th></div>";
                        echo "<div><th><b>Course</b></th></div>";
                        echo "<div><th width=30%><b>College</b></th></div>";
                        echo "<div><th><b>Event Type</b></th></div>";
                        echo "<div><th><b>Percentage</b></th></div>";
                    echo "</tr>";
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)){
                    
                        echo "<tr>";
                        echo "<div><td>{$rank}</td></div>";
                        echo "<div><td>{$row['name']}</td></div>";
                        echo "<div><td>{$row['course']}</td></div>";
                        echo "<div><td>{$row['college']}</td></div>";
                        echo "<div><td>{$row['eventType']}</td></div>";
                        echo "<div><td>{$row['percent']}</td></div>";  
                    $rank++;
                }
                echo"<table></center></div>";
            }
            else{
                echo"Error";
            }
            mysqli_close($conn);
            ?>                 
      </div><BR>
       <!-- end header -->
    <div class="schedule">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage text_align_center">
                    
                </div>
             </div>
          </div>
       </div>
    </div>
      <!-- footer -->
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