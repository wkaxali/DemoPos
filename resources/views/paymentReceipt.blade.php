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
        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0;
            /* this affects the margin in the printer settings */
        }

        th,
        td {
            border: 1px solid #333;
        }

        .borderMain {
            border: 1px solid #333;
            border-radius: 10px;
        }

        .mainBorder {
            border: 3px double #333;
            border-radius: 10px;
            margin: 10px;
        }

        .downBorder {
            border-bottom: 1px solid #333;
        }

        .helloworld {
            margin: 0px 20px 0px 20px;
        }

    </style>
    <title>Payment Receipt</title>
</head>

<body> <br><br><br><br><br><br>
@include('mainNavbar')
    <div class="helloworld">

        <div class="borderMain">
            <div class="borderMain">
                <div class="borderMain">
                    <div class="borderMain">
                        <div class="mainBorder">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h5>Payment Receipt</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Date: <span class="downBorder">12:00:00 AM</span></h5>
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
                                                        <th>Z Star International</th>
                                                        <th>Receipt #</th>
                                                        <th colspan="5">FMM-10-20-00015</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td colspan="5">Sagian Pass Road Nain Suck Lahore</td>

                                                    </tr>
                                                    <tr>
                                                        <th>Purpose Of Payment:</th>
                                                        <td colspan="5">Booking of Forland C314</td>

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
                                                        <td>2,340,000/=</td>
                                                        <th>Amount Paid</th>
                                                        <td>2,340,000/=</td>
                                                        <th>Balance</th>
                                                        <td>/=</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Amount Received By:</th>
                                                        <td colspan="5">Hamza</td>
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
                                            <p>8-Km, Sheikhupura Road, Opposite Millat Tractors Limited. Lahore. Tel:
                                                0300-0600061
                                                <br>
                                                Email Address: forlandmodernmotors@yahoo.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <br>
        <hr style="height: 3px; "><br><br><br><br>

        <div class="borderMain">
            <div class="borderMain">
                <div class="borderMain">
                    <div class="borderMain">
                        <div class="mainBorder">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h5>Payment Receipt</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Date: <span class="downBorder">12:00:00 AM</span></h5>
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
                                                        <th>Z Star International</th>
                                                        <th>Receipt #</th>
                                                        <th colspan="5">FMM-10-20-00015</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td colspan="5">Sagian Pass Road Nain Suck Lahore</td>

                                                    </tr>
                                                    <tr>
                                                        <th>Purpose Of Payment:</th>
                                                        <td colspan="5">Booking of Forland C314</td>

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
                                                        <td>2,340,000/=</td>
                                                        <th>Amount Paid</th>
                                                        <td>2,340,000/=</td>
                                                        <th>Balance</th>
                                                        <td>/=</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Amount Received By:</th>
                                                        <td colspan="5">Hamza</td>
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
                                            <p>8-Km, Sheikhupura Road, Opposite Millat Tractors Limited. Lahore. Tel:
                                                0300-0600061
                                                <br>
                                                Email Address: forlandmodernmotors@yahoo.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
