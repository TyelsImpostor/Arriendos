<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class TagsController extends Controller
{
  public function index(Request $request){
    $tags = Tag::search($request -> name) -> orderBy('id', 'ASC') -> paginate(5);
    return view('admin.tags.index') -> with('tags', $tags);
  }

  public function create(){
    return view('admin.tags.create');
  }

  public function store(TagRequest $request){
    $tag = new Tag($request -> all());
    $tag -> save();

    Flash::success("Se ha creado " . $tag -> name . " de forma exitosa!");
    return redirect() -> route('tags.index');
  }

  public function destroy($id){
    $tag = Tag::find($id);
    $tag -> delete();

    Flash::warning('El Tag ' . $tag -> name . ' ha sido borrado exitosamente!');
    return redirect() -> route('tags.index');
  }

  public function edit($id){
    $tag = Tag::find($id);
    return view('admin.tags.edit') -> with('tag', $tag);
  }

  public function update(TagRequest $request, $id){
    $tag = Tag::find($id);
    $tag -> name = $request-> name;
    $tag -> save();

    Flash::warning('El Tag '. $tag -> name . ' ha sido editado con exito!');
    return redirect() -> route('tags.index');
  }
}
