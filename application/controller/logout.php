<?php

class Logout extends Controller
{

    public function index()
    {
        require 'application/views/templates/grantorgsidebar.php';
        require 'application/views/logout.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}