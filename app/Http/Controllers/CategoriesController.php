<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class CategoriesController extends Controller
{

  public function index(){
    $categories = Category::orderBy('id', 'DESC') -> paginate(5);
    return view('admin.categories.index') -> with('categories', $categories);
  }

  public function create(){
    return view('admin.categories.create');
  }

  public function store(CategoryRequest $request){
    $category = new Category($request -> all());
    $category -> save();

    Flash::success("La Categoria " . $category -> name . " ha sido creada de forma exitosa!");
    return redirect() -> route('categories.index');
  }

  public function destroy($id){
    $category = Category::find($id);
    $category -> delete();

    Flash::warning('La Categoria ' . $category -> name . ' ha sido borrado exitosamente!');
    return redirect() -> route('categories.index');
  }

  public function edit($id){
    $category = Category::find($id);
    return view('admin.categories.edit') -> with('category', $category);
  }

  public function update(CategoryRequest $request, $id){
    $category = Category::find($id);
    $category -> name = $request-> name;
    $category -> save();

    Flash::warning('La Categoria '. $category -> name . ' ha sido editado con exito!');
    return redirect() -> route('categories.index');
  }
}
