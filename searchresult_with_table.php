<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url('https://images.pexels.com/photos/131661/pexels-photo-131661.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-repeat: no-repeat;
  background-size: cover;">
<div class="container-fluid">
        
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         
        <?php include 'include/nav.php'; ?>
        

        </div>
    </nav>
    <br>

<div class="container">
        <h2>Shopping</h2>
        <div class="row">

<?php
// Database connection details
include 'include/db.php';

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {  // we are calling the variable name 
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's search query from the form
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    // Perform a database query
    
    //% is a wildcard character used in conjuction with like
    

    $sql = "SELECT * FROM product WHERE (productName LIKE '%$search%' OR productCompany LIKE '%$search%' OR productCategory LIKE '%$search%')";
    $result = $conn->query($sql);
    



    if ($result->num_rows > 0) {
    // Display the search results
    while ($row = mysqli_fetch_assoc($result)) {
        $imageId = $row['productID'];
        $imagePath = $row['productUrl'];
        $prodCompany = $row['productCompany'];
        $prodname = $row['productName'];

        echo '<div class="col-md-4">
                <div class="card" style="margin:20px; background-color:#37474F; color:white; min-height:450px;">
                <img src="' . $imagePath . '" class="card-img-top" style="min-height:300px;" alt="' . $prodCompany . '">
                    <div class="card-body">
                        <h4 class="card-title">' . $prodname . '</h5>
                        <p class="card-text">' . $prodCompany . '</p>
                    </div>
                </div>
            </div>';
    }
} else {
    echo '<div class="col-md-4">
                <div class="card" style="margin:20px; background-color:#37474F; color:white;">
                    <div class="card-body">
                    <center>
                        <h4 class="card-title">No Results Found</h5>
                        </center>
                    </div>
                </div>
            </div>';
}
}

// Close the database connection
$conn->close();
?>
</div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>