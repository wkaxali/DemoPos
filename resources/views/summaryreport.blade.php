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

    <title>Transactions Summary Report</title>
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

<body onload="getTransactionHistory()" id="allData">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Summary Report</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                     
                                <div class="container"  >
                                     <div class="row my-2" >
                                            <div class="col-md-4" >
                                                <label for="">Select Month</label>
                   
                                                
                                                <select name="month" id="month">
                                                     <option value="All">All</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select> 
 
                                            </div>
                                             
                                            <div class="col-md-4" >
                                                <button  class="btn  btn-info" data-live-search="true" id="dates" style="margin-top:20px;"
                                                        onclick="selectedMonthData()">Search </button> </div>
                                            </div>
                                            <!-- <label for="">Total:</label>
                                            <h1 id="tableSum">0</h1>
                                             -->
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
                                                   
                                                    <th>Transaction ID</th>
                                                    <th>Invoice Number</th>
                                                    <th>Party Name</th>
                                                    <th>Employee Name</th>
                                                    <th>Customer Name</th>
                                                    <th >Expense Head</th>
                                                    <th>Account Name</th>
                                                    <th>Transaction Category</th>
                                                    <th>Amount</th>
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
                                <button onclick="printMonthlyTrasaction()" class="btn btn-info">Print</button>
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
            

        
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-365466-5']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                        '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>
 
 
            <script>

            function dateFormat(data){
                monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
                var date = new Date(data);
                var d = date.getDate();
                var m = monthNames[date.getMonth()];
                var y = date.getFullYear();
                finalDate = d+"-"+m+"-"+y;
                return finalDate;
            }
                function getTransactionHistory() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {

                        if (this.readyState == 4 && this.status == 200) {

                            var data = this.responseText;
                            //alert(data);
                            var table;
                            var dt = JSON.parse(data);
                            a=dt[0];
                            sum=dt[1];
                            
                            //alert(a[0].TransactionID);
                            table = $('#myTable').DataTable();

                            $.each(a, function (i, item) {

                                table.row.add([  
                                    a[i].TransactionID,a[i].InvoiceNo, a[i].PartyName, a[i].FirstName+" "+a[i].LastName, a[i].CustomerName,  a[i].ExpenseHead, a[i].AccountName+" ("+a[i].AccountNumber+")",
                                    a[i].TransactionCatogery, a[i].Amount,
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
 
            </script>
 
            <script>
                var toggle = true;

                $(".sidebar-icon").click(function () {
                    if (toggle) {
                        $(".page-container").addClass("sidebar-collapsed").removeClass(
                            "sidebar-collapsed-back");
                        $("#menu span").css({
                            "position": "absolute",

                        });
                    } else {
                        $(".page-container").removeClass("sidebar-collapsed").addClass(
                            "sidebar-collapsed-back");
                        setTimeout(function () {
                            $("#menu span").css({
                                "position": "relative",

                            });
                        }, 400);
                    }
                    toggle = !toggle;
                });

                function selectedMonthData() {
                  
                    var month = $('#month').find(":selected").val();
              
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                        var data = this.responseText;
                       
                        
                            var table;
                            var a = JSON.parse(data);
                             
                            table = $('#myTable').DataTable();
                            table.clear();

                            $.each(a, function (i, item) {

                                date = dateFormat();
                                table.row.add([a[i].TransactionID, a[i].InvoiceNo, a[i].PartyName, a[i].FirstName+" "+a[i].LastName, a[i].CustomerName, a[i].ExpenseHead,a[i].AccountName+" ("+a[i].AccountNumber+")", a[i].TransactionCatogery,
                                    a[i]
                                    .Amount,
                                    a[i].DateStamp
                                ]);
                            });
                            table.draw();
 
                        }
                    };
 
                    xhttp.open("GET", "./selectedMonthData/"+month , true);

                    xhttp.send();

                }

            </script>
       <!-- <script>
		    function printDiv(mydata){
                   
               
                   var printContents = document.getElementById('mydata').innerHTML;
                   var originalContents = document.body.innerHTML;
       
                   document.body.innerHTML = printContents;
                   document.getElementById("myTable_length").style.visibility = "hidden";
                   document.getElementById("myTable_filter").style.visibility = "hidden";
                   document.getElementById("myTable_info").style.visibility = "hidden";
                   document.getElementById("myTable_paginate").style.visibility = "hidden";
                   
                   window.print();
               
                   
                   document.body.innerHTML = originalContents;
                   location.reload(); 
            }
        </script> -->
     

        <script>
    function printMonthlyTrasaction(){
              var month = $('#month').find(":selected").val();
                  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printMonthlyTrasaction/'+month );
                  
                }
            }
             
                     
            // alert("hello");
            xhttp.open("GET", "./printMonthlyTrasaction/"+month.trim() ,true);
            xhttp.send();
        
        }
    </script>

 
</body>

</html>
