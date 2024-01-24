<?php
   session_start();
   $sd=$_SESSION['sd'];
   $ed=$_SESSION['ed'];
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
   <body class="main-layout inner_page" background="../home/images/banner .jpg">
       
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
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About institute</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="view_feedback.php">Feedback</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/Organiser_login.html">Organiser Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/participant_login.html">Paticipant Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/judge_login.html">Jugde Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class=" col-md-2 col-sm-3 col logo_section">
                           <div class="full">
                              <div class="center-desk">
                                 <div class="link">
                                    <a class="nav-link" href="https://www.iicmr.org" style="color: darkorange"><b>www.iicmr.org</b></a>
                                 </div>
                              </div>
                           </div>
                        </div>
               </div>
            </div>
         </div>
      </header><br>
      <!-- end header -->
      <div class="schedule">
        <div class="container">
           <div class="row">
              <div class="col-md-12 text_align_center">
               <image src="../home/images/Screenshot 2023-08-02 141939.png"></image><br><br>
               <table>
                  <td>
                     <tr><h2 style="background-color :  ; font-weight : bold;">Start Date : <?php echo $sd; ?></h3></tr><br>
                     <tr><h2 style="background-color :  ; font-weight : bold;">End Date : <?php echo $ed; ?></h2></tr>
                  </td>
               </table>
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