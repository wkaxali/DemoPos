<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Investor</title>


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
                    <h3 class="mt-3">Edit Investor</h3>
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

                                        <th>Investor Id</th>
                                        <th>Investor Name</th>
                                        <th>Investment</th>
                                        <th>Contant No</th>
                                        <th>Address</th>
                                        <th>Self Ratio</th>
                                        <th>Investor Ratio</th>
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">Investor ID</label>
                    <input readonly type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="investorID">
                    <label for="id">Investor Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="investorName">
                    <label for="id">Investment</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="investment">
                    <label for="id">Contact No</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="contact">
                    <label for="id">Address</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="address">
                    <label for="id">Self Ratio</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="selfRatio">
                    <label for="id">Investor Ratio</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="investorRatio">

                    <div class="st-button  " style="margin-top: 15px;">
                        <button class="btn btn-success" onclick="editInvestor()">Update </button>
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
      
       var table;
       var a=JSON.parse(data);
       
       table = $('#stocktable').DataTable(); 
        
        $.each(a, function (i, item) {

            table.row.add([a[i].LID, a[i].PartyName, a[i].InitialInvestment, a[i].ContantNo, a[i].Address
            , a[i].OurProfitRatio, a[i].InvestorProfitRatio]);
            });   
         table.draw();          
         
    }
  };
  
  xhttp.open("GET", "./viewAllInvestors/", true);
  xhttp.send();
}

$("#stocktable").on('click','tr',function(){
    document.getElementById("investorID").value=this.cells[0].innerText; 
    document.getElementById("investorName").value=this.cells[1].innerText;
    document.getElementById("investment").value=this.cells[2].innerText;
    document.getElementById("contact").value=this.cells[3].innerText;
    document.getElementById("address").value=this.cells[4].innerText;
    document.getElementById("selfRatio").value=this.cells[5].innerText;
    document.getElementById("investorRatio").value=this.cells[6].innerText;
  
});

function editInvestor() {
    
    var IID = document.getElementById("investorID").value;
    
    var investortName = document.getElementById("investorName").value;
    
    var investment = document.getElementById("investment").value;
    
    var contact = document.getElementById("contact").value;
    
    var address = document.getElementById("address").value;

    var selfRatio = document.getElementById("selfRatio").value;

    var investorRatio = document.getElementById("investorRatio").value;
    
    var UpdateInvestor = [IID, investortName, investment, contact, address, selfRatio, investorRatio];
 

    var ES = JSON.stringify(UpdateInvestor);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Investor " + this.responseText + " is Updated");


                }
            };
          
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editInvestor/" + ES, true);
            xhttp.send();
            
        }









</script>
    
</body>

</html>