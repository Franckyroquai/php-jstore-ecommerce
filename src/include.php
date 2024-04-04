<?php
define("SRC", dirname(__FILE__));
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("CONFIG",  ROOT.SP."config");
define("VIEWS",  ROOT.SP."views");
define("MODEL",  ROOT.SP."model");

//import du model
require CONFIG.SP."config.php";
require MODEL.SP."DataLayer.class.php";

$data = new DataLayer();


// les fonctions appelées par le controller
require "functions.php";




?>