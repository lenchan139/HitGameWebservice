<?php
$servername = "localhost";
$username = "ive_fyp";
$password = "1335fyp1335";
$dbname = "iOS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_GET['name'];
$score = $_GET['score'];
$date = date("Y-m-d h:i:sa");
if($name == '' && $score == ''){
	$errorMsg = "Invaild Data";
}else{
$sql = "INSERT INTO scoreboard (name, score, date)
VALUES ('$name', '$score', '$date')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ". $errorMsg . $sql . "<br>" . $conn->error ;
}

$conn->close();
?>