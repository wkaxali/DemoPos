<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <title>Book Order</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        #myHeader label {

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
            text-align: center;
            margin-top: 120px !important;
        }

        .footerBtn .btn {
            margin: auto 20px !important;
        }


        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }


        th,
        td {
            border: 1px solid #aaaaaa;
        }

        .myBookingBorder {
            border: 1px solid #aaaaaa;
            padding: 15px;
            border-radius: 10px;
        }

        table tr:last-child td {
            border-bottom: 1px solid #aaaaaa !important;
        }

        .bookingRightTable {
            border-radius: 10px;
            height: 505px !important;
            border: 1px solid #aaaaaa;
            padding: 0px 10px;
            /* border-radius: 10px; */
        }

        .tableDiv {
            border: 1px solid #aaaaaa;
            /* height: 505px !important; */
            overflow: auto;
            border-radius: 10px;
            border: 1px solid #aaaaaa;
            /* padding: 3px; */
            margin-top: 80px !important;
        }

        #BookingRecordTable {}
        .input-group{
            margin: 10px 0px;
            /* float: right; */
        }
        .mainInputGroups{
            float: right;
        }
        .mainInputGroups input{
            width: 120px !important;
        }
        /* body{
            background-color: lightgray;
        } */
    </style>
</head>

<body>

    <header id="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-2 text-center">
                    <h3>Book Order</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="myBookingBorder">


                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Order No</label>
                                <input type="text" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name=""
                                    value="1279" id="">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Model">Model :</label>
                                <select 
                                    class="selectpicker form-control" data-live-search="true" id="category"
                                    tabindex="null">
                                    <option value=1>Forland C13</option>
                                    <option value=2>Forland Trucks</option>
                                    <option value=3>Land Trucks</option>
                                    <option value=4>Continantal Trucks</option>


                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Invoice Price :</label>
                                <input type="text" value="13,96,000" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="">

                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Qty :</label>
                                <input type="text" value="5" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Total</label>
                                <input type="text" value="6,980,000" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Amount Paid</label>
                                <input type="text" value="13,000,000" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Remaining For This Order</label>
                                <input type="text" value="5,680,000" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="successButtons text-right" style="margin-right: 7px !important;">
                                    <button class="btn ">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bookingRightTable">

                        <div class="tableContent my-5 text-center">
                           <h3>Your Current Orders </h3>
                        </div>



                        <div class="tableDiv">


                            <table id="BookingRecordTable" class=" table-striped" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th>Model</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Amount Paid</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1321</td>
                                        <td>Forland C10</td>
                                        <td>1</td>
                                        <td>10,4300,000</td>
                                        <td>12,003002,0</td>
                                        <td>&times;</td>
                                    </tr>
                                    <tr>
                                        <td>1321</td>
                                        <td>Forland C10</td>
                                        <td>1</td>
                                        <td>10,4300,000</td>
                                        <td>12,003002,0</td>
                                        <td>&times;</td>
                                    </tr>
                                    <tr>
                                        <td>1321</td>
                                        <td>Forland C10</td>
                                        <td>1</td>
                                        <td>10,4300,000</td>
                                        <td>12,003002,0</td>
                                        <td>&times;</td>
                                    </tr>
                                    <tr>
                                        <td>1321</td>
                                        <td>Forland C10</td>
                                        <td>1</td>
                                        <td>10,4300,000</td>
                                        <td>12,003002,0</td>
                                        <td>&times;</td>
                                    </tr>
                                    <tr>
                                        <td>1321</td>
                                        <td>Forland C10</td>
                                        <td>1</td>
                                        <td>10,4300,000</td>
                                        <td>12,003002,0</td>
                                        <td>&times;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mainInputGroups">

                   
                        <div class="input-group ">
                            <label style="width: 150px  !important;" for="">Total Paid</label>
                            <input type="text" name="" id=""> 
                        </div>
                        <div class="input-group">
                            <label style="width: 150px !important;" for="">Total Amount</label>
                            <input type="text" name="" id=""> 
                        </div>
                    </div>


                        <div class="footerBtn">
                            <a href="#" class="printBtns btn">Print Order</a>
                            <a href="Receiving.html" class="placeBtns btn">Place Order</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>

</html>