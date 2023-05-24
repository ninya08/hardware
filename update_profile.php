<?php
// Start session
session_start();

// Establish database connection
include 'config.php';

// Retrieve data from the database for the currently logged in user
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");

    // Check if query is successful
    if ($result) {
        // Fetch data
        $row = mysqli_fetch_assoc($result);
    }
}

// If the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data and update database
    $id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $pnumber = $_POST['pnumber'];
    $type = $_POST['usertype'];

    // Handle file upload
    $target_directory = 'images/';
    $profile_picture = $_FILES['profile_picture']['name'];
    $target_file = $target_directory . basename($profile_picture);
    $upload_ok = true;

    // Check if a file was selected for upload
    if (!empty($_FILES['profile_picture']['tmp_name'])) {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
            // Update database with the new profile picture filename
            $sql = "UPDATE users SET fname='$fname', lname='$lname', dob='$dob', gender='$gender', address='$address', pnumber='$pnumber', usertype='$type', profile_picture='$profile_picture' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                // Display success message
                $_SESSION['success_message'] = "User information updated successfully";
                // Redirect to user_profile.php to refresh the page
                header("Location: seller_profile.php");
                exit();
            } else {
                // Display error message
                echo "Error updating user information: " . mysqli_error($conn);
            }
        } else {
            // Display error message
            echo "Error moving uploaded file.";
            $upload_ok = false;
        }
    } else {
        // Update database without changing the profile picture
        $sql = "UPDATE users SET fname='$fname', lname='$lname', dob='$dob', gender='$gender', address='$address', pnumber='$pnumber', usertype='$type' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            // Display success message
            $_SESSION['success_message'] = "User information updated successfully";
            // Redirect to seller_profile.php to refresh the page
            header("Location: seller_profile.php");
            exit();
        } else {
            // Display error message
            echo "Error updating user information: " . mysqli_error($conn);
        }
    }

    if (!$upload_ok) {
        // Display error message
        echo "Error uploading profile picture.";
    }
}

// Close database connection
mysqli_close($conn);
?>

    <script>
    // Inside the success block of your AJAX request
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Request successful, update the page if needed
        console.log(xhr.responseText);

        // Update the modal values
        var userFnameModal = document.getElementById('fname');
        var userLnameModal = document.getElementById('lname');
        var userProfilePictureModal = document.getElementbyId('profile-picture')
        
        // Update the values in the modal if needed
        if (userFnameModal) {
            userFnameModal.value = '<?php echo $fname; ?>';
        }
        if (userLnameModal) {
            userLnameModal.value = '<?php echo $lname; ?>';
        }
        if (userProfilePictureModal){
            userProfilePictureModal.src = '<?php echo $target_file;?>';
        }

        // Update the other values on the page
        var welcomeContainer = document.getElementById('welcome-container');
        if (welcomeContainer) {
            var welcomeFnameElement = welcomeContainer.querySelector('#welcome-fname');
            var welcomeLnameElement = welcomeContainer.querySelector('#welcome-lname');
            var welcomeProfilePictureElement = welcomeContainer.querySelector('#welcome-profile-picture');

            // Update the relevant elements with the new values
            if (welcomeFnameElement) {
                welcomeFnameElement.textContent = '<?php echo $fname; ?>';
            }
            if (welcomeLnameElement) {
                welcomeLnameElement.textContent = '<?php echo $lname; ?>';
            }
            if (welcomeProfilePictureElement) {
            welcomeProfilePictureElement.src = '<?php echo $target_file; ?>';
        }
            
            // Update other welcome message elements as needed
        }
    } 
</script>