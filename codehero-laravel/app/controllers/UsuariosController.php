<?php

class UsuariosController extends BaseController {

    
	/**
     * Mustra la lista con todos los usuarios
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
     * Muestra formulario para crear Usuario
     */
    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }

    /**
     * Crear el usuario nuevo
     */
    public function crearUsuario()
    {
        Usuario::create(Input::all());
    // el método create nos permite crear un nuevo usuario en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos 
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()
 
        return Redirect::to('usuarios');
    // el método redirect nos devuelve a la ruta de mostrar la lista de los usuarios
 
    }

    /**
     * Ver usuario con id
     */
    public function verUsuario($id)
    {
    	// en este método podemos observar como se recibe un parámetro llamado id
    	// este es el id del usuario que se desea buscar y se debe declarar en la ruta como un parámetro 
    
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
            $articulos = Usuario::find($id)->articulos;
            Cache::add('ArticulosUsuario'.$id, $articulos, 5);
        }
    	return View::make('usuarios.ver', array('usuario' => $usuario, 'articulos' => $articulos));
    }

}