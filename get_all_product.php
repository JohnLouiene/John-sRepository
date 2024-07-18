<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid" >
        
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         
        <?php include 'include/nav.php'; ?>
        

        </div>
    </nav>

    <div class="container mt-4">
        <h2>Product List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Price</th>
                    <th>Product Url</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                include 'include/db.php';

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch product data from the database
                $sql = "SELECT product.productID, product.productName, product.productCategory, product.productCompany, product.productPrice, product.productUrl from product";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["productID"] . "</td>";
                        echo "<td>" . $row["productName"] . "</td>";
                        echo "<td>" . $row["productCategory"] . "</td>";
                        echo "<td>" . $row["productCompany"] . "</td>";
                        echo "<td>" . $row["productPrice"] . "</td>";
                        echo "<td>" . $row["productUrl"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No products found.";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>
