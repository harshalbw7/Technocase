
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
      <style>
               table {
         border-collapse: collapse;
         width: 100%;
         border: 1px solid #ccc;
         }

         th, td {
         border: 1px solid #ccc;
         padding: 8px;
         text-align: left;
         }

         th {
         background-color: #f2f2f2;
         }

         tr:nth-child(even) {
         background-color: #f2f2f2;
         }

         tr:hover {
         background-color: #ddd;
         }
      </style>
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
      <div>
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                 <h2>TECHNOCASE EVENT JUDGE</h2><br><br> 
                 <?php
                       $conn = mysqli_connect('localhost', 'root', '', 'technocase');
                       $name = $_POST['partname'];
                       $sql = "SELECT participant.participantID,participant.name, participant.college
                               FROM participant
                               inner JOIN posterresponse ON participant.participantID = posterresponse.participantID
                               where participant.name='$name'";
                              $result = mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result)>0){
                              if ($row = mysqli_fetch_assoc($result)){
                                 echo "<h1>Participant Details</h1><br>";
                                 $id = $row['participantID'];
                                 echo "<b>Participant Name : </b>".$row["name"];
                                 echo"<br>";
                                 echo "<b>Participant College : </b>".$row["college"];
                           }
                        }
                       ?>  
                 </div>
              </div>
           </div>
        </div>
   </div>
      <!-- end header -->
      <div>
      <?php
         $conn = mysqli_connect('localhost', 'root', '', 'technocase');
         $sql = "Select question,fname from posterresponse where participantID=$id";
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0){
            if($row = mysqli_fetch_assoc($result)){
                $q=$row['question'];
                $f=$row['fname'];
            }
         }
         $conn->close();
        ?>
    </div>
   </div>
    <div class="text_align_center">
    <form method="post" action="../php resource/J_posterresult.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <label for="Score" ><b>Score : </b></label>
      <input type="number" id="score" name="score" max="50" required >
      <label for="Outoff"><b>Outoff : <b></label>
      <input type="number" id="outoff" name="outoff" value=50 required >
      <button type="submit" class="submit-button" style="background-color : darkorange" name="submit"><b>Submit Marks</b></button><br>
      <?php $fname=(string)$f;?>
      <iframe src="uploads/<?php echo $fname;?>" width="100%" height="600px"></iframe>
    </form>
    </div>
      <!-- footer -->

      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>