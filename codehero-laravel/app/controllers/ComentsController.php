<?php

class ComentsController extends BaseController {

    /**
     * Create a new comment
     * Input => usuario_id (int)
     *       => articulo_id (int) 
     *       => text (text) 
     */
    public function crearComentario()
    {
        Coment::create(Input::all()); 
    }
}