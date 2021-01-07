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
    <title>Sales And Commission</title>

    <style>
        table tr:last-child td {
            border-bottom: 1px solid #aaaaaa !important;
        }

        .bookingRightTable {
            border-radius: 10px;
            height: 330px !important;
            width:100%;
            border: 1px solid #aaaaaa;
            padding: 0px 1px;
            /* border-radius: 10px; */
        }

        .tableDiv {
            /* border: 1px solid #aaaaaa; */
            /* height: 505px !important; */
            height: 285px;
            overflow: auto;
            /* border-radius: 10px; */
            /* border: 1px solid #aaaaaa; */
            /* padding: 3px; */
            /* margin-top: 80px !important; */
        }




     
        
        
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

        .sales-1 input[type="text"]:focus,
        .sales-1 input[type="password"]:focus,
        .sales-1 input[type="datetime"]:focus,
        .sales-1 input[type="datetime-local"]:focus,
        .sales-1 input[type="date"]:focus,
        .sales-1 input[type="month"]:focus,
        .sales-1 input[type="time"]:focus,
        .sales-1 input[type="week"]:focus,
        .sales-1 input[type="number"]:focus,
        .sales-1 input[type="email"]:focus,
        .sales-1 input[type="url"]:focus,
        .sales-1 input[type="search"]:focus,
        .sales-1 input[type="tel"]:focus,
        .sales-1 input[type="color"]:focus,
        .sales-1 .uneditable-input:focus {
            border-color: #e61d2f;
            box-shadow: 0 1px 1px #e61d2f inset, 0 0 8px #e61d2f;
            outline: 0 none;
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
                            <button class="btn unit" data-toggle="modal" data-target="#myModal" onclick="getStock()">Sold Unit</button>
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
                                        <table id="productSearchTable" class=" table-striped" style="width: 100%; text-align: center;">
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
                                    name="name" id="productName" value="Cash">
                            </div>

                            <div class="input-field">
                                <label for="status">Chassis Number </label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="chassisNumber" value="137000">
                            </div>
                            <div class="input-field">
                                <label for="status">Engine Number</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="engineNumber" value="10000">
                            </div>
                            <div class="input-field">
                                <label for="status">Status</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="status" value="0">
                            </div>

                            <div class="input-field">
                                <label for="status">Sale Price</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="price" value="138000">
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
                

                        <label style="width: 100px !important;" for="">Select</label>
                        <select class="selectpicker form-control" data-live-search="true" id="select"
                            tabindex="null">
                            <option value=1>Bank Person</option>
                            <option value=2>sales per comissiions</option>
                            <option value=3>Third party per comission</option>
                            <option value=4>Promotion charges</option>
                            <option value=5>PRA % </option>
                            <option value=6>Nothing</option>
                        </select>

                         
                                <label for="remarks">Remarks</label>
                                <input type="text" name="" id="remarks">
                         
                                <label for="">Amount</label>
                                <input type="text" name="" id="amount">
                                <button onclick="add()"  class="btn ">Add</button>
</div>
<br>                              

<div class="col-md-12">
    <div class="bookingRightTable">

        <div class="tableContent  text-center">
            <h3>Your Current Data </h3>
        </div>



        <div class="tableDiv">


                                    <table id="secondtable" class="secondtable"
                                        style="width: 100%; text-align: center; ">
                                        <thead>
                                            <tr></tr>
                                                <th>Select</th>
                                                <th>Amount</th>
                                                <th>Remarks</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
      
                                        </tbody>
                                    </table>
                                </div>
                    
<!-- 

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
                </div> -->
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





    <script>
  




        




    </script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    
    <script>
        
    </script>
<script>

function add() {
           
        
           
           var select = document.getElementById("select");
           var amount = document.getElementById("amount").value;
           var remarks = document.getElementById("remarks").value;
       

           var table = document.getElementById("secondtable");
           var row = table.insertRow(-1);
           var cell1 = row.insertCell(0);
           var cell2 = row.insertCell(1);
           var cell3 = row.insertCell(2);
           var cell4 = row.insertCell(3);
      
   
           
    

           cell1.innerHTML =select.options[select.selectedIndex].text;
           cell2.innerHTML =amount;
           cell3.innerHTML =remarks;
           cell4.innerHTML ='<button  calss="" onclick="deleteRow(this)">X</button>';
         
           calculatonInTable();
           
 

       }




       function deleteRow(ele) {
           var a = ele.parentNode.parentNode;

           a.remove();
           calculatonInTable();
       }

       $("#productSearchTable").on('click', 'tr', function () {
   // get the current row



   //var table = document.getElementById("productSearchTable");

   document.getElementById("productName").value = this.cells[0].innerText; // get current row 1st TD value
   document.getElementById("chasisNumber").value = this.cells[1].innerText;
   document.getElementById("engineNumber").value = this.cells[2].innerText;
   
   //document.getElementById("EngineNumber").value = this.cells[3].innerText; 
   //document.getElementById("Status").value = this.cells[6].innerText; 
   //document.getElementById("TotalPrice").value = this.cells[4].innerText; 
   

   
   alert(this.cells[0].innerText);
});









function getStock(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            var data = this.responseText;
                //alert(data);
                var table;
                var a = JSON.parse(data);
                //  alert(a[0].ProductSerial);
                table = $('#productSearchTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i].PerUnitSalePrice, a[i].PerUnitPurchasePrice
                    , a[i].StockIn, a[i].EngineNumber, a[i].ChasisNumber]);
                });
                table.draw();
                table.clear();

        }
    };
    //alert("ljd");
    xhttp.open("GET", "./viewStock/", true);
    
    xhttp.send();
    }
</script>

<script>
        $(document).ready(function () {
            $('#productSearchTable').DataTable();
        });
        
</script>

</body>

</html>