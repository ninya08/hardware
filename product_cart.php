
<?php  include('cart.php');
// Retrieve the cart items from the database
  $stmt = $conn->prepare("SELECT * FROM p_cart");
  $stmt->execute();
  $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
  $totalPrice = 0;
  foreach ($products as $product) {
      $totalPrice += $product['p_price'];
  }
?>

<?php
  $shippingPrice = $totalPrice * 0.05;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AvengerSquad_HardwareNI</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/site.css">
  </head>
  <style>
    .topnav-left {
      float: left;
    }

    .topnav-right {
      float: right;
    }

    .gradient-custom {
      /* fallback for old browsers */
      background: #ffffff;
      /* Chrome 10-25, Safari 5.1-6
            background: -webkit-linear-gradient(to right, rgb(255, 255, 255), rgba(255, 136, 0));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      /* background: linear-gradient(to right, rgb(255, 255, 255), rgba(255, 136, 0)) */
    }
  </style>
  <body style="padding-top: 0px;">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">Hardware N.I.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="home.php" class="nav-link active" style="padding-left: 50px;padding-right: 50px;">
                  <i class="fa-sharp fa-solid fa-house fa-sm" style="color: #000000;">&nbsp&nbsp</i>Home </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                  <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #000000;">&nbsp&nbsp</i>Cart </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a href="product_cart.php" class="dropdown-item">Products</a>
                  </li>
                  <li>
                    <a href="service_cart.php" class="dropdown-item">Services</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;"> Categories </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a href="product.php" class="dropdown-item">Products</a>
                  </li>
                  <li>
                    <a href="service.php" class="dropdown-item">Services</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="float: right;">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                  <i class="fa-sharp fa-solid fa-magnifying-glass fa-sm" style="color: #000000;"></i>
                </button>
              </form>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                  <i class="fa-sharp fa-solid fa-ellipsis-vertical" style="color: #000000;"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="dashboard_order_product.php">Dashboard</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="seller_product.php">Shop</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.php">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="h-100 gradient-custom">
      <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
          <div class="col-md-8">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Product Cart</h5>
              </div>
              <div class="card-body">
                <?php foreach ($products as $product): ?>
                <div class="row">
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="images/<?php echo $product['p_image']; ?>" class="w-100" alt="<?php echo $item['p_name']; ?>" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>
                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p>
                      <strong><?php echo $product['p_name']; ?></strong>
                    </p>
                    <p><?php echo "₱ " . $product['p_price']; ?></strong>
                    </p>
                    <a href="#" class="delete-button" data-productid="<?php echo $product['c_id']; ?>">
                      <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">   
                        <i class="fa-sharp fa-solid fa-trash" style="color: #ffffff;"></i> 
                      </button>
                    </a>
                    <!-- Data -->
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex mb-4">
                      <form action="update_quantity.php" method="POST" class="w-100"> <!-- Add a class to make the form full width -->
                        <input type="hidden" name="product_id" value="<?php echo $product['p_id']; ?>">
                        <div class="row g-2 p-2 align-items-center"> <!-- Use a row with align-items-center class -->
                          <div class="col"> <!-- Use a column to contain the minus button -->
                            <button class="btn btn-primary px-4 me-2" type="submit" name="updateQuantity" value="-1">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <div class="col"> <!-- Use a column to contain the input field -->
                            <div class="form-outline m-0" style="width:80px"> <!-- Add m-0 class to remove margin on form-outline -->
                              <input min="0" name="quantity" value="<?php echo $product['quantity']; ?>" type="number" class="form-control text-start text-md-center" data-price="<?php echo $product['p_price']; ?>" onchange="updateTotalPrice()">
                            </div>
                          </div>
                          <div class="col"> <!-- Use a column to contain the plus button -->
                            <button class="btn btn-primary px-4 ms-2" type="submit" name="updateQuantity" value="1">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- Quantity -->
                  </div>
                </div>
                <hr class="my-4" />
                <?php endforeach; ?>
              </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <p>
                    <strong>Expected shipping delivery</strong>
                    </p>
                    <?php
                        $today = date('d.m.Y');
                        $futureDate = date('d.m.Y', strtotime('+3 days'));
                    ?>
                    <p class="mb-0"><?php echo $today; ?> - <?php echo $futureDate; ?></p>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
              <div class="card-body">
                <p>
                  <strong>We accept</strong>
                </p>
                <button style="border:none;">
                    <img class="me-2"  width="150px" height="80px" src="https://sugbo.ph/wp-content/uploads/2020/05/globe-gcash.png" alt="Gcash" />
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Summary</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <?php
                  // Fetch the products from the cart
                  $stmt = $conn->prepare("SELECT * FROM p_cart");
                  $stmt->execute();
                  $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  // Calculate the total price for each product and display it
                  $totalPrice = 0;
                  foreach ($products as $product) {
                      $productTotal = $product['p_price'] * $product['quantity'];
                      $totalPrice += $productTotal;
                      ?>
                      <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0" style="font-size: 18px;">
                          <?php echo $product['p_name']; ?>
                          <span style="font-size: 18px;" class="product-price" data-price="<?php echo $product['p_price']; ?>"><?php echo "₱" . number_format($productTotal, 2); ?></span>
                      </li>
                  <?php } ?>
                  <hr>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0" style="font-size: 18px;">
                      Total Products <span style="font-size: 18px;" id="totalProducts"><?php echo "₱" . number_format($totalPrice, 2); ?></span>
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center px-0" style="font-size: 18px;">
                      Shipping <span style="font-size: 18px;" id="shippingPrice"><?php echo "₱" . number_format($totalPrice * 0.05, 2); ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                          <strong style="font-size: 23px;">Total amount</strong>
                      </div>
                      <span>
                          <strong style="font-size: 23px;" id="totalAmount"><?php echo "₱" . number_format($totalPrice * 1.05, 2); ?></strong>
                      </span>
                  </li>
                </ul>

                <form method="POST" action="checkout.php" id="checkoutForm">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Complete Checkout</button>
                </form>
            </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  
  <script>
    updateTotalPrice();

    function updateQuantity(button, value) {
        const input = button.parentNode.querySelector('input[type=number]');
        let quantity = parseInt(input.value);
        quantity += value;
        if (quantity < 0) {
            quantity = 0;
        }
        input.value = quantity;
        updateTotalPrice();
    }

    function updateTotalPrice() {
        const quantityInputs = document.querySelectorAll('input[name="quantity"]');
        let totalPrice = 0;

        quantityInputs.forEach(function (input) {
            const quantity = parseInt(input.value);
            const price = parseFloat(input.getAttribute('data-price'));
            totalPrice += price * quantity;
        });

        const shippingPrice = totalPrice * 0.05;
        const totalAmount = totalPrice + shippingPrice;

        document.getElementById('totalProducts').innerText = "₱" + totalPrice.toFixed(2);
        document.getElementById('shippingPrice').innerText = "₱" + shippingPrice.toFixed(2);
        document.getElementById('totalAmount').innerText = "₱" + totalAmount.toFixed(2);
    }

    
  </script>

  <script>
        // Get all delete buttons
      var deleteButtons = document.querySelectorAll('.delete-button');

      // Add click event listener to each delete button
      deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
          event.preventDefault();

          // Confirm the deletion
          var confirmDelete = confirm("Are you sure you want to delete this product?");

          if (confirmDelete) {
            // Get the product ID from the data-productid attribute
            var productId = this.getAttribute('data-productid');

            // Create a form element
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = 'delete_cart.php'; // Set the action URL for deleting the product

            // Create an input field to store the product ID
            var productIdInput = document.createElement('input');
            productIdInput.type = 'hidden';
            productIdInput.name = 'delete';
            productIdInput.value = productId;

            // Append the input field to the form
            form.appendChild(productIdInput);

            // Append the form to the document and submit it
            document.body.appendChild(form);
            form.submit();
          }
        });
      });
    </script>
    <script>
      document.getElementById('checkoutForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Display an alert to notify the user
        alert('Order placed successfully!');
        header("Location: product_cart.php");
        
        // Retrieve the necessary data from the page
        var productName = document.querySelector('.card-body strong').innerText;
        var totalAmount = document.getElementById('totalAmount').innerText;
        var productImage = document.querySelector('.bg-image img').getAttribute('src');

        // Prepare the data to be sent
        var formData = new FormData();
        formData.append('p_name', productName);
        formData.append('total_price', totalAmount);
        formData.append('p_image', productImage);

        // Send an AJAX request to insert the order details into the database
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'checkout.php', true);
        xhr.onload = function() {
          if (xhr.status === 200) {
            console.log('Order details added to the database');
            
          }
        };
        xhr.send(formData);
      });
    </script>

  <script src="https://kit.fontawesome.com/b931b08b2b.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/site.js" asp-append-version="true"></script>
</html>