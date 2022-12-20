<?php include "elements/header.php"; ?>

<?php
    include '../safemysql.class.php';
    $db = new safeMysql();

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 1 AND group_id = 1";
    $countGroup1Value1 = $db->getOne($sql);

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 0 AND group_id = 1";
    $countGroup1Value0 = $db->getOne($sql);

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 1 AND group_id = 2";
    $countGroup2Value1 = $db->getOne($sql);

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 0 AND group_id = 2";
    $countGroup2Value0 = $db->getOne($sql);

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 1 AND group_id = 3";
    $countGroup3Value1 = $db->getOne($sql);

    $sql = "SELECT COUNT(id) as count FROM postability WHERE value = 0 AND group_id = 3";
    $countGroup3Value0 = $db->getOne($sql);
?>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line1");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Қатысты", "Қатыспады"],
                datasets: [{
                    data: [<?php echo $countGroup1Value1; ?>, <?php echo $countGroup1Value0; ?>],
                    backgroundColor: ["rgba(0, 151, 255, 0.8)", "rgba(255, 0, 45, 0.8)"]
                }]
            },
        });
    });
</script>

<script>
    $(document).ready(function() {
        var ctx = $("#chart-line2");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Қатысты", "Қатыспады"],
                datasets: [{
                    data: [<?php echo $countGroup2Value1; ?>, <?php echo $countGroup2Value0; ?>],
                    backgroundColor: ["rgba(0, 151, 255, 0.8)", "rgba(255, 0, 45, 0.8)"]
                }]
            },
        });
    });
</script>

<script>
    $(document).ready(function() {
        var ctx = $("#chart-line3");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Қатысты", "Қатыспады"],
                datasets: [{
                    data: [<?php echo $countGroup3Value1; ?>, <?php echo $countGroup3Value0; ?>],
                    backgroundColor: ["rgba(0, 151, 255, 0.8)", "rgba(255, 0, 45, 0.8)"]
                }]
            },
        });
    });
</script>

            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Статистика</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">ИС-302</h4>
                                    <p class="card-category">Көрсетілген группа бойынша қатысым графигі</p>
                                </div>
                                <div class="card-body ">
                                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                        </div> <canvas id="chart-line1" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">ИС-304</h4>
                                    <p class="card-category">Көрсетілген группа бойынша қатысым графигі</p>
                                </div>
                                <div class="card-body">
                                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                        </div> <canvas id="chart-line2" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">ПО-306</h4>
                                    <p class="card-category">Көрсетілген группа бойынша қатысым графигі</p>
                                </div>
                                <div class="card-body">
                                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                        </div> <canvas id="chart-line3" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "elements/footer.php"; ?>
