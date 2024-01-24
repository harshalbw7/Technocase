<?php
    if(isset($_POST['submit'])){
    $id= $_POST["id"];
    $score = $_POST["score"];
    $total = $_POST["outoff"];
    $percentage=($score*100)/$total;
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
    $sql = "INSERT INTO result(eventType,participantScore,totalMarks,participantID,percent) values('Quiz',$score,$total,$id,$percentage)";
    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>alert('Result submited Successfully'); </script>";
                echo "<script type='text/javascript'>window.location='judge_index.html' </script>";
    }
    else{
        echo"error";
    }
}
?>