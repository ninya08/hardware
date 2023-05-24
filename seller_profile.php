<?php include('update_profile.php');?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dashboard_orderhistory_product.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  
  <body>
  
    <!---Sidebar-->
    <div class="sidebar">
      <div class="d-flex flex-column align-items-center text-center mt-5 ">
	  <div class="d-flex flex-column align-items-center text-center">
         <img src="images/<?php echo $row['profile_picture']; ?>" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">
								</div>
      <span id="welcome-fname" style="color: white; padding-top:10px;"><?php echo ($row['fname']); ?> <span id="welcome-lname" style="color: white;"><?php echo ($row['lname']); ?></span></span>
      </div>
         <ul class="nav-links">
               <li>
               <a href="seller_profile.php" class="active">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">User Profile</span>
               </a>
            </li>
            <li>
               <a href="seller_product.php">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Product</span>
               </a>
            </li>
            <li>
               <a href="seller_order.php">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Orders</span>
               </a>
            </li>
            <li>
               <a href="seller_review.php" >
                  <i class='bx bx-list-ul'></i>
                  <span class="links_name">Past Reviews</span>
               </a>
            </li>
            <li>
               <a href="seller_orderhistory.php">
                  <i class='bx bx-coin-stack'></i>
                  <span class="links_name">Order History</span>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class='bx bx-coin-stack'></i>
                  <span class="links_name">Settings</span>
               </a>
            </li>
            <li class="log_out" onclick="logout()">
               <a href="logout.php">
                  <i class='bx bx-log-out'></i>
                  <span class="links_name">Logout</span>
               </a>
            </li>
         </ul>
      </div>
    <section class="home-section">
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <div id="welcome-container">
                <h2>Welcome, <span id="welcome-fname"><?php echo strtoupper($row['fname']); ?></span>!</h2>
                <!-- Other welcome message elements -->
            </div>


                </div>
            </nav>

        </header>
        <!-- Order Nav -->
      <div class="home-content">
        <ul class="nav nav-tabs px-5">
          <li class="active">
            <a data-toggle="tab" href="#home">Account</a>
          </li>
        </ul>
        
        <div class="tab-content">
        <!-- account -->
            <div id="home" class="tab-pane fade in active">
                <div class="sales-boxes py-5 border-top ">
                    <div class="recent-sales box ">
                        <div class="container">
                            <div class="main-body">
                                <div class="row gutters-sm">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>User's Account</h5>
												<div class="d-flex flex-column align-items-center text-center">
													<img src="images/<?php echo $row['profile_picture']; ?>" alt="Profile Picture" class="rounded-circle" style="width: 250px; height: 250px;">
												</div>
                                            </div>
                                        </div>
                                        <div class="card mb-auto rounded-top bg-secondary">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                    <h4 class="mb-auto text-white text" style="text-align:center; "><?php // Check if $row variable is defined and not null
													if (isset($row) && is_array($row)) {
														// Access array offset only if $row is an array and not null
														echo $row['fname'] . ' ' . $row['lname'];
													} else {
														// Handle case where $row is not defined or null
														echo 'Error: $row is not defined or null';
													}
													?></h4>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-white">                                          
                                                    
                                                    &nbsp;
                                                    <a href ="">
                                                        <i class="bi bi-pen text-white"></i>
                                                    </a> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-auto">First Name</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['fname']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-auto">Last Name</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['lname']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Date of Birth</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['dob']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Gender</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['gender']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['address']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Phone Number</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['pnumber']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Type</h6>
                                                </div>
                                                <div class="col-sm-6 ml-auto text-secondary">
                                                <?php echo $row['usertype']; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="btn-toolbar row">
                                                <div class="col-sm-6 ml-auto">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="bi bi-pen"></i> Edit</button>
												<!-- Edit User Modal -->
												<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="editModalLabel">Edit User Information</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
													<form action="seller_profile.php" method="POST" enctype="multipart/form-data">
														<input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
														<img id="preview" src="images/<?php echo $row['profile_picture']; ?>" alt="Profile Picture" class="rounded-circle" style="width: 250px; height: 250px; display: block; margin-left: auto; margin-right: auto;">
														<div class="mb-3">
															<label for="profile_picture" class="form-label">Upload Profile Picture</label>
															<input type="file" class="form-control-file" id="profile_picture" onchange="updateProfilePicture()" name="profile_picture" accept="image/*" onchange="previewImage(event)">
														</div>

														<script>
															function previewImage(event) {
																var reader = new FileReader();
																reader.onload = function() {
																	var output = document.getElementById('preview');
																	output.src = reader.result;
																};
																reader.readAsDataURL(event.target.files[0]);
															}
														</script>
														<div class="form-group">
															<label for="fname">First Name:</label>
															<input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
														</div>
														<div class="form-group">
															<label for="lname">Last Name:</label>
															<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['lname']; ?>">
														</div>
														<div class="form-group">
															<label for="dob">Date of Birth:</label>
															<input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
														</div>
														<div class="form-group">
															<label for="gender">Gender:</label>
															<select class="form-control" id="gender" name="gender">
															<option value="Male" <?php if ($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
															<option value="Female" <?php if ($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
															<option value="Other" <?php if ($row['gender'] == 'other') echo 'selected'; ?>>Other</option>
															</select>
														</div>
														<div class="form-group">
															<label for="address">Address:</label>
															<textarea class="form-control" id="address" name="address"><?php echo $row['address']; ?></textarea>
														</div>
														<div class="form-group">
															<label for="pnumber">Phone Number:</label>
															<input type="text" class="form-control" id="pnumber" name="pnumber" value="<?php echo $row['pnumber']; ?>">
														</div>
														<div class="form-group">
															<label for="usertype">User Type:</label>
															<input type="text" class="form-control" id="usertype" name="usertype" value="<?php echo $row['usertype']; ?>" readonly>
														</div>
													
														<div class="form-group">
															<button type="submit" class="btn btn-primary" name="edit_user">Save Changes</button>
																														
																	
																	<?php
																	// Process your request here

																	// Refresh the page after processing the request
																	echo '<script>refreshPage();</script>';
																	?>
																
														</div>
														</form>
													</div>
													</div>
												</div>
												</div>		
                                                </div>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
	
    </script>
     <script>
    // Submit the form using AJAX
    document.getElementById('profileForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission

        var form = this;
        var formData = new FormData(form);

        // Send the form data to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Request successful, update the page if needed
                console.log(xhr.responseText);
                // Refresh the page after processing the request
                location.reload();
            }
        };
        xhr.send(formData);
    });
</script>
	
  </body>
</html>