<?php
  /**
   *
   */
  class Conexion extends mysqli
  {

    function __construct()
    {
      // code...
     $server="localhost";
     $pass="";
     $user="root";
     $base="lab3";

     parent::__construct($server,$user,$pass,$base);
     $this->query("SET NAMES 'utf8';");
     $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ".$base;
     //echo $error;
   unset($error);
    }
  }

?>
