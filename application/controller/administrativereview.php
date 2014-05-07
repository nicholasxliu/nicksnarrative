<?php

class AdministrativeReview extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {

    	$administrativereview_model = $this->loadModel('AdministrativeReviewModel');
        $administrativereview_json = $administrativereview_model->getCalendarEvents();

        require 'application/views/templates/adminsidebar.php';
        require 'application/views/administrativereview.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}