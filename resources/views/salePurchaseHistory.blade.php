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

    <title> Sale Purchase History</title>
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
            background-color: crimson;
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

<body onload="getPurchasesHistory()">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Stock Sale</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row my-2">
                            
                        </div>
                    </div>
                                <div class="container"  >
                                    <div class="row my-2" >
                                        
                                        <div class="col-md-4" >
                                        <label for="">Total Purchase Amount:</label>
                                        <h1 id="totalPurchaseAmount">0</h1></div>
                                        <div class="col-md-4" >
                                        <label for="">Total Sale Amount:</label>
                                        <h1 id="amountPaid">0</h1></div>
                                        <div class="col-md-4" >
                                        <label for="">Total<br> Balance:</label>
                                        <h1 id="remainingBalance">0</h1></div>
                                        
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
                                                    <th>Total Purchase Amount</th>
                                                    <th>Amount Paid</th>
                                                    <th>Balance</th>
                                                    <th>Transaction Date</th> 
                                                    <th>Party Name</th>
                                                    <th>Account Name</th>
                                                    <th>Transaction Category</th>
                                                    
                                                   
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
                                <button onclick="printPurchaseHistory()" class="btn btn-info">Print</button>
                                <!-- <button class="btn btn-danger">Close</button> -->
                            </div>
                        </div>
                    </div>
                    
                    @include('mainNavbar')
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
    function loadAllParties() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("parties").innerHTML =
                    this.responseText;
                $('#parties').selectpicker('refresh');

            }
        };

        xhttp.open("GET", "./loadAllParties", true);
        xhttp.send();
    };
               
    function getPurchasesHistory() {
        loadAllParties();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var data = this.responseText;
                
               
                var table;
                var dt = JSON.parse(data);
               
                a=dt[0];
                
                table = $('#myTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([  
                            a[i].InvoiceNo,a[i].PurhaseAmountAfterDiscount, a[i].PurchaseAmountPaid, a[i].PurchaseRemainingBalance, 
                            a[i].DateStamp, a[i].PartyName, a[i].AccountName+" ("+a[i].AccountNumber+")",
                            a[i].TransactionCatogery
                        ]);
                    });
                table.draw();
                sumColumns();

            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getSoldStockHistory/", true);

        xhttp.send();
    }

                   
</script>
<script>
    function printPurchaseHistory (){
                    var date1 = document.getElementById("date1").value;
                    var date2 = document.getElementById("date2").value;
                    var categoryID = $('#category').find(":selected").val();
                    var partyID = $('#parties').find(":selected").val();
                   
                //    alert(date1);
                  if (date1==""){
                    printPurchaseHistory2();
                }else{
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printPurchaseHistory/'+date1+'/'+date2+'/'+categoryID+'/'+partyID );
                  
                }
            }
            if(categoryID == ""){
                categoryID = "All";  
                    }
                     if(partyID == ""){
                        partyID = "All";  
                    }
                       
            // alert("hello");
            xhttp.open("GET", "./printPurchaseHistory/"+date1.trim()+"/"+date2.trim() +"/"+categoryID.trim()+"/"+partyID.trim(), true);
            xhttp.send();
        }
        }
     
    function printPurchaseHistory2(){
                    
        var categoryID = $('#category').find(":selected").val();
        var partyID = $('#parties').find(":selected").val();
                   
                  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printPurchaseHistory2/'+categoryID+'/'+partyID);
                  
                }
            }
             
            if(categoryID == ""){
                categoryID = "All";  
                    }
                     if(partyID == ""){
                        partyID = "All";  
                    }
                     
            // alert("hello");
            xhttp.open("GET", "./printPurchaseHistory2/"+categoryID.trim()+"/"+partyID.trim() ,true);
            xhttp.send();
        
        }



        function sumColumns(){
            var table = $('#myTable').DataTable();
            var totalPurchaseAmount = 0;
            var amountPaid = 0;
            var remainingBalance = 0;
           
            table.rows().eq(0).each( function ( index ) {
                var row = table.row( index );
                var data = row.data();

                totalPurchaseAmount = totalPurchaseAmount + Number(data[1]);
                 
                amountPaid = amountPaid + Number(data[2]);
                remainingBalance = totalPurchaseAmount-amountPaid;
            } );

          

            sum1=numberWithCommas(totalPurchaseAmount);
            sum2=numberWithCommas(amountPaid);
            sum3=numberWithCommas(remainingBalance);

            document.getElementById('totalPurchaseAmount').innerHTML=sum1;
            document.getElementById('amountPaid').innerHTML=sum2;
            document.getElementById('remainingBalance').innerHTML=sum3;
        }

             

        function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

    </script>
</body>

</html>