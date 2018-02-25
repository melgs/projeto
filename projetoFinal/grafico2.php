<script type="text/javascript">
        $(function(){
                var chart = new CanvasJS.Chart("chartContainer2", {
                        animationEnabled: true,
                        title: {
                                text: "Curtidas por tempo"
                        },
                        data: [{
                                type: "spline",
                                startAngle: 240,
                                yValueFormatString: "##0.00\"%\"",
                                indexLabel: "{label} {y}",
                                dataPoints: [
                                        { x: 1, y: 10 },
                                        { x: 2, y: 12 },
                                        { x: 3, y: 8 },
                                        { x: 4, y: 14 },
                                        { x: 5, y: 6 },
                                        { x: 6, y: 24 },
                                        { x: 7, y: -4 },
                                        { x: 8, y: 10 }
                                ]
                        }]
                });
                chart.render();
        }); 
</script> 
<div class="col-md-12">
        <div id="chartContainer2" style="height: 200px; width: 100%;"></div> 
</div>