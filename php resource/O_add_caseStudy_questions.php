<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['submit'])){
         
        $question = $_POST['question'];
    
        $query="insert into casestudy (question) values ('$question')";
        if(mysqli_query($conn,$query)){
            echo "<script type='text/javascript'>alert('Question added Successfully'); </script>";
            echo "<script type='text/javascript'>window.location='../home/O_add_caseStudy_questions.html' </script>";
        }
        else{
            echo"Registeration failed.";
        }
        
    }
    mysqli_close($conn);
?>