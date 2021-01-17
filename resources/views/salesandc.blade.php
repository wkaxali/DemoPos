<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <title>Sales And Commission</title>

    <style>
        table tr:last-child td {
            border-bottom: 1px solid #aaaaaa !important;
        }

        .bookingRightTable {
            border-radius: 10px;
            height: 170px !important;
            width: 100%;
            border: 1px solid #aaaaaa;
            padding: 10px;
            /* border-radius: 10px; */
        }

        .tableDiv {
            /* border: 1px solid #aaaaaa; */
            /* height: 505px !important; */
            height: 150px;
            overflow: auto;
            /* border-radius: 10px; */
            /* border: 1px solid #aaaaaa; */
            /* padding: 3px; */
            /* margin-top: 80px !important; */
        }







        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;
            border: 1px solid #aaaaaa;
            width: 100%;
            max-width: 100%;
        }

        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 5px;
        }

        .mainSales {
            display: flex;
            justify-content: space-between;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .unit {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid rgba(0, 0, 0, 0.75);
            padding: 10px 0px 10px 50px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 60px -15px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 60px -15px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 60px -15px rgba(0, 0, 0, 0.75);

        }

        .myOwnRow-left {
            width: 50%;
            padding: 10px;
        }

        .myOwnROw {
            width: 50%;
            border-left: 1px solid #333;
            padding: 10px;
        }

        .modal-content {
            height: 800px;
            text-align: center;
            width: 800px;
        }



        .checkbox-1 {
            display: none;
        }

        .checkbox-3 {
            display: none;
        }

        .checkMain-5 {
            display: none;
        }

        .myMain {
            display: inline-block;
        }

        #checkboxe-1 {}

        /* #BankLabel{
            display: block;
        } */
        /* .myOwnRow-left label {
            width: 210px !important;
        } */
        .permanentLabel label {

            width: 250px !important;
        }

        .checkMain-5 label {
            width: 270px !important;
        }

        .checkbox-7 {
            display: none;
        }

        .checkbox-9 {
            display: none;
        }

        .checkbox-11 {
            display: none;

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


        #mainGetLabels label {
            width: 200px;
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
        .comissionTable{
            
        }
        #mainGetLabels label{
           width: 200px;
        }
        .container-fluid{
            width: 95% !important;
        }

    </style>

</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col-md-12 text-center">
                    <h4 style="font-weight: 700;">Comission & Taxes</h4>
                </div>
            </div>
            <div class="row my-3" style="padding-left: 130px;">
                <div class="col-md-4">
                    <label style="display: inline-block; width: 100px !important;" for="">Status</label>
                    <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                        <option value=1>Sold</option>
                        <option value=2>In Stock</option>
                        <option value=3>Pending</option>
                        <option value=4>Delivered</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="sales-1" style="margin-left: 110px; ">
                        <button class="btn unit" data-toggle="modal" data-target="#myModal" onclick="getStock()">Sold
                            Unit</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="sales-1" style="margin-left:80px ;">
                        <label for="">Profit / Loss</label>
                        <input type="text" class="form-control"
                            style="display: inline-block !important; width: 200px !important;" name="" id="">
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>

    </header>

    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainSales">


                        </div>

                    </div>

                       

                        <div class="container-fluid">




                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">View Stock </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <div class="receivingTable">
                                                <table id="productSearchTable" class=" table-striped"
                                                    style="width: 100%; text-align: center;">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Id</th>
                                                            <th>Product Name</th>
                                                            <th>Company</th>
                                                            <th>Unit Sale Price</th>
                                                            <th>Unit Purchase Price</th>
                                                            <th>Total Cost</th>
                                                            <th>Price Sold</th>

                                                            <th>Engine Number</th>
                                                            <th>Chasis Number</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>

                                                </table>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="height: 120px;" class="myMainRow">



                        <div class="container-fluid" id="mainGetLabels">
                            <div class="row">
                                <div class="col-md-4">
                                    <label  for="status">Model</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="productName" value="Cash">
                                </div>
                                <div class="col-md-4">
                                    <label for="status">Product Id</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="PID" value="Cash">
                                </div>

                                <div class="col-md-4" >
                                    <label for="status">Chassis Number </label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="chassisNumber" value="137000">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="status">Engine Number</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="engineNumber" value="10000">

                                </div>
                                <div class="col-md-4">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="status" value="0">

                                </div>
                                <div class="col-md-4">

                                    <label  for="status">Sale Price</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="SalePrice" value="">
                                </div>
                            </div>


                            <a style="font-size: 14px;" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">View Details</a>

                        </div>
                    </div>
                </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </div>

    </section>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="height: 460px;" class="myMainRow">


                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <section>
                                    <div class="container-fluid">
                                        <div class="row my-3">
                                            <div class="col-md-12" style="padding: 0px !important;">

                                                <h3 style="text-align: center; color:#e61d2f; font-weight: 600;">Additional Cost</h3>
                                                <select class="selectpicker form-control" data-live-search="true"
                                                    id="comissionHeadSelect" tabindex="null">
                                                    <option value=1>Bank Person</option>
                                                    <option value=2>sales per comissiions</option>
                                                    <option value=3>Third party per comission</option>
                                                    <option value=4>Promotion charges</option>
                                                    <option value=5>PRA % </option>
                                                    <option value=6>Nothing</option>
                                                </select>



                                                <label style="margin-left: 10px;" for="">Amount</label> <input
                                                 class="form-control" style="display: inline-block !important; width: 100px !important;" type="text" name="" id="amount">

                                                <label style="margin-left: 10px;" for="remarks">Remarks </label> <input
                                                class="form-control" style="display: inline-block !important; width: 100px !important;" type="text" name="" id="remarks">

                                                <button onclick="add()" style="margin-top: -3px;" class="btn">+</button>
                                            </div>
                                            </div>
                                        </div><div class="row my-3">
                                            <div class="col-md-12" style="padding: 0px !important;">
                                                <div class="bookingRightTable">




                                                    <div class="tableDiv">
    
    
                                                        <table id="comissionTable" class="secondtable"
                                                            style="width: 100%; text-align: center; ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Head</th>
                                                                    <th>Amount</th>
                                                                    <th>Remarks</th>
                                                                    <th>Delete</th>
                                                                    <th>ComID</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </section>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                                
                        <div class="myOwnRow-right">
                            <div class="input-field">
                                <section>
                                    <div class="container-fluid">
                                        <div class="row my-3">
                                            <div class="col-md-12" style="padding: 0px !important;">

                                                <h3 style="text-align: center; color:#e61d2f; font-weight: 600;">Comistion & Taxes</h3>

                                                <select class="selectpicker form-control" data-live-search="true"
                                                    id="comissionHeadSelectd" tabindex="null">
                                                    <option value=1>Bank Person</option>
                                                    <option value=2>sales per comissiions</option>
                                                    <option value=3>Third party per comission</option>
                                                    <option value=4>Promotion charges</option>
                                                    <option value=5>PRA % </option>
                                                    <option value=6>Nothing</option>
                                                </select>



                                                <label style="margin-left: 30px;" for="">Amount</label> <input
                                                 class="form-control" style="display: inline-block !important; width: 130px !important;" type="text" name="" id="amountd">

                                                <label style="margin-left: 20px;" for="remarks">Remarks </label> <input
                                                class="form-control" style="display: inline-block !important; width: 135px !important;" type="text" name="" id="remarksd">

                                                <button onclick="addd()" style="margin-top: -3px;" class="btn">+</button>
                                            </div>
                                        </div><div class="row my-3">
                                            <div class="col-md-12" style="padding: 0px !important;">
                                                <div class="bookingRightTable">




                                                    <div class="tableDiv">
    
    
                                                        <table id="comissionTabled" class="secondtable"
                                                            style="width: 100%; text-align: center; ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Head</th>
                                                                    <th>Amount</th>
                                                                    <th>Remarks</th>
                                                                    <th>Delete</th>
                                                                    <th>ComID</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </section>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
     <footer>
                                    <div class="container-fluid">
                                        <div class="row">
                                   
                                            <div class="col-md-3">
                                                <label for="">Total Sale Price</label>
                                                <input type="text" class="form-control" name="" id="SoldPrice">
                                            </div>
                                            <div class="col-md-3 ">
                                                <label for="">Profit</label>
                                                <input type="text" class="form-control" name="" id="Profit">
                                                </div>
                                                <div class="col-md-3 ">
                                                <label for="">Total Cost</label>
                                                <input type="text" class="form-control" name="" id="Profit">
                                                </div>


                                      
                                                <button style=margin-top:20px ; onclick="addCommissionsOrTaxes()"
                                                    class="btn ">Update</button>
                                                
                                        </div>
                                    </div>
                                </footer>

                      

                           
                                <script>




                                <script>








                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
                                </script>
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
                                </script>
                                <script type="text/javascript" charset="utf8"
                                    src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
                                </script>
                                <!-- <script src="js/bootstrap.min.js"></script> -->

                                <script>

                                </script>



                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
                                </script>
                                <script type="text/javascript"
                                    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
                                </script>
                                <script type="text/javascript" charset="utf8"
                                    src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
                                </script>
                                <!-- <script src="js/bootstrap.min.js"></script> -->

                                <script>

                                </script>
                                <script>
                                    function add() {



                                        var CH = document.getElementById("comissionHeadSelect");
                                        var amount = document.getElementById("amount").value;
                                        var remarks = document.getElementById("remarks").value;


                                        var table = document.getElementById("comissionTable");
                                        var row = table.insertRow(-1);
                                        var cell1 = row.insertCell(0);
                                        var cell2 = row.insertCell(1);
                                        var cell3 = row.insertCell(2);
                                        var cell4 = row.insertCell(3);
                                        var cell5 = row.insertCell(4);

                                        cell2.innerHTML = amount;
                                        cell3.innerHTML = remarks;
                                        cell4.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

                                        //  calculatonInTable();



                                        cell1.innerHTML = CH.options[CH.selectedIndex].text;
                                        cell5.innerHTML = CH.options[CH.selectedIndex].value;

                                        cell2.innerHTML = amount;
                                        cell3.innerHTML = remarks;
                                        cell4.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

                                        //  calculatonInTable();



                                    }
                                    function addd() {



var CH = document.getElementById("comissionHeadSelectd");
var amountd = document.getElementById("amountd").value;
var remarksd = document.getElementById("remarksd").value;


var table = document.getElementById("comissionTabled");
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);

cell2.innerHTML = amountd;
cell3.innerHTML = remarksd;
cell4.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

//  calculatonInTable();



cell1.innerHTML = CH.options[CH.selectedIndex].text;
cell5.innerHTML = CH.options[CH.selectedIndex].value;





}



                                    function addCommissionsOrTaxes() {
                                        var commissionArray = [];
                                        var table = document.getElementById("comissionTable");
                                        var OverAllDetails = [];

                                        //alert(sp);
                                        $('#comissionTable tr').each(function (row, tr) {

                                            commissionArray[row] = [

                                                $(tr).find('td:eq(0)').text(), //head
                                                $(tr).find('td:eq(1)').text(), //Amount
                                                $(tr).find('td:eq(2)').text(), //Remarks
                                                $(tr).find('td:eq(4)').text() //ComID
                                            ];


                                        });
                                        commissionArray.shift();


                                        alert("array for order" + commissionArray);

                                        var PID = document.getElementById("PID").value;

                                        alert(PID);
                                        var OverAllDetails = [PID, commissionArray];


                                        alert(OverAllDetails);



                                        var CA = JSON.stringify(OverAllDetails);

                                        alert(CA);

                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function () {
                                            if (this.readyState == 4 && this.status == 200) {

                                                alert("Invoice =" + this.responseText + " is generated");


                                            }
                                        };
                                        // var MenuID=$('#Menus').find(":selected").val();
                                        xhttp.open("GET", "./insertInCommission/" + CA, true);
                                        xhttp.send();
                                    }




                                    function deleteRow(ele) {
                                        var a = ele.parentNode.parentNode;

                                        a.remove();

                                    }

                                    $("#productSearchTable").on('click', 'tr', function () {

                                        document.getElementById("PID").value = this.cells[0].innerText;
                                        document.getElementById("productName").value = this.cells[1]
                                            .innerText; // get current row 1st TD value
                                        document.getElementById("chassisNumber").value = this.cells[8]
                                            .innerText;
                                        document.getElementById("engineNumber").value = this.cells[7].innerText;
                                        document.getElementById("TotalCost").value = this.cells[5].innerText;
                                        document.getElementById("SalePrice").value = this.cells[3].innerText;





                                        alert(this.cells[0].innerText);
                                    });









                                    function getStock() {
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function () {

                                            if (this.readyState == 4 && this.status == 200) {

                                                var data = this.responseText;
                                                //alert(data);
                                                var table;
                                                var a = JSON.parse(data);
                                                //  alert(a[0].ProductSerial);
                                                table = $('#productSearchTable').DataTable();

                                                $.each(a, function (i, item) {

                                                    table.row.add([a[i].ProductID, a[i].ProductName, a[i]
                                                        .Company, a[i].PerUnitSalePrice, a[i]
                                                        .PerUnitPurchasePrice, a[i].TotalCost, a[i]
                                                        .TotalSaleAmount, a[i].EngineNumber, a[i]
                                                        .ChasisNumber
                                                    ]);
                                                });
                                                table.draw();
                                                table.clear();

                                            }
                                        };
                                        //alert("ljd");
                                        xhttp.open("GET", "./viewStock/", true);

                                        xhttp.send();
                                    }

                                </script>

                                <script>
                                    $(document).ready(function () {
                                        $('#productSearchTable').DataTable();
                                    });

                                </script>

</body>

</html>
