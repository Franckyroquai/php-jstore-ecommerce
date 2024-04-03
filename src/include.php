<?php
define("SRC", dirname(__FILE__));
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("VIEWS",  ROOT.SP."views");
define("MODEL",  ROOT.SP."model");

// les fonctions appelées par le controller
require "functions.php";




?>