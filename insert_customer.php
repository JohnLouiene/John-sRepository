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

    // Customer
    $customerFName = ($_POST["customerFName"]);
    $customerMName = ($_POST["customerMName"]);
    $customerLName = ($_POST["customerLName"]);
    $customerAddress = ($_POST["customerAddress"]);
    $customerContactNumber = ($_POST["customerContactNumber"]);
    $customerDiscount = ($_POST["customerDiscount"]);

    // Insert data into the database

 

    $sql = "INSERT INTO CUSTOMER (customerFName, customerMName, customerLName, customerAddress, customerContactNumber, customerDiscount) VALUES ('$customerFName',
    '$customerMName', '$customerLName', '$customerAddress', '$customerContactNumber', '$customerDiscount')";



    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
