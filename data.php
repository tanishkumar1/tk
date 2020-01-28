<?php
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname=test_input($_POST["lname"]);
  $email = test_input($_POST["em"]);
  $pass=test_input($_POST["pass1"]);
  $cpass=test_input($_POST["pass2"]);
  $gender = test_input($_POST["gender"]);
  $phn=test_input($_POST["phone"]);
  $country=test_input($_POST["country"]);
  $dob=test_input($_POST["dob"]);
}
$sql = "INSERT INTO reg_1 (fname, lname, dob,email,pass,cpass,pn,country)
VALUES ($fname,$lname,$dob,$email,$pass,$cpass,$phn,$country)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
