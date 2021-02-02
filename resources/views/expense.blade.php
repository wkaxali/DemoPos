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



    <title>Payments</title>
    <style>
        @media (max-width: 1366px){
.left-content {
    width: 83%;
}
}
   .page-container.sidebar-collapsed-back .left-content {
       width: 83% !important;
   }


        .footerBtns {
            float: right !important;
            margin-top: 10px;
        }

        .footerBtns button {
            width: 100px;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .mainButtons button {
            width: 150px;
        }

        th,
        td {
            text-align: center;
        }

        .mainTableEnd {
            float: right !important;
            margin-top: 10px;
        }

        .customBorder {
            border: 1px solid #333;
            border-radius: 10px;
            background-color: #0a549d;
            margin: 10px 0px;
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .expenseButtons {
            text-align: right;
            margin-top: 10px;
        }

        .expenseTable {
            border: 1px solid #333;
            height: 400px;
            overflow: auto !important;
            border-radius: 10px;
        }

        .borderCustom-2 {
            border: 1px solid #333;
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
input{
    margin: 4px 0px;
}
    </style>
</head>

<body onload="loadFunctions()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Payments</h4>
                            </div>
                        </div>
                    </div>
                </main>

                <section>
                    <div class="container">

                        <div class="row customBorder">
                            <div class="col-md-4">
                                <h4>Add Payments</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Amount</label>
                                        <input type="text" class="form-control"
                                            style="display: inline-block; width: 192px;" value="" name=""
                                            onclick="calculatonInTable()" id="amount"><br>
                                        <label for="">Paid To</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="paidTo">

                                        </select>
                                        <button class="btn btn-info">+</button><br>
                                        <label for="">Paid by</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="paidBy">

                                        </select>
                                    </div>
                                    <div class="col-md-4 offset-md-2">
                                        <label for="">Expense Head</label>
                                        <select style="height: 25px !important; width: 158px !important; "
                                            class="selectpicker form-control" data-live-search="true" id="expense">

                                        </select>
                                        <!-- <button class="btn">+</button> -->
                                        <br>
                                        <label style="width: 106px !important;" for="">Date</label>
                                        <input type="date" style="width: 199px; display: inline-block !important;" class="form-control" name="" id="date"><br>
                                        <label style="width: 106px !important;" for="">Remarks</label>
                                            <input type="text" class="form-control"
                                                style="display: inline-block; width: 199px;" value="" name=""
                                                id="remarks">
                                        <div class="expenseButtons">
                                         
                                            <br>
                                            <button class="btn" onclick="add(), calculatonInTable()">Add</button>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h4>Today's Expense</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="expenseTable">
                                    <table id="expenseTable" class="table-bordered table-striped table-hover"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Expense ID</th>
                                                <th>Paid To</th>
                                                <th>Paid By</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="mainTableEnd">
                                    <label style="width: 106px;" for="">Total Expense</label>
                                    <input type="text" class="form-control" style="display: inline-block; width: 199px;"  onclick="calculatonInTable()" value="" name="" id="mainTotal">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 offset-md-7">
                                <div class="footerBtns">
                                    <button class="btn">Close</button>
                                    <button class="btn">Print</button>
                                    <button class="btn" onclick="addExpenses()">Update</button>
                                </div>
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
        function add() {

            var date = document.getElementById("date").value;
            var amount = document.getElementById("amount").value;
            var expense = document.getElementById("expense");
            var expenseID = document.getElementById("expense").value;
            var paidto = document.getElementById("paidTo");
            var paidby = document.getElementById("paidBy");
            var remarks = document.getElementById("remarks").value;



            var table = document.getElementById("expenseTable");
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

            cell1.innerHTML = date;
            cell2.innerHTML = amount;
            cell3.innerHTML = expense.options[expense.selectedIndex].value;
            cell4.innerHTML = expenseID;
            cell5.innerHTML = paidto.options[paidto.selectedIndex].text;
            cell6.innerHTML = paidby.options[paidby.selectedIndex].text;
            cell7.innerHTML = paidto.options[paidto.selectedIndex].value;
            cell8.innerHTML = paidby.options[paidby.selectedIndex].value;
            cell9.innerHTML = remarks;
            cell10.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

            cell4.style.display = "none";
            cell7.style.display = "none";
            cell8.style.display = "none";




        }




        function deleteRow(ele) {
            var a = ele.parentNode.parentNode;

            a.remove();
            calculatonInTable(5);
        }

        function calculatonInTable() {

            var t = document.getElementById("expenseTable");
            var tot = 0;

            var x = document.getElementById("expenseTable").rows.length;

            for (var i = 1; i < x; i++) {
                tot = tot + Number(t.rows[i].cells[1].innerText);
            }
            document.getElementById("mainTotal").value = tot;
        }

    </script>


    <script>
        function addExpenses() {
            var expenseDetails = [];
            var table = document.getElementById("expenseTable");


            //alert(sp);
            $('#expenseTable tr').each(function (row, tr) {

                expenseDetails[row] = [

                    $(tr).find('td:eq(0)').text(), //Date
                    $(tr).find('td:eq(1)').text(), //Amount
                    $(tr).find('td:eq(2)').text(), //Expense Name
                    $(tr).find('td:eq(3)').text(), //Expense ID


                    //$(tr).find('td:eq(4)').text(), //Paid To
                    //$(tr).find('td:eq(5)').text(), //Paid By

                    $(tr).find('td:eq(6)').text(), //Paid To ID
                    $(tr).find('td:eq(7)').text(), //Paid By ID

                    $(tr).find('td:eq(8)').text(), //Remarks
                    $(tr).find('td:eq(9)').text()
                ];


            });
            expenseDetails.shift();
            var expTable = JSON.stringify(expenseDetails);
            alert(expTable);
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Expense number " + this.responseText + " is added");


                }
            };
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addExpense/" + expTable, true);
            xhttp.send();
        }

    </script>

    <script>
        function loadFunctions() {
            loadExpenseHeads();
            loadParties();
            loadAccounts();
        }

    </script>

    <script>
        function loadExpenseHeads() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("expense").innerHTML = this.response;
                    $('#expense').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getExpenseHeads/", true);

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
    <script>
        function loadParties() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("paidTo").innerHTML = this.response;
                    $('#paidTo').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getPartyNames/", true);

            xhttp.send();
        }

    </script>

    <script>
        function loadAccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("paidBy").innerHTML = this.response;
                    $('#paidBy').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAccounts/", true);

            xhttp.send();
        }

    </script>

</body>

</html>
