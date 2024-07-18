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

    //Product
    $productName = $_POST["productName"];
    $productCategory = $_POST["productCategory"];
    $productCompany = $_POST["productCompany"];
    $productPrice = $_POST["productPrice"];
    $productPrice = $_POST["productUrl"];

    // Insert data into the database

 

    $sql = "INSERT INTO Product (productName, productCategory, productCompany, productPrice, productUrl) VALUES ('$productName',
    '$productCategory', '$productCompany', '$productPrice', '$productUrl')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
