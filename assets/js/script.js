// Função para expandir/recolher a sidebar
function toggleSidebar() {
    document.querySelector(".sidebar").classList.toggle("active");
}

// Gerando um gráfico de vendas usando Chart.js
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("sales-chart").getContext("2d");

    var salesChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun"],
            datasets: [{
                label: "Vendas",
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderColor: "rgba(255, 99, 132, 1)",
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
