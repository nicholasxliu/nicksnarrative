<?php

/**
 * Login Controller
 * Controls the login processes
 */

class Login extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Index, default action (shows the login form), when you do login/index
     */
    function index()
    {
        $login_model = $this->loadModel('LoginModel');

        require 'application/views/templates/header.php';
        require 'application/views/login/login.php';
        require 'application/views/templates/footer.php';
    }

    /**
     * Register page
     * Show the register form
     */
    function register()
    {
        $login_model = $this->loadModel('LoginModel');
        
	    require 'application/views/templates/header.php';
        require 'application/views/login/register.php';
        require 'application/views/templates/footer.php';
    }

    /**
     * renders the feedback messages into the view
     */
    public function renderFeedbackMessages()
    {
        // echo out the feedback messages (errors and success messages etc.),
        // they are in $_SESSION["feedback_positive"] and $_SESSION["feedback_negative"]
        require 'application/views/templates/feedback.php';

        // delete these messages (as they are not needed anymore and we want to avoid to show them twice
        Session::set('feedback_positive', null);
        Session::set('feedback_negative', null);
    }

    function login()
    {
        // run the login() method in the login-model, put the result in $login_successful (true or false)
        $login_model = $this->loadModel('LoginModel');
        // perform the login method, put result (true or false) into $login_successful
        $login_successful = $login_model->login();

        // check login status
        if ($login_successful) {
            // if YES, then move user to dashboard/index (btw this is a browser-redirection, not a rendered view!)
            header('location: ' . URL . 'dashboard');
        } else {
            // if NO, then move user to login/index (login form) again
            header('location: ' . URL . 'login/index');
        }
    }

    /**
     * Register page action (after form submit)
     */
    function register_action()
    {
        $login_model = $this->loadModel('LoginModel');
        $registration_successful = $login_model->registerNewUser();

        if ($registration_successful == true) {
            header('location: ' . URL . 'login/index');
        } else {
            header('location: ' . URL . 'login/register');
        }
    }
}
