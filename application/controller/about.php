<?php

/*
 * About Us
 */

class About extends Controller
{
    /**
     * PAGE: About Us
     */
    public function index()
    {
        require 'application/views/templates/header.php';
        require 'application/views/home/about.php';
        require 'application/views/templates/footer.php';
    }
}