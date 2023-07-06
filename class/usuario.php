<?php 

class Usuario {
    private $id_cli;
    private $antcli;
    private $razaosoc;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $codpostal;
    private $telefone;
    private $fonefax;
    private $ramal;
    private $fisjur;
    private $cnpj;
    private $inscrição;
    private $contatos;
    private $datnasc;


    // Início Geters and seters -------------------------------
	public function getId_cli() {
		return $this->id_cli;
	}
	
	public function setId_cli($value) {
			$this->id_cli = $value;
	}
	
	public function getAntcli() {
		return $this->antcli;
	}
	
	public function setAntcli($value){
		$this->antcli = $value;
	}

	public function getRazaosoc() {
		return $this->razaosoc;
	}

	public function setRazaosoc($value) {
		$this->razaosoc = $value;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($value){
		$this->endereco = $value;
	}


	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($value){
		$this->numero =$value;
	}

	public function getComplemento() {
		return $this->complemento;
	}

	public function setComplemento($value){
		$this->complemento = $value;
	}


	public function getBairro() {
		return $this->bairro;
	}

	
	public function setBairro($value){
		$this->bairro = $value;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($value){
		$this->cidade = $value;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($value) {
		$this->estado = $value;
	}

	public function getCodpostal() {
		return $this->codpostal;
	}

	public function setCodpostal($value){
		$this->codpostal = $value;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($value){
		$this->telefone = $value;
	}

	public function getFonefax() {
		return $this->fonefax;
	}

	public function setFonefax($value){
		$this->fonefax = $value;
	}


	public function getRamal() {
		return $this->ramal;
	}

	public function setRamal($value){
		$this->ramal = $value;
	}

	public function getFisjur() {
		return $this->fisjur;
	}
	public function setFisjur($value){
		$this->fisjur = $value;
	}

	public function getCnpj() {
		return $this->cnpj;
	}

	public function setCnpj($value){
		$this->cnpj = $value;
	}

	public function getInscrição() {
		return $this->inscrição;
	}

	public function setInscrição($value){
		$this->inscrição = $value;
	}
	
	public function getContatos() {
		return $this->contatos;
	}
	
	public function setContatos($value){
		$this->contatos = $value;
	}

	public function getDatnasc() {
		return $this->datnasc;
	}

	public function setDatnasc($value){
		$this->datnasc = $value;
	}
        // Fim Geters and seters -------------------------------


	public function loadById($id){
		$sql = new Sql;
		$results = $sql->select("SELECT * FROM clientes WHERE id_cli = :ID", array(":ID"=>$id));

		if (count($results) > 0) {

			$row = $results[0];

			$this->setId_cli($row['ID_CLI']);
			$this->setAntcli($row['ANTCLI']);
			$this->setRazaosoc($row['RAZAOSOC']);
			$this->setEndereco($row['ENDERECO']);
			$this->setNumero($row['NUMERO']);
			$this->setComplemento($row['COMPLEMENTO']);
			$this->setBairro($row['BAIRRO']);
			$this->setCidade($row['CIDADE']);
			$this->setEstado($row['ESTADO']);
			$this->setCodpostal($row['CODPOSTAL']);
			$this->setTelefone($row['TELEFONE']);
			$this->setFonefax($row['FONEFAX']);
			$this->setRamal($row['RAMAL']);
			$this->setFisjur($row['FISJUR']);
			$this->setCnpj($row['CNPJ']);
			$this->setInscrição($row['INSCRICAO']);
			$this->setContatos($row['CONTATOS']);
			$this->setDatnasc(($row['DATNASC']));
		}

	}

	public function __toString(){
		return json_encode(array(
			"id_cli"=>$this->getId_Cli(),
			"antcli"=>$this->getAntcli(),
			"razaosoc"=>$this->getRazaosoc(),
			"endereco"=>$this->getEndereco(),
			"numero"=>$this->getNumero(),
			"complemento"=>$this->getComplemento(),
			"bairro"=>$this->getBairro(),
			"cidade"=>$this->getCidade(),
			'estado'=>$this->getEstado(),
			'codpostal'=>$this->getCodpostal(),
			'telefone'=>$this->getTelefone(),
			"fonefax"=>$this->getFonefax(),
			'ramal'=>$this->getRamal(),
			"fisjur"=>$this->getFisjur(),
			"cnpj"=>$this->getCnpj(),
			"inscricao"=>$this->getInscrição(),
			"contatos"=>$this->getContatos(),
			"datnasc"=>$this->getDatnasc()	
		));
	}

}
?>