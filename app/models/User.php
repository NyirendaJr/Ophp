<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;

Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();

class User extends Model {
    protected $table = 'users';
    protected $guarded = [];
}

?>
