<?php
class Acerca{

    private $idAcerca;
    private $textoAcerca;

    public function setIdAcerca($id)
    {
        $this->idAcerca = $id;
    }
    public function setTextoAcerca($texto)
    {
        $this->textoAcerca = $texto;
    }
    
    public function readTextoAcerca(Conexion $conn)
    {   
        $dbh = $conn->get_conexion();        
        $sql = "call get_texto_acerca()";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $this->textoAcerca = $stmt->fetchColumn();
        $dbh = NULL;
        $stmt = NULL;        

    }

    public function getTextoAcerca()
    {
        return $this->textoAcerca;
    }

}
?>