<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Supplier</title>


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

<body onload="searchRawMatirial()">
<div class="container">


    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Supplier</h3>
                </div>
            </div>

        </div>
    </header>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 684px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr ondblclick="SetStockIdeal()">

                                        <th>Supplier Id</th>
                                        <th>Supplier Name</th>
                                        <th>Balance</th>
                                        <th>Contant No</th>
                                        <th>Address</th>
                                        <th>Initial Investment</th>
                                        
                                        <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">Supplier ID</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="supplierID">
                    <label for="id">Supplier Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="supplierName">
                    <label for="id">Balance</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="balance">
                    <label for="id">Contact No</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="contact">
                    <label for="id">Address</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="address">
                    <label for="id">Initial Investment</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="initialInvestment">
                    
                    <!-- <label for="id">Status</label> -->
                    <input type="text" class="form-control" style="display: none; width: 200px !important;"
                        name="id" id="status">
                    <div class="st-button  " style="margin-top: 15px;">
                        <button class="btn btn-success" onclick="editSupplier()">Update </button>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
            $('#stocktable').DataTable();
        });
    </script>
    <!--end::Global Theme Bundle-->

<script>

function searchRawMatirial() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       //alert(data);
       var table;
       var a=JSON.parse(data);
       
       table = $('#stocktable').DataTable(); 
        
        $.each(a, function (i, item) {

            table.row.add([a[i].LID, a[i].PartyName, a[i].Balance, a[i].ContantNo, a[i].Address
            , a[i].InitialInvestment]);
            });   
         table.draw();          
         
    }
  };
  
  xhttp.open("GET", "./viewAllSupplier/", true);
  xhttp.send();
}
$("#stocktable").on('click','tr',function(){

     document.getElementById("supplierID").value=this.cells[0].innerText; 
     document.getElementById("supplierName").value=this.cells[1].innerText;
     document.getElementById("balance").value=this.cells[2].innerText;
     
     document.getElementById("contact").value=this.cells[3].innerText;
     document.getElementById("address").value=this.cells[4].innerText;
     document.getElementById("initialInvestment").value=this.cells[5].innerText;
    
     
}
);

function editSupplier() {
    
    var SID = document.getElementById("supplierID").value;
    //alert("updated  "+PID);
    var suppliertName = document.getElementById("supplierName").value;
    //alert("updated  "+productName);
    var balance = document.getElementById("balance").value;
    //alert("updated  "+company);
    var contact = document.getElementById("contact").value;
    //alert("updated "+salePrice);
    var address = document.getElementById("address").value;
    //alert("updated  "+purchasePrice);
    var initialInvestment = document.getElementById("initialInvestment").value;
    
    var UpdateSupplier = [SID, suppliertName, balance, contact, address, initialInvestment];
    alert(UpdateSupplier);

    var ES = JSON.stringify(UpdateSupplier);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Supplier " + this.responseText + " is Updated");


                }
            };
            alert(ES);
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editSupplier/" + ES, true);
            xhttp.send();
            
        }









</script>
    
</body>

</html>