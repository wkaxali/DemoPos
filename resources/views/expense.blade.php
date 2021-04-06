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



    <title>Expenses</title>
    <style>
        @media (max-width: 1366px) {
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
            background-color: #0abf53;
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
            border-color: #0abf53;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0abf53;
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
            background-color: #0abf53;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #fec73c;
        }

        .fa-bars {
            color: #fff;
        }

        input {
            margin: 4px 0px;
        }

        @media print {
            .left-content{
                width: 100% !important;
            }
            .sidebar-menu{
                display: none;
            }
            body * {
                visibility: hidden;
            }

            #mainHeader,
            #mainHeader * {
                visibility: visible;
            }

            #mainHeader {
                position: absolute;
                left: 0;
                top: 0;
            }
            #mainComapnyLedger{
                visibility: visible !important;
                margin: 10px 0px;
            }
            #DNone{
                display: none !important;
            }
            table{
                width: 900px !important;
            }
          
       
        }
        @media only screen and (max-width: 768px) {
         

            .inner-block {
                padding: .5em 1em 2em 1em;
            }
            .expenseTable table{
                width:900px !important;
            }
            .footerBtns{
                text-align:center;
            }
            .footerBtns button{
                margin:3px 0px;
            }
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
                                <h4>Expenses</h4>
                            </div>
                        </div>
                    </div>
                </main>

                <section>
                    <div class="container">

                        <div class="row customBorder">
                            <div class="col-md-4">
                                <h4>Add Expenses</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="DNone">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Amount</label>
                                        <input type="text" class="form-control"
                                            style="display: inline-block; width: 192px;" value="" name=""
                                            onclick="calculatonInTable()" id="amount"><br>
                            
                                        <label for="">Paid by</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="paidBy">

                                        </select>
                                    </div>
                                    <div class="col-md-4 offset-md-2">
                                        <label for="">Expense Head</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="expense">

                                        </select>
                                        <!-- <button class="btn">+</button> -->
                                        <br>
                                        <label style="width: 106px !important;" for="">Date</label>
                                        <input type="date" style="width: 199px; display: inline-block !important;"
                                            class="form-control" name="" id="date"><br>
                                        <label style="width: 106px !important;" for="">Remarks</label>
                                        <input type="text" class="form-control"
                                            style="display: inline-block; width: 199px;" value="" name="" id="remarks">
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
                <section id="ExSection">
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h4 id="mainComapnyLedger">Today's Expense</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="expenseTable">
                                    <main id="mainHeader">

                                
                                    <table id="expenseTable" class="table table-bordered myExpe table-striped table-hover"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Expense </th>
                                                <th>Paid By</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </main>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="mainTableEnd">
                                    <label style="width: 106px;" for="">Total Expense</label>
                                    <input type="text" class="form-control" style="display: inline-block; width: 199px;"
                                        onclick="calculatonInTable()" value="" name="" id="mainTotal">
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
                                    <button onclick="window.print()" class="btn print">Print</button>
                                    <button class="btn" onclick="addExpenses()">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('sidenavbar')
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
            

            cell1.innerHTML = date;
            cell2.innerHTML = amount;
            cell3.innerHTML = expense.options[expense.selectedIndex].text;
            cell4.innerHTML = expenseID;
            //cell5.innerHTML = paidto.options[paidto.selectedIndex].text;
            cell5.innerHTML = paidby.options[paidby.selectedIndex].text;
            //cell7.innerHTML = paidto.options[paidto.selectedIndex].value;
            cell6.innerHTML = paidby.options[paidby.selectedIndex].value;
            cell7.innerHTML = remarks;
            cell8.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

            cell4.style.display = "none";
            cell6.style.display = "none";
            




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


                   
                    //$(tr).find('td:eq(4)').text(), //Paid By

                    
                    $(tr).find('td:eq(5)').text(), //Paid By ID

                    $(tr).find('td:eq(6)').text(), //Remarks
                    $(tr).find('td:eq(7)').text()
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
