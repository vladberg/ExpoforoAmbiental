$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Chulos VS Alianza "Scrum"'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                    format: '{point.name} : {point.y}'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                size:'100%',
                innerSize:'60%',
                colorByPoint: true,
                data: [
                    {
                    name: 'Buenos',
                    y: 8,
                }, {
                    name: 'Regular',
                    y: 4
                }, {
                    name: 'Malos',
                    y: 1
                }]
            }]
        });
    });
});