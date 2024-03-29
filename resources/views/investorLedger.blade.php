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
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">



    <title>Investors Ledger</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        #LabelSection label {
            width: 100px;
        }

        th,
        td {
            text-align: center;
        }

        #Summary label {
            width: 225px;
        }

        .summaryLabels {
            float: right !important;
            margin-top: 20px !important;
        }

        .footerButtons {
            float: right !important;
        }


        #mainStockTable th,
        td {
            padding: 2px !important;
        }

        .customBorder {
            border: 1px solid #333;
            border-radius: 10px;
            background-color: #e61d2f;
            margin: 10px 0px;
        }

        .borderCustom {
            border: 1px solid #333;
            border-radius: 10px;
            padding: 10px;
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .borderCustom input {
            margin: 3px 0px;
        }



        .summary-2 label {
            width: 150px !important;
        }

        .summary-2 {
            margin-top: 35px;

        }

        #mainRowGame {
            pointer-events: none !important;
        }

        .tableParent {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            height: auto;
            max-height: 419px;
            overflow: auto !important;

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

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .borderCustom {
                padding: 0px;
            }

            .msides {
                margin-left: 0px !important;
                margin-top: 0px !important;
            }

            .ctrlTable {
                overflow: auto;
            }

            .ctrlTable table {
                width: 1000px !important;
            }

            .inner-block {
                padding: .5em 1em 2em 1em;
            }

            .msides button {
                margin: 5px 0px;
            }
        }

    </style>
</head>

<body onload="loadFunctions()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">


                <main>
                    <div class="container">
                        <div class="row  my-2">
                            <div class="col-md-12 text-center">
                                <h4>Investors Sales Ledger</h4>
                            </div>
                        </div>
                    </div>
                </main>
                <section id="LabelSection">
                    <div class="container">
                        <div class="row borderCustom">
                            <div class="col-md-5 offset-md-1">
                                <label for="">Name</label>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="investors"
                                    onchange="getInvestorDetails()">

                                </select>
                                <br>
                                <label for="">Budget</label>
                                <input type="text" class="form-control" style="width: 200px; display: inline-block;"
                                    value="" name="" id="budget">
                            </div>
                            <div class="col-md-5">
                                <label for="">Self Profit</label>
                                <input type="text" class="form-control" style="width: 200px; display: inline-block;"
                                    value="" name="" id="selfRatio">
                                <br>
                                <label for="">Investor Profit</label>
                                <input type="text" class="form-control" style="width: 200px; display: inline-block;"
                                    value="" name="" id="investorRatio">

                            </div>

                            <div class="col-md-1 msides" style="margin-left: -32px;margin-top: 2.5px; ">
                                <button type="button"
                                    style=" border-radius: 10px; height: 90px; background-color:#13579a; color: #ffffff; "
                                    class="btn " data-toggle="modal" data-target=".bd-example-modal-lg"
                                    onclick="getStock()">Assign
                                    Auto</button>

                            </div>
                        </div>
                    </div>
                </section>
                <br>

                <section class="my-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">


                                <div class="ctrlTable">
                                    <table class="table table-bordered table-striped"
                                        style="width: 100%; text-align: center;" id="mainStockTable">
                                        <thead>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Sale Price</th>
                                                <th>Purchase Price</th>
                                                <th>Profit</th>
                                                <th>Self Profit</th>
                                                <th>Investor Profit</th>
                                                <th>Engine Number</th>
                                                <th>Chasis Number</th>
                                            </tr>
                                        </thead>
                                        <tbody id="MainStockTableBody">
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 customBorder">
                                <h4>SUMMARY</h4>
                            </div>
                            <div class="col-md-4 offset-md-4" style="margin: 5px 0px 5px auto;">
                                <button class="btn" style="float: right;background-color:#13579a;color: #ffffff;"
                                    onclick="profits()">Calculate</button>
                            </div>
                            <div class="col-md-4 offset-md-4" style="margin: 5px 0px 5px auto;">
                                <button class="btn"
                                    style="float: right;width: 80px; background-color:#13579a;color: #ffffff;"
                                    onclick="addInvestorProducts()">Update</button>
                            </div>

                        </div>
                    </div>
                </section>
                <section id="Summary">
                    <div class="container">
                        <div class="row borderCustom">
                            <div class="col-md-5">
                                <div class="summaryLabels">
                                    <label for="">Total Profit</label>
                                    <input type="number" value="1133000" class="form-control"
                                        style="display: inline-block; width: 200px;" value="" id="totalProfit"><br>

                                    <label for="">Capital</label>
                                    <input type="number" value="80000000" class="form-control"
                                        style="display: inline-block; width: 200px;" name="" id="capital"><br>

                                    <label for="">Net Total</label>
                                    <input type="number" value="9133000" class="form-control"
                                        style="display: inline-block; width: 200px;" name="" id="netTotal"><br>



                                </div>

                            </div>
                            <div class="col-md-5 summary-2 offset-md-2">
                                <label for="">Amount Received By</label>
                                <input type="number" value="6500000" class="form-control"
                                    style="display: inline-block; width: 200px;" name="" id="RecievedMoney"><br>

                                <label for="">Remaining</label>
                                <input type="number" value="3511200" class="form-control"
                                    style="display: inline-block; width: 200px;" name="" id="remaining"><br>
                            </div>
                        </div>

                    </div>



                </section>
                <section>




                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Sales Ledger</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table style="width: 100%;" class=" table table-bordered" id="stockTable">
                                        <thead>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Sale Price</th>
                                                <th>Purchase Price</th>
                                                <th>Stock</th>
                                                <th>Engine Number</th>
                                                <th>Chasis Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        //  $(document).ready(function () {
        //      $('#mainStockTable').DataTable();
        // });

    </script>



    <script>
        function profits() {
            var table = document.getElementById("mainStockTable");
            var capital = document.getElementById("budget").value;
            var totalSail = 0;
            var totalPurchase = 0;
            var profit = 0;
            var investorRatio = document.getElementById("selfRatio").value;
            var selfRatio = document.getElementById("investorRatio").value;
            var totalProfit = 0;

            for (var i = 1; i < table.rows.length; i++) {
                totalSail = parseFloat(table.rows[i].cells[2].innerHTML);
                totalPurchase = parseFloat(table.rows[i].cells[3].innerHTML);

                profit = totalSail - totalPurchase;
                table.rows[i].cells[4].innerHTML = profit;
                table.rows[i].cells[6].innerHTML = profit * selfRatio / 100;
                table.rows[i].cells[5].innerHTML = profit * investorRatio / 100;

            }
            for (var i = 1; i < table.rows.length; i++) {
                totalProfit = parseFloat(totalProfit) + parseFloat(table.rows[i].cells[6].innerHTML);
            }

            document.getElementById("totalProfit").value = totalProfit;
            document.getElementById("capital").value = capital;
            document.getElementById("netTotal").value = parseFloat(totalProfit) + parseFloat(capital);
            var MoneyTook = parseFloat(document.getElementById("netTotal").value) - parseFloat(document.getElementById(
                "remaining").value);
            document.getElementById("RecievedMoney").value = MoneyTook;

        }

        $("#stockTable").on('click', 'tr', function () {




            var cell1 = this.cells[0].innerText;
            var cell2 = this.cells[1].innerText;
            var cell3 = this.cells[2].innerText;
            var cell4 = this.cells[3].innerText;
            var cell5 = this.cells[4].innerText;
            var cell6 = this.cells[5].innerText;
            var cell7 = this.cells[6].innerText;
            // var cell8 = this.cells[7].innerText;
            // var cell9 = this.cells[8].innerText;



            var addtable = document.getElementById("mainStockTable");
            var row = addtable.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);
            var mcell3 = row.insertCell(2);
            var mcell4 = row.insertCell(3);
            var mcell5 = row.insertCell(4);
            var mcell6 = row.insertCell(5);
            var mcell7 = row.insertCell(6);
            var mcell8 = row.insertCell(7);
            var mcell9 = row.insertCell(8);
            var mcell10 = row.insertCell(9);



            mcell1.innerHTML = cell1;
            mcell2.innerHTML = cell2;
            mcell3.innerHTML = cell3;
            mcell4.innerHTML = cell4;
            mcell5.innerHTML = "";
            mcell6.innerHTML = "";
            mcell7.innerHTML = "";
            mcell8.innerHTML = cell6;
            mcell9.innerHTML = cell7;
            mcell10.innerHTML = 0;
            mcell10.style.display = "none";

        });

    </script>



    <script>
        function getStock() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#stockTable').DataTable();
                    table.clear();
                    $.each(a, function (i, item) {

                        table.row.add([a[i].ProductID, a[i].ProductName, a[i].TotalSaleAmount, a[i]
                            .TotalCost,
                            a[i].StockIn, a[i].EngineNumber, a[i].ChasisNumber
                        ]);
                    });
                    table.draw();
                    //Profit()

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewSoldStock/", true);

            xhttp.send();
        }

    </script>



    <script>
        function loadFunctions() {
            loadInvestors();
        }


        function loadInvestors() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("investors").innerHTML = this.response;
                    $('#investors').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getInvestors/", true);

            xhttp.send();
        }

    </script>

    <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();

        });

    </script>

    <script>
        function getInvestorDetails() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;

                    var a = JSON.parse(data);

                    var table;
                    //document.getElementById("mainStocktBody").innerHTML="";

                    document.getElementById("selfRatio").value = a[0].OurProfitRatio;
                    document.getElementById("investorRatio").value = a[0].InvestorProfitRatio;
                    document.getElementById("budget").value = a[0].InitialInvestment;
                    document.getElementById("remaining").value = a[0].Balance;
                    document.getElementById("MainStockTableBody").innerHTML = "";

                    getInvestorStock();
                    profits();
                }

                //alert( this.responsedwedText);

            };
            var LID = $('#investors').find(":selected").val();

            xhttp.open("GET", "./invetorDetails/" + LID, true);
            xhttp.send();

        }

    </script>

    <script>
        function addInvestorProducts() {
            var ProductDetails = [];
            var table = document.getElementById("mainStockTable");

            var i = 0;

            $('#mainStockTable tr').each(function (row, tr) {

                var v = $(tr).find('td:eq(9)').text();

                if (v == 0) {
                    ProductDetails[i] = [

                        $(tr).find('td:eq(0)').text(), //Product ID
                        //$(tr).find('td:eq(1)').text(), //Product Name
                        $(tr).find('td:eq(2)').text(), //Sale Price
                        $(tr).find('td:eq(3)').text(), //Purchase Price
                        $(tr).find('td:eq(4)').text(), //Profit
                        $(tr).find('td:eq(5)').text(), //Self Profit
                        $(tr).find('td:eq(6)').text(), //Investor Profit
                        // $(tr).find('td:eq(7)').text(), // Engine No
                        // $(tr).find('td:eq(8)').text(), // Chasis Number

                    ];
                    i++;
                }
            });
            ProductDetails.shift();
            var LID = $('#investors').find(":selected").val();
            var TableWithLid = [LID, ProductDetails];
            var productTable = JSON.stringify(TableWithLid);

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Products " + this.responseText + " added");


                }
            };
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addInvestorProduct/" + productTable, true);
            xhttp.send();
        }

    </script>


    <script>
        function getInvestorStock() {
            var xhttp = new XMLHttpRequest();
            var LID = $('#investors').find(":selected").val();
            //alert(LID);
            xhttp.onreadystatechange = function () {


                if (this.readyState == 4 && this.status == 200) {



                    document.getElementById("MainStockTableBody").innerHTML = this.response;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getInvestorStock/" + LID, true);

            xhttp.send();
        }

    </script>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute",

                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative",

                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>


</body>

</html>
