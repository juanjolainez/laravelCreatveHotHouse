<?php

// se debe indicar en donde esta la interfaz a implementar
use Illuminate\Auth\UserInterface;

Class Usuario extends Eloquent implements UserInterface{
	protected $table = 'usuarios';
	protected $fillable = array('nombre', 'apellido', 'correo', 'password');

	public function articulos() {
        return $this->hasMany('Articulo');
	}

	public function coments() {
		return $this->hasMany('Coment', 'usuario_id');
	}

	// este metodo se debe implementar por la interfaz UserInterface
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    //este metodo se debe implementar por la interfaz UserInterface
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }

}