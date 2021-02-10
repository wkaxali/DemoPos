<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Task</title>


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("hello");
            });
        });

    </script>
    <style>
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
            background-color: #0a549d;
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
            /* border: 1px solid #333; */
        }

        td:first-child {
            border: none !important;
            display: none;
        }



        tr td:nth-child(2) {
            width: 367px;
        }


        input[type="checkbox"] {
            height: 35px;
            width: 43px;
            /* margin-top: 4px; */
            margin: 3px 0px;
        }

        tr td {}

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
            background-color: #e61d2f;
            padding: 3px;
        }

        #cardsCanvas {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: row;
            width: 100%;

        }

        .mainContCards .mainCards-1 .card {
            margin: 10px;
            width: 20rem;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;
                width: 30rem !important;

            }


        }


        .card {
            border-top: 10px solid #e61d2f;
            border-left: 10px solid #0a549d;
            border-radius: 10px;
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            .mainCards-1 {

                width: 850px !important;

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
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        /* .mainWords {
	width: 500px;
	margin: auto;
} */
        .mainWords {
            height: 383px !important;
            overflow: auto;
            /* border-radius: 20px !important; */
        }

        .chat {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: #f1f0e8;
        }

        .chat-header {
            display: flex;
            cursor: pointer;
        }

        .profile {
            width: 78.5%;
            background: #032360;
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0px 10px;
            position: fixed;
        }

        .profile .pp {
            width: 50px;
            display: inline-block;
            border-radius: 50%;
            margin-left: 32px;
        }

        .profile .arrow {
            display: inline-block;
            width: 30px;
            position: absolute;
            top: 19px;
            cursor: pointer;
        }

        .profile h2 {
            display: inline-block;
            line-height: 60px;
            vertical-align: bottom;
            color: #fff;
            font-size: 20px;
        }

        .profile span {
            color: #ccc;
            position: absolute;
            top: 42px;
            left: 100px;
            font-size: 14px;
        }

        .right .icon {
            display: inline-block;
            width: 25px;
            margin-left: 10px;
        }

        .profile .left {
            flex: 1;
        }

        .chat-box {
            background: url('../img/bg.jpeg');
            background-attachment: fixed;
            padding-left: 20px;
            overflow: hidden;
            flex: 1;

        }

        .chat-box img {
            display: none;
        }

        .chat-box .img_chat {
            width: 280px;
        }

        .chat-r {
            display: flex;
        }

        .chat-r .sp {
            flex: 1;
        }

        .chat-l {
            display: flex;
        }

        .chat-l .sp {
            flex: 1;
        }

        .chat-box .mess {
            max-width: 300px;
            background: #F7FCF6;
            padding: 10px;
            border-radius: 10px;
            margin: 20px 0px;
            cursor: pointer;
        }

        .chat-box .mess p {
            word-break: break-all;
            font-size: 18px;
        }

        .chat-box .mess-r {
            background: #E2FFC7;
        }

        .chat-box .emoji {
            width: 20px;
        }

        .chat-box .check {
            float: right;
        }

        .chat-box .check img {
            width: 20px;
        }

        .chat-box .check span {
            color: #888;
            font-size: 12px;
            font-weight: 700px;
        }

        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        *::-webkit-scrollbar-thumb {
            background: #aaa;
        }

        *::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .chat-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 60px;
            position: fixed;
            cursor: pointer;
            top: 56.5%;
            width: 81%;
            left: 9.5%;
        }

        .chat-footer textarea {
            display: block;
            flex: 1;
            width: 100%;
            height: 50px;
            border-radius: 60px;
            margin: 5px;
            padding: 10px;
            outline: none;
            font-size: 19px;
            padding-left: 40px;
            padding-right: 90px;
            border: 2px solid #ccc;
            color: #555;
            resize: none;
        }

        .chat-footer .mic {
            display: block;
            width: 55px;
            height: 55px;
            margin-right: 20px;
        }

        .chat-footer .emo {
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 10px;
            top: 12px;
        }

        .chat-footer .icons {
            position: absolute;
            right: 100px;
            top: 10px;
        }

        .chat-footer .icons img {
            display: inline-block;
            width: 35px;
            height: 35px;
            margin-left: 5px;
        }

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
            background-color: #0abf53 !important;
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
            margin-left: 49px;
        }

        #myBtnGroup button {
            width: 121px;
        }

        .rightButtons {
            float: right;
        }

        td:first-child {
            border: none !important;
            width: 50px;

        }



        tr td:nth-child(2) {
            width: 332px;


        }



        .mainButtons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .mainButtons button {
            margin: 0px 3px;
            width: 116px !important;
            font-size: 14px;
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
            background-color: #e61d2f;
            padding: 3px;
        }

        .mainContCards {
            display: flex;
            justify-content: space-between;
            flex: 1;
            margin: 10px 0px;

        }

        .mainContCards .mainCards-1 {
            background: none !important;
            border-radius: 10px;
            width: 20rem;
            -webkit-box-shadow: 10px 10px 31px 0px #4360b5;
            -moz-box-shadow: 10px 10px 31px 0px#e61d2f;
            box-shadow: 10px 10px 31px 0px #4360b5;
            transition: .7s;

        }

    

        .card {
            border-left: 10px solid #4360b5;
            border-top: 10px solid #e61d2f;
            border-radius: 10px !important;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;
                width: 30rem !important;

            }


            .btn-group span {
                margin-top: 20px;
                margin-left: 30px !important;
                width: 120px;
                text-align: center;
            }
        }




        #groupButtons {
            margin-left: 49px;
        }

        #groupButtons button {
            width: 121px;

        }

        .btn-secondary-1 {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;

        }

        .btn-secondary-1:hover {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;



        }

        .btn-dark-1 {
            background-color: #0a549d;
            border-color: #2e4ead;
            outline: none !important;
            color: #ffffff;

        }

        .btn-dark-1:hover {
            background-color: #0a549d;
            border-color: #2e4ead;
            color: #ffffff;

            outline: none !important;


        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            .mainCards-1 {

                width: 850px !important;

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
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
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

<body onload="getEmployeeData()">

    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">


                <div class="main_container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                
                            <label for="">Employee ID</label><br>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true"
                                    id="employee" onchange="searchEmployeeData()">

                                </select>
                            </div>
                                <div class="col-md-4 ">
                                <label for="">Task Status</label><br>
                                    <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true"
                                        id="status" onchange="searchTaskWithStatus()">
                                            <option value=" "></option>
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                    </select>
                                </div>
                                    <div class="col-md-3 ">
                                    <label for="">Date</label><br>
                                       <input type="date" name="" class="form-control" id=""></div>
                                       <div class="col-md-1">
                                           <button class="btn btn-primary">Search</button>
                                       </div>
                        </div>
                 
                    </div>

                </div>
                <div class="mainContCards">
                    <div class="mainCards-1" id="cardsCanvas">


                    </div>

                </div>



            </div>



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
                                        <td><input type="text" class="form-control" name="" id=""></td>
                                        <td> <input type="checkbox" class="form-control" name="" id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>

                                        <td><input type="text" class="form-control" name="" id=""></td>
                                        <td> <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="td-1">3</td>

                                        <td><input type="text" class="form-control" name="" id=""></td>
                                        <td id="td-3"> <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mainWords">
                                    <div class="chat">
                                        <div class="chat-header">
                                            <div class="profile">
                                                <div class="left">
                                                    <img src="img/arrow.png" class="arrow">
                                                    <img src="img/pp.png" class="pp">
                                                    <h2>Waqas Ali </h2>
                                                    <span>online</span>
                                                </div>
                                                <div class="right">
                                                    <img src="img/phone.png" class="icon">

                                                    <img src="img/phone.png" class="icon">
                                                    <img src="img/more.png" class="icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mainChats" class="chat-box">
                                            <div class="chat-r">
                                                <div class="sp"></div>
                                                <div id="mess-r" class="mess mess-r">
                                                    <p><img src="img/emoji-1.png" class="emoji">
                                                        Hi, Elias
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                        <img src="img/check-2.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-l">
                                                <div class="mess">
                                                    <p>
                                                        Oh! hi <img src="img/emoji-2.png" class="emoji">
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="sp"></div>
                                            </div>


                                            <div class="chat-r">
                                                <div class="sp"></div>
                                                <div class="mess mess-r">
                                                    <p>
                                                        Not too bad. The weather is great isn't it?
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                        <img src="img/check-2.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-l">
                                                <div class="mess">
                                                    <p>
                                                        Yes. It's absolutely beautiful today.
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="sp"></div>
                                            </div>

                                            <div class="chat-r">
                                                <div class="sp"></div>
                                                <div class="mess mess-r">
                                                    <img src="img/post2.jpg" class="img_chat">
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                        <img src="img/check-2.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-r">
                                                <div class="sp"></div>
                                                <div class="mess mess-r">
                                                    <p>I wish it was like this more frequently.</p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                        <img src="img/check-2.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-l">
                                                <div class="mess">
                                                    <p>
                                                        Me too. <img src="img/heart.png" class="emoji">
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="sp"></div>
                                            </div>
                                            <div class="chat-r">
                                                <div class="sp"></div>
                                                <div class="mess mess-r">
                                                    <p>
                                                        So where are you going now?
                                                    </p>
                                                    <div class="check">
                                                        <span>4:00 PM</span>
                                                        <img src="img/check-1.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-footer">
                                            <img src="img/emo.png" style="visibility: hidden;" class="emo">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="getValuesmsg"
                                                    placeholder="Type A Message" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="sendData()"
                                                        id="basic-addon2">Send</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="container">
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
                     <button type="button" class="btn btn-primary">Save changes</button> -->
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
                            <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mainAbs">
                                            <label for="">Task</label>
                                            <input type="text" class="form-control" name="" id="taskSubject">

                                            <label for="">Assign To</label><br>
                                            <select style="height: 25px !important; width: 158px !important; "
                                                class="selectpicker form-control" data-live-search="true" id="assignTo">

                                            </select>
                                            <label for="">Details</label>
                                            <table id="subTasks">
                                                <tr>
                                                    <td id="td-1">1</td>
                                                    <td id="td-2"><input type="text" class="form-control" name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-left:20px;">
                                                    <div class="mainButtons">
                                                        <button class="btn btn-info">Progress</button>
                                                        <button onclick="getRowId()" class="btn btn-success">Add New
                                                            List</button>

                                                        <button class="btn btn-success">Done</button>
                                                    </div>


                                                </div>
                                            </div>
                                            <label for="">Due On</label><br>
                                            <div class="btn-group" id="groupButtons" role="group"
                                                aria-label="Basic example">
                                                <button onclick="GetDates()" type="button" id="Today"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Today</button>
                                                <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Tomorrow</button>
                                                <button type="button" id="Date"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn "><input class="hello" onchange="customDate()"
                                                        type="date"
                                                        style="background: none !important; width:103px; border: none !important;"
                                                        name="" id="date"></button>
                                            </div>
                                            <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                            <br>
                                            <label for="">Priority</label><br>

                                            <div class="btn-group" id="myBtnGroup" role="group"
                                                aria-label="Basic example">
                                                <button type="button" id="Urgent"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Urgent</button>
                                                <button type="button" id="Normal"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Normal</button>
                                                <button type="button" id="Easily"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn">Easily</button>
                                            </div><br>
                                            <label for="">Category</label><br>
                                            <select style="height: 25px !important; width: 158px !important; "
                                                class="selectpicker form-control" data-live-search="true" id="category">

                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary-1" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
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
                <li><a data-toggle="collapse" data-target=".firstULs0"><i class="fab fa-salesforce"></i><span
                            style="font-size: 18px;">Operations</span><span class="fa fa-angle-right"
                            style="float: right"></span></a>
                    <ul class="collapse list-unstyled firstULs0 ">
                        <li><a href="/bo">Book Order</a></li>
                        <li><a href="/rec">Receiving</a></li>
                        <li><a href="/is">Invoice Services</a></li>
                        <li><a href="/sc">Commissions and Taxes</a></li>
                        <li><a href="/as">Add Stock</a></li>
                        <li><a href="/th">Transaction History</a></li>
                        <li><a href="/l">Investor Sale Ledger</a></li>
                        <li><a href="/cl">Company Ledger</a></li>

                    </ul>
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



                <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i style="font-size: 20px;"
                            class="fab fa-stack-overflow"></i><span style="font-size: 18px;">Stock</span><span
                            class="fa fa-angle-right" style="float: right"></span></a>
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
                <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i class="fas fa-guitar"></i><span
                            style="font-size: 18px;">Attendance</span><span class="fa fa-angle-right"
                            style="float: right"></span></a>
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
    <div class="clearfix"></div>

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

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
        function getEmployeeData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeData/", true);

            xhttp.send();
            loadEmployees();
            
        }

        function searchEmployeeData() {
            var employeeID = document.getElementById("employee").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchEmployeeData/" + employeeID, true);

            xhttp.send();
        }

        function searchTaskWithStatus() {
            var employeeID = document.getElementById("employee").value;
            var status = document.getElementById("status").value;
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchTaskWithStatus/" + employeeID + "/" + status, true);
           
            xhttp.send();
        }

    </script>

    <script>
        function sendData() {
            let msg = document.getElementById("getValuesmsg").value;
            let newDiv = document.createElement('div');
            newDiv.classList.add('chat-l');
            let text = document.createTextNode(msg);
            text.innerText = msg;
            newDiv.appendChild(text);


            document.getElementById("mess-r").appendChild(newDiv);
            //   alert(msg);

        }

    </script>
    <script>
        function getRowId() {
            var t = document.getElementById("subTasks");
            var x = document.getElementById("subTasks").rows.length;
            var totalRow = 0;
            for (var i = 0; i < x; i++) {
                totalRow = Number(t.rows[i].cells[0].innerText);
                totalRow++;

            }


            var cell2 = document.getElementById("td-2").innerHTML;

            var row = t.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);

            mcell1.innerHTML = totalRow;
            mcell2.innerHTML = cell2;
        }

    </script>
    <script>
        function GetDates() {
            var date = new Date();
            alert(date);
            var mainValue = document.getElementById("changeme");
            mainValue.value = date;


        }

        function TomorrowDate() {
            const today = new Date()
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            alert(tomorrow);


            var mainValue = document.getElementById("changeme");
            mainValue.value = tomorrow;
        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
            alert(custumDate);

            var mainValue = document.getElementById("changeme");
            mainValue.value = custumDate;


        }

        function loadEmployees() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("employee").innerHTML = this.response;
                    $('#employee').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployees/", true);

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

</body>

</html>
