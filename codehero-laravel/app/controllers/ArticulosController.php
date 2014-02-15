<?php

class ArticulosController extends BaseController {

    
	/**
     * Mustra la lista con todos los articulos
     */

    public function mostrarArticulos()
    {
        if(Cache::has('AllArticulos')) {
            $articulos = Cache::get('AllArticulos');
        }
        else {
            $articulos = Articulo::all(); 
            Cache::add('AllArticulos', $articulos, 5);
        }
        
        return View::make('articulos.lista', array('articulos' => $articulos));

    }
 

 	/**
     * Muestra formulario para crear articulos
     */
    public function nuevoArticulo()
    {
        $usuario = Auth::user();
        return View::make('articulos.crear', array('usuario' => $usuario )) ;
    }

    /**
     * Crear el articulo nuevo
     */
    public function crearArticulo()
    {
        $articulo = new Articulo();
        $articulo->usuario_id = Auth::user()->id;
        $articulo->title = Input::get('titulo');
        $articulo->text = Input::get('texto');
        $articulo->save();
        return Redirect::to('articulos');
 
    }

    /**
     * Ver articulo con id
     */
    public function verArticulo($id)
    {
        if(Cache::has('Articulo'.$id)) {
            $articulo = Cache::get('Articulo'.$id);
        }
        else {
            $articulo = Articulo::find($id);
            Cache::add('Articulo'.$id, $articulo, 5);
        }
        $usuario = $articulo->usuario;
        $comments = $articulo->coments;
        $usuarioLogueado = Auth::user();
    	return View::make('articulos.ver', array('articulo' => $articulo, 'usuario' => $usuario, 'comments' => $comments));
    }

}