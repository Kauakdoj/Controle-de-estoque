const ctx1 = document.querySelector("#myChart");

new Chart(ctx1, {
  type: "line",
  data: {
    labels: [
      "27/01/2023",
      "28/01/2023",
      "29/01/2023",
      "30/01/2023",
      "31/01/2050",
    ],
    datasets: [
      {
        data: [1000, 7000, 6000, 4000, 11000],
        label: "Dinheiro por dia",
        borderWidth: 2,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: false,
      },
    },
  },
});

const ctx2 = document.querySelector("#myChart1");

new Chart(ctx2, {
  type: "bar",
  data: {
    labels: [
      "27/01/2023",
      "28/01/2023",
      "29/01/2023",
      "30/01/2023",
      "31/01/2050",
    ],
    datasets: [
      {
        data: [1000, 7000, 6000, 4000, 11000],
        label: "Dinheiro por dia",
        borderWidth: 2,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
