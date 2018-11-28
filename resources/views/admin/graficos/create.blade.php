@extends('templates.main2')

@section('title','Grafica 1')

@section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Articles', 'Region'],
          @foreach ($article as $articles)
            ['{{ $articles->region}}', {{ $articles->article_count}}],
          @endforeach
        ]);

        var options = {
          title: 'Cantidad de articulos que existen por region.'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection
