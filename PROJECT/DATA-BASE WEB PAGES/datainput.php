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
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $email=$_POST['email'];
    $dob=$_POST['birthDate'];
    $address=$_POST['address'];
    $contact=$_POST['phone'];
    $password=$_POST['password'];

    $sql="INSERT INTO `user data`(`first name`, `last name`, `email`, `dob`, `address`, `number`, `password`) VALUES ('$firstname','$lastname','$email','$dob','$address','$contact','$password')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Account created successfully')</script>";
        echo "<script>window.open('accountlogin.php','_self')</script>";
    }
    else
    {
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
