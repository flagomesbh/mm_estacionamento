<?php
class Ticket {
	private $veiculo;
	private $dataEntrada;
	private $dataSaida;
	private $permanencia;
	private $valor;
	
	public function __construct($_veiculo, $_dataEntrada) {
		$this->setVeiculo($_veiculo);
		$this->setDataEntrada($_dataEntrada);
	}
	
	public function calculaPermanencia($_dataSaida) {
		$this->setDataSaida($_dataSaida);
		$permanencia = date('H:i:s', strtotime($_dataSaida)) - date('H:i:s', strtotime($_dataEntrada));
		
		//Diária
		if ($permanencia >= TabelaPreco::TEMPO_DIARIA) {
			$this->$valor = ($permanencia * TabelaPreco::VALOR_DIARIA);
		}
		//Fração
		else {
			$this->$valor = ($permanencia * TabelaPreco::VALOR_FRACAO);
		}
	}
	
	public function setVeiculo($_valor) {
		$this->$veiculo = $_valor;
	}
	
	public function getVeiculo() {
		return $this->$veiculo;
	}
	
	public function setDataEntrada($_valor) {
		$this->$dataEntrada = $_valor;
	}
	
	public function getDataEntrada() {
		return $this->$dataEntrada;
	}
	
	public function setDataSaida($_valor) {
		$this->$dataSaida = $_valor;
	}
	
	public function getDataSaida() {
		return $this->$dataSaida;
	}
	
	public function setPermanencia($_valor) {
		$this->$permanencia = $_valor;
	}
	
	public function getPermanencia() {
		return $this->$permanencia;
	}
	
	public function setValor($_valor) {
		$this->$valor = $_valor;
	}
	
	public function getValor() {
		return $this->$valor;
	}
}

?>