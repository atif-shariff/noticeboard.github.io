<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Connect to MySQL database
//   $servername = "localhost";
//   $username = "yourusername";
//   $password = "yourpassword";
//   $dbname = "yourdatabasename";
  $conn = mysqli_connect('localhost', 'root', '', 'project');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the user ID from the session
  // You need to start the session first using session_start() function
  $user_id = $_SESSION["user_id"];

  // Get the text input
  $text = $_POST["text"];

  // Initialize variables for image and document paths
  $image_path = "";
  $document_path = "";

  // Check if an image was uploaded
  if ($_FILES["image"]["name"]) {
    // Set the target directory for image uploads
    $target_dir = "uploads/images/";
    // Get the file name and extension of the uploaded image
    $image_name = basename($_FILES["image"]["name"]);
    $image_type = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    // Generate a unique file name for the uploaded image
    $image_path = $target_dir . uniqid() . "." . $image_type;
    // Upload the image file to the target directory
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
  }

  // Check if a document was uploaded
  if ($_FILES["document"]["name"]) {
    // Set the target directory for document uploads
    $target_dir = "uploads/documents/";
    // Get the file name and extension of the uploaded document
    $document_name = basename($_FILES["document"]["name"]);
    $document_type = strtolower(pathinfo($document_name, PATHINFO_EXTENSION));
    // Generate a unique file name for the uploaded document
    $document_path = $target_dir . uniqid() . "." . $document_type;
    // Upload the document file to the target directory
    move_uploaded_file($_FILES["document"]["tmp_name"], $document_path);
  }

  // Insert the uploaded file details into the MySQL database
  $sql = "INSERT INTO uploads (user_id, text, image_path, document_path, file_size) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  // Get the file size of the uploaded document
  $file_size = filesize($document_path);
  // Bind the parameters to the prepared statement
  $stmt->bind_param("isssi", $user_id, $text, $image_path, $document_path, $file_size);
  // Execute the prepared statement
  if ($stmt->execute()) {
    echo "File uploaded successfully.";
  } else {
    echo "Error uploading file: " . $stmt->error;
  }
  $conn->close();
}
  // $i = 1;
  // $rows = mysqli_query($conn, "SELECT * FROM uploads ORDER BY id DESC")


  // Close the MySQL connection


?>
