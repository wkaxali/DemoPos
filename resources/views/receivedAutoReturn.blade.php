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
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Return</title>
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
        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
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
            text-align: center;
        }

        .receivingTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            overflow: auto !important;
        }

    </style>
</head>
<body onload="getPayment()">
<div class="page-container">
<div class="container">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Auto Return</h3>
                </div>
            </div>

        </div>
    </header>
    <br><br><br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto; margin-left: 80px;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Color</th>
                                <th>Engine Number</th>
                                <th>Chasis Number</th>
                                <th>Invoice Price</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Return</th>
                                
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
           
            </div>
        </div>
    </section>
    
</div>
@include('mainNavbar')<div class="clearfix"></div>








    <!--end::Demo Panel-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    
    </script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#stocktable').DataTable();
        });

    </script>
    <!--end::Global Theme Bundle-->

    <script>
        function getPayment() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    
                    var table;
                    var a = JSON.parse(data);

                    table = $('#stocktable').DataTable();

                    $.each(a, function (i, item) {
                        table.row.add([a[i].ProductID, a[i].ProductName, a[i].color,
                        a[i].EngineNumber, a[i].ChasisNumber,
                        a[i].PerUnitSalePrice, a[i].StatusInStock, a[i].description,
                        '<button class="btn print" onclick="returnAuto('+a[i].ProductID+')" >Return</button>'
                            
                        ]);
                    });
                    table.draw();

                }
            };

            xhttp.open("GET", "./getAvailableProducts/", true);
            xhttp.send();
        }


        function returnAuto(productID){
            var PID = productID;
            if (confirm("Do you want to perform this action on Auto "+productID)){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                    location.reload();
                    }
                };
                xhttp.open("GET", "./returnAuto/" + PID, true);
                xhttp.send();
            }
        }
        

    </script>

</body>

</html>
