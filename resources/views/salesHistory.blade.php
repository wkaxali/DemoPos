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
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">


    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Sales History</title>
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
        th { font-size: 13px;   }
        td { font-size: 13px; }

        .inner-block {
            padding: 1em 1em 2em 1em;
        }
        .bootstrap-select > select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {
    display: block !important;
}
    </style>
</head>

<body onload="getSalesHistory()">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Sales History</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row my-2">
                            <div class="col-md-4">
                                <label style="width:117px;" for="">Select Category</label>
                                <select class="selectpicker form-control" data-live-search="true" id="category">
                                    <option value="All">All Sales</option>
                                    <option value="Sales">Auto Sales</option>
                                    <option value="Stock and Service">Stock and Service</option>

                                </select>
                            </div>

                            <div class="col-md-4  ">
                                <label for="" id="pname">Customers</label>
                                <select 
                                    class="selectpicker form-control" data-live-search="true" id="customers" >
                                    <option value=""></option>
                                </select>
                                </div>
                            <div class="col-md-4  ">
                                
                                <button 
                                    class="btn  btn-info" data-live-search="true"  style="margin-top:32px;"
                                    onclick="filterSalesData()">
                                    Search
                                </button>
                                </div>
                        </div>
                    </div>
                                <div class="container"  >
                                     <div class="row my-2" >
                                        <div class="col-md-4">
                                            <label for="">Total Sale Amount:</label>
                                            <h1 id="totalSaleAmount">0</h1>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Total Amount Paid:</label>
                                            <h1 id="remainingAmount">0</h1>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Total Balance:</label>
                                            <h1 id="invoiceBalance">0</h1>
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



                <section >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="transactionTable">
                                     
                                       <div id ="mydata" class="table-responsive">
                                       <table  style="width: 100%; text-align: center;" class="table table-striped display nowrap" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Invoice Number</th>
                                                    <th>Customer Name</th>
                                                    <th>Account Name</th>
                                                    <th>Transaction Category</th>
                                                    <th>Total Sale Amount</th>
                                                    <th>Amount Paid</th>
                                                    <th>Balance</th>
                                                    <th>Transaction Date</th> 
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
                                <button onclick="printTrasactionHistory()" class="btn btn-info">Print</button>
                                <!-- <button class="btn btn-danger">Close</button> -->
                            </div>
                        </div>
                    </div>
                    
                    @include('sidenavbar')
        <div class="clearfix"></div>
            </div>






            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
            </script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js'></script>


<script>

    function loadAllCustomers() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("customers").innerHTML =
                    this.responseText;
                $('#customers').selectpicker('refresh');

            }
        };

        xhttp.open("GET", "./getAllCustomers", true);
        xhttp.send();
    };
               
    function getSalesHistory() {
        loadAllCustomers();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var data = this.responseText;
                //alert(data);
                var table;
                var dt = JSON.parse(data);
            
                a=dt[0];
                totalSaleAmount=dt[1];
                remainingAmount=dt[2];
                invoiceBalance=dt[3];
                document.getElementById('totalSaleAmount').innerHTML=totalSaleAmount;
                document.getElementById('remainingAmount').innerHTML=remainingAmount;
                document.getElementById('invoiceBalance').innerHTML=invoiceBalance;
                table = $('#myTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([  
                        a[i].InvoiceNumber, a[i].CustomerName, a[i].AccountName+" ("+a[i].AccountNumber+")",
                        a[i].TransactionCatogery, a[i].TotalAmount, a[i].AmountPaid, a[i].Balance, 
                        a[i].DateStamp
                    ]);
                    });
                table.draw();
                

            }
        };
        //alert("ljd");
        xhttp.open("GET", "./salesHistory/", true);

        xhttp.send();
    }

    function filterSalesData() {

        var category = $('#category').find(":selected").text();
        var categoryID = $('#category').find(":selected").val();
        var customerID = $('#customers').find(":selected").val();
        

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var data = this.responseText;
                
                var table;
                var dt = JSON.parse(data);
               
                a=dt[0];
                totalSaleAmount=dt[1];
                remainingAmount=dt[2];
                invoiceBalance=dt[3];
  
                document.getElementById('totalSaleAmount').innerHTML=totalSaleAmount;
                document.getElementById('remainingAmount').innerHTML=remainingAmount;
                document.getElementById('invoiceBalance').innerHTML=invoiceBalance;
                table = $('#myTable').DataTable();
                table.clear();
                $.each(a, function (i, item) {

                    table.row.add([  
                        a[i].InvoiceNumber, a[i].CustomerName, a[i].AccountName+" ("+a[i].AccountNumber+")",
                        a[i].TransactionCatogery, a[i].TotalAmount, a[i].AmountPaid, a[i].Balance, 
                        a[i].DateStamp
                    ]);
                });
                table.draw();

            }
        };
       
        if(customerID==" "){
            customerID="All";
        }
  

        xhttp.open("GET", "./filterSalesHistory/"+categoryID+"/"+customerID, true);
        xhttp.send();
    }

               
</script>
     
</body>

</html>
