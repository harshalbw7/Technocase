<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['login'])){
        $ID = $_POST['ID'];
        $pass = $_POST['pass'];
        $query="select * from organiser where oname = '$ID' and opass = '$pass'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location: ../home/organiser_index.html?success = added");
        }
        else{
            echo"login failed.";
        }
        
    }
    mysqli_close($conn);
?>