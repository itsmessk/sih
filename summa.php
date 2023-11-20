<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neepco";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload handling
$uploadDir = 'uploads/'; // Specify the directory where you want to store uploaded files

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    $uploadFile = $uploadDir . basename($_FILES['fileToUpload']['name']);
    
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)) {
        // File uploaded successfully, insert into database
        $filePath = $uploadFile;
        $sql = "INSERT INTO vendor (avatar) VALUES ('$filePath')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded and record inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}

// Fetch the latest file from the database for preview
$sql = "SELECT avatar FROM vendor where id  = {$id}";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filePath = $row['file_path'];
} else {
    $filePath = 'default_image.jpg'; // Provide a default image path if no image is uploaded yet
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload and Preview</title>
    <style>
        img#cimg {
            height: 15vh;
            width: 15vh;
            object-fit: cover;
            border-radius: 100% 100%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function displayImg(input, _this) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#cimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="displayImg(this)">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <h2>Uploaded Image Preview</h2>
    <img id="cimg" src="<?php echo $filePath; ?>" alt="Preview">
</body>
</html>
