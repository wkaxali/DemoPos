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
    @media (max-width: 1366px){
.left-content {
    width: 83%;
}
}
   .page-container.sidebar-collapsed-back .left-content {
       width: 83% !important;
   }

        @media only screen and (max-width: 768px) {
            .header-main {
                display: none !important;
            }
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

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
            background-color: rgb(231 172 61) !important;
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

        .mainCards-1:hover {
            transform: translateY(-10px);
            transition: .7s;
        }

        .card {
            border-left: 10px solid #000000;
            border-top: 10px solid rgb(231 172 61);
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

            .wrapper .main_container {

                margin-top: 70px;
                margin-left: 336px;
                padding: 15px;
                transition: all 0.3s ease;
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
            background-color: rgb(231 172 61);
            outline: none !important;
            color: #ffffff;

        }

        .btn-secondary-1:hover {
            background-color: rgb(231 172 61);
            outline: none !important;
            color: #ffffff;



        }

        .btn-dark-1 {
            background-color: #000000;
            border-color: rgb(231 172 61);
            outline: none !important;
            color: #ffffff;

        }

        .btn-dark-1:hover {
            background-color: rgb(231 172 61);
            border-color: #000000;
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

    </style>
</head>

<body>

    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">




                <div class="mainContCards">
                    <div class="mainCards-1">
                        <div class="card">

                            <div class="card-body">
                                <div class="mainCardBody">
                                    <div class="leftCardBody">
                                        <img style="height: 50px; width: 50px; border-radius: 50%;"
                                            src="data:image/jpeg;base64,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"
                                            alt="">
                                    </div>
                                    <div class="rightCardBody">
                                        <h4>Mohsin</h4>

                                    </div>

                                </div>
                                <div class="btn-group ml-3 mt-3" id="basicExample" role="group"
                                    aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary-1">66%</button>
                                    <button type="button" class="btn btn-dark-1">2/3 Complete</button> <button
                                        id="MainSpan" type="button" class="btn btn-secondary-1" onclick="loadHeads()"><i
                                            class="fas fa-plus-circle"></i></button>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <button id="movetop" data-toggle="modal" data-target="#exampleModalCenter" title="Go to top">
                    <span class="fas fa-plus-circle" aria-hidden="true"></span>

                </button>
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
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
                                                    class="selectpicker form-control" data-live-search="true"
                                                    id="assignTo">

                                                </select>
                                                <label for="">Details</label>
                                                <table id="subTasks">
                                                    <tr>
                                                        <td id="td-1">1</td>
                                                        <td id="td-2"><input type="text" class="form-control" name=""
                                                                id=""></td>

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
                                                    class="selectpicker form-control" data-live-search="true"
                                                    id="category">

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
            <div class="clearfix"></div>
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
                $("#Today").click(function () {
                    $(this).css({
                        "backgroundColor": "Green",
                        "color": "#fff",

                    });
                    $("#Tomorrow").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });
                    $("#Date").css({
                        "backgroundColor": "#fff",
                        "color": "#333",
                    });

                });
                $("#Tomorrow").click(function () {
                    $(this).css({
                        "backgroundColor": "Green",
                        "color": "#fff",
                    });
                    $("#Today").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });
                    $("#Date").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });

                });
                $("#Date").click(function () {
                    $(this).css({
                        "backgroundColor": "Green",
                        "color": "#fff",


                    });
                    $("#Today").css({
                        "backgroundColor": "#fff",
                        "color": "#333",


                    });
                    $("#Tomorrow").css({
                        "backgroundColor": "#fff",
                        "color": "#333",


                    });

                });
            });

        </script>
        <script>
            $(document).ready(function () {
                $("#Urgent").click(function () {
                    $(this).css({
                        "backgroundColor": "#e61d2f",
                        "color": "#fff",

                    });
                    $("#Normal").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });
                    $("#Easily").css({
                        "backgroundColor": "#fff",
                        "color": "#333",
                    });

                });
                $("#Normal").click(function () {
                    $(this).css({
                        "backgroundColor": "#e61d2f",
                        "color": "#fff",
                    });
                    $("#Easily").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });
                    $("#Urgent").css({
                        "backgroundColor": "#fff",
                        "color": "#333",

                    });

                });
                $("#Easily").click(function () {
                    $(this).css({
                        "backgroundColor": "#e61d2f",
                        "color": "#fff",



                    });
                    $("#Urgent").css({
                        "backgroundColor": "#fff",
                        "color": "#333",


                    });
                    $("#Normal").css({
                        "backgroundColor": "#fff",
                        "color": "#333",


                    });

                });
            });

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

        </script>

        <script>
            $(document).ready(function () {
                $("#MainSpan").click(function () {
                    $('#exampleModal').modal('show')
                })
            })

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
            function addTasks() {

                var taskSubject = document.getElementById("taskSubject").value;
                var assignedTo = document.getElementById("assignTo").value;
                var dueDate = document.getElementById("date").value;
                var category = document.getElementById("category").value;
                //var taskSubject = document.getElementById("taskSubject").value;
                //var priority = document.getElementById("taskSubject").value;


                var taskDetails = [];
                var OverallTask = [];


                //alert(sp);
                $('#subTasks tr').each(function (row, tr) {

                    taskDetails[row] = [


                        $(tr).find('td:eq(1) input[type="text"]').val(),

                    ];


                });
                //expenseDetails.shift();
                //
                //var taskTable = JSON.stringify(taskDetails);
                OverallTask = [taskDetails, taskSubject, assignedTo, dueDate, category];
                var taskTable = JSON.stringify(OverallTask);
                alert(taskTable);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Expense number " + this.responseText + " is added");


                    }
                };
                alert(taskTable);
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./addTasks/" + taskTable, true);
                xhttp.send();
            }

        </script>

        <script>
            function loadHeads() {
                loadEmployees();
                loadCategory();
            }

        </script>



        <script>
            function loadEmployees() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("assignTo").innerHTML = this.response;
                        $('#assignTo').selectpicker('refresh');
                    }
                };
                //alert("ljd");
                xhttp.open("GET", "./getEmployees/", true);

                xhttp.send();


            }

            function loadCategory() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("category").innerHTML = this.response;
                        $('#category').selectpicker('refresh');
                    }
                };
                //alert("ljd");
                xhttp.open("GET", "./getCategory/", true);

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
