<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
	return View::make('hello');
});


/***
** Sección usuarios
**/

Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));
Route::get('usuarios/nuevo/', array('uses' => 'UsuariosController@nuevoUsuario'));
Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario'));
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));

//WHen login, go to login usuarios.login page
Route::get('login', function(){
    return View::make('login'); 
});

// to create user
Route::post('registro', function(){
 
    $input = Input::all();
    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
    $input['password'] = Hash::make($input['password']);
 
    Usuario::create($input);
 
    return Redirect::to('login')->with('mensaje_registro', 'Usuario Registrado');
});

//to login (POST), it makes an attempt with mail and password
Route::post('login', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
    //si ha ido bien, los datos de usuario se pueden consultar en Auth::user()->id
    if (Auth::attempt( array('correo' => Input::get('correo'), 'password' => Input::get('password') ), true )){
        return Redirect::to('inicio');
    }else{
        return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
    }
 
});

Route::get('logout', function(){
 
    	Auth::logout();
    	return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
    
 
});
 


// Por ultimo crearemos un grupo con el filtro auth. 
// Para todas estas rutas el usuario debe haber iniciado sesión. 
// En caso de que se intente entrar y el usuario haya iniciado session 
// entonces sera redirigido a la ruta login
Route::group(array('before' => 'auth'), function()
{
    
    Route::get('inicio', function(){        
        // Con la función Auth::user() podemos obtener cualquier dato del usuario 
        // que este en la sesión, en este caso usamos su correo y su id
        // Esta función esta disponible en cualquier parte del código
        // siempre y cuando haya un usuario con sesión iniciada
        return Redirect::to('usuarios/'.Auth::user()->id);
       // echo 'Bienvenido '. Auth::user()->correo . ', su Id es: '.Auth::user()->id ;
    });

    /***
	** Sección artículos
	**/

	Route::get('articulos', array('uses' => 'ArticulosController@mostrarArticulos'));
	Route::get('articulos/nuevo/{id_usuario}', array('uses' => 'ArticulosController@nuevoArticulo'));
	Route::post('articulos/crear/', array('uses' => 'ArticulosController@crearArticulo'));
	Route::get('articulos/{id}', array('uses'=>'ArticulosController@verArticulo'));
    
});








