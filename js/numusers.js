$(document).ready(function(){
  $.ajax({
    url: "http://localhost/butagv2/pages/Admin/usersdata.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var month = [];
      var users = [];
      
      // Function to generate a random RGB color
      function getRandomColor() {
          var r = Math.floor(Math.random() * 256);
          var g = Math.floor(Math.random() * 256);
          var b = Math.floor(Math.random() * 256);
          return 'rgba(' + r + ',' + g + ',' + b + ')';
      }

      for(var i in data) {
          month.push(data[i].monthly);
          users.push(data[i].numusers);
      }

      var chartdata = {
        labels: month, 
      
        datasets : [
          {
            label: 'Users',
            
            backgroundColor: getRandomColor(), // Set a random background color
            borderColor: getRandomColor(), // Set a random border color
            hoverBackgroundColor: getRandomColor(), // Set a random hover background color
            hoverBorderColor: getRandomColor(), // Set a random hover border color
            data: users
          }
        ]
      };
      
      var ctx = $("#myusers");
      
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        options: {
          title: {
            display: true,
            text: ['BUTAG CEMETERY','Number of USERS per MONTH']
          },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                callback: function(value) {
                  if (value % 1 === 0) {
                    return value;
                  }
                }
              }
            }]
          }   
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
