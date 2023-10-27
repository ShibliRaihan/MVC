<?php 
define('APP_ROOT',__dir__);

require_once(APP_ROOT.'vender/autoload.php');

##autoload_for_namespace_class
spl_autoload_register(function($class)
{
    $classFile = str_replace("//",DIRECTORY_SEPARATOR,$class);
    $classPath = APP_ROOT.'/app/'.$classFile;
    if (file_exists($classPath)) {
        require_once($classPath);
    }
});

session_start();