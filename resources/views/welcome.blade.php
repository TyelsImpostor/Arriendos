  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@extends('templates.home')

@section('title', 'Home')

@section('content')

<div class="row">
  <div class="col-md-8">
    <div class="row">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Imagenes que se veran en la pagina principal -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="{{ asset('images/articles/Arriendos_1537399693.jpg') }}" width="800" height="500">
              <div class="carousel-caption">
                <h3>Casa con Terreno</h3>
                <p>Venga y disfrute de vacaciones en el aire limpio!</p>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('images/articles/Arriendos_1537400176.jpg') }}" width="800" height="500">
              <div class="carousel-caption">
                <h3>Quiosco Comercial</h3>
                <p>Venda productos y surga usted mismo!</p>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('images/articles/Arriendos_1537401111.jpg') }}" width="800" height="500">
              <div class="carousel-caption">
                <h3>Oficina Simple</h3>
                <p>Equipado para un como ambiente de trabajo!</p>
              </div>
            </div>

          </div>

          <!-- Controles de izquierda y derecha-->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 aside">
    @include('templates.partials.aside')
  </div>
</div>
@endsection
