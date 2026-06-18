<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file = $_FILES['myfile'];

    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Folder to save files
    $uploadDir = "uploads/";

    // create folder if not exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // get file extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // allowed file types
    $allowed = ['jpg', 'jpeg', 'png', 'pdf'];

    if (in_array($fileExt, $allowed)) {

        if ($fileError === 0) {

            if ($fileSize < 5 * 1024 * 1024) { // 5MB limit

                // unique file name
                $newName = uniqid("file_", true) . "." . $fileExt;

                $destination = $uploadDir . $newName;

                if (move_uploaded_file($fileTmp, $destination)) {
                    echo "<p style='color:green;'>File uploaded successfully!</p>";
                } else {
                    echo "<p style='color:red;'>Upload failed!</p>";
                }

            } else {
                echo "<p style='color:red;'>File is too large (max 5MB).</p>";
            }

        } else {
            echo "<p style='color:red;'>Error uploading file.</p>";
        }

    } else {
        echo "<p style='color:red;'>Invalid file type. Only JPG, PNG, PDF allowed.</p>";
    }
}
?>

</body>
</html>