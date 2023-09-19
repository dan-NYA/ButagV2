<?php
// Initialize an empty array to store the grave data
$target_dir = "../../mapping/assets/img/grave_img/";
$original_file_name = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . time() . '_' . $original_file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow only certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "webp"
) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars($original_file_name) . " has been uploaded.";

        // Get the grave ID from the request
        $graveId = $_GET['grave'];

        // Remove "../../" from the target_file path
        $target_file = str_replace("../../", "", $target_file);

        // Update the image path in the database for the corresponding grave ID
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_butagfixed";

        // Create a new connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Update the image path in the database
        $sql = "UPDATE tbldeceased SET imagepath = '$target_file' WHERE grave = '$graveId'";
        if ($conn->query($sql) === TRUE) {
            header("Location: map.php");
        } else {
            echo "Error updating image path in the database: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
