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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Sales And Commission</title>

    <style>
               @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }
       

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
            width: 244px !important;
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

        .comissionTable {}

        #mainGetLabels label {
            width: 166px;
        }

        .container-fluid {
            width: 95% !important;
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

        input {
            margin: 2px 0px;
        }

        @media (max-width: 1440px) {
.myMainRow{
    height: 221px;
}
         
        }

    </style>

</head>

<body onload="loadAccounts()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
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
                                <select class="selectpicker form-control" data-live-search="true" id="category"
                                    tabindex="null">
                                    <option value=1>Sold</option>
                                    <option value=2>In Stock</option>
                                    <option value=3>Pending</option>
                                    <option value=4>Delivered</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="sales-1" style="margin-left: 110px; ">
                                    <button class="btn unit" data-toggle="modal" data-target="#myModal"
                                        onclick="getStock()">Sold Unit</button>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="sales-1" style="margin-left:80px ;">
                                    <label for="">Profit / Loss</label>
                                    <input type="text" class="form-control"
                                        style="display: inline-block !important; width: 200px !important;" name=""
                                        id="PLinDB">
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
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>

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

                </section>
                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div  class="myMainRow">



                                    <div class="container-fluid" id="mainGetLabels">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="status">Model</label>
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

                                            <div class="col-md-4">
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

                                                <label for="status">Purchase Price</label>
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

                                                <label for="status">Total Cost+ tax</label>
                                                <input type="text" class="form-control"
                                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                    name="name" id="totalCost" value="">
                                            </div>
                                            <div class="col-md-4">

                                                <label for="status">Sale Price + Comission</label>
                                                <input type="text" class="form-control"
                                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                    name="name" id="SPC" value="">
                                            </div>
                                        </div>


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
                                <div style="height: 575px;" class="myMainRow">


                                    <div class="myOwnRow-left" style="width:630px;">
                                        <div class="input-field">
                                            <section>
                                                <div class="container-fluid">
                                                    <div class="row my-3">
                                                        <div class="col-md-12" style="padding: 0px !important;">

                                                            <h3
                                                                style="text-align: center; color:#e61d2f; font-weight: 600;">Additional Cost</h3>
                                                            <label style="width: 170px;" for="Comission Head">Comission Head</label>
                                                                <select style="height: 25px !important; width: 158px !important; "
                                                                class="selectpicker form-control" data-live-search="true" id="costComissionHeads">
                                                                </select>
                                                            <label style="width: 170px;" for="">Select Account</label>
                                                            <select
                                                                style="height: 25px !important; width: 158px !important; "
                                                                class="selectpicker form-control"
                                                                data-live-search="true" id="accountForCost">

                                                            </select>
                                                            <br>

                                                            <label style="width: 174px;" for="">Amount</label> <input
                                                                class="form-control"
                                                                style="display: inline-block !important; width: 240px !important;"
                                                                type="text" name="" id="amount">

                                                            <label style="width: 174px;" for="remarks">Remarks </label>
                                                            <input class="form-control"
                                                                style="display: inline-block !important; width: 240px !important;"
                                                                type="text" name="" id="remarks">


                                                            <button onclick="addInCost()"
                                                                style="margin-top: 3px; width: 100%;"
                                                                class="btn">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-3">
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


                                                            <div class="col-md-4 ">
                                                                <label for="">Cost (current)</label>
                                                                <input type="text" class="form-control" name=""
                                                                    id="overallTotalCost">

                                                            </div>
                                                            <div class="col-md-4 offset-md-4">
                                                                <button style=margin-top:32px ; onclick="addComissionN()"
                                                                class="btn ">Update Cost</button>

                                                            </div>



                                                        

                                                        </div>
                                                    </div>
                                                </footer>
                                            </section>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Purchase
                                                                Price Details
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="myOwnRow-right" style="width: 630px; padding: 10px;">
                                        <div class="input-field">
                                            <section>
                                                <div class="container-fluid">
                                                    <div class="row my-3">
                                                        <div class="col-md-12" style="padding: 0px !important;">

                                                            <h3
                                                                style="text-align: center; color:#e61d2f; font-weight: 600;">
                                                                Comission & Taxes</h3>
                                                            <label style="width: 170px;" for="">Comission Head</label>
                                                            
                                                            <select style="height: 25px !important; width: 158px !important; "
                                                            class="selectpicker form-control" data-live-search="true" id="comissionHeads">

                                                            </select>

                                                            <br>
                                                            <label style="width: 170px;" for="">Select Account</label>
                                                            <select class="selectpicker form-control"
                                                                data-live-search="true" id="accountForProfit">

                                                            </select>
                                                            <br>

                                                            <label style="width: 180px;" for="">Amount</label>
                                                            <input class="form-control"
                                                                style="display: inline-block !important; width: 235px !important;"
                                                                type="text" name="" id="amountd">
                                                            <br>
                                                            <label style="width: 180px;" for="remarks">Remarks
                                                            </label> <input class="form-control"
                                                                style="display: inline-block !important; width: 235px !important;"
                                                                type="text" name="" id="remarksd">
                                                            <br>

                                                            <button onclick="addInProfit()"
                                                                style="margin-top: 3px; width: 100%;"
                                                                class="btn">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
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
                                                            <h5 class="modal-title" id="exampleModalLabel">Purchase
                                                                Price Details
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
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
                <br>
                <footer>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-4">
                                <label style="font-size: 20px; font-weight: 800;" for="">Total Sale Price</label>
                                <input type="text" class="form-control" name="" id="currentSPC">
                            </div>

                            <div class="col-md-4 ">
                                <label style="font-size: 20px; font-weight: 800;" for="">Profit(Current)</label>
                                <input type="text" class="form-control" name="" id="CurrentProfit">


                            </div>
                            <div class="col-md-4">
                                <button
                                    style="width: 100%; margin-top: 38px; background-color: #e61d2f; color: #ffffff;"
                                    onclick="addComissionP()" class="btn ">Update
                                    Profit</button>
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
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

    <script>
        function addInCost() {



            var CH = document.getElementById("costComissionHeads");
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



            cell1.innerHTML = CH.options[CH.selectedIndex].value;
            cell5.innerHTML = CH.options[CH.selectedIndex].value;

            cell2.innerHTML = amount;
            cell3.innerHTML = remarks;


            //  calculatonInTable();
            calcCostTable();



        }

        function addInProfit() {



            var CH = document.getElementById("comissionHeads");
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



            cell1.innerHTML = CH.options[CH.selectedIndex].value;
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

                        table.row.add([a[i].ProductID, a[i].ProductName, a[i]
                            .EngineNumber, a[i].ChasisNumber, a[i]
                            .ActualPurchsePrice, a[i].TotalCost, a[i]
                            .SalePrice, a[i].TotalSaleAmount, a[i]
                            .StatusInStock
                        ]);


                    });
                    table.draw();

                }
            };
            var PC = 20;
            //alert();
            xhttp.open("GET", "./getAllAutos/" + PC, true);
            xhttp.send();
        }

        function calcProfitTable() {
            var table = document.getElementById("profitTable");
            var sum = 0;

            for (var i = 1; i < table.rows.length; i++) {
                sum = sum + parseInt(table.rows[i].cells[1].innerHTML);
            }
            var SPC = document.getElementById("SPC").value;
            sum = sum + parseInt(SPC);
            document.getElementById("currentSPC").value = sum;
            CalcProfit();
        }

        function CalcProfit() {
            var s = document.getElementById("currentSPC").value;
            var c = document.getElementById("overallTotalCost").value;
            var p;
            p = parseInt(s) - parseInt(c);
            document.getElementById("CurrentProfit").value = p;
        }

        function calcCostTable() {
            var table = document.getElementById("comissionTable");
            var sum = 0;

            for (var i = 1; i < table.rows.length; i++) {
                sum = sum + parseInt(table.rows[i].cells[1].innerHTML);
            }
            var SPC = document.getElementById("totalCost").value;
            sum = sum + parseInt(SPC);
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
        function loadAccounts() {
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
            loadComissionHeads();
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


        function loadComissionHeads() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("costComissionHeads").innerHTML = this.response;
                    $('#costComissionHeads').selectpicker('refresh');

                    document.getElementById("comissionHeads").innerHTML = this.response;
                    $('#comissionHeads').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadComissionHeads/", true);

            xhttp.send();
        }

    </script>

</body>

</html>
