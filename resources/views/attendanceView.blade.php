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



    <title>ATTANDANCE</title>
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


        }

        .dropdown.bootstrap-select.form-control-1 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .dropdown.bootstrap-select.form-control-2 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        label {
            width: 145px;
        }

        th,
        td {
            text-align: center;
        }

        .customButtons button {
            width: 150px;
            margin: 10px 15px;
        }

        .customButtons {
            text-align: right;
        }

        #TblSection label {
            width: auto !important;

        }

        .customClassBorder {
            border: 1px solid #333;
            padding: 10px 0px;
            border-radius: 20%;
        }

        .customClassBorder label {
            width: 58px !important;
        }

        th,
        td {
            padding: 2px !important;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

    </style>
</head>

<body onload="getAttendance()">
<div class="page-container">

<div class="left-content">
    <div class="inner-block">

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>ATTANDANCE VIEW</h3>
                </div>
            </div>
        </div>
    </main>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <label for="">Employee ID</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>

                </div>

                <div class="col-md-5 ">
                    <label for="">Name</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>

                </div>
            </div>
            <div class="row customClassBorder my-3">
                <div class="col-md-5 offset-md-1">
                    <h4>Mohsin Jabbar</h4>
                </div>
                <div class="col-md-5">
                    <label for="">Month</label>
                    <select class="selectpicker form-control-1 form-control" data-live-search="true" id="category"
                        tabindex="null">
                        <option value=1>January</option>
                        <option value=2>Febraury</option>
                        <option value=3>March</option>
                        <option value=4>April</option>
                        <option value=1>May</option>
                        <option value=2>June</option>
                        <option value=3>July</option>
                        <option value=4>August</option>
                        <option value=1>Sepetember</option>
                        <option value=2>October</option>
                        <option value=3>November</option>
                        <option value=4>December</option>





                    </select>
                    &nbsp;
                    <label for="">Year</label>
                    <select class="selectpicker form-control-1 form-control" data-live-search="true" id="category"
                        tabindex="null">
                        <option value=1>2020</option>
                        <option value=2>2019</option>
                        <option value=3>2018</option>
                        <option value=4>2017</option>


                    </select>
                    <button style="height: 25px; margin-top: -5px; background-color:#efc55f;" class="btn "></button>

                </div>


            </div>
        </div>
    </header>
    <section id="TblSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="attendanceTableDiv">
                    <table class="table-bordered" id="attendanceTable">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Employee ID</th>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>



                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 customButtons offset-md-6">
                    <button style="background-color: #efc55f;color: #ffffff;" class="btn ">Update</button>
                    <button style="background-color: #000000;color: #ffffff;" class="btn ">Print</button>
                </div>
            </div>
        </div>
    </footer>
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
        function getAttendance() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#attendanceTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].FirstName, a[i].LastName, a[i].EID, a[i].Date, a[i].TimeIn, a[i]
                            .TimeOut, a[i].Status, '+'
                        ]);
                    });
                    table.draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAttendance/", true);

            xhttp.send();


        }

    </script>

    <script>
        $(document).ready(function () {
            $('#attendanceTable').DataTable();
        });

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
