<?php
if ($_GET['bd']) {
    $bd = $_GET['bd'];
    if ($bd == 'day') {
        $time = 'Ngày';
        
    }
    if ($bd == 'week') {
        $time = 'Tuần';
    }
    if ($bd == 'month') {
        $time = 'Tháng';
    }
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Biểu đồ Doanh Thu Theo <?php echo $time; ?>  🌻 </h6>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <a class="btn btn-sm btn-primary" href="index.php?pg=baocao&bc=<?php echo $bd; ?>">Báo cáo</a>
            </div>
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = new google.visualization.arrayToDataTable([
                    ['<?php echo $time;?>', 'Doanh Thu'],
                    <?php
                    if ($bd == 'day') {
                        foreach ($dataDay as $row) {
                            echo "['" . $row['day'] . "', " . $row['total_revenue_day'] . "],";
                        }
                    } else if ($bd == 'week') {
                        foreach ($dataWeek as $row) {
                            echo "['" . $row['week'] . "', " . $row['total_revenue_week'] . "],";
                        }
                    } else if ($bd == 'month') {
                        foreach ($dataMonth as $row) {
                            echo "['" . $row['month'] . "', " . $row['total_revenue_month'] . "],";
                        }
                    }

                    ?>
                ]);

                var options = {
                    width: '100%',
                    legend: {
                        position: 'none'
                    },

                    axes: {
                        x: {
                            0: {
                                side: 'top',
                                label: '<?php echo $time;?>'
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "15%"
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                // Convert the Classic options to Material options.
                chart.draw(data, google.charts.Bar.convertOptions(options));
            };
        </script>

        <div id="top_x_div" style="height: 400px;"></div>
    </div>
</div>