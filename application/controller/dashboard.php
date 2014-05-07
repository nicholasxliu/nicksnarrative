<?php

/*
 * Contact Us
 */

class Dashboard extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {

        $dashboard_model = $this->loadModel('DashboardModel');
        $dashboard_json = $dashboard_model->getCalendarEvents();

        if (Session::get('user_account_type') == 1) {
            require 'application/views/templates/professorsidebar.php';
            require 'application/views/professors/dashboard.php';
        } else if (Session::get('user_account_type') == 0) {
            require 'application/views/templates/grantorgsidebar.php';
            require 'application/views/grantorgs/dashboard.php';
        } else if (Session::get('user_account_type') == 2) {
            require 'application/views/templates/adminsidebar.php';
            require 'application/views/admin/dashboard.php';
        }

        require 'application/views/templates/sidebarfooter.php';
    }
}