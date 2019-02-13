<?php

require "vendor/autoload.php";

// load database configuration file
require "config.php";

use Models\Database;

//create database object
new Database();
