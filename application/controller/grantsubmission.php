<?php

class GrantSubmission extends Controller
{
 	function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {
        $grantsubmission_model = $this->loadModel('GrantSubmissionModel');

        require 'application/views/templates/grantorgsidebar.php';
        require 'application/views/grantsubmission.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}
