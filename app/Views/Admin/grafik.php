<?php $this->extend('Template/Layout')?>
<?php $this->section('content')?>
<h3 class="text-center">Data Minat Memilih Paket Bimbel</h3>
<canvas id="myChart" ></canvas>
<?php $this->section('javasc')?>

    <script>
        
        const dataGrafik =  <?= json_encode($tampil)  ?>;

        const labels = dataGrafik.map(function(item) {
            return item.tipe_bimbel;
        });

        const values = dataGrafik.map(function(item) {
            return item.nominal;
        });

        const chart = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(chart, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Paket Bimbel',
                    data: values,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
<?php $this->endSection()?>
<?php $this->endSection()?>