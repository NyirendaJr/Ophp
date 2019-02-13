<?php

require "vendor/autoload.php";

// load database configuration file
require "config.php";

use Models\Database;

new Database();
