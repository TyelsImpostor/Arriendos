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
            <!-- Imagenes que se veran en la pagina principal -->

            <div class="carousel-inner">

              <div class="item active">
                <img src="{{ asset('images/yapo.jpg') }}" width="800" height="500">
              </div>

              @foreach($articles as $article)
                @foreach($article -> images as $image)

                  <div class="item">
                    <img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="800" height="500">
                    <div class="carousel-caption">
                      <h3><a href="{{ route('all.show', $article -> id)}}">{{ $article -> title }}</a></h3>
                      <p>{{ $article -> content }}</p>
                    </div>
                  </div>

                @endforeach
              @endforeach

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
