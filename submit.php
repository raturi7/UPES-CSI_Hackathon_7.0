<?php
include 'connection.php';
$hackathon_id = $_POST["hackathon_id"];

$problem_statement = $_POST["problem_statement"];
$problem_description = $_POST["problem_description"];
$expected_outcome = $_POST["expected_outcome"];
// Check whether this hackathon ID and problem ID is already present in the database
$check_query = "SELECT * FROM team WHERE hackathon_id = '$hackathon_id' ";
$check_result = $conn->query($check_query);

if ($check_result->num_rows == 0) {
    // Insert the data into the database if it's not already present
    $insert_query1 = "INSERT INTO problem_statement (hackathon_id,  problem_statement, problem_description, Expected_Outcomes) VALUES ('$hackathon_id', '$problem_statement', '$problem_description', '$expected_outcome')";
    $insert_query = "INSERT INTO team (hackathon_id, id) VALUES ('$hackathon_id', 'Problem Submited by user')";
    $conn->query($insert_query);
    $conn->query($insert_query1);
    echo $hackathon_id;
    header("Location: problem_statement.php?success=Successfully+added+the+problem+statement");
}
if ($check_result->num_rows > 0) {
    header("Location: problem_statement.php?error=Hackathon+ID+already+exists");
}

?>