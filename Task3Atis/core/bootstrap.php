<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection,UserQuery,TaskQuery};

App::bind('config', require 'config.php');

App::bind('taskQuery', new TaskQuery(
    Connection::make(App::get('config')['database'])
));
App::bind('userQuery', new UserQuery(
    Connection::make(App::get('config')['database'])
));
