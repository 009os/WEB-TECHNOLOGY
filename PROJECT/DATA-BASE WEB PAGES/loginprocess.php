<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping cart";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql = "SELECT * FROM `user data` WHERE email='$email ' and password='$password'";
    $que=mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0)
    {
        echo "<script>alert('Login successfully')</script>";
        echo "<script>window.open('CATALOG.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('wrong user name or password')</script>";
        echo "<script>window.open('accountlogin.php','_self')</script>";
    }
    mysqli_close($conn);
}
?>