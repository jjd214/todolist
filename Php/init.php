<?php
# Starters
require_once "functions.php";
#spl auto load register - once na nag instansitiate ka ng class ang gagawin
#                         nya e execute nya yung nasa loob.
spl_autoload_register(function($class){
  require_once $_SERVER['DOCUMENT_ROOT'].'/todolist/class/'.$class.'.php';
});
?>
