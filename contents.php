<?php
require 'upload.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Upload Files</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/content.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">Signage</span>

    </div>
    <ul class="nav-links">
      <li>
        <a href="contents.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="class.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Class</span>
        </a>
      </li>
      <li>
        <a href="Student.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Student list</span>
        </a>
      </li>
      <li>
        <a href="analytics.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
      <li>
        <a href="index.php">
          <i class='bx bx-cog'></i>
          <span class="links_name">Home</span>
        </a>
      </li>
      <li class="log_out">
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <!-- <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div> -->
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
          <!-- <img src="img/mypic.jpg" alt=""> -->
          <span class="admin_name">WELCOME</span>
          <!-- <i class='bx bx-chevron-down'></i> -->
        </div>
      </nav>
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">

              <form action="upload.php" method="post" enctype="multipart/form-data">
                <!-- <h1><Contents To Upload </h1> -->
                <br>
                <label for="text">Text:</label>
                <input type="text" name="text" id="text" placeholder="Enter the text to display">

                <label for="image">Image:</label>
                <input type="file" name="image" id="image">

                <label for="document">Document:</label>
                <input type="file" name="document" id="document">

                <button type="submit">Upload</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="sales-boxes">
          <div class="right-side">
            <div class="box-topic">Contents Uploaded</div>

          </div>
        </div>
      </div>



      <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
          sidebar.classList.toggle("active");
          if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
      </script>

</body>

</html>