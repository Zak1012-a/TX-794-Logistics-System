<!DOCTYPE html>
<html>
  <head>
    <!--Css Loading -->
    <link href="/Project/css/style.css" rel="stylesheet">
    <!--Importing Chart.js and charts on the page-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </head>
  <body>
    <div class="topnav">
      <a href="index.html">Home</a>
      <a href="chain-of-command.html">Corps Staff</a>
      <a href="ldrs.html">LDR's</a>
      <a href="calendar.html">Event Calendar</a>
      <a href="leaderboard.html">Leaderboard</a>
      <a class="active" href="inventory-dashboard.html">Dashboard</a>
    </div>
    <?php

    ?>
    <canvas id="stock-chart" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("stock-chart"), {
    type: 'bar',
    data: {
      labels: ["PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER"],
      datasets: [
        {
          label: "PLACEHOLDER",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'PLACEHOLDER'
      }
    }
});
    </script>
    
    <canvas id="cadet-school-distribution" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("cadet-school-distribution"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
    </script>
    
    <canvas id="collective-community-service" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("collective-community-service"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", ],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
    </script>
    
    <canvas id="enrolled-cadets" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("enrolled-cadets"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      } 
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});
    </script>
    
    <canvas id="passing-chart" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("passing-chart"), {
    type: 'pie',
    data: {
      labels: ["PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER", "PLACEHOLDER"],
      datasets: [{
        label: "PLACEHOLDER",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'PLACEHOLDER'
      }
    }
});
    </script>
    
    <canvas id="squadron-wars" width="800" height="450"></canvas>
    <script>
      new Chart(document.getElementById("squadron-wars"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      } 
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});
    </script>
  </body>
</html>
