<?php

class GrantSubmissionAction extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {
        $grantsubmissionaction_model = $this->loadModel('GrantSubmissionActionModel');
        $grantsubmissionaction_model->getGrantSubmissionAction();

        require 'application/views/templates/grantorgsidebar.php';
        require 'application/views/grantsubmissionaction.php';
        require 'application/views/templates/sidebarfooter.php';
    }
}