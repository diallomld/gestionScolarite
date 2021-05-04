<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Statistique des etudiants par nationnalite</title>
  </head>
  <body>
    <!-- Chart's container -->
    <div id="chart" style="height: 400px; margin-top:10%"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('payment_chart')",
        hooks: new ChartisanHooks()
        .colors(["blue","orange","green","gray"])
        .legend({ position: 'top' })
        .tooltip()
        .datasets([{type:'pie',radius: ['20%', '60%'], fill: false}])
      });
    </script>
  </body>
</html>
