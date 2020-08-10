<?php

    include('AutoLoad.php');
    if(isset($_GET['controller']))
    {
      $controller=$_GET['controller'];
      $action=$_GET['action'];
    }
    else
    {
      $controller="Home";// accede a las clases
      $action="Inicio";// accede a los metodos o funciones
    }
    //echo $controller."--".$action;


    if(class_exists($controller) && method_exists($controller,$action))
    {
      $class= new $controller(); //$class=new Home();
      $class->$action();// $class->FuncionX();
    }
    else
    {
      echo "<br/>la clase y el controlador no existen";
    }

 ?>
 
