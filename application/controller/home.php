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
        require 'application/views/home/index.php';
    }
}