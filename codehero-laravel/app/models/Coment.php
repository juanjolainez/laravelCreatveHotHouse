<?php



class Coment extends Eloquent {
	protected $table = 'coments';
	protected $fillable = array('text', 'usuario_id', 'articulo_id');

	public function Articulo() {
		return $this->belongs_to('Articulo', 'articulo_id');
	}

	public function Usuario() {
		return $this->belongs_to('Usuario', 'usuario_id');
	}

}