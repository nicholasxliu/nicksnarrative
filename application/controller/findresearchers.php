<?php

/*
 * About Us
 */

class FindResearchers extends Controller
{
    /**
     * PAGE: About Us
     */
    public function index()
    {
        require 'application/views/templates/grantorgsidebar.php';
        require 'application/views/findresearchers.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}