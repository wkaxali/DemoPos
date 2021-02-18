<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>View Expenses</title>
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


        }

        .receivingMain {
            /* border: 1px solid #aaaaaa; */
            border-radius: 10px;
            height: 550px;
            /* overflow: auto; */
        }



        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 2px !important;
        }

        .receivingTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            overflow: auto !important;
        }

    </style>
</head>

<body onload="getStock()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">


                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-3 text-center">
                                <h3>View Expenses</h3>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="receivingMain">


                                    <div class="receivingTable">
                                        <table id="stockTable" class=" table-striped"
                                            style="width: 100%; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>Transaction ID</th>
                                                    <th>ExpenseHead</th>
                                                    <th>Transaction Catogery</th>
                                                    <th>Price</th>
                                                    <th>Transaction Type</th>
                                                    <th>Date</th>
                                                    <th>Paid To</th>
                                                    <th>Paid Via</th>
                                                    <th>Account Number</th>
                                                    <th>Remarks</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
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

                    $.each(a, function (i, item) {
                      
                        table.row.add([a[i].TransactionID, a[i].ExpenseHead, a[i].TransactionCatogery, a[i]
                            .Amount, a[i].TransactionType, a[i].DateStamp, a[i].FirstName, a[i].AccountName, a[i].AccountNumber, a[i].Remarks
                        ]);
                    });
                    table.draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewExpense/", true);

            xhttp.send();
        }

    </script>

    <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();
        });

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
