<?php
require_once dirname(__FILE__) . '/../utils/init.php';
require_once dirname(__FILE__) . '/../models/Users.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

// fait appel a la base pr recupérer user
//
$user= Users::current();

require_once (dirname(__FILE__) . '/../config/config.php');
require_once(dirname(__FILE__) . '/../config/regex.php');
require_once(dirname(__FILE__) . '/../utils/Database.php');

