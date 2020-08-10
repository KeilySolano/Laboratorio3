<?php
  /**
   *
   */
  class Usuarios
  {

    function __construct()
    {
      // code...
    }

    public function BuscarUsuario($usuario,$password)
    {
      $con=new Conexion();
      $q="SELECT * FROM `usuario` WHERE `user`='$usuario' AND `password`='$password';";
      $consulta=$con->query($q);
      $con->close();
      return $consulta;
    }
    
  }

?>
