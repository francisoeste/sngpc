<?php

abstract class Invetario {

    private $codigo;
    private $quantidade;
    private $ms;
    private $classmedicamento;
    private $usocontinuo;
    private $unidademedicamento;

    public function getCodigo() {

        return $this->codigo;

    }

    public function setCodigo($value) {

        $this->codigo = $value;

    }

    public function getQuantidade() {

        return $this->quantidade;

    }

    public function setQuantidade($value) {

        $this->quantidade = $value;

    }

    public function getMs() {

        return $this->ms;

    }

    public function setMs($value) {

        $this->ms = $value;

    }

    public function getClassMedicamento() {

        return $this->classmedicamento;

    }

    public function setclassMedicamento($value) {

        $this->classmedicamento = $value;

    }

    public function getUsoContinuo() {

        return $this->usocontinuo;

    }

    public function setUsoContinuo($value) {

        $this->usocontinuo =  $value;

    }

    public function getUnidadeMedicamento() {

        return $this->unidademedicamento;

    }

    public function setUnidadeMedicamento($value) {

        $this->unidademedicamento = $value;
    }

}

?>