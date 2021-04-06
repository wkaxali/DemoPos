<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Task</title>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">



    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("hello");
            });
        });

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #e1ecf2;
        }

        .wrapper {
            margin: 10px;
        }

        .wrapper .top_navbar {
            width: calc(100% - 20px);
            height: 60px;
            display: flex;
            position: fixed;
            top: 10px;
        }

        .wrapper .top_navbar .hamburger {
            width: 70px;
            height: 100%;
            background: #2e4ead;
            padding: 15px 17px;
            border-top-left-radius: 20px;
            cursor: pointer;
        }

        .wrapper .top_navbar .hamburger div {
            width: 35px;
            height: 4px;
            background: #92a6e2;
            margin: 5px 0;
            border-radius: 5px;
        }

        .wrapper .top_navbar .top_menu {
            width: calc(100% - 70px);
            height: 100%;
            background: #fff;
            border-top-right-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .top_navbar .top_menu .logo {
            color: #2e4ead;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .wrapper .top_navbar .top_menu ul {
            display: flex;
        }

        .wrapper .top_navbar .top_menu ul li a {
            display: block;
            margin: 0 10px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border: 1px solid #2e4ead;
            border-radius: 50%;
            color: #2e4ead;
        }

        .wrapper .top_navbar .top_menu ul li a:hover {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .top_navbar .top_menu ul li a:hover i {
            color: #fff;
        }

        .wrapper .sidebar {
            position: fixed;
            top: 70px;
            left: 10px;
            background: #f0e580;
            width: 200px;
            height: calc(100% - 80px);
            border-bottom-left-radius: 20px;
            transition: all 0.3s ease;
        }

        .wrapper .sidebar ul li a {
            display: block;
            padding: 20px;
            color: #fff;
            position: relative;
            margin-bottom: 1px;
            color: #92a6e2;
            white-space: nowrap;
        }

        .wrapper .sidebar ul li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: #92a6e2;
            display: none;
        }

        .wrapper .sidebar ul li a span.icon {
            margin-right: 10px;
            display: inline-block;
        }

        .wrapper .sidebar ul li a span.title {
            display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before {
            display: block;
        }

        .wrapper .main_container {
            width: (100% - 200px);
            margin-top: 70px;
            margin-left: 200px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .wrapper .main_container .item {
            background: #fff;
            margin-bottom: 10px;
            padding: 15px;
            font-size: 14px;
            line-height: 22px;
        }

        .wrapper.hello .sidebar {
            width: 70px;
        }

        .wrapper.hello .sidebar ul li a {
            text-align: center;
        }

        .wrapper.hello .sidebar ul li a span.icon {
            margin: 0;
        }

        .wrapper.hello .sidebar ul li a span.title {
            display: none;
        }

        .wrapper.hello .main_container {
            width: (100% - 70px);
            margin-left: 70px;
        }

        .container .row {
            margin: 5px 0px !important;
        }

        #movetop {
            position: fixed;
            bottom: 40px;
            right: 15px;
            z-index: 9;
            font-size: 16px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            width: 40px;
            height: 40px;
            background-color: #f0e580;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -o-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            padding: 0;
        }

        .top_menu label {
            width: 100px !important;
        }

        .leftCardBody button {

            width: 100px;
        }

        .rightCardBody button {

            width: 100px;
        }

        .mainCardBody {
            display: flex;
            justify-content: space-between;
        }


        ol li {
            margin: 3px 0px;
        }

        #myBtnGroup {
            margin: 3px 0px;
        }

        #myBtnGroup button {
            width: 150px;
            height: 35px;
        }

        .rightButtons {
            float: right;
        }

        /* @media only screen and (max-width: 768px) {
            input {
                width: 200px !important;
            }
        } */

        td {
            border: 1px solid #333;
        }

        td:first-child {
            border: none !important;
            display: none;
        }



        tr td:nth-child(2) {
            width: 367px;
        }

        tr td {

            display: inline-block;
            margin: 4px 0px;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .mainButtons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .mainButtons button {
            margin: 0px 3px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 31% !important;
            }
        }

        @media only screen and (max-width: 768px) {

            tr td:nth-child(1) {
                width: 320px;
            }

        }

        .card-header {
            background-color: #000;
            padding: 3px;
        }

        .mainContCards {
            display: flex;
            justify-content: space-between;
            flex: 1;
            margin: 10px 0px;

        }

        .mainContCards .mainCards-1 {
            width: 26rem;
            margin: 10px;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;
                width: 30rem !important;

            }

            .wrapper .main_container {

                margin-top: 70px;
                margin-left: 336px;
                padding: 15px;
                transition: all 0.3s ease;
            }
        }


        .card {
            border-top: 10px solid #000;
            border-left: 10px solid #f0e580;
            border-radius: 10px;
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            .mainCards-1 {

                width: 850px !important;

            }



        }

    </style>
</head>

<body onload="getEmployeeData()">

    <div class="wrapper">
        <div class="top_navbar">
            <div class="hamburger">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="top_menu">
                <div class="logo"><label for="">Date</label>
                    <input class="form-control" style="width: 200px; display: inline-block;" type="date">
                </div>
                <div class="rightSide">
                    <label for="">Search</label>
                    <input type="text" class="form-control" style="width: 200px; display: inline-block;" name="" id="">
                </div>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="title">User</span></a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>
                        <span class="title">Add Task</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-minus-circle"></i></span>
                        <span class="title">Decrease</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-blog"></i></span>
                        <span class="title">Blogs</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-leaf"></i></span>
                        <span class="title">Nature</span>
                    </a></li>
            </ul>
        </div>

        <div class="main_container">
            <div class="mainContCards">
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #000; border-color: #000; color: #fff;">Sales</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">

                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #f0e580; border-color: #f0e580; color: #fff;">Urgent</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #87f010; border-color: #87f010; color: #fff;">Elective</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mainContCards">

                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #f0e580; border-color: #f0e580; color: #fff;">Urgent</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #000; border-color: #000; color: #fff;">Sales</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #87f010; border-color: #87f010; color: #fff;">Elective</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mainContCards">

                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #000; border-color: #000; color: #fff;">Sales</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #87f010; border-color: #87f010; color: #fff;">Elective</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <button
                                        style="border-radius: 20px; background-color: #f0e580; border-color: #f0e580; color: #fff;">Urgent</button>
                                </div>
                                <div class="rightCardBody">
                                    <span><i class="fa fa-fire"></i></span>
                                    <span><i class="fa fa-wifi"></i></span>
                                </div>
                            </div>
                            <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Meet Wajahat</h4>
                            <div class="mainCardBody" style="padding-top: 20px;">
                                <div class="leftCardBody">
                                    <div
                                        style="background-color: #000; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                        W A</div>

                                    <span>Waqas Ali</span>
                                </div>
                                <div class="rightCardBody">
                                    <!-- <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-danger">Details</button> -->
                                    <div>Overdue</div>
                                    <div class="mainDots text-center">
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: #000; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                        </div>
                                        <div
                                            style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
    </div>
    <button id="movetop" data-toggle="modal" data-target="#myModal" title="Go to top">
        <span class="fas fa-plus-circle" aria-hidden="true"></span>

    </button>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Meet Rayan Naeem</h4>
                                <label for="">Due Date</label>
                                <input type="text" class="form-control" name="" id="">

                                <label for="">Details</label>
                                <table id="MainTables">
                                    <tr>
                                        <td>1</td>
                                        <td contenteditable="true">Task 1</td>
                                        <td> <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>

                                        <td contenteditable="true">Task 2</td>
                                        <td> <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="td-1">3</td>

                                        <td contenteditable="true" id="td-2">Task 3</td>
                                        <td id="td-3"> <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Comments</label><br>
                                <textarea name="" class="form-control" id="" cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">History</label>
                                <div class="card">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body">
                                        <label for="">ALi</label>
                                        <input type="text" class="form-control" name="" id="">
                                        <label for="">Mohsin</label>
                                        <input type="text" class="form-control" name="" id="">
                                        <label for="">Waqas</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $(".card").click(function () {
                $('#myModal').modal('show')
            })
        })

    </script>
    <script>
        function getRowId() {
            var t = document.getElementById("MainTables");
            var x = document.getElementById("MainTables").rows.length;
            var totalRow = 0;
            for (var i = 0; i < x; i++) {
                totalRow = Number(t.rows[i].cells[0].innerText);
                totalRow++;

            }


            var cell2 = document.getElementById("td-2").innerHTML;
            var cell3 = document.getElementById("td-3").innerHTML;

            var row = t.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);
            var mcell3 = row.insertCell(2);

            mcell1.innerHTML = totalRow;
            mcell2.innerHTML = cell2;
            mcell3.innerHTML = cell3;






        }

    </script>
    <script>
function getEmployeeData(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            var data = this.responseText;
            alert(data);
                
        }
    };
    //alert("ljd");
    xhttp.open("GET", "./getEmployeeData/", true);
    
    xhttp.send();
    }
</script>


</body>

</html>
