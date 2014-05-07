<?php

class Grants extends Controller
{
    function __construct()
    {
        // this controller should only be visible/usable by logged in users, so we put login-check here
        Auth::handleLogin();
        parent::__construct();
    }

    public function index()
    {
        require 'application/views/templates/professorsidebar.php';
        require 'application/views/browsegrants.php'; //TODO: decide what to do for this page.
        require 'application/views/templates/sidebarfooter.php';
    }

    public function view($id)
    {
        // Load the grant model and get the json of the grant's info.
        $grant_model = $this->loadModel('GrantsModel');
        $grant_json = $grant_model->getGrant($id);

        require 'application/views/templates/professorsidebar.php';
        require 'application/views/grants.php';
        require 'application/views/templates/sidebarfooter.php';
    }

    public function save($id)
    {
        $grant_model = $this->loadModel('GrantsModel');
        $grant_model->saveGrant($id);
        header('location: ' . URL . 'grants/' . $id);
    }

    public function submit($id)
    {
        $grant_model = $this->loadModel('GrantsModel');
        $grant_model->completeGrant($id);
        header('location: ' . URL . 'grants/' . $id);
    }
}