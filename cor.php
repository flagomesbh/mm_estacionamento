<?php
class Cor {
	private $nome;
	
	public function __construct($_name) {
		$this->setNome($_name);
	}
	
	public function setNome($_valor) {
		$this->$nome = $valor;
	}
	
	public function getNome() {
		return $this->$nome;
	}
}

?>