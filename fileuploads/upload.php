<?php

$message = "";

if (isset($_POST["submit"])) {

    $file = $_FILES["image"];

    $fileName = $file["name"];
    $fileSize = $file["size"];
    $fileTmp = $file["tmp_name"];

    // Get file extension
    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed image types
    $allowed = array("jpg", "jpeg", "png", "gif");

    // Check file type
    if (!in_array($extension, $allowed)) {
        $message = "Only image files are allowed!";
    }

    // Check file size
    elseif ($fileSize >= 2 * 1024 * 1024) {
        $message = "File size must be less than 2 MB!";
    }

    else {

        $path = "uploads/" . $fileName;

        if (move_uploaded_file($fileTmp, $path)) {
            $message = "File uploaded successfully!<br>Path: " . $path;
        }
        else {
            $message = "File upload failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Image Upload Form</h2>

<form method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="image" required>
    <br><br>

    <input type="submit" name="submit" value="Upload">

</form>

<h3><?php echo $message; ?></h3>

</body>
</html>