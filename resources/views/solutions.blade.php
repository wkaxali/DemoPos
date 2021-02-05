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

        label {
            width: 55px;
        }

        tr th {
            height: 50px;
            font-size: 20px;
        }

        tr th:nth-child(1) {
            padding-left: 5px;
        }

        tr th:nth-child(2) {
            width: 600px;
            text-align: center;
        }

        .mainDivs input {

            margin: 4px 0px;
        }

        @media print {
            textarea {
                border: none !important;
                outline: none !important;
            }
        }

    </style>
    <title>Forland Modern Motors</title>
</head>

<body>
    <br><br>
    <hr>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{asset('assets/img/wtf.jpeg')}}" alt="">
            </div>
        </div>
    </div>



    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <label style="font-weight: 700; font-size: 20px; width: 100px;" for="">To,</label>
                <input type="text" value="{{ Session::get('customerName')}}" class="form-control"
                    style="display: inline-block !important; width: 200px !important;" name="" id=""><br>
                <label style="font-weight: 700; font-size: 20px; width: auto !important;" for="">Foton JW Auto Park
                    (PVT) Limited.</label>
                <br>
                <label style="font-weight: 700; font-size: 20px; width: 100px;" for="">Subject</label>
                <input type="text" value="{{ Session::get('productName')}}" class="form-control"
                    style="display: inline-block !important; width: 200px !important;" name="" id="">


            </div>
            <div class="col-md-4 offset-md-2">
                <label for="">Date: </label>
                <input type="date" name="" value="{{ Session::get('invoiceDate')}}" class="form-control"
                    style="display: inline-block; width: 200px;" id="">
            </div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1" id="testTable">
                <table style="width: 100%;">
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
                            <!-- <th>Forland Modern Motors</th> -->
                            <th></th>
                        </tr>
                        <tr>
                            <th>Dealer</th>
                            <!-- <th>Forland Modern Motors</th> -->
                            <th></th>
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
                            <th></th>
                            <!-- <th>PKR {{ Session::get('price')}}/-</th> -->
                        </tr>
                        <tr>
                            <th>Payment Details</th>
                            <!-- <th>Payment Details Attached</th> -->
                            <th></th>
                        </tr>
                    </thead>

                </table>
                <p style="font-size: 18px; margin-top: 5px;">Note:</p>
                <div class="mainDivs">
                    <textarea name="" id="" cols="113" rows="3"></textarea>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="row mt-5">


            <div class="col-md-10 offset-md-1 text-right">
                <label style="border-top: 1px solid #333; width:230px; text-align: center; !important" for="">Stamp &
                    Sign</label>

            </div>
        </div>
    </div>
    <hr>
    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</body>

</html>
