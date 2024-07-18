<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    include 'include/db.php';
    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //$conn - is a variable name. can be change 

    // Check the connection
    if ($conn->connect_error) {  // we are calling the variable name 
        die("Connection failed: " . $conn->connect_error);
    }

    // Order
    $userName = ($_POST["userName"]);
    $userEmail = ($_POST["userEmail"]);
    $userPassword = ($_POST["userPassword"]);


    // Insert data into the database

 

    $sql = "INSERT INTO USERS (userName, userEmail, userPassword) VALUES ('$userName',
    '$userEmail', '$userPassword')";



    if ($conn->query($sql) === TRUE) {
        header('Location: http://localhost/test_page/index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
