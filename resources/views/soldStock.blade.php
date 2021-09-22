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

    <title>View Sold Stock</title>
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
        .pageContainer {
            border: 1px solid #aaaaaa;
            padding: 2px !important;
        }
        .receivingTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            overflow: auto !important;
        }
        
        @media (max-width: 768px) {
       
            
            .inner-block {
                padding: .5em 1em 2em 1em;
            }
       

            .dataTables_length{
                display: none !important;
            }
        }
        
        .market-update-block {
            height: 258px;
            width: 380px;
            border-radius: 10px;
        }


    </style>
</head>

<body onload="getStock()">
  
<div class="page-container">

<div class="left-content">
    
</div>
@include('sidenavbar')
<div class="clearfix"></div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <h3>View Sold Stock</h3>

            </div>
        </div>
        <br>
        <div class="pageContainer" style="margin-left:222px;">
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="market-updates">
                            <div class="row">


                                <div class="col-md-4 market-update-gd"  >
                                    <div data-toggle="modal" data-target="#bd-example-modal-lg"
                                        class="market-update-block clr-block-1">
                                        <h3 id = "monthlyamount"> 0</h3><br>
                                        <h4>This Month</h4>
                                        <h4 id = "monthlysale">Total Sales: 0</h4>
                                            
                                    </div>
                                </div>
                                <div class="col-md-4 market-update-gd" style="margin-left:170px;">
                                    <div class="market-update-block clr-block-3" href="/ac">
                                        <div class="col-md-8 market-update-left" >
                                            <h3 id = "monthlyexpense">0</h3><br>
                                            <h4>This Month</h4>
                                            <h4 id= "totalexpense">Total Expenses: 0</h4>

                                        </div>
                                       
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                
                                    </div>
                                </div>
                            </div> <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="receivingMain">


                    <div class="receivingTable"><br>
                        <table id="stockTable" class=" table-striped display nowrap"
                            style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Id</th>
                                    <th>Company</th>
                                    <th>Product Name</th>
                                    <th>Invoice Price</th>
                                    <th>Unit Purchase Price</th>
                                    <th>Stock</th>
                                    <th>Engine Number</th>
                                    <th>Chasis Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        <button onclick="hideColumn()">Hide</button>
                        <button class="btn btn-success" onclick="printStockData()">Print </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

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
                        
                        table.row.add([  a[i].ProductName,a[i].ProductID, a[i].Company, a[i]
                            .ProductName, a[i].PerUnitSalePrice, a[i].PerUnitPurchasePrice, a[i]
                            .StockIn, a[i].EngineNumber, a[i].ChasisNumber,a[i].Status
                        ]);
                    });
                    table.columns.adjust().draw();
                    getMonthlySales();
                    getMonthlyExpenses();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewSoldStock/", true);

            xhttp.send();
        }

    </script>

    <!-- <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();
        });

    </script> -->
  <script>
    $(document).ready(function () {
        $('#stockTable').DataTable({
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
            columnDefs: [{
                className: 'control',
                orderable: false,
                targets: 0
            }],
            order: [1, 'asc']
        });
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
<script>
    function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    function printStockData(){
                   
                  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printStockData/' );
                  
                }
            }
            
            // alert("hello");
            xhttp.open("GET", "./printStockData/" , true);
            xhttp.send();

        }

        function getMonthlySales() {
           

           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function () {

               if (this.readyState == 4 && this.status == 200) {

                   var a = this.responseText;
                   var data= JSON.parse(a);
                   document.getElementById("monthlysale").innerHTML  = "Total Sales: "+ numberWithCommas(data[0].TotalSales);
                   document.getElementById("monthlyamount").innerHTML  = numberWithCommas(data[0].Amount);

                   

               }
           };
         
           xhttp.open("GET", "./getMonthlySales/", true);

           xhttp.send();
       }


       function getMonthlyExpenses() {
          

          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function () {

              if (this.readyState == 4 && this.status == 200) {

                  var b = this.responseText;
                  var data= JSON.parse(b);
                  
                  document.getElementById("totalexpense").innerHTML  = "Total Expenses: "+ numberWithCommas(data[0].TotalSales);
                  document.getElementById("monthlyexpense").innerHTML  = numberWithCommas(data[0].TotalAmount);

              }
          };
         
          xhttp.open("GET", "./getMonthlyExpenses/", true);

          xhttp.send();
      }

    </script>
</body>

</html>

<!-- <script>
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

                        table.row.add([a[i].ProductID,  a[i].Company, a[i].ProductName, a[i]
                            .PerUnitSalePrice, a[i].PerUnitPurchasePrice, a[i].StockIn, a[i]
                            .EngineNumber, a[i].ChasisNumber, a[i].Status
                        ]);
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewStock/", true);

            xhttp.send();
        }

    </script> -->