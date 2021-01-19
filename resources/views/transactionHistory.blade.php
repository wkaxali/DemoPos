<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <title>Transaction History</title>
    <style>
        .ThirdColor {
            background-color: blue;
            height: 30px;
            border-radius: 10px;
        }

        .FourthColor {
            background-color: Green;
            height: 30px;
            border-radius: 10px;
        }

         label {
            width: 100px;
        }
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
        
        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

    </style>
</head>

<body onload="getTransactionHistory()">
    <header>
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12 text-center ">
                    <h1>Transaction History</h1>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row my-2">
                <div class="col-md-4">
                    <select data-live-search="true" class=" selectpicker" id="paidTo">
                        <option value=1></option>
                        <option value=2></option>
                        <option value=3></option>
                        <option value=4></option>


                    </select> 
                </div>
                <div class="col-md-4 offset-md-4 text-right">
                    <select data-live-search="true" class=" selectpicker" id="paidTo">
                        <option value=1></option>
                        <option value=2></option>
                        <option value=3></option>
                        <option value=4></option>


                    </select> 
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor mt-1 mb-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="transactionTable">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th id="Cusname">Transaction ID</th>
                                    <th id="CusCont">Invoice No</th>
                                    <th id="Cusaddr">Transaction Category</th>
                                    <th id="CusIntrs">Amount</th>
                                    <th id="CusMeet">Transaction Date</th>
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
    <section id="MainSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor mt-1 mb-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>From Date :</td>
                            <td>24/11/2020</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 offset-md-4">
                    <table>
                        <tr>
                            <td>To Date :</td>
                            <td>24/11/2020</td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="Total">Total Amount</label>
                    <input type="text" name="total" value="1000" id="total">
                </div>
                <div class="col-md-4 offset-md-4">
                    <label for="Total">Paid by MM</label>
                    <input type="text" name="total" value="1000" id="total"><br>
                    <label for="Total">Paid by Customer</label>
                    <input type="text" name="total" value="1000" id="total">
                    <label for="Total">Balance</label>
                    <input type="text" name="total" value="1000" id="total">


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>The Amount <strong>24,600</strong> is payable by the company to MM </h3>
                </div>
            </div>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right offset-md-8">
                    <button class="btn btn-warning">Print</button>
                    <button class="btn btn-danger">Close</button>
                </div>
            </div>
        </div>
    </footer>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

    <script>
        function getTransactionHistory() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#myTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].TransactionID, a[i].InvoiceNo, a[i].TransactionCatogery, a[i]
                            .Amount,
                            a[i].DateStamp
                        ]);
                    });
                    table.draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./transactionHistory/", true);

            xhttp.send();
        }

    </script>
   <script type="text/javascript"
   src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>

</body>

</html>
