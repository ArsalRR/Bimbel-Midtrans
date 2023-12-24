<?php $this->extend('Template/Layout')?>
<?php $this->section('content')?>
<h3 class="text-center">Grafik Perkembangan Bimbingan Rangking</h3>
<canvas id="myChart" ></canvas>
<?php $this->section('javasc')?>
<script>
    const dataGrafik = <?= json_encode($tampil) ?>;
const groupedData = {};
dataGrafik.forEach(item => {
    const createdAt = new Date(item.created_at);
    const key = `${createdAt.getFullYear()}-${createdAt.getMonth() + 1}`;
    if (!groupedData[key]) {
        groupedData[key] = {
            created_at: createdAt,
            count: 1 
        };
    } else {
        groupedData[key].count += 1; 
    }
});

const graphData = Object.values(groupedData);
const allMonths = [];
for (let month = 0; month < 12; month++) {
    allMonths.push(new Date(2000, month).toLocaleString('en-us', { month: 'long' }));
}

const dataByMonth = allMonths.map(month => ({
    month,
    count: 0
}));
graphData.forEach(item => {
    const monthIndex = item.created_at.getMonth();
    dataByMonth[monthIndex].count += item.count;
});

const labels = dataByMonth.map(item => item.month);
const values = dataByMonth.map(item => item.count);

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