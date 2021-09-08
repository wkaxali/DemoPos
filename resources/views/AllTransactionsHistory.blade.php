b<!DOCTYPE html>
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
            background-color: teal;
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

<body onload="loadFunctions()" id="allData">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">All Transactions History</h1><br><br>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                     
                                <div class="container"  >
                                     <div class="row my-2" >
                                            <div class="col-md-4" >
                                                <label for="">From Date</label>
                   
                   
                                                <input type="date" id ="date1">
                                            </div>
                                            <div class="col-md-4" >
                                                <label for="">To Date</label>
                                                <input type="date" id ="date2">
                                            </div>
                                            <div class="col-md-4" >
                                                <button  class="btn  btn-info"  id="dates" style="margin-top:2px;"
                                                        onclick="selectedDateData()">Search </button> </div>
                                            </div>
                                            <div class="row my-2" >
                                            
                                            <div class="col-md-4" >
                                            <label for="">Credit Amount:</label>
                                            <h1 id="creditAmount">0</h1></div>
                                            <div class="col-md-4" >
                                            <label for="">Debit <br>Amount:</label>
                                            <h1 id="debitAmount">0</h1></div>
                                            <div class="col-md-4" >
                                            <label for="">Total <br> Amount:</label>
                                            <h1 id="tableSum">0</h1></div>
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
                                                   
                                                    <th>Transaction ID</th>
                                                    <th>Account Name</th>
                                                    <th>Transaction Category</th>
                                                    <th>Amount</th>
                                                    <th>Transaction Date</th> 
                                                    <th id ="Invoice">Invoice Number</th>
                                                    <th id="partyname">Party Name</th>
                                                    <th id="empname">Employee Name</th>
                                                    <th id="custname">Customer Name</th>
                                                    <th id="expname">Expense Head</th>
                                                     
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
                function loadFunctions() {
                    loadCategory();
               
                    getTransactionHistory();
                }

            </script>


            <script>
                function loadCategory() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {

                        if (this.readyState == 4 && this.status == 200) {

                            document.getElementById("transactionCategory").innerHTML = this.response;
                            $('#transactionCategory').selectpicker('refresh');
                            
                        }
                    };
                    //alert("ljd");
                    xhttp.open("GET", "./loadCategory/", true);

                    xhttp.send();
                }

            </script>

            <script>
            function changeCategory() {
                    var cat =$('#transactionCategory').find(":selected").text();
                  //  alert(cat)

                    if((cat.trim()==="Salary Payment".trim())){
                        //alert("Thisi");

                document.getElementById("pname").innerHTML="Employees";

                } else if((cat.trim()==="Party Payment".trim()) ||  (cat.trim()==="Booking Order".trim()) || 
                (cat.trim()==="Booking Order".trim())){
            
                document.getElementById("pname").innerHTML="Parties";
                
                 }else if((cat.trim()==="Everything".trim())) {
            
                document.getElementById("pname").innerHTML=" ";
                
                 }
                else if((cat.localeCompare("Expense"))){
                        
                document.getElementById("pname").innerHTML="Expenses";

                }else if((cat.trim()==="Stock and Service".trim())){
               document.getElementById("pname").innerHTML="Customers";

                }else if((cat.trim()==="Stock and Purchased".trim())){
                  
                       
                    document.getElementById("pname").innerHTML="Supplier";

                }else if((cat.trim()===("Sales").trim())){
                            
                 document.getElementById("pname").innerHTML="Customers";
                }
            }
            </script>
            <script>
                

                function selectedDateData(){
                    var date1 = document.getElementById("date1").value;
                    var date2 = document.getElementById("date2").value;
                    var table = $('#transactionCategory').find(":selected").val();
                    var value = $('#tables').find(":selected").val();
                    var category = $('#transactionCategory').find(":selected").text();
                   
                    if(date1=="" || date2==""){
                        table = $('#myTable').DataTable();
                            table.clear();
                        getTransactionHistory();
                
                    }else{
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                        var data = this.responseText;
                       
                        
                            var table;
                            var dt = JSON.parse(data);
                            a=dt[0];
                            sum=numberWithCommas(dt[1]);
                            creditAmount=numberWithCommas(dt[2]);
                            debitAmount=numberWithCommas(dt[3]);
                            document.getElementById('tableSum').innerHTML=sum;
                            document.getElementById('creditAmount').innerHTML=creditAmount;
                            document.getElementById('debitAmount').innerHTML=debitAmount;
                            if (sum<0){
                            
                            document.getElementById("tableSum").style.color = "red";
                        } else{
                            document.getElementById("tableSum").style.color = "green";
                        }
                            table = $('#myTable').DataTable();
                            table.clear();

                            $.each(a, function (i, item) {

                                date = dateFormat();
                                table.row.add([a[i].TransactionID, a[i].AccountName+" ("+a[i].AccountNumber+")",
                                    a[i].TransactionCatogery, a[i].Amount,
                                    a[i].DateStamp,a[i].InvoiceNo,a[i].PartyName, a[i].FirstName+" "+a[i].LastName,
                                     a[i].CustomerName,  a[i].ExpenseHead
                                ]);
                            });
                            table.draw();


                            if((category.trim()==="Salary Payment".trim())){
                                table.column(1).visible(0);
                                table.column(2).visible(0);
                                table.column(4).visible(0);
                                table.column(5).visible(0);
                                table.column(0).visible(1);
                                table.column(3).visible(1);

                            } else if((category.trim()==="Party Payment".trim())){
                                table.column(1).visible(0);
                                table.column(3).visible(0);
                                table.column(4).visible(0);
                                table.column(5).visible(0);
                                table.column(0).visible(1);
                                table.column(2).visible(1);

                            }else if((category.trim()==="Booking Order".trim())){

                                
                                table.column(3).visible(0);
                                table.column(4).visible(0);
                                table.column(5).visible(0);
                                table.column(0).visible(1);
                                table.column(1).visible(1);
                                table.column(2).visible(1);

                            }if((category.trim()==="Sales".trim())){ 
                                table.column(2).visible(0);
                                table.column(3).visible(0);
                                table.column(5).visible(0);

                                table.column(0).visible(1);
                                table.column(1).visible(1);
                                table.column(4).visible(1);
                             
                            }else if((category.trim()==="Expense".trim())){
                              
                                table.column(1).visible(0);
                                table.column(2).visible(0);
                                table.column(3).visible(0);
                                table.column(4).visible(0);

                                table.column(0).visible(1);
                                table.column(5).visible(1);
                            
                            }else if((category.trim()==="Transportation Charges".trim())){
                               
                                table.column(2).visible(0);
                                table.column(3).visible(0);
                                table.column(4).visible(0);
                                table.column(5).visible(0);

                                table.column(0).visible(1);
                                table.column(1).visible(1);
                               
                            }else if((category.trim()==="Stock and Purchased".trim())){
                                table.column(2).visible(0);
                                table.column(3).visible(0);
                                table.column(5).visible(0);

                                table.column(0).visible(1);
                                table.column(1).visible(1);
                                table.column(4).visible(1);
                                document.getElementById("custname").innerHTML="Supplier"; 
                            }else if((category.trim()==="Stock and Service".trim())){
                                table.column(2).visible(0);
                                table.column(3).visible(0);
                                table.column(5).visible(0);
                                
                                table.column(0).visible(1);
                                table.column(1).visible(1);
                                table.column(4).visible(1);
                               
                            }else if((category.trim()==="Investors".trim())){
                                      table.column(3).visible(0);
                                      table.column(4).visible(0);
                                      table.column(5).visible(0);
                                      
                                      table.column(0).visible(1);
                                      table.column(1).visible(1);
                                      table.column(2).visible(1);
                                      
      
                                  }
                        }
                    };

                     


                    if(value == ""){
                        value = "All";  
                    }
                    
                    if(table == ""){
                        table = "All";  
                    }if(category == ""){
                        category = "Everything";  
                    }
                }
                    // alert("table is ="+table);
                    
                    xhttp.open("GET", "./selectedDateData/"+date1+"/"+date2+"/"+table+"/"+category.trim()+"/"+value, true);

                    xhttp.send();

                }

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
                            sum=numberWithCommas(dt[1]);
                            creditAmount=numberWithCommas(dt[2]);
                            debitAmount=numberWithCommas(dt[3]);
                            document.getElementById('tableSum').innerHTML=sum;
                            document.getElementById('creditAmount').innerHTML=creditAmount;
                            document.getElementById('debitAmount').innerHTML=debitAmount;
                            if (sum<0){
                            
                            document.getElementById("tableSum").style.color = "red";
                        } else{
                            document.getElementById("tableSum").style.color = "green";
                        }
                            //alert(a[0].TransactionID);
                            table = $('#myTable').DataTable();

                            $.each(a, function (i, item) {

                                table.row.add([  
                                    a[i].TransactionID, a[i].AccountName+" ("+a[i].AccountNumber+")",
                                    a[i].TransactionCatogery, a[i].Amount,
                                    a[i].DateStamp,a[i].InvoiceNo,a[i].PartyName, a[i].FirstName+" "+a[i].LastName, a[i].CustomerName,  a[i].ExpenseHead, 
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
                            
                            table = $('#myTable').DataTable();
                            table.clear();

                            $.each(a, function (i, item) {

                                table.row.add(['', a[i].TransactionID, a[i].PartyName, a[i].FirstName+" "+a[i].LastName, a[i].CustomerName, a[i].AccountName+" ("+a[i].AccountNumber+")", a[i].TransactionCatogery,
                                    a[i]
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

                                table.row.add(['', a[i].TransactionID, a[i].PartyName, a[i].FirstName+" "+a[i].LastName, a[i].CustomerName, a[i].AccountName+" ("+a[i].AccountNumber+")", a[i].TransactionCatogery,
                                    a[i]
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
                    var doc = new jsPFD("potrait");
                    doc.fromHTML(htmlTable);
                    doc.save(test.pdf);
                    // newWin.close();
                }

            </script>
     
    <!-- <script>
    function printTrasactionHistory(){
                    var date1 = document.getElementById("date1").value;
                    var date2 = document.getElementById("date2").value;
                    var table = $('#transactionCategory').find(":selected").val();
                    var value = $('#tables').find(":selected").val();
                    var category = $('#transactionCategory').find(":selected").text();
                //    alert(date1);
                  if (date1==""){
                      printTrasactionHistory2();
                }else{
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printTrasactionHistory/'+date1+'/'+date2+'/'+table+'/'+category.trim()+'/'+value);
                  
                }
            }
            if(table == ""){
                table = "All";  
                    }
                     if(value == ""){
                        value = "All";  
                    }if(category == ""){
                        category = "Everything";  
                    }
                       
            // alert("hello");
            xhttp.open("GET", "./printTrasactionHistory/"+date1.trim()+"/"+date2.trim()+"/"+table +"/"+category.trim()+"/"+value, true);
            xhttp.send();
        }
        }
    </script> -->

<!-- <script>
    function printTrasactionHistory2(){
                    
                    var table = $('#transactionCategory').find(":selected").val();
                    var value = $('#tables').find(":selected").val();
                    var category = $('#transactionCategory').find(":selected").text();
                   
                  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printTrasactionHistory2/'+table+'/'+category.trim()+'/'+value);
                  
                }
            }
            if(table == ""){
                table = "All";  
                    }
                     if(value == ""){
                        value = "All";  
                    }if(category == ""){
                        category = "Everything";  
                    }
                     
            // alert("hello");
            xhttp.open("GET", "./printTrasactionHistory2/"+table.trim()+"/"+category.trim()+"/"+value,true);
            xhttp.send();
        
        }
    </script> -->



 
<script>
                function loaddata() {
                     
                    changeCategory();
                    
                    
                }

       
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

            </script>
</body>

</html>
