<?php

class UsuariosController extends BaseController {

    
	/**
     * Shows a list with all users
     */

    public function mostrarUsuarios()
    {

        if(Cache::has('AllUsers')) {
            $usuarios = Cache::get('AllUsers'.$id);
        }
        else {
            $usuarios = Usuario::all(); 
            Cache::add('AllUsers', $usuarios, 5);
        }
        
        return View::make('usuarios.lista', array('usuarios' => $usuarios));
    }

 	/**
     * Shows a form to create new users
     */
    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }

    /**
     * Create a new user
     * Input => nombre (string)
     *       => apellido (string)
     *       => password (string)
     *       => correo (string)
     */
    public function crearUsuario()
    {
        Usuario::create(Input::all());
        return Redirect::to('usuarios');
 
    }

    /**
     * Browse user with id = $id
     */
    public function verUsuario($id)
    {
    
        if(Cache::has('Usuario'.$id)) {
            $usuario = Cache::get('Usuario'.$id);
        }
        else {
            $usuario = Usuario::find($id);
            Cache::add('Usuario'.$id, $usuario, 5);
        }
        if(Cache::has('ArticulosUsuario'.$id)) {
            $articulos= Cache::get('ArticulosUsuario'.$id);
        }
        else {
            $articulos = $usuario->articulos;
            Cache::add('ArticulosUsuario'.$id, $articulos, 5);
        }
    	return View::make('usuarios.ver', array('usuario' => $usuario, 'articulos' => $articulos));
    }

}