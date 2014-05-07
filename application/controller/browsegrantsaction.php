<?php

class BrowseGrantsAction extends Controller
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
        $browsegrantsaction_model = $this->loadModel('BrowseGrantsActionModel');
        $browsegrantsaction_json = $browsegrantsaction_model->getGrants();

        require 'application/views/templates/professorsidebar.php';
        require 'application/views/browsegrantsaction.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}