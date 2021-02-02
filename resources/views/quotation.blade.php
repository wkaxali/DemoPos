<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <title>Quotation</title>
    <style>
        th,
        td {
            border: 1px solid #333;
        }

        tbody tr td:nth-child(1) {
            width: 200px;
        }

        a {
            color: black;
        }

        span i {
            font-size: 30px !important;
            color: #e61d2f;
        }
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body>

    <main>
        <div class="container">
            <div class="row my-2">
                <div class="col-md-12 text-center">
                    <img src="https://jwforland.com/image/catalog/logo.png" title="Forland" alt="Forland">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>{{ Session::get('customerName')}}</h5>
                </div>
                <div class="col-md-4 text-right offset-md-4">
                    <h5>{{ Session::get('invoiceDate')}}</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-center offset-md-4">
                    <h5>Quotation for {{ Session::get('productName')}}</h5>
                </div>
            </div>
        </div>
    </main>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Color</th>
                                <th>Unit Price</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Session::get('productName')}}</td>
                                <td rowspan="2">{{ Session::get('color')}}</td>
                                <td>Rs.</td>
                                <td rowspan="2">{{ Session::get('quantity')}}</td>
                                <td>Rs.</td>
                            </tr>
                            <tr>
                                <td>{{ Session::get('description')}}</td>
                                <td>={{ Session::get('price')}}/-</td>

                                <td>={{ Session::get('total')}}/-</td>
                            </tr>
                            <tr>
                                <td colspan="5">({{ Session::get('amountInWords')}} Only.)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <h5>Terms & Conditions</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <table style="width: 100%;">

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Delivery Time.</td>
                                <td>1 to 7 days after receipt of 100% advance payment.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Validity</td>
                                <td>This Quotation is Valid For 25 Days Only.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Payment</td>
                                <td>100% Advance Payment In shape of DD/PO in favor of FORLAND MODERN MOTORS</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Duty / Taxes</td>
                                <td>Any Change In Govt. Fiscal Policies , RGST/VAT and tariff structures will be on
                                    customer's Account.</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Force Majeure</td>
                                <td>Manufacture will Not be responsible for any delay in delivery due to force majeure
                                    circumstance.</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Warranty</td>
                                <td>Manufacture's Standard Warranty 120,000 Km or 02-Years , Whichever is occurs first
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Model</td>
                                <td>Forland C20(2021)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right offset-md-8">
                    <h5 style="border-top: 1px solid #333; display: inline-block;">Forland Modern Motors</h5>
                </div>
            </div>
        </div>
    </section>


    <footer style="margin-top: 100px;">
        <div class="container">
            <div class="row" style="border-top: 1px solid #333;">
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fa fa-map-marker"></i></span>
                    <h5 style="text-transform: uppercase;">BKM, {{ Session::get('UserName')}}Road,OM MILLAT Tractors,Lhr</h5>
                </div>
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fa fa-phone"></i></span>

                    <h5>Mob: <a href="+92-300-0600061">+92-300-0600061</a></h5>
                    <h5>Tel: <a href="+92-300-0600061">+92-42-37925218/318</a></h5>
                </div>
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fas fa-envelope"></i></span>
                    <h5>forlandmodernmotors@gmail.com</h5>

                </div>
            </div>
        </div>
    </footer>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
</body>

</html>
