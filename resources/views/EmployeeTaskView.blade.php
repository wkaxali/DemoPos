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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
            /* -webkit-box-shadow: 10px 10px 31px 0px #4360b5;
            -moz-box-shadow: 10px 10px 31px 0px#e61d2f;
            box-shadow: 10px 10px 31px 0px #4360b5; */
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

        @media (max-width: 1366px) {
            .left-content {
                width: 82% !important;
            }
        }

    </style>
</head>

<body onload="getEmployeeData()">

    <div class="page-container">
        <div class="left-content">

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog mydialog modal-dialog-centered" role="document">
                    <div class="modal-content myshadow">
                        <div class="myshadow">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h4>Tasks View</h4>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Task" class="form-control" name="" id="">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="" id="">

                                    </div>
                                    <div class="col-md-4">
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="category">

                                        </select>
                                    </div>
                                </div>

                                <br><br>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="rightButtons">
                                            <button class="btn">Update</button>
                                            <button class="btn">Ok</button>
                                            <button class="btn">History</button>
                                        </div>
                                    </div>
                                </div>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog mydialog" role="document">
                    <div class="modal-content myshadow">

                        <div class="modal-body">
                            <div class="myshadow">


                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Tasks View</h4>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Task" class="form-control" name=""
                                                id="mainTask">
                                            <input type="text" placeholder="Task" class="form-control" name=""
                                                id="mainTaskID" style="display:none">
                                            <input type="text" placeholder="Task" class="form-control" name=""
                                                id="employeeID" style="display:none">
                                        </div>

                                    </div>
                                    <div id="AllSubTasks"></div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Last Comment</label>
                                            <textarea name="" placeholder="Last Comment" class="form-control"
                                                style="height: 100%; width: 100%; resize: none;"
                                                id="comment"></textarea>

                                        </div>

                                    </div>
                                    <br>
                                    <button onclick="updateEmployeeStatus()" type="button" id="updateEmployeeStatus"
                                        class="btn primary ">Update</button>
                                    <br>
                                    <div class="row" id="adminUseOnly">
                                        <div class="col-md-8">
                                            <label for="">Remarks</label>
                                            <input type="text" class="form-control" name="" id="remarks">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">&nbsp;</label>
                                            <select style="height: 35px !important; width: 120px !important; "
                                                class="form-control" id="adminStatus">
                                                <option value="Pending">Pending</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" id="adminUseOnly2">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Task" class="form-control" name=""
                                                id="dateValue" style="display:none">
                                            <label for="">Due On</label><br>
                                            <div class="btn-group" id="groupButtons" role="group"
                                                aria-label="Basic example">
                                                <button onclick="GetDates()" type="button" id="Today"
                                                    style="background-color: #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Today</button>
                                                <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                                    style="background-color: #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Tomorrow</button>
                                                <button type="button" id="Date"
                                                    style="background-color: #ffffff; border: 1px solid #aaa;"
                                                    class="btn "><input class="hello" onchange="customDate()"
                                                        type="date"
                                                        style="background: none !important; width:103px; border: none !important;"
                                                        name="" id="date"></button>

                                            </div>
                                        </div>
                                        <br>
                                        <button onclick="updateAdminStatus()" type="button" id="updateAdminStatus"
                                            class="btn primary ">Update</button>
                                        <br>
                                    </div>

                                    <br>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                            <label for="">Employee ID</label><br>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="employee"
                                onchange="searchEmployeeData()">

                            </select>
                        </div>
                        <div class="col-md-4 ">
                            <label for="">Task Status</label><br>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="status"
                                onchange="searchTaskWithStatus()">
                                <option value=" "></option>
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <div class="col-md-3 ">
                            <label for="">Date</label><br>
                            <input type="date" name="" class="form-control" id=""></div>
                        <div class="col-md-1">
                            <button class="btn btn-primary" style="margin-top: 31px;">Search</button>
                        </div>
                    </div>

              

            </div>
            
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


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
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
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
                            <button type="button" class="btn btn-primary">Save changes</button>
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

        @include('sidenavbar')
        <div class="clearfix"></div>

    </div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #FA5632;
            border-top: 10px solid #FAB732;" >

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
                    <div class="mainCardBody">
                        <div class="leftCardBody">
                            <button
                                style="border-radius: 20px; background-color: #FA5632; border-color: #FA5632; color: #fff;">Logistic</button>
                        </div>
                        <div class="rightCardBody">
                            <span><i class="fa fa-fire"></i></span>
                            <span><i class="fa fa-wifi"></i></span>
                        </div>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #FA5632; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #FA5632; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #FAB732; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


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
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
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
                            <button type="button" class="btn btn-primary">Save changes</button>
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
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #8B45F1;
            border-top: 10px solid #634492;">

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
                    <div class="mainCardBody">
                        <div class="leftCardBody">
                            <button
                                style="border-radius: 20px; background-color: #8B45F1; border-color: #634492; color: #fff;">Logistic</button>
                        </div>
                        <div class="rightCardBody">
                            <span><i class="fa fa-fire"></i></span>
                            <span><i class="fa fa-wifi"></i></span>
                        </div>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #634492; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #8B45F1; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #634492; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


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
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
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
                            <button type="button" class="btn btn-primary">Save changes</button>
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
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #CF1D73;
            border-top: 10px solid #634492;" >

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
                    <div class="mainCardBody">
                        <div class="leftCardBody">
                            <button
                                style="border-radius: 20px; background-color: #634492; border-color: #CF1D73; color: #fff;">Logistic</button>
                        </div>
                        <div class="rightCardBody">
                            <span><i class="fa fa-fire"></i></span>
                            <span><i class="fa fa-wifi"></i></span>
                        </div>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #CF1D73; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #634492; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color:#CF1D73; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


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
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
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
                            <button type="button" class="btn btn-primary">Save changes</button>
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
    </div>
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

        function updateEmployeeStatus() {
            var employeeID = [document.getElementById("employeeID").value];
            var mainTaskID = [document.getElementById("mainTaskID").value];
            var comment = [document.getElementById("comment").value];
            var task = document.getElementById("AllSubTasks").getElementsByTagName("select");
            var overallStatus = ["Pending"]
            var allSubTasks = [mainTaskID, comment, employeeID, overallStatus];

            for (i = 0; i < task.length; i++) {
                allSubTasks[3] = ["Completed"];
                var singleSubTaskDeatails = [];
                var STaskID = task[i].value;
                singleSubTaskDeatails.push(STaskID);
                singleSubTaskDeatails.push(task[i].options[task[i].selectedIndex].text);
                allSubTasks.push(singleSubTaskDeatails);
                if (task[i].options[task[i].selectedIndex].text == "Pending") {
                    allSubTasks[3] = ["Pending"];
                }
            }


            var status = JSON.stringify(allSubTasks);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    alert(this.response);


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./updateTaskStatus/" + status, true);

            xhttp.send();
            loadEmployees();
        }


        function updateAdminStatus() {
            var employeeID = document.getElementById("employeeID").value;
            var mainTaskID = document.getElementById("mainTaskID").value;
            var remarks = document.getElementById("remarks").value;
            var status = document.getElementById("adminStatus").value;
            var date = document.getElementById("dateValue").value;
            var adminStatus = [
                [employeeID],
                [mainTaskID],
                [remarks],
                [status],
                [date]
            ];
            alert(adminStatus);

            var status = JSON.stringify(adminStatus);
            alert(status);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    alert(this.response);


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./updateAdminStatus/" + status, true);

            xhttp.send();
        }


        function loadTaskDetails(taskID) {

            // alert(taskID);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("mainTask").value = a[0].Subject;
                    document.getElementById("mainTaskID").value = a[0].TaskID;
                    document.getElementById("employeeID").value = a[0].EID;
                    a[0].TaskID;
                    a[0].STaskID;
                    a[0].Subject;
                    a[0].Status;
                    a[0].DueDate;
                    a[0].taskDetails;
                    a[0].StockIn;
                    a[0].AssignedBy;
                    a[0].AssignedTo;
                    a[0].DueDate;
                    a[0].taskDetails;
                    a[0].Priority;
                    a[0].Remarks;
                    a[0].EID;
                    a[0].FirstName;
                    a[0].LastName;

                    document.getElementById("AllSubTasks").innerHTML = "";
                    var st = "";



                    $.each(a, function (i, item) {
                        if (a[i].Status == "Pending") {
                            // document.getElementById("AllSubTasks").innerHTML=;
                            st = st + '<div class="row">\
                                <div class="col-md-8 ">\
                                <input type="text" class="form-control" name="subTasksFromDB" id="subTask[]" value="' +
                                item.taskDetails + '">\
                                </div>\
                                <div class="col-md-4">\
                                <select style="height: 35px !important; width: 120px !important; "\
                                class="form-control" \
                                id="TaskStatus[]">\
                                <option value="' + item.STaskID + '">Pending</option>\
                                <option value="' + item.STaskID + '">Completed</option>\
                                </select>\
                                </div>\
                                </div>';
                        }
                        if (a[i].Status != "Pending") {

                            st = st + '<div class="row">\
                                <div class="col-md-8 ">\
                                <input type="text" class="form-control" name="subTasksFromDB" id="subTask[]" value="' +
                                item.taskDetails + '">\
                                </div>\
                                <div class="col-md-4">\
                                <input style="height: 35px !important; width: 120px !important; " readonly\
                                class="form-control" value="' + item.Status + '">\
                                </input>\
                                </div>\
                                </div>';
                        }
                        var userCategory = ('{{ Session::get('
                            EMPID ')}}');
                        if (userCategory != 1) {
                            document.getElementById("adminUseOnly").style.visibility = "hidden";
                            document.getElementById("adminUseOnly2").style.visibility = "hidden";

                        } else {
                            document.getElementById("updateEmployeeStatus").style.visibility = "hidden";
                        }
                    });
                }

                document.getElementById("AllSubTasks").innerHTML = st;


            }

            //alert("ljd");
            xhttp.open("GET", "./loadTaskDetails/" + taskID, true);

            xhttp.send();

        }

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
            var employeeName = $('#employee').find(":selected").text();
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
            displayOptions();

        }

        function displayOptions() {
            var userCategor = ('{{ Session::get('
                EMPID ')}}');

            if (userCategor == 2) {


            }


        }

        function searchEmployeeData() {
            var employeeID = document.getElementById("employee").value;
            var employeeName = $('#employee').find(":selected").text();
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchEmployeeData/" + employeeID + "/" + employeeName, true);

            xhttp.send();
        }

        function searchTaskWithStatus() {
            var employeeID = document.getElementById("employee").value;
            var employeeName = $('#employee').find(":selected").text();
            var status = document.getElementById("status").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchTaskWithStatus/" + employeeID + "/" + status + "/" + employeeName, true);

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
            var dateFull = new Date();
            y = dateFull.getFullYear();
            m = dateFull.getMonth() + 1;
            d = dateFull.getDate()
            date = y + '-' + m + '-' + d;
            alert(date);
            document.getElementById("dateValue").value = date

        }

        function TomorrowDate() {
            const today = new Date()
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            y = tomorrow.getFullYear();
            m = tomorrow.getMonth() + 1;
            d = tomorrow.getDate()
            date = y + '-' + m + '-' + d;
            alert(date);
            document.getElementById("dateValue").value = date;

        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
            document.getElementById("dateValue").value = custumDate;
            alert(custumDate);

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
