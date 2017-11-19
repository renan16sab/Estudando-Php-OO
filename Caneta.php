<?php


class caneta{

	public $caneta;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;


	public function rabiscar(){


     if ($this->cor == "Azul" ) {
     	echo "Pode rabiscar </br>";

     	
     }else {
     	echo "Não pode riscar!!";
     }if ($this->ponta == 0.5) {
     	echo "A ponta é fina </br>";
     }else {

     	echo "A ponta é grossa!!)";
     }

	}

	 public function tampar(){

		$this->tampada = true;


	}

	 public function destampar(){
	 	$this->tampada = false;




	 }


}

?>