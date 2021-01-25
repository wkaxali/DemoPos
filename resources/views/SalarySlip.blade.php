<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="Description" content="Enter your description here" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Salary Slip</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;
        }

        #mainSection label {
            width: 100px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 27% !important;
            }
        }

        .borderDiv {
            border: 1px solid #333;
            width: 100%;
            height: 30px;
            border-radius: 10px;
            margin-top: 10px;

        }

        .footerBtns {
            float: right !important;
            margin-bottom: 10px;
        }

        .summaryLabels {
            float: right !important;
            margin-top: 20px !important;
        }

        #Summary label {
            width: 225px;
        }

        .borderCustom {
            background-color: #e61d2f;
            border-radius: 10%;
            margin-top: 5px;
        }

        .borderCustom h4 {
            color: #ffffff;
        }

        .borderCustom-1 {
            border: 1px solid #333;
            border-radius: 10px;
            margin-top: 5px;
            padding: 3px;
        }

        .borderCustom-1 input {
            margin: 3px 0px;
        }

        #myTable th,
        td {
            padding: 3px !important;
        }

        .circle {
            border: 1px solid #333;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            position: relative;
            float: right;
            margin-right: 50px !important;
            background-color: #0a549d;
            color: #ffffff;
        }

        .circleContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loginButtons {
            margin-top: 30px;
            margin-left: 134px;
        }

        .mainRows {
            width: 910px;
            margin: 50px auto;
            padding: 10px;
            border-radius: 10px;
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

<body onload="myFunction()">

    <div class="page-container">
        <div class="left-content">
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>ATTANDANCE</h4>
                        </div>
                    </div>
                </div>
            </main>
            <section>
                <div class="container">
                    <div class="row mainRows" style="border: 1px solid #333;">
                        <div class="col-md-4 offset-md-1">
                            <h4 id="demo"></h4>
                            <h4>Forland MM</h4>
                        </div>
                        <div class="col-md-7 ">
                            <div class="circle">
                                <div class="circleContent">
                                    <h4 id="timeDemo"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <label style="width: 200px;" for="">Employee ID</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 200px; margin: 5px 0px;" name="" id="">
                            <br>
                            <label style="width: 200px;" for="">Password</label>
                            <input type="text" class="form-control" style="display: inline-block; width: 200px;" name=""
                                id="">
                            <br>
                            <div class="loginButtons">
                                <button class="btn" style="background-color: #e61d2f; color: #ffffff;">View
                                    Previous</button>
                                <button class="btn" style="background-color:  #0a549d; color: #ffffff;">Mark
                                    Attandance</button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
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
            $('#myTable').DataTable();
        });

    </script>
    <script>
        function myFunction() {
            setTimeout(function () {
                var id = document.getElementById("demo");
                var mytime = document.getElementById("timeDemo");
                var today = new Date();


                var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

                var dateTime = date;
                var myTime = time;

                id.innerHTML = dateTime;
                mytime.innerHTML = time;
            }, 1000);
        }
        window.setInterval(function () {
            myFunction()
        }, 1000);

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
