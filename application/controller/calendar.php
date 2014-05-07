<?php

class Calendar extends Controller
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
        $calendar_model = $this->loadModel('CalendarModel');
        $calendar_json = $calendar_model->getCalendarEvents();

        if (Session::get('user_account_type') == 1) {
            require 'application/views/templates/professorsidebar.php';
            require 'application/views/calendar.php';
        } else if (Session::get('user_account_type') == 2) {
            require 'application/views/templates/adminsidebar.php';
            require 'application/views/calendar.php';
        }
        
        require 'application/views/templates/sidebarfooter.php';
    }
}