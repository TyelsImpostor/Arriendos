@extends('templates.main2')

@section('title','Grafica 2')

@section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Artciles', 'Categories'],
          @foreach ($category as $categorys)
            ['{{ $categorys->name}}', {{ $categorys->article_count}}],
          @endforeach
        ]);

        var options = {
          title: 'Cantidad de articulos vinculados a una categoria.'
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
