<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <title>Pay Roll</title>
    <style>
     

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .PaySection label {
            width: 150px;
        }

        .payButtons button {
            margin-right: 45px !important;
        }

        .PayDetailsSection label {
            width: 150px;
        }

        .updateButtons {
            text-align: right;

        }

        .updateButtons button {
            margin-right: 140px;
            margin-top: 5px;
        }

        .smallFont {
            font-size: 16px;
            font-weight: bold;
        }

        .leftMrg {
            padding-left: 210px;
        }

        .payRow {
            border-right: 1px solid #333;
            padding: 10px !important;
            border-radius: 10px;
            margin-top: 10px;

            /* width: 1200px; */
        }

        .payRow-1 {
            border-left: 1px solid #333;
            padding: 10px !important;
            border-radius: 10px;
            margin-top: 10px;
        }

        .backGround {
            background-color: #e61d2f;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            color: #ffffff !important;
        }

        .backGround-1 {
            background-color: #0a549d;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            color: #ffffff !important;
        }

        .EmpRow {
            margin: 5px 0px;
            padding: 10px 0px;
            width: 1048px;
            border: 1px solid #333;
            margin-left: 79px;
            border-radius: 10px;
        }

        .redBg {
            background-color: #e61d2f;
            color: #ffffff;
            padding: 4px;
            border-radius: 10px;
            text-align: center;
        }

        .container {
            max-width: 1238px !important;
        }

        .myOwnOffset {
            margin-left: 1%;
        }

        .common {
            margin-left: 80px;
            margin-top: 20px;
        }

        .updateButtons-1 {
            text-align: right !important;
        }

        .updateButtons-1 button {
            margin-right: 56px !important;
        }

        .blueBg {
            background-color: #0a549d;
            color: #ffffff;
            text-align: center;
            padding: 4px;
            border-radius: 10px;
        }

        .updateButtons-1 {
            margin-top: 100px;
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

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .clear {
            clear: both;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }



    </style>
</head>

<body onload="loadEmployeeInfo()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">


                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Employee Pay Role</h4>
                            </div>
                        </div>
                    </div>
                </main>

                <section class="PaySection">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row EmpRow">
                                    <div class="col-md-5 ">

                                        <label for="">Employee ID</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="id"
                                            onchange="getByID()">

                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2" id="divName">
                                        <label for="">Name</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="name">

                                        </select>
                                    </div>
                                    <div class="col-md-5  ">
                                        <label for="">Contact</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="contact">

                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2">
                                        <label for="">CNIC</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="cnic">

                                        </select>
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="">Address</label>
                                        <input type="text" style="display: inline-block; width: 810px;"
                                            class="form-control" name="" id="address">
                                    </div>
                                    <div class="col-md-5 ">
                                        <label for="">Status</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="category"
                                            tabindex="null">
                                            <option value=1>Probatum</option>
                                            <option value=2>1279</option>
                                            <option value=3>1342</option>
                                            <option value=4>9754</option>


                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2">
                                        <label for="">Joining</label>
                                        <input type="text" value="date" class="form-control"
                                            style="display: inline-block; width: 200px;margin-top: 3px;" name=""
                                            id="date">
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="payButtons text-right">
                                            <button class="btn">Add Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </section>

                <section class="PayDetailsSection">
                    <div class="container">


                        <div class="row EmpRow">
                            <div class="col-md-6 payRow ">
                                <h4 class="redBg">Pay Details</h4>
                                <label for="">Basic Pay</label>
                                <input type="text" class="form-control" value="13,000"
                                    style="display: inline-block; width: 200px;" name="" id="basicPay">
                                <br>
                                <label for="">Allows Rent/+</label>
                                <input type="text" class="form-control" value="50,000"
                                    style="display: inline-block; width: 200px;" name="" id="allownces">
                                <br>
                                <label for="">Comission On Sale</label>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="category"
                                    tabindex="null">
                                    <option value=1>5%</option>
                                    <option value=2>1279</option>
                                    <option value=3>1342</option>
                                    <option value=4>9754</option>


                                </select>
                                <br>
                                <label for="">Allowed Holidays</label>
                                <input type="text" class="form-control" value="5"
                                    style="display: inline-block; width: 200px;" name="" id="allowedHolidays">
                                <br>
                                <label for="">Target Sales</label>
                                <input type="text" class="form-control" value="10"
                                    style="display: inline-block; width: 200px;" name="" id="saleTarget">
                                <br>
                                <label for="">Total</label>
                                <input type="number" class="form-control" value="48000"
                                    style="display: inline-block; width: 200px;" name="" id="">
                                <span>+ 5%</span>
                                <div class="updateButtons">
                                    <button class="btn">Update</button>
                                </div>
                            </div>
                            <div class="col-md-6 payRow-1 ">
                                <h4 class="blueBg">Current Status</h4>
                                <div class="common">

                                    <h4 class="smallFont">Until 25 December</h4>
                                    <label for="">With 4 Sales</label> <input type="number" class="form-control"
                                        style="display: inline-block; width: 200px;" value="21,500" name="" id="">
                                    <h4 class="smallFont leftMrg">Under Performance</h4>
                                    <h4 class="smallFont" style="display: inline-block; width: 153px;">and 3 Leaves</h4>
                                    <input type="text" style="display: inline-block;width: 200px;" class="form-control">
                                    <div class="updateButtons-1 ">
                                        <button class="btn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
                    <li><a  data-toggle="collapse" data-target=".new"><i class="fab fa-salesforce"></i><span style="font-size:18px;">Operations</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled new" >
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
    <script>
        function loadEmployeeInfo() {
            clearAll();
            loadEmployeeNames();
            loadEmployeeCNIC();
            loadEmployeeID();
            loadEmployeeContact();;
        }

    </script>

    <script>
        function clearAll() {
            document.getElementById("date").value = "";
            document.getElementById("address").value = "";
            document.getElementById("basicPay").value = "";
            document.getElementById("allowedHolidays").value = "";
            document.getElementById("allownces").value = "";
            document.getElementById("saleTarget").value = "";
            document.getElementById("address").value = "";
            document.getElementById("address").value = "";
        }

    </script>

    <script>
        function getByID() {
            var xhttp = new XMLHttpRequest();
            var id = $('#id').find(":selected").val();
            //alert(id);
            $("#name").val(id);
            $('#contact').val(id);
            $('#cnic').val(id);
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                   //  alert(this.response);
                    var a = JSON.parse(this.response);
                
                    document.getElementById("date").value = a[0].JoiningDate;
                    document.getElementById("address").value = a[0].HomeAddress;
                    document.getElementById("basicPay").value = a[0].BasicPay;
                    document.getElementById("allowedHolidays").value = a[0].AllowedHolidays;
                    document.getElementById("allownces").value = a[0].Alownces;
                    document.getElementById("saleTarget").value = a[0].SaleTarget;

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmpbyID/" + id, true);

            xhttp.send();
        }

    </script>

    <script>
        function loadEmployeeNames() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("name").innerHTML = this.response;
                    $('#name').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeName/", true);

            xhttp.send();


        }

    </script>
    <script>
        function loadEmployeeCNIC() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cnic").innerHTML = this.response;
                    $('#cnic').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeCNIC/", true);

            xhttp.send();


        }

    </script>


    <script>
        function loadEmployeeID() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("id").innerHTML = this.response;
                    $('#id').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeID/", true);

            xhttp.send();


        }

    </script>

    <script>
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
        function loadEmployeeContact() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("contact").innerHTML = this.response;
                    $('#contact').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeContact/", true);

            xhttp.send();


        }

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
    <script>

    </script>
</body>

</html>
