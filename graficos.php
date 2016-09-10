<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chart-Graficos</title>

    <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/Chart.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
    <h1>Charts.js</h1>

    <h2>Grafico com barras</h2>
    <canvas id="barras" width="400" height="120"></canvas>
    <h2>Grafico em torta</h2>
    <canvas id="pies" width="400" height="120"></canvas>
    <h2>Grafico em linha</h2>
    <canvas id="lines" width="400" height="120"></canvas>
    <script type="text/javascript">
      var ctx = document.getElementById('barras');
      var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
          labels: ["Tiago", "Alex", "Burnes"],
          datasets: [{
            label: "Numero de produtos vendidos",
            data: [12,21,5],
            backgroundColor: [
              "rgba(255,99,123,0.2)",
              "rgba(54, 162,235,0.2)",
              "rgba(255,206,86,0.2)"
            ],
            borderColor: [
              "rgba(255,99,123,1)",
              "rgba(54, 162,235,1)",
              "rgba(255,206,86,1)"
            ],
            borderWidth: 1
          }]
        }
      });
      var ctx_pie = document.getElementById('pies');
      var myChart = new Chart(ctx_pie, {
        type: 'pie',
        data: {
          labels: ["Tiago", "Alex", "Burnes"],
          datasets: [{
            label: "Numero de produtos vendidos",
            data: [12,21,5],
            backgroundColor: [
              "rgba(255,99,123,0.2)",
              "rgba(54, 162,235,0.2)",
              "rgba(255,206,86,0.2)"
            ],
            borderColor: [
              "rgba(255,99,123,1)",
              "rgba(54, 162,235,1)",
              "rgba(255,206,86,1)"
            ],
            borderWidth: 1
          }]
        }
      });
      var ctx_line = document.getElementById('lines');
      var myChart = new Chart(ctx_line, {
        type: 'line',
        data: {
          labels: ["Tiago", "Alex", "Burnes"],
          datasets: [{
            label: "Numero de produtos vendidos",
            data: [12,21,5],
            backgroundColor: [
              "rgba(255,99,123,0.2)",
              "rgba(54, 162,235,0.2)",
              "rgba(255,206,86,0.2)"
            ],
            borderColor: [
              "rgba(255,99,123,1)",
              "rgba(54, 162,235,1)",
              "rgba(255,206,86,1)"
            ],
            borderWidth: 1
          }]
        }
      });
    </script>
  </body>
</html>
