<?php 

$con=mysqli_connect("localhost","root","","codopedia");
if(!$con)
{
    echo "Can't reach server right now";
}

if(isset($_POST['submit']))
{

    $coursename=$_POST['coursename'];
    $comment=$_POST['comment'];
    $sql="INSERT INTO comments (username, comment) VALUES('$coursename', '$comment');";
    $exe=mysqli_query($con, $sql);

    echo "<script>window.open('index.php','_self')</script>";
}

?>