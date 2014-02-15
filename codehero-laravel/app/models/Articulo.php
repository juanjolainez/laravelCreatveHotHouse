<?php



class Articulo extends Eloquent {
	protected $table = 'articulos';
	protected $fillable = array('title', 'text', 'usuario_id');

	public function usuario() {
		return $this->belongs_to('Usuario', 'usuario_id');
	}

	public function coments() {
		return $this->hasMany('Coment', 'articulo_id');
	}

}