<?php
$servername = "localhost";
$username = "root";
$password = "";
$hackathon_id = $_POST["hackathon_id"];
$id = $_POST["id"];

$conn = new mysqli($servername, $username, $password, "problem_statement");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values from the form
$hackathon_id = $_POST["hackathon_id"];
$id = $_POST["id"];

// Check if the hackathon ID already exists in the database
$check_hackathon_query = "SELECT * FROM team WHERE hackathon_id = '$hackathon_id'";
$check_hackathon_result = $conn->query($check_hackathon_query);

if ($check_hackathon_result->num_rows > 0) {
    header("Location: problem_statement.php?error=Hackathon+ID+already+exists");
    exit();
}

// Check if the problem ID is less than 3 times in the database
$check_id_query = "SELECT COUNT(*) as count FROM team WHERE id = '$id'";
$check_id_result = $conn->query($check_id_query);
$count = 0;

if ($check_id_result->num_rows > 0) {
    $row = $check_id_result->fetch_assoc();
    $count = $row["count"];
}

if ($count >= 3) {
    header("Location: problem_statement.php?error=Problem+ID+already+choosed+by+3+teams");
    exit();
}

// Insert the data into the database if the hackathon ID is not present and the problem ID is less than 3 times
$insert_query = "INSERT INTO team (hackathon_id, id) VALUES ('$hackathon_id', '$id')";
$conn->query($insert_query);
header("Location: problem_statement.php?success=Successfully+added+the+problem+statement");

// Close the connection
$conn->close();

?>