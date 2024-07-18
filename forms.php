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
<body style="background-image: url('https://images.pexels.com/photos/131661/pexels-photo-131661.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-repeat: repeat-y;
  background-size: 100% auto;">
     <div class="container-fluid">
        
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         
        <?php include 'include/nav.php'; ?>
        

        </div>
    </nav>


<div style="margin:50px; background-color: #7EC8E3; border-radius: 25px; display:inline-block;">
<h1 style="padding: 5px; ">Shopping Database</h1>
</div>

<!--customer -->
<form method="post" action="insert_customer.php">

<div style="margin:50px; background-color: #7EC8E3; border-radius: 25px; padding: 30px;">
<h1>Customer</h1>

<div class = "form-group" style="margin:25px;">

<label>First Name:</label>
<input type="text" name="customerFName" class="form-control" id="cuscustomerFNametomerFName">
<br>

<label>Middle Name:</label>
<input type="text" name="customerMName" class="form-control" id="customerMName">
<br>

<label>Last Name:</label>
<input type="text" name="customerLName" class="form-control" id="customerLName">
<br>

<label>Address</label>
<input type="text" name = "customerAddress" class="form-control" id = "customerAddress">
<br>

<label>Contact Number</label>
<input type="text" name="customerContactNumber" class="form-control" id="customerContactNumber">
<br>

<label>Discount</label>
<input type="text" name="customerDiscount" class="form-control" id="customerDiscount">
</div>
<br>
<br>

<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
<br>
<br>

<!--product -->
<form method="post" action="insert_product.php">

<div style="margin:50px; background-color: #7EC8E3; border-radius: 25px; padding: 30px;" >
<h1>Product</h1>

<div class = "form-group" style="margin:25px;">

<label>Name:</label>
<input type="text" name="productName" class="form-control" id="productName">
<br>

<label>Category:</label>
<input type="text" name = "productCategory" class="form-control" id = "productCategory">
<br>

<label>Company:</label>
<input type="text" name="productCompany" class="form-control" id="productCompany">
<br>

<label>Price:</label>
<input type="text" name="productPrice" class="form-control" id="productPrice">
<br>

<label>Product Picture URL:</label>
<input type="text" name="productUrl" class="form-control" id="productUrl">
</div>
<br>
<br>

<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
<br>
<br>

<!--order -->
<form method="post" action="insert_order.php">
<div style="margin:50px; background-color: #7EC8E3; border-radius: 25px; padding: 30px;" >
<h1>Order</h1>

<div class = "form-group" style="margin:25px;">

<label>Customer ID:</label>
<input type="text" name="customerID" class="form-control" id="customerID">
<br>

<label>Product ID:</label>
<input type="text" name="productID" class="form-control" id="productID">
<br>

<label>Quantity:</label>
<input type="text" name = "orderQuantity" class="form-control" id = "orderQuantity">
<br>

<label>Payment:</label>
<input type="text" name="orderPayment" class="form-control" id="orderPayment">
<br>

<label>Total Bill:</label>
<input type="text" name="orderTotalBill" class="form-control" id="orderTotalBill">
</div>
<br>
<br>

<button type="submit" class="btn btn-primary">Save</button>
</div>
</form> 
    <!-- Your content goes here -->
    
    <!-- Include Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>


</html>