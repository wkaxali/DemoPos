<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}"> -->



    <style>
        .leftBtns .btn {
            color: #333333;
            background: none !important;
            font-size: 15px;
            border: 1px solid #e61d2f;
            margin: 10px 5px;
            font-weight: bold;

            -webkit-box-shadow: 10px 10px 5px -10px gray;
            -moz-box-shadow: 10px 10px 5px -10px gray;
            box-shadow: 10px 10px 5px -10px gray;
        }



        .leftBtns .btn:hover {
            color: #ffffff;
            background: #e61d2f !important;
            border: 1px solid #e61d2f;
            transition: .1s;
        }

        .leftBtns .btn-myPrimary-add {
            background-color: #e61d2f;

            width: 110px;
        }

        .leftBtns .btn-myPrimary {
            background-color: #e61d2f;

            /* width: 97px; */
            width: 110px;


        }

        .leftBtns .btn-mysecondary {
            background-color: #0a549d;
            /* width: 97px; */
            width: 110px;



        }

        .leftBtns .btn {
            margin: 5px 0px;
        }

        .labels {
            margin-left: 12px;
            font-weight: bold;
            font-size: 20px;
            color: #0a549d;
        }

        body {
            margin: 0;
            padding: 0;
        }


        .btn-my {
            border: 1px solid #3498db;
            background: none;
            padding: 10px 20px;
            font-size: 20px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
        }

        .btn1 {
            color: #3498db;
            border-radius: 10px;
        }

        .btn1:hover {
            color: #333;
        }

        .btn-my::before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 0%;
            background: #3498db;
            z-index: -1;
            transition: 0.8s;
        }

        .btn1::before {
            top: 0;
            border-radius: 0 0 50% 50%;
        }

        .btn1:hover::before {
            height: 180%;
        }

        .nav-pills {
            float: right !important;
            background-color: #0a549d;
            border-radius: 15px;
        }

        .clearmain {
            clear: both;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #fff;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #e61d2f;
            border-radius: 15px;
            padding: 10px;

        }

        i::before {
            margin-right: 30px;
        }

        h4,
        h5,
        h6,
        h1,
        h2,
        h3 {
            margin: 0;
        }

        ul,
        ol {
            margin: 0;
        }

        p {
            margin: 0;
        }

        html,
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 100%;
            background: #fff;

        }

        a {
            text-decoration: none;
        }

        a:hover {
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            text-decoration: none;
        }

        .fixed {
            position: fixed;
            top: 0;
            width: 100%;
            margin: 0 auto;
            z-index: 1;
            background: #fff;
        }

        /*--header main start here--*/
        .page-container {
            min-width: 1260px;
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: auto;
            margin: 0px auto;
        }

        .left-content {
            float: right;
            width: 86.5%;
        }

        .page-container.sidebar-collapsed {
            transition: all 100ms linear;
            transition-delay: 300ms;

        }

        .page-container.sidebar-collapsed .left-content {
            float: right;
            width: 96%;
        }

        .page-container.sidebar-collapsed-back {
            transition: all 100ms linear;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 83%;
        }

        .page-container.sidebar-collapsed .sidebar-menu {
            width: 65px;
            transition: all 100ms ease-in-out;
            transition-delay: 300ms;
        }

        .page-container.sidebar-collapsed-back .sidebar-menu {
            width: 250px;
            transition: all 100ms ease-in-out;
        }

        .page-container.sidebar-collapsed .sidebar-icon {
            transition: all 300ms ease-in-out;
            color: #fff;
            background: #e61d2f;

        }

        .page-container.sidebar-collapsed .logo {
            box-sizing: border-box;
            transition: all 100ms ease-in-out;
            transition-delay: 300ms;
            left: 18px;

        }

        .page-container.sidebar-collapsed-back .logo {
            width: 100%;
            height: 60px;
            box-sizing: border-box;
            transition: all 100ms ease-in-out;
        }

        .page-container.sidebar-collapsed #logo {
            opacity: 0;
            transition: all 200ms ease-in-out;
            display: none;
        }

        .page-container.sidebar-collapsed .down {
            display: none;
        }

        .page-container.sidebar-collapsed-back #logo {
            opacity: 1;
            transition: all 200ms ease-in-out;
            transition-delay: 300ms;
        }

        .page-container.sidebar-collapsed #menu span {
            opacity: 0;
            transition: all 50ms linear;

        }

        .page-container.sidebar-collapsed-back #menu span {
            opacity: 1;
            transition: all 200ms linear;
            transition-delay: 300ms;
        }

        .sidebar-menu {
            position: fixed;
            float: left;
            width: 250px;

            top: 0px;
            left: 0px;
            bottom: 0;
            background-color: #202121;
            color: #aaabae;
            z-index: 999;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #menu {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-bottom: 20px;
        }

        #menu li {
            position: relative;
            margin: 0;
            font-size: 10px;
            word-spacing: 2px;
            padding: 0;
            font-family: 'Roboto', sans-serif !important;

        }

        /* #menu li ul {
            opacity: 0;
            height: 0px;
        } */

        #menu li a {
            position: relative;
            display: block;
            padding: 13px auto;
            color: #FFFFFF;
            white-space: nowrap;
            z-index: 2;
            font-size: 14px;
            word-spacing: 2px;

            padding-right: 30px;
            font-family: 'Carrois Gothic', sans-serif;
        }

        #menu li a {
            padding: 9px 20px;
            transition: .4s !important;

        }

        #menu li a:hover {
            background-color: ;
            transition: color 250ms ease-in-out, background-color 250ms ease-in-out;

        }

        .fa-angle-right {
            transition: .5s;
        }

        #menu li a:hover .fa-angle-right {
            transform: rotate(180deg);
        }

        /* #menu li ul:hover> .fa-angle-right {
            transform: rotate(180deg);
        } */

        #menu li a:hover span {

            padding-left: 13px;
            transition: .4s !important;
        }

        #menu li.active>a {
            background-color: #2b303a;
            color: #ffffff;
        }

        #menu ul li {
            background-color: #202121;
            padding: 2px 0px;
        }

        #menu ul {
            list-style-type: none;
            margin: 0;
            padding-left: 46px;
        }

        /* #menu li ul {
            position: absolute;
            visibility: hidden;
            left: 100%;
            top: 5px;

            background-color: #202121;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.1s linear;
            border-top: 1px solid rgba(69, 74, 84, 0.7);
        } */

        /* #menu li:hover>ul {
            visibility: visible;
            opacity: 1;
        }

        #menu li li ul {
            right: 100%;
            visibility: hidden;
            top: -1px;
            opacity: 0;
            transition: opacity 0.1s linear;
        }

        #menu li li:hover ul {
            visibility: visible;
            opacity: 1;
        } */

        #menu .fa {
            margin-bottom: 10px;
            font-size: 1.5em;
            display: block;
        }

        .menu {
            padding: 4.2em 0em 0em 0em;
        }

        /*----*/
        .page-container.sidebar-collapsed .left-content .fixed {
            width: 97%;
        }

        /*----*/
        .logo {
            width: 22%;
            box-sizing: border-box;
            position: absolute;
            top: 20px;
            left: 170px;
        }

        .sidebar-icon {
            position: relative;
            float: left;
            text-align: center;
            line-height: 1;
            font-size: 18px;
            padding: 6px 8px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -o-border-radius: 3px;
            color: #FFF;
            background-clip: padding-box;
            background: #e61d2f;
        }

        .sidebar-icon:hover {
            color: #FFF;
        }

        .fa-html5 {
            color: #fff;
            margin-left: 50px;
        }

        /*--nav strip start here--*/
        .header-main {
            background: #fff;
            padding: 1em 2em;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }

        .header-right {
            float: right;
            width: 50%;
        }

        .header-left {
            float: left;
            width: 45%;
        }

        .logo-name {
            float: left;
            width: 30%;
            margin: 0% 3% 0% 2%;
        }

        .logo-name h1 {
            font-size: 2.5em;
            color: #FC8213;
            margin: 0em;
            font-weight: 700;
            text-decoration: none;
        }

        .logo-name h1 a {
            color: #910048;
        }

        .logo-name a {
            display: inline-block;
        }

        /* .nav>li>a:hover,
        .nav>li>a:focus {
            background: none !important;
        } */

        span.logo-clr {
            color: #fdbb30;
        }

        .page-container.sidebar-collapsed-back #menu span.fa.fa-angle-right {
            position: absolute;
            top: 0px;
            right: 20px;
        }

        /*start search*/
        .search-box {
            float: left;
            width: 40%;
            margin-top: 0.5em;
            position: relative;
            z-index: 1;
            display: inline-block;
            border: 2px solid rgb(197, 197, 197);
        }

        .search-box input[type="text"] {
            outline: none;
            background: #fff;
            width: 86%;
            margin: 0;
            z-index: 10;
            font-size: 0.9em;
            color: #7A7B78;
            padding: 0.5em 0.5em;
            border: none;
            -webkit-appearance: none;
            display: inline-block;
        }

        .search-box input[type="submit"] {
            background: url(../images/search.png)no-repeat;
            width: 20px;
            height: 20px;
            display: inline-block;
            vertical-align: text-top;
            border: none;
            outline: none;
        }

        ::-webkit-input-placeholder {
            color: #7A7B78 !important;
        }

        /*--//search-ends --*/
        /*--- Progress Bar ----*/
        .meter {
            position: relative;
        }

        .meter>span {
            display: block;
            height: 100%;

            position: relative;
            overflow: hidden;
        }

        .meter>span:after,
        .animate>span>span {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;

            overflow: hidden;
        }

        .animate>span:after {
            display: none;
        }

        @-webkit-keyframes move {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes move {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 50px 50px;
            }
        }

        .red>span {
            background-color: #65CEA7;
        }

        .nostripes>span>span,
        .nostripes>span:after {
            -webkit-animation: none;
            -moz-animation: none;
            background-image: none;
        }

        /*--- User Panel---*/
        .profile_details_left {
            float: left;
            width: 50%;
        }

        .dropdown-menu {
            box-shadow: 2px 3px 4px rgba(0, 0, 0, .175);
            -webkit-box-shadow: 2px 3px 4px rgba(0, 0, 0, .175);
            -moz-box-shadow: 2px 3px 4px rgba(0, 0, 0, .175);
            border-radius: 0;
        }

        li.dropdown.head-dpdn {
            display: inline-block;
            padding: 1em 0;
            float: left;
        }

        li.dropdown.head-dpdn a.dropdown-toggle {
            margin: 1em 2em;
        }

        ul.dropdown-menu li {
            margin-left: 0;
            width: 100%;
            padding: 0;
            background: #fff;
        }

        .user-panel-top ul {
            padding-left: 0;
        }

        .user-panel-top li {
            float: left;
            margin-left: 15px;
            position: relative;
        }

        .user-panel-top li span.digit {
            font-size: 11px;
            font-weight: bold;
            color: #FFF;
            background: #e64c65;
            line-height: 20px;
            width: 20px;
            height: 20px;
            border-radius: 2em;
            -webkit-border-radius: 2em;
            -moz-border-radius: 2em;
            -o-border-radius: 2em;
            text-align: center;
            display: inline-block;
            position: absolute;
            top: -3px;
            right: -10px;
        }

        .user-panel-top li:first-child {
            margin-left: 0;
        }

        .sidebar .nav-second-level li a.active,
        .sidebar ul li a.active {
            color: #F2B33F;
        }

        li.active a i,
        .act a i {
            color: #F2B33F;
        }

        .custom-nav>li.act>a,
        .custom-nav>li.act>a:hover,
        .custom-nav>li.act>a:focus {
            background-color: #353f4f;
            color: #8BC34A;
        }

        .user-panel-top li a {
            display: block;
            padding: 5px;
            text-decoration: none;
        }

        .header-right i.fa.fa-envelope {
            color: #6F6F6F;
        }

        i.fa.fa-bell {
            color: #6F6F6F;
        }

        i.fa.fa-tasks {
            color: #6F6F6F;
        }

        .user-panel-top li a:hover {
            border-color: rgba(101, 124, 153, 0.93);
        }

        .user-panel-top li a i {
            width: 24px;
            height: 24px;
            display: block;
            text-align: center;
            line-height: 25px;
        }

        .user-panel-top li a i span {
            font-size: 15px;
            color: #FFF;
        }

        .user-panel-top li a.user {
            background: #667686;
        }

        .user-panel-top li span.green {
            background: #a88add;
        }

        .user-panel-top li span.red {
            background: #b8c9f1;
        }

        .user-panel-top li span.yellow {
            background: #bdc3c7;
        }

        /***** Messages *************/
        .notification_header {
            background-color: #FAFAFA;
            padding: 10px 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            margin-bottom: 8px;
        }

        .notification_header h3 {
            color: #6A6A6A;
            font-size: 12px;
            font-weight: 600;
            margin: 0;
        }

        .notification_bottom {
            background-color: rgba(93, 90, 88, 0.07);
            padding: 4px 0;
            text-align: center;
            margin-top: 5px;
        }

        .notification_bottom a {
            color: #6F6F6F;
            font-size: 1em;
        }

        .notification_bottom a:hover {
            color: #6164C1;
        }

        .notification_bottom h3 a {
            color: #717171;
            font-size: 12px;
            border-radius: 0;
            border: none;
            padding: 0;
            text-align: center;
        }

        .notification_bottom h3 a:hover {
            color: #4A4A4A;
            text-decoration: underline;
            background: none;
        }

        .user_img {
            float: left;
            width: 19%;
        }

        .user_img img {
            max-width: 100%;
            display: block;
            border-radius: 2em;
            -webkit-border-radius: 2em;
            -moz-border-radius: 2em;
            -o-border-radius: 2em;
        }

        .notification_desc {
            float: left;
            width: 70%;
            margin-left: 5%;
        }

        .notification_desc p {
            color: #757575;
            font-size: 13px;
            padding: 2px 0;
        }

        .wrapper-dropdown-2 .dropdown li a:hover .notification_desc p {
            color: #424242;
        }

        .notification_desc p span {
            color: #979797 !important;
            font-size: 11px;
        }

        /*---bages---*/
        .header-right span.badge {
            font-size: 10px;
            font-weight: bold;
            color: #FFF;
            background: #FC8213;
            line-height: 10px;
            width: 15px;
            height: 15px;
            border-radius: 2em;
            -webkit-border-radius: 2em;
            -moz-border-radius: 2em;
            -o-border-radius: 2em;
            text-align: center;
            display: inline-block;
            position: absolute;
            top: 20%;
            padding: 2px 0 0;
            left: 54%;
        }

        .header-right span.blue {
            background-color: #337AB7;
        }

        .header-right span.red {
            background-color: #ef553a;
        }

        .header-right span.blue1 {
            background-color: #68AE00;
        }

        i.icon_1 {
            float: left;
            color: #00aced;
            line-height: 2em;
            margin-right: 1em;
        }

        i.icon_2 {
            float: left;
            color: #ef553a;
            line-height: 2em;
            margin-right: 1em;
            font-size: 20px;
        }

        i.icon_3 {
            float: left;
            color: #9358ac;
            line-height: 2em;
            margin-right: 1em;
            font-size: 20px;
        }

        .avatar_left {
            float: left;
        }

        i.icon_4 {
            width: 45px;
            height: 45px;
            background: #F44336;
            float: left;
            color: #fff;
            text-align: center;
            font-size: 1.5em;
            line-height: 44px;
            font-style: normal;
            margin-right: 1em;
        }

        i.icon_5 {
            background-color: #3949ab;
        }

        i.icon_6 {
            background-color: #03a9f4;
        }

        .blue-text {
            color: #2196F3 !important;
            float: right;
        }

        /*---//bages---*/
        /*--Progress bars--*/
        .progress {
            height: 10px;
            margin: 7px 0;
            overflow: hidden;
            background: #e1e1e1;
            z-index: 1;
            cursor: pointer;
        }

        .task-info .percentage {
            float: right;
            height: inherit;
            line-height: inherit;
        }

        .task-desc {
            font-size: 12px;
        }

        .wrapper-dropdown-3 .dropdown li a:hover span.task-desc {
            color: #65cea7;
        }

        .progress .bar {
            z-index: 2;
            height: 15px;
            font-size: 12px;
            color: white;
            text-align: center;
            float: left;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            -ms-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-transition: width 0.6s ease;
            -moz-transition: width 0.6s ease;
            -o-transition: width 0.6s ease;
            transition: width 0.6s ease;
        }

        .progress-striped .yellow {
            background: #f0ad4e;
        }

        .progress-striped .green {
            background: #5cb85c;
        }

        .progress-striped .light-blue {
            background: #4F52BA;
        }

        .progress-striped .red {
            background: #d9534f;
        }

        .progress-striped .blue {
            background: #428bca;
        }

        .progress-striped .orange {
            background: #e94e02;
        }

        .progress-striped .bar {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            -webkit-background-size: 40px 40px;
            -moz-background-size: 40px 40px;
            -o-background-size: 40px 40px;
            background-size: 40px 40px;
        }

        .progress.active .bar {
            -webkit-animation: progress-bar-stripes 2s linear infinite;
            -moz-animation: progress-bar-stripes 2s linear infinite;
            -ms-animation: progress-bar-stripes 2s linear infinite;
            -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite;
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-moz-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-ms-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-o-keyframes progress-bar-stripes {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 40px 0;
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 40px 0;
            }

            to {
                background-position: 0 0;
            }
        }

        /*--Progress bars--*/
        /********* profile details **********/
        ul.dropdown-menu.drp-mnu i.fa {
            margin-right: 0.5em;
        }

        ul.dropdown-menu {
            padding: 0;
            min-width: 230px;
            top: 101%;
        }

        .dropdown-menu>li>a {
            padding: 3px 15px;
            font-size: 1em;
        }

        .profile_details {
            float: right;
        }

        .profile_details_drop .fa.fa-angle-up {
            display: none;
        }

        .profile_details_drop.open .fa.fa-angle-up {
            display: block;
        }

        .profile_details_drop.open .fa.fa-angle-down {
            display: none;
        }

        .profile_details_drop a.dropdown-toggle {
            display: block;
            padding: 0em 3em 0 1em;
        }

        .profile_img span.prfil-img {
            float: left;
        }

        .user-name {
            float: left;
            margin-top: 7px;
            margin-left: 11px;
            height: 35px;
        }

        .profile_details ul li {
            list-style-type: none;
            position: relative;
        }

        .profile_details li a i.fa.lnr {
            position: absolute;
            top: 34%;
            right: 8%;
            color: #68AE00;
            font-size: 1.6em;
        }

        .profile_details ul li ul.dropdown-menu.drp-mnu {
            padding: 1em;
            min-width: 190px;
            top: 122%;
            left: 0%;
        }

        ul.dropdown-menu.drp-mnu li {
            list-style-type: none;
            padding: 3px 0;
        }

        .user-name p {
            font-size: 1em;
            color: #FC8213;
            line-height: 1em;
            font-weight: 700;
        }

        .user-name span {
            font-size: .75em;
            font-style: italic;
            color: #424f63;
            font-weight: normal;
            margin-top: .3em;
        }

        .profile_details ul {
            padding: 0px;
        }

        /*--header strip end here-*/
        /*inner-block--*/
        .inner-block {
            padding: 1em 2em 4em 2em;
        }

        .market-update-block {
            padding: 2em 2em;
            background: #999;
        }

        .market-update-block h3 {
            color: #fff;
            font-size: 2.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .market-update-block h4 {
            font-size: 1.2em;
            color: #fff;
            margin: 0.3em 0em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .market-update-block p {
            color: #fff;
            font-size: 0.8em;
            line-height: 1.8em;
        }

        .market-update-block.clr-block-1 {
            background: #e61d2f;
            margin-right: 0.8em;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .market-update-block.clr-block-2 {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            height: 258px;
        }

        .market-update-block.clr-block-3 {
            background: #13579a;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .market-update-block.clr-block-1:hover {
            background: #e61d2f;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .market-update-block.clr-block-2:hover {
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;

        }

        .market-update-block.clr-block-3:hover {
            background: #13579a;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .market-update-right i.fa.fa-file-text-o {
            font-size: 3em;
            color: #68AE00;
            width: 80px;
            height: 80px;
            background: #fff;
            text-align: center;
            border-radius: 49px;
            -webkit-border-radius: 49px;
            -moz-border-radius: 49px;
            -o-border-radius: 49px;
            line-height: 1.7em;
        }

        .market-update-right i.fa.fa-eye {
            font-size: 3em;
            color: #FC8213;
            width: 80px;
            height: 80px;
            background: #fff;
            text-align: center;
            border-radius: 49px;
            -webkit-border-radius: 49px;
            -moz-border-radius: 49px;
            -o-border-radius: 49px;
            line-height: 1.7em;
        }

        .market-update-right i.fa.fa-envelope-o {
            font-size: 3em;
            color: #337AB7;
            width: 80px;
            height: 80px;
            background: #fff;
            text-align: center;
            border-radius: 49px;
            -webkit-border-radius: 49px;
            -moz-border-radius: 49px;
            -o-border-radius: 49px;
            line-height: 1.7em;
        }

        .market-update-left {
            padding: 0px;
        }

        /*--main page charts strat here--*/
        /*--chart layer-1 left--*/

        .glocy-chart {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
            padding: 2em 1em;
            background: #fff;
        }

        .prograc-blocks {
            padding: 2.2em 2em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        canvas#bar {
            width: 584px !important;
            height: 300px !important;
        }

        h3.tlt {
            font-size: 1.3em;
            margin-bottom: 0.8em;
            font-weight: 700;
            color: #5F5D5D;
            text-transform: uppercase;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--chart-layer1-right start--*/
        .home-progres-main {
            padding-bottom: 9px;
            margin: 0px 0 20px;
        }

        .home-progres-main h3 {
            font-size: 1.3em;
            font-weight: 700;
            color: #5F5D5D;
            text-transform: uppercase;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .home-progress {
            height: 21px;
            margin: 20px 0;
            overflow: hidden;
            background: #e1e1e1;
            z-index: 1;
            cursor: pointer;
            border-radius: 4px;
        }

        .progress-bar1 {
            float: left;
            width: 0;
            height: 100%;
            font-size: 12px;
            line-height: 20px;
            color: #fff;
            text-align: center;
            background-color: #337ab7;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            -webkit-transition: width .6s ease;
            -o-transition: width .6s ease;
            transition: width .6s ease;
        }

        /*--moveing effect prograce bars--*/
        .bar_group__bar.thin::before {
            display: block;
            content: '';
            position: absolute;
            z-index: -1;
        }

        .bar_group__bar.thin::before {
            width: 100%;
            height: 5px;
            border-radius: 0px;
            background: #E4E4E4;
        }

        .bar_group__bar.thin {
            width: 0%;
            height: 5px;
            border-radius: 0px;
            background: #e61d2f;
            margin-bottom: 10px;
            -webkit-transition: width 1s;
            transition: width 1s;
        }

        .b_label,
        .bar_label_min,
        .bar_label_max,
        .b_tooltip span {
            color: #999;
            font-size: 14px;
            margin: .5em 0;
        }

        .bar_group.group_ident-1 {
            padding-right: 0em;
            z-index: 0;
            position: relative;
        }

        .bar_label_max {
            position: absolute;
            right: 0%;
        }

        .bar_label_min {
            position: absolute;
        }

        .b_tooltip {
            -webkit-transition: all 1s;
            transition: all 1s;
            position: relative;
            float: left;
            left: 100%;
            padding: 4px 10px 7px 10px;
            background-color: rgb(74, 74, 73);
            -webkit-transform: translateX(-50%) translateY(-30px);
            -ms-transform: translateX(-50%) translateY(-30px);
            transform: translateX(-50%) translateY(-30px);
            -o-transform: translateX(-50%) translateY(-30px);
            border-radius: 0px;
            line-height: 11px;
        }

        .b_tooltip span {
            color: white;
        }

        .b_tooltip--tri {
            width: 0;
            height: 0;
            position: absolute;
            content: '';
            bottom: -5px;
            left: 0;
            right: 0;
            margin: auto;
            display: block;
            border-style: solid;
            border-width: 5px 5px 0 5px;
            border-color: rgb(74, 74, 73) transparent transparent transparent;
        }

        /*--chartlayer 2 start here--*/
        .chart-layer-2 {
            margin: 2em 0em;
        }

        .chart-layer2-left h3 {
            font-size: 1.3em;
            font-weight: 700;
            color: #5F5D5D;
            text-align: left;
            text-transform: uppercase;
            font-family: 'Carrois Gothic', sans-serif;
        }

        canvas#radar {
            width: 565px !important;
            height: 350px !important;
        }

        /*--maloum grid start here--*/
        .malorum-top {
            background: url(../images/1.jpg)no-repeat;
            background-size: cover;
            min-height: 190px;
        }

        .malorm-bottom {
            padding: 1.5em 2em;
            position: relative;
            background: #fff;
        }

        span.malorum-pro {
            background: url(../images/b3.png)no-repeat;
            width: 95px;
            height: 95px;
            display: inline-block;
            position: absolute;
            top: -60px;
            left: 265px;
            border: 2px solid #ccc;
            border-radius: 63px;
            -webkit-border-radius: 63px;
            -moz-border-radius: 63px;
            -o-border-radius: 63px;
        }

        .malorm-bottom h2 {
            font-size: 1.5em;
            color: #68AE00;
            text-align: center;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .malorm-bottom h4 {
            font-size: 1em;
            margin: 0.5em 0em;
            color: #FC8213;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .malorm-bottom p {
            font-size: 1em;
            color: #000;
            line-height: 1.8em;
            text-align: center;
            width: 70%;
            margin: 0 auto;
        }

        .user-marorm {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .malorm-bottom ul {
            list-style: none;
            padding: 0px;
            text-align: center;
            margin-top: 1em;
        }

        .malorm-bottom ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .malorm-bottom i.fa.fa-facebook {
            font-size: 1em;
            color: #fff;
            background: #3c579e;
            width: 30px;
            height: 30px;
            line-height: 2em;
            transition: 0.5s all;
        }

        .malorm-bottom i.fa.fa-facebook:hover {
            border-radius: 35px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .malorm-bottom i.fa.fa-twitter {
            font-size: 1em;
            color: #fff;
            background: #0f98ce;
            width: 30px;
            height: 30px;
            line-height: 2em;
            transition: 0.5s all;
        }

        .malorm-bottom i.fa.fa-twitter:hover {
            border-radius: 35px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .malorm-bottom i.fa.fa-google-plus {
            font-size: 1em;
            color: #fff;
            background: #ca2429;
            width: 30px;
            height: 30px;
            line-height: 2em;
            transition: 0.5s all;
        }

        .malorm-bottom i.fa.fa-google-plus:hover {
            border-radius: 35px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .malorum-icons li a {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-decoration: none;
            -webkit-transition: all .15s ease;
            transition: all .15s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .malorum-icons a:hover .tooltip {
            display: block;
            visibility: visible;
            opacity: 1;
            -webkit-transform: translate(0, -10px);
            transform: translate(0, -10px);
        }

        .malorum-icons a:active {
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5) inset;
        }

        .malorum-icons .tooltip {
            opacity: 0;
            position: absolute;
            top: -20px;
            left: 50%;
            -webkit-transition: all .15s ease;
            transition: all .15s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .malorum-icons .tooltip span {
            position: relative;
            left: -50%;
            padding: 6px 8px 5px 8px;
            border-radius: 3px;
            color: #fff;
            font-size: 0.7em;
            line-height: 1;
            background: #565656;
            color: #fff;
            letter-spacing: 0.5px;
        }

        .malorum-icons .tooltip span:after {
            position: absolute;
            content: " ";
            width: 0;
            height: 0;
            top: 100%;
            left: 50%;
            margin-left: -8px;
            border: 8px solid transparent;
            border-top-color: #565656;
        }

        .malorum-icons i {
            position: relative;
            top: 1px;
            font-size: 1.5rem;
        }

        /*--chit chart layer start here--*/
        .panel {
            padding: 1em 1em;
            margin-bottom: 0px;
            background: none;
            box-shadow: none;
        }

        .chit-chat-layer1 {
            margin: 2em 0em;
        }

        .chit-chat-heading {
            font-size: 1.2em;
            font-weight: 700;
            color: #5F5D5D;
            text-transform: uppercase;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .work-progres {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
            padding: 1.34em 1em;
            background: #fff;
        }

        /*--geochart start here--*/
        section#charts1 {
            padding: 0px;
        }

        .geo-chart {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
            padding: 1em 1em;
            background: #fff;
        }

        .revenue {
            padding: 1em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        div#geoChart {
            width: 100% !important;
            height: 305px !important;
            border: 4px solid #fff;
        }

        h3#geoChartTitle {
            font-size: 1.3em;
            font-weight: 700;
            color: #5F5D5D;
            text-transform: uppercase;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--climate start here--*/
        .climate-grid1 {
            background: url(../images/climate.jpg)no-repeat;
            min-height: 375px;
            background-size: cover;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .climate-gd1top-left h4 {
            font-size: 1.2em;
            color: #fff;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .climate-gd1top-left h3 {
            font-size: 2em;
            color: #FC8213;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .climate-gd1top-left p {
            font-size: 1em;
            color: #fff;
            line-height: 2em;
        }

        .climate-gd1top-right {
            font-size: 1em;
            color: #fff;
            line-height: 2em;
        }

        .climate-gd1-top {
            padding: 1em 1em;
            margin-bottom: 1.6em;
        }

        .climate-gd1-bottom {
            padding: 1em 0em;
            background: rgba(252, 130, 19, 0.86);
        }

        .cloudy1 h4 {
            font-size: 1em;
            color: #fff;
            margin-bottom: 0.5em;
        }

        .cloudy1 {
            text-align: center;
        }

        i.fa.fa-cloud {
            color: #fff;
            font-size: 2.5em;
            margin: 0.2em 0em 0.2em 0em;
        }

        .cloudy1 h3 {
            font-size: 1.2em;
            color: #fff;
        }

        span.timein-pms {
            font-size: 0.4em;
            vertical-align: top;
            color: #fff;
        }

        span.clime-icon {
            display: block;
            margin-bottom: 0.3em;
        }

        .climate-grid2 {
            background: url(../images/shoppy.jpg)no-repeat bottom;
            min-height: 310px;
            background-size: cover;
            position: relative;
        }

        .shoppy {
            padding: 1.4em 1em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .climate-grid2 ul {
            position: absolute;
            bottom: -10px;
            right: 0px;
            list-style: none;
        }

        .climate-grid2 ul li {
            display: inline-block;
            margin-right: 0.5em;
        }

        .climate-grid2 ul li i.fa.fa-credit-card {
            width: 35px;
            height: 30px;
            display: inline-block;
            background: #337AB7;
            font-size: 1em;
            color: #FFFFFF;
            line-height: 2em;
            text-align: center;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
        }

        .climate-grid2 ul li i.fa.fa-credit-card:hover {
            background: #ec8526;
        }

        .climate-grid2 ul li i.fa.fa-usd {
            width: 35px;
            height: 30px;
            display: inline-block;
            background: #337AB7;
            font-size: 1em;
            color: #fff;
            line-height: 2em;
            text-align: center;
            border-radius: 4px;
        }

        .climate-grid2 ul li i.fa.fa-usd:hover {
            background: #ec8526;
        }

        span.shoppy-rate {
            background: #FC8213;
            margin: 1em 1em;
            width: 70px;
            height: 70px;
            text-align: center;
            border-radius: 49px;
            -webkit-border-radius: 49px;
            -moz-border-radius: 49px;
            -o-border-radius: 49px;
            display: inline-block;
        }

        span.shoppy-rate h4 {
            font-size: 1.2em;
            line-height: 3.5em;
            color: #fff;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .shoppy h3 {
            font-size: 1.2em;
            color: #68AE00;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .popular-brand {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .popular-bran-right {
            background: #FC8213;
            padding: 3em 1em;
        }

        .popular-bran-left {
            background: #fff;
            padding: 2em 1em;
        }

        .popular-bran-left h3 {
            font-size: 1.2em;
            color: #68AE00;
            margin-bottom: 0.2em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .popular-bran-left h4 {
            font-size: 0.9em;
            color: #FC8213;
        }

        .popular-bran-right h3 {
            font-size: 1.3em;
            color: #fff;
            text-align: center;
        }

        .popular-bran-right h3 {
            font-size: 1.55em;
            color: #fff;
            width: 77px;
            height: 77px;
            margin: 0 auto;
            line-height: 2.8em;
            border-radius: 62px;
            -webkit-border-radius: 62px;
            -moz-border-radius: 62px;
            -o-border-radius: 62px;
            border: 3px solid #fff;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .popular-follo-left {
            background: #FDBB30;
        }

        .popular-follow {
            margin-top: 2.35em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .popular-follo-right {
            padding: 3em 1em;
            text-align: center;
        }

        .popular-follo-left {
            background: #68AE00;
            padding: 2.5em 1em;
        }

        .popular-follo-left p {
            font-size: 1em;
            color: #fff;
            line-height: 1.8em;
        }

        .popular-follo-right h4 {
            font-size: 1.5em;
            color: #FC8213;
            margin-bottom: 0.3em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .popular-follo-right h5 {
            font-size: 1em;
            color: #68AE00;
        }

        .popular-bran-left p {
            font-size: 1em;
            color: #000;
            margin-top: 1.3em;
            line-height: 1.5em;
        }

        .climate-gd1top-right p {
            font-size: 1em;
            color: #fff;
        }

        /*--climate end here--*/
        #style-2::-webkit-scrollbar-thumb {

            background-color: #000;
        }

        /*--copyrights start here--*/
        .copyrights {
            padding: 1.5em 1em;
            text-align: center;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .copyrights p {
            font-size: 1em;
            color: #000;
        }

        .copyrights p a {
            color: #000;
        }

        .copyrights p a:hover {
            color: #68AE00;
        }

        /*--grids start here--*/
        .cols-grids h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*-- grids --*/
        .mb40 {
            margin-bottom: 40px !important;
        }

        .demo-grid {
            background: #FFF;
            border: 1px solid #d9d9d9;
            padding: 10px 0;
        }

        code {
            padding: 0;
            background: none;
            color: #B7B7B7;
        }

        .mb40:nth-child(9) {
            margin-bottom: 0 !important;
        }

        .cols-grids {
            padding: 1em 1em;
            margin-bottom: 0px;
            background: none;
            box-shadow: none;
        }

        /*--portlet start here--*/
        .portlet-grid {
            padding: 0px;
            width: 32%;
            float: left;
            margin: 0% 1% 3% 0%;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.18);
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .panel-body {
            padding: 25px;
            font-size: 1em;
        }

        .portlet-grid-page h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--portlet end here--*/
        /*--button start here--*/
        .btn-effcts.panel-widget {
            padding: 1em;
            margin-top: 2em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .btn-main-heading h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .button-heading h4 {
            font-size: 1.8em;
            color: #337AB7;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--button end here--*/
        /*--icons --*/
        .boost-icons-head h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .boost-icons-list ul {
            list-style: none;
            padding: 0px;
        }

        .boost-icons-list ul li {
            float: left;
            width: 19%;
            font-size: 1em;
            margin: 0% 1% 1% 0%;
            padding: 3em 0.5em;
            text-align: center;
            background: #FFFFFF;
            color: #000;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        i.glyphicon {
            display: block;
            text-align: center;
            margin-bottom: 0.5em;
            font-size: 1.5em;
            color: #337AB7;
        }

        /*--//icons--*/
        /*--typography--*/
        .typography {
            font-family: 'Carrois Gothic', sans-serif;
        }

        p.grid1 {
            margin-bottom: 1em;
        }

        .typography .progress {
            height: 20px;
            margin: 20px 0;
        }

        .page-header {
            padding-bottom: 9px;
            margin: 19px 0 12px;
            border: none;
        }

        .grid_3.grid_4 {
            background: #fff;
            padding: 1em 2em;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .typo-buttons {
            background: #fff;
            padding: 1em 2em;
            box-shadow: -1px 0px 2px 1px rgba(0, 0, 0, 0.15);
            margin: 2em 0em;
        }

        .typo-alerts {
            background: #fff;
            padding: 1em 2em;
            box-shadow: -1px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .typo-progresses {
            background: #fff;
            padding: 1em 2em;
            margin: 2em 0em;
            box-shadow: -1px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .typo-wells {
            background: #fff;
            padding: 1em 2em;
            margin-bottom: 2em;
            box-shadow: -1px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .typo-badges {
            background: #fff;
            padding: 1em 2em;
            box-shadow: -1px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .page-header h3 {
            font-size: 2em;
        }

        .typo-wells h3 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        .typo-badges h3 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        .col-lg-6.mb-60 .nav-tabs>li>a {
            background: #ECEAEA;
            color: #565555;
        }

        .tab-content {
            padding: 1em;
        }

        .tab-content p {
            font-size: 1em;
            color: #000;
            line-height: 1.8em;
        }

        .col-lg-6.mb-60 h4 {
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        /*--login page--*/
        .login-main {
            width: 40%;
            margin: 0 auto;
            background: #FFFFFF;
            background-size: cover;
            min-height: 400px;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .login-page {
            padding: 6.5em 0em;
        }

        .login-head {
            background: url(../images/login.jpg)no-repeat;
            background-size: cover;
            min-height: 150px;
        }

        .login-head h1 {
            font-size: 3em;
            color: #FFF;
            padding: 1em 0em 0em 0em;
            text-align: center;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .login-block {
            padding: 4em 2em;
        }

        .login-block input[type="text"],
        .login-block input[type="password"] {
            font-size: 0.9em;
            padding: 10px 20px;
            width: 100%;
            color: #8C8C8C;
            outline: none;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            -ms-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            background: #F5F5F5;
            margin: 0em 0em 1.5em 0em;
        }

        .login-block input[type="submit"] {
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            background: #337AB7;
            width: 100%;
            margin: 0 auto;
            border-radius: 3px;
            padding: 0.5em 1em;
            font-size: 1em;
            display: block;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .login-block input[type="submit"]:hover {
            background: #68AE00;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }

        .forgot-top-grids {
            margin: 1em 0em;
            padding: 0em 1.5em
        }

        .login-block label.checkbox {
            margin-left: 1.3em;
            margin-top: 0;
            font-size: 1em;
            color: #555;
            font-weight: 400;
            display: inline-block;
            cursor: pointer;
        }

        .forgot {
            float: right;
            margin-top: 0.3em;
        }

        .forgot a {
            font-size: 0.75em;
            color: #FC8213;
            font-weight: 600;
            display: block;
            text-transform: uppercase;
        }

        .forgot a:hover {
            color: #68AE00;
        }

        .login-block h2 {
            color: #68AE00;
            font-size: 0.875em;
            margin: 1.2em 0;
            text-align: center;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--*/
        .login-icons ul {
            text-align: center;
        }

        .login-icons ul li {
            display: inline-block;
            margin: 0 0.5em;
        }

        .login-icons ul li a {
            display: block;
        }

        .login-icons i.fa.fa-facebook,
        .login-icons i.fa.fa-twitter,
        .login-icons i.fa.fa-google-plus {
            font-size: 1em;
            color: #FFFFFF;
            width: 33px;
            height: 33px;
            line-height: 34px;
            vertical-align: middle;
            background: #3b5998;
            transition: 0.5s all;
        }

        .login-icons i.fa.fa-facebook:hover,
        .login-icons i.fa.fa-twitter:hover,
        .login-icons i.fa.fa-google-plus:hover {
            border-radius: 35px;
        }

        .login-icons i.fa.fa-twitter {
            background: #55acee;
        }

        .login-icons i.fa.fa-google-plus {
            background: #dc4e41;
        }

        .login-icons i.fa.fa-dribbble {
            background: #ea4c89;
        }

        .forgot-grid {
            float: left;
        }

        .forgot-grid ul {
            margin: 0;
            padding: 0px;
        }

        .forgot-grid ul li {
            list-style: none;
            display: inline-block;
        }

        .forgot-grid ul li input[type="checkbox"] {
            display: none;
        }

        .forgot-grid ul li input[type="checkbox"]+label {
            position: relative;
            padding-left: 31px;
            color: #FC8213;
            display: inline-block;
            cursor: pointer;
            font-size: .75em;
            font-weight: 600;
            text-transform: uppercase;
        }

        .forgot-grid ul li input[type="checkbox"]+label span:first-child {
            width: 17px;
            height: 17px;
            display: inline-block;
            border: 2px solid #FC8213;
            position: absolute;
            left: 0;
            bottom: 4px;
        }

        .forgot-grid ul li input[type="checkbox"]:checked+label span:first-child:before {
            content: "";
            background: url(../images/tick.png)no-repeat 1px -1px;
            position: absolute;
            left: 1px;
            top: 2px;
            font-size: 10px;
            width: 10px;
            height: 10px;
        }

        .login-block h3 {
            font-size: 1em;
            color: #000;
            text-align: center;
            margin-top: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .login-block h3 a {
            color: #337AB7;
        }

        .login-block h3 a:hover {
            color: #FC8213;
        }

        .login-block h5 {
            font-size: 1em;
            text-align: right;
            margin-top: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .login-block h5 a {
            color: #FC8213;
            text-decoration: underline;
        }

        .login-block h5 a:hover {
            color: #68AE00;
            text-decoration: underline;
        }

        /*--login page end here--*/
        /*--signup page start here--*/
        .signup-page-main {
            padding: 9em 0em;
        }

        .signup-main {
            width: 40%;
            margin: 0 auto;
            background: #FFFFFF;
            background-size: cover;
            min-height: 400px;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .signup-head {
            background: url(../images/login.jpg)no-repeat;
            background-size: cover;
            min-height: 150px;
        }

        .signup-head h1 {
            font-size: 3em;
            color: #FFF;
            padding: 1em 0em 0em 0em;
            text-align: center;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .signup-block {
            padding: 4em 2em;
        }

        .signup-block input[type="text"],
        .signup-block input[type="password"] {
            font-size: 0.9em;
            padding: 10px 20px;
            width: 100%;
            color: #686967;
            outline: none;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            -ms-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            background: #F5F5F5;
            margin: 0em 0em 1.5em 0em;
        }

        .signup-block input[type="submit"] {
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            background: #337AB7;
            width: 100%;
            margin: 0 auto;
            border-radius: 3px;
            padding: 0.5em 1em;
            font-size: 1em;
            display: block;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .signup-block input[type="submit"]:hover {
            background: #68AE00;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }

        .sign-down h4 {
            font-size: 1em;
            color: #000;
            text-align: center;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .sign-down h4 a {
            font-size: 1em;
            color: #000;
            text-align: center;
            margin-top: 1em;
            display: inline-block;
            ;
        }

        .sign-down h4 a:hover {
            color: #68AE00;
        }

        .sign-down h5 {
            font-size: 1em;
            text-align: center;
            margin-top: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .sign-down h5 a {
            color: #337AB7;
            text-decoration: underline;
        }

        .sign-down h5 a:hover {
            color: #68AE00;
        }

        /*--signup page end here--*/
        /*--maps start here--*/
        .popin {
            background: #fff;
            padding: 15px;
            box-shadow: 0 0 20px #999;
            border-radius: 2px;
        }

        .map-main-page h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        #map1a,
        #panorama {
            height: 300px;
            background: #6699cc;
        }

        .map-system {
            margin-bottom: 2em;
        }

        /*--maps end here--*/
        /*--balank page start here--*/
        .blank {
            min-height: 600px;
        }

        .blank h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .blankpage-main {
            padding: 2em 2em;
            background: #fff;
            margin-top: 4em;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .blankpage-main p {
            font-size: 1.1em;
            color: #000;
            line-height: 1.8em;
        }

        /*--blank page end here--*/
        /*--charts start here--*/
        .dygno h2 {
            font-size: 1.5em;
            color: #000;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .line-chart {
            padding: 2em 2em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .polararea {
            background: #fff;
            padding: 2em 2em;
            text-align: center;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .line-chart h3 {
            font-size: 1.5em;
            color: #000;
            font-family: 'Carrois Gothic', sans-serif;
            margin-bottom: 0.5em;
        }

        .chart-other h3 {
            font-size: 1.5em;
            color: #000;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .polararea h3 {
            font-size: 1.5em;
            color: #000;
            text-align: left;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .dygno {
            padding: 2em 2em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .chart-other {
            padding: 2em 2em;
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        canvas#line {
            width: 560px !important;
            height: 300px !important;
        }

        canvas#polarArea {
            width: 400px !important;
            height: 270px !important;
        }

        .chart-blo-1 {
            padding-bottom: 2em;
        }

        canvas#pie {
            width: 470px !important;
            height: 270px !important;
        }

        /*--charts end here--*/
        /*--error page start here--*/
        .error-404 {
            text-align: center;
        }

        .error-404 h2 {
            font-size: 6em;
            color: #63C5CA;
        }

        .error-404 h2 {
            font-size: 3em;
            color: #FC8213;
            margin: 0.5em 0em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .error-404 a {
            font-size: 1em;
            color: #fff;
            margin-top: 2em;
            background: #68AE00;
            padding: 0.5em 1em;
            display: inline-block;
        }

        .error-404 a:hover {
            background: #337AB7;
        }

        .error-404 {
            min-height: 620px;
            margin-top: 2em;
        }

        .error-right h4 {
            font-size: 1.3em;
            color: #000;
        }

        /*--inbox start here--*/
        .float-left {
            float: left;
            width: 40%;
        }

        .float-right {
            float: right;
            width: 50%;
        }

        .btn.btn_1.btn-default.mrg5R {
            float: left;
            width: 15%;
            margin: 0% 5% 0% 0%;
        }

        .mailbox-content {
            background: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        table.table.tab-border {
            border: 1px solid #D4D4D4;
        }

        .mail-toolbar.clearfix {
            padding: 1em 1em;
        }

        .dropdown-inbox {
            float: right;
            width: 80%;
        }

        .hidden-xs i.fa.fa-star.icon-state-warning {
            color: #FC9513;
        }

        .hidden-xs i.fa.fa-star {
            color: #999;
        }

        .hidden-xs i.fa.fa-star:hover {
            color: #FC9513;
        }

        .btn-group.m-r-sm.mail-hidden-options {
            margin: 0em 1em;
        }

        .mail-profile {
            background: #68AE00;
            padding: 1em 1em;
        }

        .mail-profile {
            background: #FC8213;
            padding: 1em 1em;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .mail-pic {
            float: left;
            width: 30%;
        }

        .mailer-name {
            float: right;
            width: 70%;
            margin-top: 1.4em;
        }

        .mailer-name h5 {
            font-size: 1.1em;
            margin-bottom: 0.3em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .mailer-name h5 a {
            color: #fff;
        }

        .mailer-name h6 {
            font-size: 0.8em;
            margin-bottom: 0.3em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .mailer-name h6 a {
            color: #fff;
        }

        .mailer-name h6 a:hover {
            color: #000;
        }

        .compose-block {
            padding: 1.5em 1em;
            text-align: center;
            background: #DEDEDE;
        }

        .compose-block a {
            font-size: 1em;
            color: #fff;
            background: #68AE00;
            padding: 0.5em 1.5em;
            border-radius: 3px;
            display: inline-block;
        }

        .compose-block a:hover {
            background: #337AB7;
        }

        .compose-bottom ul {
            list-style: none;
            padding: 0px;
        }

        .compose-bottom ul li a {
            padding: 1em 1em;
            background: #EAEAEA;
            display: block;
            font-size: 1em;
            color: #797878;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .compose-bottom ul li a.hilate {
            background: #C5C5C5;
        }

        .compose-bottom ul li a:hover {
            background: #C5C5C5;
        }

        .compose-bottom i.fa.fa-inbox {
            font-size: 1.1em;
            margin-right: 12px;
            color: #797878;
        }

        .compose-bottom i.fa.fa-envelope-o {
            font-size: 1.1em;
            margin-right: 12px;
            color: #797878;
        }

        .compose-bottom i.fa.fa-star-o {
            font-size: 1.1em;
            margin-right: 12px;
            color: #797878;
        }

        .compose-bottom i.fa.fa-pencil-square-o {
            font-size: 1.1em;
            margin-right: 12px;
            color: #797878;
        }

        .compose-bottom i.fa.fa-trash-o {
            font-size: 1.1em;
            margin-right: 12px;
            color: #797878;
        }

        ul.nav.tabs li a span {
            background: #DE3939;
            border-radius: 15px;
            color: #fff;
            font-size: 0.9em;
            text-align: center;
            width: 17px;
            height: 17px;
            display: inline-block;
            float: right;
        }

        .inbox h2 {
            font-size: 2em;
            color: #68AE00;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--inbox end here--*/
        /*--inbox details--*/
        .compose-right .inbox-details-heading {
            padding: 0.8em 2em;
            background: #E4E4E4;
        }

        .compose-right .inbox-details-body {
            padding: 2em;
        }

        .compose-right .alert.alert-info {
            padding: 10px 20px;
            font-size: 0.9em;
            color: #fff;
            background-color: #337AB7;
            border-color: rgba(51, 122, 183, 0.82);
            border-radius: inherit;
        }

        .compose-right .form-group {
            margin: .5em 0;
        }

        .compose-right .btn.btn-file {
            position: relative;
            overflow: hidden;
            border-radius: inherit;
            cursor: pointer;
        }

        .inbox-details-default {
            background: #fff;
            font-family: 'Carrois Gothic', sans-serif;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
        }

        .compose-right .btn.btn-file>input[type='file'] {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            outline: none;
            background: white;
            cursor: pointer;
            display: inline-flex;
            width: 100%;
            padding: 0.4em;
        }

        .compose-right p.help-block {
            display: inline-block;
            margin-left: 0.5em;
            font-size: 0.9em;
            color: #6F6F6F;
        }

        .inbox-details-body input[type="text"] {
            border: 1px solid #ccc;
            padding: 5px 8px;
            color: #616161;
            background: #fff;
            box-shadow: none !important;
            width: 100%;
            font-size: 0.85em;
            font-weight: 300;
            height: 40px;
            border-radius: 0;
            -webkit-appearance: none;
            resize: none;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .inbox-details-body textarea {
            border: 1px solid #ccc;
            padding: 5px 8px;
            color: #616161;
            background: #fff;
            box-shadow: none !important;
            width: 100%;
            font-size: 0.85em;
            font-weight: 300;
            height: 14em;
            border-radius: 0;
            -webkit-appearance: none;
            resize: none;
            margin-bottom: 1em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .compose-right input[type="submit"] {
            font-size: 0.9em;
            background-color: #68AE00;
            border: none;
            color: #fff;
            padding: 0.8em 1.5em;
            margin-top: 1em;
            outline: none;
        }

        .compose-right input[type="submit"]:hover {
            background-color: #FC8213;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .compose-right {
            padding: 0px;
        }

        /*--inbox details--*/
        /*--product start here--*/
        .product-items {
            border: 1px solid #ccc;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
            margin-bottom: 3em;
        }

        .pro-head h2 {
            font-size: 2em;
            color: #68AE00;
            margin: 0em 0em 1em 0.4em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .produ-cost {
            padding: 0.8em 1.5em;
            background: #337AB7;
        }

        .produ-cost h4 {
            font-size: 1.2em;
            color: #fff;
            margin-bottom: 0.5em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .produ-cost h5 {
            font-size: 1em;
            color: #fff;
            font-family: 'Carrois Gothic', sans-serif;
        }

        /*--light-box--*/
        .project-eff:hover span.rollover1 {
            background: url(../images/arrow.png) center no-repeat;
            width: 300px;
            height: 215px;
            cursor: pointer;
            display: block;
            position: absolute;
            z-index: -9999px;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .project-eff {
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            position: relative;
        }

        /*--product end here--*/
        /*--prices start here--*/
        .prices-head h2 {
            font-size: 2em;
            color: #68AE00;
            margin: 0em 0em 1em 0.4em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .price-list ul {
            padding: 0px;
            list-style: none;
        }

        .price-gd-top {
            background: #78A239;
            text-align: center;
            border-radius: 5px 5px 0px 0px;
        }

        .price-gd-top h4 {
            font-size: 1.8em;
            color: #fff;
            padding: 0.4em 1em;
            background: #467501;
            border-radius: 5px 5px 0px 0px;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .price-gd-top h3 {
            padding: 0.4em 0em;
            font-size: 3.3em;
            color: #fff;
            font-family: 'Carrois Gothic', sans-serif;
        }

        span.usa-dollar {
            font-size: 0.4em;
            vertical-align: top;
        }

        span.per-month {
            font-size: 0.4em;
        }

        .price-gd-top h5 {
            font-size: 1em;
            color: #fff;
            padding: 0.2em 0em 0.8em 0em;
            font-family: 'Carrois Gothic', sans-serif;
        }

        .price-gd-bottom {
            background: #fff;
            text-align: center;
            padding: 1em 0em;
        }

        .price-list ul li {
            padding: 0.5em 0em;
            font-size: 1em;
            color: #545454;
        }

        .price-selet {
            padding: 1em 0em;
            text-align: center;
            background: #78A239;
            border-radius: 0px 0px 5px 5px;
        }

        .price-selet a {
            font-size: 1.1em;
            color: #fff;
            display: block;
        }

        .price-selet a {
            font-size: 1.1em;
            color: #fff;
            display: block;
        }

        .price-grid {
            margin-bottom: 3em;
        }

        .pric-clr1 h4 {
            background: #09375F;
        }

        .pric-clr1 {
            background: #1A63A0;
        }

        .pric-clr3 h4 {
            background: #CC660E;
        }

        .pric-clr3 {
            background: #E07D28;
        }

        .price-block {
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.15);
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        .price-block:hover {
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            z-index: 1;
        }

        a.popup-with-zoom-anim {
            outline: none;
        }

        /*--pricing-grids--*/

        #small-dialog h4 {
            margin: 10px 0;
            font-size: 1.5em;
            color: #337AB7;
            font-family: 'Carrois Gothic', sans-serif;
        }

        #small-dialog,
        #small-dialog1,
        #small-dialog2,
        #small-dialog3,
        #small-dialog4,
        #small-dialog5 {
            background: white;
            padding: 10px 0 10px 0;
            text-align: left;
            max-width: 629px;
            margin: 40px auto;
            position: relative;
            text-align: center;
            border: 8px solid #68AE00;
            height: 475px;
            border-radius: 5px;
        }

        /*---start-pricing-tabels-----*/
        .payment-online-form-left {}

        form li {
            list-style: none;
        }

        form ul {
            padding: 0;
        }

        h4.payment-head {
            font-size: 1.9em;
            color: #222222;
            padding: 0.5em 0;
            text-align: left;
            float: left;
        }

        .payment-online-form-left span {
            vertical-align: sub;
            margin-right: 7px;
        }

        .payment-online-form-left form {
            padding: 0 3%;
        }

        .payment-online-form-left input[type="text"] {
            padding: 0.7em 1em;
            color: #6B6B6A;
            width: 47%;
            margin: 0.5em 0;
            border: 1px solid;
            outline: none;
            transition: border-color 0.3s;
            -o-transition: border-color 0.3s;
            -ms-transition: border-color 0.3s;
            -moz-transition: border-color 0.3s;
            -webkit-transition: border-color 0.3s;
            float: left;
            font-size: 0.9em;
            border-color: #E67C1B;
            -webkit-appearance: none;
        }

        input#datepicker {
            padding: 1em 1em 1em 1em;
        }

        .payment-online-form-left input[type="text"]:hover {
            border-color: #fa6e6f;
        }

        .text-box-dark {}

        .text-box-light {
            background: url(../images/calender.png) no-repeat 95% 50%;
            cursor: pointer;
            position: relative;
        }

        .payment-online-form-left ul li:first-child input[type="text"] {
            margin-right: 5%;
        }

        .payment-online-form-left input[type="text"]:active,
        .payment-online-form-left input[type="text"]:hover {
            border-color: #FC8213;
            color: #6B6B6A;
        }

        .shoppong-pay-1 {
            width: 32px;
            height: 32px;
            display: inline-block;
            background: url(../images/icon.png) no-repeat -111px -26px;
        }

        .payment {
            width: 32px;
            height: 32px;
            display: inline-block;
            background: url(../images/icon.png) no-repeat -154px -23px;
        }

        .payment-date-section {
            background: url(../images/calender.png) no-repeat #fff 50%;
        }

        .payment-sendbtns {
            float: right;
            margin: 1.2em 0 1em;
        }

        .payment-sendbtns input[type="reset"] {
            background: #68AE00;
            padding: 10px 25px;
            border: none;
            color: #FFF;
            cursor: pointer;
            font-size: 0.95em;
            display: inline-block;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            outline: none;
            border-radius: 3px;
        }

        .payment-sendbtns input[type="reset"]:hover {
            color: #FFF;
            background: #FC8213;
        }

        a.order {
            background: #FC8213;
            padding: 10px 25px;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 0.95em;
            display: inline-block;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-appearance: none;
            outline: none;
            text-decoration: none;
            border-radius: 3px;
        }

        a.order:hover {
            color: #fff;
            background: #68AE00;
        }

        .payment-sendbtns li {
            display: inline-block;
        }

        .payment-type li {
            display: inline-block;
        }

        .payment-online-form-right {
            background: #2B2937;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
            border-bottom: 4px solid #1A1822;
        }

        /*-----*/
        .get-started {
            background: url(../images/get.jpg) no-repeat 0px 0px;
            min-height: 400px;
            padding: 8% 0 0 0;
            color: #fff;
            background-size: cover;
            text-align: center;
        }

        .get-started h4 {
            font-size: 1.5em;
            margin-bottom: 1em;
            font-weight: 400;
            padding: 0;
        }

        .get-started h3 {
            font-size: 2.8em;
            font-weight: 400;
            margin-bottom: 1em;
            padding: 0;
        }

        .get-started a {
            padding: 12px 18px;
            border: 1px solid #FF0426;
            font-size: 1.2em;
            color: #fff;
            outline: none;
            font-weight: 400;
            text-decoration: none;
            background: #f94877;
        }

        .get-started a:hover {
            background: transparent;
            border: 1px solid #f94877;
        }

        /*-----*/
        .visa {
            display: inline-block;
            width: 32px;
            height: 32px;
            background: url(../images/icon.png) no-repeat -32px -28px;
        }

        .paypal {
            display: inline-block;
            width: 32px;
            height: 32px;
            background: url(../images/icon.png) no-repeat -71px -26px;
        }

        .payment-online-form-right {
            float: right;
            width: 30%;
            background: #2B2937;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
            border-bottom: 4px solid #1A1822;
            padding-bottom: 2em;
        }

        .payment-online-form-right a:hover {
            color: #1ABC9C;
        }

        .payment-online-form-right ul li {
            display: block;
            padding: 0.5em;
        }

        .payment-online-form-right ul li a {
            color: #9095AA;
        }

        .payment-online-form-right h4 {
            color: #FFF;
            font-size: 1em;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(144, 149, 170, 0.22);
            padding: 0.8em;
        }

        .payment-online-form-right ul {
            padding: 0px 1em;
        }

        .payment-online-form-right h5 {
            color: #FFF;
            padding: 0.5em 0.8em 0.4em;
            font-size: 1em;
        }

        .payment-type {
            margin-top: 3%;
            text-align: left;
        }

        input[type=checkbox].css-checkbox3,
        input[type=checkbox].css-checkbox4,
        input[type=checkbox].css-checkbox5,
        input[type=checkbox].css-checkbox6 {
            display: none;
        }

        input[type=checkbox].css-checkbox3+label.css-label3 {
            height: 22px;
            width: 21px;
            display: inline-block;
            line-height: 18px;
            background-repeat: no-repeat;
            background-position: 0 -38px;
            vertical-align: middle;
            cursor: pointer;
            background-image: url(../images/filter-bg.png);
        }

        input[type=checkbox].css-checkbox3:checked+label.css-label3 {
            background-position: 0px 0px;
        }

        input[type=checkbox].css-checkbox4+label.css-label4 {
            height: 22px;
            width: 21px;
            display: inline-block;
            line-height: 18px;
            background-repeat: no-repeat;
            background-position: 0 0px;
            vertical-align: middle;
            cursor: pointer;
            background-image: url(../images/filter-bg.png);
        }

        input[type=checkbox].css-checkbox4:checked+label.css-label4 {
            background-position: 0px -38px;
        }

        input[type=checkbox].css-checkbox5+label.css-label5 {
            height: 22px;
            width: 21px;
            display: inline-block;
            line-height: 18px;
            background-repeat: no-repeat;
            background-position: 0 -38px;
            vertical-align: middle;
            cursor: pointer;
            background-image: url(../images/filter-bg.png);
        }

        input[type=checkbox].css-checkbox5:checked+label.css-label5 {
            background-position: 0px 0px;
        }

        input[type=checkbox].css-checkbox6+label.css-label6 {
            height: 22px;
            width: 21px;
            display: inline-block;
            line-height: 18px;
            background-repeat: no-repeat;
            background-position: 0 0px;
            vertical-align: middle;
            cursor: pointer;
            background-image: url(../images/filter-bg.png);
        }

        input[type=checkbox].css-checkbox6:checked+label.css-label6 {
            background-position: 0px -38px;
        }

        /* start state */
        .my-mfp-zoom-in #small-dialog {
            opacity: 0;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
        }

        /* animate in */
        .my-mfp-zoom-in.mfp-ready #small-dialog {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        /* animate out */
        .my-mfp-zoom-in.mfp-removing #small-dialog {
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            opacity: 0;
        }

        /* Dark overlay, start state */
        .my-mfp-zoom-in.mfp-bg {
            opacity: 0;
            -webkit-transition: opacity 0.3s ease-out;
            -moz-transition: opacity 0.3s ease-out;
            -o-transition: opacity 0.3s ease-out;
            transition: opacity 0.3s ease-out;
        }

        /* animate in */
        .my-mfp-zoom-in.mfp-ready.mfp-bg {
            opacity: 0.8;
        }

        /* animate out */
        .my-mfp-zoom-in.mfp-removing.mfp-bg {
            opacity: 0;
        }

        /**
/* Magnific Popup CSS */
        .mfp-bg {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1042;
            overflow: hidden;
            position: fixed;
            background: #151515;
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .mfp-wrap {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1043;
            position: fixed;
            outline: none !important;
            -webkit-backface-visibility: hidden;
        }

        .mfp-container {
            text-align: center;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            padding: 0 8px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .mfp-container:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .mfp-align-top .mfp-container:before {
            display: none;
        }

        .mfp-content {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin: 0 auto;
            text-align: left;
            z-index: 1045;
        }

        .mfp-inline-holder .mfp-content,
        .mfp-ajax-holder .mfp-content {
            width: 100%;
            cursor: auto;
        }

        .mfp-ajax-cur {
            cursor: progress;
        }

        .mfp-zoom-out-cur,
        .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
            cursor: -moz-zoom-out;
            cursor: -webkit-zoom-out;
            cursor: zoom-out;
        }

        .mfp-zoom {
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
        }

        .mfp-auto-cursor .mfp-content {
            cursor: auto;
        }

        .mfp-close,
        .mfp-arrow,
        .mfp-preloader,
        .mfp-counter {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .mfp-loading.mfp-figure {
            display: none;
        }

        .mfp-hide {
            display: none !important;
        }

        .mfp-content iframe {
            width: 100%;
            min-height: 500px;
        }

        .mfp-preloader {
            color: #cccccc;
            position: absolute;
            top: 50%;
            width: auto;
            text-align: center;
            margin-top: -0.8em;
            left: 8px;
            right: 8px;
            z-index: 1044;
        }

        .mfp-preloader a {
            color: #cccccc;
        }

        .mfp-preloader a:hover {
            color: white;
        }

        .mfp-s-ready .mfp-preloader {
            display: none;
        }

        .mfp-s-error .mfp-content {
            display: none;
        }

        button.mfp-close,
        button.mfp-arrow {
            overflow: visible;
            cursor: pointer;
            border: 0;
            background: #FC8213;
            -webkit-appearance: none;
            display: block;
            padding: 0;
            z-index: 1046;
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        .mfp-close {
            width: 35px;
            height: 35px;
            line-height: 17px;
            position: absolute;
            right: 0%;
            top: 0%;
            text-decoration: none;
            text-align: center;
            color: white;
            font-style: normal;
            font-size: 28px;
            outline: none;
            padding: 0 !important;
        }

        .mfp-close:hover,
        .mfp-close:focus {
            opacity: 1;
        }

        .mfp-close-btn-in .mfp-close {
            color: #FFFFFF;
            padding: 0 0 7px 0px;
        }

        .mfp-image-holder .mfp-close,
        .mfp-iframe-holder .mfp-close {
            color: white;
            right: -6px;
            text-align: right;
            padding-right: 6px;
            width: 100%;
        }

        .image-top img {
            width: 100%;
        }

        .image-top p {
            text-align: justify;
            padding: 2% 0;
            font-size: 15px;
        }

        .image-top h3 {
            font-size: 1.5em;
            font-weight: 500;
            margin: 16px 0px 0px 0px;
            color: #3F4244;
        }

        p.bottom {
            text-align: center;
            width: 70%;
            margin: 0 auto;
            padding: 15px 0;
            color: #999;
            font-size: 14px;
        }

        /*--prices end here--*/
        /*--meadia quiries start here--*/
        @media (max-width:1440px) {
            .page-container.sidebar-collapsed-back .sidebar-menu {
                width: 250px;
            }

            .sidebar-menu {
                width: 250px;
            }

            .logo {
                left: 130px;
            }

            .page-container.sidebar-collapsed .logo {
                left: 16px;
            }

            canvas#bar {
                width: 515px !important;
            }

            .malorm-bottom p {
                width: 90%;
            }

            span.malorum-pro {
                left: 225px;
            }

            canvas#line {
                width: 490px !important;
            }
        }

        @media (max-width:1366px) {
            canvas#bar {
                width: 485px !important;
            }

            .popular-bran-left h4 {
                font-size: 0.8em;
            }

            .left-content {
                width: 83%;
            }

            #menu li a {
                padding: 6px 20px;
            }

            canvas#line {
                width: 460px !important;
            }

            canvas#radar {
                width: 480px !important;
            }

            .btn-group.m-r-sm.mail-hidden-options {
                margin: 0em 0.3em;
            }

            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 1.8em;
            }

            .logo-name h1 {
                font-size: 2.3em;
                margin-top: 0.1em;
            }

            #menu .fa {
                margin-bottom: 3px;
            }

            .project-eff:hover span.rollover1 {
                width: 243px;
            }

            .search-box input[type="text"] {
                width: 85%;
            }

            .boost-icons-list ul li {
                font-size: 0.9em;
            }
        }

        @media (max-width:1280px) {
            .left-content {
                width: 85%;
            }

            .market-update-block p {
                font-size: 0.75em;
            }

            .market-update-right {
                padding: 0px;
            }

            .malorm-bottom p {
                width: 100%;
            }

            canvas#bar {
                width: 440px !important;
            }

            .popular-bran-left h4 {
                font-size: 0.75em;
            }

            .popular-bran-left p {
                font-size: 0.9em;
            }

            canvas#line {
                width: 410px !important;
            }

            span.malorum-pro {
                left: 190px;
            }

            canvas#radar {
                width: 445px !important;
            }

            .btn-group.m-r-sm.mail-hidden-options {
                margin: 0em 0.1em;
            }

            .text-muted {
                font-size: 0.8em;
            }

            .popular-bran-left {
                padding: 2.3em 1em;
            }

            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 1.6em;
            }

            .mail-pic {
                width: 40%;
            }

            .mailer-name {
                width: 60%;
            }

            canvas#doughnut {
                width: 420px !important;
            }

            canvas#pie {
                width: 415px !important;
            }

            .project-eff:hover span.rollover1 {
                width: 222px;
            }

            .search-box input[type="text"] {
                width: 83%;
            }
        }

        @media (max-width:1024px) {
            .page-container {
                min-width: 990px;
            }

            .logo-name {
                float: left;
                width: 30%;
                margin: 0% 4% 0% 0%;
            }

            .logo-name {
                width: 37%;
            }

            .search-box {
                float: left;
                width: 55%;
            }

            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 1.1em;
            }

            .profile_details {
                float: right;
                width: 50%;
            }

            .fixed {
                position: fixed;
                top: 0;
                width: 85%;
            }

            .profile_details_drop a.dropdown-toggle {
                display: block;
                padding: 0em 2em 0 1em;
            }

            .page-container.sidebar-collapsed-back .left-content {
                width: 82%;
            }

            .market-update-block h4 {
                font-size: 0.9em;
            }

            .market-update-block {
                padding: 1.5em 1.5em;

            }

            .market-update-right i.fa.fa-file-text-o {
                font-size: 2em;
                width: 60px;
                height: 60px;
                margin-top: 0.7em;
            }

            .market-update-right i.fa.fa-eye {
                font-size: 2em;
                width: 60px;
                height: 60px;
                margin-top: 0.7em;
            }

            .market-update-right i.fa.fa-envelope-o {
                font-size: 2em;
                width: 60px;
                height: 60px;
                margin-top: 0.7em;
            }

            .malorm-bottom p {
                font-size: 0.8em;
            }

            canvas#bar {
                width: 341px !important;
                height: 280px !important;
            }

            .malorum-top {
                min-height: 176px;
            }

            span.malorum-pro {
                left: 145px;
            }

            .left-content {
                width: 82%;
            }

            .chit-chat-layer1-rit {
                padding: 0em 0em 0em 0.5em;
            }

            .chit-chat-layer1-left {
                padding: 0em 0.5em 0em 0em;
            }

            .market-update-gd {
                padding: 0px;
            }

            .chart-layer1-left {
                padding: 0em 0.5em 0em 0em;
            }

            .chart-layer1-right {
                padding: 0em 0em 0em 0.5em;
            }

            .chart-layer2-right {
                padding: 0em 0.5em 0em 0em;
            }

            .chart-layer2-left {
                padding: 0em 0em 0em 0.5em;
            }

            canvas#radar {
                width: 350px !important;
                height: 350px !important;
            }

            .climate-grids {
                padding: 0em 0.5em 0em 0em;
            }

            .shoppy h3 {
                font-size: 1.1em;
            }

            .climate-gd1-top {
                margin-bottom: 0em;
            }

            .climate-gd1top-left {
                padding: 0px;
            }

            .popular-bran-left p {
                font-size: 0.7em;
            }

            .popular-follo-left p {
                font-size: 0.75em;
            }

            .popular-bran-left {
                background: #fff;
                padding: 1.5em 1em;
            }

            .popular-bran-right {
                padding: 2.4em 1em;
            }

            .popular-follo-right {
                padding: 2.8em 1em;
            }

            .climate-grid1 {
                min-height: 350px;
            }

            .climate-grid2 {
                min-height: 286px;
            }

            .popular-follow {
                margin-top: 3.2em;
            }

            .table>thead>tr>th,
            .table>tbody>tr>th,
            .table>tfoot>tr>th,
            .table>thead>tr>td,
            .table>tbody>tr>td,
            .table>tfoot>tr>td {
                font-size: 0.86em;
            }

            .panel-body {
                padding: 20px;
                font-size: 0.9em;
            }

            .login-main {
                width: 50%;
            }

            .signup-main {
                width: 50%;
            }

            canvas#doughnut {
                width: 300px !important;
                height: 250px !important;
            }

            canvas#line {
                width: 290px !important;
                height: 250px !important;
            }

            canvas#polarArea {
                width: 295px !important;
                height: 240px !important;
            }

            canvas#pie {
                width: 305px !important;
                height: 240px !important;
            }

            .mailer-name {
                width: 57%;
            }

            .mail-pic {
                width: 40%;
            }

            .mail-pic img {
                width: 100%;
            }

            .btn.btn_1.btn-default.mrg5R {
                width: 25%;
            }

            .dropdown-inbox {
                width: 60%;
            }

            .float-right {
                width: 60%;
            }

            .mail-toolbar.clearfix {
                padding: 1em 0em;
            }

            .text-muted {
                font-size: 0.75em;
            }

            .btn-group.m-r-sm.mail-hidden-options {
                margin: 0em 0.1em;
            }

            .compose-bottom ul li a {
                font-size: 0.9em;
            }

            .compose-block a {
                font-size: 0.8em;
            }

            .compose-block {
                padding: 1em 1em;
            }

            .error-404 {
                margin-top: 0em;
            }

            .error-404 h2 {
                font-size: 2.5em;
            }

            .blankpage-main p {
                font-size: 1em;
            }

            .produ-cost h4 {
                font-size: 1em;
            }

            .produ-cost {
                padding: 0.8em 1em;
            }

            .price-gd-top h4 {
                font-size: 1.4em;
            }

            .price-gd-top h3 {
                font-size: 2.8em;
            }

            .price-list ul li {
                font-size: 0.8em;
            }

            .price-selet a {
                font-size: 1em;
            }

            .product-items {
                margin-bottom: 2em;
            }

            .col-lg-6.mb-60 h4 {
                font-size: 1.5em;
                margin-bottom: 0.2em;
            }

            .product-grid {
                padding: 0px 12px 0px 0px;
            }

            .profile_details_left ul {
                padding: 0px;
            }

            div#geoChart {
                height: 292px !important;
            }

            .project-eff:hover span.rollover1 {
                width: 180px;
                height: 130px;
            }

            .boost-icons-list ul li {
                font-size: 0.7em;
            }
        }

        @media (max-width:991px) {
            .market-update-gd {
                float: left;
                width: 33%;
                text-align: center;
            }

            /*--logoname--*/
            .logo-name {
                width: 39%;
                margin: 0% 1% 0% 0%;
            }

            .search-box {
                width: 60%;
            }

            .logo-name h1 {
                font-size: 1.7em;
                margin-top: 0.3em;
            }

            .search-box input[type="text"] {
                width: 80%;
            }

            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 1em;
            }

            .profile_details_drop a.dropdown-toggle {
                padding: 0em 0em 0 0em;
            }

            .profile_details li a i.fa.lnr {
                top: 20%;
                right: 0%;
            }

            .market-update-gd {
                float: left;
                width: 33%;
                text-align: center;
            }

            .market-update-block {
                padding: 1em 1em;
            }

            .market-update-right i.fa.fa-file-text-o {
                font-size: 2em;
                width: 60px;
                height: 60px;
                line-height: 1.9em;
                margin-top: 0px;
            }

            .market-update-right i.fa.fa-eye {
                font-size: 2em;
                width: 60px;
                height: 60px;
                line-height: 1.9em;
                margin-top: 0em;
            }

            .market-update-right i.fa.fa-envelope-o {
                font-size: 2em;
                width: 60px;
                height: 60px;
                line-height: 1.9em;
                margin-top: 0px;
            }

            .market-update-left {
                padding-bottom: 0.8em;
            }

            .market-update-block h3 {
                font-size: 2em;
            }

            .market-update-block h4 {
                font-size: 1em;
            }

            .chit-chat-layer1-left {
                padding: 0em 0em 2em 0em;
            }

            .chart-layer1-left {
                padding: 0em 0em 0em 0em;
                float: left;
                width: 49%;
            }

            .chart-layer1-right {
                padding: 0px;
                float: right;
                width: 49%;
            }

            .chart-layer2-right {
                padding: 0px;
                float: left;
                width: 49%;
            }

            .chart-layer2-left {
                padding: 0px;
                float: right;
                width: 49%;
            }

            .climate-grids {
                padding: 0px;
            }

            .cloudy1 {
                float: left;
                width: 33%;
            }

            canvas#bar {
                width: 285px !important;
                height: 240px !important;
            }

            .malorm-bottom {
                padding: 1.5em 1em;
            }

            .malorm-bottom p {
                font-size: 0.75em;
            }

            .malorm-bottom h2 {
                font-size: 1.2em;
            }

            .malorm-bottom h4 {
                font-size: 0.85em;
            }

            .malorum-top {
                min-height: 156px;
            }

            canvas#radar {
                width: 270px !important;
                height: 270px !important;
            }

            .bar_group__bar.thin {
                margin-bottom: 20px !important;
            }

            .climate-gd1top-left {
                float: left;
                width: 50%;
                text-align: center;
            }

            .climate-gd1top-right {
                float: right;
                width: 50%;
                text-align: center;
            }

            .popular-bran-left {
                float: left;
                width: 50%;
            }

            .popular-bran-right {
                float: right;
                width: 50%;
                padding: 2em 1em;
            }

            .popular-follo-left {
                float: left;
                width: 50%;
            }

            .popular-follo-right {
                float: right;
                width: 50%;
                padding: 2em 1em;
            }

            .climate-grid2 {
                background: url(../images/shoppy.jpg)no-repeat center;
                min-height: 290px;
                background-size: cover;
                margin: 2em 0em 0em 0em;
            }

            .popular-follow {
                margin-top: 2em;
            }

            .popular-brand {
                margin-top: 2em;
            }

            .popular-bran-left p {
                font-size: 1em;
            }

            .popular-follo-left p {
                font-size: 1em;
            }

            .price-grid {
                margin-bottom: 2em;
                float: left;
                width: 50%;
            }

            .col-sm-6 {
                width: 100%;
            }

            .btn-lg,
            .btn-group-lg>.btn {
                padding: 7px 10px;
            }

            .popular-bran-left {
                padding: 1.75em 1em;
            }

            .portlet-grid {
                width: 49%;
            }

            .map-1 {
                margin-bottom: 2em;
            }

            .login-main {
                width: 70%;
            }

            .signup-main {
                width: 70%;
            }

            .dygno {
                padding: 1em 1em;
            }

            .line-chart {
                padding: 1em 1em;
            }

            .polararea {
                padding: 1em 1em;
            }

            .chart-other {
                padding: 1em 1em;
            }

            .chart-blo-1 {
                float: left;
                width: 50%;
                padding: 0px 12px 15px 0px;
            }

            canvas#doughnut {
                width: 275px !important;
            }

            canvas#line {
                width: 275px !important;
            }

            .compose {
                padding: 0em 0em 2em 0em;
            }

            .mail-pic img {
                width: 75%;
            }

            .mail-pic {
                width: 15%;
            }

            .mailer-name {
                width: 85%;
                margin-top: 1em;
            }

            .compose-right {
                padding: 0px;
            }

            .product-grid {
                float: left;
                width: 50%;
            }

            .project-eff:hover span.rollover1 {
                width: 308px;
                height: 220px;
            }

            .map-1 {
                padding: 0px;
            }

            .map-2 {
                padding: 0px;
            }

            span.malorum-pro {
                left: 115px;
            }

            .chit-chat-layer1-rit {
                padding: 0em 0em 0em 0em;
            }

            .boost-icons-list ul li {
                width: 24%;
            }
        }

        @media (max-width:768px) {
            .page-container {
                min-width: 650px;
                position: relative;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                margin: 0px auto;
            }

            .sidebar-menu {
                position: fixed;
                float: left;
                width: 170px;
                height: 100%;
            }

            .left-content {
                float: right;
                width: 92%;
            }

            .page-container.sidebar-collapsed {
                transition: all 100ms linear;
                transition-delay: 300ms;
            }

            .fixed {
                width: 92%;
            }

            .page-container.sidebar-collapsed .left-content .fixed {
                width: 97%;
            }

            .page-container.sidebar-collapsed-back {
                transition: all 100ms linear;
            }

            .page-container.sidebar-collapsed-back .left-content {
                transition: all 100ms linear;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                transition: all 0.3s ease;
                float: right;
                width: 92%;
            }

            .page-container.sidebar-collapsed .sidebar-menu {
                width: 180px;
                transition: all 100ms ease-in-out;
                transition-delay: 300ms;
            }

            .page-container.sidebar-collapsed-back .sidebar-menu {
                width: 65px;
                transition: all 100ms ease-in-out;
            }

            #menu li a {
                padding: 20px 20px;
                text-align: left !important;
            }

            #menu .fa {
                margin-bottom: 9px;
            }

            .logo {
                left: 16px;
            }

            .page-container.sidebar-collapsed-back #menu span {
                display: none;
            }

            .page-container.sidebar-collapsed #menu span {
                opacity: 1;
                transition: all 50ms linear;
                display: block;

            }

            .page-container.sidebar-collapsed #menu span {
                opacity: 1;
                transition: all 50ms linear;
                display: block;

            }

            #menu span {
                opacity: 0;
                transition: all 50ms linear;
                display: block;

            }

            span.fa.fa-angle-right,
            span.fa.fa-angle-double-right {


                right: 12px !important;
            }

            .sidebar-menu {
                width: 65px;
                transition: all 100ms ease-in-out;
                transition-delay: 300ms;
            }

        }

        @media (max-width:736px) {
            .malorm-bottom p {
                font-size: 0.7em;
            }

            canvas#line {
                width: 259px !important;
            }

            canvas#pie {
                width: 264px !important;
            }
        }

        @media (max-width:667px) {
            li.dropdown.head-dpdn a.dropdown-toggle {
                margin: 1em 0.9em;
            }

            .user-name {
                margin-left: 5px;
            }

            canvas#bar {
                width: 238px !important;
            }

            .logo-name h1 {
                font-size: 1.6em;
                margin-top: 0.35em;
            }

            canvas#line {
                width: 234px !important;
            }

            canvas#doughnut {
                width: 235px !important;
            }

            canvas#polarArea {
                width: 235px !important;
            }

            canvas#pie {
                width: 235px !important;
            }
        }

        @media (max-width:640px) {
            .header-left {
                float: none;
                width: 100%;
                margin-bottom: 0.4em;
            }

            .search-box {
                margin-top: 0em;
            }

            .header-right {
                float: none;
                width: 100%;
            }

            .logo-name h1 {
                font-size: 1.9em;
            }

            .logo-name h1 {
                font-size: 2em;
            }

            .inner-block {
                padding: 10em 2em 2em 2em;
            }

            .chart-layer1-left {
                padding: 0em 0em 2em 0em;
                float: none;
                width: 100%;
            }

            canvas#bar {
                width: 500px !important;
            }

            .chart-layer1-right {
                float: none;
                width: 100%;
            }

            span.malorum-pro {
                left: 220px;
            }

            .chart-layer2-right {
                padding: 0em 0em 2em 0em;
                float: none;
                width: 100%;
            }

            .chart-layer2-left {
                float: none;
                width: 100%;
            }

            .revenue {
                text-align: center;
            }

            .popular-bran-left {
                padding: 1.1em 1em;
            }

            .popular-bran-left h4 {
                font-size: 0.9em;
            }

            .popular-bran-left p {
                margin-top: 1em;
            }

            .btn-lg,
            .btn-group-lg>.btn {
                font-size: 14px;
            }

            .btn {
                padding: 6px 12px;
                font-size: 13px;
            }

            .login-main {
                width: 80%;
            }

            .signup-main {
                width: 80%;
            }

            .signup-block {
                padding: 3em 2em;
            }

            .login-block {
                padding: 3em 2em;
            }

            .chart-blo-1 {
                float: none;
                width: 100%;
                padding: 0px 0px 15px 0px;
            }

            canvas#line {
                width: 500px !important;
            }

            .dygno {
                text-align: center;
            }

            .dygno h2 {
                text-align: left;
            }

            .chart-other {
                text-align: center;
            }

            .chart-other h3 {
                text-align: left;
            }

            .project-eff:hover span.rollover1 {
                width: 253px;
            }

            .left-content {
                width: 90%;
            }

            canvas#bar {
                width: 475px !important;
            }

            .page-container.sidebar-collapsed-back .left-content {
                width: 90%;
            }

            .page-container {
                min-width: 640px;
            }

            canvas#line {
                width: 475px !important;
            }

            .grid_3.grid_4 {
                padding: 1em 1em;
            }

            .typo-buttons {
                padding: 1em 1em;
            }

            .typo-alerts {
                padding: 1em 1em;
            }

            .typo-progresses {
                padding: 1em 1em;
            }

            .typo-wells {
                padding: 1em 1em;
            }

            .typo-badges {
                padding: 1em 1em;
            }

            .boost-icons-list ul li {
                width: 32%;
            }

            .search-box input[type="text"] {
                width: 90%;
            }

            .mb40 {
                margin-bottom: 20px !important;
            }
        }

        @media (max-width:600px) {
            .page-container {
                min-width: 600px;
            }

            canvas#bar {
                width: 445px !important;
            }

            .search-box input[type="text"] {
                width: 88%;
            }

            canvas#line {
                width: 443px !important;
            }
        }

        @media (max-width:568px) {
            .page-container {
                min-width: 565px;
            }

            canvas#bar {
                width: 409px !important;
            }

            .search-box input[type="text"] {
                width: 88%;
            }

            canvas#line {
                width: 415px !important;
            }
        }

        @media (max-width:480px) {
            .page-container {
                min-width: 495px;
            }

            .market-update-gd {
                float: none;
                width: 100%;
            }

            .left-content {
                width: 87%;
            }

            .page-container.sidebar-collapsed-back .left-content {
                width: 87%;
            }

            .market-update-block.clr-block-1 {
                margin: 0em 0em 1em 0em;
            }

            .market-update-block.clr-block-2 {
                margin: 0em 0em 1em 0em;
            }

            canvas#bar {
                width: 335px !important;
            }

            .page-container {
                min-width: 480px;
            }

            .inner-block {
                padding: 10em 1em 2em 1em;
            }

            .chit-chat-layer1 {
                margin: 1em 0em;
            }

            .chit-chat-layer1-left {
                padding: 0em 0em 1em 0em;
            }

            .chart-layer1-left {
                padding: 0em 0em 1em 0em;
            }

            canvas#bar {
                width: 350px !important;
            }

            span.malorum-pro {
                left: 150px;
            }

            .chart-layer-2 {
                margin: 1em 0em;
            }

            .chart-layer2-right {
                padding: 0em 0em 1em 0em;
            }

            .climate-grid2 {
                margin: 1em 0em 0em 0em;
            }

            .popular-brand {
                margin-top: 1em;
            }

            .popular-follow {
                margin-top: 1em;
            }

            .profile_details li a i.fa.lnr {
                right: 5%;
            }

            .cols-grids {
                padding: 0em 0em;
            }

            .portlet-grid {
                width: 100%;
                float: none;
            }

            .button-heading h4 {
                font-size: 1.5em;
            }

            .btn-effcts.panel-widget {
                margin-top: 1em;
            }

            h1#h1-bootstrap-heading {
                font-size: 1.5em;
            }

            h2#h2-bootstrap-heading {
                font-size: 1.4em;
            }

            h3#h3-bootstrap-heading {
                font-size: 1.3em;
            }

            .typo-buttons {
                margin: 1em 0em;
            }

            .page-header h3 {
                font-size: 1.5em;
            }

            .typo-progresses {
                margin: 1em 0em;
            }

            .page-header {
                padding-bottom: 8px;
                margin: 10px 0 10px;
            }

            .typo-wells h3 {
                font-size: 1.5em;
            }

            .typo-badges h3 {
                font-size: 1.5em;
            }

            .typo-wells {
                margin-bottom: 1em;
            }

            .map-main-page h2 {
                margin-bottom: 0.5em;
            }

            .map-1 {
                margin-bottom: 1em;
            }

            .map-system {
                margin-bottom: 1em;
            }

            .login-main {
                width: 90%;
            }

            .login-block {
                padding: 1.5em 1.5em;
            }

            .login-block input[type="text"],
            .login-block input[type="password"] {
                margin: 0em 0em 1em 0em;
            }

            .forgot-top-grids {
                margin: 0em 0em 0.8em 0em;
            }

            .signup-main {
                width: 90%;
            }

            .signup-block {
                padding: 2em 1.5em;
            }

            .signup-head h1 {
                font-size: 2.5em;
                padding: 1.3em 0em 0em 0em;
            }

            .login-head h1 {
                font-size: 2.5em;
                padding: 1.3em 0em 0em 0em;
            }

            canvas#line {
                width: 350px !important;
            }

            .copyrights p {
                font-size: 0.9em;
            }

            .float-left {
                float: none;
                width: 100%;
            }

            .float-right {
                width: 100%;
                float: none;
                margin-top: 0.8em;
            }

            .error-page-left img {
                width: 60%;
            }

            .error-404 h2 {
                font-size: 2em;
            }

            .error-404 a {
                margin-top: 1em;
            }

            .blank {
                min-height: 480px;
            }

            .blankpage-main p {
                font-size: 0.9em;
            }

            .price-grid {
                padding: 0px 19px 0px 0px;
            }

            .price-grid {
                margin-bottom: 1.5em;
                float: none;
                width: 100%;
            }

            .boost-icons-list ul li {
                width: 49%;
            }

            .search-box input[type="text"] {
                width: 85%;
            }

            .search-box input[type="submit"] {
                background: url(../images/search.png)no-repeat 2px 2px;
                background-size: 15px;
            }
        }

        @media (max-width:414px) {
            .page-container {
                min-width: 410px;
            }

            canvas#bar {
                width: 295px !important;
            }

            span.malorum-pro {
                left: 120px;
            }

            .popular-bran-left p {
                margin-top: 0.2em;
            }

            .profile_details ul li ul.dropdown-menu.drp-mnu {
                min-width: 165px;
            }

            canvas#line {
                width: 295px !important;
            }
        }

        @media (max-width:384px) {
            .page-container {
                min-width: 380px;
            }

            .left-content {
                width: 83%;
            }

            canvas#bar {
                width: 275px !important;
            }

            .header-main {
                padding: 1em 1em;
            }

            .fixed {
                width: 83%;
            }

            .logo-name h1 {
                font-size: 1.8em;
                margin-top: 0em;
            }

            canvas#bar {
                width: 255px !important;
            }

            .popular-bran-left p {
                font-size: 0.8em;
                margin-top: 0.5em;
            }

            .popular-follo-left {
                padding: 1.5em 1em;
            }

            .popular-follo-left p {
                font-size: 0.8em;
            }

            .search-box input[type="text"] {
                width: 82%;
            }

            .profile_details ul li ul.dropdown-menu.drp-mnu {
                min-width: 146px;
            }

            ul.dropdown-menu {
                min-width: 198px;
            }

            .profile_details li a i.fa.lnr {
                right: -5%;
            }

            canvas#line {
                width: 252px !important;
            }

            canvas#polarArea {
                width: 265px !important;
                height: 215px !important;
            }

            canvas#doughnut {
                width: 255px !important;
            }

            canvas#pie {
                width: 251px !important;
            }

            .boost-icons-list ul li {
                font-size: 0.6em;
            }

            .forgot a {
                font-size: 0.65em;
            }

            .forgot-grid ul li input[type="checkbox"]+label {
                font-size: .65em;
                padding-left: 21px;
            }

            .forgot-grid ul li input[type="checkbox"]+label span:first-child {
                bottom: -1px;
            }

            .forgot-top-grids {
                padding: 0em 0.5em;
            }
        }

        @media (max-width:375px) {
            .page-container {
                min-width: 375px;
            }
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

        @media only screen and (max-width: 768px) {
            .header-main {
                display: none !important;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

        .recepi-table {
            border: 1px solid rgb(196, 218, 243);
            overflow: auto;
            height: 500px;
            padding: 10px;
        }

        .sale-buttons {
            text-align: center;
        }

        .sale-buttons button {
            /* display: block; */
            width: 90px !important;
            height: 50px;
            margin: 5px 5px;


        }

        .raw-table {
            border: 1px solid rgb(196, 218, 243);
            height: 500px;
        }

        .raw-table table tbody tr td:nth-child(3),
        .raw-table table tbody tr td:nth-child(5) {
            width: 50px;
            /* height: 10px; */
        }

        .raw-table table tbody tr td:nth-child(1) {
            width: 50px;
        }

        .btn-success {
            color: #fff;
            background-color: #e61d2f;
            border-color: #e61d2f
        }

        .btn-success:hover {
            color: #fff;
            background-color: #e61d2f;
            border-color: #e61d2f;
        }

        .btn-success.focus,
        .btn-success:focus {
            box-shadow: 0 0 0 .2rem #e61d2f;
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .menu-table {
            border: 1px solid rgb(196, 218, 243);
            height: 400px;
        }

        .menu-table table {
            padding: 10px !important;

        }

        .menu-table table th,
        td {
            border: 1px solid #ced4da;
            padding: 2px !important;
        }

        .idi label {
            width: 210px !important;
        }

        /* .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 520px; } */
        .menu-i {
            border: 1px solid #E5EAEE;
            padding: 10px 10px;
            border-radius: 10px;
        }

        .ent-table {
            border: 1px solid #E5EAEE;
            padding: 10px 10px;
            border-radius: 10px;
            height: 465px;
        }



        .up-btn {
            margin-top: 5px;
            height: 120px !important;
            width: 120px !important;
        }

        .offme input {
            margin: 5px 0px;
        }

        .stock-table {
            height: 500px;
            overflow: auto;
        }

        .salePr-buttons {
            text-align: center;
        }

        .salePr-buttons button {
            height: 96px;
            width: 150px;
        }

        /* .esti-1{
        border: 1px solid #E5EAEE;
        padding: 10px;
    } */
        .offme-10 label {
            width: 221px !important;
        }

        .offme-10 input {
            margin: 5px 0px !important;
        }

        .mainWebPro {
            background-image: url(https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
            width: 100vw;
            position: relative;
            z-index: 0;
        }

        .mainWebPro::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.57);
            min-height: 100%;
            z-index: -1;


        }

        .mainWebcontent {

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%;

        }

        .mainWebcontent h3 {
            font-size: 35px;
            text-align: center;
            color: #E5EAEE;
        }

        .mainWebcontent h1 {
            font-size: 55px;
            color: #E5EAEE;
            text-align: center;


        }

        .mainWebButtons {
            margin-top: 50px !important;
        }

        .mainWebButtons button {
            margin: 20px 10px !important;
        }

        .mainWebButtons a {
            width: 150px;
            height: 100px;
            text-align: center;
            line-height: 80px;
            margin: 10px 10px;
        }

        .leftMaterial label {
            margin-right: 50px;
        }



        .ownButton {
            margin: 20px auto;
            padding: 20px 40px;
        }

        .rightmtButton {
            float: right;
        }

        #mt_header {
            margin-top: 20px;
        }

        table th,
        td {
            text-align: center;
        }

        /* 
        .ent-table {
            height: 350px !important;
        } */



        .myContentInputs {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .myContentInputs input {
            width: 200px !important;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
        }

        /* tr:nth-child(1n++) {
            background-color: #0a549d;
        } */

        @media only screen and (max-width: 993px) {
            .myContentInputs {
                display: flex;
                flex-wrap: wrap;
            }

            .ent-table table {
                width: 595px !important;
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
        .inner-block {
    padding: .5em 1em 2em 1em;
}
    </style>

</head>

<body id="mainBody" onload="loadData()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">

                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Add new Stock</h2>
                            </div>
                        </div>
                        <br>
                        <div class="myContentInputs">
                            <div class="inputField-1">
                                <label for="prodName">Category</label> <br>

                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="category">

                                </select>
                            </div>
                            <div class="inputField-1">
                                <label for="prodName">Product Name</label>
                                <input type="text" id="productName" class="form-control">
                            </div>
                            <div class="inputField-1">
                                <label for="cost">Cost</label>
                                <input type="text" class="form-control" id="cost">
                            </div>
                           
                            <div class="inputField-1">
                                <label for="prodName">Sale Price</label>
                                <input type="text" class="form-control" id="salePrice">

                            </div>
                            <div class="inputField-1">
                                <label for="prodName">Description</label>
                                <input type="text" class="form-control" id="description">

                            </div>
                            <div class="input-Btn-1">
                                <button class="btn btn-success" style="margin-top: 30px !important;"
                                    onclick="AddItemInGrid()">Add
                                    Menu</button>

                            </div>
                        </div>





                    </div>


                </header>

                <section class="mt-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ent-table" style="overflow: auto;">
                                    <table class="table table-bordered table-striped " id="MenuTable">
                                        <thead>
                                            <tr>
                                                <th>Product Name </th>
                                                <th>Category</th>

                                                <th>Sale Price</th>
                                                <th>Cost</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody id="contact-list">


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 offset-md-10 text-right">
                                <button class="btn btn-success  mt-1"
                                    style="height: 40px;width: 102px;  color: #ffffff;"
                                    onclick="insertProducts()">PlaceOrder</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>




<script>
    function AddItemInGrid() {
        var table = document.getElementById("MenuTable");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var e = document.getElementById("category");
        var cateValue = e.options[e.selectedIndex].value;
        var catetext = e.options[e.selectedIndex].text;
        var catValue = e.options[e.selectedIndex].value;

        cell1.innerHTML = document.getElementById("productName").value;
        cell2.innerHTML = catetext;
        cell3.innerHTML = document.getElementById("salePrice").value;
        cell4.innerHTML = document.getElementById("cost").value;
        cell5.innerHTML = document.getElementById("description").value;
        cell6.innerHTML =
            "<button onclick='deleteRow(this)' class=\"btn btn-danger \" style=\"height: 25px;width: 25px; padding:auto;\"></button>";
        cell7.innerHTML = catValue;
        cell7.style.display = "none";



    }



    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("MenuTable").deleteRow(i);
    }






    function insertProducts() {

        var myTrows = [];
        var table = document.getElementById("MenuTable");


        $('#MenuTable tr').each(function (row, tr) {

            myTrows[row] = [

                $(tr).find('td:eq(0)').text(),
                $(tr).find('td:eq(6)').text(),
                // $(tr).find('td:eq(2) input[type="text"]').val(),
                // $(tr).find('td:eq(3)').find(":selected").val(),
                $(tr).find('td:eq(2)').text(),
                $(tr).find('td:eq(3)').text(),
                $(tr).find('td:eq(4)').text()


            ];


        });
        myTrows.shift();
        alert(myTrows[0]);


        var a = JSON.stringify(myTrows);



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("This is comming from Controller ==" + this.responseText);

            }
        };

        xhttp.open("GET", "./insertProducts/" + a, true);
        xhttp.send();

    };

</script>
</script>
<script>
    function AddProduct() {

        var ProductName = document.getElementById("productName").value;


        var ProductCat = document.getElementById("category").value;


        var Productsaleprice = document.getElementById("salePrice").value;


        var ProductCost = document.getElementById("cost").value;


        var Description = document.getElementById("description").value;


        var Product = [ProductName, ProductCat, Productsaleprice, ProductCost, Description];


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        var EC = JSON.stringify(Product);
        xhttp.open("GET", "./AddProduct/" + EC, true);
        xhttp.send();


    };

    function FetchMenu(CID) {
        var xhttp = new XMLHttpRequest();


        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pills-tabContent").innerHTML = this.responseText;
                // alert();
                calculation();


            }

        };



        xhttp.open("GET", "./fetchMenu/" + CID, true);
        xhttp.send();



    };

    function getAllCategories() {



        var xhttp = new XMLHttpRequest();


        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pills-tab").innerHTML = this.responseText;
                FetchMenu(11);



            }

        };

        xhttp.open("GET", "./fetchCategories", true);
        xhttp.send();
    }

</script>


<script>
    function loadData() {
        clearAll();
        loadProductCategory();
    }

</script>

<script>
    function clearAll() {
        // document.getElementById("date").value = "";
        // document.getElementById("address").value = "";
        // document.getElementById("basicPay").value = "";
        // document.getElementById("allowedHolidays").value = "";
        // document.getElementById("allownces").value = "";
        // document.getElementById("saleTarget").value = "";
        // document.getElementById("address").value = "";
        // document.getElementById("address").value = "";
    }

</script>


<script>
    function loadProductCategory() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("category").innerHTML = this.response;
                $('#category').selectpicker('refresh');
            }
        };
        //alert("ljd");
        xhttp.open("GET", "./loadProductCategory/", true);

        xhttp.send();


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
