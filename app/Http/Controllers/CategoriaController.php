<?php

namespace App\Http\Controllers;

use App\Categoria;


use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CategoriaController extends Controller
{
    //Los controladores se componen de acciones
    //son metodos con instrucciones
    //cualquier nombre no en mayuscula
    public function index(){
           //seleccionar las categorias existentes
           $categorias = Categoria::paginate(5);
           //enviar la coleccion de categorias a una vista
           //y las vamos a mostrar alli
           return view("categorias.index")->with("categorias" , $categorias);
}

//crear formulario para registro categoria
public function create(){
    return view("categorias.new"); 
}
//Accion store: guardar la categoria desde formulario
public function store(){
    //validar datos 
    //reglas de validacion de mis campos en el formulario
    $reglas = [
    "nombre" => ["required", "alpha", "min:4", "unique:category,name"]

    ];
    //mensajes en español
    $mensajes = [
        "required" => "Campo Obligatorio",
        "alpha" => "Solo letras",
        "min" => "Solo categorias de :min caracteres",
        "unique" => "Categoria repetida"
    ];

 //aplicar la validacion con las reglas que tenemos
 //crear objeto validador
 $validador = Validator::make($_POST, $reglas );

    //Datos a validar
    //hacer comparaciones de regla
   
   
    if($validador->fails()){
        //la validacion fallo?
        //redirigir al formulario con los mensajes de error
        return redirect("categorias/create")->withErrors($validador)->withInput();
    }else{
        //la validacion no falla?
        //Ejecucion normal del caso de uso
        //crear objeto categoria 
        $categoria = new Categoria;
        //asignar nombre 
        $categoria->name=$_POST["nombre"];
        //guardar
        $categoria->save();
        //mensaje de exitoso por medio de un redireccionamiento 
        //redireccionamiento a rutas web.php
        return redirect('categorias/create')->with("Exito" , "Categoria registrada");

    }
 

    




}

//mostrar el formulario de actualizar
public function edit($idcategoria){
    //seleccionar la categoria que tenga ese id
    $categoria = Categoria::find($idcategoria);
    //llevar datos a vista de edicion
    return view('categorias.edit')->with("categoria", $categoria);

}

//Guardar la categoria actualizada
public function update (){
 //seleccionar categoria a editar
 $categoria = Categoria::find($_POST["id"]);
 //ACTUALIZAR CAMPOS
 $categoria->name = $_POST["categoria"];
 //guardar cambio
 $categoria->save();
 echo "cambios guardar";
}



}

