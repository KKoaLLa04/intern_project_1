</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/js/pages/dashboard.js?ver=<?= rand() ?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/js/demo.js"></script>

<script src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/js/custome.js?ver=<?php echo rand() ?>"></script>


<!-- ******************************************************************************************************************** -->
<!-- --------------------------------------------------chart custom js TỔNG doanh thu--------------------------------------------------- -->
<!-- ******************************************************************************************************************** -->
<script>
/* Chart.js Charts */
// Sales chart
var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
//$('#revenue-chart').get(0).getContext('2d');
var salesChartData = {
    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9',
        'Tháng 10', 'Tháng 11', 'Tháng 12'
    ],
    datasets: [{
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [<?= getToTalJanuary() ?>, <?= getToTalFeb() ?>, <?= getToTalMarch() ?>,
                <?= getToTalApril() ?>, <?= getToTalMay() ?>, <?= getToTalJune() ?>, <?= getToTalJuly() ?>,
                <?= getToTalAugust() ?>,
                <?= getToTalSep() ?>, <?= getToTalOc() ?>, <?= getToTalNo() ?>, <?= getToTaDec() ?>,
            ]
        },
        {
            label: 'Electronics',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [<?= totalJanuaryCourse() ?>, <?= totalFebCourse() ?>, <?= totalMarchCourse() ?>,
                <?= totalAprilCourse() ?>, <?= totalMayCourse() ?>, <?= totalJuneCourse() ?>,
                <?= totalJulyCourse() ?>, <?= totalAugustCourse() ?>, <?= totalSepCourse() ?>,
                <?= totalOcCourse() ?>, <?= totalNoCourse() ?>, <?= totalDecCourse() ?>
            ]
        },
    ]
}

var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
            gridLines: {
                display: false,
            }
        }],
        yAxes: [{
            gridLines: {
                display: false,
            }
        }]
    }
}

// This will get the first returned node in the jQuery collection.
var salesChart = new Chart(salesChartCanvas, {
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
})

// Donut Chart
var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
var pieData = {
    labels: [
        'Tháng 1',
        'Tháng 2',
        'Tháng 3',
        'Tháng 4',
        'Tháng 5',
        'Tháng 6',
        'Tháng 7',
        'Tháng 8',
        'Tháng 9',
        'Tháng 10',
        'Tháng 11',
        'Tháng 12',
    ],
    datasets: [{
        data: [<?= getToTalJanuary() + totalJanuaryCourse() ?>, <?= getToTalFeb() + totalFebCourse() ?>,
            <?= getToTalMarch() + totalMarchCourse() ?>, <?= getToTalApril() + totalAprilCourse() ?>,
            <?= getToTalMay() + totalMayCourse() ?>, <?= getToTalJune() + totalJuneCourse() ?>,
            <?= getToTalJuly() + totalJulyCourse() ?>, <?= getToTalAugust() + totalAugustCourse() ?>,
            <?= getToTalSep() + totalSepCourse() ?>, <?= getToTalOc() + totalOcCourse() ?>,
            <?= getToTalNo() + totalNoCourse() ?>, <?= getToTaDec() + totalDecCourse() ?>
        ],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#C5FFF8', '#96EFFF', '#5FBDFF', '#7B66FF',
            '#F0DBAF', '#DC8686', '#B06161', '#B31312', '#7ED7C1'
        ],
    }]
}
var pieOptions = {
    legend: {
        display: false
    },
    maintainAspectRatio: false,
    responsive: true,
}
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
var pieChart = new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: pieData,
    options: pieOptions
});
</script>

<!-- ******************************************************************************************************************** -->
<!-- --------------------------------------------------chart custom js SALES graph--------------------------------------------------- -->
<!-- ******************************************************************************************************************** -->
<script>
var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
//$('#revenue-chart').get(0).getContext('2d');

var salesGraphChartData = {
    labels: ['Quý 1 -<?= date('Y') ?>', 'Quý 2 -<?= date('Y') ?>', 'Quý 3 -<?= date('Y') ?>',
        'Quý 4 -<?= date('Y') ?>'
    ],
    datasets: [{
        label: 'Digital Goods',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#efefef',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#efefef',
        pointBackgroundColor: '#efefef',
        data: [<?= getTotalQ1() ?>, <?= getTotalQ2() ?>, <?= getTotalQ3() ?>, <?= getTotalQ4() ?>]
    }]
}

var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false,
    },
    scales: {
        xAxes: [{
            ticks: {
                fontColor: '#efefef',
            },
            gridLines: {
                display: false,
                color: '#efefef',
                drawBorder: false,
            }
        }],
        yAxes: [{
            ticks: {
                stepSize: 500000,
                fontColor: '#efefef',
            },
            gridLines: {
                display: true,
                color: '#efefef',
                drawBorder: false,
            }
        }]
    }
}

// This will get the first returned node in the jQuery collection.
var salesGraphChart = new Chart(salesGraphChartCanvas, {
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
})

// The Calender
$('#calendar').datetimepicker({
    format: 'L',
    inline: true
})
</script>

</body>

</html>