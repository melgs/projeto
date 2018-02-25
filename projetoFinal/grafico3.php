<script>
window.onload = function(){

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Gráfico de Acessos por idade"
        },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "##0.00\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                    {y: 4.45, label: "8 a 15 anos"},
                    {y: 17.31, label: "15 a 21 anos"},
                    {y: 25.06, label: "21 a 35 anos"},
                    {y: 6.91, label: "35 a 50 anos"},
                    {y: 2.26, label: "acima de 50 anos"}
            ]
        }]
    });
    chart.render();
}
</script>
<div class="col-md-12">
    <div id="chartContainer" style="height: 200px; width: 100%;"></div>
</div>