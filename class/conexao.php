<?php

class Conexao extends PDO {

    private $conecta;

    public function __construct() {

        $this->conecta = new PDO("mysql:dbname:sngpc;host", "root", "");
        
    }

    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statment ,$key, $value);

        }

    }

    private function setParam($statment, $key, $value) {

        $statment->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array()){

        $stmt = $this->conn->prepare($rowQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function select($rowQuery, $params = array()):array {

        $stmt =  $this->query($rowQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>