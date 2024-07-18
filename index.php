<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
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
            // Database connection setup (replace with your database credentials)
            
           include 'include/db.php';

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to retrieve images and descriptions from the database
            $query = "SELECT * from product";
            $result = mysqli_query($conn, $query);

            // Loop through the results and generate HTML for each image
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

            // Close the database connection
            mysqli_close($conn);
        ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your content goes here -->
    
    <!-- Include Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>


</html>