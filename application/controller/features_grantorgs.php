<?php

/*
 * Features Grant Orgs
 */

class Features_GrantOrgs extends Controller
{
    /**
     * PAGE: About Us
     */
    public function index()
    {
        require 'application/views/templates/header.php';
        require 'application/views/features_grantorgs.php';
        require 'application/views/templates/footer.php';
    }
}