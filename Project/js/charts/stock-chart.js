// Bar chart
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
