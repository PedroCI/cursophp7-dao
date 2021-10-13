<?php 

class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessnha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}
	public function getDessnha(){
		return $this->dessnha;
	}

	public function setDessnha($value){
		$this->dessnha = $value;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results)>0) {
			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessnha($row['dessnha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function __toString(){
		return json_encode(array(
			'idusuario' => $this->getIdusuario(),
			'deslogin' => $this->getDeslogin(),
			'dessnha' => $this->getDessnha(),
			'dtcadastro' => $this->getDtcadastro()->format("d/m/Y H:i:s") ));

	}
}

 ?>