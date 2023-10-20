<?php

class Cuenta{

    protected $idCuenta;
    protected $password;
    protected $fechaRegistro;
    protected $perfil;
    

    

    // public function __construct($idCuenta, $password, $fechaRegistro, $tipoCuenta, $isActive)
    // {
    //     $this->idCuenta = $idCuenta;
    //     $this->password = $password;
    //     $this->fechaRegistro = $fechaRegistro;
    //     $this->tipoCuenta = $tipoCuenta;
    //     $this->$isActive = $isActive;        
    // }

    protected function crearCuenta()
    {

    }
    protected function listarCuenta()
    {

    }
    protected function listarCuentas()
    {

    }

    static function autenticar(Conexion $conn, $user, $pass)
    {
            //Enrcriptamos pass
            // $pp = password_hash($pass, PASSWORD_DEFAULT);
  
            $dbh = $conn->get_conexion();        
            $sql = "call validar_usuario(:user, :pass)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':user', $user);
            $stmt->bindValue(':pass', $pass);
            $stmt->execute();
            $session =  $stmt->fetch(PDO::FETCH_ASSOC);
            $dbh = null;
            $stmt = null;           
      
            return $session;


    }

    static function cargarSesion(Conexion $conn, $perfil, $user)
    {
            $dbh = $conn->get_conexion(); 
            if($perfil == 'Empresa')
            {
                $sql = "call cargar_empresa(:user)";
            }
            if($perfil == 'Admin')
            {
                $sql = "call cargar_admin(:user)";
            }        
            
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':user', $user);
            $stmt->execute();
            $session =  $stmt->fetch(PDO::FETCH_ASSOC);
            $dbh = null;
            $stmt = null;           
      
            return $session;


    }
        
}

?>