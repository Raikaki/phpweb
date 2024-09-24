<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project/Production Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width:100%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .chart-container {
            width: 100%;
            height: 400px;
        }
        .date-input {
            margin-bottom: 20px;
        }
        .navbar {
        display: flex;
        background-color: #333;
        justify-content: space-around;
        padding: 10px;
    }

    .navbar a {
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        font-size: 16px;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .logout {
        margin-left: auto;
    }

    </style>
</head>
<body>

<div class="container">
  
    <div class="navbar">
        <a href="index.php">Tiến độ dự án</a>
        <a href="production_chart.php">Tiến độ sản xuất</a>
        <a href="delivery_chart.php">Tiến độ giao hàng</a>
    </div>


    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>

    <table>
        <thead>
            <tr>
                <th>Project Qty</th>
                <th>Production Qty</th>
                <th>Results</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $chartData['project_qty']; ?></td>
                <td><?php echo $chartData['production_qty']; ?></td>
                <td><?php echo $chartData['results']; ?></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [''],
            datasets: [
                {
                    label: 'Project Qty',
                    data: [<?php echo $chartData['project_qty']; ?>],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Production Qty',
                    data: [<?php echo $chartData['production_qty']; ?>],
                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Results',
                    data: [<?php echo $chartData['results']; ?>],
                    backgroundColor: 'rgba(201, 203, 207, 0.6)',
                    borderColor: 'rgba(201, 203, 207, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 12000
                }
            }
        }
    });
</script>

</body>
</html>
