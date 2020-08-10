<?php
  /**
   *
   */
  class User
  {

    function __construct()
    {
      // code...
    }

    public function Login()
    {
      //var_dump($_POST);
      $smarty=new Smarty();
      $con=new Usuarios();
      $user=$_POST['usuario'];
      $pass=$_POST['password'];

      $consulta=$con->BuscarUsuario($user,$pass);

      //var_dump($consulta);

      if($consulta->num_rows==1)
      {
        $smarty->display('master.tpl');
      }
      else
      {
        $smarty->display('login.tpl');
        echo "Revise datos";
      }
    }

  }

?>


