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


    <title>Invoice</title>
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
            height: 229px !important;


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

        /* Invoice Services Media Query Starts */
        /* Invoice Services Media Query Ends */
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
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
                <h4>Create Invoice</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="">Category</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Auto</option>
                    <option value=2>Service</option>
                    <option value=3>Parts</option>



                </select>
            </div>
            <div class="col-md-5 offset-md-3">
                <label for="">Modal / Services</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Forland C13</option>
                    <option value=2>Forland C12</option>
                    <option value=3>Forland C12</option>



                </select>
           
                <button class="btn btn-Search" data-toggle="modal" data-target=".bd-example-modal-lg"
                    style="height: 25px;" onclick="loadStock()"></button>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="firstColor my-4">
                        <div class="date text-right">
                            <h6> <strong>Date :</strong> 27/11/2020</h6>
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
                            <div class="input-field">
                                <label for="status">Product ID</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="PID">
                            </div>
                            <div class="input-field">
                                <label for="status">Model</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ProductName">
                            </div>

                            <div class="input-field">
                                <label for="status">Color</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="color">
                            </div>

                            <div class="input-field">
                                <label for="status">Chassis Number </label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ChasisNumber">
                            </div>
                            <div class="input-field">
                                <label for="status">Engine Number</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="EngineNumber">
                            </div>
                            <div class="input-field">
                                <label for="status">Status</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Status">
                            </div>

                            <div class="input-field">
                                <label for="status">Description</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="description">
                            </div>

                            <div class="input-field">
                            <label for="status">Purchase Price</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="TotalPrice"><br>
                                <label for="status">Total Cost</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="TotalCost"><br>
                                <label for="status">17 % Tax on Price</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="tax">

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="status">Discount</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" value="0" id="Discount" onkeyup="calc()">
                            </div>
                            <div class="input-field">
                                <label for="status">Net Total</label>
                                <input type="text" readonly class="form-control"
                                    style=" pointer-events: none; display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="NetTotal">
                            </div>
                        </div>
                        <div class="myOwnROw">



                            <div class="row">
                                <div class="col-md-5">
                                    <div class="image-Head px-1 ">
                                        <h5>Forland</h5>
                                        <p>
                                            Customer is always captured after sales
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="head-right">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="SecondColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="head-left">


                        <div class="input-field">
                        <label for="issue-3">Customer Name</label>
                                <select class="selectpicker" data-live-search="true" tabindex="null" id="CustomerName"
                                    onchange="getCurrentCustomerInfo()">
                                    <!-- from database -->
                                </select>
                            <button data-toggle="modal" data-target="#staticBackdrop" style="    height: 30px;
                               margin-top: -5px;" class="btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="input-field">
                            <label for="status">Client's Father Name</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="fatherName">
                        </div>
                        <div class="input-field">
                            <label for="status">Customer CNIC</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="CID">

                        </div>
                        <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <form method="POST" class="appointment-form" id="appointment-form">
                                            <h2>Create Invoice</h2>
                                            <div class="form-group-1">
                                                <input type="text" name="name" id="addCustomerName" placeholder="Customer Name"
                                                    required />
                                                <input type="text" name="title" id="addFatherName" placeholder="Father Name"
                                                    required />

                                                <input type="number" name="tel" id="addContact" placeholder="Contact"
                                                    required />
                                                <input type="number" name="title" id="addCNIC" placeholder="ID Card"
                                                    required />
                                                <input type="text" name="phone_number" id="addAddress"
                                                    placeholder="Address" required />
                                                <input type="text" name="phone_number" id="addProfession"
                                                    placeholder="Profession" required />
                                                <input type="number" name="phone_number" id="addBalance"
                                                    placeholder="Balance" required />

                                                <input type="text" name="phone_number" id="addComments"
                                                    placeholder="Comments" required />

                                                <div class="select-list">
                                                    <select name="course_type" id="course_type">
                                                        <option selected value="">Category</option>
                                                        <option value="Society">Society</option>
                                                        <option value="Language">Language</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-submit">
                                                <button onclick="addCustomer()" name="submit" id="submit"
                                                    class="submit" value="">Add Customer</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="input-field">
                            <label for="status">Address</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="Address">
                        </div>
                        <div class="input-field">
                            <label for="status">Contact</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="contact">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="LastInput">

                        <div class="input-field">
                            <label for="status">Amount Paid</label>
                            <input type="number" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountPaid" onkeyup="calcRemainingAmount()">
                        </div>
                        <div class="input-field">
                            <label for="status">Remaining</label>
                            <input type="number" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountRemaining">
                        </div>
                        <div class="input-field">
                            <label for="status">Payment Mode</label>
                            <select data-live-search="true" class=" selectpicker" id='slctAccounts'>



                            </select>
                        </div>
                        <div class="input-field">
                            <label for="status">Paid To</label>
                            <select data-live-search="true" class=" selectpicker" id="paidTo">
                                <option value=1>Forland Modren Motors</option>
                                <option value=2>FJW</option>


                            </select> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center mt-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 offset-md-4 mb-2 myFooterButtons">
                    <a class="btn" href="viewCustomers.html">view Customers</a>
                    <a class="btn" href="deliveryLetter.html">Print Docs</a>
                    <a class="btn" onclick="validPlz()">Generate Sale</a>
                    <a class="btn" href="#">Close Form</a>




                </div>

            </div>
        </div>

    </footer>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-left:100px;">
            <div class="modal-content" style="width: 1300px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center my-4">Products Table</h4>
                            <table class="table  table-bordered mb-5" id="searchProductTable">
                                <thead>
                                    <tr>

                                        <th>Product Id</th>

                                        <th>Product Name</th>
                                        <th>Color</th>
                                        <th>Engine Number</th>

                                        <th>Chasis Number</th>

                                        <th>Purchse Price</th>
                                        <th>Cost with Additional charges</th>
                                        <th>Status</th>
                                        <th>Description</th>








                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sidebar-menu">

    <div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
            <span id="logo"></span>
        </a> </div>
    <div class="menu">
        <ul id="menu">
            <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span
                        style="font-size: 18px;">Dashboard</span></a>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs"><i class="fab fa-salesforce"></i><span
                        style="font-size: 18px;">Products</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse list-unstyled firstULs ">
                    <li><a href="/">Category</a></li>
                    <li><a href="/vs">Product Record</a></li>
                    <li><a href="/as">Add Product</a></li>
                    <li><a href="/">Barcode</a></li>

                    <li><a href="/">Stock Audit</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs1"><i class="fab fa-salesforce"></i><span
                        style="font-size: 18px;">Customer</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs1">
                    <li><a href="/">Add Customer</a></li>
                    <li><a href="/vs">Customer List</a></li>

                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs2"><i class="fab fa-salesforce"></i><span
                        style="font-size: 18px;">Supplier</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs2">
                    <li><a href="/">Add Supplier</a></li>
                    <li><a href="/vs">Supplier List</a></li>
                </ul>
            </li>
            <li id="menu-comunicacao"><a data-toggle="collapse" data-target=".firstULs3"><i
                        class="fab fa-alipay"></i>
                    <span style="font-size: 18px;">Purchase</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs3">
                    <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                    </li>
                    <li><a href="">Daily Purchase</a></li>
                    <li><a href="">Monthly Purchase</a></li>
                    <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs4"><i class="fab fa-salesforce"></i><span
                        style="font-size: 18px;">POS</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs4">
                    <li><a href="/ss">POS</a></li>
                    <li><a href="/sc">Add Sale</a></li>
                    <li><a href="">Daily Sales</a></li>
                    <li><a href="">Monthly Sales</a></li>

                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                        style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs5">
                    <li><a href="/ex">Add Expense</a></li>
                    <li><a href="">Expense List</a></li>
                    <li><a href="">Expense Head</a></li>
                    <li><a href="">Expense Category</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs6"><i class="fas fa-quote-right"></i><span
                        style="font-size: 18px;">Quotation<span class="fa fa-angle-right"
                            style="float: right"></span></a>
                <ul class="collapse firstULs6">
                    <li><a href="/ql">Quotation List</a></li>
                    <li><a href="/is">Add Quotation</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs7"><i class="fas fa-random"></i><span
                        style="font-size: 18px;">Transfer<span class="fa fa-angle-right"
                            style="float: right"></span></a>
                <ul class="collapse firstULs7">
                    <li><a href="/th">Transaction History</a></li>
                    <li><a href="">Transfer Funds</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs8"><i class="fas fa-undo-alt"></i><span
                        style="font-size: 18px;">Return<span class="fa fa-angle-right"
                            style="float: right"></span></a>
                <ul class="collapse firstULs8">
                    <li><a href="/ss">Sale</a></li>
                    <li><a href="/is">Purchase</a></li>
                </ul>
            </li>
            <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs9"><i
                        class="fas fa-user-circle"></i><span style="font-size: 18px;">Accounts</span><span
                        class="fa fa-angle-right" style="float: right"></span></a>
                <ul class="collapse firstULs9">
                    <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                    <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                    <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs10"><i class="fab fa-accusoft"></i><span
                        style="font-size: 18px;">HR</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs10" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/">Add Employee</a></li>
                    <li id="menu-academico-boletim"><a href="/">View Employee</a></li>
                </ul>
            </li>



            <li><a data-toggle="collapse" data-target=".firstULs11"><i class="fas fa-people-carry"></i><span
                        style="font-size: 18px;">People</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs11" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/">User List</a></li>
                    <li id="menu-academico-boletim"><a href="/">Add User</a></li>


                </ul>
            </li>



            <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i
                        style="font-size: 20px;" class="fab fa-stack-overflow"></i><span
                        style="font-size: 18px;">Stock</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs12" id="menu-academico-sub">
                    <li id="menu-academico-boletim"><a href="/as">Add New Stock</a></li>
                    <li id="menu-academico-avaliacoes"><a href="/vs">View Stock</a></li>
                </ul>
            </li>



            <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs13"><i
                        class="fas fa-flag-checkered"></i><span style="font-size: 18px;">Reports</span><span
                        class="fa fa-angle-right" style="float: right"></span></a>
                <ul class="collapse firstULs13" id="menu-academico-sub">
                    <li id="menu-academico-boletim"><a href="/d">Summary Report</a></li>

                    <li id="menu-academico-boletim"><a href="/dl">Customer Report</a></li>
                    <li id="menu-academico-boletim"><a href="/d">Best Seller</a></li>

                    <li id="menu-academico-boletim"><a href="/dl">Daily Sale</a></li>
                    <li id="menu-academico-boletim"><a href="/d">Monthly Sale</a></li>

                    <li id="menu-academico-boletim"><a href="/dl">Daily Purchase</a></li>
                    <li id="menu-academico-boletim"><a href="/d">MonthlyPurchase</a></li>

                    <li id="menu-academico-boletim"><a href="/dl">User Report</a></li>
                    <li id="menu-academico-boletim"><a href="/d">Supplier Report</a></li>

                    <li id="menu-academico-boletim"><a href="/dl">Due Report</a></li>


                </ul>
            </li>
            <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs14"><i
                        class="fas fa-truck-loading"></i><span style="font-size: 18px;">Order
                        Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
                <ul class="collapse firstULs14" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

                </ul>
            </li>


            <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                        style="font-size: 18px;">PayRoll</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs15" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                    <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                    <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i
                        class="fas fa-guitar"></i><span style="font-size: 18px;">Attendance</span><span
                        class="fa fa-angle-right" style="float: right"></span></a>
                <ul class="collapse firstULs16" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                    <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
                </ul>

            </li>
            <li><a data-toggle="collapse" data-target=".firstULs17"><i class="fas fa-eye"></i><span
                        style="font-size: 18px;">Task View</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="firstULs17 collapse" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                    <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
                </ul>
            </li>

            <li><a data-toggle="collapse" data-target=".firstULs18"><i class="fas fa-cogs"></i><span
                        style="font-size: 18px;">Account Settings</span><span class="fa fa-angle-right"
                        style="float: right"></span></a>
                <ul class="collapse firstULs18" id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                    <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
        (function ($) {
            // USE STRICT
            "use strict";

            $(".form-radio .radio-item").click(function () {
                //Spot switcher:
                $(this).parent().find(".radio-item").removeClass("active");
                $(this).addClass("active");
            });

            $('#course_type').parent().append('<ul class="list-item" id="newcourse_type" name="course_type"></ul>');
            $('#course_type option').each(function () {
                $('#newcourse_type').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#course_type').remove();
            $('#newcourse_type').attr('id', 'course_type');
            $('#course_type li').first().addClass('init');
            $("#course_type").on("click", ".init", function () {
                $(this).closest("#course_type").children('li:not(.init)').toggle('slow');
            });

            $('#confirm_type').parent().append(
                '<ul class="list-item" id="newconfirm_type" name="confirm_type"></ul>');
            $('#confirm_type option').each(function () {
                $('#newconfirm_type').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#confirm_type').remove();
            $('#newconfirm_type').attr('id', 'confirm_type');
            $('#confirm_type li').first().addClass('init');
            $("#confirm_type").on("click", ".init", function () {
                $(this).closest("#confirm_type").children('li:not(.init)').toggle('slow');
            });

            $('#hour_appointment').parent().append(
                '<ul class="list-item" id="newhour_appointment" name="hour_appointment"></ul>');
            $('#hour_appointment option').each(function () {
                $('#newhour_appointment').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#hour_appointment').remove();
            $('#newhour_appointment').attr('id', 'hour_appointment');
            $('#hour_appointment li').first().addClass('init');
            $("#hour_appointment").on("click", ".init", function () {
                $(this).closest("#hour_appointment").children('li:not(.init)').toggle('slow');
            });

            var allOptions = $("#course_type").children('li:not(.init)');
            $("#course_type").on("click", "li:not(.init)", function () {
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#course_type").children('.init').html($(this).html());
                allOptions.toggle('slow');
            });

            var FoodOptions = $("#confirm_type").children('li:not(.init)');
            $("#confirm_type").on("click", "li:not(.init)", function () {
                FoodOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#confirm_type").children('.init').html($(this).html());
                FoodOptions.toggle('slow');
            });

            var AppointmentOptions = $("#hour_appointment").children('li:not(.init)');
            $("#hour_appointment").on("click", "li:not(.init)", function () {
                AppointmentOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#hour_appointment").children('.init').html($(this).html());
                AppointmentOptions.toggle('slow');
            });
        })(jQuery);

    </script>
</body>
<script>
    $(document).ready(function () {
        $('#myTables').DataTable();
    });

</script>
<script>
    function loadStock() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                //alert(data);
                var table;
                var a = JSON.parse(data);
                //  alert(a[0].ProductSerial);
                table = $('#searchProductTable').DataTable();
                table.clear();
                $.each(a, function (i, item) {

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].color, a[i].ChasisNumber, a[i].EngineNumber,
                        a[i].ActualPurchsePrice, a[i].TotalCost, a[i].StatusInStock, a[i].Remarks
                    ]);
                });
                table.draw();
            }
        };

        xhttp.open("GET", "./getAvailableProducts/", true);
        xhttp.send();
    }


    $(document).ready(function () {

        // code to read selected table row cell data (values).
        $("#searchProductTable").on('click', 'tr', function () {
            // get the current row



            var table = document.getElementById("ProductSaleTable");

            document.getElementById("PID").value = this.cells[0]
                .innerText; // get current row 1st TD value
            document.getElementById("ProductName").value = this.cells[1].innerText;
            document.getElementById("color").value = this.cells[2].innerText;
            document.getElementById("ChasisNumber").value = this.cells[3].innerText;

            document.getElementById("EngineNumber").value = this.cells[4].innerText;
            document.getElementById("Status").value = this.cells[7].innerText;
            document.getElementById("description").value = this.cells[8].innerText;
            document.getElementById("TotalPrice").value = this.cells[5].innerText;
            document.getElementById("TotalCost").value = this.cells[6].innerText;
            document.getElementById("Discount").value = "0";


            alert(this.cells[0].innerText);
        });
        calc();
    });

    function calc() {
    
        var tot = document.getElementById("TotalPrice").value;
        var dis = document.getElementById("Discount").value;
        var tax = Number(tot)*0.17;

        var netTot = Number(tot) + Number(tax) - Number(dis);

        document.getElementById("NetTotal").value = netTot;
        document.getElementById("amountPaid").value = netTot;
        document.getElementById("tax").value = tax;

        calcRemainingAmount();


    }

    function calcRemainingAmount() {

        var tot = document.getElementById("NetTotal").value;
        var ap = document.getElementById("amountPaid").value;
        var rem = Number(tot) - Number(ap);
        document.getElementById("amountRemaining").value = rem;


    }



    function generateSale() {


        var pid = document.getElementById("PID").value;
        var totwT = document.getElementById("TotalPrice").value;
        var discount = document.getElementById('Discount').value;
        var netTotal = document.getElementById('NetTotal').value;
        var amp = document.getElementById('amountPaid').value;
        var rmb = document.getElementById("amountRemaining").value;
        var CID = document.getElementById("CID").value;
        var paidTo = document.getElementById("paidTo").value;
        var AID = document.getElementById("slctAccounts").value;

        var customerName = document.getElementById("CustomerName").value;
        var CNIC = document.getElementById("CID").value;
        var address = document.getElementById('Address').value;
        var contact = document.getElementById('contact').value;
        var fatherName = document.getElementById('fatherName').value;

        var engineNo = document.getElementById("EngineNumber").value;
        var chassisNo = document.getElementById('ChasisNumber').value;
        var color = document.getElementById('color').value;
        var description = document.getElementById('description').value;
        var productName = document.getElementById('ProductName').value;
       
        order = [pid, totwT, discount, netTotal, amp, rmb,
                CID, paidTo, AID, customerName, CNIC, address, 
                contact, fatherName, engineNo, chassisNo, color, description, productName];

        var array = JSON.stringify(order);

        alert(array);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Invoice =" + this.responseText + " is generated");


            }
        };
        // var MenuID=$('#Menus').find(":selected").val();
        xhttp.open("GET", "./addSales/" + array, true);
        xhttp.send();
        alert("Generated");
    };

</script>
<script>
    
    function fetchAccounts() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("slctAccounts").innerHTML = this.response;
                $('#slctAccounts').selectpicker('refresh');
            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getAccountHeads/", true);

        xhttp.send();
        loadAllCustomers();


    }

</script>
<script>
    function validPlz() {

        var PID = document.getElementById("PID").value;
        var ProductName = document.getElementById("ProductName").value;
        var ChasisNumber = document.getElementById("ChasisNumber").value;
        var EngineNumber = document.getElementById("EngineNumber").value;

        var Status = document.getElementById("Status").value;

        var TotalPrice = document.getElementById("TotalPrice").value;
        var Discount = document.getElementById("Discount").value;
        var NetTotal = document.getElementById("NetTotal").value;

        var CustomerName = document.getElementById("CustomerName").value;
        var CID = document.getElementById("CID").value;
        var Address = document.getElementById("Address").value;
        var contact = document.getElementById("contact").value;
        var fatherName = document.getElementById("fatherName").value;
        var amountPaid = document.getElementById("amountPaid").value;
        var amountRemaining = document.getElementById("amountRemaining").value;
        

        if (PID == "") {
            // alert("Product Id Field Must Be Valid");
            document.getElementById("PID").focus();
        } else if (ProductName == "") {
            // alert("Product Name Field Must Be Valid");
            document.getElementById("ProductName").focus();
        } else if (ChasisNumber == "") {
            // alert("Chasis Number Field Must Be Valid");
            document.getElementById("ChasisNumber").focus();


        } else if (EngineNumber == "") {
            // alert("Engine Number Field Must Be Valid");
            document.getElementById("EngineNumber").focus();


        } else if (Status == "") {
            // alert("Status Must Be Mentioned");
            document.getElementById("Status").focus();


        } else if (TotalPrice == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("Status").focus();

            document.getElementById("TotalPrice").focus();


        } else if (isNaN(TotalPrice)) {
            alert("Total Price Field Must Be Numeric");
            document.getElementById("TotalPrice").value = "";



        } else if (Discount == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("Discount").focus();


        } else if (isNaN(Discount)) {
            alert("Discount Field Must Be Numeric");
            document.getElementById("Discount").value = "";


        } else if (NetTotal == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("NetTotal").focus();


        } else if (CustomerName == "") {
            // alert("Customer Name Field Must Be Valid");
            document.getElementById("CustomerName").focus();


        } else if (CID == "") {
            // alert("Customer ID Field Must Be Valid");
            document.getElementById("CID").focus();


        } else if (Address == "") {
            // alert("Address  Must Be Mentioned");
            document.getElementById("Address").focus();


        } else if (contact == "") {
            // alert("Contact Field Must Be Valid");
            document.getElementById("contact").focus();


        } else if (isNaN(contact)) {

            alert("Contact Field Must Be Number");
            document.getElementById("contact").value = "";


        } else if (fatherName == "") {
            // alert("Manager Name Must Be Mentioned");
            document.getElementById("fatherName").focus();


        } else if (amountPaid == "") {
            // alert("Amount Paid  Must Be Mentioned");
            document.getElementById("amountPaid").focus();


        } else if (amountRemaining == "") {
            // alert("Amount Remaining  Must Be Mentioned");
            document.getElementById("amountRemaining").focus();


        } else {
            generateSale();

        }


    }

    $("body").on('keypress', function (event) {
        if (event.keyCode === 13) {
            validPlz();
        } else {}
    })

    function loadAllCustomers() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("CustomerName").innerHTML =
                this.responseText;
            $('#CustomerName').selectpicker('refresh');

        }
    };

    xhttp.open("GET", "./getCustomerNames", true);
    xhttp.send();
    }

    function getCurrentCustomerInfo() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            var a = JSON.parse(data);
            //document.getElementById("CID").value = a[0].CustomerID;
            document.getElementById("fatherName").value = a[0].FatherName;
            document.getElementById("CID").value = a[0].CNIC;
            document.getElementById("contact").value = a[0].Contect;
            document.getElementById("Address").value = a[0].Address;




        } else {
            //alert( this.responseText);
        }
    }
    var CustomerID = $('#CustomerName').find(":selected").val();

    xhttp.open("GET", "./getCustomersInfo/" + CustomerID, true);
    xhttp.send();


    }

    function addCustomer() {

    var customerName = document.getElementById("addCustomerName").value;
    //	alert("It is working"+CustomerName);
    var fatherName = document.getElementById("addFatherName").value;
    //	alert("It is working"+password);
    var contact = document.getElementById("addContact").value;
    //alert("It is working"+CustomerContact);
    var profession = document.getElementById("addProfession").value;
    //alert("It is working"+CustomerProfession);
    var balance = document.getElementById("addBalance").value;
    //alert("It is working"+CustomerBalance);
    var address = document.getElementById("addAddress").value;
    //alert("It is working"+CustomerAddress);
    var comments = document.getElementById("addComments").value;
    //alert("It is working"+CustomerComments);
    var cnic = document.getElementById("addCNIC").value;
    //alert("It is working"+CustomerComments);
    var category = $('#course_type').find(":selected").val();
    //alert("It is working"+CustomerComments);
    var newCustomer = [customerName, fatherName, contact, profession, balance, address,
    comments, cnic, category
    ];

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    var EC = JSON.stringify(newCustomer);
    alert(EC);
    xhttp.open("GET", "./insertCustomer/" + EC, true);
    xhttp.send();


    }

    function modalValidation() {
        var tel = document.getElementById("tel").value;
        var Balance = document.getElementById("Balance").value;

        if (tel == "") {
            document.getElementById("tel").focus();
        } else if (isNaN(tel)) {
            alert("Contact Should Be A Number");
        } else if (Balance == "") {
            document.getElementById("Balance").focus();
        } else if (isNaN(Balance)) {
            alert("Balance Field Should Be  Numeric");
        } else {
            alert('Okay');
        }
    }

</script>
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
