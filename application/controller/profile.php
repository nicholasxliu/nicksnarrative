<?php

class Profile extends Controller
{
 	function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {
        $profile_model = $this->loadModel('ProfileModel');

        if (Session::get('user_account_type') == 1) {
            require 'application/views/templates/professorsidebar.php';
            require 'application/views/profile.php';
        } else if (Session::get('user_account_type') == 2) {
            require 'application/views/templates/adminsidebar.php';
            require 'application/views/profile.php';
        }
        
        require 'application/views/templates/sidebarfooter.php';
    }
}
