<?php 

abstract class Animal{

	public function falar(){

		return "som";
	}

	public function mover(){

		return "anda";
	}
}

class Cachorro extends Animal{

	public function falar(){

		return "late";
	}
}

class Ave extends Animal{

	public function falar(){

		return "canta";
	}

	public function mover(){

		return "Voa e ".parent::mover();
	}
}

$cao = new Cachorro; 
echo $cao->falar()."<br>";
echo $cao->mover()."<br>";

$passarinho = new Ave;
echo $passarinho->falar()."<br>";
echo $passarinho->mover()."<br>";








?>