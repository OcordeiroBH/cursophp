<?php 

session_id('5ctkjgbkr0sckf8l4p1i632jaq');

require_once("config.php");

session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>