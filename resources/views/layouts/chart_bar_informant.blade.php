<div id="chart_02"></div>
<script>
    // รับข้อมูล PHP
    var monthlyScores = @json($monthlyScores);

    // เตรียมข้อมูลสำหรับกราฟ
    var months = monthlyScores.map(item => item.month);
    var scores = monthlyScores.map(item => item.average_score);
    var informants = monthlyScores.map(item => item.total_informants);

    var options = {
        chart: {
            type: 'line',
            height: 450
        },
        series: [
            {
                name: 'คะเเนนเฉลี่ย',
                data: scores
            },
            {
                name: 'จำนวนผู้เเบบประเมิน',
                data: informants
            }
        ],
        xaxis: {
            categories: months,
            title: {
                text: 'Month'
            }
        },
        yaxis: [
            {
                title: {
                    text: 'คะเเนนเฉลี่ย/เดือน'
                },
                labels: {
                    formatter: function (value) {
                        return value.toFixed(2); // แสดงค่าเฉลี่ยแบบทศนิยม 2 ตำแหน่ง
                    }
                }
            },
            {
                opposite: true, // แกน Y สำหรับ Total Informants อยู่ฝั่งขวา
                title: {
                    text: 'จำนวนผู้เเบบประเมิน/เดือน'
                },
                labels: {
                    formatter: function (value) {
                        return Math.round(value); // แสดงจำนวนเต็ม
                    }
                }
            }
        ],
        title: {
            text: 'จำนวนผู้ทำเเบบประเมิน/คะเเนนเฉลี่ยรายเดือน',
            align: 'center'
        },
        colors: ['#fcba03', '#03a9fc'] // สีสำหรับแต่ละชุดข้อมูล
    };

    var chart = new ApexCharts(document.querySelector("#chart_02"), options);
    chart.render();
</script>


