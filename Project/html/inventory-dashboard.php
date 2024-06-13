<!DOCTYPE html>
<html>
  <head>
    <!--Css Loading -->
    <link href="/Project/css/style.css" rel="stylesheet">
    <!--Importing Chart.js and charts on the page-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="Project/js/charts/cadet-school-distribution.js"></script>
    <script src="Project/js/charts/collective-community-service-chart.js"></script>
    <script src="Project/js/charts/enrolled-cadets-chart.js"></script>
    <script src="Project/js/charts/passing-chart.js"></script>
    <script src="Project/js/charts/squadron-wars-chart.js"></script>
    <script src="Project/js/charts/stock-chart.js"></script>
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
    <canvas id="stock-chart" width="800" height="450"></canvas>
    <canvas id="cadet-school-distribution" width="800" height="450"></canvas>
    <canvas id="collective-community-service" width="800" height="450"></canvas>
    <canvas id="enrolled-cadets" width="800" height="450"></canvas>
    <canvas id="passing-chart" width="800" height="450"></canvas>
    <canvas id="squadron-wars" width="800" height="450"></canvas>
  </body>
</html>