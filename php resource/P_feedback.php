<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['submit'])){
         
        $name = $_POST['name'];
        $review = $_POST['review'];
        $feedback = $_POST['feedback'];
    
        $query="insert into feedback (participantName,review,feedback) values ('$name','$review','$feedback')";
        if(mysqli_query($conn,$query)){
            echo "<script type='text/javascript'>alert('feedback submited Successfully'); </script>";
            echo "<script type='text/javascript'>window.location='../home/P_feedback.php' </script>";
        }
        else{
            echo"Registeration failed.";
        }
        
    }
    mysqli_close($conn);
?>