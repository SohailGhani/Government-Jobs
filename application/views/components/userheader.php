<html>
<head>
    <title>Govt Jobs</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/imageviewer.css'); ?>"/>


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
            background-color: #2C743E;
        }
        .roundme {
            border-radius: 6px;
        }
        .widthme{
            width: 59%;
        }

        .padme{
            margin-left: 23% ;
        }
        .search-form {
            border-radius: 30px 0px 0px 30px;
            /*border-radius:Top-le80ft, Top-right, Bottom-right, Bottom-left;*/
        }

        .smallForUserView
        {
            max-height: 100%;
            max-width: 100%;
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
            color: #2C743E;

        }
        .searchtop
        {
            background-color: #2C743E ;
            color: white;
        }
        .clrmegreenfont
        {
            color: #2C743E;
        }
        .movefromtop
        {
            padding-top: 21.5%;
        }
        .nav-ul ul
        {
            display: block;
        }
        .movefromtopsearch
        {
            padding-top: 18%;
        }

        .smallForUserSearch
        {
            max-height: 40%;
            max-width: 40%;
        }
        .placeMeNotice
        {
            align: center;
            background-color: #2C743E;
            border-color: #2C743E;
            color: white;

        }
        .placeMeJobs
        {
            padding-left: 10%;
        }

        .smallfullview
        {
            width: 100%;
            height: auto;
        }
        .alignme
        {
            align: left;
        }


        ///////////////////////////////////////downloaded CSS for search box /////////////////////////////////


        #flipkart-navbar {
            background-color: #2874f0;
            color: #FFFFFF;
        }

        .row1{
            padding-top: 10px;
        }

        .row2 {
            padding-bottom: 20px;
        }

        .flipkart-navbar-input {
            padding: 11px 16px;
            border-radius: 2px 0 0 2px;
            border: 0 none;
            outline: 0 none;
            font-size: 15px;
        }

        .flipkart-navbar-button {
            background-color: #2C743E;
            border: 1px solid #2C743E;
            border-radius: 0 2px 2px 0;
            color: white;
            padding: 10px 0;
            height: 43px;

            cursor: pointer;
        }

        .cart-button {
            background-color: #2469d9;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
            padding: 10px 0;
            text-align: center;
            height: 41px;
            border-radius: 2px;
            font-weight: 500;
            width: 120px;
            display: inline-block;
            color: #FFFFFF;
            text-decoration: none;
            color: inherit;
            border: none;
            outline: none;
        }

        .cart-button:hover{
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }

        .cart-svg {
            display: inline-block;
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin-right: 8px;
        }

        .item-number {
            border-radius: 3px;
            background-color: rgba(0, 0, 0, .1);
            height: 20px;
            padding: 3px 6px;
            font-weight: 500;
            display: inline-block;
            color: #fff;
            line-height: 12px;
            margin-left: 10px;
        }

        .upper-links {
            display: inline-block;
            padding: 0 11px;
            line-height: 23px;
            font-family: 'Roboto', sans-serif;
            letter-spacing: 0;
            color: inherit;
            border: none;
            outline: none;
            font-size: 12px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: 0px;
        }

        .dropdown:hover {
            background-color: #fff;
        }

        .dropdown:hover .links {
            color: #000;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown .dropdown-menu {
            position: absolute;
            top: 100%;
            display: none;
            background-color: #fff;
            color: #333;
            left: 0px;
            border: 0;
            border-radius: 0;
            box-shadow: 0 4px 8px -3px #555454;
            margin: 0;
            padding: 0px;
        }

        .links {
            color: #fff;
            text-decoration: none;
        }

        .links:hover {
            color: #fff;
            text-decoration: none;
        }

        .profile-links {
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
            border-bottom: 1px solid #e9e9e9;
            box-sizing: border-box;
            display: block;
            padding: 0 11px;
            line-height: 23px;
        }

        .profile-li{
            padding-top: 2px;
        }

        .largenav {
            display: none;
        }

        .smallnav{
            display: block;
        }

        .smallsearch{
            margin-left: 15px;
            margin-top: 15px;
        }

        .menu{
            cursor: pointer;
        }

        @media screen and (min-width: 768px) {
            .largenav {
                display: block;
            }
            .smallnav{
                display: none;
            }
            .smallsearch{
                margin: 0px;
            }
        }

        /*Sidenav*/
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            box-shadow: 0 4px 8px -3px #555454;
            padding-top: 0px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s
        }
        .fulsize{
            width: 100%;
            height: 100%;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: #fff;
        }

        @media screen and (max-height: 450px) {
            .sidenav a {font-size: 18px;}
        }

        .sidenav-heading {
            font-size: 36px;
            color: #fff;
        }


    /////////////////////////////////////////////////////////End search box css///////////////////////////////////////////

    </style>
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="<?php echo base_url('home'); ?>"><div class="clrmewhite"> N O K R I A N</div></a>
        </a>
        <div class="collapse navbar-collapse" id="myNavbar">
           
        </div>
    </div>
</nav>


