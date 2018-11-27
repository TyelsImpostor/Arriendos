@extends('templates.main2')

@section('title', 'Mi Lista de Articulos')

@section('content')

<!-- Vista de todos los articulos aprobados existentes en la base de datos-->

  <hr>
  <div class="row">
    @foreach($articles as $article)
      @if($article -> admin === 'Aceptado')
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="card border-primary mb-3" style="max-width: 20rem;">
                <h2><a href="{{ route('all.show', $article -> id)}}">{{ $article -> title }}</a></h2><hr>
                <div class="panel-body">
                  @foreach($article -> images as $image)
                    <td><img class="img-responsive img-article" src="{{ asset('images/articles/' . $image -> name) }}" width="318" height="200"></td>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  </div>

  <div class="text-center">
    <!-- renderisacion para la paginacion-->
    {!! $articles -> render() !!}
  </div>
@endsection
