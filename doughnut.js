$(document).ready(function () {
  $.ajax({
    url: "http://localhost/Hotel%20Dheen/admin_chart.php", // Replace with your script path
    type: "GET",
    success: function (data) {
      console.log(data);

      var bookedRooms = [];

      var len = data.length;
      for (var i = 0; i < len; i++) {
        bookedRooms.push(data[i].bookedCount); // Access bookedCount property
      }

      var ctx1 = $("#doughnut-chartcanvas");
      var data1 = {
        labels: [], // Placeholder for room types
        datasets: [{
          label: "Booked Rooms",
          data: bookedRooms,
          backgroundColor: [
            "#404040",
            "#484848",
            "#505050",
            "#585858",
            "#606060",
            "#686868",
            "#707070",
            "#787878",
          ],
          borderColor: [
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a",
            "#2a2a2a"
          ],
          borderWidth: [1, 1, 1, 1, 1, 1, 1, 1]
        }]
      };

      var options = {
        title: {
          display: true,
          position: "top",
          text: "Booked Rooms by Room Type",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom"
        }
      };

      // Extract room types from data for labels
      for (var i = 0; i < len; i++) {
        data1.labels.push(data[i].roomtype);
      }

      var chart1 = new Chart(ctx1, {
        type: "doughnut",
        data: data1,
        options: options
      });
    },
    error: function () {
      console.log(data);
    }
  });
});
