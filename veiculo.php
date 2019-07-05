<?php
class Veiculo {
	private $placa;
	private $modelo;
	private $cor;
	
	public function __construct($_placa, $_modelo, $_cor) {
		$this->setPlaca($_placa);
		$this->setModelo(new Modelo($_modelo));
		$this->setCor(new Cor($_cor));
	}
	
	public function setPlaca($_valor) {
		$this->$placa = $_valor;
	}
	
	public function getPlaca() {
		return $this->$placa;
	}
	
	public function setModelo($_valor) {
		$this->$modelo = $_valor;
	}
	
	public function getModelo() {
		return $this->$modelo;
	}
	
	public function setCor($_valor) {
		$this->$cor = $_valor;
	}
	
	public function getCor() {
		return $this->$cor;
	}
}

?>