<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['submit'])){
         
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correct = $_POST['correct'];
    
        $query="insert into quiz (question,option1,option2,option3,option4,correctOption) values ('$question','$option1','$option2','$option3','$option4','$correct')";
        if(mysqli_query($conn,$query)){
            echo "<script type='text/javascript'>alert('Question added Successfully'); </script>";
            echo "<script type='text/javascript'>window.location='../home/O_add_quiz_question.html' </script>";
        }
        else{
            echo"Registeration failed.";
        }
        
    }
    mysqli_close($conn);
?>