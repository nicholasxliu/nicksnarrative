<?php

/*
 * Home Page
 */

class Home extends Controller
{
    /**
     * PAGE: Index (Home Page)
     */
    public function index()
    {
        require 'application/views/templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/templates/footer.php';
    }
}