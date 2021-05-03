<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Set Ideal Stock</title>


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
                    <h3 class="mt-3">Set Ideal Stock</h3>
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

                                        <th>Product Id</th>
                                        <th>Product Name</th>
                                        <th>Company</th>
                                        <th>Invoice Price</th>
                                        <th>Unit Purchase Price</th>
                                        <th>Stock In</th>
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">Product ID</label>
                    <input type="text" readonly class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="productID">
                    <label for="id">Product Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="productName">
                    <label for="id">Company</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="company">
                    <label for="id">Invoice Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="salePrice">
                    <label for="id">Purchase Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="purchasePrice">
                    <label for="id">Stock In</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="stockIn">
                    
                    <div class="st-button  " style="margin-top: 15px;">
                        <button class="btn btn-success" onclick="SetStockIdeal()">Update </button>

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

            table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i].PerUnitSalePrice, a[i].PerUnitPurchasePrice
            , a[i].StockIn]);
            });   
         table.draw();          
         
    }
  };
  
  xhttp.open("GET", "./spareParts/", true);
  xhttp.send();
}
$("#stocktable").on('click','tr',function(){

     document.getElementById("productID").value=this.cells[0].innerText; 
     document.getElementById("productName").value=this.cells[1].innerText;
     document.getElementById("company").value=this.cells[2].innerText;   
     document.getElementById("salePrice").value=this.cells[3].innerText;
     document.getElementById("purchasePrice").value=this.cells[4].innerText;
     document.getElementById("stockIn").value=this.cells[5].innerText;

     
}
);

function SetStockIdeal() {
    
    var PID = document.getElementById("productID").value;
    //alert("updated  "+PID);
    var productName = document.getElementById("productName").value;
    //alert("updated  "+productName);
    var company = document.getElementById("company").value;
    //alert("updated  "+company);
    var salePrice = document.getElementById("salePrice").value;
    //alert("updated "+salePrice);
    var purchasePrice = document.getElementById("purchasePrice").value;
    //alert("updated  "+purchasePrice);
    var stockIn = document.getElementById("stockIn").value;
    //alert("updated "+stockIn);
       
    var UpdateStock = [PID, productName, company, salePrice, purchasePrice, stockIn];

    var UC = JSON.stringify(UpdateStock);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Stock number " + this.responseText + " is Updated");
                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./setStockIdeal/" + UC, true);
            xhttp.send();
            
        }

</script>
    
</body>

</html>