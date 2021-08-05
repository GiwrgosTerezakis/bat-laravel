<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="bat.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Compas
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/black-dashboard.css?v=1.0.0" rel="stylesheet"/>
    <link href="/custom/custom.css" rel="stylesheet"/>
</head>

<body class=" ">
<div class="wrapper ">

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent nav-desktop  ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">Compas | Recidivism Risk Score Data and Analysis</a>
                </div>
            </div>
        </nav>
        <div class="go-to-home">
            <a class="btn btn-primary" href="/"> HOME </a>
        </div>

        <div class="grid-holder-title col-12">
            <h5>Compas | Recidivism Risk Score Data and Analysis </h5>
        </div>
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" id="ScrollToTop"  title="Top">
            <svg version="1.1" id="svg_to_top" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="462.847px" height="462.847px" viewBox="0 0 462.847 462.847"
                 style="enable-background:new 0 0 462.847 462.847;"
                 xml:space="preserve">
            <g>
                <g>
                    <path d="M257.261,88.679c-1.635-2.034-3.428-3.405-5.281-4.258c-5.586-4.25-13.649-5.319-20.253,0.794
                        C156.973,154.431,77.815,218.764,4.669,289.735c-4.961,4.81-5.558,10.542-3.702,15.463c0.363,2.828,1.485,5.683,3.702,8.333
                        c17.61,21.018,36.122,41.223,55.467,60.667c8.325,8.363,19.296,4.219,24.138-3.494c48.362-40.649,96.253-87.062,144.664-127.66
                        c46.263,46.052,98.673,90.438,146.659,134.622c5.383,4.951,11.73,5.149,16.92,2.772c4.936-0.376,9.455-3.361,12.781-7.662
                        c15.615-20.216,32.077-39.746,49.231-58.677c7.814-4.763,12.126-15.884,3.793-24.358
                        C391.827,222.103,316.886,162.896,257.261,88.679z M386.993,346.025c-47.073-42.157-97.574-85.62-141.874-130.824
                        c-2.306-2.356-4.834-3.656-7.373-4.248c-5.578-3.786-13.348-4.674-19.883,0.779c-49.129,41.015-97.627,87.976-146.558,129.219
                        c-12.002-12.446-23.577-25.293-34.901-38.364c66.443-63.515,137.316-122.143,205.155-184.145
                        c55.127,66.511,122.171,121.356,183.386,182.017C411.859,315.293,399.251,330.502,386.993,346.025z"/>
                </g>
            </g>

            </svg>

        </button>
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
                <div class="col-lg-12 mid-choose-buttons">
                    <div class="btn-group btn-group-toggle buttons-to-select" data-toggle="buttons">
                        <label class="btn btn-sm btn-primary btn-simple active" id="analyticsButton">
                            <input type="radio" name="options" autocomplete="off" checked> Analytics
                        </label>
                        <label class="btn btn-sm btn-primary btn-simple" id="analyticsDemo">
                            <input type="radio" name="options" autocomplete="off" > Demographics
                        </label>

                    </div>
                </div>
                <div class="col-12" id="analyticsCard">
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
                                            <input type="radio" name="options" autocomplete="off" > Disparate Impact Race
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-documentation">
                                <div class="col-lg-12 ">
                                    <h5 class="card-title card-doc" style="text-align: center;padding: 0 50px;">
                                        </h5>
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
            <div class="row" id="DemographicsCard">
                <div class="col-lg-12" style="display: inline-flex">

                    <div class="col-lg-6 gender-table">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <h2 class="card-title"  style=" text-align: center;text-decoration: overline;padding: 15px;">Gender Distribution</h2>
                                <h5 class="card-category">Total People</h5>
                                <h3 class="card-title"><i class="tim-icons text-info ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                             class="bi bi-people" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                        </svg>
                                    </i> 7214
                                </h3>
                                <ul style="list-style-type: disclosure-closed;" id="gender-analysis">

                                </ul>
                            </div>
                            <div class="card-body ">
                                <div class="chart-area">
                                    <canvas id="GenderChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 gender-table-risk">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <h2 class="card-title"  style=" text-align: center;text-decoration: overline;padding: 15px;">Gender | 2 years Recidivism</h2>
                                <h5 class="card-category">Total People</h5>

                                <h3 class="card-title"><i class="tim-icons text-info ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                             class="bi bi-people" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                        </svg>
                                    </i> 7214
                                </h3>
                                <ul style="list-style-type: disclosure-closed;" id="gender-recid">

                                </ul>
                            </div>
                            <div class="card-body ">
                                <div class="chart-area">
                                    <canvas id="GenderChartRisk"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12" style="display: inline-flex">
                    <div class="col-lg-6 race-table">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <h2 class="card-title"  style=" text-align: center;text-decoration: overline;padding: 15px;">

                                    Race Distribution</h2>
                            </div>

                            <ul style="list-style-type: disclosure-closed;" id="race-analysis">

                            </ul>
                            <div class="card-body ">
                                <div class="chart-area">
                                    <canvas id="chartLineGreen"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 race-table-risk">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <h2 class="card-title"  style=" text-align: center;text-decoration: overline;padding: 15px;" >Race | 2 years Recidivism</h2>
                            </div>
                            <ul style="list-style-type: disclosure-closed;" id="race-recid">

                            </ul>
                            <div class="card-body ">
                                <div class="chart-area">
                                    <canvas id="chartLineRight"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row" id="dataset-show">
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
                                            {{$sample['name']}}
                                        </td>
                                        <td>
                                            {{$sample['sex']}}
                                        </td>
                                        <td>
                                            {{$sample['age']}}
                                        </td>
                                        <td >
                                            {{$sample['race']}}
                                        </td>
                                        <td >
                                            {{$sample['charge_degree']}}
                                        </td>
                                        <td >
                                            {{$sample['charge_desc']}}
                                        </td>
                                        <td >
                                            {{$sample['two_year_recid']}}
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
            <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content modal-content-feedback">
  <span class="close" onclick="closeFeedbackModal();">&times;</span>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeYbU03_-rvgIkvbTHmv47kBp-nVm_ucAeVNx4oJhkVyUezKQ/viewform?embedded=true"  height="2115" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>  </div>

</div>
            <div class="feedback-class" style="text-align: center;color: black" class="mt-2">

            <a onclick="openFeedBackModal();">
<svg version="1.1" id="Feedback"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.219C288.427,8.042,272.677,0,256,0
				s-32.427,8.042-42.448,21.333h-32.219c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.135,42.667,64,61.802,64,85.333v384
				C64,492.865,83.135,512,106.667,512h298.667C428.865,512,448,492.865,448,469.333v-384C448,61.802,428.865,42.667,405.333,42.667
				z M170.667,53.333c0-5.885,4.781-10.667,10.667-10.667h37.917c3.792,0,7.302-2.021,9.219-5.302
				c5.844-10.042,16.135-16.031,27.531-16.031s21.688,5.99,27.531,16.031c1.917,3.281,5.427,5.302,9.219,5.302h37.917
				c5.885,0,10.667,4.781,10.667,10.667V64c0,11.76-9.573,21.333-21.333,21.333H192c-11.76,0-21.333-9.573-21.333-21.333V53.333z
				 M426.667,469.333c0,11.76-9.573,21.333-21.333,21.333H106.667c-11.76,0-21.333-9.573-21.333-21.333v-384
				c0-11.76,9.573-21.333,21.333-21.333h42.667c0,23.531,19.135,42.667,42.667,42.667h128c23.531,0,42.667-19.135,42.667-42.667
				h42.667c11.76,0,21.333,9.573,21.333,21.333V469.333z"/>
			<path d="M202.667,170.667h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
				c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,175.438,208.563,170.667,202.667,170.667z M192,234.667h-42.667V192H192
				V234.667z"/>
			<path d="M202.667,341.333h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
				c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,346.104,208.563,341.333,202.667,341.333z M192,405.333h-42.667v-42.667H192
				V405.333z"/>
			<circle cx="277.333" cy="181.333" r="10.667"/>
			<circle cx="341.333" cy="181.333" r="10.667"/>
			<path d="M309.333,256c38.156,0,51.656-26.115,52.208-27.229c2.604-5.208,0.51-11.479-4.667-14.156
				c-5.177-2.719-11.583-0.646-14.344,4.479c-0.344,0.635-8.677,15.573-33.198,15.573c-24.333,0-32.729-14.719-33.188-15.563
				c-2.667-5.177-8.99-7.229-14.25-4.646c-5.271,2.635-7.406,9.042-4.771,14.313C257.677,229.885,271.177,256,309.333,256z"/>
			<circle cx="277.333" cy="352" r="10.667"/>
			<circle cx="341.333" cy="352" r="10.667"/>
			<path d="M309.333,384c-38.156,0-51.656,26.115-52.208,27.229c-2.604,5.208-0.51,11.479,4.667,14.156
				c5.156,2.698,11.573,0.656,14.344-4.479c0.344-0.635,8.677-15.573,33.198-15.573c24.333,0,32.729,14.719,33.188,15.563
				c1.885,3.656,5.615,5.771,9.49,5.771c1.604,0,3.229-0.365,4.76-1.125c5.271-2.635,7.406-9.042,4.771-14.313
				C360.99,410.115,347.49,384,309.333,384z"/>
		</g>
	</g>
</g> </a>
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
<script src="/custom/custom.js"></script>
<script>

function openFeedBackModal(){
        $('#myModal').show();
    }
    function closeFeedbackModal(){
        $('#myModal').hide();
    }
</script>
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
