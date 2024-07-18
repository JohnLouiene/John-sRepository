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
    $customerID = ($_POST["customerID"]);
    $productID = ($_POST["productID"]);
    $orderQuantity = ($_POST["orderQuantity"]);
    $orderPayment = ($_POST["orderPayment"]);
    $orderTotalBill = ($_POST["orderTotalBill"]);

    // Insert data into the database

 

    $sql = "INSERT INTO ORDER (customerID, productID, orderQuantity, orderPayment, orderTotalBill) VALUES ('$customerID',
    '$productID', '$orderQuantity', '$orderPayment', '$orderTotalBill')";



    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
