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
    <script type="text/javascript">
      var ctx = document.getElementById('barras');
      var myChart = new Chart(ctx, {
        type: 'bar',
        
      });
    </script>
  </body>
</html>
