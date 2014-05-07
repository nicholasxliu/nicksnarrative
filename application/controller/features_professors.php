<?php

/*
 * Features Professors
 */

class Features_Professors extends Controller
{
    /**
     * PAGE: About Us
     */
    public function index()
    {
        require 'application/views/templates/header.php';
        require 'application/views/features_professors.php';
        require 'application/views/templates/footer.php';
    }
}