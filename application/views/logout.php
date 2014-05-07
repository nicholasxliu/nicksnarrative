<?php

Session::destroy();
// Jump to login page
header('location: ' . URL . 'login/index');

?>