<?php

class ComentsController extends BaseController {

    /**
     * Crear el usuario nuevo
     */
    public function crearComentario()
    {
        Coment::create(Input::all()); 
    }
}