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

<body onload="loadAccounts()">
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
                            style="display: inline-block !important; width: 200px !important;" name="" id="PLinDB">
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
                                                            <th>Engine Number</th>
                                                            <th>Chasis Number</th>
                                                            <th>Purchse Price</th>
                                                            
                                                            <th>Total Cost</th>
                                                            <th>Sale Price</th>
                                                            <th>Price + Comission</th>
                                                            <th> Status</th>

                                                          

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

                                    <label  for="status">Purchase Price</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="PurchasePrice" value="">
                                </div>
                                <div class="col-md-4">
                                    <label for="status">Invoice Price</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="SalePrice" value="0">

                                </div>
                                <div class="col-md-4">

                                    <label  for="status">Total Cost+ tax</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                        name="name" id="totalCost" value="">
                                </div>
                                 <div class="col-md-4">

<label  for="status">Sale Price + Comission</label>
<input type="text" class="form-control"
    style="display: inline-block !important; height: 30px !important; width: 183px;"
    name="name" id="SPC" value="">
</div>
                            </div>


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


                        <div class="myOwnRow-left" style="width:630px;">
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
                                                <label for="">Select Account</label>
                                                <select style="height: 25px !important; width: 158px !important; "
                                                        class="selectpicker form-control"  data-live-search="true"  id="accountForCost" >
                                                    
                                                    </select>

                                                <button onclick="addInCost()" style="margin-top: -3px;" class="btn">+</button>
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
                                                                    <th>Account ID</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer>
                                    <div class="container-fluid">
                                        <div class="row">
                                   
                                          
                                                <div class="col-md-3 ">
                                                <label for="">Cost (current)</label>
                                                <input type="text" class="form-control" name="" id="overallTotalCost">
                                                
                                                </div>


                                      
                                                <button style=margin-top:20px ; onclick="addComissionN()"
                                                    class="btn ">Update Cost</button>

                                                   
                                        </div>
                                    </div>
                                </footer>
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
                                                <label for="">Select Account</label>
                                                <select style="height: 25px !important; width: 158px !important; "
                                                        class="selectpicker form-control"  data-live-search="true"  id="accountForProfit" >
                                                    
                                                    </select>
                                                    
                                                <button onclick="addInProfit()" style="margin-top: -3px;" class="btn">+</button>
                                            </div>
                                        </div><div class="row my-3">
                                            <div class="col-md-12" style="padding: 0px !important;">
                                                <div class="bookingRightTable">




                                                    <div class="tableDiv">
    
    
                                                        <table id="profitTable" class="secondtable"
                                                            style="width: 100%; text-align: center; ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Head</th>
                                                                    <th>Amount</th>
                                                                    <th>Remarks</th>
                                                                    <th>Delete</th>
                                                                    <th>ComID</th>
                                                                    <th>Account ID</th>
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
                                                <input type="text" class="form-control" name="" id="currentSPC">
                                            </div>
                                            
                                            <div class="col-md-3 ">
                                                <label for="">Profit(Current)</label>
                                                <input type="text" class="form-control" name="" id="CurrentProfit">
                                                
                                                  
                                                </div>
                                                    <button style=margin-top:20px ; onclick="addComissionP()"
                                                    class="btn ">Update Profit</button>
                                                
                                        </div>
                                    </div>
                                    
                                </footer>
                              
                      

                           
                               









                               



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
                               
                                <script>
                                    function addInCost() {



                                        var CH = document.getElementById("comissionHeadSelect");
                                        var accountID = document.getElementById("accountForCost").value;
                                        var amount = document.getElementById("amount").value;
                                        var remarks = document.getElementById("remarks").value;
                                        //here is 


                                        var table = document.getElementById("comissionTable");
                                        var row = table.insertRow(-1);
                                        var cell1 = row.insertCell(0);
                                        var cell2 = row.insertCell(1);
                                        var cell3 = row.insertCell(2);
                                        var cell4 = row.insertCell(3);
                                        var cell5 = row.insertCell(4);
                                        var cell6 = row.insertCell(5);

                                        cell2.innerHTML = amount;
                                        cell3.innerHTML = remarks;
                                        cell4.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';
                                        cell6.innerHTML = accountID;
                                        //  calculatonInTable();



                                        cell1.innerHTML = CH.options[CH.selectedIndex].text;
                                        cell5.innerHTML = CH.options[CH.selectedIndex].value;

                                        cell2.innerHTML = amount;
                                        cell3.innerHTML = remarks;
                                        

                                        //  calculatonInTable();
                                        calcCostTable();



                                    }
                                    function addInProfit() {



var CH = document.getElementById("comissionHeadSelectd");
var amountd = document.getElementById("amountd").value;
var remarksd = document.getElementById("remarksd").value;
var accountID = document.getElementById("accountForProfit").value;

var table = document.getElementById("profitTable");
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);

cell2.innerHTML = amountd;
cell3.innerHTML = remarksd;
cell4.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';

//  calculatonInTable();



cell1.innerHTML = CH.options[CH.selectedIndex].text;
cell5.innerHTML = CH.options[CH.selectedIndex].value;
cell6.innerHTML = accountID;


calcProfitTable();

}



                                    function addComissionN() {
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
                                        var AID = 1;
                                        alert(PID);
                                        var OverAllDetails = [PID, AID, commissionArray];


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
                                        xhttp.open("GET", "./negativeComission/" + CA, true);
                                        xhttp.send();
                                       
                                    }
                                    function addComissionP() {
                                        var commissionArray = [];
                                        var table = document.getElementById("comissionTable");
                                        var OverAllDetails = [];

                                        //alert(sp);
                                        $('#profitTable tr').each(function (row, tr) {

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
                                        var AID = 1;
                                        alert(PID);
                                        var OverAllDetails = [PID, AID, commissionArray];


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
                                        xhttp.open("GET", "./PostiveCommision/" + CA, true);
                                        xhttp.send();
                                        
                                    }




                                    function deleteRow(ele) {
                                        var a = ele.parentNode.parentNode;

                                        a.remove();

                                    }

                                    $("#productSearchTable").on('click', 'tr', function () {

                                        document.getElementById("PID").value = this.cells[0].innerText;
                                        document.getElementById("productName").value = this.cells[1]
                                            .innerText; // get current row 1st TD value PurchasePrice
                                        document.getElementById("chassisNumber").value = this.cells[3]
                                            .innerText;
                                        document.getElementById("engineNumber").value = this.cells[2].innerText;
                                        document.getElementById("totalCost").value = this.cells[5].innerText;
                                        document.getElementById("overallTotalCost").value = this.cells[5].innerText;
                                        document.getElementById("SalePrice").value = this.cells[6].innerText;
                                        document.getElementById("PurchasePrice").value = this.cells[4].innerText;
                                        document.getElementById("SPC").value = this.cells[7].innerText;
                                        document.getElementById("currentSPC").value = this.cells[7].innerText;
                                        





                                        alert(this.cells[0].innerText);
                                        CalcProfit();
                                    });









 function getStock() {
 var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            //alert(data);
            var table;
            var a = JSON.parse(data);
             
            table = $('#productSearchTable').DataTable();
            table.clear();
            
            $.each(a, function (i, item) {
                //alert(a[0].ProductSerial);

                table.row.add([a[i].ProductID, a[i].ProductName, a[i].EngineNumber, a[i].ChasisNumber
                ,a[i].ActualPurchsePrice,a[i].TotalCost,a[i].SalePrice,a[i].TotalSaleAmount,a[i].StatusInStock]);

               
            });
            table.draw();
            
        }
    };
    var PC=20;
//alert();
    xhttp.open("GET", "./getAllAutos/"+PC, true);
    xhttp.send();
  }
  function calcProfitTable(){
    var table = document.getElementById("profitTable");
    var sum = 0;

    for(var i = 1; i < table.rows.length; i++)
            {
                sum = sum + parseInt(table.rows[i].cells[1].innerHTML);
            }
         var SPC=   document.getElementById("SPC").value;
      sum= sum+  parseInt(SPC);
            document.getElementById("currentSPC").value = sum;
            CalcProfit();
}
function CalcProfit(){
    var s= document.getElementById("currentSPC").value;
    var c=document.getElementById("overallTotalCost").value;
    var p;
    p= parseInt(s)-parseInt(c);
    document.getElementById("CurrentProfit").value=p;
}
function calcCostTable(){
    var table = document.getElementById("comissionTable");
    var sum = 0;

    for(var i = 1; i < table.rows.length; i++)
            {
                sum = sum + parseInt(table.rows[i].cells[1].innerHTML);
            }
            var SPC=   document.getElementById("totalCost").value;
      sum= sum+  parseInt(SPC);
            document.getElementById("overallTotalCost").value = sum;
            CalcProfit();
}

                                </script>

                                <script>
                                    $(document).ready(function () {
                                        $('#productSearchTable').DataTable();
                                    });

                                </script>

<script>
function loadAccounts(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("accountForCost").innerHTML = this.response;
            document.getElementById("accountForProfit").innerHTML = this.response;
            $('#accountForCost').selectpicker('refresh');
            $('#accountForProfit').selectpicker('refresh');
        }
    };
    //alert("ljd");
    xhttp.open("GET", "./getAccountHeads/", true);
    
    xhttp.send();
    }
</script>


</body>

</html>
