<!DOCTYPE HTML>
<html>

<head>
    <title>FORLAND MODERN MOTORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Forland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
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
            position: abso;
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
            height: 100%;
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
            width: 86%;
        }

        .page-container.sidebar-collapsed .sidebar-menu {
            width: 65px;
            transition: all 100ms ease-in-out;
            transition-delay: 300ms;
        }

        .page-container.sidebar-collapsed-back .sidebar-menu {
            width: 230px;
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
            position: absolute;
            float: left;
            width: 230px;

            top: 0px;
            left: 0px;
            bottom: 0;
            background-color: #202121;
            color: #aaabae;
            z-index: 999;
            height: 100%;

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

        #menu li ul {
            opacity: 0;
            height: 0px;
        }

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


        #menu li a:hover .fa-angle-right {
            transform: rotate(45deg);
        }

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
            padding: 0;
        }

        #menu li ul {
            position: absolute;
            visibility: hidden;
            left: 100%;
            top: 5px;

            background-color: #202121;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.1s linear;
            border-top: 1px solid rgba(69, 74, 84, 0.7);
        }

        #menu li:hover>ul {
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
        }

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
            background: #fafafa;
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
                width: 230px;
            }

            .sidebar-menu {
                width: 216px;
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
                width: 86%;
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

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

    </style>

    <link href="css/font-awesome.css" rel="stylesheet">
    <script>
        /*!
         * Chart.js
         * http://chartjs.org/
         * Version: 1.0.2
         *
         * Copyright 2015 Nick Downie
         * Released under the MIT license
         * https://github.com/nnnick/Chart.js/blob/master/LICENSE.md
         */
        (function () {
            "use strict";
            var t = this,
                i = t.Chart,
                e = function (t) {
                    this.canvas = t.canvas, this.ctx = t;
                    var i = function (t, i) {
                            return t["offset" + i] ? t["offset" + i] : document.defaultView.getComputedStyle(t)
                                .getPropertyValue(i)
                        },
                        e = this.width = i(t.canvas, "Width"),
                        n = this.height = i(t.canvas, "Height");
                    t.canvas.width = e, t.canvas.height = n;
                    var e = this.width = t.canvas.width,
                        n = this.height = t.canvas.height;
                    return this.aspectRatio = this.width / this.height, s.retinaScale(this), this
                };
            e.defaults = {
                global: {
                    animation: !0,
                    animationSteps: 60,
                    animationEasing: "easeOutQuart",
                    showScale: !0,
                    scaleOverride: !1,
                    scaleSteps: null,
                    scaleStepWidth: null,
                    scaleStartValue: null,
                    scaleLineColor: "rgba(0,0,0,.1)",
                    scaleLineWidth: 1,
                    scaleShowLabels: !0,
                    scaleLabel: "<%=value%>",
                    scaleIntegersOnly: !0,
                    scaleBeginAtZero: !1,
                    scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    scaleFontSize: 12,
                    scaleFontStyle: "normal",
                    scaleFontColor: "#666",
                    responsive: !1,
                    maintainAspectRatio: !0,
                    showTooltips: !0,
                    customTooltips: !1,
                    tooltipEvents: ["mousemove", "touchstart", "touchmove", "mouseout"],
                    tooltipFillColor: "rgba(0,0,0,0.8)",
                    tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipFontSize: 14,
                    tooltipFontStyle: "normal",
                    tooltipFontColor: "#fff",
                    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipTitleFontSize: 14,
                    tooltipTitleFontStyle: "bold",
                    tooltipTitleFontColor: "#fff",
                    tooltipYPadding: 6,
                    tooltipXPadding: 6,
                    tooltipCaretSize: 8,
                    tooltipCornerRadius: 6,
                    tooltipXOffset: 10,
                    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
                    multiTooltipTemplate: "<%= value %>",
                    multiTooltipKeyBackground: "#fff",
                    onAnimationProgress: function () {},
                    onAnimationComplete: function () {}
                }
            }, e.types = {};
            var s = e.helpers = {},
                n = s.each = function (t, i, e) {
                    var s = Array.prototype.slice.call(arguments, 3);
                    if (t)
                        if (t.length === +t.length) {
                            var n;
                            for (n = 0; n < t.length; n++) i.apply(e, [t[n], n].concat(s))
                        } else
                            for (var o in t) i.apply(e, [t[o], o].concat(s))
                },
                o = s.clone = function (t) {
                    var i = {};
                    return n(t, function (e, s) {
                        t.hasOwnProperty(s) && (i[s] = e)
                    }), i
                },
                a = s.extend = function (t) {
                    return n(Array.prototype.slice.call(arguments, 1), function (i) {
                        n(i, function (e, s) {
                            i.hasOwnProperty(s) && (t[s] = e)
                        })
                    }), t
                },
                h = s.merge = function () {
                    var t = Array.prototype.slice.call(arguments, 0);
                    return t.unshift({}), a.apply(null, t)
                },
                l = s.indexOf = function (t, i) {
                    if (Array.prototype.indexOf) return t.indexOf(i);
                    for (var e = 0; e < t.length; e++)
                        if (t[e] === i) return e;
                    return -1
                },
                r = (s.where = function (t, i) {
                    var e = [];
                    return s.each(t, function (t) {
                        i(t) && e.push(t)
                    }), e
                }, s.findNextWhere = function (t, i, e) {
                    e || (e = -1);
                    for (var s = e + 1; s < t.length; s++) {
                        var n = t[s];
                        if (i(n)) return n
                    }
                }, s.findPreviousWhere = function (t, i, e) {
                    e || (e = t.length);
                    for (var s = e - 1; s >= 0; s--) {
                        var n = t[s];
                        if (i(n)) return n
                    }
                }, s.inherits = function (t) {
                    var i = this,
                        e = t && t.hasOwnProperty("constructor") ? t.constructor : function () {
                            return i.apply(this, arguments)
                        },
                        s = function () {
                            this.constructor = e
                        };
                    return s.prototype = i.prototype, e.prototype = new s, e.extend = r, t && a(e.prototype, t),
                        e.__super__ = i.prototype, e
                }),
                c = s.noop = function () {},
                u = s.uid = function () {
                    var t = 0;
                    return function () {
                        return "chart-" + t++
                    }
                }(),
                d = s.warn = function (t) {
                    window.console && "function" == typeof window.console.warn && console.warn(t)
                },
                p = s.amd = "function" == typeof define && define.amd,
                f = s.isNumber = function (t) {
                    return !isNaN(parseFloat(t)) && isFinite(t)
                },
                g = s.max = function (t) {
                    return Math.max.apply(Math, t)
                },
                m = s.min = function (t) {
                    return Math.min.apply(Math, t)
                },
                v = (s.cap = function (t, i, e) {
                    if (f(i)) {
                        if (t > i) return i
                    } else if (f(e) && e > t) return e;
                    return t
                }, s.getDecimalPlaces = function (t) {
                    return t % 1 !== 0 && f(t) ? t.toString().split(".")[1].length : 0
                }),
                S = s.radians = function (t) {
                    return t * (Math.PI / 180)
                },
                x = (s.getAngleFromPoint = function (t, i) {
                    var e = i.x - t.x,
                        s = i.y - t.y,
                        n = Math.sqrt(e * e + s * s),
                        o = 2 * Math.PI + Math.atan2(s, e);
                    return 0 > e && 0 > s && (o += 2 * Math.PI), {
                        angle: o,
                        distance: n
                    }
                }, s.aliasPixel = function (t) {
                    return t % 2 === 0 ? 0 : .5
                }),
                y = (s.splineCurve = function (t, i, e, s) {
                    var n = Math.sqrt(Math.pow(i.x - t.x, 2) + Math.pow(i.y - t.y, 2)),
                        o = Math.sqrt(Math.pow(e.x - i.x, 2) + Math.pow(e.y - i.y, 2)),
                        a = s * n / (n + o),
                        h = s * o / (n + o);
                    return {
                        inner: {
                            x: i.x - a * (e.x - t.x),
                            y: i.y - a * (e.y - t.y)
                        },
                        outer: {
                            x: i.x + h * (e.x - t.x),
                            y: i.y + h * (e.y - t.y)
                        }
                    }
                }, s.calculateOrderOfMagnitude = function (t) {
                    return Math.floor(Math.log(t) / Math.LN10)
                }),
                C = (s.calculateScaleRange = function (t, i, e, s, n) {
                    var o = 2,
                        a = Math.floor(i / (1.5 * e)),
                        h = o >= a,
                        l = g(t),
                        r = m(t);
                    l === r && (l += .5, r >= .5 && !s ? r -= .5 : l += .5);
                    for (var c = Math.abs(l - r), u = y(c), d = Math.ceil(l / (1 * Math.pow(10, u))) * Math.pow(
                                10, u), p = s ? 0 : Math.floor(r / (1 * Math.pow(10, u))) * Math.pow(10, u), f =
                            d - p, v = Math.pow(10, u), S = Math.round(f / v);
                        (S > a || a > 2 * S) && !h;)
                        if (S > a) v *= 2, S = Math.round(f / v), S % 1 !== 0 && (h = !0);
                        else if (n && u >= 0) {
                        if (v / 2 % 1 !== 0) break;
                        v /= 2, S = Math.round(f / v)
                    } else v /= 2, S = Math.round(f / v);
                    return h && (S = o, v = f / S), {
                        steps: S,
                        stepValue: v,
                        min: p,
                        max: p + S * v
                    }
                }, s.template = function (t, i) {
                    function e(t, i) {
                        var e = /\W/.test(t) ? new Function("obj",
                                "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + t
                                .replace(/[\r\t\n]/g, " ").split("<%").join("	").replace(/((^|%>)[^\t]*)'/g,
                                    "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("	").join("');").split("%>")
                                .join("p.push('").split("\r").join("\\'") + "');}return p.join('');") : s[t] =
                            s[t];
                        return i ? e(i) : e
                    }
                    if (t instanceof Function) return t(i);
                    var s = {};
                    return e(t, i)
                }),
                w = (s.generateLabels = function (t, i, e, s) {
                    var o = new Array(i);
                    return labelTemplateString && n(o, function (i, n) {
                        o[n] = C(t, {
                            value: e + s * (n + 1)
                        })
                    }), o
                }, s.easingEffects = {
                    linear: function (t) {
                        return t
                    },
                    easeInQuad: function (t) {
                        return t * t
                    },
                    easeOutQuad: function (t) {
                        return -1 * t * (t - 2)
                    },
                    easeInOutQuad: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t : -0.5 * (--t * (t - 2) - 1)
                    },
                    easeInCubic: function (t) {
                        return t * t * t
                    },
                    easeOutCubic: function (t) {
                        return 1 * ((t = t / 1 - 1) * t * t + 1)
                    },
                    easeInOutCubic: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t : .5 * ((t -= 2) * t * t + 2)
                    },
                    easeInQuart: function (t) {
                        return t * t * t * t
                    },
                    easeOutQuart: function (t) {
                        return -1 * ((t = t / 1 - 1) * t * t * t - 1)
                    },
                    easeInOutQuart: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t * t : -0.5 * ((t -= 2) * t * t * t - 2)
                    },
                    easeInQuint: function (t) {
                        return 1 * (t /= 1) * t * t * t * t
                    },
                    easeOutQuint: function (t) {
                        return 1 * ((t = t / 1 - 1) * t * t * t * t + 1)
                    },
                    easeInOutQuint: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t * t * t : .5 * ((t -= 2) * t * t * t * t + 2)
                    },
                    easeInSine: function (t) {
                        return -1 * Math.cos(t / 1 * (Math.PI / 2)) + 1
                    },
                    easeOutSine: function (t) {
                        return 1 * Math.sin(t / 1 * (Math.PI / 2))
                    },
                    easeInOutSine: function (t) {
                        return -0.5 * (Math.cos(Math.PI * t / 1) - 1)
                    },
                    easeInExpo: function (t) {
                        return 0 === t ? 1 : 1 * Math.pow(2, 10 * (t / 1 - 1))
                    },
                    easeOutExpo: function (t) {
                        return 1 === t ? 1 : 1 * (-Math.pow(2, -10 * t / 1) + 1)
                    },
                    easeInOutExpo: function (t) {
                        return 0 === t ? 0 : 1 === t ? 1 : (t /= .5) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) :
                            .5 * (-Math.pow(2, -10 * --t) + 2)
                    },
                    easeInCirc: function (t) {
                        return t >= 1 ? t : -1 * (Math.sqrt(1 - (t /= 1) * t) - 1)
                    },
                    easeOutCirc: function (t) {
                        return 1 * Math.sqrt(1 - (t = t / 1 - 1) * t)
                    },
                    easeInOutCirc: function (t) {
                        return (t /= .5) < 1 ? -0.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -=
                            2) * t) + 1)
                    },
                    easeInElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (e || (e = .3), s < Math.abs(1) ? (s = 1,
                            i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), -(s * Math.pow(2,
                            10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math.PI / e)))
                    },
                    easeOutElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (e || (e = .3), s < Math.abs(1) ? (s = 1,
                            i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), s * Math.pow(2, -
                            10 * t) * Math.sin(2 * (1 * t - i) * Math.PI / e) + 1)
                    },
                    easeInOutElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 2 == (t /= .5) ? 1 : (e || (e = .3 * 1.5), s < Math.abs(1) ? (
                                s = 1, i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), 1 > t ? -
                            .5 * s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math.PI /
                                e) : s * Math.pow(2, -10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math
                                .PI / e) * .5 + 1)
                    },
                    easeInBack: function (t) {
                        var i = 1.70158;
                        return 1 * (t /= 1) * t * ((i + 1) * t - i)
                    },
                    easeOutBack: function (t) {
                        var i = 1.70158;
                        return 1 * ((t = t / 1 - 1) * t * ((i + 1) * t + i) + 1)
                    },
                    easeInOutBack: function (t) {
                        var i = 1.70158;
                        return (t /= .5) < 1 ? .5 * t * t * (((i *= 1.525) + 1) * t - i) : .5 * ((t -= 2) *
                            t * (((i *= 1.525) + 1) * t + i) + 2)
                    },
                    easeInBounce: function (t) {
                        return 1 - w.easeOutBounce(1 - t)
                    },
                    easeOutBounce: function (t) {
                        return (t /= 1) < 1 / 2.75 ? 7.5625 * t * t : 2 / 2.75 > t ? 1 * (7.5625 * (t -=
                            1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 * (7.5625 * (t -= 2.25 / 2.75) *
                            t + .9375) : 1 * (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
                    },
                    easeInOutBounce: function (t) {
                        return .5 > t ? .5 * w.easeInBounce(2 * t) : .5 * w.easeOutBounce(2 * t - 1) + .5
                    }
                }),
                b = s.requestAnimFrame = function () {
                    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window
                        .mozRequestAnimationFrame || window.oRequestAnimationFrame || window
                        .msRequestAnimationFrame || function (t) {
                            return window.setTimeout(t, 1e3 / 60)
                        }
                }(),
                P = s.cancelAnimFrame = function () {
                    return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window
                        .mozCancelAnimationFrame || window.oCancelAnimationFrame || window.msCancelAnimationFrame ||
                        function (t) {
                            return window.clearTimeout(t, 1e3 / 60)
                        }
                }(),
                L = (s.animationLoop = function (t, i, e, s, n, o) {
                    var a = 0,
                        h = w[e] || w.linear,
                        l = function () {
                            a++;
                            var e = a / i,
                                r = h(e);
                            t.call(o, r, e, a), s.call(o, r, e), i > a ? o.animationFrame = b(l) : n.apply(o)
                        };
                    b(l)
                }, s.getRelativePosition = function (t) {
                    var i, e, s = t.originalEvent || t,
                        n = t.currentTarget || t.srcElement,
                        o = n.getBoundingClientRect();
                    return s.touches ? (i = s.touches[0].clientX - o.left, e = s.touches[0].clientY - o.top) : (
                        i = s.clientX - o.left, e = s.clientY - o.top), {
                        x: i,
                        y: e
                    }
                }, s.addEvent = function (t, i, e) {
                    t.addEventListener ? t.addEventListener(i, e) : t.attachEvent ? t.attachEvent("on" + i, e) :
                        t["on" + i] = e
                }),
                k = s.removeEvent = function (t, i, e) {
                    t.removeEventListener ? t.removeEventListener(i, e, !1) : t.detachEvent ? t.detachEvent("on" +
                        i, e) : t["on" + i] = c
                },
                F = (s.bindEvents = function (t, i, e) {
                    t.events || (t.events = {}), n(i, function (i) {
                        t.events[i] = function () {
                            e.apply(t, arguments)
                        }, L(t.chart.canvas, i, t.events[i])
                    })
                }, s.unbindEvents = function (t, i) {
                    n(i, function (i, e) {
                        k(t.chart.canvas, e, i)
                    })
                }),
                R = s.getMaximumWidth = function (t) {
                    var i = t.parentNode;
                    return i.clientWidth
                },
                T = s.getMaximumHeight = function (t) {
                    var i = t.parentNode;
                    return i.clientHeight
                },
                A = (s.getMaximumSize = s.getMaximumWidth, s.retinaScale = function (t) {
                    var i = t.ctx,
                        e = t.canvas.width,
                        s = t.canvas.height;
                    window.devicePixelRatio && (i.canvas.style.width = e + "px", i.canvas.style.height = s +
                        "px", i.canvas.height = s * window.devicePixelRatio, i.canvas.width = e * window
                        .devicePixelRatio, i.scale(window.devicePixelRatio, window.devicePixelRatio))
                }),
                M = s.clear = function (t) {
                    t.ctx.clearRect(0, 0, t.width, t.height)
                },
                W = s.fontString = function (t, i, e) {
                    return i + " " + t + "px " + e
                },
                z = s.longestText = function (t, i, e) {
                    t.font = i;
                    var s = 0;
                    return n(e, function (i) {
                        var e = t.measureText(i).width;
                        s = e > s ? e : s
                    }), s
                },
                B = s.drawRoundedRectangle = function (t, i, e, s, n, o) {
                    t.beginPath(), t.moveTo(i + o, e), t.lineTo(i + s - o, e), t.quadraticCurveTo(i + s, e, i + s,
                            e + o), t.lineTo(i + s, e + n - o), t.quadraticCurveTo(i + s, e + n, i + s - o, e + n),
                        t.lineTo(i + o, e + n), t.quadraticCurveTo(i, e + n, i, e + n - o), t.lineTo(i, e + o), t
                        .quadraticCurveTo(i, e, i + o, e), t.closePath()
                };
            e.instances = {}, e.Type = function (t, i, s) {
                    this.options = i, this.chart = s, this.id = u(), e.instances[this.id] = this, i.responsive &&
                        this.resize(), this.initialize.call(this, t)
                }, a(e.Type.prototype, {
                    initialize: function () {
                        return this
                    },
                    clear: function () {
                        return M(this.chart), this
                    },
                    stop: function () {
                        return P(this.animationFrame), this
                    },
                    resize: function (t) {
                        this.stop();
                        var i = this.chart.canvas,
                            e = R(this.chart.canvas),
                            s = this.options.maintainAspectRatio ? e / this.chart.aspectRatio : T(this.chart
                                .canvas);
                        return i.width = this.chart.width = e, i.height = this.chart.height = s, A(this
                            .chart), "function" == typeof t && t.apply(this, Array.prototype.slice.call(
                            arguments, 1)), this
                    },
                    reflow: c,
                    render: function (t) {
                        return t && this.reflow(), this.options.animation && !t ? s.animationLoop(this.draw,
                            this.options.animationSteps, this.options.animationEasing, this.options
                            .onAnimationProgress, this.options.onAnimationComplete, this) : (this
                            .draw(), this.options.onAnimationComplete.call(this)), this
                    },
                    generateLegend: function () {
                        return C(this.options.legendTemplate, this)
                    },
                    destroy: function () {
                        this.clear(), F(this, this.events);
                        var t = this.chart.canvas;
                        t.width = this.chart.width, t.height = this.chart.height, t.style.removeProperty ? (
                                t.style.removeProperty("width"), t.style.removeProperty("height")) : (t
                                .style.removeAttribute("width"), t.style.removeAttribute("height")),
                            delete e.instances[this.id]
                    },
                    showTooltip: function (t, i) {
                        "undefined" == typeof this.activeElements && (this.activeElements = []);
                        var o = function (t) {
                            var i = !1;
                            return t.length !== this.activeElements.length ? i = !0 : (n(t, function (t,
                                e) {
                                t !== this.activeElements[e] && (i = !0)
                            }, this), i)
                        }.call(this, t);
                        if (o || i) {
                            if (this.activeElements = t, this.draw(), this.options.customTooltips && this
                                .options.customTooltips(!1), t.length > 0)
                                if (this.datasets && this.datasets.length > 1) {
                                    for (var a, h, r = this.datasets.length - 1; r >= 0 && (a = this
                                            .datasets[r].points || this.datasets[r].bars || this.datasets[r]
                                            .segments, h = l(a, t[0]), -1 === h); r--);
                                    var c = [],
                                        u = [],
                                        d = function () {
                                            var t, i, e, n, o, a = [],
                                                l = [],
                                                r = [];
                                            return s.each(this.datasets, function (i) {
                                                t = i.points || i.bars || i.segments, t[h] && t[h]
                                                    .hasValue() && a.push(t[h])
                                            }), s.each(a, function (t) {
                                                l.push(t.x), r.push(t.y), c.push(s.template(this
                                                    .options.multiTooltipTemplate, t)), u.push({
                                                    fill: t._saved.fillColor || t.fillColor,
                                                    stroke: t._saved.strokeColor || t
                                                        .strokeColor
                                                })
                                            }, this), o = m(r), e = g(r), n = m(l), i = g(l), {
                                                x: n > this.chart.width / 2 ? n : i,
                                                y: (o + e) / 2
                                            }
                                        }.call(this, h);
                                    new e.MultiTooltip({
                                        x: d.x,
                                        y: d.y,
                                        xPadding: this.options.tooltipXPadding,
                                        yPadding: this.options.tooltipYPadding,
                                        xOffset: this.options.tooltipXOffset,
                                        fillColor: this.options.tooltipFillColor,
                                        textColor: this.options.tooltipFontColor,
                                        fontFamily: this.options.tooltipFontFamily,
                                        fontStyle: this.options.tooltipFontStyle,
                                        fontSize: this.options.tooltipFontSize,
                                        titleTextColor: this.options.tooltipTitleFontColor,
                                        titleFontFamily: this.options.tooltipTitleFontFamily,
                                        titleFontStyle: this.options.tooltipTitleFontStyle,
                                        titleFontSize: this.options.tooltipTitleFontSize,
                                        cornerRadius: this.options.tooltipCornerRadius,
                                        labels: c,
                                        legendColors: u,
                                        legendColorBackground: this.options
                                            .multiTooltipKeyBackground,
                                        title: t[0].label,
                                        chart: this.chart,
                                        ctx: this.chart.ctx,
                                        custom: this.options.customTooltips
                                    }).draw()
                                } else n(t, function (t) {
                                    var i = t.tooltipPosition();
                                    new e.Tooltip({
                                        x: Math.round(i.x),
                                        y: Math.round(i.y),
                                        xPadding: this.options.tooltipXPadding,
                                        yPadding: this.options.tooltipYPadding,
                                        fillColor: this.options.tooltipFillColor,
                                        textColor: this.options.tooltipFontColor,
                                        fontFamily: this.options.tooltipFontFamily,
                                        fontStyle: this.options.tooltipFontStyle,
                                        fontSize: this.options.tooltipFontSize,
                                        caretHeight: this.options.tooltipCaretSize,
                                        cornerRadius: this.options.tooltipCornerRadius,
                                        text: C(this.options.tooltipTemplate, t),
                                        chart: this.chart,
                                        custom: this.options.customTooltips
                                    }).draw()
                                }, this);
                            return this
                        }
                    },
                    toBase64Image: function () {
                        return this.chart.canvas.toDataURL.apply(this.chart.canvas, arguments)
                    }
                }), e.Type.extend = function (t) {
                    var i = this,
                        s = function () {
                            return i.apply(this, arguments)
                        };
                    if (s.prototype = o(i.prototype), a(s.prototype, t), s.extend = e.Type.extend, t.name || i
                        .prototype.name) {
                        var n = t.name || i.prototype.name,
                            l = e.defaults[i.prototype.name] ? o(e.defaults[i.prototype.name]) : {};
                        e.defaults[n] = a(l, t.defaults), e.types[n] = s, e.prototype[n] = function (t, i) {
                            var o = h(e.defaults.global, e.defaults[n], i || {});
                            return new s(t, o, this)
                        }
                    } else d("Name not provided for this chart, so it hasn't been registered");
                    return i
                }, e.Element = function (t) {
                    a(this, t), this.initialize.apply(this, arguments), this.save()
                }, a(e.Element.prototype, {
                    initialize: function () {},
                    restore: function (t) {
                        return t ? n(t, function (t) {
                            this[t] = this._saved[t]
                        }, this) : a(this, this._saved), this
                    },
                    save: function () {
                        return this._saved = o(this), delete this._saved._saved, this
                    },
                    update: function (t) {
                        return n(t, function (t, i) {
                            this._saved[i] = this[i], this[i] = t
                        }, this), this
                    },
                    transition: function (t, i) {
                        return n(t, function (t, e) {
                            this[e] = (t - this._saved[e]) * i + this._saved[e]
                        }, this), this
                    },
                    tooltipPosition: function () {
                        return {
                            x: this.x,
                            y: this.y
                        }
                    },
                    hasValue: function () {
                        return f(this.value)
                    }
                }), e.Element.extend = r, e.Point = e.Element.extend({
                    display: !0,
                    inRange: function (t, i) {
                        var e = this.hitDetectionRadius + this.radius;
                        return Math.pow(t - this.x, 2) + Math.pow(i - this.y, 2) < Math.pow(e, 2)
                    },
                    draw: function () {
                        if (this.display) {
                            var t = this.ctx;
                            t.beginPath(), t.arc(this.x, this.y, this.radius, 0, 2 * Math.PI), t
                                .closePath(), t.strokeStyle = this.strokeColor, t.lineWidth = this
                                .strokeWidth,
                                t.fillStyle = this.fillColor, t.fill(), t.stroke()
                        }
                    }
                }), e.Arc = e.Element.extend({
                    inRange: function (t, i) {
                        var e = s.getAngleFromPoint(this, {
                                x: t,
                                y: i
                            }),
                            n = e.angle >= this.startAngle && e.angle <= this.endAngle,
                            o = e.distance >= this.innerRadius && e.distance <= this.outerRadius;
                        return n && o
                    },
                    tooltipPosition: function () {
                        var t = this.startAngle + (this.endAngle - this.startAngle) / 2,
                            i = (this.outerRadius - this.innerRadius) / 2 + this.innerRadius;
                        return {
                            x: this.x + Math.cos(t) * i,
                            y: this.y + Math.sin(t) * i
                        }
                    },
                    draw: function (t) {
                        var i = this.ctx;
                        i.beginPath(), i.arc(this.x, this.y, this.outerRadius, this.startAngle, this
                                .endAngle), i.arc(this.x, this.y, this.innerRadius, this.endAngle, this
                                .startAngle, !0), i.closePath(), i.strokeStyle = this.strokeColor, i
                            .lineWidth = this.strokeWidth, i.fillStyle = this.fillColor, i.fill(), i
                            .lineJoin = "bevel", this.showStroke && i.stroke()
                    }
                }), e.Rectangle = e.Element.extend({
                    draw: function () {
                        var t = this.ctx,
                            i = this.width / 2,
                            e = this.x - i,
                            s = this.x + i,
                            n = this.base - (this.base - this.y),
                            o = this.strokeWidth / 2;
                        this.showStroke && (e += o, s -= o, n += o), t.beginPath(), t.fillStyle = this
                            .fillColor, t.strokeStyle = this.strokeColor, t.lineWidth = this.strokeWidth, t
                            .moveTo(e, this.base), t.lineTo(e, n), t.lineTo(s, n), t.lineTo(s, this.base), t
                            .fill(), this.showStroke && t.stroke()
                    },
                    height: function () {
                        return this.base - this.y
                    },
                    inRange: function (t, i) {
                        return t >= this.x - this.width / 2 && t <= this.x + this.width / 2 && i >= this
                            .y && i <= this.base
                    }
                }), e.Tooltip = e.Element.extend({
                    draw: function () {
                        var t = this.chart.ctx;
                        t.font = W(this.fontSize, this.fontStyle, this.fontFamily), this.xAlign = "center",
                            this.yAlign = "above";
                        var i = this.caretPadding = 2,
                            e = t.measureText(this.text).width + 2 * this.xPadding,
                            s = this.fontSize + 2 * this.yPadding,
                            n = s + this.caretHeight + i;
                        this.x + e / 2 > this.chart.width ? this.xAlign = "left" : this.x - e / 2 < 0 && (
                            this.xAlign = "right"), this.y - n < 0 && (this.yAlign = "below");
                        var o = this.x - e / 2,
                            a = this.y - n;
                        if (t.fillStyle = this.fillColor, this.custom) this.custom(this);
                        else {
                            switch (this.yAlign) {
                                case "above":
                                    t.beginPath(), t.moveTo(this.x, this.y - i), t.lineTo(this.x + this
                                            .caretHeight, this.y - (i + this.caretHeight)), t.lineTo(this
                                            .x - this.caretHeight, this.y - (i + this.caretHeight)), t
                                        .closePath(), t.fill();
                                    break;
                                case "below":
                                    a = this.y + i + this.caretHeight, t.beginPath(), t.moveTo(this.x, this
                                        .y + i), t.lineTo(this.x + this.caretHeight, this.y + i + this
                                        .caretHeight), t.lineTo(this.x - this.caretHeight, this.y + i +
                                        this.caretHeight), t.closePath(), t.fill()
                            }
                            switch (this.xAlign) {
                                case "left":
                                    o = this.x - e + (this.cornerRadius + this.caretHeight);
                                    break;
                                case "right":
                                    o = this.x - (this.cornerRadius + this.caretHeight)
                            }
                            B(t, o, a, e, s, this.cornerRadius), t.fill(), t.fillStyle = this.textColor, t
                                .textAlign = "center", t.textBaseline = "middle", t.fillText(this.text, o +
                                    e / 2, a + s / 2)
                        }
                    }
                }), e.MultiTooltip = e.Element.extend({
                    initialize: function () {
                        this.font = W(this.fontSize, this.fontStyle, this.fontFamily), this.titleFont = W(
                                this.titleFontSize, this.titleFontStyle, this.titleFontFamily), this
                            .height = this.labels.length * this.fontSize + (this.labels.length - 1) * (this
                                .fontSize / 2) + 2 * this.yPadding + 1.5 * this.titleFontSize, this.ctx
                            .font = this.titleFont;
                        var t = this.ctx.measureText(this.title).width,
                            i = z(this.ctx, this.font, this.labels) + this.fontSize + 3,
                            e = g([i, t]);
                        this.width = e + 2 * this.xPadding;
                        var s = this.height / 2;
                        this.y - s < 0 ? this.y = s : this.y + s > this.chart.height && (this.y = this.chart
                                .height - s), this.x > this.chart.width / 2 ? this.x -= this.xOffset + this
                            .width : this.x += this.xOffset
                    },
                    getLineHeight: function (t) {
                        var i = this.y - this.height / 2 + this.yPadding,
                            e = t - 1;
                        return 0 === t ? i + this.titleFontSize / 2 : i + (1.5 * this.fontSize * e + this
                            .fontSize / 2) + 1.5 * this.titleFontSize
                    },
                    draw: function () {
                        if (this.custom) this.custom(this);
                        else {
                            B(this.ctx, this.x, this.y - this.height / 2, this.width, this.height, this
                                .cornerRadius);
                            var t = this.ctx;
                            t.fillStyle = this.fillColor, t.fill(), t.closePath(), t.textAlign = "left", t
                                .textBaseline = "middle", t.fillStyle = this.titleTextColor, t.font = this
                                .titleFont, t.fillText(this.title, this.x + this.xPadding, this
                                    .getLineHeight(0)), t.font = this.font, s.each(this.labels, function (i,
                                    e) {
                                    t.fillStyle = this.textColor, t.fillText(i, this.x + this.xPadding +
                                            this.fontSize + 3, this.getLineHeight(e + 1)), t.fillStyle =
                                        this.legendColorBackground, t.fillRect(this.x + this.xPadding,
                                            this.getLineHeight(e + 1) - this.fontSize / 2, this
                                            .fontSize, this.fontSize), t.fillStyle = this.legendColors[
                                            e].fill, t.fillRect(this.x + this.xPadding, this
                                            .getLineHeight(e + 1) - this.fontSize / 2, this.fontSize,
                                            this.fontSize)
                                }, this)
                        }
                    }
                }), e.Scale = e.Element.extend({
                    initialize: function () {
                        this.fit()
                    },
                    buildYLabels: function () {
                        this.yLabels = [];
                        for (var t = v(this.stepValue), i = 0; i <= this.steps; i++) this.yLabels.push(C(
                            this.templateString, {
                                value: (this.min + i * this.stepValue).toFixed(t)
                            }));
                        this.yLabelWidth = this.display && this.showLabels ? z(this.ctx, this.font, this
                            .yLabels) : 0
                    },
                    addXLabel: function (t) {
                        this.xLabels.push(t), this.valuesCount++, this.fit()
                    },
                    removeXLabel: function () {
                        this.xLabels.shift(), this.valuesCount--, this.fit()
                    },
                    fit: function () {
                        this.startPoint = this.display ? this.fontSize : 0, this.endPoint = this.display ?
                            this.height - 1.5 * this.fontSize - 5 : this.height, this.startPoint += this
                            .padding, this.endPoint -= this.padding;
                        var t, i = this.endPoint - this.startPoint;
                        for (this.calculateYRange(i), this.buildYLabels(), this
                            .calculateXLabelRotation(); i > this.endPoint - this.startPoint;) i = this
                            .endPoint - this.startPoint, t = this.yLabelWidth, this.calculateYRange(i), this
                            .buildYLabels(), t < this.yLabelWidth && this.calculateXLabelRotation()
                    },
                    calculateXLabelRotation: function () {
                        this.ctx.font = this.font;
                        var t, i, e = this.ctx.measureText(this.xLabels[0]).width,
                            s = this.ctx.measureText(this.xLabels[this.xLabels.length - 1]).width;
                        if (this.xScalePaddingRight = s / 2 + 3, this.xScalePaddingLeft = e / 2 > this
                            .yLabelWidth + 10 ? e / 2 : this.yLabelWidth + 10, this.xLabelRotation = 0, this
                            .display) {
                            var n, o = z(this.ctx, this.font, this.xLabels);
                            this.xLabelWidth = o;
                            for (var a = Math.floor(this.calculateX(1) - this.calculateX(0)) - 6; this
                                .xLabelWidth > a && 0 === this.xLabelRotation || this.xLabelWidth > a &&
                                this.xLabelRotation <= 90 && this.xLabelRotation > 0;) n = Math.cos(S(this
                                    .xLabelRotation)), t = n * e, i = n * s, t + this.fontSize / 2 > this
                                .yLabelWidth + 8 && (this.xScalePaddingLeft = t + this.fontSize / 2), this
                                .xScalePaddingRight = this.fontSize / 2, this.xLabelRotation++, this
                                .xLabelWidth = n * o;
                            this.xLabelRotation > 0 && (this.endPoint -= Math.sin(S(this.xLabelRotation)) *
                                o + 3)
                        } else this.xLabelWidth = 0, this.xScalePaddingRight = this.padding, this
                            .xScalePaddingLeft = this.padding
                    },
                    calculateYRange: c,
                    drawingArea: function () {
                        return this.startPoint - this.endPoint
                    },
                    calculateY: function (t) {
                        var i = this.drawingArea() / (this.min - this.max);
                        return this.endPoint - i * (t - this.min)
                    },
                    calculateX: function (t) {
                        var i = (this.xLabelRotation > 0, this.width - (this.xScalePaddingLeft + this
                                .xScalePaddingRight)),
                            e = i / Math.max(this.valuesCount - (this.offsetGridLines ? 0 : 1), 1),
                            s = e * t + this.xScalePaddingLeft;
                        return this.offsetGridLines && (s += e / 2), Math.round(s)
                    },
                    update: function (t) {
                        s.extend(this, t), this.fit()
                    },
                    draw: function () {
                        var t = this.ctx,
                            i = (this.endPoint - this.startPoint) / this.steps,
                            e = Math.round(this.xScalePaddingLeft);
                        this.display && (t.fillStyle = this.textColor, t.font = this.font, n(this.yLabels,
                            function (n, o) {
                                var a = this.endPoint - i * o,
                                    h = Math.round(a),
                                    l = this.showHorizontalLines;
                                t.textAlign = "right", t.textBaseline = "middle", this.showLabels &&
                                    t.fillText(n, e - 10, a), 0 !== o || l || (l = !0), l && t
                                    .beginPath(), o > 0 ? (t.lineWidth = this.gridLineWidth, t
                                        .strokeStyle = this.gridLineColor) : (t.lineWidth = this
                                        .lineWidth, t.strokeStyle = this.lineColor), h += s
                                    .aliasPixel(t.lineWidth), l && (t.moveTo(e, h), t.lineTo(this
                                        .width, h), t.stroke(), t.closePath()), t.lineWidth = this
                                    .lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t
                                    .moveTo(e - 5, h), t.lineTo(e, h), t.stroke(), t.closePath()
                            }, this), n(this.xLabels, function (i, e) {
                            var s = this.calculateX(e) + x(this.lineWidth),
                                n = this.calculateX(e - (this.offsetGridLines ? .5 : 0)) + x(
                                    this.lineWidth),
                                o = this.xLabelRotation > 0,
                                a = this.showVerticalLines;
                            0 !== e || a || (a = !0), a && t.beginPath(), e > 0 ? (t.lineWidth =
                                    this.gridLineWidth, t.strokeStyle = this.gridLineColor) : (t
                                    .lineWidth = this.lineWidth, t.strokeStyle = this.lineColor
                                ), a && (t.moveTo(n, this.endPoint), t.lineTo(n, this
                                    .startPoint - 3), t.stroke(), t.closePath()), t.lineWidth =
                                this.lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t
                                .moveTo(n, this.endPoint), t.lineTo(n, this.endPoint + 5), t
                                .stroke(), t.closePath(), t.save(), t.translate(s, o ? this
                                    .endPoint + 12 : this.endPoint + 8), t.rotate(-1 * S(this
                                    .xLabelRotation)), t.font = this.font, t.textAlign = o ?
                                "right" : "center", t.textBaseline = o ? "middle" : "top", t
                                .fillText(i, 0, 0), t.restore()
                        }, this))
                    }
                }), e.RadialScale = e.Element.extend({
                    initialize: function () {
                        this.size = m([this.height, this.width]), this.drawingArea = this.display ? this
                            .size / 2 - (this.fontSize / 2 + this.backdropPaddingY) : this.size / 2
                    },
                    calculateCenterOffset: function (t) {
                        var i = this.drawingArea / (this.max - this.min);
                        return (t - this.min) * i
                    },
                    update: function () {
                        this.lineArc ? this.drawingArea = this.display ? this.size / 2 - (this.fontSize /
                                2 + this.backdropPaddingY) : this.size / 2 : this.setScaleSize(), this
                            .buildYLabels()
                    },
                    buildYLabels: function () {
                        this.yLabels = [];
                        for (var t = v(this.stepValue), i = 0; i <= this.steps; i++) this.yLabels.push(C(
                            this.templateString, {
                                value: (this.min + i * this.stepValue).toFixed(t)
                            }))
                    },
                    getCircumference: function () {
                        return 2 * Math.PI / this.valuesCount
                    },
                    setScaleSize: function () {
                        var t, i, e, s, n, o, a, h, l, r, c, u, d = m([this.height / 2 - this
                                .pointLabelFontSize - 5, this.width / 2
                            ]),
                            p = this.width,
                            g = 0;
                        for (this.ctx.font = W(this.pointLabelFontSize, this.pointLabelFontStyle, this
                                .pointLabelFontFamily), i = 0; i < this.valuesCount; i++) t = this
                            .getPointPosition(i, d), e = this.ctx.measureText(C(this.templateString, {
                                value: this.labels[i]
                            })).width + 5, 0 === i || i === this.valuesCount / 2 ? (s = e / 2, t.x + s >
                                p && (p = t.x + s, n = i), t.x - s < g && (g = t.x - s, a = i)) : i < this
                            .valuesCount / 2 ? t.x + e > p && (p = t.x + e, n = i) : i > this.valuesCount /
                            2 && t.x - e < g && (g = t.x - e, a = i);
                        l = g, r = Math.ceil(p - this.width), o = this.getIndexAngle(n), h = this
                            .getIndexAngle(a), c = r / Math.sin(o + Math.PI / 2), u = l / Math.sin(h + Math
                                .PI / 2), c = f(c) ? c : 0, u = f(u) ? u : 0, this.drawingArea = d - (u +
                                c) / 2, this.setCenterPoint(u, c)
                    },
                    setCenterPoint: function (t, i) {
                        var e = this.width - i - this.drawingArea,
                            s = t + this.drawingArea;
                        this.xCenter = (s + e) / 2, this.yCenter = this.height / 2
                    },
                    getIndexAngle: function (t) {
                        var i = 2 * Math.PI / this.valuesCount;
                        return t * i - Math.PI / 2
                    },
                    getPointPosition: function (t, i) {
                        var e = this.getIndexAngle(t);
                        return {
                            x: Math.cos(e) * i + this.xCenter,
                            y: Math.sin(e) * i + this.yCenter
                        }
                    },
                    draw: function () {
                        if (this.display) {
                            var t = this.ctx;
                            if (n(this.yLabels, function (i, e) {
                                    if (e > 0) {
                                        var s, n = e * (this.drawingArea / this.steps),
                                            o = this.yCenter - n;
                                        if (this.lineWidth > 0)
                                            if (t.strokeStyle = this.lineColor, t.lineWidth = this
                                                .lineWidth, this.lineArc) t.beginPath(), t.arc(this
                                                    .xCenter, this.yCenter, n, 0, 2 * Math.PI), t
                                                .closePath(), t.stroke();
                                            else {
                                                t.beginPath();
                                                for (var a = 0; a < this.valuesCount; a++) s = this
                                                    .getPointPosition(a, this.calculateCenterOffset(this
                                                        .min + e * this.stepValue)), 0 === a ? t.moveTo(
                                                        s.x, s.y) : t.lineTo(s.x, s.y);
                                                t.closePath(), t.stroke()
                                            } if (this.showLabels) {
                                            if (t.font = W(this.fontSize, this.fontStyle, this
                                                    .fontFamily), this.showLabelBackdrop) {
                                                var h = t.measureText(i).width;
                                                t.fillStyle = this.backdropColor, t.fillRect(this
                                                    .xCenter - h / 2 - this.backdropPaddingX, o -
                                                    this.fontSize / 2 - this.backdropPaddingY, h +
                                                    2 * this.backdropPaddingX, this.fontSize + 2 *
                                                    this.backdropPaddingY)
                                            }
                                            t.textAlign = "center", t.textBaseline = "middle", t
                                                .fillStyle = this.fontColor, t.fillText(i, this.xCenter,
                                                    o)
                                        }
                                    }
                                }, this), !this.lineArc) {
                                t.lineWidth = this.angleLineWidth, t.strokeStyle = this.angleLineColor;
                                for (var i = this.valuesCount - 1; i >= 0; i--) {
                                    if (this.angleLineWidth > 0) {
                                        var e = this.getPointPosition(i, this.calculateCenterOffset(this
                                            .max));
                                        t.beginPath(), t.moveTo(this.xCenter, this.yCenter), t.lineTo(e.x, e
                                            .y), t.stroke(), t.closePath()
                                    }
                                    var s = this.getPointPosition(i, this.calculateCenterOffset(this.max) +
                                        5);
                                    t.font = W(this.pointLabelFontSize, this.pointLabelFontStyle, this
                                        .pointLabelFontFamily), t.fillStyle = this.pointLabelFontColor;
                                    var o = this.labels.length,
                                        a = this.labels.length / 2,
                                        h = a / 2,
                                        l = h > i || i > o - h,
                                        r = i === h || i === o - h;
                                    t.textAlign = 0 === i ? "center" : i === a ? "center" : a > i ? "left" :
                                        "right", t.textBaseline = r ? "middle" : l ? "bottom" : "top", t
                                        .fillText(this.labels[i], s.x, s.y)
                                }
                            }
                        }
                    }
                }), s.addEvent(window, "resize", function () {
                    var t;
                    return function () {
                        clearTimeout(t), t = setTimeout(function () {
                            n(e.instances, function (t) {
                                t.options.responsive && t.resize(t.render, !0)
                            })
                        }, 50)
                    }
                }()), p ? define(function () {
                    return e
                }) : "object" == typeof module && module.exports && (module.exports = e), t.Chart = e, e
                .noConflict = function () {
                    return t.Chart = i, e
                }
        }).call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleBeginAtZero: !0,
                        scaleShowGridLines: !0,
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleGridLineWidth: 1,
                        scaleShowHorizontalLines: !0,
                        scaleShowVerticalLines: !0,
                        barShowStroke: !0,
                        barStrokeWidth: 2,
                        barValueSpacing: 5,
                        barDatasetSpacing: 1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Bar",
                    defaults: s,
                    initialize: function (t) {
                        var s = this.options;
                        this.ScaleClass = i.Scale.extend({
                                offsetGridLines: !0,
                                calculateBarX: function (t, i, e) {
                                    var n = this.calculateBaseWidth(),
                                        o = this.calculateX(e) - n / 2,
                                        a = this.calculateBarWidth(t);
                                    return o + a * i + i * s.barDatasetSpacing + a / 2
                                },
                                calculateBaseWidth: function () {
                                    return this.calculateX(1) - this.calculateX(0) - 2 * s
                                        .barValueSpacing
                                },
                                calculateBarWidth: function (t) {
                                    var i = this.calculateBaseWidth() - (t - 1) * s
                                        .barDatasetSpacing;
                                    return i / t
                                }
                            }), this.datasets = [], this.options.showTooltips && e.bindEvents(this, this
                                .options.tooltipEvents,
                                function (t) {
                                    var i = "mouseout" !== t.type ? this.getBarsAtEvent(t) : [];
                                    this.eachBars(function (t) {
                                        t.restore(["fillColor", "strokeColor"])
                                    }), e.each(i, function (t) {
                                        t.fillColor = t.highlightFill, t.strokeColor = t
                                            .highlightStroke
                                    }), this.showTooltip(i)
                                }), this.BarClass = i.Rectangle.extend({
                                strokeWidth: this.options.barStrokeWidth,
                                showStroke: this.options.barShowStroke,
                                ctx: this.chart.ctx
                            }), e.each(t.datasets, function (i) {
                                var s = {
                                    label: i.label || null,
                                    fillColor: i.fillColor,
                                    strokeColor: i.strokeColor,
                                    bars: []
                                };
                                this.datasets.push(s), e.each(i.data, function (e, n) {
                                    s.bars.push(new this.BarClass({
                                        value: e,
                                        label: t.labels[n],
                                        datasetLabel: i.label,
                                        strokeColor: i.strokeColor,
                                        fillColor: i.fillColor,
                                        highlightFill: i.highlightFill || i
                                            .fillColor,
                                        highlightStroke: i.highlightStroke || i
                                            .strokeColor
                                    }))
                                }, this)
                            }, this), this.buildScale(t.labels), this.BarClass.prototype.base = this.scale
                            .endPoint, this.eachBars(function (t, i, s) {
                                e.extend(t, {
                                    width: this.scale.calculateBarWidth(this.datasets.length),
                                    x: this.scale.calculateBarX(this.datasets.length, s, i),
                                    y: this.scale.endPoint
                                }), t.save()
                            }, this), this.render()
                    },
                    update: function () {
                        this.scale.update(), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor", "strokeColor"])
                        }), this.eachBars(function (t) {
                            t.save()
                        }), this.render()
                    },
                    eachBars: function (t) {
                        e.each(this.datasets, function (i, s) {
                            e.each(i.bars, t, this, s)
                        }, this)
                    },
                    getBarsAtEvent: function (t) {
                        for (var i, s = [], n = e.getRelativePosition(t), o = function (t) {
                                s.push(t.bars[i])
                            }, a = 0; a < this.datasets.length; a++)
                            for (i = 0; i < this.datasets[a].bars.length; i++)
                                if (this.datasets[a].bars[i].inRange(n.x, n.y)) return e.each(this.datasets,
                                    o), s;
                        return s
                    },
                    buildScale: function (t) {
                        var i = this,
                            s = function () {
                                var t = [];
                                return i.eachBars(function (i) {
                                    t.push(i.value)
                                }), t
                            },
                            n = {
                                templateString: this.options.scaleLabel,
                                height: this.chart.height,
                                width: this.chart.width,
                                ctx: this.chart.ctx,
                                textColor: this.options.scaleFontColor,
                                fontSize: this.options.scaleFontSize,
                                fontStyle: this.options.scaleFontStyle,
                                fontFamily: this.options.scaleFontFamily,
                                valuesCount: t.length,
                                beginAtZero: this.options.scaleBeginAtZero,
                                integersOnly: this.options.scaleIntegersOnly,
                                calculateYRange: function (t) {
                                    var i = e.calculateScaleRange(s(), t, this.fontSize, this
                                        .beginAtZero, this.integersOnly);
                                    e.extend(this, i)
                                },
                                xLabels: t,
                                font: e.fontString(this.options.scaleFontSize, this.options.scaleFontStyle,
                                    this.options.scaleFontFamily),
                                lineWidth: this.options.scaleLineWidth,
                                lineColor: this.options.scaleLineColor,
                                showHorizontalLines: this.options.scaleShowHorizontalLines,
                                showVerticalLines: this.options.scaleShowVerticalLines,
                                gridLineWidth: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineWidth : 0,
                                gridLineColor: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineColor : "rgba(0,0,0,0)",
                                padding: this.options.showScale ? 0 : this.options.barShowStroke ? this
                                    .options.barStrokeWidth : 0,
                                showLabels: this.options.scaleShowLabels,
                                display: this.options.showScale
                            };
                        this.options.scaleOverride && e.extend(n, {
                            calculateYRange: e.noop,
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this
                                .options.scaleStepWidth
                        }), this.scale = new this.ScaleClass(n)
                    },
                    addData: function (t, i) {
                        e.each(t, function (t, e) {
                            this.datasets[e].bars.push(new this.BarClass({
                                value: t,
                                label: i,
                                x: this.scale.calculateBarX(this.datasets.length, e,
                                    this.scale.valuesCount + 1),
                                y: this.scale.endPoint,
                                width: this.scale.calculateBarWidth(this.datasets
                                    .length),
                                base: this.scale.endPoint,
                                strokeColor: this.datasets[e].strokeColor,
                                fillColor: this.datasets[e].fillColor
                            }))
                        }, this), this.scale.addXLabel(i), this.update()
                    },
                    removeData: function () {
                        this.scale.removeXLabel(), e.each(this.datasets, function (t) {
                            t.bars.shift()
                        }, this), this.update()
                    },
                    reflow: function () {
                        e.extend(this.BarClass.prototype, {
                            y: this.scale.endPoint,
                            base: this.scale.endPoint
                        });
                        var t = e.extend({
                            height: this.chart.height,
                            width: this.chart.width
                        });
                        this.scale.update(t)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear();
                        this.chart.ctx;
                        this.scale.draw(i), e.each(this.datasets, function (t, s) {
                            e.each(t.bars, function (t, e) {
                                t.hasValue() && (t.base = this.scale.endPoint, t
                                    .transition({
                                        x: this.scale.calculateBarX(this.datasets
                                            .length, s, e),
                                        y: this.scale.calculateY(t.value),
                                        width: this.scale.calculateBarWidth(this
                                            .datasets.length)
                                    }, i).draw())
                            }, this)
                        }, this)
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        segmentShowStroke: !0,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 2,
                        percentageInnerCutout: 50,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: !0,
                        animateScale: !1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Doughnut",
                    defaults: s,
                    initialize: function (t) {
                        this.segments = [], this.outerRadius = (e.min([this.chart.width, this.chart
                                .height
                            ]) - this.options.segmentStrokeWidth / 2) / 2, this.SegmentArc = i
                            .Arc.extend({
                                ctx: this.chart.ctx,
                                x: this.chart.width / 2,
                                y: this.chart.height / 2
                            }), this.options.showTooltips && e.bindEvents(this, this.options.tooltipEvents,
                                function (t) {
                                    var i = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
                                    e.each(this.segments, function (t) {
                                        t.restore(["fillColor"])
                                    }), e.each(i, function (t) {
                                        t.fillColor = t.highlightColor
                                    }), this.showTooltip(i)
                                }), this.calculateTotal(t), e.each(t, function (t, i) {
                                this.addData(t, i, !0)
                            }, this), this.render()
                    },
                    getSegmentsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.segments, function (t) {
                            t.inRange(s.x, s.y) && i.push(t)
                        }, this), i
                    },
                    addData: function (t, i, e) {
                        var s = i || this.segments.length;
                        this.segments.splice(s, 0, new this.SegmentArc({
                            value: t.value,
                            outerRadius: this.options.animateScale ? 0 : this.outerRadius,
                            innerRadius: this.options.animateScale ? 0 : this.outerRadius /
                                100 * this.options.percentageInnerCutout,
                            fillColor: t.color,
                            highlightColor: t.highlight || t.color,
                            showStroke: this.options.segmentShowStroke,
                            strokeWidth: this.options.segmentStrokeWidth,
                            strokeColor: this.options.segmentStrokeColor,
                            startAngle: 1.5 * Math.PI,
                            circumference: this.options.animateRotate ? 0 : this
                                .calculateCircumference(t.value),
                            label: t.label
                        })), e || (this.reflow(), this.update())
                    },
                    calculateCircumference: function (t) {
                        return 2 * Math.PI * (Math.abs(t) / this.total)
                    },
                    calculateTotal: function (t) {
                        this.total = 0, e.each(t, function (t) {
                            this.total += Math.abs(t.value)
                        }, this)
                    },
                    update: function () {
                        this.calculateTotal(this.segments), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor"])
                        }), e.each(this.segments, function (t) {
                            t.save()
                        }), this.render()
                    },
                    removeData: function (t) {
                        var i = e.isNumber(t) ? t : this.segments.length - 1;
                        this.segments.splice(i, 1), this.reflow(), this.update()
                    },
                    reflow: function () {
                        e.extend(this.SegmentArc.prototype, {
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.outerRadius = (e.min([this.chart.width, this.chart.height]) - this
                            .options.segmentStrokeWidth / 2) / 2, e.each(this.segments, function (t) {
                            t.update({
                                outerRadius: this.outerRadius,
                                innerRadius: this.outerRadius / 100 * this.options
                                    .percentageInnerCutout
                            })
                        }, this)
                    },
                    draw: function (t) {
                        var i = t ? t : 1;
                        this.clear(), e.each(this.segments, function (t, e) {
                            t.transition({
                                    circumference: this.calculateCircumference(t.value),
                                    outerRadius: this.outerRadius,
                                    innerRadius: this.outerRadius / 100 * this.options
                                        .percentageInnerCutout
                                }, i), t.endAngle = t.startAngle + t.circumference, t.draw(), 0 ===
                                e && (t.startAngle = 1.5 * Math.PI), e < this.segments.length - 1 &&
                                (this.segments[e + 1].startAngle = t.endAngle)
                        }, this)
                    }
                }), i.types.Doughnut.extend({
                    name: "Pie",
                    defaults: e.merge(s, {
                        percentageInnerCutout: 0
                    })
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleShowGridLines: !0,
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleGridLineWidth: 1,
                        scaleShowHorizontalLines: !0,
                        scaleShowVerticalLines: !0,
                        bezierCurve: !0,
                        bezierCurveTension: .4,
                        pointDot: !0,
                        pointDotRadius: 4,
                        pointDotStrokeWidth: 1,
                        pointHitDetectionRadius: 20,
                        datasetStroke: !0,
                        datasetStrokeWidth: 2,
                        datasetFill: !0,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Line",
                    defaults: s,
                    initialize: function (t) {
                        this.PointClass = i.Point.extend({
                            strokeWidth: this.options.pointDotStrokeWidth,
                            radius: this.options.pointDotRadius,
                            display: this.options.pointDot,
                            hitDetectionRadius: this.options.pointHitDetectionRadius,
                            ctx: this.chart.ctx,
                            inRange: function (t) {
                                return Math.pow(t - this.x, 2) < Math.pow(this.radius + this
                                    .hitDetectionRadius, 2)
                            }
                        }), this.datasets = [], this.options.showTooltips && e.bindEvents(this, this
                            .options.tooltipEvents,
                            function (t) {
                                var i = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
                                this.eachPoints(function (t) {
                                    t.restore(["fillColor", "strokeColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightFill, t.strokeColor = t
                                        .highlightStroke
                                }), this.showTooltip(i)
                            }), e.each(t.datasets, function (i) {
                            var s = {
                                label: i.label || null,
                                fillColor: i.fillColor,
                                strokeColor: i.strokeColor,
                                pointColor: i.pointColor,
                                pointStrokeColor: i.pointStrokeColor,
                                points: []
                            };
                            this.datasets.push(s), e.each(i.data, function (e, n) {
                                s.points.push(new this.PointClass({
                                    value: e,
                                    label: t.labels[n],
                                    datasetLabel: i.label,
                                    strokeColor: i.pointStrokeColor,
                                    fillColor: i.pointColor,
                                    highlightFill: i.pointHighlightFill || i
                                        .pointColor,
                                    highlightStroke: i.pointHighlightStroke || i
                                        .pointStrokeColor
                                }))
                            }, this), this.buildScale(t.labels), this.eachPoints(function (t,
                                i) {
                                e.extend(t, {
                                    x: this.scale.calculateX(i),
                                    y: this.scale.endPoint
                                }), t.save()
                            }, this)
                        }, this), this.render()
                    },
                    update: function () {
                        this.scale.update(), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor", "strokeColor"])
                        }), this.eachPoints(function (t) {
                            t.save()
                        }), this.render()
                    },
                    eachPoints: function (t) {
                        e.each(this.datasets, function (i) {
                            e.each(i.points, t, this)
                        }, this)
                    },
                    getPointsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.datasets, function (t) {
                            e.each(t.points, function (t) {
                                t.inRange(s.x, s.y) && i.push(t)
                            })
                        }, this), i
                    },
                    buildScale: function (t) {
                        var s = this,
                            n = function () {
                                var t = [];
                                return s.eachPoints(function (i) {
                                    t.push(i.value)
                                }), t
                            },
                            o = {
                                templateString: this.options.scaleLabel,
                                height: this.chart.height,
                                width: this.chart.width,
                                ctx: this.chart.ctx,
                                textColor: this.options.scaleFontColor,
                                fontSize: this.options.scaleFontSize,
                                fontStyle: this.options.scaleFontStyle,
                                fontFamily: this.options.scaleFontFamily,
                                valuesCount: t.length,
                                beginAtZero: this.options.scaleBeginAtZero,
                                integersOnly: this.options.scaleIntegersOnly,
                                calculateYRange: function (t) {
                                    var i = e.calculateScaleRange(n(), t, this.fontSize, this
                                        .beginAtZero, this.integersOnly);
                                    e.extend(this, i)
                                },
                                xLabels: t,
                                font: e.fontString(this.options.scaleFontSize, this.options.scaleFontStyle,
                                    this.options.scaleFontFamily),
                                lineWidth: this.options.scaleLineWidth,
                                lineColor: this.options.scaleLineColor,
                                showHorizontalLines: this.options.scaleShowHorizontalLines,
                                showVerticalLines: this.options.scaleShowVerticalLines,
                                gridLineWidth: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineWidth : 0,
                                gridLineColor: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineColor : "rgba(0,0,0,0)",
                                padding: this.options.showScale ? 0 : this.options.pointDotRadius + this
                                    .options.pointDotStrokeWidth,
                                showLabels: this.options.scaleShowLabels,
                                display: this.options.showScale
                            };
                        this.options.scaleOverride && e.extend(o, {
                            calculateYRange: e.noop,
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this
                                .options.scaleStepWidth
                        }), this.scale = new i.Scale(o)
                    },
                    addData: function (t, i) {
                        e.each(t, function (t, e) {
                            this.datasets[e].points.push(new this.PointClass({
                                value: t,
                                label: i,
                                x: this.scale.calculateX(this.scale.valuesCount + 1),
                                y: this.scale.endPoint,
                                strokeColor: this.datasets[e].pointStrokeColor,
                                fillColor: this.datasets[e].pointColor
                            }))
                        }, this), this.scale.addXLabel(i), this.update()
                    },
                    removeData: function () {
                        this.scale.removeXLabel(), e.each(this.datasets, function (t) {
                            t.points.shift()
                        }, this), this.update()
                    },
                    reflow: function () {
                        var t = e.extend({
                            height: this.chart.height,
                            width: this.chart.width
                        });
                        this.scale.update(t)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear();
                        var s = this.chart.ctx,
                            n = function (t) {
                                return null !== t.value
                            },
                            o = function (t, i, s) {
                                return e.findNextWhere(i, n, s) || t
                            },
                            a = function (t, i, s) {
                                return e.findPreviousWhere(i, n, s) || t
                            };
                        this.scale.draw(i), e.each(this.datasets, function (t) {
                            var h = e.where(t.points, n);
                            e.each(t.points, function (t, e) {
                                    t.hasValue() && t.transition({
                                        y: this.scale.calculateY(t.value),
                                        x: this.scale.calculateX(e)
                                    }, i)
                                }, this), this.options.bezierCurve && e.each(h, function (t, i) {
                                    var s = i > 0 && i < h.length - 1 ? this.options
                                        .bezierCurveTension : 0;
                                    t.controlPoints = e.splineCurve(a(t, h, i), t, o(t, h, i),
                                            s), t.controlPoints.outer.y > this.scale.endPoint ?
                                        t.controlPoints.outer.y = this.scale.endPoint : t
                                        .controlPoints.outer.y < this.scale.startPoint && (t
                                            .controlPoints.outer.y = this.scale.startPoint), t
                                        .controlPoints.inner.y > this.scale.endPoint ? t
                                        .controlPoints.inner.y = this.scale.endPoint : t
                                        .controlPoints.inner.y < this.scale.startPoint && (t
                                            .controlPoints.inner.y = this.scale.startPoint)
                                }, this), s.lineWidth = this.options.datasetStrokeWidth, s
                                .strokeStyle = t.strokeColor, s.beginPath(), e.each(h, function (t,
                                    i) {
                                    if (0 === i) s.moveTo(t.x, t.y);
                                    else if (this.options.bezierCurve) {
                                        var e = a(t, h, i);
                                        s.bezierCurveTo(e.controlPoints.outer.x, e.controlPoints
                                            .outer.y, t.controlPoints.inner.x, t
                                            .controlPoints.inner.y, t.x, t.y)
                                    } else s.lineTo(t.x, t.y)
                                }, this), s.stroke(), this.options.datasetFill && h.length > 0 && (s
                                    .lineTo(h[h.length - 1].x, this.scale.endPoint), s.lineTo(h[0]
                                        .x, this.scale.endPoint), s.fillStyle = t.fillColor, s
                                    .closePath(), s.fill()), e.each(h, function (t) {
                                    t.draw()
                                })
                        }, this)
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleShowLabelBackdrop: !0,
                        scaleBackdropColor: "rgba(255,255,255,0.75)",
                        scaleBeginAtZero: !0,
                        scaleBackdropPaddingY: 2,
                        scaleBackdropPaddingX: 2,
                        scaleShowLine: !0,
                        segmentShowStroke: !0,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 2,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: !0,
                        animateScale: !1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "PolarArea",
                    defaults: s,
                    initialize: function (t) {
                        this.segments = [], this.SegmentArc = i.Arc.extend({
                            showStroke: this.options.segmentShowStroke,
                            strokeWidth: this.options.segmentStrokeWidth,
                            strokeColor: this.options.segmentStrokeColor,
                            ctx: this.chart.ctx,
                            innerRadius: 0,
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.scale = new i.RadialScale({
                            display: this.options.showScale,
                            fontStyle: this.options.scaleFontStyle,
                            fontSize: this.options.scaleFontSize,
                            fontFamily: this.options.scaleFontFamily,
                            fontColor: this.options.scaleFontColor,
                            showLabels: this.options.scaleShowLabels,
                            showLabelBackdrop: this.options.scaleShowLabelBackdrop,
                            backdropColor: this.options.scaleBackdropColor,
                            backdropPaddingY: this.options.scaleBackdropPaddingY,
                            backdropPaddingX: this.options.scaleBackdropPaddingX,
                            lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
                            lineColor: this.options.scaleLineColor,
                            lineArc: !0,
                            width: this.chart.width,
                            height: this.chart.height,
                            xCenter: this.chart.width / 2,
                            yCenter: this.chart.height / 2,
                            ctx: this.chart.ctx,
                            templateString: this.options.scaleLabel,
                            valuesCount: t.length
                        }), this.updateScaleRange(t), this.scale.update(), e.each(t, function (t, i) {
                            this.addData(t, i, !0)
                        }, this), this.options.showTooltips && e.bindEvents(this, this.options
                            .tooltipEvents,
                            function (t) {
                                var i = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
                                e.each(this.segments, function (t) {
                                    t.restore(["fillColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightColor
                                }), this.showTooltip(i)
                            }), this.render()
                    },
                    getSegmentsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.segments, function (t) {
                            t.inRange(s.x, s.y) && i.push(t)
                        }, this), i
                    },
                    addData: function (t, i, e) {
                        var s = i || this.segments.length;
                        this.segments.splice(s, 0, new this.SegmentArc({
                            fillColor: t.color,
                            highlightColor: t.highlight || t.color,
                            label: t.label,
                            value: t.value,
                            outerRadius: this.options.animateScale ? 0 : this.scale
                                .calculateCenterOffset(t.value),
                            circumference: this.options.animateRotate ? 0 : this.scale
                                .getCircumference(),
                            startAngle: 1.5 * Math.PI
                        })), e || (this.reflow(), this.update())
                    },
                    removeData: function (t) {
                        var i = e.isNumber(t) ? t : this.segments.length - 1;
                        this.segments.splice(i, 1), this.reflow(), this.update()
                    },
                    calculateTotal: function (t) {
                        this.total = 0, e.each(t, function (t) {
                            this.total += t.value
                        }, this), this.scale.valuesCount = this.segments.length
                    },
                    updateScaleRange: function (t) {
                        var i = [];
                        e.each(t, function (t) {
                            i.push(t.value)
                        });
                        var s = this.options.scaleOverride ? {
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this.options
                                .scaleStepWidth
                        } : e.calculateScaleRange(i, e.min([this.chart.width, this.chart.height]) / 2,
                            this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options
                            .scaleIntegersOnly);
                        e.extend(this.scale, s, {
                            size: e.min([this.chart.width, this.chart.height]),
                            xCenter: this.chart.width / 2,
                            yCenter: this.chart.height / 2
                        })
                    },
                    update: function () {
                        this.calculateTotal(this.segments), e.each(this.segments, function (t) {
                            t.save()
                        }), this.reflow(), this.render()
                    },
                    reflow: function () {
                        e.extend(this.SegmentArc.prototype, {
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.updateScaleRange(this.segments), this.scale.update(), e.extend(this
                            .scale, {
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2
                            }), e.each(this.segments, function (t) {
                            t.update({
                                outerRadius: this.scale.calculateCenterOffset(t.value)
                            })
                        }, this)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear(), e.each(this.segments, function (t, e) {
                            t.transition({
                                circumference: this.scale.getCircumference(),
                                outerRadius: this.scale.calculateCenterOffset(t.value)
                            }, i), t.endAngle = t.startAngle + t.circumference, 0 === e && (t
                                .startAngle = 1.5 * Math.PI), e < this.segments.length - 1 && (
                                this.segments[e + 1].startAngle = t.endAngle), t.draw()
                        }, this), this.scale.draw()
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers;
                i.Type.extend({
                    name: "Radar",
                    defaults: {
                        scaleShowLine: !0,
                        angleShowLineOut: !0,
                        scaleShowLabels: !1,
                        scaleBeginAtZero: !0,
                        angleLineColor: "rgba(0,0,0,.1)",
                        angleLineWidth: 1,
                        pointLabelFontFamily: "'Arial'",
                        pointLabelFontStyle: "normal",
                        pointLabelFontSize: 10,
                        pointLabelFontColor: "#666",
                        pointDot: !0,
                        pointDotRadius: 3,
                        pointDotStrokeWidth: 1,
                        pointHitDetectionRadius: 20,
                        datasetStroke: !0,
                        datasetStrokeWidth: 2,
                        datasetFill: !0,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    },
                    initialize: function (t) {
                        this.PointClass = i.Point.extend({
                                strokeWidth: this.options.pointDotStrokeWidth,
                                radius: this.options.pointDotRadius,
                                display: this.options.pointDot,
                                hitDetectionRadius: this.options.pointHitDetectionRadius,
                                ctx: this.chart.ctx
                            }), this.datasets = [], this.buildScale(t), this.options.showTooltips && e
                            .bindEvents(this, this.options.tooltipEvents, function (t) {
                                var i = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
                                this.eachPoints(function (t) {
                                    t.restore(["fillColor", "strokeColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightFill, t.strokeColor = t
                                        .highlightStroke
                                }), this.showTooltip(i)
                            }), e.each(t.datasets, function (i) {
                                var s = {
                                    label: i.label || null,
                                    fillColor: i.fillColor,
                                    strokeColor: i.strokeColor,
                                    pointColor: i.pointColor,
                                    pointStrokeColor: i.pointStrokeColor,
                                    points: []
                                };
                                this.datasets.push(s), e.each(i.data, function (e, n) {
                                    var o;
                                    this.scale.animation || (o = this.scale.getPointPosition(n,
                                            this.scale.calculateCenterOffset(e))), s.points
                                        .push(new this.PointClass({
                                            value: e,
                                            label: t.labels[n],
                                            datasetLabel: i.label,
                                            x: this.options.animation ? this.scale
                                                .xCenter : o.x,
                                            y: this.options.animation ? this.scale
                                                .yCenter : o.y,
                                            strokeColor: i.pointStrokeColor,
                                            fillColor: i.pointColor,
                                            highlightFill: i.pointHighlightFill || i
                                                .pointColor,
                                            highlightStroke: i.pointHighlightStroke || i
                                                .pointStrokeColor
                                        }))
                                }, this)
                            }, this), this.render()
                    },
                    eachPoints: function (t) {
                        e.each(this.datasets, function (i) {
                            e.each(i.points, t, this)
                        }, this)
                    },
                    getPointsAtEvent: function (t) {
                        var i = e.getRelativePosition(t),
                            s = e.getAngleFromPoint({
                                x: this.scale.xCenter,
                                y: this.scale.yCenter
                            }, i),
                            n = 2 * Math.PI / this.scale.valuesCount,
                            o = Math.round((s.angle - 1.5 * Math.PI) / n),
                            a = [];
                        return (o >= this.scale.valuesCount || 0 > o) && (o = 0), s.distance <= this.scale
                            .drawingArea && e.each(this.datasets, function (t) {
                                a.push(t.points[o])
                            }), a
                    },
                    buildScale: function (t) {
                        this.scale = new i.RadialScale({
                                display: this.options.showScale,
                                fontStyle: this.options.scaleFontStyle,
                                fontSize: this.options.scaleFontSize,
                                fontFamily: this.options.scaleFontFamily,
                                fontColor: this.options.scaleFontColor,
                                showLabels: this.options.scaleShowLabels,
                                showLabelBackdrop: this.options.scaleShowLabelBackdrop,
                                backdropColor: this.options.scaleBackdropColor,
                                backdropPaddingY: this.options.scaleBackdropPaddingY,
                                backdropPaddingX: this.options.scaleBackdropPaddingX,
                                lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
                                lineColor: this.options.scaleLineColor,
                                angleLineColor: this.options.angleLineColor,
                                angleLineWidth: this.options.angleShowLineOut ? this.options
                                    .angleLineWidth : 0,
                                pointLabelFontColor: this.options.pointLabelFontColor,
                                pointLabelFontSize: this.options.pointLabelFontSize,
                                pointLabelFontFamily: this.options.pointLabelFontFamily,
                                pointLabelFontStyle: this.options.pointLabelFontStyle,
                                height: this.chart.height,
                                width: this.chart.width,
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2,
                                ctx: this.chart.ctx,
                                templateString: this.options.scaleLabel,
                                labels: t.labels,
                                valuesCount: t.datasets[0].data.length
                            }), this.scale.setScaleSize(), this.updateScaleRange(t.datasets), this.scale
                            .buildYLabels()
                    },
                    updateScaleRange: function (t) {
                        var i = function () {
                                var i = [];
                                return e.each(t, function (t) {
                                    t.data ? i = i.concat(t.data) : e.each(t.points, function (t) {
                                        i.push(t.value)
                                    })
                                }), i
                            }(),
                            s = this.options.scaleOverride ? {
                                steps: this.options.scaleSteps,
                                stepValue: this.options.scaleStepWidth,
                                min: this.options.scaleStartValue,
                                max: this.options.scaleStartValue + this.options.scaleSteps * this.options
                                    .scaleStepWidth
                            } : e.calculateScaleRange(i, e.min([this.chart.width, this.chart.height]) / 2,
                                this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options
                                .scaleIntegersOnly);
                        e.extend(this.scale, s)
                    },
                    addData: function (t, i) {
                        this.scale.valuesCount++, e.each(t, function (t, e) {
                            var s = this.scale.getPointPosition(this.scale.valuesCount, this.scale
                                .calculateCenterOffset(t));
                            this.datasets[e].points.push(new this.PointClass({
                                value: t,
                                label: i,
                                x: s.x,
                                y: s.y,
                                strokeColor: this.datasets[e].pointStrokeColor,
                                fillColor: this.datasets[e].pointColor
                            }))
                        }, this), this.scale.labels.push(i), this.reflow(), this.update()
                    },
                    removeData: function () {
                        this.scale.valuesCount--, this.scale.labels.shift(), e.each(this.datasets,
                            function (t) {
                                t.points.shift()
                            }, this), this.reflow(), this.update()
                    },
                    update: function () {
                        this.eachPoints(function (t) {
                            t.save()
                        }), this.reflow(), this.render()
                    },
                    reflow: function () {
                        e.extend(this.scale, {
                                width: this.chart.width,
                                height: this.chart.height,
                                size: e.min([this.chart.width, this.chart.height]),
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2
                            }), this.updateScaleRange(this.datasets), this.scale.setScaleSize(), this.scale
                            .buildYLabels()
                    },
                    draw: function (t) {
                        var i = t || 1,
                            s = this.chart.ctx;
                        this.clear(), this.scale.draw(), e.each(this.datasets, function (t) {
                            e.each(t.points, function (t, e) {
                                    t.hasValue() && t.transition(this.scale.getPointPosition(e,
                                        this.scale.calculateCenterOffset(t.value)), i)
                                }, this), s.lineWidth = this.options.datasetStrokeWidth, s
                                .strokeStyle = t.strokeColor, s.beginPath(), e.each(t.points,
                                    function (t, i) {
                                        0 === i ? s.moveTo(t.x, t.y) : s.lineTo(t.x, t.y)
                                    }, this), s.closePath(), s.stroke(), s.fillStyle = t.fillColor,
                                s.fill(), e.each(t.points, function (t) {
                                    t.hasValue() && t.draw()
                                })
                        }, this)
                    }
                })
            }.call(this);

    </script>

    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>
        window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')

    </script>

    <script>
        /**
         * Chartinator
         * Version: 0.3.8
         * URL: http://chartinator.com
         * Description: Chartinator transforms data contained in HTML tables, Google Sheets and js arrays into charts using Google Charts
         * Requires: jQuery, Google Charts
         * Author: jbowyers
         * Copyright: 2014-2015 jbowyers
         * License: This file is part of Chartinator.
         * Chartinator is free software: you can redistribute it and/or modify
         * it under the terms of the GNU General Public License as published by
         * the Free Software Foundation, either version 3 of the License, or
         * (at your option) any later version.
         *
         * Chartinator is distributed in the hope that it will be useful,
         * but WITHOUT ANY WARRANTY; without even the implied warranty of
         * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
         * GNU General Public License for more details.
         *
         * You should have received a copy of the GNU General Public License
         * along with this program.  If not, see http://www.gnu.org/licenses/
         *
         * ABOUT CHARTINATOR  ===========================================================================
         * Chartinator transforms data contained in HTML tables, Google Sheets and js arrays into charts using Google Charts.
         *
         * Apply the jQuery Chartinator plugin to the chart canvas(es)
         * or select the table(s) and Chartinator will insert a new chart canvas(es) after the table
         * or define the Google Sheet key id
         * or create js data arrays
         *
         * The header cells (th elements) in HTML table must be in the first row (or first column if transposing table)
         * and should have one of the following:
         * 'data-type' attributes: 'string' 'number' 'boolean' 'date' 'datetime' 'timeofday'
         * or 'data-role' attributes:  'tooltip','annotation'
         * The caption element's text is used as a title for the chart
         * See the readme file for more info
         */

        ;
        (function ($, window, document, Math, undefined) {

            'use strict';

            var chartinator = function (el, options) {

                //  The chartinator object
                var o = this;

                //  Define table and chart elements	
                var $tableS = $(el);
                var $chartS = $tableS;

                //  Define fonts
                o.fontFamily = $('body').css('font-family').replace(/["']{1}/gi, "") ||
                    'Arial, Helvetica, sans-serif';

                //  Initialize option defaults ------------------------------------------------------------
                o.optionsInit = {

                    // The path to the Google AJAX API
                    urlJSAPI: 'https://www.google.com/jsapi',

                    // The Google Sheet key
                    // The id code of the Google sheet taken from the public url of your Google Sheet
                    // Default: false
                    googleSheetKey: false,

                    // The data columns js array
                    // An array of object literals that define each column
                    // Default: false
                    columns: false,

                    // Column indexes array - An array of column indexes defining where
                    // the data will be inserted into any existing data extracted from an HTML table or Google Sheet
                    // Default: false - js data array columns replace any existing columns
                    // Note: when inserting more than one column be sure to increment index number
                    // to account for previously inserted indexes
                    colIndexes: false,

                    // Rows - The rows data-array
                    // If colIndexes array has values the row data will be inserted into the columns
                    // defined in the colindexes array. Otherwise the row data will be appended
                    // to any existing row data extracted from an HTML table or Google Sheet
                    // Default: false
                    rows: false,

                    // The jQuery selector of the HTML table element to extract the data from.
                    // Default: false - Checks if the element this plugin is applied to is an HTML table
                    tableSel: false,

                    // The data title
                    // A title used to identify the set of data
                    // Used as a caption when generating an HTML table
                    dataTitle: false,

                    // Create Table
                    // Create an HTML table from chart data
                    // Note: This table will replace an existing HTML table
                    createTable: false,

                    // Ignore row indexes array - An array of row index numbers to ignore
                    // Default: []
                    // Note: Only works on data extracted from HTML tables or Google Sheets
                    // The headings row is index 0
                    ignoreRow: [],

                    // Ignore column indexes array
                    // An array of column indexes to ignore in the HTML table or Google Sheet
                    // Default: []
                    // Note: Only works on data extracted from HTML tables or Google Sheets
                    ignoreCol: [],

                    // Transpose data Boolean - swap columns and rows
                    // Default: false
                    // Note: Only works on data extracted from HTML tables or Google Sheets
                    transpose: false,

                    // The tooltip concatenation - Defines a string for concatenating a custom tooltip.
                    // Keywords: 'domain', 'data', 'label' - these will be replaced with current values
                    // 'domain': the primary axis value, 'data': the data value, 'label': the column title
                    // Default: false - use Google Charts tooltip defaults
                    // Note: Only works when extracting data from HTML tables or Google Sheets
                    // Not supported on pie, calendar charts
                    tooltipConcat: false,

                    // The annotation concatenation - Defines a string for concatenating a custom annotation.
                    // Keywords: 'domain', 'data', 'label' - these will be replaced with current values
                    // 'domain': the primary axis value, 'data': the data value, 'label': the column title
                    // Default: false - use Google Charts annotation defaults
                    // Note: Only works when extracting data from HTML tables or Google Sheets.
                    // Not supported on pie, geo, calendar charts
                    annotationConcat: false,

                    // The chart type - String
                    // Derived from the Google Charts visualization class name
                    // Default: 'BarChart'
                    // Use TitleCase names. eg. BarChart, PieChart, ColumnChart, Calendar, GeoChart, Table.
                    // See Google Charts Gallery for a complete list of Chart types
                    // https://developers.google.com/chart/interactive/docs/gallery
                    chartType: 'BarChart',

                    // Chart Id - The id applied to the chart container element as an id and a class
                    // This is overridden if the chart element has an id or is user defined
                    chartId: 'c24_chart_' + Math.random().toString(36).substr(2, 9),

                    // The class to apply to the chart container element
                    chartClass: 'chtr-chart',

                    // Table Id - The id applied to the table element as an id and a class
                    // This is overridden if the table element has an id or is user defined
                    tableId: 'c24_table_' + Math.random().toString(36).substr(2, 9),

                    // The class to apply to the table element
                    tableClass: 'chtr-table',

                    // The chart aspect ratio custom option - width/height
                    // Used to calculate the chart dimensions relative to the width or height
                    // this is overridden if the Google Chart's height and width options have values
                    // Default: false - not used
                    chartAspectRatio: false,

                    // The chart zoom factor - number
                    // A scaling factor for the chart - uses CSS3 transform
                    // To prevent tooltips from displaying off canvas while zooming, set tooltip.isHtml: true
                    // Default: 0
                    chartZoom: 0,

                    // The chart offset - Array of numbers
                    // An array of x and y offset percentage values
                    // Used to offset the chart by percentages of the height and width - uses CSS3 transform
                    // To prevent tooltips from displaying off canvas while offsetting, set tooltip.isHtml: true
                    // Default: false
                    chartOffset: false,

                    // Google Bar Chart Default Options
                    barChart: {

                        // The font size in pixels - Number
                        // Or use css selectors as keywords to assign font sizes from the page
                        // For example: 'body'
                        // Default: false - Use Google Charts defaults
                        fontSize: false,

                        // the body font-family
                        fontName: o.fontFamily,

                        chartArea: {
                            left: '20%',
                            top: 40,
                            width: '75%',
                            height: '85%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    // Google Pie Chart Default Options
                    pieChart: {

                        // The font size in pixels - Number
                        // Or use css selectors as keywords to assign font sizes from the page
                        // For example: 'body'
                        // Default: false - Use Google Charts defaults
                        fontSize: false,

                        // the body font-family
                        fontName: o.fontFamily,

                        chartArea: {
                            left: '6%',
                            top: 40,
                            width: '94%',
                            height: '100%'
                        }
                    },

                    // Google Column Chart Default Options
                    columnChart: {

                        // The font size in pixels - Number
                        // Or use css selectors as keywords to assign font sizes from the page
                        // For example: 'body'
                        // Default: false - Use Google Charts defaults
                        fontSize: false,

                        // the body font-family
                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '85%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    // Google line Chart Default Options
                    lineChart: {

                        // The font size in pixels - Number
                        // Or use css selectors as keywords to assign font sizes from the page
                        // For example: 'body'
                        // Default: false - Use Google Charts defaults
                        fontSize: false,

                        // the body font-family
                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '80%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    // Google Area Chart Default Options
                    areaChart: {

                        // The font size in pixels - Number
                        // Or use css selectors as keywords to assign font sizes from the page
                        // For example: 'body'
                        // Default: false - Use Google Charts defaults
                        fontSize: false,

                        // the body font-family
                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '80%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    // Google Calendar Chart Default Options
                    calendar: {

                        // The cell scaling factor custom option - Not a Google Chart option
                        // Used to refactor the cell size in responsive designs
                        // this is overridden if the calendar.cellSize option has a value
                        cellScaleFactor: 0.017,

                        titleTextStyle: {
                            // Note: Support for this option has been added by Chartinator
                            // but is not supported by Google Charts for this chart type

                            color: '#000',
                            fontWeight: 'bold',
                            fontName: o.fontFamily,

                            // The font size in pixels - Number
                            // Or use css selectors as keywords to assign font sizes from the page
                            // For example: 'body'
                            // Default: false - Use Google Charts defaults
                            fontSize: 'h3'
                        },

                        calendar: {
                            monthLabel: {

                                // The font size in pixels - Number
                                // Or use css selectors as keywords to assign font sizes from the page
                                // For example: 'body'
                                // Default: false - Use Google Charts defaults
                                fontSize: false,

                                fontName: o.fontFamily
                            },
                            dayOfWeekLabel: {

                                // The font size in pixels - Number
                                // Or use css selectors as keywords to assign font sizes from the page
                                // For example: 'body'
                                // Default: false - Use Google Charts defaults
                                fontSize: false,

                                fontName: o.fontFamily
                            }
                        },
                        tooltip: {

                            // Note: Support for this option has been added by Chartinator
                            // but is not supported by Google Charts for this chart type
                            textStyle: {
                                color: '#000',
                                fontName: o.fontFamily,
                                fontSize: 16
                            }
                        }
                    },

                    // Google Table Chart Default Options
                    table: {

                        // Format a data column in a Table Chart
                        formatter: {

                            // Formatter type - Options: 'none', 'BarFormat'
                            type: 'none',

                            // The index number of the column to format. Options: 0, 1, 2, etc.
                            column: 1
                        },

                        // Allow HTML in cells. default: false
                        allowHtml: true,

                        cssClassNames: {
                            headerRow: 'headerRow',
                            tableRow: 'tableRow',
                            oddTableRow: 'oddTableRow',
                            selectedTableRow: 'selectedTableRow',
                            hoverTableRow: 'hoverTableRow',
                            headerCell: 'headerCell',
                            tableCell: 'tableCell',
                            rowNumberCell: 'rowNumberCell'
                        }
                    },

                    // Show table along with chart. String, Options: 'show', 'hide', 'remove'
                    showTable: 'hide',

                    // The CSS to apply to show or hide the table and chart
                    showTableCSS: {
                        'position': 'static',
                        'top': 0,
                        'width': ''
                    },
                    hideTableCSS: {
                        'position': 'absolute',
                        'top': '-99999px',
                        'width': $tableS.width()
                    },
                    showChartCSS: {},
                    hideChartCSS: {
                        'opacity': 0
                    }

                }; //  o.optionsInit close

                // The Google Chart options object
                o.chartOptions = {};

                // The Google Chart options object clone
                o.cchartOptions = {};

                // Window resize event timer function
                o.timer = false;

                // Chart Id - The id to apply to the chart container element
                o.chartId = o.optionsInit.chartId;

                // Table Id - The id to apply to the table element
                o.tableId = o.optionsInit.tableId;

                // The table has data boolean
                o.tableHasData = false;

                o.tableCaption = false;

                // The Google Sheet data object - Data returned
                o.googleSheetData = false;

                // Data array - the array of collected data to send to Google Charts
                o.dataArray = [];

                // Set chartPackage - Default: corechart - The Google Chart Package to load.
                o.chartPackage = 'corechart';

                // Array of chart types included in the Google Charts corechart package
                o.coreCharts = ['BarChart', 'ColumnChart', 'PieChart', 'AreaChart', 'BubbleChart',
                    'CandlestickChart', 'ComboChart', 'Histogram', 'LineChart', 'ScatterChart',
                    'SteppedAreaChart'
                ];

                // Init chart parent
                o.chartParent = false;

                // Init the window width
                o.windowWidth = false;

                // Init chart parent width
                o.chartParentWidth = false;

                //  Initiate Chart ======================================================================
                o.init = function (el, options) {

                    //  Merge options
                    o.options = $.extend(true, {}, o.optionsInit, options);

                    // Update chartId
                    o.chartId = options.chartId || $chartS.attr('id') || o.options.chartId;

                    // Define table and chart elements --------------------------------------------------

                    // Set table element
                    if (o.options.tableSel) {
                        $tableS = ($(o.options.tableSel + ' td').length) ? $(o.options.tableSel) : $tableS;
                    }

                    // Check table for data
                    o.tableHasData = $tableS.find('td').length;

                    if ($chartS[0] === $tableS[0]) { // table and chart are the same element

                        if (o.tableHasData) { // chart element does not exist

                            // Reset Chart id
                            o.chartId = o.options.chartId;

                            // Insert a new chart element after the table
                            $chartS = $('<div id="' + o.chartId +
                                '" class="' + o.chartId + ' ' + o.options.chartClass +
                                '"></div>').insertAfter($tableS);

                        } else { // table does not exist
                            $tableS = false;
                        }
                    }

                    // Add chart class and id
                    $chartS
                        .addClass(o.chartId + ' ' + o.options.chartClass)
                        .attr('id', o.chartId);

                    // Add table class and id and get caption
                    if (o.tableHasData) {

                        // Update tableId
                        o.tableId = options.tableId || $tableS.attr('id') || o.options.tableId;

                        // Apply id and classes to table
                        $tableS
                            .addClass(o.tableId + ' ' + o.options.tableClass)
                            .attr('id', o.tableId);

                        o.tableCaption = $tableS.find('caption');

                    } else {

                        // Update tableId
                        o.tableId = o.options.tableId;
                    }

                    // Get chart parent element
                    o.chartParent = $chartS.parent();

                    // Get data ----------------------------------------------------------
                    if (o.options.googleSheetKey) {

                        // Get Google Sheets data
                        o.getGoogleSheet(o.options.googleSheetKey, o.setupChart);
                    } else {
                        o.setupChart();
                    }

                }; // o.init close

                // Get Google Sheet data - CSV format
                o.getGoogleSheet = function (key, callBack) {

                    $.ajax({
                            type: 'GET',
                            url: 'https://spreadsheets.google.com/spreadsheet/pub?key=' + key +
                                '&output=csv',
                            dataType: 'text'
                        })
                        .done(function (data) {
                            o.googleSheetData = data;
                            callBack();
                        })
                        .fail(function (e) {
                            o.googleSheetData = e;
                            callBack();
                            // Google Sheet failed
                            console.log('Google Sheet failed');
                        });
                };

                // Set the chart - get Google Chart
                o.setupChart = function () {

                    // Get data
                    o.dataArray = o.collectData();

                    if (!o.dataArray.length) { // No data

                        // Show table remove chart
                        o.showTableChart('show', 'remove');
                        console.log('No data found in data array');
                        return;
                    }

                    // Set chart package
                    if (o.coreCharts.indexOf(o.options.chartType) === -1) { // not a core chart

                        // Get chart package from chart type
                        o.chartPackage = o.options.chartType.toLowerCase();
                    }

                    // Construct Chart options -------------------------------------------

                    // Set the Google chart options
                    if (o.options.chartOptions) { // Use chartOptions object if it exists
                        o.chartOptions = o.options.chartOptions;
                    } else if (o.options[o.camelCase(o.options
                            .chartType)]) { // Use options specific to the chart type if they exist
                        o.chartOptions = o.options[o.camelCase(o.options.chartType)];
                    }

                    // Clone Google Chart options so we don't overwrite original values
                    o.cchartOptions = $.extend(true, {}, o.chartOptions);

                    // Create table -------------------------------------------------------
                    if (o.options.createTable) {

                        // The caption text
                        var tableTitle = o.options.dataTitle || o.cchartOptions.title || 'The Chart Data';

                        if (o.tableHasData) {
                            $tableS.replaceWith(o.generateTable(o.dataArray, tableTitle, o.tableId, o
                                .options.tableClass));
                        } else {
                            $tableS = o.generateTable(o.dataArray, tableTitle, o.tableId, o.options
                                .tableClass).insertBefore($chartS);
                        }
                    } else if (o.tableHasData && o.options.dataTitle) {
                        o.tableCaption.text(o.options.dataTitle);
                    }

                    // Load Google Chart --------------------------------------------------

                    // Hide chart and HTML table
                    o.showTableChart('hide', 'hide');

                    try {

                        $.ajax({
                                url: o.options.urlJSAPI,
                                dataType: 'script',
                                cache: true
                            })
                            .done(function () {

                                // Create and draw Chart
                                google.load('visualization', '1', {
                                    packages: [o.chartPackage],
                                    callback: o.drawChart
                                });

                                // Add Window Resize event
                                o.addResize();
                            })
                            .fail(function () {

                                // Chart failed - Show HTML table and remove chart
                                o.showTableChart('show', 'remove');
                            });
                    } catch (e) {

                        // Chart failed - Show HTML table and remove chart
                        o.showTableChart('show', 'remove');
                        console.log(e);
                    }

                };

                // Collect data - Assemble data from the HTML table, js array and Google Sheet
                // Returns an Array of data
                o.collectData = function () {

                    var dataArray = [];

                    // Format Google Sheet data
                    if (o.googleSheetData && !o.googleSheetData.statusText) {
                        dataArray = o.formatSheet(o.googleSheetData);
                    } else if (o.googleSheetData) {
                        console.log(o.googleSheetData);
                    }

                    // Get HTML table data
                    // Note: this overwrites any data extracted from A Google Sheet
                    if (o.tableHasData) {
                        dataArray = o.getTableData($tableS);
                    }

                    // Add/overwrite with js data-array columns
                    if (o.options.columns) {
                        if (dataArray[0] && dataArray[0][0] && dataArray[0][0]
                            .label) { // header data exists
                            if (o.options.colIndexes) { // insert columns
                                for (var i = 0; i < o.options.colIndexes.length; i++) {
                                    dataArray[0].splice(o.options.colIndexes[i], 0, o.options.columns[i]);
                                }
                            } else {
                                // Overwrite columns array as first row
                                dataArray[0] = o.options.columns;
                            }
                        } else { // header data does not exists
                            // Insert columns array as first row
                            dataArray.unshift(o.options.columns);
                        }
                    }

                    // Add js data-array rows
                    if (o.options.rows && dataArray.length) { // js data array exists
                        if (o.options.colIndexes) { // colIndexes array exists
                            for (var i = 0; i < o.options.rows
                                .length; i++) { // loop through each row in js data array
                                for (var j = 0; j < o.options.colIndexes
                                    .length; j++) { // loop through colIndexes

                                    // Insert new data into dataArray
                                    dataArray[i + 1].splice(o.options.colIndexes[j], 0, o.options.rows[i][
                                        j
                                    ]);
                                }
                            }
                        } else { // colIndexes array does not exist
                            // Add rows to end of dataArray
                            $.merge(dataArray, o.options.rows);
                        }
                    }

                    return dataArray;

                };

                // Draw the chart
                o.drawChart = function () {

                    // Create dataTable -----------------------------------------------------------
                    o.data = new google.visualization.arrayToDataTable(o.dataArray);

                    if (!o.data || !o.data.getNumberOfRows()) { // No data

                        // Show table remove chart
                        o.showTableChart('show', 'remove');

                        console.log('Google Charts data table failed');
                        return;
                    }

                    // Format data ----------------------------------------------------------------
                    if (o.cchartOptions.formatter && o.cchartOptions.formatter.type !== 'none') {
                        var formatter = new google.visualization[o.cchartOptions.formatter.type](o
                            .cchartOptions.formatter);
                        formatter.format(o.data, o.cchartOptions.formatter
                            .column); // Apply formatter to column
                    }

                    // Adjust options -------------------------------------------------------------

                    // Set chart Title
                    if (o.tableHasData) {
                        o.cchartOptions.title = o.cchartOptions.title || o.tableCaption.text() || '';
                    }

                    // Set the Calendar cell size if a calendar chart
                    if (o.options.chartType === 'Calendar') {
                        o.cchartOptions.calendar.cellSize = o.cchartOptions.calendar.cellSize || $chartS
                            .width() * o.cchartOptions.cellScaleFactor;
                    }

                    // Set font sizes
                    if (o.cchartOptions.fontSize && isNaN(parseInt(o.cchartOptions.fontSize, 10))) {
                        o.cchartOptions.fontSize = o.getFontSize(o.cchartOptions.fontSize, 16);
                    }
                    if (o.cchartOptions.titleTextStyle && o.cchartOptions.titleTextStyle.fontSize && isNaN(
                            parseInt(o.cchartOptions.titleTextStyle.fontSize, 10))) {
                        o.cchartOptions.titleTextStyle.fontSize = o.getFontSize(o.cchartOptions
                            .titleTextStyle.fontSize, 16);
                    }
                    if (o.cchartOptions.calendar) {
                        if (o.cchartOptions.calendar.monthLabel && o.cchartOptions.calendar.monthLabel
                            .fontSize && isNaN(parseInt(o.cchartOptions.calendar.monthLabel.fontSize, 10))
                        ) {
                            o.cchartOptions.calendar.monthLabel.fontSize = o.getFontSize(o.cchartOptions
                                .calendar.monthLabel.fontSize, 16);
                        }
                        if (o.cchartOptions.calendar.dayOfWeekLabel && o.cchartOptions.calendar
                            .dayOfWeekLabel.fontSize && isNaN(parseInt(o.cchartOptions.calendar
                                .dayOfWeekLabel.fontSize, 10))) {
                            o.cchartOptions.calendar.dayOfWeekLabel.fontSize = o.getFontSize(o.cchartOptions
                                .calendar.dayOfWeekLabel.fontSize, 16);
                        }
                    }

                    // Set Chart dimensions
                    o.setDimensions();

                    // Revise Chart Options -------------------------------------------------------------
                    if (o.options.chartType === 'BarChart' && !o.options.chartAspectRatio && !o.chartOptions
                        .height) { // Height not set

                        var fontSize = o.cchartOptions.fontSize || o.getFontSize('body', 16);
                        // Define height based on font size and number of rows
                        o.cchartOptions.height = fontSize * 2 * o.data.getNumberOfRows();
                    }

                    // Draw chart ----------------------------------------------------------------------

                    // Create and draw the visualization.
                    o.chart = new google.visualization[o.options.chartType]($chartS.get(0));

                    // Add ready and error event listeners
                    google.visualization.events.addListener(o.chart, 'ready', function (e) {
                        // Show chart
                        o.showTableChart(o.options.showTable, 'show');

                        // Store the window width
                        o.windowWidth = $(window).width();

                        // Store the chart parent width
                        o.chartParentWidth = o.chartParent.width();

                        // Zoom and offset chart
                        if (o.options.chartZoom || o.options.chartOffset) {

                            // The CSS3 transform value
                            var transform = '';

                            // The chart canvas object
                            var $chartCanvas = $chartS.children(':last');

                            // The top and left css values to be applied to the tooltip
                            var top = 0;
                            var left = 0;

                            // The zoom and offset values
                            var zoom = parseFloat(o.options.chartZoom) || 0;
                            var tooltipZoom = 1 / zoom || 1;
                            var offsetX = parseInt(o.options.chartOffset[0]) || 0;
                            var offsetY = parseInt(o.options.chartOffset[1]) || 0;
                            offsetX = offsetX * $chartS.width() * zoom / 100;
                            offsetY = offsetY * $chartS.height() * zoom / 100;

                            // Zoom
                            if (zoom) {
                                transform = 'scale(' + zoom + ')';
                                top = ((($chartS.height() * zoom) - $chartS.height()) / 2) / zoom;
                                left = ((($chartS.width() * zoom) - $chartS.width()) / 2) / zoom;
                            }

                            // Offset
                            if (offsetX || offsetY) {
                                transform += ' translate(' + offsetX + 'px,' + offsetY + 'px)';
                                top -= offsetY;
                                left -= offsetX;
                            }

                            // Transform chart and prevent overflow
                            $chartCanvas.css('transform', transform);
                            $chartS.css('overflow', 'hidden');

                            // Add style to head to Adjust tooltip
                            $('<style> .' + o.chartId + ' .google-visualization-tooltip { ' +
                                'top: ' + top + 'px !important; ' +
                                'left: ' + left + 'px !important; ' +
                                'transform: scale(' + tooltipZoom + ')} </style>').appendTo(
                                'head');
                        }

                        //Style calendar chart
                        if (o.options.chartType === 'Calendar') {
                            $chartS.find('text:contains("' + o.cchartOptions.title + '")').css({
                                fill: o.cchartOptions.titleTextStyle.color,
                                fontWeight: o.cchartOptions.titleTextStyle.fontWeight,
                                fontSize: o.cchartOptions.titleTextStyle.fontSize,
                                fontFamily: o.cchartOptions.titleTextStyle.fontName
                            });

                            // Add style to head to style tooltip
                            $('<style> .' + o.chartId + ' .google-visualization-tooltip span { ' +
                                'color: ' + o.cchartOptions.tooltip.textStyle.color +
                                ' !important; ' +
                                'font-size: ' + o.cchartOptions.tooltip.textStyle.fontSize +
                                'px !important; ' +
                                'font-family: "' + o.cchartOptions.tooltip.textStyle.fontName +
                                '" !important; ' +
                                '} </style>').appendTo('head');
                        }
                    });
                    google.visualization.events.addListener(o.chart, 'error', function (e) {
                        // Show table remove chart
                        o.showTableChart('show', 'remove');
                        console.log(e);
                    });
                    //google.visualization.events.addListener( o.chart, 'select', function () {
                    //    // Review tooltip object
                    //    console.log( $( '.google-visualization-tooltip' ) );
                    //});

                    // Draw chart
                    o.chart.draw(o.data, o.cchartOptions);

                }; // o.drawChart close

                // Format Google Sheets csv data
                // Returns an array of formatted data
                o.formatSheet = function (data) {

                    // The array of data to return
                    var dataArray = [];

                    // Format Google Sheet csv data
                    if (data && !data.statusText) {

                        try {

                            // The array of all rows
                            var rows = data.split(/\r\n|\n/);

                            // The Array of column headings
                            var columns = [];

                            // Create cells
                            for (var i = 0; i < rows.length; i++) { // Each row
                                var row = rows[i].split(',');
                                rows[i] = row;
                            }

                            if (o.options.transpose) {
                                rows = o.transpose(rows);
                            }

                            columns = rows[0];

                            // Get and format columns
                            for (var i = 0; i < columns.length; i++) {

                                if (columns[i].toUpperCase() === 'TOOLTIP') {
                                    columns[i] = {
                                        type: 'string',
                                        role: 'tooltip'
                                    };
                                } else if (columns[i].toUpperCase() === 'ANNOTATION') {
                                    columns[i] = {
                                        type: 'string',
                                        role: 'annotation'
                                    };
                                } else {
                                    columns[i] = {
                                        label: columns[i]
                                    };
                                }
                            }

                            // Add data to dataArray
                            dataArray = rows;
                            dataArray[0] = columns;

                            // Format data
                            dataArray = o.formatData(dataArray);
                        } catch (e) {

                            // Formatting of sheet data failed
                            console.log(e);
                        }
                    }

                    return dataArray;
                };

                // Get data from an HTML table
                // Accepts a jQuery html table object
                // Returns a formatted data array
                o.getTableData = function ($tableHTML) {

                    // The data table Array - The array of column and row data extracted from the HTML table
                    var dataTable = [];

                    try {

                        // The rows - The collection of HTML table rows
                        var $rows = $tableHTML.find('tr').not($tableHTML.find('tfoot tr'));

                        // The array of data collected from all rows
                        var rowsArr = [];

                        // Add cells as objects to rowsArr
                        $rows.each(function (row) {

                            rowsArr.push([]);

                            $(this).find('td, th').each(function (col) {

                                var $cell = $(this);
                                var cellObj = {};

                                // Construct the cell object
                                if ($cell.attr('data-type')) {
                                    cellObj.type = $cell.attr('data-type');
                                }
                                if ($cell.attr('data-role')) {
                                    cellObj.role = $cell.attr('data-role');
                                }
                                cellObj.label = $cell.text();

                                // add cell object to rowsArr
                                rowsArr[row].push(cellObj);
                            });
                        });

                        // Transpose data
                        if (o.options.transpose) {
                            rowsArr = o.transpose(rowsArr);
                        }

                        // Add columns to dataTable
                        dataTable.push(rowsArr[0]);

                        // Change cell data back to values - excluding headings
                        for (var i = 1; i < rowsArr.length; i++) { // each row

                            // The Array of row data
                            var rowData = [];

                            for (var j = 0; j < rowsArr[i].length; j++) { // each cell

                                // Add cell to row
                                var cellData = rowsArr[i][j].label || '';
                                rowData.push(cellData);
                            }

                            // add row to dataTable
                            if (rowData.length > 0) {
                                dataTable.push(rowData);
                            }
                        }

                        // Format data
                        dataTable = o.formatData(dataTable);
                    } catch (e) { //  Could not extract data

                        console.log(e);
                        return [];
                    }
                    return dataTable;
                };

                // Format the data - infer data types and add and remove columns
                // Returns an array of formatted data
                o.formatData = function (data) {

                    // The formatted data array - The array of reformatted data
                    var formattedData = data;

                    try {

                        // Array of columns to remove
                        var removeColArr = [];

                        // Dynamic column types array - An array listing the active dynamic column types
                        var dynColTypesArr = [];

                        // The dynamic columns Array - An array of objects containing dynamic column metadata
                        var dynColumns = [];

                        // Remove ignore rows filter function
                        var filterRows = function (n, i) {
                            return (o.options.ignoreRow.indexOf(i) === -1);
                        };

                        // Remove ignore columns filter function
                        var filterCols = function (n, i) {
                            return (o.options.ignoreCol.indexOf(i) === -1);
                        };

                        // Remove dynamic columns filter function
                        var filterDynamic = function (n, i) {
                            return (removeColArr.indexOf(i) === -1);
                        };

                        // Get active dynamic column types
                        if (o.options.tooltipConcat) {
                            dynColTypesArr.push('tooltip');
                        }
                        if (o.options.annotationConcat) {
                            dynColTypesArr.push('annotation');
                        }

                        // Remove ignored rows
                        formattedData = $.grep(formattedData, filterRows);

                        // Remove ignored columns
                        for (var j = 0; j < formattedData.length; j++) { // each row

                            // Remove columns
                            formattedData[j] = $.grep(formattedData[j], filterCols);
                        }

                        // If dynamic tooltip or annotation remove existing tooltip and annotation columns
                        // and add dynamic columns
                        if (dynColTypesArr.length) {

                            // The primary axis heading - used to construct dynamic tooltips and annotations
                            var domain = '';

                            // Get column indexes to remove
                            for (var i = 0; i < formattedData[0].length; i++) { // each column heading

                                var role = formattedData[0][i].role || '';

                                // Add annotation and tooltip column indexes to remove to removeColArr
                                if (role && dynColTypesArr.indexOf(role) !== -1) {
                                    removeColArr.push(i);
                                }
                            }

                            // Remove selected annotation and tooltip columns
                            for (var j = 0; j < formattedData.length; j++) { // each row

                                // Remove columns
                                formattedData[j] = $.grep(formattedData[j], filterDynamic);
                            }

                            // Add dynamic tooltip and annotation col headers
                            for (var i = 0; i < formattedData[0].length; i++) { // each header col

                                var role = formattedData[0][i].role || '';
                                var label = formattedData[0][i].label || '';

                                // Get domain for use with tooltip and annotation
                                if (role === 'domain' || i === 0) {
                                    domain = formattedData[0][i];
                                }

                                if ((!role || dynColTypesArr.indexOf(role) === -1) && i >
                                    0) { // not a dynamic column

                                    // Add dynamic column if needed
                                    for (var j = 0; j < dynColTypesArr
                                        .length; j++) { // each dynamic col type

                                        i++;

                                        // Insert the dynamic column
                                        formattedData[0].splice(i, 0, {
                                            type: 'string',
                                            role: dynColTypesArr[j]
                                        });

                                        // Add column metadata to dynColumns
                                        dynColumns.push({
                                            index: i,
                                            domain: domain,
                                            role: dynColTypesArr[j],
                                            label: label
                                        });
                                    }
                                }
                            }

                            // Add dynamic columns data
                            for (var i = 1; i < formattedData.length; i++) { // each data row
                                for (var j = 0; j < dynColumns.length; j++) { // each dynamic column

                                    var dynData = '';

                                    // Get dynamic column type
                                    if (dynColumns[j].role === 'toolip') {
                                        dynData = o.options.tooltipConcat;
                                    } else if (dynColumns[j].role === 'annotation') {
                                        dynData = o.options.annotationConcat;
                                    }

                                    // Replace keywords
                                    dynData = dynData.replace(new RegExp('domain', 'g'), dynColumns[j]
                                        .domain);
                                    dynData = dynData.replace(new RegExp('label', 'g'), dynColumns[j]
                                        .label);
                                    dynData = dynData.replace(new RegExp('data', 'g'), formattedData[i][
                                        dynColumns[j].index
                                    ]);

                                    // Insert into formattedData
                                    formattedData[i].splice(dynColumns[j].index, 0, dynData);

                                }
                            }
                        }

                        // Format row data according to data types
                        for (var i = 1; i < formattedData.length; i++) { // each row

                            // The Array of row data
                            var rowData = [];

                            for (var j = 0; j < formattedData[i].length; j++) { // each cell

                                // Initiate cell metadata
                                var colType = formattedData[0][j].type || '';
                                var colRole = formattedData[0][j].role || '';
                                var cellData = formattedData[i][j] || '';

                                // Format data and add to cellData array
                                if (['tooltip', 'annotation'].indexOf(colRole) === -
                                    1) { // Not a tooltip/annotation
                                    if (colType === 'date' || colType === 'datetime') {
                                        cellData = new Date(cellData);
                                    } else if (colType === 'number') {
                                        cellData = parseFloat(cellData);
                                    } else if (colType === 'boolean') {
                                        var str = cellData.toLowerCase();
                                        cellData = (str !== 'false' && str !== '0' && str !== 'no' &&
                                            str !== '');
                                    } else if (colType === 'timeofday') {
                                        cellData = cellData.getTime();
                                    } else if (j !== 0) { // not the first column
                                        if (!isNaN(parseFloat(cellData))) {
                                            cellData = parseFloat(cellData);
                                        } else if (new Date(cellData) !== 'Invalid Date' && !isNaN(new Date(
                                                cellData))) {
                                            cellData = new Date(cellData);
                                        }
                                    }
                                }

                                // Add cell to row
                                rowData.push(cellData);
                            }

                            // Replace row with formatted data
                            if (rowData.length > 0) {
                                formattedData[i] = rowData;
                            }
                        }
                    } catch (e) { //  Could not extract data

                        console.log(e);
                        return [];
                    }
                    return formattedData;
                };

                // Generate HTML table jQuery object from chart data
                // Returns a jQuery object defining the table
                o.generateTable = function (data, tableTitle, tableId, tableClass) {

                    // The html string
                    var html = '<table id="' + tableId +
                        '" class="' + tableId + ' ' + tableClass +
                        '"><caption>' + tableTitle + '</caption><thead><tr>';

                    // Add header columns to html
                    for (var i = 0; i < data[0].length; i++) {
                        if (data[0][i].role && data[0][i].role === 'tooltip') {
                            html += '<th>Tooltip</th>';
                        } else if (data[0][i].role && data[0][i].role === 'annotation') {
                            html += '<th>Annotation</th>';
                        } else if (data[0][i].label) {
                            html += '<th>' + data[0][i].label + '</th>';
                        }
                    }
                    html += '</tr></thead><tbody>';

                    // Add rows to html
                    for (var i = 1; i < data.length; i++) {
                        html += '<tr>';
                        for (var j = 0; j < data[i].length; j++) {
                            var align = isNaN(data[i][j]) ? 'left' : 'right';
                            html += '<td align="' + align + '">' + data[i][j] + '</td>';
                        }
                        html += '</tr>';
                    }
                    html += '</tbody></table>';

                    return $(html);
                };

                // Add window resize event
                o.addResize = function () {
                    // Window event handlers
                    $(window).on({

                        // Reset on screen resize
                        'resize': function () {

                            // Adjust layout
                            clearTimeout(o.timer);
                            o.timer = setTimeout(function () {

                                // Test if width has resized - as opposed to height
                                if ($(window).width() !== o.windowWidth) {

                                    // Save the chart style
                                    var elStyle = $chartS.attr('style');

                                    // Remove js styles from chart
                                    $chartS.removeAttr('style');

                                    // Test if chart parent has changed width
                                    if (o.chartParent.width() !== o.chartParentWidth) {

                                        // Recalculate calculated option values ---------------------

                                        // Recalculate calendar cellSize
                                        if (o.cchartOptions.calendar && !o.options
                                            .calendar.calendar.cellSize) {
                                            o.cchartOptions.calendar.cellSize = $chartS
                                                .width() * 0.017;
                                        }

                                        // Set Chart dimensions
                                        o.setDimensions();

                                        // Redraw chart ---------------------------------------------
                                        o.chart.draw(o.data, o.cchartOptions);

                                    } else { // parent has not changed width

                                        // Re-apply the chart style
                                        $chartS.attr('style', elStyle);
                                    }
                                }
                            }, 500);
                        }
                    });
                };

                // Show, hide or remove chart and table
                o.showTableChart = function (table, chart) { //  Values: 'show', 'hide', or 'remove'

                    var tableLen = $tableS ? $tableS.length : false;
                    var chartLen = $chartS ? $chartS.length : false;

                    // Table
                    if (table === 'show' && tableLen) {
                        $tableS.css('opacity', 0);
                        $tableS.css(o.options.showTableCSS);
                        $tableS.fadeTo(400, 1);
                    } else if (table === 'hide' && tableLen) {
                        $tableS.css(o.options.hideTableCSS);
                    } else if (table === 'remove' && tableLen) {
                        $tableS.css('display', 'none');
                    }

                    // Chart
                    if (chart === 'show' && chartLen) {
                        $chartS.css('opacity', 0);
                        $chartS.css(o.options.showChartCSS);
                        $chartS.fadeTo(400, 1);
                    } else if (chart === 'hide' && chartLen) {
                        $chartS.css(o.options.showChartCSS);
                    } else if (chart === 'remove' && chartLen) {
                        $chartS.css('display', 'none');
                    }
                };

                //  Get font size function
                // Returns an integer
                o.getFontSize = function (selector, dSize) {
                    return parseInt($(selector).css('fontSize'), 10) || dSize;
                };

                // Transpose data array function
                // Returns the transposed array of data
                o.transpose = function (arr) {

                    var tArr = new Array(arr[0].length);
                    for (var i = 0; i < arr[0].length; i++) {
                        tArr[i] = new Array(arr.length);
                        for (var j = 0; j < arr.length; j++) {
                            tArr[i][j] = arr[j][i];
                        }
                    }
                    return tArr;
                };

                // Set chart width and height values
                o.setDimensions = function () {

                    // Store the chart parent width
                    o.chartParentWidth = o.chartParent.width();

                    // Set chart width and height
                    if (o.options.chartAspectRatio) {
                        if (o.chartOptions.width && !o.chartOptions.height) {
                            o.cchartOptions.height = o.chartOptions.width / o.options.chartAspectRatio;
                        } else if (!o.chartOptions.width && o.chartOptions.height) {
                            o.cchartOptions.width = o.chartOptions.height * o.options.chartAspectRatio;
                        } else if (!o.chartOptions.width && !o.chartOptions.height) {
                            o.cchartOptions.width = $chartS.width();
                            o.cchartOptions.height = $chartS.width() / o.options.chartAspectRatio;
                        }
                    } else if (!o.chartOptions.width && !o.chartOptions.height) {
                        o.cchartOptions.width = $chartS.width();
                    }
                };

                // camelCase function - converts text to camelCase
                // Returns a camelCased string
                o.camelCase = function (str) {
                    return str.replace(/(?:^\w|[A-Z]|\b\w|\s+)/g, function (match, index) {
                        if (+match === 0) return ''; // or if (/\s+/.test(match)) for white spaces
                        return index === 0 ? match.toLowerCase() : match.toUpperCase();
                    });
                };

                // initialize --------------------------------------------------------------------------
                o.init(el, options);
                return this;

            }; //  chartinator close

            //  Create the plugin ======================================================================
            $.fn.chartinator = function (options) {
                //  Enable multi-element support
                return this.each(function () {
                    var $el = $(this);
                    if (!$el.data('chartinator')) {
                        $(this).data('chartinator', new chartinator(this, options));
                    }
                });
            };
        })(jQuery, window, document, Math);

    </script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{
                    role: 'tooltip',
                    type: 'string'
                }],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']
                ],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12, 0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }


            });
        });

    </script>


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

        #staticBackdrop {
            position: absolute !important;
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
        
        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .nav-pills {
            float: right !important;
            background-color: #0a549d;
            border-radius: 15px;
        }
        
        input{
            outline:none;
        }
        .login-box {
            text-align:center;
        }
        .login-box  a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #d01818;
            font-size: 20px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            /* margin-top: 40px; */
            font-weight: 700;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #d01818;
            color: #fff !important;
            border-radius: 5px;
            box-shadow: 0 0 5px #d01818,
                0 0 25px#d01818,
                0 0 50px #d01818,
                0 0 100px #d01818;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #d01818);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #d01818);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #d01818);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #d01818);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        input:focus~label,
      input:valid~label {
            top: -25px;
            left: 0;
            color: #f1c40f;
            font-size: 12px;
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

    </style>
</head>

<body onload="loadFields()">

    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <div class="header-main">
                    <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <form method="POST" class="appointment-form" id="appointment-form">
                                        <h2></h2>
                                        <div class="form-group-1">
                                            <input type="text" name="title" id="customerName" placeholder="Customer Name"
                                                required />
                                            <input type="text" name="name" id="fatherName" placeholder="Client's Father Name"
                                                required />
                                            <input type="text" name="tel" id="CNIC" placeholder="Customer CNIC"
                                                required />
                                            <input type="text" name="phone_number" id="city"
                                                placeholder="Movement City / Area" required />
                                            <input type="text" name="address" id="address" placeholder="Address"
                                                required />
                                            <input type="text" name="phone_number" id="contact"
                                                placeholder="Contact" required />
                                            <input type="text" name="model" id="model"
                                                placeholder="model" required />
                                            <input type="text" name="phone_number" id="description"
                                                placeholder="Description" required />
                                            <input type="text" name="phone_number" id="color" placeholder="Color"
                                                required />
                                            <input type="text" name="phone_number" id="unitPrice"
                                                onchange="calculation()" placeholder="Unit Price" required />
                                            <input type="text" name="phone_number" id="quantity" placeholder="Quantity"
                                                onchange="calculation()" required />
                                            <input type="text" name="phone_number" id="totalPrice"
                                                placeholder="Total Price" required />


                                        </div>

                                        <div class="login-box">
                                            <a onclick="createQuotation()">
                                            <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                            Create Quotation</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="/db">
                                <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png"
                                    class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details_left">


                            <button class="btn-my btn1" style="margin-left: 200px;" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Operations</button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row p-2"
                                                    style="border: 2px solid gray; border-radius: 10px;">


                                                    {{ session()->put('CID','125')}}
                                                    <div class="col-md-3">
                                                        <label class="labels" for="">Purchase</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/bo'">Book
                                                                Order</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/d'">Dilivery</button><br>
                                                            <button data-toggle="modal" id="killme"
                                                                data-target="#staticBackdrop"
                                                                class="btn btn-mysecondary">Quotation</button><br>


                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/dl'">Dilivery
                                                                letter</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/ct'">Comissions</button><br>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Sales</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <a href="/is"><button class="btn btn-myPrimary-add">invoice
                                                                    services</button><br></a>
                                                            <a href="/psi"><button class="btn btn-mysecondary">Print
                                                                    Sale Invoice</button><br></a>
                                                            <a href="/sc"><button class="btn btn-myPrimary">Sales&
                                                                    comission</button><br></a>
                                                            <a href="/ct"> <button
                                                                    class="btn btn-myPrimary-add">texes</button><br></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Stock</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">

                                                            <a href="/as"> <button class="btn btn-myPrimary-add">Add
                                                                    Stock</button><br></a>
                                                            <a href="/ip"><button class="btn btn-mysecondary">Increase
                                                                    In price</button><br></a>
                                                            <a href="/stock"> <button
                                                                    class="btn btn-myPrimary">Stock</button><br></a>
                                                            <a href="/vc"><button
                                                                    class="btn btn-myPrimary-add">ViewCustmer</button><br></a>
                                                            <a href="/sp"> <button class="btn btn-mysecondary">View
                                                                    Spareoarts</button><br></a>
                                                            <a href="/vs"> <button class="btn btn-myPrimary">View
                                                                    Stock</button><br></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 22px;" class="labels"
                                                            for="">Ledger</label>
                                                        <div class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/cl'">Company
                                                                ledger</button><br>
                                                            <a href="/l"> <button
                                                                    class="btn btn-mysecondary">ledger</button><br></a>
                                                            <a href="/th"><button class="btn btn-myPrimary">Transaction
                                                                    History</button><br></a>
                                                            <a href="/ex"><button
                                                                    class="btn btn-myPrimary-add">Expance</button><br></a>

                                                        </div>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                        </div>
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img style="height: 50px; border-radius: 50%; "
                                                    src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-1.2.1&w=1000&q=80"
                                                    alt=""> </span>
                                            <div class="user-name">
                                                <p style="color: #e61d2f;">{{ Session::get('UserName')}}</p>
                                                <span>Administrator</span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <!-- <ul class="dropdown-menu drp-mnu">
										<li> <a ><i class="fa fa-cog"></i> Settings</a> </li>
										<li> <a ><i class="fa fa-user"></i> Profile</a> </li>
										<li> <a ><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });

                </script>
                <div class="inner-block">
                    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Last 7 Days</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">This Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-year-tab" data-toggle="pill" href="#pills-year" role="tab"
                                aria-controls="pills-year" aria-selected="false">This Year</a>
                        </li>
                    </ul>
                    <div class="clearmain"></div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3 id="saleAmount" value=""></h3>
                                                <h4>Todays Sale Amount</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>{{ Session::get('dailySale')}}</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>


                    <div class="chit-chat-layer1">
                        <div class="row">

                            <div class="col-md-6 chit-chat-layer1-left">
                                <div class="work-progres">
                                    <div class="chit-chat-heading">
                                        Recent Orders
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client</th>
                                                    <th>Manager</th>

                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>PELL </td>
                                                    <td>Mushtaq</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-info">50%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Qarshi</td>
                                                    <td>Sultan</td>

                                                    <td><span class="label label-success">completed</span></td>
                                                    <td><span class="badge badge-success">100%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Gormets</td>
                                                    <td>John</td>

                                                    <td><span class="label label-danger">Delayed</span></td>
                                                    <td><span class="badge badge-warning">75%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Khadi</td>
                                                    <td>Danial</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-info">65%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>J.</td>
                                                    <td>Amjad</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-danger">95%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>UCP</td>
                                                    <td>Ali</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-success">95%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 chart-blo-1">
                                <div class="dygno" style="height: 431px !important;">
                                    <h2>Ring Chart</h2>

                                    <canvas id="doughnut" height="300" width="470"
                                        style="width: 470px; height: 300px;"></canvas>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="main-page-charts">
                        <div class="main-page-chart-layer1">
                            <div class="row">


                                <div class="col-md-6 chart-layer1-left">
                                    <div class="glocy-chart">
                                        <div class="span-2c">
                                            <h3 class="tlt">Sales Analytics</h3>
                                            <canvas id="bar" height="300" width="400"
                                                style="width: 400px; height: 300px;"></canvas>
                                            <script>
                                                var barChartData = {
                                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "jul"],
                                                    datasets: [{
                                                            fillColor: "#e61d2f",
                                                            data: [65, 59, 90, 81, 56, 55, 40]
                                                        },
                                                        {
                                                            fillColor: "#337AB7",
                                                            data: [28, 48, 40, 19, 96, 27, 100]
                                                        }
                                                    ]

                                                };
                                                new Chart(document.getElementById("bar").getContext("2d")).Bar(
                                                    barChartData);

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 chart-blo-1">
                                    <div class="line-chart">
                                        <h3>Line Chart</h3>
                                        <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;">
                                        </canvas>
                                        <script>
                                            var lineChartData = {
                                                labels: ["", "", "", "", "", "", ""],
                                                datasets: [{
                                                        fillColor: "#337AB7",
                                                        strokeColor: "#e61d2f",
                                                        pointColor: "#e61d2f",
                                                        pointStrokeColor: "#fff",
                                                        data: [65, 59, 90, 81, 56, 55, 40]
                                                    },
                                                    {
                                                        fillColor: "#e61d2f",
                                                        strokeColor: "#337AB7",
                                                        pointColor: "#337AB7",
                                                        pointStrokeColor: "#fff",
                                                        data: [28, 48, 40, 19, 96, 27, 100]
                                                    }
                                                ]

                                            };
                                            new Chart(document.getElementById("line").getContext("2d")).Line(
                                                lineChartData);

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="chart-layer-2">
                        <div class="row">


                            <div class="col-md-6 chart-layer2-right">
                                <div class="prograc-blocks">
                                    <div class="home-progres-main">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class='bar_group'>
                                        <div class='bar_group__bar thin' label='Rating' show_values='true'
                                            tooltip='true' value='343'></div>
                                        <div class='bar_group__bar myBlueColor thin' style="background: #0a549d;"
                                            label='Quality' show_values='true' tooltip='true' value='235'></div>
                                        <div class='bar_group__bar thin' label='Amount' show_values='true'
                                            tooltip='true' value='550'></div>
                                        <div class='bar_group__bar thin' style="background: #0a549d;" label='Farming'
                                            show_values='true' tooltip='true' value='456'></div>
                                    </div>
                                    <script src="js/bars.js"></script>

                                </div>
                            </div>
                            <div class="col-md-6 chart-layer2-left">
                                <div class="content-main revenue">
                                    <h3>Total Revenue</h3>
                                    <canvas id="radar" height="300" width="300"
                                        style="width: 300px; height: 300px;"></canvas>
                                    <script>
                                        var radarChartData = {
                                            labels: ["", "", "", "", "", "", ""],
                                            datasets: [{
                                                    fillColor: "#e61d2f",
                                                    strokeColor: "#0a549d",
                                                    pointColor: "#0a549d",
                                                    pointStrokeColor: "#fff",
                                                    data: [65, 59, 90, 81, 56, 55, 40]
                                                },
                                                {
                                                    fillColor: "#0a549d",
                                                    strokeColor: "#e61d2f",
                                                    pointColor: "#e61d2f",
                                                    pointStrokeColor: "#fff",
                                                    data: [28, 48, 40, 19, 96, 27, 100]
                                                }
                                            ]

                                        };
                                        new Chart(document.getElementById("radar").getContext("2d")).Radar(
                                            radarChartData);

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                </div>

            </div>
        </div>
      

        <div class="clearfix"> </div>
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script>
        function loadFields() {
            dailySaleAmount();
        }




        $(document).ready(function () {
                $("#killme").click(function () {
                    $('.bd-example-modal-lg').modal('hide');
                })
            })
            (function () {
                "use strict";

                // custom scrollbar

                $("html").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '10px',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0',
                    zindex: '1000'
                });

                $(".scrollbar1").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '0',
                    autohidemode: 'false',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0'
                });



                $(".scrollbar1").getNiceScroll();
                if ($('body').hasClass('scrollbar1-collapsed')) {
                    $(".scrollbar1").getNiceScroll().hide();
                }

            })(jQuery);

    </script>
    <script>
        function dailySaleAmount() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var a = JSON.parse(data);
                document.getElementById("saleAmount").innerHTML  = a[0].DailySale;

            } 
        }

    xhttp.open("GET", "./dailySaleAmount/", true);
    xhttp.send();


    }



        function bar_group() {
            group_ident = 1, $(".bar_group").each(function () {
                $(this).addClass("group_ident-" + group_ident), $(this).data("gid", group_ident), group_ident++
            })
        }

        function get_max() {
            $(".bar_group").each(function () {
                var t = [];
                $(this).children().each(function () {
                    t.push($(this).attr("value"))
                }), max_arr["group_ident-" + $(this).data("gid")] = t, void 0 !== $(this).attr("max") ? $(
                    this).data("bg_max", $(this).attr("max")) : $(this).data("bg_max", Math.max.apply(null,
                    t))
            })
        }

        function data_labels() {
            $(".bar_group__bar").each(function () {
                void 0 !== $(this).attr("label") && $('<p class="b_label">' + $(this).attr("label") + "</p>")
                    .insertBefore($(this))
            })
        }

        function show_values() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("show_values") && ($(this).css("margin-bottom", "40px"), void 0 !== $(
                    this).attr("unit") ? ($(this).append('<p class="bar_label_min">0 ' + $(this).attr(
                    "unit") + "</p>"), $(this).append('<p class="bar_label_max">' + $(this).parent()
                    .data("bg_max") + " " + $(this).attr("unit") + "</p>")) : ($(this).append(
                    '<p class="bar_label_min">0</p>'), $(this).append('<p class="bar_label_max">' +
                    $(this).parent().data("bg_max") + "</p>")))
            })
        }

        function show_tooltips() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("tooltip") && ($(this).css("margin-bottom", "40px"), $(this).append(
                    '<div class="b_tooltip"><span>' + $(this).attr("value") +
                    '</span><div class="b_tooltip--tri"></div></div>'))
            })
        }

        function in_view(t) {
            var a = $(t),
                i = $(window),
                s = i.scrollTop(),
                r = s + i.height(),
                n = a.offset().top,
                o = n + a.height();
            r > o - 45 && a.css("width", a.attr("value") / a.parent().data("bg_max") * 100 + "%")
        }

        function bars() {
            bar_group(), get_max(), data_labels(), show_tooltips(), show_values()
        }
        max_arr = {}, $(".bar_group__bar").each(function () {
            in_view($(this))
        }), $(window).scroll(function () {
            $(".bar_group__bar").each(function () {
                in_view($(this))
            })
        }), bars();

    </script>
    <script>
        function infoPass() {

            var customerName = "Waqas";
            var id = "78";


            window.location.href = "./pm/" + customerName;
            //redirect


        }

        function calculation(){
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;    
            
            var total = price*quantity;
            document.getElementById("totalPrice").value = total;
        }

        function createQuotation(){
            var customerName = document.getElementById("customerName").value;
            var fatherName = document.getElementById("fatherName").value;
            var CNIC = document.getElementById("CNIC").value;
            var city = document.getElementById("city").value;
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity, totalPrice, model];

            var quotationData = JSON.stringify(data);

            var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Quotation =" + this.responseText + " is generated");
                        
                        window.open("/qt");

                    }
                };
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./createQuotation/" + quotationData, true);
                xhttp.send();
            
        }

    </script>

<script>
    var doughnutData = [{
            value: 30,
            color: "#e61d2f"
        },
        {
            value: 50,
            color: "#0a549d"
        },
        {
            value: 100,
            color: "#e61d2f"
        },
        {
            value: 40,
            color: "#0a549d"
        },
    ];
    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(
        doughnutData);

</script>



</body>

</html>
