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


    <title>Investor General Ledger</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;


        }

        #mainSection label {
            width: 100px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 27% !important;
            }
        }

        .borderDiv {
            border: 1px solid #333;
            width: 100%;
            height: 30px;
            border-radius: 10px;
            margin-top: 10px;

        }

        .footerBtns {
            float: right !important;
            margin: 5px;
        }

        .summaryLabels {
            float: right !important;
            /* margin-top: 20px !important; */
        }

        #Summary label {
            width: 105px;
        }

        .borderCustom {
            padding: 0px !important;
            margin-top: 5px;
        }


        .borderCustom-1 {
            border: 1px solid #333;
            border-radius: 10px;
            margin-top: 5px;
            padding: 3px;
        }

        .borderCustom-1 input {
            margin: 3px 0px;
        }

        #myTable th,
        td {
            padding: 3px !important;
        }

        .borderCustom-1 {
            border: 1px solid #333;
            border-radius: 10px;
        }

        .summary-2 label {
            width: 150px !important;
        }

        .summary-2 {
            margin-top: 15px;
            margin-left: 265px;
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
            overflow: hidden;

        }

        .bootstrap-select>.dropdown-toggle {
            position: relative;
            width: 100%;
            margin-top: -10px;
            padding: 0px 5px !important;
            z-index: 1;
            text-align: right;
            white-space: nowrap;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #aaa;
            height: 25px;
            border-radius: 3px;
            padding: 5px;
            background-color: transparent;
            margin-left: 3px;
        }
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

    </style>
</head>

<body onload="getInvestorData()">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Investors General Ledger</h4>
                </div>
            </div>
        </div>
    </main>
    <section id="mainSection">
        <div class="container">
            <div class="row borderCustom-1">
                <div class="col-md-5 offset-md-1">
                    <label for="">Name</label>
                    <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                        <option value=0></option>
                        <option value=1>Farhan</option>
                        <option value=2>Malik</option>
                        <option value=3>Ali</option>
                        <option value=4>Rizwan</option>


                    </select>
                </div>
                <div class="col-md-5 offset-md-1">
                    <label for="">Contact No</label>
                    <input type="text" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" name="" id="">

                    <button style="height: 25px; margin-top: -5px;" class="btn"></button>
                </div>
                <div class="col-md-5 offset-md-1">
                    <label for="">Budget</label>
                    <input type="text" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" value="80,000" name=""
                        id=""><br>

                </div>
                <div class="col-md-5 offset-md-1">
                    <label for="">Profit</label>
                    <input type="text" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" value="81,000" name=""
                        id="">
                </div>
                <div class="col-md-6 offset-md-1 ">
                    <label for="">Amount</label>
                    <input type="text" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" name="" id="">

                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row borderCustom">
                <div class="col-md-12 text-center">
                    <h6>Details</h6>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainTable">
                        <table class="table-striped table-bordered table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Type</th>
                                    <th>Balance</th>
                                    <th>Current</th>
                                    <th>Mode</th>
                                    <th>Account</th>
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
    <section id="Summary">
        <div class="container">
            <div class="row borderCustom-1">
                <div class="col-md-4">
                    <div class="summaryLabels">
                        <label for="">Total Profit</label>
                        <input type="text" value="11,33,000" class="form-control"
                            style="width: 200px; display: inline-block;height: 25px !important;" name="" id=""><br>

                        <label for="">Capital</label>
                        <input type="text" value="80,000,000" class="form-control"
                            style="width: 200px; display: inline-block;height: 25px !important;" name="" id=""><br>

                        <label for="">Net Total</label>
                        <input type="text" value="91,33,000" class="form-control"
                            style="width: 200px; display: inline-block;height: 25px !important;" name="" id=""><br>



                    </div>

                </div>
                <div class="col-md-5 summary-2 offset-md-1">
                    <label for="">Amount Received By</label>
                    <input type="text" value="65,000,00" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" name="" id=""><br>

                    <label for="">Remaining</label>
                    <input type="text" value="35,11,200" class="form-control"
                        style="width: 200px; display: inline-block;height: 25px !important;" name="" id=""><br>
                </div>
            </div>

        </div>



    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <div class="footerBtns">
                        <button class="btn">Edit</button>
                        <button class="btn">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

<script>
function getInvestorData(){
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

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i].PerUnitSalePrice, a[i].PerUnitPurchasePrice
                    , a[i].StockIn, a[i].EngineNumber, a[i].ChasisNumber]);
                });
                table.draw();

        }
    };
    //alert("ljd");
    xhttp.open("GET", "./getInvestorData/", true);
    
    xhttp.send();
    }
</script>



    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
</body>

</html>
