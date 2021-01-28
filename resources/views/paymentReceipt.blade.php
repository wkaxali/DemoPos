<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        th,td{
            border: 1px solid #333;
        }
    </style>
    <title>Title</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Payment Receipt</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Date: {{ Session::get('invoiceDate')}}</h5>
            </div>
            
            <div class="col-md-4 offset-md-4 text-right">
                <h5>Company Copy</h5>

            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Amount Received From:</th>
                                <th>{{ Session::get('customerName')}}</th>
                                <th>Receipt #</th>
                                <th colspan="5">{{ Session::get('receiptNumber')}}</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th colspan="5">{{ Session::get('address')}}</th>
                             
                            </tr>
                            <tr>
                                <th>Purpose Of Payment:</th>
                                <th colspan="5">Booking of {{ Session::get('productName')}}</th>
                            
                            </tr>
                            <tr>
                                <th>Payment Made By:</th>
                                <th colspan="5"><input type="checkbox" name="" id="">
                                    <label for="">Cash</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Cheque</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Pay Order</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Others</label></th>
                           
                            </tr>
                            <tr>
                                <th>Total Amount:</th>
                                <th>{{ Session::get('Amount')}}/=</th>
                                <th>Amount Paid</th>
                                <th>{{ Session::get('amountPaid')}}/=</th>
                                <th>Balance</th>
                                <th>{{ Session::get('balance')}}/=</th>
                            </tr>
                            <tr>
                                <th>Amount Received By:</th>
                                <th colspan="5">{{ Session::get('receivedBy')}}</th>
                            </tr>
                            <tr>
                                <th>Authorized Signature:</th>
                                <th></th>
                                <th>Authorized Stamp:</th>
                                <th colspan="5"></th>
                              
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>FORLAND MODERN MOTORS</h1>
                <p>8-Km, Sheikhupura Road, Opposite Millat Tractors Limited. Lahore. Tel: 0300-0600061
                    <br>
                    Email Address: forlandmodernmotors@yahoo.com
                </p>
            </div>
        </div>
    </div>
</footer>



<hr>



<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Payment Receipt</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Date: {{ Session::get('invoiceDate')}}</h5>
            </div>
            
            <div class="col-md-4 offset-md-4 text-right">
                <h5>Customer Copy</h5>

            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Amount Received From:</th>
                                <th>{{ Session::get('customerName')}}</th>
                                <th>Receipt #</th>
                                <th colspan="5">{{ Session::get('receiptNumber')}}</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th colspan="5">{{ Session::get('address')}}</th>
                             
                            </tr>
                            <tr>
                                <th>Purpose Of Payment:</th>
                                <th colspan="5">Booking of {{ Session::get('productName')}}</th>
                            
                            </tr>
                            <tr>
                                <th>Payment Made By:</th>
                                <th colspan="5"><input type="checkbox" name="" id="">
                                    <label for="">Cash</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Cheque</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Pay Order</label>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Others</label></th>
                           
                            </tr>
                            <tr>
                                <th>Total Amount:</th>
                                <th>{{ Session::get('Amount')}}/=</th>
                                <th>Amount Paid</th>
                                <th>{{ Session::get('amountPaid')}}/=</th>
                                <th>Balance</th>
                                <th>{{ Session::get('balance')}}/=</th>
                            </tr>
                            <tr>
                                <th>Amount Received By:</th>
                                <th colspan="5">{{ Session::get('receivedBy')}}</th>
                            </tr>
                            <tr>
                                <th>Authorized Signature:</th>
                                <th></th>
                                <th>Authorized Stamp:</th>
                                <th colspan="5"></th>
                              
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>FORLAND MODERN MOTORS</h1>
                <p>8-Km, Sheikhupura Road, Opposite Millat Tractors Limited. Lahore. Tel: 0300-0600061
                    <br>
                    Email Address: forlandmodernmotors@yahoo.com
                </p>
            </div>
        </div>
    </div>
</footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
