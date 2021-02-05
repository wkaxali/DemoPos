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
        th,
        td {
            border: 1px solid #333;
            padding: 3px 0px;
        }



     
   
    </style>
    <title>Forland Modern Motors</title>
</head>

<body>
    <hr>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" alt="">
            </div>
        </div>
    </div>



    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <label for="">To,</label>
                <h5>{{ Session::get('customerName')}}</h5>
                <h5>Foton Auto Park (PVT) Ltd.</h5>
                <h5>Subject: Invoice Request {{ Session::get('productName')}}</h5>
            </div>
            <div class="col-md-4 offset-md-3">
                <h5>Date: {{ Session::get('invoiceDate')}}</h5>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="testTable">
                <table style="width: 100%; text-align: center;">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>{{ Session::get('customerName')}}</th>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>{{ Session::get('address')}}.</th>
                        </tr>
                        <tr>
                            <th>Contact Details</th>
                            <th>{{ Session::get('contact')}}</th>
                        </tr>
                        <tr>
                            <th>NTN / CNIC #</th>
                            <th>{{ Session::get('CNIC')}}</th>
                        </tr>
                        <tr>
                            <th>Salesperson</th>
                            <th>Forland Modern Motors</th>
                        </tr>
                        <tr>
                            <th>Dealer</th>
                            <th>Forland Modern Motors</th>
                        </tr>
                        <tr>
                            <th>Vehicle</th>
                            <th>{{ Session::get('productName')}}</th>
                        </tr>
                        <tr>
                            <th>Chassis No</th>
                            <th>{{ Session::get('chassisNo')}}</th>
                        </tr>
                        <tr>
                            <th>Engine No</th>
                            <th>{{ Session::get('engineNo')}}</th>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <th>{{ Session::get('color')}}</th>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <th>PKR {{ Session::get('price')}}/-</th>
                        </tr>
                        <tr>
                            <th>Payment: Cheque Details</th>
                            <th>Payment Details Attached</th>
                        </tr>
                    </thead>

                </table>
                <p>Note:</p>
                <h5>1- 04<sup>RD</sup> Unit Out of 55 Units </h5>
            </div>
        </div>
    <br><br><br><br>
        <div class="row">
            <div class="col-md-4 offset-md-8">

                <input type="text" style="border-top: none; border-left: none; border-right: none; width: 300px;" name="" id="">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-map-marker"></i>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-phone"></i>

                </div>
                <div class="col-md-4">
                    <i class="fas fa-envelope"></i>

                </div>
            </div>
        </div>
    </footer>
    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</body>

</html>
