<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $query="select * from participant where uname = '$username' and upass = '$pass'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)) {
                $participantID = $row['participantID'];
                $name = $row['name'];
                extract($_POST);
                $_SESSION['participantID']=$participantID;
                $_SESSION['name']=$name;
                header("location: ../home/participant_index.php?success = added");
            }
        }
        else{
            echo"login failed.";
        }   
    }
    mysqli_close($conn);
?>