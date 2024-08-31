<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="h-full w-full bg-slate-50">
    <div class="flex flex-col h-screen bg-gray-100">
        <div class="flex-1 flex">
            <x-navbarAdmin />

            <div class="flex-1 p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Produk Terdaftar (2024)</h2>
                        <div class="my1-"></div>
                        <div class="bg-gradient-to-r from-gray-300 to-gray-500 h-px mb-6"></div>
                        <div class="chart-container" style="position: relative; height:200px; width:100%">
                            <canvas id="produkChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Toko Terdaftar (2024)</h2>
                        <div class="my-1"></div>
                        <div class="bg-gradient-to-r from-gray-300 to-gray-500 h-px mb-6"></div>
                        <div class="chart-container" style="position: relative; height:200px; width:100%">
                            <canvas id="tokoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ctx1 = document.getElementById('produkChart').getContext('2d');
        var produkChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    label: 'Jumlah Produk',
                    data: [20, 30, 40, 50, 60, 70, 30, 40, 50, 60, 70, 30],
                    backgroundColor: 'rgba(53, 162, 235, 0.5)',
                    borderColor: 'rgba(53, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });

        var ctx2 = document.getElementById('tokoChart').getContext('2d');
        var tokoChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    label: 'Jumlah Toko',
                    data: [20, 30, 40, 50, 60, 70, 30, 40, 50, 60, 70, 30],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
