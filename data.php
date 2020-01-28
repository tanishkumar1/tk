<?php
echo "Hello";
$servername = "35.202.118.228";
$username = "tk";
$password = "Tanish@123";
$dbname="reg";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

  $fname = $_POST["fname"];
  $lname=$_POST["lname"];
  $email = $_POST["em"];
  $pass=$_POST["pass1"];
  $cpass=$_POST["pass2"];
  $phn=$_POST["phone"]);
  $country=$_POST["country"];
  $dob=$_POST["dob"];

$sql = "INSERT INTO reg_1 (fname, lname, dob,email,pass,cpass,pn,country)
VALUES ('$fname','$lname','$dob','$email','$pass','$cpass','$phn','$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
