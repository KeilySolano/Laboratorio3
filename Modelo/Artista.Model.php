<?php
  /**
   *
   */
  class Artista
  {

    function __construct()
    {
      // code...
    }

    public function GuardarArtista($nombre,$genero,$cancion,$album,$nominacion)
    {
      $con=new Conexion();     
      $q ="INSERT INTO `musica`(`Artista`, `Genero`, `Cancion`, `Album`, `Nominacion`) VALUES ('$nombre','$genero','$cancion','$album','$nominacion');";
      $t=$con->query($q);
      $con->close();
      return $t;
    }
  

  }

?>