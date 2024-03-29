<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />
    <title>Sales And Commission</title>

    <style>
             table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;
            border: 1px solid #aaaaaa;
            width: 100%;
            max-width: 100%;
        }

        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 5px;
        }
        .mainSales {
            display: flex;
            justify-content: space-between;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .unit {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid #333;
            /* padding: 10px ; */
            border-radius: 10px;

        }

        .myOwnRow-left {
            width: 50%;
            padding: 10px;
        }

        .myOwnROw {
            width: 50%;
            border-left: 1px solid #333;
            padding: 10px;
        }
        .modal-content{
        height: 800px;
        text-align:center;
        width: 800px;
        }

        label {
            width: 150px !important;
        }

        .checkbox-1 {
            display: none;
        }

        .checkbox-3 {
            display: none;
        }

        .checkMain-5 {
            display: none;
        }

        .myMain {
            display: inline-block;
        }

        #checkboxe-1 {}

        /* #BankLabel{
            display: block;
        } */
        /* .myOwnRow-left label {
            width: 210px !important;
        } */
        .permanentLabel label {

            width: 250px !important;
        }

        .checkMain-5 label {
            width: 270px !important;
        }

        .checkbox-7 {
            display: none;
        }

        .checkbox-9 {
            display: none;
        }

        .checkbox-11 {
            display: none;

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

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Comission & Taxes</h4>
                </div>
            </div>
        </div>

    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainSales">
                        <div class="sales-1">
                            <label style="width: 100px !important;" for="">Status</label>
                            <select class="selectpicker form-control" data-live-search="true" id="category"
                                tabindex="null">
                                <option value=1>Sold</option>
                                <option value=2>In Stock</option>
                                <option value=3>Pending</option>
                                <option value=4>Delivered</option>


                            </select>

                        </div>
                        <div class="sales-1">
                            <button class="btn unit" data-toggle="modal" data-target="#myModal" onclick="loadStock()">Sold Unit</button>
                        </div>
                        

                        <div class="container">
                          
                       
                          
                          
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                       <h4 class="modal-title">View Stock </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   
                                  </div>
                                  <div class="modal-body">
                                    <div class="receivingTable">
                                        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>Product Id</th>
                                                    <th>Product Name</th>
                                                    <th>Company</th>
                                                    <th>Unit Sale Price</th>
                                                    <th>Unit Purchase Price</th>
                                                    <th>Stock</th>
                                                    <th>Engine Number</th>
                                                    <th>Chasis Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
            
                                        </table>
            
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>










                        <div class="sales-1">
                            <label for="">Profit / Loss</label>
                            <input type="text" class="form-control" style="display: inline-block; width: 200px;" name=""
                                id="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <label for="status">Model</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ProductName" value="Cash">
                            </div>
                            <div class="input-field">
                                <label for="status">Product ID</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="PID" value="Cash">
                            </div>

                            <div class="input-field">
                                <label for="status">Chassis Number </label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ChasisNumber" value="137000">
                            </div>
                            <div class="input-field">
                                <label for="status">Engine Number</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="EngineNumber" value="10000">
                            </div>
                            <div class="input-field">
                                <label for="status">Status</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Status" value="0">
                            </div>

                            <div class="input-field">
                                <label for="status">Price + tax</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="TotalPrice" value="138000">
                                <a style="font-size: 14px;" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">View Details</a>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="status">Discount</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="0">
                            </div>
                            <div class="input-field">
                                <label for="status">Net Total</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="0">
                            </div>
                        </div>
                        <div class="myOwnROw">





                            <div class="input-field">
                                <label for="status">Client Name</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="PEL">
                            </div>
                            <div class="input-field">
                                <label for="status">Address</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name">
                            </div>
                            <div class="input-field">
                                <label for="status">contact</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="923124617477">
                            </div>
                            <div class="input-field">
                                <label for="status">Manager</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="Mushtaq ">
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left permanentLabel">


                            <label for="">Bank Person</label>  <input type="text" name="" id="">
                           <input type="checkbox" name="" id="checkboxe-1">
                             <label for="">Sales
                                Per Commission</label><input type="text" name="" id="">
                                <input type="checkbox" name="" id="checkboxe-2">
                            <label for="">Third
                                Party Per Commission</label>
                                <input type="checkbox" name="" id="checkboxe-3"> 
                            <div class>
                                <div class="checkbox-5">
                                    <label for="">Remarks</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="checkbox-6">
                                    <label for="">Amount</label>
                                    <input type="text" name="" id="">
                                </div>

                            </div><br>

    <label for="">Promotion
                                Charges</label> <input type="text" name="" id="">
                                <input type="checkbox" name="" id="checkboxe-4">
                             <label for="">PRA
                                %</label> <input type="text" name="" id="">
                                <input type="checkbox" name="" id="checkboxe-5">
                       
                             <label for="">Nothing</label> <input type="text" name="" id="">
                             <input type="checkbox" name="" id="checkboxe-6">


                        </div>
                      
                    </div>
                </div>
    </section>
    <br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Total Cost</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Total Sale Price</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Profit</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
            </div>
        </div>
    </footer>





  



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('#searchProductTable').DataTable();
        });
    </script>
    <script>
        function  loadStock(){

var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            //alert(data);
            var table;
            var a = JSON.parse(data);
            //  alert(a[0].ProductSerial);
            table = $('#searchProductTable').DataTable();
            table.clear();
            $.each(a, function (i, item) {

                table.row.add([a[i].ProductID, a[i].ProductName, a[i].EngineNumber, a[i].ChasisNumber
                ,a[i].ActualPurchsePrice,a[i].TotalCost,a[i].StatusInStock]);
            });
            table.draw();
        }
    };
alert();
    xhttp.open("GET", "./getAvailableProducts/", true);
    xhttp.send();
}
$(document).ready(function () {

// code to read selected table row cell data (values).
$("#searchProductTable").on('click', 'tr', function () {
    // get the current row



    var table = document.getElementById("ProductSaleTable");

    document.getElementById("PID").value = this.cells[0].innerText; // get current row 1st TD value
    document.getElementById("ProductName").value = this.cells[1].innerText;
    document.getElementById("ChasisNumber").value = this.cells[2].innerText;
    
    document.getElementById("EngineNumber").value = this.cells[3].innerText; 
    document.getElementById("Status").value = this.cells[6].innerText; 
    document.getElementById("TotalPrice").value = this.cells[4].innerText; 
    

    
    alert(this.cells[0].innerText);
});
  });
    </script>
    <script>
    
</body>

</html>