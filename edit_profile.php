<?php
// Process form submission
if (isset($_POST['update_profile'])) {
    // Retrieve form data
    $id = $_SESSION['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $pnumber = $_POST['phone'];
    $type = $_POST['type'];

    // Check if a new profile picture is uploaded
    if (isset($_FILES['profileimage']) && $_FILES['profileimage']['error'] === UPLOAD_ERR_OK) {
        $profilePicture = $_FILES['profileimage']['tmp_name'];

        // Save the uploaded image to a desired location
        $targetPath = "path/to/save/profile/picture.jpg";
        move_uploaded_file($profilePicture, $targetPath);

        // Update the profile picture URL in the database
        $sql = "UPDATE users SET profile_picture = '$targetPath' WHERE id = '$id'";
        // Execute the update query
        // ...
    }

    // Update the other information in the database
    $sql = "UPDATE users SET fname='$fname', lname='$lname', dob='$dob', gender='$gender', address='$address', pnumber='$pnumber', usertype='$type' WHERE id='$id'";
    // Execute the update query
    // ...
}
?>
