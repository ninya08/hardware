<?php include('add_products.php');?>
<?php include('delete_product.php');?>
<?php include('edit_product.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                                <i class="fa-sharp fa-solid fa-house fa-sm" style="color: #000000;">&nbsp&nbsp</i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #000000;">&nbsp&nbsp</i>Cart
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="product_cart.php" class="dropdown-item">Products</a></li>
                                    <li><a href="service_cart.html"class="dropdown-item">Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    Categories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="product.php" class="dropdown-item">Products</a></li>
                                    <li><a href="service.html"class="dropdown-item">Services</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="float: right;">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass fa-sm" style="color: #000000;"></i></button>
                            </form> 
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 50px;padding-right: 50px;">
                                    <i class="fa-sharp fa-solid fa-ellipsis-vertical" style="color: #000000;"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="dashboard_order_product.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid" style="margin: 0px; padding: 0px;">
            <main role="main" class="pb-3">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.freepik.com/premium-photo/tool-equipment-diy-hadware-your-design_255544-1937.jpg" width="100%" height="110%">
                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1 style="color: white">Free Shipping</h1>
                                    <p style="color: white">May 29 - June 1</p>
                                    <p><a class="btn btn-lg btn-primary" href="product.php" style="background-color: #F09E00; border: 0;">Buy Now</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777" /></svg>
                            <img src="https://img.freepik.com/premium-photo/top-view-mechanic-tools-set-black-background-with-copy-space_160097-172.jpg" width="100%" height="110%">
                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>Get the Job Done Right with our<br>Trusted Workers.</h1><br>
                                    <p><a class="btn btn-lg btn-primary" href="service.html">View Services</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777" /></svg>
                            <img src="https://img.freepik.com/free-photo/electrical-equipment-wooden-workplace_23-2147743056.jpg?w=1380&t=st=1684546223~exp=1684546823~hmac=f876e883b684807300d7225036b73f7217a0638d09b43be99dc589ecc3932a52" width="100%" height="110%">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 style="color: black">Good Quality Products for <br>Every Project</h1><br>
                                    <p><a class="btn btn-lg btn-primary" href="product.php">Browse Products</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                
                <!-- Marketing messaging and featurettes
                ================================================== -->
                <!-- Wrap the rest of the page in another container to center all the content. -->
                
                <div class="container-fluid" style="text-align: center;">
                
                    <!-- Three columns of text below the carousel -->
                    <div class="row mb-5">
                        <div>
                            <h3>Products</h3><br><br>
                        </div>
                        <?php
                        $counter = 0; // Initialize a counter variable
                        foreach ($products as $product):
                            if ($counter >= 3) {
                                break; // Exit the loop after displaying 6 products
                            }
                        ?>
                        <div class="col-lg-4">
                            <img src="images/<?php echo $product['p_image']; ?>" alt="product name" style="border-radius: 50%;" width="140" height="140">
                            <br><br>
                            <h4 class="mb-5"><?php echo $product['p_name']; ?></h4>
                            <p  class="mb-5" style="width:70%; margin:auto"><?php echo $product['p_desc']; ?></p>
                            <p><a href="product_detail.php?id=<?php echo $product['p_id']; ?>" class="btn btn-secondary" style="background-color: #F09E00; border: 0px;">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <?php
                        $counter++; // Increment the counter variable
                        endforeach;
                        ?>
                    </div>
                    <div class="mb-5">
                        <p><a href="product.php"  style="border: 0px; color:gray; font-weight: bold; font-size: 20px;text-decoration: none;">See more</a></p>
                    </div>

                       
                    <!-- START THE FEATURETTES -->
                
                    <hr>
                
                    <div class="row">
                        <div>
                            <h3>Services</h3><br><br>
                        </div>
                
                        <div class="col-lg-4">
                            <img src="https://images.wisegeek.com/carpenter.jpg" style="border-radius: 50%;" width="140" height="140">
                            <br><br>
                            <h4>Carpenter</h4>
                            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                            <p><a href="service_detail.html" class="btn btn-secondary" style="background-color: #F09E00; border: 0px;">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="https://alis.alberta.ca/media/697347/electrician-istock-487018428.jpg" style="border-radius: 50%;" width="140" height="140">
                            <br><br>
                            <h4>Electrician</h4>
                            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                            <p><a href="service_detail.html" class="btn btn-secondary" style="background-color: #F09E00; border: 0px;">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="https://www.bullseye-plumbing.com/wp-content/uploads/2016/02/professional-plumber-2.jpg   " style="border-radius: 50%;" width="140" height="140">
                            <br><br>
                            <h4>Plumber</h4>
                            <p>And lastly this, the third column of representative placeholder content.</p>
                            <p><a href="service_detail.html" class="btn btn-secondary" style="background-color: #F09E00; border: 0px;">View details &raquo;</a></p><br><br><br><br>
                        </div><!-- /.col-lg-4 -->
                        <div class="mb-5">
                            <p><a href="service.html"  style="border: 0px; color:gray; font-weight: bold; font-size: 20px;text-decoration: none;">See more</a></p>
                        </div>
                    </div><!-- /.row -->
                
                   
                
                </div><!-- /.container -->
            </main>
        </div>

        <footer class="border-top footer text-muted">
            <div class="container">
                &copy; 2023 - AvengerSquad_HardwareNI - <a asp-area="" asp-page="/Privacy">Privacy</a>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/site.js" asp-append-version="true"></script>
        <script src="https://kit.fontawesome.com/b931b08b2b.js" crossorigin="anonymous"></script>
    </body>
</html>
