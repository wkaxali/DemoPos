<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
    


    <title>Employee Payments</title>
    <style>

    /* The radio */
.radio {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.radio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84%;
        }

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radio:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.container{
    margin-left:310px;
    margin-top:  10px;
}
        .footerBtns {
            float: right !important;
            margin-top: 20px;
        }

        .footerBtns button {
            width: 100px;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .mainButtons button {
            width: 150px;
        }

        th,
        td {
            text-align: center;
        }

        .mainTableEnd {
            float: right !important;
            margin-top: 10px;
        }

        .customBorder {
            border: 1px solid #333;
            border-radius: 10px;
            background-color: #0a549d;
            margin: 10px 0px;
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .expenseButtons {
            text-align: right;
            margin-top: 10px;
        }

        .expenseTable {
            border: 1px solid #333;
            height: 400px;
            overflow: auto !important;
            border-radius: 10px;
        }

        .borderCustom-2 {
            border: 1px solid #333;
            border-radius: 10px;
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
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body onload="loadFunctions()">
<div class="page-container">
@include('mainNavbar')
 


 <div class="clearfix"></div>
</div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Employee Payments</h4>
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="container">
            
            <div class="row customBorder">
                <div class="col-md-4">
                    <h4>Add Payments</h4>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" style="display: inline-block; width: 192px;"
                                value="" name=""  onchange="calculatonInTable()" id="amount">
                                
                                <label>
                                <input type="radio" checked="checked" id="deductable" name="advanceCat" value="Deductable">
                                Deductable</label>
                                
                                <label>
                                <input type="radio" id="nondeductable" name="advanceCat" value="Non Deductable">
                                Non Deductable</label>
                                <br>
                            <label for="">Paid To</label>
                            <select 
                                class="selectpicker form-control"  data-live-search="true"  id="paidTo" onchange="getAmount()">
                            
                            </select>
            
                            <label for="">Paid by</label>
                            <select 
                                class="selectpicker form-control"  data-live-search="true"  id="paidBy" >
                            
                            </select>
                            <br>
                            <label for="">Balance:</label>
                            <h1 id = "balance">0</h1>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            
                            <input style="height: 25px !important; width: 158px !important; display:none" id="expense" value=1 >
                            
                            </input>
                            <!-- <button class="btn">+</button> -->
                            <br>
                            <label style="width: 100px !important;" for="">Date</label>
                            <input type="date" style="width: 240px;" name="" id="date"><br>
                            <div class="expenseButtons">
                            
                                <br>
                                        <label for="">Remarks</label>
                                        <input type="text" class="form-control" style="display: inline-block; width: 192px;"
                                        value="" name="" id="remarks"><br>
                                <button class="btn btn-danger" onclick="add(), calculatonInTable()"  >Add</button>
                            </div>


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12">
                    <!-- <h4>Today's Expense</h4> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="expenseTable">
                        <table id="expenseTable" class="table-bordered table-striped table-hover" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Advance Category</th>
                                    <th>Paid To</th>
                                    <th>Paid By</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="mainTableEnd">
                        <label for="">Total</label>
                        <input type="text"  onclick="calculatonInTable()" value="" name="" id="mainTotal">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-7">
                    <div class="footerBtns">
                        <button class="btn btn-primary " onclick = "addExpenses()">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
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
        
    function add() {

        var date = document.getElementById("date").value;
        var advanceCat = $("input[type='radio'][name='advanceCat']:checked").val();
        var amount = document.getElementById("amount").value;
        var expense = document.getElementById("expense").value;
        var paidto = document.getElementById("paidTo");
        var paidby = document.getElementById("paidBy");
        var remarks = document.getElementById("remarks").value;
        var table = document.getElementById("expenseTable");
        
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
        var cell9 = row.insertCell(8);
        var cell10 = row.insertCell(9);
        
        
        cell1.innerHTML = date;
        cell2.innerHTML = amount;
        cell3.innerHTML = advanceCat;
        cell4.innerHTML = expense;
        cell5.innerHTML = paidto.options[paidto.selectedIndex].text;
        cell6.innerHTML = paidby.options[paidby.selectedIndex].text;
        cell7.innerHTML = paidto.options[paidto.selectedIndex].value;
        cell8.innerHTML = paidby.options[paidby.selectedIndex].value;
        cell9.innerHTML = remarks;
        cell10.innerHTML ='<button  calss="" onclick="deleteRow(this)">X</button>';
        
        cell4.style.display = "none";
        cell7.style.display = "none";
        cell8.style.display = "none";

    }




    function deleteRow(ele) {
        var a = ele.parentNode.parentNode;

        a.remove();
        calculatonInTable(5);
    }

    function calculatonInTable(){
        var amount=document.getElementById("amount").value;
        var balance=Number(document.getElementById("balance").innerHTML);
        var t=document.getElementById("expenseTable");
        var tot=0;

        var x = document.getElementById("expenseTable").rows.length;

        for (var i = 1; i < x ; i++){
            tot=tot+Number(t.rows[i].cells[1].innerText);
        }
        document.getElementById("mainTotal").value=tot;
    }
    </script>


<script>
    function addExpenses()
{
        var expenseDetails = [];
        var table = document.getElementById("expenseTable");


       
        $('#expenseTable tr').each(function (row, tr) {

            expenseDetails[row] = [

                $(tr).find('td:eq(0)').text(), //Date
                $(tr).find('td:eq(1)').text(),//Amount
                $(tr).find('td:eq(2)').text(), //Advance Category
                $(tr).find('td:eq(3)').text(), //Expense Name
                $(tr).find('td:eq(6)').text(), //Paid To ID
                $(tr).find('td:eq(7)').text(), //Paid By ID
                $(tr).find('td:eq(8)').text(), //Remarks
                $(tr).find('td:eq(9)').text()
            ];


        });
        expenseDetails.shift();
        var expTable = JSON.stringify(expenseDetails);
        
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Payment " + this.responseText + " is added");
                

            }
        };
        var paidTo = "Employee";
        xhttp.open("GET", "./addPayment/" + expTable + "/" + paidTo, true);
        xhttp.send();
    }
</script>

<script>

function loadFunctions(){
    loadEmployees();
    loadAccounts();
}
</script>


<script>
function loadEmployees(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("paidTo").innerHTML = this.response;
            $('#paidTo').selectpicker('refresh');
        }
    };
    
    xhttp.open("GET", "./getEmployeeName/", true);
    
    xhttp.send();
    }
</script>

<script>
function loadAccounts(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("paidBy").innerHTML = this.response;
            $('#paidBy').selectpicker('refresh');
        }
    };
    
    xhttp.open("GET", "./getAccounts/", true);
    
    xhttp.send();
    }

    function getAmount(){
        var EmpID = $('#paidTo').find(":selected").val();
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            
            if (this.readyState == 4 && this.status == 200) {
                
                document.getElementById("balance").innerHTML = this.response;
            }
        };
    
    xhttp.open("GET", "./getTotalPay/" + EmpID, true);
    
    xhttp.send();
    }
</script>

</body>

</html>