<?php
	include_once('Smarty.class.php');
    
    class SmartyClass extends Smarty 
    {

       function __construct()
       {
            parent::__construct();
    
            $this->setTemplateDir('../templates');
            $this->setCompileDir('../templates_c');
            $this->setConfigDir('../configs');
            $this->setCacheDir('../cache');
    
            $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
            
            
            $this->caching=true;
            $this->assign('app_name', 'Framework MVC');
       }
    
    }
?>