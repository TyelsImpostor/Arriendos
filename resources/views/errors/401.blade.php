<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Acceso Restringido</title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}">
  </head>
  <body>
    <!-- Vista que se mostrara a los usuario que intenten entrar a una pagina sin permiso -->
    <div class="container">
      <div class="box-admin">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-warning">
            <div class="panel-body">
              <img class="img-responsive center-block" src="{{ asset('images/homer-doh.jpg') }}"></img>
              <hr>
              <strong class="text-center">
                <p class="text-center">Usted no tiene acceso a esta zona</p>
                <p>
                  <a href="{{ url('/') }}">Volver al inicio</a>
                </p>
              </strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
