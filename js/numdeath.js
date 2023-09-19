$(document).ready(function(){
  $.ajax({
    url: "http://localhost/butagv2/pages/Admin/deathchart.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var years = [];
      var numDeaths = [];

      for (var i in data) {
        years.push(data[i].year);
        numDeaths.push(data[i].numofdeath);
      }

      var uniqueYears = Array.from(new Set(years));
      var datasets = [];

      var colorMapping = {}; // Empty object for color mappings
      var usedColors = [];   // Array to track used colors

      for (var i = 0; i < uniqueYears.length; i++) {
        var year = uniqueYears[i];
        var yearData = numDeaths.filter(function(value, index) {
          return years[index] === year;
        });

        var randomColor = generateRandomColor(usedColors); // Generate a random color not used before
        colorMapping[year] = randomColor; // Assign the random color to the year
        usedColors.push(randomColor);     // Add the used color to the array

        datasets.push({
          label: 'Number of Deaths - ' + year,
          backgroundColor: randomColor, // Use the random color
          borderColor: randomColor,     // Use the random color
          borderWidth: 1,
          data: yearData
        });
      }

      var chartdata = {
        labels: ['Number of Deaths'],
        datasets: datasets
      };

      var ctx = document.getElementById('death').getContext('2d');
      new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        options: {
          responsive: true,
          scales: {
            x: {
              beginAtZero: true,
              stacked: true
            },
            y: {
              beginAtZero: true,
              stacked: true
            }
          },
          plugins: {
            title: {
              display: true,
              text: ['BUTAG CEMETERY', 'Number of DEATHS per YEAR']
            }
          }
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });

  function generateRandomColor(usedColors) {
    var letters = '0123456789ABCDEF';
    var color = '#';
    var isUniqueColor = false;
    
    while (!isUniqueColor) {
      color = '#';
      for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      
      if (!usedColors.includes(color)) {
        isUniqueColor = true;
      }
    }
    
    return color;
  }
});
