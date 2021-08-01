window.onscroll = function () {
    scrollFunction();
};
mybutton = document.getElementById("ScrollToTop");
function scrollFunction() {
    if (
        document.body.scrollTop > 120 ||
        document.documentElement.scrollTop > 120
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

type = ["primary", "info", "success", "warning", "danger"];
gradientBarChartConfiguration = {
    maintainAspectRatio: false,
    legend: {
        display: false,
    },

    tooltips: {
        backgroundColor: "#f5f5f5",
        titleFontColor: "#333",
        bodyFontColor: "#666",
        bodySpacing: 4,
        xPadding: 12,
        mode: "nearest",
        intersect: 0,
        position: "nearest",
    },
    responsive: true,
    scales: {
        yAxes: [
            {
                gridLines: {
                    drawBorder: false,
                    color: "rgba(29,140,248,0.1)",
                    zeroLineColor: "transparent",
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100,
                    padding: 20,
                    fontColor: "#9e9e9e",
                },
            },
        ],

        xAxes: [
            {
                gridLines: {
                    drawBorder: false,
                    color: "rgba(29,140,248,0.1)",
                    zeroLineColor: "transparent",
                },
                ticks: {
                    padding: 20,
                    fontColor: "#9e9e9e",
                },
            },
        ],
    },
};

$.ajax({
    url: "https://bat-django.herokuapp.com/credit-risk/gender",
    type: "GET",
    dataType: "json",
    success: (data) => {
        var ctx = document.getElementById("GenderChart").getContext("2d");
        var ctx1 = document.getElementById("GenderChartRisk").getContext("2d");
        var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

        gradientStroke.addColorStop(1, "rgba(29,140,248,0.2)");
        gradientStroke.addColorStop(0.4, "rgba(29,140,248,0.0)");
        gradientStroke.addColorStop(0, "rgba(29,140,248,0)"); //blue colors

        var myChart1 = new Chart(ctx1, {
            type: "bar",
            responsive: true,
            legend: {
                display: false,
            },
            data: {
                labels: ["Male", "Female"],
                datasets: [
                    {
                        label: "",
                        fill: true,
                        backgroundColor: "#fecd56",
                        hoverBackgroundColor: "#fecd56",
                        borderDash: [],
                        borderDashOffset: 0.0,
                        data: [
                            data["risk-gender"]["Male"],
                            data["risk-gender"]["Female"],
                        ],
                    },
                ],
            },
            options: gradientBarChartConfiguration,
        });

        var myChart = new Chart(ctx, {
            type: "bar",
            responsive: true,
            legend: {
                display: false,
            },
            data: {
                labels: ["Male", "Female"],
                datasets: [
                    {
                        label: "",
                        fill: true,
                        backgroundColor: "#fecd56",
                        hoverBackgroundColor: "#fecd56",
                        borderDash: [],
                        borderDashOffset: 0.0,
                        data: [
                            data["analysis"]["Male"],
                            data["analysis"]["Female"],
                        ],
                    },
                ],
            },
            options: gradientBarChartConfiguration,
        });
    },
});

$.ajax({
    url: "https://bat-django.herokuapp.com/credit-risk/age",
    type: "GET",
    dataType: "json",
    success: (res) => {
        var labels = [];
        var values = [];
        for (const [key, value] of Object.entries(res["analysis"])) {
            labels.push(key);
            values.push(value);
        }
        var labels_risk = [];
        var values_risk = [];

        for (const [key, value] of Object.entries(res["risk-age"])) {
            labels_risk.push(key);
            values_risk.push(value);
        }
        var ctxGreen = document
            .getElementById("chartLineGreen")
            .getContext("2d");
        var chartLineRight = document
            .getElementById("chartLineRight")
            .getContext("2d");
        var gradientStroke = ctxGreen.createLinearGradient(0, 230, 0, 50);

        gradientStroke.addColorStop(1, "rgba(66,134,121,0.15)");
        gradientStroke.addColorStop(0.4, "rgba(66,134,121,0.0)"); //green colors
        gradientStroke.addColorStop(0, "rgba(66,134,121,0)"); //green colors

        var data = {
            labels: labels,
            datasets: [
                {
                    label: "My First dataset",
                    fill: true,
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                    data: values,
                },
            ],
        };

        var myChart = new Chart(ctxGreen, {
            type: "doughnut",
            data: data,
        });

        var data1 = {
            labels: labels_risk,
            datasets: [
                {
                    label: "My First dataset",
                    fill: true,
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                    data: values_risk,
                },
            ],
        };

        var myChart = new Chart(chartLineRight, {
            type: "doughnut",
            data: data1,
        });
    },
});

$.ajax({
    url: "https://bat-django.herokuapp.com/German/Ml",
    type: "GET",
    dataType: "json",
    beforeSend: function () {
        $("#chart1-area").append(
            '<span class="basel-spinner ajax-call"></span>'
        );
    },
    success: (data) => {
        $(".basel-spinner.ajax-call").remove();
        $("#firstChart").html("Accuracy");
        var models = [];
        var accs = [];
        var dig = [];
        var dia = [];
        data.forEach(function (arrItem) {
            models.push(arrItem.model);
            accs.push(arrItem.acc);
            dia.push(arrItem.DIAGE);
            dig.push(arrItem.DIGender);
        });

        var chart_labels = models;
        var chart_data = accs;
        var chart_data1 = dia;
        var chart_data2 = dig;

        var ctx = document.getElementById("chartBig1").getContext("2d");

        var config = {
            type: "bar",
            data: {
                labels: chart_labels,
                datasets: [
                    {
                        hidden: false,
                        label: "Accuracy",
                        fill: true,
                        backgroundColor: "rgba(75, 192, 192, 0.8)",
                        borderColor: "rgba(75, 192, 192, 0.8)",
                        borderWidth: 1,
                        data: chart_data,
                        order: 2,
                    },
                    {
                        hidden: true,
                        label: "Disparate Impact Race",
                        fill: true,
                        backgroundColor: "rgba(75, 192, 192, 0.8)",
                        borderColor: "rgba(75, 192, 192, 0.8)",
                        borderWidth: 1,
                        data: chart_data1,
                        order: 1,
                    },
                    {
                        hidden: true,
                        label: "Disparate Impact Race",
                        fill: true,
                        backgroundColor: "rgba(75, 192, 192, 0.8)",
                        borderColor: "rgba(75, 192, 192, 0.8)",
                        borderWidth: 1,
                        data: chart_data2,
                        order: 1,
                    },
                    {
                        hidden: true,
                        fill: false,
                        borderColor: "rgba(226,226,226,0.8)",
                        type: "line",
                        label: "Upper Acceptable Line",
                        pointBackgroundColor: "transparent",
                        pointBorderColor: "transparent",
                        pointBorderWidth: 0,
                        backgroundColor: "transparent",
                        data: [1.2, 1.2, 1.2, 1.2, 1.2, 1.2, 1.2],
                        order: 2,
                    },
                    {
                        hidden: true,
                        fill: false,
                        borderColor: "rgba(226,226,226,0.8)",
                        type: "line",
                        pointBorderWidth: 0,
                        pointBackgroundColor: "transparent",
                        pointBorderColor: "transparent",
                        label: "Lower Acceptable Line",
                        backgroundColor: "transparent",
                        data: [0.8, 0.8, 0.8, 0.8, 0.8, 0.8, 0.8],
                        order: 2,
                    },
                ],
            },
            options: gradientChartOptionsConfigurationWithTooltipPurple,
        };
        var myChartData = new Chart(ctx, config);

        $("#analyticsButton").click(function () {
            $("#DemographicsCard").hide();
            $("#analyticsCard").show();
            $("#dataset-show").hide();
        });

        $("#analyticsDemo").click(function () {
            $("#DemographicsCard").show();
            $("#analyticsCard").hide();
            $("#dataset-show").show();
            $(".gender-table").show();
            $(".gender-table-risk").show();
            $(".risk-table").show();
            $(".risk-table-age").show();
        });
        $("#chacc").click(function () {
            myChartData.data.datasets[3].hidden = true;
            myChartData.data.datasets[4].hidden = true;
            myChartData.data.datasets[0].hidden = false;
            myChartData.data.datasets[1].hidden = true;
            myChartData.data.datasets[2].hidden = true;

            $("#firstChart").html("Accuracy");
            myChartData.update();
        });
        $("#dir").click(function () {
            myChartData.data.datasets[3].hidden = false;
            myChartData.data.datasets[4].hidden = false;
            myChartData.data.datasets[1].hidden = false;
            myChartData.data.datasets[0].hidden = true;
            myChartData.data.datasets[2].hidden = true;
            $("#firstChart").html(
                'Disparate Impact Age <h5 class="card-category">unprivileged group: Young <br>privileged group: Old </h5>'
            );
            myChartData.update();
        });
        $("#dig").click(function () {
            myChartData.data.datasets[3].hidden = false;
            myChartData.data.datasets[4].hidden = false;
            myChartData.data.datasets[2].hidden = false;
            myChartData.data.datasets[0].hidden = true;
            myChartData.data.datasets[1].hidden = true;

            $("#firstChart").html(
                'Disparate Impact Gender <h5 class="card-category">unprivileged group: Female <br>privileged group: Male </h5>'
            );
            myChartData.update();
        });
    },
});

custom = {
    initPickColor: function () {
        $(".pick-class-label").click(function () {
            var new_class = $(this).attr("new-class");
            var old_class = $("#display-buttons").attr("data-class");
            var display_div = $("#display-buttons");
            if (display_div.length) {
                var display_buttons = display_div.find(".btn");
                display_buttons.removeClass(old_class);
                display_buttons.addClass(new_class);
                display_div.attr("data-class", new_class);
            }
        });
    },

    initDocChart: function () {
        chartColor = "#FFFFFF";

        // General configuration for the charts with Line gradientStroke
        gradientChartOptionsConfiguration = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10,
            },
            responsive: true,
            scales: {
                yAxes: [
                    {
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false,
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false,
                        },
                    },
                ],
                xAxes: [
                    {
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false,
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false,
                        },
                    },
                ],
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 15,
                    bottom: 15,
                },
            },
        };
    },

    initDashboardPageCharts: function () {
        gradientChartOptionsConfigurationWithTooltipBlue = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },

            tooltips: {
                backgroundColor: "#f5f5f5",
                titleFontColor: "#333",
                bodyFontColor: "#666",
                bodySpacing: 4,
                xPadding: 12,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
            },
            responsive: true,
            scales: {
                yAxes: [
                    {
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(29,140,248,0.0)",
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            suggestedMin: 60,
                            suggestedMax: 125,
                            padding: 20,
                            fontColor: "#2380f7",
                        },
                    },
                ],

                xAxes: [
                    {
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(29,140,248,0.1)",
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#2380f7",
                        },
                    },
                ],
            },
        };

        gradientChartOptionsConfigurationWithTooltipPurple = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },

            tooltips: {
                backgroundColor: "#f5f5f5",
                titleFontColor: "#333",
                bodyFontColor: "#666",
                bodySpacing: 4,
                xPadding: 5,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
            },
            responsive: true,
            scales: {
                yAxes: [
                    {
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            zeroLineColor: "white",
                        },
                        ticks: {
                            beginAtZero: true,
                            suggestedMax: 1,
                            stepSize: 0.25,
                            fontColor: "#ffffff",
                        },
                    },
                ],

                xAxes: [
                    {
                        barPercentage: 0.6,
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(201,195,194,0.2)",
                            zeroLineColor: "white",
                        },
                        ticks: {
                            padding: 10,
                            fontColor: "#ffffff",
                        },
                    },
                ],
            },
        };

        gradientChartOptionsConfigurationWithTooltipOrange = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },

            tooltips: {
                backgroundColor: "#f5f5f5",
                titleFontColor: "#333",
                bodyFontColor: "#666",
                bodySpacing: 4,
                xPadding: 12,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
            },
            responsive: true,
            scales: {
                yAxes: [
                    {
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(29,140,248,0.0)",
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            suggestedMin: 50,
                            suggestedMax: 110,
                            padding: 20,
                            fontColor: "#ff8a76",
                        },
                    },
                ],

                xAxes: [
                    {
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(220,53,69,0.1)",
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#ff8a76",
                        },
                    },
                ],
            },
        };

        gradientChartOptionsConfigurationWithTooltipGreen = {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },

            tooltips: {
                backgroundColor: "#f5f5f5",
                titleFontColor: "#333",
                bodyFontColor: "#666",
                bodySpacing: 4,
                xPadding: 12,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
            },
            responsive: true,
        };

        var ctx = document.getElementById("chartLinePurple").getContext("2d");

        var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

        gradientStroke.addColorStop(1, "rgba(72,72,176,0.2)");
        gradientStroke.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke.addColorStop(0, "rgba(119,52,169,0)"); //purple colors

        var data = {
            labels: ["JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
            datasets: [
                {
                    label: "Data",
                    fill: true,
                    backgroundColor: gradientStroke,
                    borderColor: "#d048b6",
                    borderWidth: 2,
                    borderDash: [],
                    borderDashOffset: 0.0,
                    pointBackgroundColor: "#d048b6",
                    pointBorderColor: "rgba(255,255,255,0)",
                    pointHoverBackgroundColor: "#d048b6",
                    pointBorderWidth: 20,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 15,
                    pointRadius: 4,
                    data: [80, 100, 70, 80, 120, 80],
                },
            ],
        };

        var myChart = new Chart(ctx, {
            type: "line",
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipPurple,
        });
    },
};
