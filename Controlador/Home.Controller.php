<?php
  /**
   *
   */
  class Home
  {

    function __construct()
    {
      // code...
    }

    public function Inicio()
    {
      $smarty=new Smarty();
      $smarty->display('login.tpl');
    }

  }

?>
