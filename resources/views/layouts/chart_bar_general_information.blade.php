<div id="chart_01"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const options = {
            chart: {
                type: 'bar',
                height: 400
            },
            series: [{
                name: 'จำนวนข้อมูล',
                data: @json($data)
            }],
            xaxis: {
                categories: @json($months) // แสดงชื่อเดือนทั้งหมด
            },
            title: {
                text: 'จำนวนข้อมูลแยกตามเดือน',
                align: 'center'
            },
            colors: ['#00E396']
        };

        const chart = new ApexCharts(document.querySelector("#chart_01"), options);
        chart.render();
    });
</script>

