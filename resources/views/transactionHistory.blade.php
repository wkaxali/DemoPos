<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
      

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Transaction History</title>
    <style>
        
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


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

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .bootstrap-select {
            background: none;
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

        @media print {
            .left-content {
                width: 100% !important;
            }

            .sidebar-menu {
                display: none;
            }

          

         
        }

    </style>
</head>

<body onload="loadFunctions()" id="allData">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Transaction History</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row my-2">
                            <div class="col-md-4">
                                <label for="">Select Account</label>
                                <select class="selectpicker form-control" data-live-search="true" id="accounts"
                                    onchange="getTransactionHistoryAccounts()">

                                </select>
                            </div>

                            <div class="col-md-4 offset-md-4 ">
                                <label for="">Select Ledger</label>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="parties"
                                    onchange="getTransactionHistoryForParty()">

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
                                    <main id="mainHeader">
                                        <table class="table display table-bordered table-striped" id="myTable">
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
                                    </main>
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
  
 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right offset-md-8">
                    <button onclick="newFun()" class="btn btn-warning">Print</button>
                    <button class="btn btn-danger">Close</button>
                </div>
            </div>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
      <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
      
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js'></script>
      <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
      <script type="text/javascript" class="init">
  


          $(document).ready(function() {
           var a =  $("#firsthello").text();
      
              $('#myTable').DataTable( {
                  dom: 'Bfrtip',
                  buttons: [
                      {
                        extend: 'print',
                        title : 'hello world'  + a 
                      }
                  ]
              } );
           
          } );
          
      
          
              </script>
              	<script type="text/javascript">
                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-365466-5']);
                    _gaq.push(['_trackPageview']);
  
                    (function() {
                      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })();
      </script>
 


    <script>
        function loadFunctions() {
            loadAccounts();
            loadParties();
            getTransactionHistory();
        }

    </script>


    <script>
        function loadAccounts() {
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


    <script>
        function loadParties() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("parties").innerHTML = this.response;
                    $('#parties').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getPartyNames/", true);

            xhttp.send();
        }

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

        function getTransactionHistoryForParty() {
            var xhttp = new XMLHttpRequest();
            var LID = document.getElementById("parties").value;
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {


                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    alert(a);
                    table = $('#myTable').DataTable();
                    table.clear();

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
            xhttp.open("GET", "./transactionHistoryParties/" + LID, true);

            xhttp.send();
        }

        function getTransactionHistoryAccounts() {
            var xhttp = new XMLHttpRequest();
            var AID = document.getElementById("accounts").value;
            alert(AID);
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#myTable').DataTable();
                    table.clear();

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
            xhttp.open("GET", "./transactionHistoryAccounts/" + AID, true);

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

        function newFun() {
            var table = $('#myTable').DataTable();
            var htmlTable = '<table > ';
            var data = table
                .rows()
                .data();

            // var a = alert('The table has ' + data.length + ' records');
            for (i = 0; i < data.length; i++) {
                var rows = table.rows(i).data();
                //alert(rows[i])


                htmlTable = htmlTable + "<tr><td >" + i + "</td></tr>";
            }
            htmlTable = htmlTable + "</table>"
            // var divToPrint = document.getElementById("printTable");
            newWin = window.open("");
            newWin.document.write(
                '<html><head><title>Print it!</title><style>table,th,td{border:1px solid #333 ;}</style></head><body>'
            );
            // newWin.document.write("<h1> hhdd</h1>");

            newWin.document.write(htmlTable);
            newWin.print();
            //newWin.save();
var doc =new jsPFD("potrait");
doc.fromHTML(htmlTable);
doc.save(test.pdf);
            // newWin.close();
        }

    </script>

</body>

</html>
