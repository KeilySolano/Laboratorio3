<?php
  /**
   *
   */
  class Artistass
  {

    function __construct()
    {
      // code...
    }

    public function GuardarArtista()
    {
      $dato=new Artista();
      $smarty=new Smarty();
      $nombre=$_POST['nombre'];
      $genero=$_POST['genero'];
      $cancion=$_POST['cancion'];
      $album=$_POST['album'];
      $nominacion=$_POST['nominacion'];

      $t=$dato->GuardarArtista($nombre,$genero,$cancion,$album,$nominacion);

      if($t)
      {
        $smarty->display('master.tpl');
        
      }
      else 
      {
	    echo "No guardado";  
      }
     
      
    }

  }

?>