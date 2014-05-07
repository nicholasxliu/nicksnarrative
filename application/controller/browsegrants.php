<?php

class BrowseGrants extends Controller
{
    public function index()
    {

    	if (Session::get('user_account_type') == 1) {
            require 'application/views/templates/professorsidebar.php';
        	require 'application/views/browsegrants.php';
        } else if (Session::get('user_account_type') == 2) {
            require 'application/views/templates/adminsidebar.php';
        	require 'application/views/browsegrants.php';
        }

        require 'application/views/templates/sidebarfooter.php';
    }
}