<?php
    $conn = mysqli_connect('localhost', 'root', '', 'technocase');
     
    if(isset($_POST['register'])){
        //$id= rand(1111,9999);
        $name = $_POST['name'];
        $puser = $_POST['puser'];
        $contact = $_POST['contact'];
        $college = $_POST['college'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $ppass = $_POST['ppass'];
    
        $query="insert into participant(name,email,contact,course,uname,upass,college) values ('$name','$email','$contact','$course','$puser','$ppass','$college')";
        if(mysqli_query($conn,$query)){
            echo "<script type='text/javascript'>alert('Question added Successfully'); </script>";
            header("location: ../login/participant_login.html?success = added");
        }
        else{
            echo"Registeration failed.";
        }
        
    }
    mysqli_close($conn);
?>