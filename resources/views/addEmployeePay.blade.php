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



    <title>Add Employee Pay</title>
    <style>
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
    / background-color:#0a549d !important; /
    margin: 5px 0px !important;

    }

    /* @media print {
    .left-content{
    width: 100% !important;
    }
    .sidebar-menu{
    display: none;
    }
    body * {
    visibility: hidden;
    }
    .mainButtons button {
    width: 150px;
    } */

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

    .allowanceTable {
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

    @media only screen and (max-width: 600px) {
    .meExTable {
    width: 900px !important;
    }

    .expenseButtons {
    text-align: left;
    margin-top: 10px;
    }

    .expenseButtons label {
    width: 100px !important;
    }

    label {
    width: 100px !important;
    }

    #date {
    width: auto;
    }
    }

    @media print {
    .left-content {
    width: 100% !important;
    }

    .sidebar-menu {
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

    #mainComapnyLedger {
    visibility: visible !important;
    margin: 10px 0px;
    }

    #DNone {
    display: none !important;
    }

    table {
    width: 900px !important;
    }


    }

    </style>
    </head>

    <body onload="loadFunctions()">
    <main>
    <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
    
    </div>
    </div>
    </div>
    </main>

    <section>
    <div class="container">

    <div class="row customBorder">
    <div class="col-md-4">
    <h4>Add Employee Payments</h4>
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
    <label for="" >Employee</label>
    <select class="selectpicker form-control"  data-live-search="true"  id="paidTo" onchange="getAmount()">                   
     </select>
       <br><br>
    <label for="">Basic Pay</label>
    <input type="text" class="form-control" style="display: inline-block; width: 192px;"
    value="" name=""  id="basicPay"  style=" margin-left: 150px;"><br><br>
    
    <label for="">Allowed Holidays</label>
    <input type="text" class="form-control" style="display: inline-block; width: 192px;"
    value="" name=""  id="allowedHolidays"><br>
    </div>

    
    <div class="col-md-4 offset-md-2">

    <input style="height: 25px !important; width: 158px !important; display:none" id="expense"
    value=1>

    </input>
    <!-- <button class="btn">+</button> -->
    <br>
    <div class="expenseButtons">
    <label style="width: 100px !important;" for="">SaleTarget</label>
    <input type="text" style="display: inline-block !important; width: 200px;"
    class="form-control" name="" id="saleTarget"><br>

    </div>
    <div class="expenseButtons">
    <label for="">WorkingHours</label>
    <input type="text" class="form-control" style="display: inline-block; width: 192px;"
    value="" name="" id="workingHours">
    
    </div>
    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addEmpPay()">Add</button>
                                    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section id="mainHeader">
    <div class="container">
    <div class="row mt-2">
    <div class="col-md-12">
    <div class="row customBorder">
    <div class="col-md-4">
    <h4>Add Employee Allowances</h4>
    </div>
    </div>
    <div class="expenseButtons">
    <label for="" >Allowance</label>
    <select class="selectpicker form-control" style="display: inline-block; width: 192px;" data-live-search="true"  id="allownceHeads" >                   
     </select>
       
    <label for="">Amount</label>
    <input type="text" class="form-control" style="display: inline-block; width: 192px;"
    value="" name=""  id="amount" >

  <button type="button" class="btn  create-account"  onclick="add()">Add</button>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="allowanceTable">
    <table id="allowanceTable" class="table-bordered table-striped table-hover meExTable"
    style="width: 100%;">
    <thead>
    <tr>
    <th>Emp ID</th>
    <th>Emp Name</th>
    <th>Amount</th>
    <th>Allowance Name</th>
    
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
    <label for="">Total Expense</label>
    <input type="text" onclick="calculatonInTable()" value="" name="" id="mainTotal" readonly>
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
   
    <button onclick="window.print()" class="btn">Print</button>
    <button class="btn" onclick="addAllowances()">Update</button>
    </div>
    </div>
    </div>
    </div>
    </footer>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>



<script>
        function addEmpPay() {


            var BasicPay = document.getElementById("basicPay").value;
            var eid = $('#paidTo').find(":selected").val();
            var AllowedHolidays = document.getElementById("allowedHolidays").value;
            var SaleTarget = document.getElementById("saleTarget").value;
            var WorkingHours = document.getElementById("workingHours").value;
            
            var addPay = [eid,BasicPay, AllowedHolidays,SaleTarget,WorkingHours];

            var AP = JSON.stringify(addPay);
           
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Employee  " + this.responseText + "Pay is Added");


                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addEmpPay/" + AP, true);
            xhttp.send();

        }

    </script>


    <script>
    function addAllowances() {
    var allowanceDetails = [];
    var table = document.getElementById("allowanceTable");


    $('#allowanceTable tr').each(function (row, tr) {

        allowanceDetails[row] = [

        $(tr).find('td:eq(0)').text(), //Employee ID
        $(tr).find('td:eq(1)').text(), //Employee Name
        $(tr).find('td:eq(2)').text(), //Amount Name
        $(tr).find('td:eq(3)').text(), //Allowance Name
        $(tr).find('td:eq(5)').text(), //Allowance ID
        ];
    });
    allowanceDetails.shift();
    var allowanceData = JSON.stringify(allowanceDetails);
    alert(allowanceData);
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

        alert("Allowance " + this.responseText + " is added");


        }
    }
    xhttp.open("GET", "./addAllowances/" + allowanceData, true);
xhttp.send();
    }
    </script>
<script>
function loadEmployees(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("paidTo").innerHTML = this.response;
            $('#paidTo').selectpicker('refresh');
        }
    };
    
    xhttp.open("GET", "./getEmployeeName/", true);
    
    xhttp.send();
    }
</script>

    <script>
    function add() {


var empName = $('#paidTo').find(":selected").text();
var EID = $('#paidTo').find(":selected").val();
var amount = document.getElementById("amount").value;
var allowncehead = $('#allownceHeads').find(":selected").text();
var allownceheadID = $('#allownceHeads').find(":selected").val();

var table = document.getElementById("allowanceTable");
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);

cell1.innerHTML = EID;
cell2.innerHTML = empName;
cell3.innerHTML = amount;
cell4.innerHTML = allowncehead;
cell5.innerHTML = '<button calss="" onclick="deleteRow(this)">X</button>';
cell6.innerHTML = allownceheadID;
cell6.style.display="none";

}






    function deleteRow(ele) {
    var a = ele.parentNode.parentNode;

    a.remove();
    calculatonInTable(5);
    }

    function calculatonInTable() {

    var t = document.getElementById("allowanceTable");
    var tot = 0;

    var x = document.getElementById("allowanceTable").rows.length;

    for (var i = 1; i < x; i++) {
    tot = tot + Number(t.rows[i].cells[1].innerText);
    }
    document.getElementById("mainTotal").value = tot;
    }


    function loadFunctions() {
    loadEmployees();
    loadAllownceHeads();
    }

        function loadAllownceHeads() {
        var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("allownceHeads").innerHTML = this.response;
            $('#allownceHeads').selectpicker('refresh');
        }
            };

        xhttp.open("GET", "./getAllownceHeads/", true);

            xhttp.send();
            }

        </script>
    </body>

    </html>