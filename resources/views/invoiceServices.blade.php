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


    <title>Invoice</title>
    <style>
        #SmallFontlabel label {
            width: 200px;
        }

        #smallFontLabel input {}

        .SecondColor {
            background-color: #0a549d;
            border-radius: 10px;
            height: 35px;

        }

        .firstColor {
            background-color: #e61d2f;
            border-radius: 10px;

        }

        .ThirdColor {
            background-color: #e61d2f;
            border-radius: 10px;
            height: 35px;

        }

        label {
            width: 130px;
        }

        .head-left {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);

        }

        .input-field {
            margin: 5px 0px;
        }

        .btn-Search {
            background-color: #e61d2f;
            border-color: #e61d2f;
        }

        .head-right {
            /* border: 1px solid #333; */

            padding: 10px;
            border-radius: 10px;
        }

        table td:nth-child(2) {
            padding-left: 50px;
            font-weight: 800;
        }

        .date {
            padding: 0px 5px;
            padding-top: 3px;
            padding-bottom: 2px;
            color: #fff;

        }

        .head-right {
            height: 223px;
        }

        .LastInput {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);


        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid #333;
            /* padding: 10px ; */
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
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

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .myFooterButtons {
            text-align: right;
        }

        .myFooterButtons .btn {
            width: 150px !important;


        }

        .myFooterButtons a:nth-child(1) {
            background-color: #0a549d;
            color: #fff;
        }

        .myFooterButtons a:nth-child(2) {
            background-color: #0a549d;
            color: #fff;

        }

        .myFooterButtons a:nth-child(3) {
            background-color: #e61d2f;
            color: #fff;

        }
        .myFooterButtons a:nth-child(4) {
            background-color: #0a549d;
            color: #fff;

        }

        .image-Head h5 {
            font-weight: 800;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-1">
                <h4>Create Invoice</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="">Category</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Auto</option>
                    <option value=2>Service</option>
                    <option value=3>Parts</option>



                </select>
            </div>
            <div class="col-md-5 offset-md-3">
                <label for="">Modal / Services</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Forland C13</option>
                    <option value=2>Forland C12</option>
                    <option value=3>Forland C12</option>



                </select>
                <!-- <button type="button" class="btn btn-info" style="height: 25px; margin-top: -5px;" data-toggle="modal"
                    data-target=".bd-example-modal-xl"></button> -->
                <button class="btn btn-Search" data-toggle="modal" data-target="#searchProductsModal"  style="height: 25px;"onclick="loadStock()"></button>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="firstColor my-4">
                        <div class="date text-right">
                            <h6> <strong>Date :</strong> 27/11/2020</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left">
                        <div class="input-field">
                                <label for="status">Product ID</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="PID" value="Cash">
                            </div>
                            <div class="input-field">
                                <label for="status">Model</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ProductName" value="Cash">
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
                                <a style="font-size: 14px;" href="increaseInPrice.html" data-bs-toggle="modal"
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
                                    name="name" id="Discount" value="0" onkeyup="calc()">
                            </div>
                            <div class="input-field">
                                <label for="status">Net Total</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="NetTotal" value="0">
                            </div>
                        </div>
                        <div class="myOwnROw">



                            <div class="row">
                                <div class="col-md-5">
                                    <div class="image-Head px-1 ">
                                        <h5>Forland</h5>
                                        <p>
                                            Customer is always captured after sales
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="head-right">
                                        <img src="img/service.png" class="img-fluid"
                                            style="height: 300px; width: 500px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="SecondColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="head-left">


                        <div class="input-field">
                            <label for="status">Client Name</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="CustomerName" value="PEL">
                            <button data-toggle="modal" data-target="#staticBackdrop" style="    height: 30px;
                               margin-top: -5px;" class="btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="input-field">
                            <label for="status">Customer ID</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="CID" value="23">
                            
                        </div>
                        <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <form class="sign-in-form">
                                            <h2 class="title">Add Customer</h2>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-user"></i>
                                                </a> <input type="text" name="fname" autocomplete="OFF" id="fname"
                                                    placeholder="Customer">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <input type="password" autocomplete="OFF" name="password"
                                                    id="password" placeholder="Customer Id">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-user"></i>
                                                </a> <input type="text" name="fname" autocomplete="OFF" id="fname"
                                                    placeholder="Contact">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <input type="password" autocomplete="OFF" name="password"
                                                    id="password" placeholder="Profession">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <input type="password" autocomplete="OFF" name="password"
                                                    id="password" placeholder="Balance">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <select name="range" id="range">
                                                    <option value="range">Poor</option>
                                                    <option value="range">Rich</option>
                                                    <option value="range">Nice</option>
                                                    <option value="range">Bad</option>
                                                    <option value="range">ODD</option>
                                                </select>
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <input type="password" autocomplete="OFF" name="password"
                                                    id="password" placeholder="Address">
                                            </div>
                                            <div class="input-field">
                                                <a href="#"> <i class="fas fa-lock"></i>
                                                </a> <input type="password" autocomplete="OFF" name="password"
                                                    id="password" placeholder="Comments">
                                            </div>



                                            <input type="submit" value="Add Customer"
                                                class="btn btn-success btn-submit solid">

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="input-field">
                            <label for="status">Address</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="Address">
                        </div>
                        <div class="input-field">
                            <label for="status">contact</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="contact" value="923124617477">
                        </div>
                        <div class="input-field">
                            <label for="status">Manager</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="Manager" value="Mushtaq ">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="LastInput">

                        <div class="input-field">
                            <label for="status">Amount Paid</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountPaid" value="0" onkeyup="calcRemainingAmount()">
                        </div>
                        <div class="input-field">
                            <label for="status">Remaining</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountRemaining" value="50000">
                        </div>
                        <div class="input-field">
                            <label for="status">Payment Mode</label>
                            <select data-live-search="true" class=" selectpicker">
                                <option>Cash</option>
                                <option>Bank</option>


                            </select>
                        </div>
                        <div class="input-field">
                            <label for="status">Paid To</label>
                            <select data-live-search="true" class=" selectpicker">

                                <option>FJW</option>
                                <option>Forland Modren Motors</option>

                            </select> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center mt-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 offset-md-4 mb-2 myFooterButtons">
                    <a class="btn" href="viewCustomers.html">view Customers</a>
                    <a class="btn" href="deliveryLetter.html">Print Docs</a>
                    <a class="btn" onclick="generateSale()">Generate Sale</a>
                    <a class="btn" href="#">Close Form</a>

                   


                </div>

            </div>
        </div>

    </footer>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"  id="searchProductsModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="container">
                                <div class="row">

                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2 mt-5 mb-5">
                                        <table class="table  table-bordered " id="searchProductTable">
                                            <thead>
                                                <tr>
                                               
                                                    <th>Product Id</th>

                                                    <th>Product Name</th>
                                                    <th>Engine #</th>

                                                    <th>Chasis #</th>
                                                    
                                                    <th>Purchse Price</th>
                                                    <th>Cost with Additional charges</th>
                                                    <th>Status</th>
                                                    



                                                    
                                                    


                                                </tr>
                                            </thead>
                                            <tbody>

                                                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                        <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                        <button type="submit" data-dismiss="modal" class="btn btn-org-1">Okay</button>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>
<script>
        $(document).ready(function () {
            $('#myTables').DataTable();
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
  function calc(){

   var tot= document.getElementById("TotalPrice").value;
    var dis=document.getElementById("Discount").value;
    
    var netTot=Number(tot)-Number(dis);

    document.getElementById("NetTotal").value=netTot;
    document.getElementById("amountPaid").value=netTot;




  }
  function calcRemainingAmount(){

  var tot=  document.getElementById("NetTotal").value;
   var ap= document.getElementById("amountPaid").value;
   var rem=Number(tot)-Number(ap);
   document.getElementById("amountRemaining").value=rem;


  }



  function generateSale() {


 var pid=   document.getElementById("PID").value ; 
   
    
var totwT = document.getElementById("TotalPrice").value;
var discount = document.getElementById('Discount').value;



var netTotal = document.getElementById('NetTotal').value;
var amp = document.getElementById('amountPaid').value;
var rmb = document.getElementById("amountRemaining").value;


var CID = document.getElementById("CID").value;

order = [pid,totwT,discount,netTotal,amp,rmb,CID];




var array = JSON.stringify(order);



var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        alert("Invoice =" + this.responseText + " is generated");

    }
};
// var MenuID=$('#Menus').find(":selected").val();
xhttp.open("GET", "./addSales/" + array, true);
xhttp.send();
};
    </script>
</html>