<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">

    <title></title>
    <style>
        input {

            color: red;
            font-weight: bold;
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
            padding: 5px;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 450px;
            /* overflow: auto; */
        }

        .ledgerFloat {
            float: right;
        }

        label {
            font-weight: bold;
        }
        .Footerbtns{
            float: right;
        }
        .clear{
            clear: both;
        }
        .Footerbtns .btn{
            width: 120px;
        }
        .Footerbtns .btn:nth-child(2){
            background-color: #0a549d;
            color: #fff;        }
            .Footerbtns .btn:nth-child(1){
                background-color: #e61d2f;
            color: #fff;    }

    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Company Ledger</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="receivingMain">


                        <div class="receivingTable">
                            <table class=" table-striped" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>

                                        <th>Transactional ID</th>

                                        <th>Description</th>
                                        <th>Total Amount</th>
                                        <th>Amount Paid</th>
                                        <th>Remaining</th>
                                        <th>Paid By</th>

                                        <th>Details</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10/10/2020</td>
                                        <td>Order Booked</td>
                                        <td>121530</td>
                                        <td>Advance Paid On Booking</td>
                                        <td>60,000,000</td>
                                        <td>50,000,000</td>
                                        <td>10,000,000</td>
                                        <td>Mcb Bank</td>
                                        <td><a style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>12/12/2020</td>
                                        <td>Advance Payment</td>
                                        <td>1283430</td>
                                        <td>Advance Payment for Order No 8142</td>
                                        <td>37,000,000</td>

                                        <td>35,000,000</td>
                                        <td>2,000,000</td>
                                        <td>Meezan Bank</td>
                                        <td><a style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>10/10/2020</td>
                                        <td>Clearance</td>
                                        <td>129230</td>
                                        <td>Order No 8160 is cleared</td>
                                        <td>0</td>

                                        <td>12,000,000</td>
                                        <td>-12,000,000</td>
                                        <td>HBL Bank</td>
                                        <td><a style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>12/12/2020</td>
                                        <td>Customer Paid</td>
                                        <td>121253</td>
                                        <td>This Was Paid By Waqas Ali</td>
                                        <td>30,000,000</td>

                                        <td>25,000,000</td>
                                        <td>5,000,000</td>
                                        <td>Alflah Bank</td>
                                        <td><a style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-4">
                    <label style="width: 185px;" for="">Total Amount</label>
                    <input type="text" value="127,000,000" name="" id="footerInput">
                </div>
                <div class="col-md-4">
                    <label style="width: 185px;" for="">Amount Paid</label>
                    <input type="text" value="122,000,000" name="" id="footerInput">
                </div>
                <div class="col-md-4">
              
                    <label style="width: 185px;" for="">Remaining</label>
                    <input type="text" value="5,000,000" name="" id="footerInput">
                    <h4 style="font-size: 16px; font-weight: 600;">Has To Be Paid By MM Motors To JWW </h4>

                
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="Footerbtns">
                        <a class="btn" href="#">Print</a>
                        <a class="btn" href="#">Export To Pdf</a>
        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
      
        </div>
    </header>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>