// Load the CSV file using XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open('GET', 'example.csv', true);
xhr.onload = function () {
  if (xhr.status === 200) {
    // Parse the CSV data and extract the attendance information
    let csvData = xhr.responseText;
    let attendanceData = {
      present: 0,
      absent: 0
    };
    csvData.split('\n').forEach(function (row) {
      let columns = row.split(',');
      if (columns[1] === 'Present') {
        attendanceData.present++;
      } else if (columns[1] === 'Absent') {
        attendanceData.absent++;
      }
    });
    // Display the attendance information on the HTML page
    let attendanceDiv = document.getElementById('attendance');
    attendanceDiv.innerHTML = 'Present: ' + attendanceData.present + '<br>Absent: ' + attendanceData.absent;
  } else {
    console.log('Error loading CSV file');
  }
};
xhr.send();