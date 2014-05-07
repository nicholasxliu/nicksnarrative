<?php

class ProfileAction extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {
        // Load the calendar model and get the json of the user's calendar events.
        $profileaction_model = $this->loadModel('ProfileActionModel');
        $profileaction_model->getProfileAction();

        require 'application/views/templates/professorsidebar.php';
        require 'application/views/profileaction.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}