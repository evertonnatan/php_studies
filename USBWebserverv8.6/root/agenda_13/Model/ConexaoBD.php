<?php
class ConexaoBD {
    private $serverName = "localhost";
    private $userName = "root";
    //private $password = "usbw";
    private $dbName = "projeto_final";

    public function conectar($password) {
        $conn = new mysqli($this->serverName, $this->userName, $password, $this->dbName);
        return $conn;
    }
}
?>
