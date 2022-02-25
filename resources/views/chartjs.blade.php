<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <canvas id="canvas1" height="280" width="600"></canvas>
                    <canvas id="canvas2" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script>
    var datas = <?php echo $datas; ?>;

    var settings = [];
    for (let i = 0; i < datas.length; i++) {
        var labels = datas[i].labels;
        var data = datas[i].data;
        var barChartData = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: "#e3e3e3",
                data: data
            }]
        };
        var setting = {
            type: 'bar',
            data: barChartData,
            options: {
                indexAxis: 'y',
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                },
                scales: {
                    xAxes: {
                        ticks: {
                            stepSize: 50
                        }
                    }
                }
            }
        };
        settings.push(setting);
    };

    window.onload = function() {
        var ctx_1 = document.getElementById("canvas1").getContext("2d");
        window.myBar_1 = new Chart(ctx_1, settings[0]);
        var ctx_2 = document.getElementById("canvas2").getContext("2d");
        window.myBar_2 = new Chart(ctx_2, settings[1]);
    };
</script>