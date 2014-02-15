<?php



class Coment extends Eloquent {
	protected $table = 'coments';
	protected $fillable = array('text', 'usuario_id', 'articulo_id');

	public function articulo() {
		return $this->belongsTo('Articulo', 'articulo_id');
	}

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_id');
	}

}