<!-- controller file with blank entries in database -  -->


<?php
// Retrieve form data


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
    // rest of your code
//  }
 

// Connect to database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into database
if(($username != "" && $email != "" && $password !="")){

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
