<html>
    <head>
        <title>Grant Fellow</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    
    <link href="<?php echo URL; ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/jquery.dynatable.css" rel="stylesheet">

    <div id="main-navigation" class="sidebar-base">
        <div class="main-navigation">
            <div class="main-navigation-content">
                <div class="main-menu ">
                    <div id="user-image">
                        <div class="avatar2 avatar-sidebar">
                            <div class="user-icon">
                                <div class="profile-picture" style="display:block; margin: auto auto;">
                                <img src="http://grantfellow.com/images/profilepictures/professor_temporary.png" width="55" height="55">
                                </div>
                            </div>
                                <div class="flag2">
                            </div>
                        </div>
                        <div class="username_text">
                            <div class="firstname_text"><b><?php echo Session::get('user_firstname')." ".Session::get('user_lastname');?></b></div>
                        </div>
                    </div>
                    <div id="navigation-links">
                        <a class="top-navlink" id="dashboard" href="<?php echo URL; ?>dashboard">Dashboard</a>
                        <a class="top-navlink" id="calendar" href="<?php echo URL; ?>calendar">Calendar</a>
                        <a class="top-navlink" id="browsegrants" href="<?php echo URL; ?>browsegrants">Browse Grants</a>
                        <a class="top-navlink" id="reviewgrants" href="<?php echo URL; ?>reviewgrants">Review Grants</a>
                    </div>
                    <div id="secondary-nav-actions">
                        <div id="navigation-links" class="secondary-site-actions">
                            <a class="top-navlink" id="profile" href="<?php echo URL; ?>profile">Profile</a>
                            
                            <a class="top-navlink" id="logout" href="<?php echo URL; ?>logout">Log Out</a>
                        </div>
                        <div class="footer-logo"></div>
                        <div class="footer-links">
                            <a class="footer-link" href="">Terms</a>
                            <a class="footer-link" href="">Privacy</a>
                            <a class="footer-link" href="">Help</a>
                            <a class="footer-link" href="">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>