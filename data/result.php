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
    if ($_POST['q4'] === 'a') 
    
    {
        $score++;
        
    }
    if ($_POST['q5'] === 'b') 
    
    {
        $score++;
        
    }

    if ($_POST['q6'] === 'd') 
    
    {
        $score++;
        
    }
    if ($_POST['q7'] === 'c') 
    
    {
        $score++;
        
    }
    if ($_POST['q8'] === 'c') 
    
    {
        $score++;
        
    }
    if ($_POST['q9'] === 'b') 
    
    {
        $score++;
        
    }
    if ($_POST['q10'] === 'c') 
    
    {
        $score++;
        
    }
    // Repeat for other questions

    // Save user info and score to the database
    $sql = "INSERT INTO quiz_results_python (name, email, score) VALUES ('$name', '$email', $score)";
    if ($conn->query($sql) === TRUE) {
        echo "Score saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect based on the score
    if ($score >= 7) {
        echo '<script>alert("CONGRATULATIONS !!! You will get certificate on your Email");';
        echo 'window.location.href = "../index.php";</script>';
        exit();
    } else {
        echo '<script>alert("Better Luck. Please try again.");';
        echo 'window.location.href = "../pythonlanguage/assesment_python.php";</script>';
        exit();
    }
}
?>
