<?php
session_start();
$participantID = $_SESSION['participantID'];
$name = $_SESSION['name'];
$endTime = $_SESSION['quiz_start_time'] + 150; // Assuming 300 seconds time limit
if (time() > $endTime) {
    // Redirect to a page indicating time's up
    header("Location:../home/P_time_up.html");
    exit();
}
else{
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'technocase';
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    // Check connection
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // Step 2: Handle the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['questions'])) {
            foreach ($_POST['questions'] as $question_id => $selected_option) {
                $question_id = mysqli_real_escape_string($conn, $question_id); // Sanitize the question ID
                $selected_option = mysqli_real_escape_string($conn, $selected_option); // Sanitize the selected option
                
                // Step 3: Insert the selected option into the database
                $query = "INSERT INTO quizresponse (quizID, participantID, response) VALUES ('$question_id','$participantID', '$selected_option')";
                 
    
                if (mysqli_query($conn,$query)) {
                    echo "<script type='text/javascript'>alert('Quiz submited Successfully'); </script>";
                    echo "<script type='text/javascript'>window.location='../home/participant_index.php' </script>";
                }
                else{
                    echo"submit";
                }
            }
        }
    }
    
    // Step 4: Close the database connection
    mysqli_close($conn);
    
}
?>

  