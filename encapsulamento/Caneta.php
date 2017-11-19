<?php


/**
* 
*/
class Caneta {


	public $modelo;
	private $ponta;
	private $cor; 


public function Caneta($m, $p, $c){

	$this->modelo = $m;

	$this->ponta = $p;

	$this->cor = $c;
	$this->tampar();


	
}

public function tampar(){


	$this->tampada = true;
}




public function getmodelo(){

	return $this->modelo;


}

public function setmodelo($m){

	$this->modelo = $m;
}


public function getponta(){

return $this->ponta;


}

public function setponta($p){

	$this->ponta = $p;



}

}






	




?>