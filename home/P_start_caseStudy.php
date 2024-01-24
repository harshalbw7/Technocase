<?php
   session_start();
   $participantID = $_SESSION['participantID'];
   $name = $_SESSION['name'];
?> 
<?php
$conn = new mysqli("localhost","root", "", "technocase");
 
$sql = "select * from casestudy order by rand() limit 1";
$result = $conn->query($sql);

if (mysqli_num_rows($result)>0){
   while ($row = mysqli_fetch_assoc($result)){
      $random_question = $row['question'];
} 
}
else {
    $random_question = "No question found with the given ID.";
}
$conn->close();
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
      </header><BR>
      <!-- end header -->
       <br>
       <div class="schedule text_align_center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center">
                        <h2>CASE  STUDY</h2></div>
                        <div>
                        <div class="panel-heading"><h1><b>CASE STUDY INSTRUCTION</b></h1></div><br><br>
                        <ul>
                        <h2> 
                           <h3><li>participants are allowed to revise and resubmit their case study solutions before the deadline.</li><br>
                           <li>Require participants to use a specific font type, size, and formatting style for their written submissions.</li><br>
                           <li>Total time for the case study is 30 Minutes.</li><br>
                           <li>You can finish the competition at any time.</li><br>
                           <li>Read the question carefully before answering.</li><br>
                           <li>You can change your answers before submitting.</li><br>
                           <li>Good luck for the test.</li></ul></h3>
                           <br><hr>
                        </ul>
   
                     </div>
                        <p><?php echo "<b>Question :</b> ".$random_question; ?></p><br>
                        </div>
                    </div>
                </div>
            </div> 
            <div class=" text_align_center">     
            <h1><b>Upload Your Answer in PDF Format</b></h1><br>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="pdf_file" id="pdf_file">
                <br>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit PDF" name="submit">
            </form> 
            </div>
             
            <?php
               $conn = mysqli_connect('localhost','root','','technocase');
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $targetDir = "uploads/";  // Directory to store uploaded files
                  $targetFile = $targetDir . basename($_FILES["pdf_file"]["name"]);
                  $name = basename($_FILES["pdf_file"]["name"]);
                  $sql = "insert into casestudyresponse(participantID,question,fname) values($participantID,'$random_question','$name')";
                  $result = mysqli_query($conn,$sql);
                   
                  if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $targetFile)) {
                     echo "<hr><div class = 'text_align_center' style='font-size : large'><b>File uploaded successfully.</b></div><br>";

                     // Display the uploaded PDF using an iframe
                     echo '<iframe src="' . $targetFile . '" width="100%" height="600px"></iframe>';
                  } else {
                     echo "Error uploading file.";
                  }
               }
               ?>
        </div>
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