<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Book Order</title>
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
            width: 135px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


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

        label {
            font-weight: bold;
            font-size: 16px;
        }

        #myHeader label {

            width: 250px !important;
        }

        .mainSection label {
            width: 250px !important;

        }

        a {
            text-decoration: none !important;
        }

        a:hover {
            color: #ffffff;
            text-decoration: none !important;
        }

        .printBtns {

            background-color: #ffffff;
            border: 1px solid#0a549d;
            color: #0a549d;
            transition: .7s;
        }

        .placeBtns {
            background-color: #e61d2f;
            color: #ffffff;


        }

        .printBtns:hover {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
            transition: .7s;
        }

        .successButtons button {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
        }

        .footerBtn {
            text-align: right;
            /* text-align: center; */
            float: right;
            /* margin-top: 120px !important; */
        }

        .footerBtn .btn:nth-child(1) {

            margin-right: 20px;
        }


        table {


            width: 100%;
            max-width: 100%;
        }


        th,
        td {
            padding: 3px;
            border: 1px solid #aaaaaa;
        }

        .myBookingBorder {
            border: 1px solid #aaaaaa;
            padding: 5px 8px;
            border-radius: 10px;
        }

        table tr:last-child td {
            border-bottom: 1px solid #aaaaaa !important;
        }

        .bookingRightTable {
            border-radius: 10px;
            height: 514px !important;
            border: 1px solid #aaaaaa;
            padding: 0px 10px;
        }

        .tableDiv {

            height: 285px;
            overflow: auto;

        }



        .input-group {
            margin: 10px 0px;
        }

        .mainInputGroups {
            float: right;
            margin-top: -40px;

        }

        .clear {
            clear: both;
        }

        .mainInputGroups input {
            margin: 5px 0px !important;
        }

        th,
        td {
            border-bottom: 1px solid #333;
        }

        .mainSection {
            max-width: 1018px;
            margin: 0 auto;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;

        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        @media only screen and (max-width: 768px) {
            .mainSection {
                top: 80% !important;
            }

            .myBookingBorder {
                margin: 20px 0px !important;
            }

            body {
                background-color: #0a549d;
            }

        }

        @media only screen and (max-width: 503px) {
            body {
                background-color: lightblue;
            }

            /* Background Colors are for checking media queries You Can remove */

            .mainSection label {
                width: 150px !important;

            }
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
            .mainSection {
                top: 84% !important;
            }

            /* uncomment this and :checked centeralized version at iphone x */
            /* .myBookingBorder .row{
                text-align: center !important;
            } */

        }

        @media only screen and (device-width : 375px) and (device-height : 667px) and (-webkit-device-pixel-ratio : 2) {
            .mainSection {
                top: 102% !important;
            }
        }

        @media only screen and (max-width: 1197px) {
            .mainSection label {
                width: 225px !important;
            }
        }

        @media screen and (device-aspect-ratio: 40/71) {
            .mainSection {
                top: 127% !important;
            }
        }

        @media only screen and (device-width : 414px) and (device-height : 736px) and (-webkit-device-pixel-ratio : 3) {
            .mainSection {
                top: 93% !important;
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

        .fa-bars {
            color: #fff;
        }

        .inner-block {
    padding: 0em !important;
}
    </style>
</head>

<body id="mainBody" onload="loadFunction()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header id="myHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12  text-center">
                                <h3>Book Order</h3>
                            </div>
                        </div>



                    </div>
                </header>
                <section class="mainSection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="myBookingBorder">


                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="">Order No</label>
                                            <input type="text" class="form-control"
                                                style="width: 135px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="OrderId" readonly="true">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="Model">Model</label>
                                            <select style="height: 25px !important; width: 158px !important; "
                                                class="selectpicker form-control" data-live-search="true" id="category">

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Booking Price</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px !important; display: inline-block !important;"
                                                name="" id="bookingPrice">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Invoice Price</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px !important; display: inline-block !important;"
                                                name="" id="invoice">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Description</label>
                                            <input type="text" class="form-control"
                                                style="width: 135px !important; display: inline-block !important;"
                                                name="" id="description">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Qty</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px !important; display: inline-block !important;"
                                                name="" id="qty">
                                        </div>
                                    </div>


                                    <div class="row">



                                        <div class="col-md-3">
                                            <label style="width: 50px !important;" for="">Total</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="total" readonly="true">
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <label style="width: 100px !important;" for="">Amount Paid</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px !important; display: inline-block !important;"
                                                name="" id="amount" onchange="subtract()">
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <label style="width: 50px !important;" for="">Remaining</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="remaining" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="successButtons text-right"
                                                style=" margin-right:15px;margin-top:35px;">
                                                <button onclick="valid()" class="btn ">Add</button>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bookingRightTable">

                                    <div class="tableContent  text-center">
                                        <h3>Your Current Orders </h3>
                                    </div>



                                    <div class="tableDiv">


                                        <table id="BookingRecordTable" class=" table-striped"
                                            style="width: 100%; text-align: center; ">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Model</th>
                                                    <th>Price</th>
                                                    <th>QTY</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Remain</th>
                                                    <th>Delete
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>




                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mainInputGroups">

                                        <label style="width: 150px !important;" for="">Payment Method</label>
                                        <select class="selectpicker form-control" data-live-search="true" id="accounts">

                                        </select><br>


                                        <label style="width: 150px !important;" for="">Total Amount</label>
                                        <input class="form-control"
                                            style="display: inline-block !important; width: 135px !important;"
                                            type="number" name="" id="mainTotal"><br>



                                        <label style="width: 150px  !important;" for="">Total Paid</label>
                                        <input type="number" name="" class="form-control"
                                            style="display: inline-block !important; width: 135px !important;"
                                            id="totalPaid" onchange="calculatonInTable()"><br>


                                        <label style="width: 150px  !important;" for="">Total Remaining</label>
                                        <input type="number" name="" class="form-control"
                                            style="display: inline-block !important; width: 135px !important;"
                                            id="totRemaining">


                                    </div>
                                    <div class="clear"></div>


                                    <div class="footerBtn">
                                        <a href="#" class="printBtns btn">Print Order</a>
                                        <button class="placeBtns btn" onclick="placeOrder()">Place Order</button>
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
                    <li><a data-toggle="collapse" data-target=".helloURL"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Operations</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled helloURL ">
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




    <script>
        function valid() {
            var OrderID = document.getElementById("OrderId").value;
            var category = document.getElementById("category");
            var bookingPrice = document.getElementById("bookingPrice").value;
            var invoicePrice = document.getElementById("invoice").value;
            var description = document.getElementById("description").value;
            var qty = document.getElementById("qty").value;
            var tot = document.getElementById("total").value;
            var amontPaid = document.getElementById("amount").value;
            var remaining = document.getElementById("remaining").value;
            if (invoicePrice == "") {
                document.getElementById('invoice').focus();

            } else if (qty == "") {
                document.getElementById('qty').focus();
            } else if (amontPaid == "") {
                document.getElementById('amount').focus();
            } else if (description == "") {
                document.getElementById('description').focus();
            } else if (bookingPrice == "") {
                document.getElementById('bookingPrice').focus();
            } else {
                document.getElementById('invoice').focus();

                add();
                // document.getElementById("OrderId").value = "";

                document.getElementById("category");

                document.getElementById("invoice").value = "";
                document.getElementById("bookingPrice").value = "";

                document.getElementById("qty").value = "";

                document.getElementById("description").value = "";

                document.getElementById("total").value = "";

                document.getElementById("amount").value = "";

                document.getElementById("remaining").value = "";

            }

        }

    </script>

    <script>
        function add() {

            var OrderID = document.getElementById("OrderId").value;
            var category = document.getElementById("category");
            var invoicePrice = document.getElementById("invoice").value;
            var bookingPrice = document.getElementById("bookingPrice").value;
            var description = document.getElementById("description").value;
            var qty = document.getElementById("qty").value;
            var tot = document.getElementById("total").value;
            var amontPaid = document.getElementById("amount").value;
            var remaining = document.getElementById("remaining").value;

            var table = document.getElementById("BookingRecordTable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);
            var cell9 = row.insertCell(8);
            var cell10 = row.insertCell(9);




            cell1.innerHTML = OrderID;
            cell2.innerHTML = category.options[category.selectedIndex].text;
            cell3.innerHTML = bookingPrice;
            cell4.innerHTML = qty;
            cell5.innerHTML = tot;
            cell6.innerHTML = amontPaid;
            cell7.innerHTML = remaining;
            cell8.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';
            cell9.innerHTML = description;
            cell10.innerHTML = invoicePrice;
            cell9.style.display = "none";
            cell10.style.display = "none";
            calculatonInTable();



        }




        var body = document.getElementById("mainBody");

        body.addEventListener('keypress', function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                valid();
            }
        })


        function deleteRow(ele) {
            var conf = confirm("Do You Want To Delete This Row");

            var a = ele.parentNode.parentNode;
            if (conf === true) {
                a.remove();
            } else {
                return false;
            }


            a.remove();
            calculatonInTable();
        }


        function product() {
            var bookingPrice = document.getElementById("bookingPrice").value;
            var qty = document.getElementById("qty").value;

            var product = bookingPrice * qty;
            document.getElementById("total").value = product;
            // document.getElementById("mainTotal").value = product;

        }

        function subtract() {
            var total = document.getElementById("total").value;
            var amount = document.getElementById("amount").value;
            //  document.getElementById("totalPaid").value = amount;

            var subtract = total - amount;
            document.getElementById("remaining").value = subtract;


        }

        function calculatonInTable() {

            var t = document.getElementById("BookingRecordTable");
            var tot = 0;
            var rem = 0;
            var paid = 0;

            var x = document.getElementById("BookingRecordTable").rows.length;

            for (var i = 1; i < x; i++) {
                tot = tot + Number(t.rows[i].cells[4].innerText);
                paid = paid + Number(t.rows[i].cells[5].innerText);
                rem = rem + Number(t.rows[i].cells[6].innerText);





            }
            document.getElementById("mainTotal").value = tot;
            document.getElementById("totalPaid").value = paid;
            document.getElementById("totRemaining").value = rem;


        }

        function placeOrder() {
            var orderDetails = [];
            var table = document.getElementById("BookingRecordTable");
            var myRow2 = [];

            //alert(sp);
            $('#BookingRecordTable tr').each(function (row, tr) {

                orderDetails[row] = [

                    $(tr).find('td:eq(0)').text(), //AutoCategory
                    $(tr).find('td:eq(2)').text(), //Price
                    $(tr).find('td:eq(3)').text(), //qty


                    $(tr).find('td:eq(4)').text(), //totamount
                    $(tr).find('td:eq(5)').text(), //Paid
                    $(tr).find('td:eq(6)').text(), //remAmount
                    $(tr).find('td:eq(1)').text(), //productName
                    $(tr).find('td:eq(8)').text(), //description
                    $(tr).find('td:eq(9)').text() //invoice price



                ];


            });
            orderDetails.shift();
            alert(orderDetails);
            var AID = $('#accounts').find(":selected").val();
            var mainTotal = document.getElementById("mainTotal").value;
            var totalpaid = document.getElementById("totalPaid").value;
            var totRemaining = document.getElementById("totRemaining").value;
            var Order = [mainTotal, totalpaid, totRemaining, orderDetails, AID];

            var OrderArray = JSON.stringify(Order);

            var xhttp = new XMLHttpRequest();

            if (AID == "") {
                alert('Payment Method not Selected');
            } else {
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Invoice =" + this.responseText + " is generated");
                        getOrderID();

                    }
                };
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./placeOrder/" + OrderArray, true);
                xhttp.send();
            }
        }

        function getOrderID() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("OrderId").value = this.response;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getOrderId/", true);
            xhttp.send();
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


    <script>
        function loadFunction() {
            getOrderID();
            loadaccounts();
            loadAutos();
        }

    </script>
    <script>
        function loadaccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("accounts").innerHTML = this.response;
                    $('#accounts').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAccountHeads/", true);

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


        function loadAutos() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("category").innerHTML = this.response;
                    $('#category').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadAutos/", true);

            xhttp.send();
        }

    </script>
</body>

</html>
