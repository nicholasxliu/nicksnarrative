<?php

// load application config (error reporting etc.)
require 'application/config/config.php';

// load application class TODO: better way to do this.
require 'application/libs/application.php';
require 'application/libs/controller.php';
require 'application/libs/Session.php';
require 'application/libs/Auth.php';

$app = new Application();
?>
