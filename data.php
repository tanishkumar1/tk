<?php
$servername = "35.202.118.228";
$username = "tk";
$dbpass = "Tanish@123";
$dbname="reg";

  $fname = $_POST["fname"];
  $lname=$_POST["lname"];
  $email = $_POST["em"];
  $pass=$_POST["pass1"];
  $cpass=$_POST["pass2"];
  $phn=$_POST["phone"]);
  $country=$_POST["country"];
  $dob=$_POST["dob"];

// Create connection
$conn = new mysqli($servername, $username, $dbpass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO reg_1 (fname, lname, gender, dob,email,pass,cpass,pn,country)
VALUES ('$fname','$lname','m','$dob','$email','$pass','$cpass','$phn','$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
