<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="bat.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        German Credit Risk
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
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent nav-desktop  ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">German Credit Risk</a>
                </div>
            </div>
        </nav>
        <div class="go-to-home">
            <a class="btn btn-primary" href="/"> HOME </a>
        </div>
        <div class="grid-holder-title col-12">
            <h5>German Credit Risk </h5>
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
                                            <input type="radio" name="options" autocomplete="off" > Disparate Impact Gender
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-simple " id="dir">
                                            <input type="radio" name="options" autocomplete="off" > Disparate Impact Age
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

                <div class="col-md-6 gender-table">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <h5 class="card-category">Attribute</h5>
                            <h2 class="card-title" >Gender Distribution</h2>
                            <h5 class="card-category">Total People</h5>
                            <h3 class="card-title"><i class="tim-icons text-info ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </i> 1000
                            </h3>
                        </div>
                        <div class="card-body ">
                            <div class="chart-area">
                                <canvas id="GenderChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gender-table-risk">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <h5 class="card-category">Attribute</h5>
                            <h2 class="card-title" >Gender/Good Risk</h2>
                            <h5 class="card-category">Total People</h5>
                            <h3 class="card-title"><i class="tim-icons text-info ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </i> 1000
                            </h3>
                        </div>
                        <div class="card-body ">
                            <div class="chart-area">
                                <canvas id="GenderChartRisk"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 risk-table">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <h5 class="card-category">Attribute</h5>
                            <h2 class="card-title" >Age Distribution</h2>
                            <h5 class="card-category">Total People</h5>
                            <h3 class="card-title"><i class="tim-icons text-info ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </i> 1000
                            </h3>
                        </div>
                        <div class="card-body ">
                            <div class="chart-area">
                                <canvas id="chartLineGreen"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 risk-table-age">
                    <div class="card card-chart">
                        <div class="card-header ">
                            <h5 class="card-category">Attribute</h5>
                            <h2 class="card-title" >Age/Good Risk</h2>
                            <h5 class="card-category">Total People</h5>
                            <h3 class="card-title"><i class="tim-icons text-info ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </i> 1000
                            </h3>
                        </div>
                        <div class="card-body ">
                            <div class="chart-area">
                                <canvas id="chartLineRight"></canvas>
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
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td style="text-transform: capitalize;">
                                                {{$sample['age']}}
                                            </td>
                                            <td>
                                                {{$sample['sex']}}
                                            </td>
                                            <td>
                                                {{$sample['job']}}
                                            </td>
                                            <td >
                                                {{$sample['housing']}}
                                            </td>
                                            <td >
                                                {{$sample['saving_accounts']}}
                                            </td>
                                            <td >
                                                {{$sample['checking_account']}}
                                            </td>
                                            <td >
                                                {{$sample['credit_amount']}}
                                            </td>
                                            <td >
                                                {{$sample['duration']}}
                                            </td>
                                            <td >
                                                {{$sample['purpose']}}
                                            </td>
                                            <td >
                                                {{$sample['risk']}}
                                            </td>
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
                    by Research of a System for Βias Identification in Machine Learning, University of Patras
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
<script src="/german/german.js"></script>
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
