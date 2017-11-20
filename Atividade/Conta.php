<?php




class Conta{


public $numConta;
protected $tipo;
private $dono;
private $saldo;
private $status;


public function Conta(){

	$saldo=0;
	$status=false;


}

public function setNumConta($n){


	$this->$numConta = $n;


}

public function getNumConta(){

	return $this->numConta;
}

public function setTipo($t){

   $this->$tipo = $t;
}
public function getTipo(){

	return $this->tipo;
}

public function setDono($d){

	$this->dono = $d;
}

public function getDono(){

	return $this->dono;
}

public function setSaldo($s){

	$this->saldo = ($s);
}
public function getSaldo(){

	return $this->saldo;
}
public function setStatus($s){

	$this->status = $s;
}
public function getStatus(){

	return $this->status;
}



public function abrirConta($t){

setTipo($t);
setStatus(true);

if ($t = "CC") {

	$setSaldo = 50;
} elseif ($t = "CP") {
	$setSaldo = 150;
}
}

public function fercharConta(){
     
     setSaldo($s);

	if ($s > 0) {

		echo "Conta com dinheiro ";
		
	} elseif (setSaldo < 0){

		echo "Conta em debito";
	} else {

		setStatus(false);
	}
  

}
public function depositar(){
	if ($status = true) {

		$saldo = $saldo + v;
	} else {

		echo "É impossivel depositar";
	}


}
public function sacar(){

	if ($status = true) {

	}else {

		echo "Impossivel sacar";
	}

	if ($saldo > v) {

		$saldo= $saldo - v;
	} else {
		echo "Saldo Insuficiente";
	 } 



}
public function pagarMensal(){


	$v;

	if ($tipo = "CC") {

		$v == 12;
	} else if ($tipo = "CP") {
		


		$v == 20;
	} 
	if ($status = true) {
		# code...
	} else {

		echo "Saldo Insuficiente";
	} if ($saldo > $v) {
		
		$saldo = $saldo - $v;
	} else {

		echo "Impossivel pagar";
	}

		
	


}

}

?>