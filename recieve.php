<?php
// Connect to database and fetch notice board data

// $servername = "localhost";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_database";

$conn = mysqli_connect('localhost', 'root', '', 'project');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uploads";
$result = $conn->query($sql);

// Display notice board data

$index = 0;
while ($row = $result->fetch_assoc()) {
    $delay = $index * 5;
    if ($row['text']) {
        echo '<div class="notice-text" style="animation-delay: ' . $delay . 's;">';
        echo '<p>' . $row['text'] . '</p>';
        echo '</div>';
    }

    if ($row['image_path']) {
        echo '<div class="notice-image" style="animation-delay: ' . $delay . 's;">';
        echo '<img src="' . $row['image_path'] . '" alt="Notice Image">';
        echo '</div>';
    }

    if ($row['document_path']) {
        echo '<div class="notice-document">';
        echo '<a href="' . $row['document_path'] . '">Download Document</a>';
        echo '</div>';
    }

    $index++;
}

$conn->close();
?>