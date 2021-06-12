<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <title>Receiving</title>


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




        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }

        table tr td:last-child {
            width: 100px;
        }



        th,
        td {
            border: 1px solid #aaaaaa;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 400px;
            overflow: auto;
        }

        .btn-print {

            background-color: #ffffff;
            border: 1px solid #0a549d;
            color: #0a549d;

            transition: .7s;
        }

        .btn-print:hover {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
            transition: .7s;
        }

        .btn-view {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .btn-update {
            background-color: #e61d2f;
            color: #ffffff !important;
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

        /* THis is receiveing Media Query */
        .orderNOLabel {
            width: 130px;
        }

        @media only screen and (max-width: 578px) {
            .receivingTable {
                width: 509px !important;
                overflow: auto !important;
            }
        }

        @media screen and (device-aspect-ratio: 375/667) {
            .orderNOLabel {
                width: 109px;
            }
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
            .orderNOLabel {
                width: 109px;
            }
        }

        /* Receiving Media Query Ends */
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

        @media (max-width: 768px) {
            .orderNOLabel {
                display: block;
            }
            #OrderId{
                width: 150px;
                
            }
            input{
                margin: 3px 0px;
            }
            .text-right{
                text-align: center !important;
            }
            .text-right a{
                margin: 3px 0px !important;
            }
            
            .inner-block {
                padding: .5em 1em 2em 1em;
            }

        }

    </style>
</head>

<body onload="loadaccounts()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Receiving</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="orderNOLabel" for="OrderNo">Order No</label>
                                <input type="text" name="" value="" id="OrderId">
                                <button class="btn" style="background-color: #e61d2f; height: 30px;"
                                    onclick="getOrderDetails()"></button>

                            </div>
                            <div class="col-md-4 offset-md-4">
                                <label for="">Payment Method</label>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="accounts">

                            </div>


                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="receivingMain">


                                <div class="receivingTable">
                                    <table class=" table-striped" style="width: 100%; text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Name</th>
                                                <th>Color</th>
                                                <th>Chasis No</th>
                                                <th>Engine No</th>
                                                <th>Tranport Charges</th>

                                                <th>Status</th>


                                            </tr>
                                        </thead>
                                        <tbody id="autoTableBody">
                                            <!-- Rows are comming from OrderFlowController -->
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="footerBtns text-right">
                                <a class="btn btn-view" href="viewStock.html">View Stock</a>
                                <a class="btn btn-print" href="viewStock.html">Print Details</a>
                                <a class="btn btn-update" onclick="UpdateStatusAndTransaction()">Update</a>


                            </div>
                        </div>
                    </div>
            </div>
            </header>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>
    </div>












    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

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
    <script>
        function getOrderDetails() {


            var oid = document.getElementById("OrderId").value;
            var xhttp = new XMLHttpRequest();


            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("autoTableBody").innerHTML = this.responseText;




                }

            };

            xhttp.open("GET", "./getOrderId/" + oid, true);
            xhttp.send();
        }





        function UpdateStatusAndTransaction() {

            var products = [];
            var table = document.getElementById("autoTableBody");


            //alert(sp);
            $('#autoTableBody tr').each(function (row, tr) {

                products[row] = [

                    $(tr).find('td:eq(1)').text(), //PID
                    $(tr).find('td:eq(3) input[type="text"]').val(), //color
                    $(tr).find('td:eq(4) input[type="text"]').val(), //chasisNumber
                    $(tr).find('td:eq(5) input[type="text"]').val(), //EngineNumber
                    $(tr).find('td:eq(6) input[type="text"]').val(), //Transport charges
                    $(tr).find('td:eq(7)').find(":selected").val() //Status




                ];


            });
            //products.shift();

            var AID = $('#accounts').find(":selected").val();
            var OID = document.getElementById("OrderId").value;
            var array2 = [products, OID, AID];
            var prod = JSON.stringify(array2);

            var accVal = document.getElementById("accounts").value;

            var xhttp = new XMLHttpRequest();
            if (accVal == "") {
                alert('Payment Method not Selected');
            } else {
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Stock =" + this.responseText + " Updated");


                    }
                };
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./ruautos/" + prod, true);
                xhttp.send();

            }
        }

    </script>

    <script>
        function loadaccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("accounts").innerHTML = this.response;
                    $('#accounts').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAccountHeads/", true);

            xhttp.send();


        }

    </script>



</body>

</html>
