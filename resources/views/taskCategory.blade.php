<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <title>Task Category</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        @media (max-width:320px) {
            .page-container {
                min-width: 303px;
            }

            .logo-name h1 {
                font-size: 1.4em;
            }

            .left-content {
                width: 86%;
            }

            .page-container.sidebar-collapsed-back .left-content {
                width: 83%;
            }

            .header-main {
                padding: 1em 0.5em;
            }

            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 0.4em;
            }

            .search-box {
                width: 50%;
            }

            .search-box input[type="text"] {
                width: 76%;
            }

            .profile_details_left {
                width: 40%;
            }

            .profile_details {
                width: 60%;
            }

            .fixed {
                width: 84%;
            }

            .search-box {
                width: 60%;
                font-size: 0.8em;
            }

            .user-name {
                margin-left: 2px;
            }

            .profile_details li a i.fa.lnr {
                right: 1%;
            }

            .chit-chat-heading {
                font-size: 1em;
            }

            h3#geoChartTitle {
                font-size: 1.05em;
            }

            div#geoChart {
                height: 135px !important;
            }

            .glocy-chart {
                padding: 1em 1em;
            }

            canvas#bar {
                width: 195px !important;
                height: 150px !important;
            }

            .malorum-top {
                min-height: 100px;
            }

            span.malorum-pro {
                width: 60px;
                height: 60px;
                top: -35px;
                left: 83px;
                background-size: 100%;
            }

            .malorm-bottom {
                padding: 1.5em 0.8em;
            }

            .malorm-bottom h2 {
                font-size: 1em;
            }

            .malorm-bottom ul {
                margin-top: 0.5em;
            }

            h3.tlt {
                font-size: 1em;
            }

            .home-progres-main h3 {
                font-size: 1em;
            }

            .prograc-blocks {
                padding: 1em 1em;
            }

            .home-progres-main {
                padding-bottom: 0px;
            }

            .chart-layer2-left h3 {
                font-size: 1em;
            }

            .search-box input[type="text"] {
                width: 80%;
                font-size: 0.95em;
                padding: 0.5em 0.5em;
            }

            canvas#radar {
                width: 195px !important;
                height: 200px !important;
            }

            .climate-gd1top-left h4 {
                font-size: 1em;
            }

            .cloudy1 h4 {
                font-size: 0.8em;
            }

            .cloudy1 h3 {
                font-size: 1em;
            }

            .climate-gd1top-left p {
                font-size: 0.8em;
            }

            .climate-gd1top-right p {
                font-size: 0.8em;
                line-height: 1.8em;
            }

            .climate-grid1 {
                min-height: 317px;
            }

            .climate-grid2 {
                min-height: 170px;
            }

            span.shoppy-rate {
                margin: 0.5em 0.5em;
                width: 55px;
                height: 55px;
            }

            span.shoppy-rate h4 {
                font-size: 1em;
            }

            .shoppy h3 {
                font-size: 1em;
            }

            .popular-bran-left p {
                font-size: 0.78em;
                margin-top: 0.5em;
            }

            .popular-bran-left h4 {
                font-size: 0.7em;
            }

            .popular-bran-left {
                padding: 0.7em 1em;
            }

            .popular-bran-right h3 {
                font-size: 1.5em;
                width: 70px;
                height: 70px;
            }

            .popular-follo-left {
                padding: 0.8em 1em;
            }

            .popular-follo-left p {
                font-size: 0.75em;
            }

            .cols-grids h2 {
                font-size: 1.7em;
                margin-bottom: 0.5em;
            }

            .portlet-grid-page h2 {
                font-size: 1.7em;
                margin-bottom: 0.5em;
            }

            .mb40 {
                margin-bottom: 10px !important;
            }

            .panel-body {
                padding: 10px;
            }

            .copyrights p {
                font-size: 0.8em;
            }

            .btn-main-heading h2 {
                font-size: 1.6em;
                margin-bottom: 0.5em;
            }

            .button-heading h4 {
                font-size: 1.1em;
            }

            .col-lg-6.mb-60 {
                padding: 0px;
            }

            .map-main-page h2 {
                font-size: 1.7em;
            }

            .login-page {
                padding: 1.3em 0em;
            }

            .forgot-top-grids {
                padding: 0em 0em;
            }

            .forgot-grid ul li input[type="checkbox"]+label {
                padding-left: 22px;
                font-size: .65em;
            }

            .login-block input[type="text"],
            .login-block input[type="password"] {
                font-size: 0.8em;
                padding: 7px 20px;
            }

            .login-block input[type="submit"] {
                font-size: 0.9em;
            }

            .login-block h5 {
                font-size: 0.9em;
            }

            .login-head h1 {
                font-size: 2em;
            }

            .login-head {
                min-height: 130px;
            }

            .login-block h3 {
                font-size: 0.85em;
            }

            .login-block h2 {
                margin: 1em 0;
            }

            .signup-page-main {
                padding: 1.5em 0em;
            }

            .signup-head h1 {
                font-size: 2em;
            }

            .signup-head {
                min-height: 130px;
            }

            .signup-block {
                padding: 1.5em 1.3em;
            }

            .signup-block input[type="text"],
            .signup-block input[type="password"] {
                font-size: 0.8em;
                padding: 6px 15px;
            }

            .signup-block input[type="submit"] {
                font-size: 0.85em;
            }

            .sign-down {
                margin-top: 10px;
            }

            .sign-down h4 {
                font-size: 0.8em;
            }

            .sign-down h5 {
                font-size: 0.83em;
            }

            canvas#doughnut {
                width: 185px !important;
                height: 180px !important;
            }

            .dygno h2 {
                font-size: 1.3em;
            }

            canvas#line {
                width: 205px !important;
                height: 185px !important;
            }

            .line-chart h3 {
                font-size: 1.3em;
            }

            canvas#polarArea {
                width: 190px !important;
                height: 180px !important;
            }

            .polararea h3 {
                font-size: 1.3em;
            }

            canvas#pie {
                width: 195px !important;
                height: 195px !important;
            }

            .chart-other h3 {
                font-size: 1.3em;
            }

            .inbox h2 {
                font-size: 1.7em;
                margin-bottom: 0.5em;
            }

            .mail-pic {
                width: 35%;
            }

            .mailer-name {
                width: 57%;
            }

            .compose-bottom ul li a {
                font-size: 0.8em;
                padding: 0.8em 1em;
            }

            .compose-right .inbox-details-body {
                padding: 1em;
            }

            .compose-right .alert.alert-info {
                padding: 10px 20px;
                font-size: 0.8em;
            }

            .inbox-details-body textarea {
                font-size: 0.8em;
                height: 7em;
                margin-bottom: 0em;
            }

            .compose-right input[type="submit"] {
                font-size: 0.8em;
                padding: 0.6em 1em;
            }

            .pro-head h2 {
                font-size: 1.7em;
                margin: 0em 0em 0.5em 0em;
            }

            .product-grid {
                float: none;
                width: 100%;
                padding: 0px;
            }

            .prices-head h2 {
                font-size: 1.7em;
                margin: 0em 0em 0.5em 0.4em;
            }

            .error-404 h2 {
                font-size: 1.5em;
            }

            .error-right h4 {
                font-size: 1em;
            }

            .blank h2 {
                font-size: 1.7em;
                margin-bottom: 0.5em;
            }

            .blankpage-main {
                padding: 1em 1em;
                margin-top: 2em;
            }

            .blankpage-main p {
                font-size: 0.8em;
            }

            .boost-icons-head h2 {
                font-size: 1.7em;
                margin-bottom: 0.5em;
            }

            .boost-icons-list ul li {
                width: 100%;
                margin: 0% 1% 2% 0%;
                padding: 2em 0.5em;
            }

            .boost-icons-list ul li {
                font-size: 0.8em;
            }

            .page-container.sidebar-collapsed-back .sidebar-menu {
                width: 55px;
            }

            .sidebar-menu {
                width: 45px;
            }

            .logo {
                left: 7px;
            }

            .page-container.sidebar-collapsed .logo {
                left: 7px;
            }

            #menu li a {
                padding: 15px 10px;
                font-size: 1em;
            }

            ul.dropdown-menu {
                min-width: 195px;
            }

            .profile_details ul li ul.dropdown-menu.drp-mnu {
                min-width: 160px;
            }

            .popular-follo-right h4 {
                font-size: 1em;
            }

            .popular-follo-right h5 {
                font-size: 0.85em;
            }

            .popular-follo-right {
                padding: 1.45em 1em;
            }

            .popular-bran-left h3 {
                font-size: 1em;
            }

            .page-container.sidebar-collapsed .sidebar-menu {
                width: 130px;
            }

            .market-update-block h3 {
                font-size: 1.7em;
            }

            .forgot a {
                font-size: 0.65em;
            }

            .inbox-details-body input[type="text"] {
                font-size: 0.8em;
                height: 33px;
            }

            .forgot a {
                font-size: 0.6em;
            }

            .b_label,
            .bar_label_min,
            .bar_label_max,
            .b_tooltip span {
                font-size: 11px;
            }

            .b_tooltip {
                padding: 4px 7px 7px 7px;
            }
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -10 !important;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .appointment-form {
            padding: 10px 60px 0px 60px;
        }

        .appointment-form input,
        select {
            width: 100%;
            display: block;
            border: none;
            border-bottom: 2px solid #ebebeb;
            padding: 5px 0;
            color: #222;
            margin-bottom: 11px;
            font-family: 'Roboto Slab';
        }

        .appointment-form input:focus,
        select:focus {
            color: #222;
            border-bottom: 2px solid #4966b1;
        }

        .appointment-form input[type=checkbox]:not(old) {
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            display: none;
        }

        .appointment-form input[type=checkbox]:not(old)+label {
            display: inline-block;
            margin-top: 7px;
            margin-bottom: 25px;
        }

        .appointment-form input[type=checkbox]:not(old)+label>span {
            display: inline-block;
            width: 13px;
            height: 13px;
            margin-right: 15px;
            margin-bottom: 3px;
            border: 1px solid #ebebeb;
            background: white;
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
            vertical-align: bottom;
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span {
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span:before {
            content: '\f26b';
            display: block;
            color: #222;
            font-size: 11px;
            line-height: 1.2;
            text-align: center;
            font-family: 'Material-Design-Iconic-Font';
            font-weight: bold;
        }

        .appointment-form .label-agree-term {
            color: #999;
        }

        .appointment-form .term-service {
            color: #222;
        }

        .appointment-form .submit {
            width: auto;
            background: #4966b1;
            color: #fff;
            padding: 16px 17px;
            font-size: 13px;
            border: none;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -ms-border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
        }

        .appointment-form .submit:hover {
            background: #3a518d;
        }

        .appointment-form ul {
            background: 0 0;
            z-index: 9;
        }

        .appointment-form ul li {
            padding: 3px 0px;
            z-index: 2;
            color: #999;
        }

        ul li:last-child {}

        .appointment-form ul li:not(.init) {
            display: none;
            background: #fff;
            color: #222;
            padding: 5px 10px;
            border-left: 1px solid #ebebeb;
            border-right: 1px solid #ebebeb;
            border-top: 1px solid #ebebeb;
        }

        .appointment-form ul li:not(.init):hover,
        ul li.selected:not(.init) {
            background: #4966b1;
            color: #fff;
        }

        .appointment-form li.init {
            cursor: pointer;
            position: relative;
            border-bottom: 2px solid #ebebeb;
        }

        .appointment-form li.init:after {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            font-size: 20px;
            color: #999;
            font-family: 'Material-Design-Iconic-Font';
            content: '\f2f9';
        }

        .appointment-form #confirm_type {
            margin-bottom: 30px;
        }

        .appointment-form .form-group-2 {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .appointment-form .form-check {
            margin-bottom: 20px;
        }

        .appointment-form .select-list {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 55px;
        }

        .appointment-form .list-item {
            position: absolute;
            width: 100%;
        }

        .appointment-form #confirm_type {
            z-index: 99;
        }

        .appointment-form #hour_appointment {
            z-index: 9;
        }

        @media screen and (max-width: 1024px) {
            .container {
                margin: 0 auto;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                width: calc(100% - 30px);
                max-width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .appointment-form {
                padding: 50px 30px 70px 30px;
            }
        }

        ul li {
            font-family: 'Roboto', sans-serif;
        }

        a:hover {
            cursor: pointer;
        }

        #SmallFontlabel label {
            width: 200px;
        }



        .SecondColor {
            background-color: #0a549d;
            border-radius: 10px;
            height: 35px;

        }

        .firstColor {
            background-color: #e61d2f;
            border-radius: 10px;

        }

        .ThirdColor {
            background-color: #e61d2f;
            border-radius: 10px;
            height: 35px;

        }

        label {
            width: 130px;
        }

        .head-left {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            height: 312px;

        }

        .input-field {
            margin: 5px 0px;
        }

        .btn-Search {
            background-color: #e61d2f;
            border-color: #e61d2f;
        }

        .head-right {
            /* border: 1px solid #333; */

            padding: 10px;
            border-radius: 10px;
        }

        table td:nth-child(2) {
            padding-left: 50px;
            font-weight: 800;
        }

        .date {
            padding: 0px 5px;
            padding-top: 3px;
            padding-bottom: 2px;
            color: #fff;

        }

        .head-right {
            height: 223px;
        }

        .LastInput {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            height: 312px !important;


        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid #333;
            /* padding: 10px ; */
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }

        .myOwnRow-left {
            width: 50%;
            padding: 10px;
        }

        .myOwnROw {
            width: 50%;
            border-left: 1px solid #333;
            padding: 10px;
        }

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .myFooterButtons {
            text-align: right;
        }

        .myFooterButtons .btn {
            width: 150px !important;


        }

        .myFooterButtons a:nth-child(1) {
            background-color: #0a549d;
            color: #fff;
        }

        .myFooterButtons a:nth-child(2) {
            background-color: #0a549d;
            color: #fff;

        }

        .myFooterButtons a:nth-child(3) {
            background-color: #e61d2f;
            color: #fff;

        }

        .myFooterButtons a:nth-child(4) {
            background-color: #0a549d;
            color: #fff;

        }

        .image-Head h5 {
            font-weight: 800;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        /* @extend display-flex; */
        display-flex {
            display: flex;
            display: -webkit-flex;
        }

        /* @extend list-type-ulli; */
        list-type-ulli,
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        /* roboto-slab-300 - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Light"), local("RobotoSlab-Light"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        /* roboto-slab-regular - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        /* roboto-slab-700 - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Bold"), local("RobotoSlab-Bold"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
            transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -webkit-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
        }

        input,
        select,
        textarea {
            outline: none;
            appearance: unset !important;
            -moz-appearance: unset !important;
            -webkit-appearance: unset !important;
            -o-appearance: unset !important;
            -ms-appearance: unset !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            appearance: none !important;
            -moz-appearance: none !important;
            -webkit-appearance: none !important;
            -o-appearance: none !important;
            -ms-appearance: none !important;
            margin: 0;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -o-box-shadow: none !important;
            -ms-box-shadow: none !important;
        }

        input[type=checkbox] {
            appearance: checkbox !important;
            -moz-appearance: checkbox !important;
            -webkit-appearance: checkbox !important;
            -o-appearance: checkbox !important;
            -ms-appearance: checkbox !important;
        }

        input[type=radio] {
            appearance: radio !important;
            -moz-appearance: radio !important;
            -webkit-appearance: radio !important;
            -o-appearance: radio !important;
            -ms-appearance: radio !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        figure {
            margin: 0;
        }

        p {
            margin-bottom: 0px;
        }

        input:-webkit-autofill {
            box-shadow: 0 0 0 30px white inset;
            -moz-box-shadow: 0 0 0 30px white inset;
            -webkit-box-shadow: 0 0 0 30px white inset;
            -o-box-shadow: 0 0 0 30px white inset;
            -ms-box-shadow: 0 0 0 30px white inset;
        }

        h2 {
            line-height: 1.8;
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #222;
            font-family: 'Roboto Slab';
            font-size: 20px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        h3 {
            font-weight: bold;
            color: #222;
            font-size: 15px;
            margin: 0px;
            margin-bottom: 35px;
        }

        .clear {
            clear: both;
        }


        .main {
            padding: 60px 0;
            position: relative;
        }


        .appointment-form {
            padding: 10px 60px 0px 60px;
        }

        .appointment-form input,
        select {
            width: 100%;
            display: block;
            border: none;
            border-bottom: 2px solid #ebebeb;
            padding: 5px 0;
            color: #222;
            margin-bottom: 11px;
            font-family: 'Roboto Slab';
        }

        .appointment-form input:focus,
        select:focus {
            color: #222;
            border-bottom: 2px solid #4966b1;
        }

        .appointment-form input[type=checkbox]:not(old) {
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            display: none;
        }

        .appointment-form input[type=checkbox]:not(old)+label {
            display: inline-block;
            margin-top: 7px;
            margin-bottom: 25px;
        }

        .appointment-form input[type=checkbox]:not(old)+label>span {
            display: inline-block;
            width: 13px;
            height: 13px;
            margin-right: 15px;
            margin-bottom: 3px;
            border: 1px solid #ebebeb;
            background: white;
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
            vertical-align: bottom;
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span {
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span:before {
            content: '\f26b';
            display: block;
            color: #222;
            font-size: 11px;
            line-height: 1.2;
            text-align: center;
            font-family: 'Material-Design-Iconic-Font';
            font-weight: bold;
        }

        .appointment-form .label-agree-term {
            color: #999;
        }

        .appointment-form .term-service {
            color: #222;
        }

        .appointment-form .submit {
            width: auto;
            background: #4966b1;
            color: #fff;
            padding: 16px 17px;
            font-size: 13px;
            border: none;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -ms-border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
        }

        .appointment-form .submit:hover {
            background: #3a518d;
        }

        .appointment-form ul {
            background: 0 0;
            z-index: 9;
        }

        .appointment-form ul li {
            padding: 3px 0px;
            z-index: 2;
            color: #999;
        }

        ul li:last-child {
            border-bottom: 1px solid #ebebeb;
        }

        .appointment-form ul li:not(.init) {
            display: none;
            background: #fff;
            color: #222;
            padding: 5px 10px;
            border-left: 1px solid #ebebeb;
            border-right: 1px solid #ebebeb;
            border-top: 1px solid #ebebeb;
        }

        .appointment-form ul li:not(.init):hover,
        ul li.selected:not(.init) {
            background: #4966b1;
            color: #fff;
        }

        .appointment-form li.init {
            cursor: pointer;
            position: relative;
            border-bottom: 2px solid #ebebeb;
        }

        .appointment-form li.init:after {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            font-size: 20px;
            color: #999;
            font-family: 'Material-Design-Iconic-Font';
            content: '\f2f9';
        }

        .appointment-form #confirm_type {
            margin-bottom: 30px;
        }

        .appointment-form .form-group-2 {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .appointment-form .form-check {
            margin-bottom: 20px;
        }

        .appointment-form .select-list {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 55px;
        }

        .appointment-form .list-item {
            position: absolute;
            width: 100%;
        }

        .appointment-form #confirm_type {
            z-index: 99;
        }

        .appointment-form #hour_appointment {
            z-index: 9;
        }

        @media screen and (max-width: 1024px) {
            .container {
                margin: 0 auto;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                width: calc(100% - 30px);
                max-width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .appointment-form {
                padding: 50px 30px 70px 30px;
            }
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 10px 8px#0a549d inset, 0 13 15px #0a549d !important;
            outline: 0 none;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        @media only screen and (max-width: 641px) {

            .myMainRow {
                display: block;
            }

            .head-left {
                margin: 20px 0px;
            }

            .myFooterButtons .btn {
                margin: 10px 0px !important;
            }

            .LastInput {
                height: 315px !important;
            }

        }


        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {

            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }

    </style>
</head>

<body style="font-family: 'Roboto', sans-serif;" onload="fetchAccounts()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-1">
                            <h4>Task Category</h4>
                        </div>
                    </div>
                    
                </div>
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="firstColor my-4">
                                    <div class="date text-right">
                                        <h6> <strong>.</strong></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="myMainRow">

                                    
                                    <div class="myOwnRow-left">
                                    <h2>Add New Category</h2>
                                        <div class="input-field">
                                            <label for="status">Product ID</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="PID">
                                        </div>

                                    </div>
                                    <div class="myOwnROw">



                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                            <h2>Edit Category</h2>
                                                <div class="input-field">
                                                    <label for="status">Invoice Number</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" value="" id="InvoiceID">

    

                                                </div>


                                               
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                
                
                
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->



<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({
                "position": "absolute",

            });
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({
                    "position": "relative",

                });
            }, 400);
        }
        toggle = !toggle;
    });

</script>

</html>
