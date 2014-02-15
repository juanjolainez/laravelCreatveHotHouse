<?php

class ArticulosController extends BaseController {

    
	/**
     * Mustra la lista con todos los articulos
     */

    public function mostrarArticulos()
    {
        $articulos = Articulo::all(); 
        
       
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
    
        $articulos = Articulo::find($id);
        $usuario = Articulo::find($id)->usuario;
        $comments = Articulo::find($id)->coments;
        $usuarioLogueado = Auth::user();
    	return View::make('articulos.ver', array('articulo' => $articulos, 'usuario' => $usuario, 'comments' => $comments));
    }

}