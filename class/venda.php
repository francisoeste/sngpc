<?php 
require_once("inventario.php");

abstract class Venda extends Invetario {

    private $codigo;
    private $cod_receiturario;
    private $cod_prescritor;
    private $cod_paciente;
    private $cod_comprador;
    private $data;
    private $usomedicamento;
    private $numeronotificacao;

    public function getCodigo() {

        return $this->codigo;

    }

    public function setCodigo($value) {

        $this->codigo = $value;

    }
    
    public function getCodReceituario() {

        return $this->cod_receiturario;

    }

    public function setCodReceituario($value) {

        $this->cod_receiturario = $value;

    }

    public function getCodPrescritor() {

        return $this->cod_prescritor;

    }

    public function setCodPrescritor($value) {

        $this->cod_prescritor = $value;

    }

    public function getCodPaciente() {

        return $this->cod_paciente;

    }

    public function setCodPaciente($value) {

        $this->cod_paciente = $value;

    }

    public function getCodComprador() {

        return $this->cod_comprador;

    }

    public function setCodComprador($value) {

        $this->cod_comprador = $value;

    }

    public function getData() {

        return $this->data;

    }

    public function setData($value) {

        $this->data = $value;

    }

    public function getUsoMedicamento() {

        return $this->usomedicamento;

    }

    public function setUsoMedicamento($value) {

        $this->usomedicamento = $value;

    }

    public function getNumeroNotificacao() {

        return $this->numeronotificacao;

    }

    public function setNumeroNotificacao($value) {

        $this->numeronotificacao = $value;

    }

}

class itemVenda extends venda {

    private $cod_venda;
    private $cod_inventario;
    private $msmedicamento;
    private $lote;
    private $unidademedida;
    private $usoprolongado;
    private $venda = array();
    private $valuess = array();

    public function getCodVenda () {

        return $this->cod_venda;

    }

    public function setCodVenda($value) {

        $this->cod_venda = $value;

    }

    public function getCodInventario() {

        return $this->cod_inventario;

    }

    public function setCodInventario($value) {

        $this->cod_inventario = $value;

    }

    public function getMsMedicamento() {

        return $this->msmedicamento;

    }

    public function setMsMedicamento($value) {

        $this->msmedicamento = $value;

    }

    public function getLote() {

        return $this->lote;

    }

    public function setLote ($value) {

        $this->lote = $value;

    }

    public function getUnidadeMedida() {

        return $this->unidademedida;

    }

    public function setUnidadeMedida($value) {

        $this->unidademedida = $value;

    }

    public function getUsoProlongado() {

        return $this->usoprolongado;

    }

    public function setUsoProlongado($value) {

        $this->usoprolongado = $value;

    }

    public function getVenda():array {
        return $this->venda;
    }
    
    public function setVenda($value) {

        $this->venda = $value;

    }

    public function __construct($codigo1, $codigo2) {
        $this->setCodigo($codigo1);
        $this->setCodReceituario($codigo2);
       
        //echo $codigo1, $codigo2;
        $vendas = $this->venda;
        
       array_push($vendas, array(
        'codigo1'=>$codigo1,
        'codigo2'=>$codigo2

     ));

        $this->setVenda($vendas);
    
        //$this->insertVenda($vendas);
 
    }

    

    function insertVenda() {

        $vend = $this->getVenda();
        print_r($vend);
        foreach($vend as $vendas ){

            print_r($vendas);
        }
        
    }

}



?>