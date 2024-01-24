<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['login'])){
        $ID = $_POST['ID'];
        $pass = $_POST['pass'];
        $query="select * from judge where jname = '$ID' and jpass = '$pass'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location: ../home/judge_index.html?success = added");
        }
        else{
            echo"login failed.";
        }
        
    }
    mysqli_close($conn);
?>