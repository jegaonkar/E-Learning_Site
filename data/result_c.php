<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Calculate score based on submitted answers
    $score = 0;

    // Example: Check answers and update score
    if ($_POST['q1'] === 'a') 
    
    {
        $score++;
        
    }
    if ($_POST['q2'] === 'c') 
    
    {
        $score++;
        
    }
    if ($_POST['q3'] === 'a') 
    
    {
        $score++;
        
    }
    if ($_POST['q4'] === 'b') 
    
    {
        $score++;
        
    }
    if ($_POST['q5'] === 'd') 
    
    {
        $score++;
        
    }

    if ($_POST['q6'] === 'c') 
    
    {
        $score++;
        
    }
    if ($_POST['q7'] === 'b') 
    
    {
        $score++;
        
    }
    if ($_POST['q8'] === 'b') 
    
    {
        $score++;
        
    }
    if ($_POST['q9'] === 'a') 
    
    {
        $score++;
        
    }
    if ($_POST['q10'] === 'a') 
    
    {
        $score++;
        
    }
    // Repeat for other questions

    // Save user info and score to the database
    $sql = "INSERT INTO quiz_results_c (name, email, score) VALUES ('$name', '$email', $score)";
    if ($conn->query($sql) === TRUE) {
        echo "Score saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect based on the score
    if ($score >= 7) {
        header("Location: congratulations.php");
        exit();
    } else {
        header("Location: try_again.php");
        exit();
    }
}
?>
