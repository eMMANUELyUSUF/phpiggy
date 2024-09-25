<?php

//The job of this file is to load and configure the file neccessary for our application


declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";  //Loading the app file from the framwork directory

use Framework\App;  //Import the framework

$app = new App();

return $app;
