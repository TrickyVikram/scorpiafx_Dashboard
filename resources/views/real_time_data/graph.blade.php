<!DOCTYPE HTML>
<html>

<head>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>



        window.onload = function() {
            var pychartchart = new CanvasJS.Chart("pychartchart", {
                
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                exportEnabled: true,
                animationEnabled: true,
                title: {
                    text: "onvtech"
                },
                data: [{
                    type: "pie",
                    startAngle: 25,
                    toolTipContent: "<b>{label}</b>: {y}%",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - {y}%",
                    dataPoints: [{
                            y: 51.08,
                            label: "current_profites"
                        },
                        {
                            y: 27.34,
                            label: "profites"
                        },
                        {
                            y: 10.62,
                            label: "loss"
                        }
                    ]
                }]
            });
            pychartchart.render();

            var chartContainer = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Stock Price "
                },
                axisX: {
                    valueFormatString: "DD MMM",
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                axisY: {
                    title: "Value",
                    valueFormatString: "$##0.00",
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true,
                        labelFormatter: function(e) {
                            return "$" + CanvasJS.formatNumber(e.value, "##0.00");
                        }
                    }
                },
                data: [{
                    type: "area",
                    xValueFormatString: " YYYY MMM DD ",
                    yValueFormatString: "$##0.00",
                    dataPoints: [
                        { x: new Date(2016, 07, 01), y: 76.727997, label: "Profits" },
        { x: new Date(2016, 07, 02), y: 75.459999, label: "Loss" },
        { x: new Date(2016, 07, 03), y: 76.011002, label: "Profits" },
        { x: new Date(2016, 07, 04), y: 75.751999, label: "Loss" },
        { x: new Date(2016, 07, 05), y: 77.500000, label: "Profits" },
        { x: new Date(2016, 07, 08), y: 77.436996, label: "Loss" },
        { x: new Date(2016, 07, 09), y: 79.650002, label: "Profits" },
        { x: new Date(2016, 07, 10), y: 79.750999, label: "Profits" },
        { x: new Date(2016, 07, 11), y: 79.750999, label: "Profits" },
        { x: new Date(2016, 07, 12), y: 78.750999, label: "Profits" },
        { x: new Date(2016, 07, 15), y: 79.750999, label: "Profits" },
        { x: new Date(2016, 07, 16), y: 70.750999, label: "Loss" },
        { x: new Date(2016, 07, 17), y: 79.750999, label: "Loss" },
        { x: new Date(2016, 07, 18), y: 66.750999, label: "Profits" },
        { x: new Date(2016, 07, 19), y: 75.750999, label: "Profits" },
     
                            
                    ]
                }]
            });
            chartContainer.render();
        }
    </script>
</head>

<body>
    <div id="pychartchart" style="height: 300px; width: 100%;"></div>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>

</html>
