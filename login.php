<!-- Create login page php tp fetch data -->
<?php
include 'connection.php';
$hackathon_id = $_POST["hackathon_id"];
$password = $_POST["password"];
//Check whether this hackathon id and password is correct
$check_query = "SELECT * FROM login WHERE hackathon_id = '$hackathon_id' and password = '$password'";
$check_result = $conn->query($check_query);

if ($check_result->num_rows > 0) {
    while($row = $check_result->fetch_assoc()) {
        echo $row['hackathon_id'];
        if($hackathon_id == $row['hackathon_id']){
            // set cookie
            setcookie("userid", $hackathon_id, time() + (86400 * 30), "/");
            echo "<script>location.href='problem_statement.php'</script>";

            echo "Hackathon ID is correct";
        }else {
            echo "Incorrewct";

        }
    }
    ;
    // $_SESSION['auth'] = true;
    // session_start();
    
    // header("Location: problem_statement.php?Successfully+logged+in");

   
}
else {
    echo "<script>location.href='login1.php?error=Hackathon+ID+or+Password+is+incorrect'</script>";
    // header("Location: login1.php?error=Hackathon+ID+or+Password+is+incorrect");
}

?>