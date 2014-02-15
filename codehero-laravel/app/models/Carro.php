<?php



class Carro extends Eloquent {
	protected $table = 'carros';
	protected $fillable = array('modelo', 'placa', 'ano');

}