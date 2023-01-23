<?php
define("ROOT_PATH", __DIR__ . "/../");

define("DATABASE_MySQLi", ROOT_PATH . 'ConetionClass.php');

require_once ROOT_PATH . "/Controller/BaseController.php";

require_once ROOT_PATH . "/Model/UserModel.php";
?>