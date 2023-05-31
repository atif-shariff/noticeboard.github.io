<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="css/student.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
          <i class=''></i>
          <span class="logo_name">Signage</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="#" class="active">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-box'></i>
              <span class="links_name">Class</span>
            </a>
          </li>
          <li>
            <a href="Student.html">
              <i class='bx bx-list-ul'></i>
              <span class="links_name">Student list</span>
            </a>
          </li>
          <li>
            <a href="analytics.html">
              <i class='bx bx-pie-chart-alt-2'></i>
              <span class="links_name">Analytics</span>
            </a>
          <li>
            <a href="index.html">
              <i class='bx bx-cog'></i>
              <span class="links_name">Home</span>
            </a>
          </li>
          <li class="log_out">
            <a href="#">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </li>
        </ul>
      </div>
    <div class="img"></div>
    <div class="center">
    <div class="title">STUDENT DETAILS</Details></div>
    <!-- <h1>Student Details</Details></h1> -->
    <div class ="table">
        <table id="student-table">
        <thead>
            <tr>
                <th>USN</th>
                <th>Name</th>
                <th>SEM</th>
                <th>Contact No</th>
                <th>Meassage</th>
                <th>Send</th>
            </tr>
        </thead>
        <tr>
            <td>1BO19EC006</td>
            <td>ATIF</td>
            <td>8</td>
            <td>+91 8971708675</td>
            <td><div class="input-box message-box">
                <input type="text" placeholder="Enter your queries">
            </div></td>
            <td><button class="send-btn"><span class="send-icon" onclick="sendMessage('+91 8971708675', this.parentElement.previousSibling.firstChild.value)"></span>Send</button></td>
        <tr>
            <td>1BO19EC002</td>
            <td>ADNAN</td>
            <td>8</td>
            <td>+91 9148915298</td>
            <td><div class="input-box message-box">
                <input type="text" placeholder="Enter your queries">
            </div></td>
            <td><button class="send-btn"><span class="send-icon" onclick="sendMessage(91 9148915298', this.parentElement.previousSibling.firstChild.value)"></span>Send</button></td>
        </tr>
        <tr>
            <td>1B019EC014</td>
            <td>HEENA</td>
            <td>8</td>
            <td>+91 8792645215</td>
            <td><div class="input-box message-box">
                <input type="text" placeholder="Enter your queries">
            </div></td>
            <td><button class="send-btn"><span class="send-icon" onclick="sendMessage('+91 8792645215', this.parentElement.previousSibling.firstChild.value)"></span>Send</button></td>
            
        </tr>
    </div>
</div>
        </tbody>
    </table>
    <script>
        function sendMessage(contactNumber, message) {
            console.log("Sending message to " + contactNumber + ": " + message);
            // Code to send message goes here
        }
    </script>
</body>

</html>