<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #mainHeader,
            #mainHeader * {
                visibility: visible;
            }

            #mainHeader {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        .mainButtopns button {
            width: 150px;
        }

        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0;
            /* this affects the margin in the printer settings */
        }

    </style>
    <title>Title</title>
</head>

<body>
    <header id="mainHeader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Stock History</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label for="">From</label>
                    <input type="date" name="" id="">
                </div>
                <div class="col-md-3">
                    <label for="">To</label>
                    <input type="date" name="" id="">
                </div>
                <div class="col-md-3">
                    <label for="">Total Stock In</label>
                    <input type="date" name="" id="">
                </div>
                <div class="col-md-3">
                    <label for="">Total Stock Out</label>
                    <input type="date" name="" id="">
                </div>
            </div>

        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="table table-hover table-bordered table-striped">
                        <thead>

                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Total Stock</th>
                                <th>Sold Stock</th>
                                <th>Remaining</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mainButtons text-right offset-md-8">
                    <button style="background-color: #000;color: #fff;" class="btn">Close</button>
                    <button onclick="personalDiv()" style="background-color: #f0e580; color: #fff;"
                        class="btn">Print</button>

                </div>
            </div>
        </div>
    </footer>















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        function personalDiv() {

            window.print();
        }

    </script>
</body>

</html>
