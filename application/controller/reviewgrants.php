<?php

class ReviewGrants extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {

    	$reviewgrants_model = $this->loadModel('ReviewGrantsModel');
        $reviewgrants_json = $reviewgrants_model->getCalendarEvents();

        if (Session::get('user_account_type') == 1) {
            require 'application/views/templates/professorsidebar.php';
            require 'application/views/reviewgrants.php';
        } else if (Session::get('user_account_type') == 2) {
            require 'application/views/templates/adminsidebar.php';
            require 'application/views/reviewgrants.php';
        }

        require 'application/views/templates/sidebarfooter.php';
    }
}