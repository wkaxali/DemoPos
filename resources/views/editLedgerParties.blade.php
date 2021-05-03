<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Ledger Parties</title>


    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .stockLabels label {
            width: 235px;
        }

        .stockLabels {
            padding: 20px 10px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 10px;
        }

        .containerMy {
            max-width: 1400px;
            margin: 0 auto;

        }
    </style>
</head>

<body onload="getParty()">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Investor</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="ledgertable">
                            <thead>
                            
                                        <th>Ledger ID</th>
                                        <th>Party Name</th>
                                        <th>Category</th>
                                        <th>Balance</th>
                                        <th>Contact No</th>
                                        <th>Addresss</th>
                                        <th>Status</th>
                                        <th>Our Profit Ratio</th>
                                        <th>Investor Profit Ratio</th>
                                        <th>Initial Investment</th>
                                        
                                        
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                <div class="myOwnRow-left">
                                        <div class="input-field">
                                            <label for="status">Ledger ID</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="LID">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Party Name</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="PartyName">
                                        </div>
                                       
                                        <div class="input-field">
                                            <label for="status">Category</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="Category">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Balance</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="Balance">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Contact No#</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="ContantNo">
                                        </div>
                                        
                                    </div>
                                    <div class="myOwnROw">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <label for="status">Address</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" value="" id="Address">
                                                </div>


                                                <div class="input-field">
                                                    <label for="status">Status</label>
                                                    <input type="email" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="Status">
                                                </div>

                                                <div class="input-field">
                                                    <label for="status">Our Profit Ratio</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="OurProfitRatio">
                                                </div>

                                                <div class="input-field">
                                                    <label for="status">Investor Profit Ratio</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="InvestorProfitRatio">
                                                </div>

                                                <div class="input-field">
                                                    <label for="status">Initial Investment</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="InitialInvestment">
                                                </div>
                                                
                    <div class="st-button  " style="margin-top: 15px; margin-left: 362px;">
                        <button class="btn btn-success" onclick="editParty()">Update </button>

                        <div class="col-md-4 ">
                    <button type="button" class="btn btn-info btn-cp" style="margin-top:29px;" data-toggle="modal"
                        data-target=".bd-example-modal-xl"></button>
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="searchModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            
                            







    <!--end::Demo Panel-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#ledger').DataTable();
        });
    </script>
    <!--end::Global Theme Bundle-->

<script>

function getParty() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       
       var table;
       var a=JSON.parse(data);
       
       table = $('#ledgertable').DataTable(); 
       
        $.each(a, function (i, item) {
            
            table.row.add([a[i].LID, a[i].PartyName, a[i].Category, a[i].Balance, a[i].ContantNo
            , a[i].Address, a[i].Status, a[i].OurProfitRatio,a[i].InvestorProfitRatio,a[i].InitialInvestment]);
            });   
         table.draw();          
         
    }
  };
  
  xhttp.open("GET", "./getParty/", true);
  xhttp.send();
}
$("#ledgertable").on('click','tr',function(){
    document.getElementById("LID").value=this.cells[0].innerText; 
    document.getElementById("PartyName").value=this.cells[1].innerText; 
    document.getElementById("Category").value=this.cells[2].innerText;
    document.getElementById("Balance").value=this.cells[3].innerText;
    document.getElementById("ContantNo").value=this.cells[4].innerText;
    document.getElementById("Address").value=this.cells[5].innerText;
    document.getElementById("Status").value=this.cells[6].innerText;
    document.getElementById("OurProfitRatio").value=this.cells[7].innerText;
    document.getElementById("InvestorProfitRatio").value=this.cells[8].innerText;
    document.getElementById("InitialInvestment").value=this.cells[9].innerText;







     
}
);

function editParty() {
    var LID = document.getElementById("LID").value; 
    var partyName = document.getElementById("PartyName").value; 
    var category = document.getElementById("Category").value;
    var balance = document.getElementById("Balance").value;
    var contact = document.getElementById("ContantNo").value;
    var address = document.getElementById("Address").value;
    var status = document.getElementById("Status").value;
    var OurProfitRatio = document.getElementById("OurProfitRatio").value;
    var InvestorProfitRatio = document.getElementById("InvestorProfitRatio").value;
    var InitialInvestment = document.getElementById("InitialInvestment").value;

    var updateParties = [LID, partyName, category, balance, contact, address, status, OurProfitRatio, InvestorProfitRatio, InitialInvestment];

    var UP = JSON.stringify(updateParties);
   
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Ledger " + this.responseText + " is Updated");

                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editParty/" + UP, true);
            xhttp.send();
            
        }


</script>
    
</body>

</html>