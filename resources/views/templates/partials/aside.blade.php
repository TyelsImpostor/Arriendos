<!-- Cuadro que permite ver todas las categorias en la pagina principal-->

<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Categorias</div>
  <div class="card-body">
    @foreach($categories as $category)
      <a>{{ $category -> name }}</a>
      <hr>
    @endforeach
  </div>
</div>
