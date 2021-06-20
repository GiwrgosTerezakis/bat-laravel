<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title id="title-of-custom">

    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/black-dashboard.css?v=1.0.0" rel="stylesheet"/>
    <!-- CSS Just for custom purpose, don't include it in your project -->
    <link href="/custom/custom.css" rel="stylesheet"/>
</head>

<body class=" ">
<div class="wrapper ">

    <div class="main-panel">
        <div class="go-to-home">
            <a href="/"> HOME </a>
        </div>

        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <h5 class="card-category">ML Models</h5>
                                    <h2 class="card-title" id="firstChart"></h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-group btn-group-toggle float-right buttons-to-select" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-simple active" id="chacc">
                                            <input type="radio" name="options" autocomplete="off" checked> Accuracy
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-simple " id="dig">
                                            <input type="radio" name="options" autocomplete="off" > Disparate Impact
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area" id="chart1-area">
                                <div class="lds-dual-ring"></div>
                                <canvas id="chartBig1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <h5 class="card-category">Analysis Attribute</h5>
                            <h2 class="card-title" id="card-title-h2"></h2>
                            <h5 class="card-category">Total People</h5>
                            <h3 class="card-title">
                                <i class="tim-icons text-info" id="infoPeople">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </i>
                            </h3>
                        </div>
                        <div class="card-body ">
                            <div class="chart-area">
                                <canvas id="GenderChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title"> Dataset</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table tablesorter " id="">
                                    <thead class=" text-primary">
                                    @foreach($thNames as $thname )
                                        <th>
                                            {{$thname}}
                                        </th>
                                    @endforeach
                                    </thead>
                                    <tbody>
                                    @foreach($sampleData as $key => $sample)
                                        <tr>
                                            @foreach($thNames as $thname)
                                            <td style="text-transform: capitalize;">
                                                {{$sample[$thname]}}
                                            </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Research of a System for Βias Identification in Machine Learning, University of Patras
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="/js/plugins/chartjs.min.js"></script>
<script src="/js/plugins/bootstrap-notify.js"></script>
{{--$dataToSend = [--}}
{{--'filename' => Session::get('filename'),--}}
{{--'target' => $request->get('TargetInput'),--}}
{{--'privileged' => $request->get('Privileged'),--}}
{{--'unprivileged' => $request->get('Unprivileged'),--}}
{{--'analysis' => $request->get('Analysis')--}}
{{--];--}}
@if(!empty($dataToSend))

<script>

    //console.log(filename);

    type = ['primary', 'info', 'success', 'warning', 'danger'];
    gradientBarChartConfiguration = {
        maintainAspectRatio: false,
        legend: {
            display: false
        },

        tooltips: {
            backgroundColor: '#f5f5f5',
            titleFontColor: '#333',
            bodyFontColor: '#666',
            bodySpacing: 4,
            xPadding: 12,
            mode: "nearest",
            intersect: 0,
            position: "nearest"
        },
        responsive: true,
        scales: {
            yAxes: [{

                gridLines: {
                    drawBorder: false,
                    color: 'rgba(29,140,248,0.1)',
                    zeroLineColor: "transparent",
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100,
                    padding: 20,
                    fontColor: "#9e9e9e"
                }
            }],

            xAxes: [{

                gridLines: {
                    drawBorder: false,
                    color: 'rgba(29,140,248,0.1)',
                    zeroLineColor: "transparent",
                },
                ticks: {
                    padding: 20,
                    fontColor: "#9e9e9e"
                }
            }]
        }
    };
    var dataToSend =  {!! json_encode($dataToSend) !!};
    filename = dataToSend['filename'].split('.').slice(0, -1).join('.');
    sensitive = dataToSend['sensitive']
    analysis = dataToSend['analysis']
    target = dataToSend['target']
    privileged = dataToSend['privileged']
    unprivileged = dataToSend['unprivileged']

    $('#card-title-h2').append('<p>' + analysis + '</p>');
    $('#title-of-custom').append(filename);
    $.ajax({
        url: 'https://bat-django.herokuapp.com/custom/'+filename+'/'+sensitive+'/'+analysis+'/'+target+'/'+privileged+'/'+unprivileged+'/',
        type: 'GET',
        dataType: 'json',
        beforeSend: function() {
            $('#chart1-area').append('<span class="basel-spinner ajax-call"></span>');
        },

        success: (data) => {

            $('.basel-spinner.ajax-call').remove();
            dataModels = data;

            analysis = data['analysis'];
            total_count = data['total_count'];
            $('#infoPeople').append(total_count)

            let labelsToShow = [];
            let dataToShow = [];
            $.map(analysis, function(val, key) {
                labelsToShow.push(key)
                dataToShow.push(val)
            })
            var ctx = document.getElementById("GenderChart").getContext("2d");

            var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

            gradientStroke.addColorStop(1, 'rgba(29,140,248,0.2)');
            gradientStroke.addColorStop(0.4, 'rgba(29,140,248,0.0)');
            gradientStroke.addColorStop(0, 'rgba(29,140,248,0)'); //blue colors
            var myChart = new Chart(ctx, {
                type: 'bar',
                responsive: true,
                legend: {
                    display: false
                },
                data: {
                    labels: labelsToShow,
                    datasets: [{
                        label: "",
                        fill: true,
                        backgroundColor: gradientStroke,
                        hoverBackgroundColor: gradientStroke,
                        borderColor: '#1f8ef1',
                        borderWidth: 2,
                        borderDash: [],
                        borderDashOffset: 0.0,
                        data: dataToShow,
                    }]
                },
                options: gradientBarChartConfiguration
            });


            $('#firstChart').html('Accuracy');
            var models = [];
            var accs = [];
            var dig = [];
            var dia = [];
            $.map(dataModels, function(val, key) {
                if(key !== 'analysis' && key !== 'total_count')
                {
                    models.push(val.model);
                    accs.push(val.acc);
                    dia.push(val.disparate_impact)
                }


            })


            var chart_labels = models;
            var chart_data = accs;
            var chart_data1 = dia;


            var ctx = document.getElementById("chartBig1").getContext('2d');


            var config = {
                data: {
                    labels: chart_labels,
                    datasets: [{
                        type: 'line',
                        hidden: false,
                        label: "Accuracy",
                        fill: true,
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        borderDash: [],
                        borderDashOffset: 0.0,
                        pointBackgroundColor: 'white',
                        pointBorderColor: 'white',
                        pointHoverBackgroundColor: 'transparent',
                        pointBorderWidth: 5,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 15,
                        pointRadius: 4,
                        data: chart_data,
                        order: 2,
                    },
                        {
                            hidden: true,
                            type: 'line',
                            label: "Disparate Impact",
                            fill: true,
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(75, 192, 192, 0.8)',
                            borderWidth: 2,
                            borderDash: [],
                            borderDashOffset: 0.0,
                            pointBackgroundColor: 'white',
                            pointBorderColor: 'rgba(255,255,255,0)',
                            pointHoverBackgroundColor: 'red',
                            pointBorderWidth: 5,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 15,
                            pointRadius: 4,
                            data: chart_data1,
                            order: 1,
                        },
                        {
                            hidden: true,
                            fill: false,
                            borderColor: 'rgba(226,226,226,0.8)',
                            type: 'line',
                            label: 'Upper Acceptable Line',
                            pointBackgroundColor: 'transparent',
                            pointBorderColor: 'transparent',
                            pointBorderWidth: 0,
                            backgroundColor: 'transparent',
                            data: [1.2, 1.2, 1.2, 1.2, 1.2, 1.2, 1.2],
                            order: 2,
                        },
                        {
                            hidden: true,
                            fill: false,
                            borderColor: 'rgba(226,226,226,0.8)',
                            type: 'line',
                            pointBorderWidth: 0,
                            pointBackgroundColor: 'transparent',
                            pointBorderColor: 'transparent',
                            label: 'Lower Acceptable Line',
                            backgroundColor: 'transparent',
                            data: [0.8, 0.8, 0.8, 0.8, 0.8, 0.8, 0.8],
                            order: 2,
                        }
                    ]
                },
                options: gradientChartOptionsConfigurationWithTooltipPurple
            };
            var myChartData = new Chart(ctx, config);


            $('#chacc').click(function() {
                myChartData.data.datasets[2].hidden = true;
                myChartData.data.datasets[3].hidden = true;
                myChartData.data.datasets[0].hidden = false;
                myChartData.data.datasets[1].hidden = true;
                $('#firstChart').html('Accuracy');
                myChartData.update();
            });

            $('#dig').click(function() {
                myChartData.data.datasets[2].hidden = false;
                myChartData.data.datasets[3].hidden = false;
                myChartData.data.datasets[1].hidden = false;
                myChartData.data.datasets[0].hidden = true;
                $('#firstChart').html('Disparate Impact <h5 class="card-category">unprivileged group: ' + unprivileged + ' <br>privileged group: ' + privileged + ' </h5>');
                myChartData.update();
            });

        }


    });












    custom = {
        initPickColor: function() {
            $('.pick-class-label').click(function() {
                var new_class = $(this).attr('new-class');
                var old_class = $('#display-buttons').attr('data-class');
                var display_div = $('#display-buttons');
                if (display_div.length) {
                    var display_buttons = display_div.find('.btn');
                    display_buttons.removeClass(old_class);
                    display_buttons.addClass(new_class);
                    display_div.attr('data-class', new_class);
                }
            });
        },

        initDocChart: function() {
            chartColor = "#FFFFFF";

            // General configuration for the charts with Line gradientStroke
            gradientChartOptionsConfiguration = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }],
                    xAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 15,
                        bottom: 15
                    }
                }
            };


        },

        initDashboardPageCharts: function() {

            gradientChartOptionsConfigurationWithTooltipBlue = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                tooltips: {
                    backgroundColor: '#f5f5f5',
                    titleFontColor: '#333',
                    bodyFontColor: '#666',
                    bodySpacing: 4,
                    xPadding: 12,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest"
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(29,140,248,0.0)',
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            suggestedMin: 60,
                            suggestedMax: 125,
                            padding: 20,
                            fontColor: "#2380f7"
                        }
                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(29,140,248,0.1)',
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#2380f7"
                        }
                    }]
                }
            };

            gradientChartOptionsConfigurationWithTooltipPurple = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                tooltips: {
                    backgroundColor: '#f5f5f5',
                    titleFontColor: '#333',
                    bodyFontColor: '#666',
                    bodySpacing: 4,
                    xPadding: 5,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest"
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        barPercentage: 1.6,
                        ticks:{
                            beginAtZero: true,
                            suggestedMax: 1,
                            stepSize: 0.25,
                            fontColor: '#ffffff'
                        }
                    },],

                    xAxes: [{
                        barPercentage: 0.8,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(201,195,194,0.2)',
                            zeroLineColor: "white",
                        },
                        ticks: {
                            padding: 10,
                            fontColor: "#ffffff"
                        }
                    }]
                }
            };

            gradientChartOptionsConfigurationWithTooltipOrange = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                tooltips: {
                    backgroundColor: '#f5f5f5',
                    titleFontColor: '#333',
                    bodyFontColor: '#666',
                    bodySpacing: 4,
                    xPadding: 12,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest"
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(29,140,248,0.0)',
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            suggestedMin: 50,
                            suggestedMax: 110,
                            padding: 20,
                            fontColor: "#ff8a76"
                        }
                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(220,53,69,0.1)',
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#ff8a76"
                        }
                    }]
                }
            };

            gradientChartOptionsConfigurationWithTooltipGreen = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                tooltips: {
                    backgroundColor: '#f5f5f5',
                    titleFontColor: '#333',
                    bodyFontColor: '#666',
                    bodySpacing: 4,
                    xPadding: 12,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest"
                },
                responsive: true,
            };




            var ctx = document.getElementById("chartLinePurple").getContext("2d");

            var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

            gradientStroke.addColorStop(1, 'rgba(72,72,176,0.2)');
            gradientStroke.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors

            var data = {
                labels: ['JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                datasets: [{
                    label: "Data",
                    fill: true,
                    backgroundColor: gradientStroke,
                    borderColor: '#d048b6',
                    borderWidth: 2,
                    borderDash: [],
                    borderDashOffset: 0.0,
                    pointBackgroundColor: '#d048b6',
                    pointBorderColor: 'rgba(255,255,255,0)',
                    pointHoverBackgroundColor: '#d048b6',
                    pointBorderWidth: 20,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 15,
                    pointRadius: 4,
                    data: [80, 100, 70, 80, 120, 80],
                }]
            };

            var myChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: gradientChartOptionsConfigurationWithTooltipPurple
            });
        },
    };

</script>
@endif
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();


            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($navbar.length != 0) {
                    $navbar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function () {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function () {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function () {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function () {
                $('body').removeClass('white-content');
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        custom.initDashboardPageCharts();

    });
</script>
</body>

</html>
