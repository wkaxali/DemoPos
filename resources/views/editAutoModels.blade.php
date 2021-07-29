<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Auto Models</title>


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <style>

.page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84%;
        }
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

         label {
            width: 150px;
        }

        .stockLabels {
            padding-top:5px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 3px;
        }
        .container-fluid{
            margin-left:115px;

        }
    </style>
</head>

<body onload="getAutoModel()">

<div class="page-container">
@include('mainNavbar')
 <div class="clearfix"></div>
</div>

    <header class="idi">
        <div class="container">
     
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Auto Models</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr onclick="setAutoModel()">

                                        <th>Model ID</th>
                                        <th>Company</th>
                                        <th>Model Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4">
                    <label for="id">Model ID</label>
                    <input type="text" class="form-control" readonly style="display: inline-block; width: 200px !important;"
                        name="id" id="ModelID"><br><br>
                    <label for="id">Company</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="Company"><br><br>
                    <label for="id">Model Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="ModelName"><br><br>
                    <label for="id">Description</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="description"><br><br>
                    <label for="id">Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="Price"><br><br>
                    
                        <br>
                   <!-- <button id="addUsers" class="btn btn-warning"  onclick="addAutoModels()">Add AutoModel</button> -->

                
                        <button class="btn btn-success" onclick="editAutoModels()">Update </button>
                      
                </div>
            </div>
        </div>
    </section>
    
                   
  
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

function getAutoModel() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       
       var table;
       var a=JSON.parse(data);
       
       table = $('#stocktable').DataTable(); 
        
        $.each(a, function (i, item) {

            table.row.add([a[i].ModelID, a[i].Company, a[i].ModelName, a[i].Description, a[i].Price
            ]);
            });   
         table.draw();          
         
    }
  };
  
  xhttp.open("GET", "./getAutoModel/", true);
  xhttp.send();
}
$("#stocktable").on('click','tr',function(){

     document.getElementById("ModelID").value=this.cells[0].innerText; 
     document.getElementById("Company").value=this.cells[1].innerText;
     document.getElementById("ModelName").value=this.cells[2].innerText;
     
     document.getElementById("description").value=this.cells[3].innerText;
     document.getElementById("Price").value=this.cells[4].innerText;
     
}
);

function editAutoModels() {
    
    var ModelID = document.getElementById("ModelID").value;
    
    var Company = document.getElementById("Company").value;
    
    var ModelName = document.getElementById("ModelName").value;
    
    var description = document.getElementById("description").value;
    
    var Price = document.getElementById("Price").value;
    
    
    
       
    var edit = [ModelID, Company, ModelName, description, Price];
    

    var UC = JSON.stringify(edit);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Auto Model " + this.responseText + " is Updated");


                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editAutoModels/" + UC, true);
            xhttp.send();
            
        }


</script>
<script>
    function addAutoModels() {

    var comp = document.getElementById("Company").value; 
    var model = document.getElementById("ModelName").value;
    var product = document.getElementById("ProductCategory").value;
    var price = document.getElementById("Price").value;
    var add = [ comp, model, product, price];

    var AA = JSON.stringify(add);
  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("AutoModel " + this.responseText + " is Added");
 

                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addAutoModels/" + AA, true);
            xhttp.send();
            
        }
            
        
</script>

<script>
        $(document).ready(function () {
            $('#myTables').DataTable();
        });
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
    
</body>

</html>