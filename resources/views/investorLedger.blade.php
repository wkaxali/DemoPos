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


    <title>Investors Ledger</title>
    <style>
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
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .borderCustom input {
            margin: 3px 0px;
        }

        a {
            text-decoration: underline !important;
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

    </style>
</head>

<body>
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
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select><br>
                    <label for="">Budget</label>
                    <input type="text" class="form-control" style="width: 200px; display: inline-block;" value="15Lac"
                        name="" id="">
                </div>
                <div class="col-md-5">
                    <label for="">From</label>
                    <input type="date" name="" style="width: 200px; display: inline-block; margin: 5px 0px;"
                        class="form-control" id="">
                    <br>
                    <label for="">To</label>
                    <input type="date" name="" class="form-control" style="width: 200px; display: inline-block;" id="">

                </div>
                <div class="col-md-1" style="margin-left: -32px;margin-top: 2.5px; ">
                    <button type="button"
                        style=" border-radius: 10px; height: 90px; background-color:#13579a; color: #ffffff;"
                        class="btn " data-toggle="modal" data-target=".bd-example-modal-lg" onclick="getStock()">Assign
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
                    <div class="tableParent">
                        <table class="table-bordered" id="mainStockTable">
                            <thead>
                            <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Company</th>
                                    <th>Unit Sale Price</th>
                                    <th>Unit Purchase Price</th>
                                    <th>Stock</th>
                                    <th>Engine Number</th>
                                    <th>Chasis Number</th>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 customBorder">
                    <h4>SUMMARY</h4>
                </div>
                <div class="col-md-4 offset-md-4" style="margin: 5px 0px 5px auto;">
                    <button class="btn" style="float: right;background-color:#13579a;color: #ffffff;">Update</button>
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
                            style="display: inline-block; width: 200px;" name="" id=""><br>

                        <label for="">Capital</label>
                        <input type="number" value="80000000" class="form-control"
                            style="display: inline-block; width: 200px;" name="" id=""><br>

                        <label for="">Net Total</label>
                        <input type="number" value="9133000" class="form-control"
                            style="display: inline-block; width: 200px;" name="" id=""><br>



                    </div>

                </div>
                <div class="col-md-5 summary-2 offset-md-2">
                    <label for="">Amount Received By</label>
                    <input type="number" value="6500000" class="form-control"
                        style="display: inline-block; width: 200px;" name="" id=""><br>

                    <label for="">Remaining</label>
                    <input type="number" value="3511200" class="form-control"
                        style="display: inline-block; width: 200px;" name="" id=""><br>
                </div>
            </div>

        </div>



    </section>
    <section>




        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
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
                                    <th>Company</th>
                                    <th>Unit Sale Price</th>
                                    <th>Unit Purchase Price</th>
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
            $('#mainStockTable').DataTable();
        });

    </script>
    <script>
        $("#stockTable").on('click', 'tr', function () {




            var cell1 = this.cells[0].innerText;
            var cell2 = this.cells[1].innerText;
            var cell3 = this.cells[2].innerText;
            var cell4 = this.cells[3].innerText;
            var cell5 = this.cells[4].innerText;
            var cell6 = this.cells[5].innerText;
            var cell7 = this.cells[6].innerText;
            var cell8 = this.cells[7].innerText;


            var addtable = document.getElementById("mainStockTable");
            var row = addtable.insertRow(1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);
            var mcell3 = row.insertCell(2);
            var mcell4 = row.insertCell(3);
            var mcell5 = row.insertCell(4);
            var mcell6 = row.insertCell(5);
            var mcell7 = row.insertCell(6);
            var mcell8 = row.insertCell(7);


            mcell1.innerHTML = cell1;
            mcell2.innerHTML = cell2;
            mcell3.innerHTML = cell3;
            mcell4.innerHTML = cell4;
            mcell5.innerHTML = cell5;
            mcell6.innerHTML = cell6;
            mcell7.innerHTML = cell7;
            mcell8.innerHTML = cell8;
        });

    </script>

<script>
    function sailPriceTotal(){
        var table = document.getElementById("stockTable");
        var sum = 0;
    
        for(var i = 1; i < table.rows.length; i++)
                {
                    sum = sum + parseInt(table.rows[i].cells[4].innerHTML);
                }
                alert(sum)
                document.getElementById("totalPaid").value = sum;
    }
    </script>

<script>
function getStock(){
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

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i].TotalSaleAmount, a[i].TotalCost,
                    a[i].StockIn, a[i].EngineNumber, a[i].ChasisNumber]);
                });
                table.draw();

        }
    };
    //alert("ljd");
    xhttp.open("GET", "./viewSoldStock/", true);
    
    xhttp.send();
    }
    
  
    </script>
    <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();
        });
        
</script>
</body>

</html>
