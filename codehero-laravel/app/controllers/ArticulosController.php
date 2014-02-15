<?php

class ArticulosController extends BaseController {

    
	/**
     * Show a list with all the articles
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
     * Show a form to create a new article
     */
    public function nuevoArticulo()
    {
        $usuario = Auth::user();
        return View::make('articulos.crear', array('usuario' => $usuario )) ;
    }

    /**
     * Create a new article
     * Input => titulo (string) 
     *       => texto (text) 
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
     * Browse the article with id = $id
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
    	return View::make('articulos.ver', array('articulo' => $articulo, 'usuario' => $usuario,
                                                 'comments' => $comments));
    }

}