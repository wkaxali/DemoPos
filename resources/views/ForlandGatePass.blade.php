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
    <title>Gate Pass</title>
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

        table {
            width: 100%;
            text-align: center;
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

    </style>
</head>

<body>
    <div class="borderMain">
        <div class="borderMain">
            <div class="borderMain">
                <div class="borderMain">
                    <div class="mainBorder">



                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 mb-5 text-center">
                                    <h5>FORLAND MODERN MOTORS GATE PASS</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="width: 170px; !important" for="">Reference Number:</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('referenceNumber')}}" name="" id="">
                                    <label style="width: 170px; !important" for="">Customer Name</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('customerName')}}" name="" id="">
                                </div>
                                <div class="col-md-4 offset-md-4">
                                    <label style="width: 170px; !important" for="">Date:</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('invoiceDate')}}" name="" id=""><br>
                                    <label style="width: 170px; !important" for="">CNIC/NTN</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('CNIC')}}" name="" id="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <thead>
                                            <th>Sr.#</th>
                                            <th>Product Description</th>
                                            <th>Engine Number</th>
                                            <th>Chassis Number</th>
                                            <th>Color</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>{{ Session::get('productName')}}</td>
                                                <td>{{ Session::get('engineNo')}}</td>
                                                <td>{{ Session::get('chassisNo')}}</td>
                                                <td>{{ Session::get('color')}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br><br>
                                    <br><br>

                                </div>
                            </div>
                        </div>
                        <section>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="">Authorized Stamp & Signature</label>
                                        <input type="text"
                                            style="border-left:none; border-top: none; border-right: none;" name=""
                                            id="">
                                    </div>
                                    <div class="col-md-5 offset-md-2 text-right">
                                        <label for="">Security In-Charge Stamp</label>
                                        <input type="text"
                                            style="border-left:none; border-top: none; border-right: none;" name=""
                                            id="">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br><br>
                        <footer>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <p class="text-center">8-Km, Sheikhupura Road, Opposite Millat Tractors Limited,
                                            Lahore, Tel: 0300-0600061 <br>
                                            Email Address: forlandmodernmotors@yahoo.com</p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr><br>
    <div class="borderMain">
        <div class="borderMain">
            <div class="borderMain">
                <div class="borderMain">
                    <div class="mainBorder">


                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 mb-5 text-center">
                                    <h1>FORLAND MODERN MOTORS <br> PASSAGE CERTIFICATE</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="width: 170px; !important" for="">Reference Number:</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('referenceNumber')}}" name="" id="">
                                    <label style="width: 170px; !important" for="">Customer Name</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('customerName')}}" name="" id="">
                                </div>
                                <div class="col-md-4 offset-md-4">
                                    <label style="width: 170px; !important" for="">Date:</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('invoiceDate')}}" name="" id=""><br>
                                    <label style="width: 170px; !important" for="">CNIC/NTN</label>
                                    <input type="text" style="border: none !important;"
                                        value="{{ Session::get('CNIC')}}" name="" id="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <thead>
                                            <th>Sr.#</th>
                                            <th>Product Description</th>
                                            <th>Engine Number</th>
                                            <th>Chassis Number</th>
                                            <th>City / Area</th>


                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>{{ Session::get('productName')}}</td>
                                                <td>{{ Session::get('engineNo')}}</td>
                                                <td>{{ Session::get('chassisNo')}}</td>
                                                <td>{{ Session::get('city')}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>

                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Note:</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Documents of above mentioned vehicle are submitted for registration in
                                            Excise and Taxation
                                            Department.</li>
                                        <li>This certificate allows vehicle to move on above mentioned location without
                                            any disturbance of
                                            government and non-government officer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <section>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-5 offset-md-2 text-right">
                                        <label for="">Authorized Stamp & Signature</label>
                                        <input type="text"
                                            style="border-left:none; border-top: none; border-right: none;" name=""
                                            id="">
                                    </div>
                                </div>
                            </div>
                        </section>


                        <footer>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <p class="text-center">8-Km, Sheikhupura Road, Opposite Millat Tractors Limited,
                                            Lahore, Tel:
                                            0300-0600061 <br>
                                            Email Address: forlandmodernmotors@yahoo.com</p>
                                    </div>
                                </div>
                            </div>
                        </footer>
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
