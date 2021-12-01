<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="bat.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title id="title-of-custom">

    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for custom purpose, don't include it in your project -->
    <link href="/custom/custom.css" rel="stylesheet" />
</head>

<body class=" ">
    <div class="wrapper ">

        <div class="main-panel">
            <div class="go-to-home">
                <a class="btn btn-primary" href="/"> HOME </a>
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
                <div class="col-lg-12 mid-choose-buttons">
                    <div class="col-sm-3 total-people" style="margin: 0 auto">
                        <h5 class="card-category" style="margin-bottom: 0px;
                    margin-top: 10px;font-size: 20px;">Total People</h5>
                        <h3 class="card-title"><i style="bottom: 3px;
                        position: relative;" class="tim-icons text-info " id="infoPeople">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>
                            </i>
                        </h3>
                    </div>
                    <div class="btn-group btn-group-toggle buttons-to-select" data-toggle="buttons">
                        <label class="btn btn-sm btn-primary btn-simple active" id="analyticsButton">
                            <input type="radio" name="options" autocomplete="off" checked> Analytics
                        </label>
                        <label class="btn btn-sm btn-primary btn-simple" id="analyticsDemo">
                            <input type="radio" name="options" autocomplete="off"> Demographics
                        </label>

                    </div>
                </div>
                <div class="row" id="analyticsCard">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <h5 class="card-category">ML Models</h5>
                                        <h2 class="card-title" id="firstChart"></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="btn-group btn-group-toggle float-right buttons-to-select"
                                            data-toggle="buttons">
                                            <label class="btn btn-sm btn-primary btn-simple active" id="chacc">
                                                <input type="radio" name="options" autocomplete="off" checked> Accuracy
                                            </label>
                                            <label class="btn btn-sm btn-primary btn-simple " id="dig">
                                                <input type="radio" name="options" autocomplete="off"> Disparate Impact
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
                        <div class="col-lg-6 custom-analysis-table">
                            <div class="card card-chart">
                                <div class="card-header ">

                                    <h2 class="card-title"
                                        style=" text-align: center;text-decoration: overline;padding: 15px;"
                                        id="card-title-h2"></h2>

                                </div>
                                <div class="card-body ">
                                    <div class="chart-area">
                                        <canvas id="CustomChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 custom-analysis-table-risk">
                            <div class="card card-chart">
                                <div class="card-header ">

                                    <h2 class="card-title"
                                        style=" text-align: center;text-decoration: overline;padding: 15px;"
                                        id="card-title2-h2"></h2>
                                </div>
                                <div class="card-body ">
                                    <div class="chart-area">
                                        <canvas id="CustomChartRisk"></canvas>
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
                                            @foreach ($thNames as $thname)
                                                <th>
                                                    {{ $thname }}
                                                </th>
                                            @endforeach
                                        </thead>
                                        <tbody>
                                            @foreach ($sampleData as $key => $sample)
                                                <tr>
                                                    @foreach ($thNames as $thname)
                                                        <td style="text-transform: capitalize;">
                                                            {{ $sample[$thname] }}
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
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content modal-content-feedback">
                        <span class="close" onclick="closeFeedbackModal();">&times;</span>
                        <iframe
                            src="https://docs.google.com/forms/d/e/1FAIpQLSeYbU03_-rvgIkvbTHmv47kBp-nVm_ucAeVNx4oJhkVyUezKQ/viewform?embedded=true"
                            height="2115" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>

                </div>
                <div class="feedback-class" style="text-align: center;color: black" class="mt-2">

                    <a onclick="openFeedBackModal();">
                        <svg version="1.1" id="Feedback" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
    h42.667c11.76,0,21.333,9.573,21.333,21.333V469.333z" />
                                        <path d="M202.667,170.667h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
    c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,175.438,208.563,170.667,202.667,170.667z M192,234.667h-42.667V192H192
    V234.667z" />
                                        <path d="M202.667,341.333h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
    c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,346.104,208.563,341.333,202.667,341.333z M192,405.333h-42.667v-42.667H192
    V405.333z" />
                                        <circle cx="277.333" cy="181.333" r="10.667" />
                                        <circle cx="341.333" cy="181.333" r="10.667" />
                                        <path
                                            d="M309.333,256c38.156,0,51.656-26.115,52.208-27.229c2.604-5.208,0.51-11.479-4.667-14.156
    c-5.177-2.719-11.583-0.646-14.344,4.479c-0.344,0.635-8.677,15.573-33.198,15.573c-24.333,0-32.729-14.719-33.188-15.563
    c-2.667-5.177-8.99-7.229-14.25-4.646c-5.271,2.635-7.406,9.042-4.771,14.313C257.677,229.885,271.177,256,309.333,256z" />
                                        <circle cx="277.333" cy="352" r="10.667" />
                                        <circle cx="341.333" cy="352" r="10.667" />
                                        <path d="M309.333,384c-38.156,0-51.656,26.115-52.208,27.229c-2.604,5.208-0.51,11.479,4.667,14.156
    c5.156,2.698,11.573,0.656,14.344-4.479c0.344-0.635,8.677-15.573,33.198-15.573c24.333,0,32.729,14.719,33.188,15.563
    c1.885,3.656,5.615,5.771,9.49,5.771c1.604,0,3.229-0.365,4.76-1.125c5.271-2.635,7.406-9.042,4.771-14.313
    C360.99,410.115,347.49,384,309.333,384z" />
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
                        Research of a System for Βias Identification in Machine Learning, University of Patras
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function openFeedBackModal() {
            $('#myModal').show();
        }

        function closeFeedbackModal() {
            $('#myModal').hide();
        }
    </script>
    <script src="/js/core/jquery.min.js"></script>
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="/js/plugins/chartjs.min.js"></script>
    <script src="/js/plugins/bootstrap-notify.js"></script>
    {{-- $dataToSend = [ --}}
    {{-- 'filename' => Session::get('filename'), --}}
    {{-- 'target' => $request->get('TargetInput'), --}}
    {{-- 'privileged' => $request->get('Privileged'), --}}
    {{-- 'unprivileged' => $request->get('Unprivileged'), --}}
    {{-- 'analysis' => $request->get('Analysis') --}}
    {{-- ]; --}}
    @if (!empty($dataToSend))

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
                        barPercentage: 1.5,
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
                        barPercentage: 0.6,
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
            var dataToSend = {!! json_encode($dataToSend) !!};
            filename = dataToSend['filename'].split('.').slice(0, -1).join('.');
            sensitive = dataToSend['sensitive']
            analysis = dataToSend['analysis']
            target = dataToSend['target']
            privileged = dataToSend['privileged']
            unprivileged = dataToSend['unprivileged']
            dropFirstColumn = dataToSend['dropFirstColumn']
            encode = dataToSend['encode']

            $('#card-title-h2').append('<p>' + analysis + ' Analysis</p>');
            $('#card-title2-h2').append('<p>' + sensitive + ' | ' + target + '</p>');
            $('#title-of-custom').append(filename);
            $.ajax({
                url: 'https://bat-django.herokuapp.com/custom/',
                type: 'GET',
                data: {
                    filename: dataToSend['filename'].split('.').slice(0, -1).join('.'),
                    sensitive:  dataToSend['sensitive'],
                    analysis:  dataToSend['analysis'],
                    target:  dataToSend['target'],
                    privileged:  dataToSend['privileged'],
                    unprivileged:  dataToSend['unprivileged'],
                    dropFirstColumn:  dataToSend['dropFirstColumn'],
                    encode:  dataToSend['encode'],
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#chart1-area').append('<span class="basel-spinner ajax-call"></span>');
                },

                success: (data) => {

                    $('.basel-spinner.ajax-call').remove();
                    dataModels = data;

                    analysis = data['analysis'];
                    total_count = data['total_count'];
                    analysis_risk = data['check-priv']
                    $('#infoPeople').append(total_count)
                    let labelsToShow = [];
                    let dataToShow = [];
                    $.map(analysis, function(val, key) {
                        labelsToShow.push(key)
                        dataToShow.push(val)
                    })

                    let labelsToShowRisk = [];
                    let dataToShowRisk = [];
                    $.map(analysis_risk, function(val, key) {
                        if (key == "privileged") {

                            labelsToShowRisk.push(privileged)
                        } else {
                            labelsToShowRisk.push(unprivileged)
                        }

                        dataToShowRisk.push(val)
                    })

                    var ctx = document.getElementById("CustomChart").getContext("2d");
                    var ctx1 = document.getElementById("CustomChartRisk").getContext("2d");

                    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke.addColorStop(1, 'rgba(29,140,248,0.2)');
                    gradientStroke.addColorStop(0.4, 'rgba(29,140,248,0.0)');
                    gradientStroke.addColorStop(0, 'rgba(29,140,248,0)'); //blue colors

                    var myChart1 = new Chart(ctx1, {
                        type: 'bar',
                        responsive: true,
                        legend: {
                            display: false
                        },
                        data: {
                            labels: labelsToShowRisk,
                            datasets: [{
                                label: "",
                                fill: true,
                                backgroundColor: gradientStroke,
                                hoverBackgroundColor: gradientStroke,
                                borderColor: '#1f8ef1',
                                borderWidth: 2,
                                borderDash: [],
                                borderDashOffset: 0.0,
                                data: dataToShowRisk,
                            }]
                        },
                        options: gradientBarChartConfiguration
                    });

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
                        if (key !== 'analysis' && key !== 'total_count' && key !== 'check-priv') {
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
                        type: 'bar',
                        data: {
                            labels: chart_labels,
                            datasets: [{
                                    hidden: false,
                                    label: "Accuracy",
                                    fill: true,
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 0.2)',
                                    borderWidth: 1,
                                    data: chart_data,
                                    order: 2,
                                },
                                {
                                    hidden: true,
                                    label: "Disparate Impact",
                                    fill: true,
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 0.2)',
                                    borderWidth: 1,
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
                                    data: [1.2, 1.2, 1.2, 1.2, 1.2, 1.2],
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
                                    data: [0.8, 0.8, 0.8, 0.8, 0.8, 0.8],
                                    order: 2,
                                }
                            ]
                        },
                        options: gradientChartOptionsConfigurationWithTooltipPurple
                    };
                    var myChartData = new Chart(ctx, config);

                    $('#analyticsButton').click(function() {
                        $('#DemographicsCard').hide();
                        $('#analyticsCard').show();
                        $(".total-people").hide();
                        $('#dataset-show').hide();
                    });

                    $('#analyticsDemo').click(function() {
                        $('#DemographicsCard').show();
                        $(".total-people").show();
                        $('#analyticsCard').hide();
                        $('#dataset-show').show();
                    });

                    $('#chacc').click(function() {
                        myChartData.data.datasets[2].hidden = true;
                        myChartData.data.datasets[3].hidden = true;
                        myChartData.data.datasets[0].hidden = false;
                        myChartData.data.datasets[1].hidden = true;
                        $('#firstChart').html('Accuracy');
                        $(".row-documentation .card-doc").html("");
                        myChartData.update();
                    });

                    $('#dig').click(function() {
                        myChartData.data.datasets[2].hidden = false;
                        myChartData.data.datasets[3].hidden = false;
                        myChartData.data.datasets[1].hidden = false;
                        myChartData.data.datasets[0].hidden = true;
                        $('#firstChart').html(
                            'Disparate Impact <h5 class="card-category">unprivileged group: ' +
                            unprivileged + ' <br>privileged group: ' + privileged + ' </h5>');
                        $(".row-documentation .card-doc").html(
                            "Computed as the ratio of rate of favorable outcome for the unprivileged group to that of the privileged group.\n" +
                            "                                        The ideal value of this metric is 1.0<br> A value &lt; 1 implies higher benefit for\n" +
                            "                                        the privileged group and a value &gt; 1 implies a higher benefit for the\n" +
                            "                                        unprivileged group.<br>\n" +
                            "                                        Fairness for this metric is between 0.8 and 1.25"
                        );
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
                                gridLines: {
                                    drawBorder: false,
                                    zeroLineColor: "white",
                                },
                                ticks: {
                                    beginAtZero: true,
                                    suggestedMax: 1,
                                    stepSize: 0.25,
                                    fontColor: '#ffffff'
                                }
                            }, ],

                            xAxes: [{
                                barPercentage: 0.6,
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

                },
            };

            if(dataToSend['deleteAfter']){
                $.ajax({
                    url: '/delete-csv',
                    type: 'GET',
                    data: { filename: dataToSend['filename']} ,
                    success: function () {

                    },
                })
            }
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();


                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
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

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
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
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            custom.initDashboardPageCharts();

        });
    </script>
</body>

</html>
