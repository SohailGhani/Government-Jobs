<?php
if($this->session->userdata('logged_in')!=TRUE)
{


    echo '<div class="container"><br><br><br><br>
            <div class="row center"><h3>YOU CANNOT ACCESS THIS PAGE DIRECTLY !!!</h3></div><div class="row"><div class="col-md-3"></div><div class="col-md-3"><h4>';


    echo '</h4></div></div></div>';

    exit();
}?>


<html>
    <head>
        <title>Govt Jobs</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/sidenav.css'); ?>"/>

        <style>
            body{
                //margin-top: 51px;
                background-color: #E9EBEE;
            }

            .small
            {
                max-height: 30%;
                max-width: 80%;
            }
            .smallPlus
            {
               max-height: 70%;
               max-height: 50%;
            }

            .clrmegreen
            {
                background-color: #69BDA6;
            }

            .smallForUserView
            {
                max-height: 40%;
                max-width: 40%;
            }
            .clrmewhite
            {
                color: white;
            }

            .downme
            {
                padding-top: 40%;
            }
            .smallForDetailView
            {
                max-height: 60%;
                max-width: 80%;
            }
            .clrmegreenuser
            {
                color: #69BDA6;

            }

        </style>
    </head>
    <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">GovtJobs</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
    <!--          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                      </ul>
                  </li>-->
                <li><a href="<?php echo base_url('users/news'); ?>">News</a></li>
                <li><a href="<?php echo base_url('users/latestJobs'); ?>">Latest Jobs</a></li>
                <li><a href="<?php echo base_url('users/downloads'); ?>">Downloads</a></li>
              </ul>
            </div>
        </div>
    </nav>
       

