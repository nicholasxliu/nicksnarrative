<?php

/*
 * Contact Us
 */

class Contact extends Controller
{
    /**
     * PAGE: Contact Us
     */
    public function index()
    {
        require 'application/views/templates/header.php';
        require 'application/views/home/contact.php';
        require 'application/views/templates/footer.php';
    }
}