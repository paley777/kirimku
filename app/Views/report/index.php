<?= $this->extend('templates/layouts/main') ?>

<?= $this->section('content') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>

<h1>Jumlah Destinasi yang Digunakan</h1>
<br><br><br><br><br>
<div style="width: 30%; margin: auto;">
    <canvas id="donutChart" width="400" height="400"></canvas>
</div>

<table border="1">
    <thead>
        <tr>
            <th>Destinasi</th>
            <th>Total Pengiriman</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($destinations as $destination) : ?>
        <tr>
            <td><?= $destination['destinasi_name'] ?></td>
            <td><?= $destination['total'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('donutChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode(array_column($destinations, 'destinasi_name')); ?>,
            datasets: [{
                label: '# of Votes',
                data: <?php echo json_encode(array_column($destinations, 'total')); ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?= $this->endSection() ?>
