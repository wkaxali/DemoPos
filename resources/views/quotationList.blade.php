<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <style>
        .print {
            background-color: #0a549d;
            color: aliceblue;
        }
        @media print {
            body * {
                visibility: hidden;
            }

            .mains,
            .mains * {
                visibility: visible;
            }

            .mains {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
.btn:hover{
    color:#fff;
}
    </style>
    <title>Quotation List</title>
</head>

<body onload="getQuotations()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">

    <div class="container-fluid">
        <div class="mains">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Quotation List</h1>
            </div>
        </div><br><br>
        <header>
                    <div class="container" >
                    <div class="myContentInputs" style="display: flex">
                        
                            <div class="inputField-1">
                                <label for="prodName">Customer Name</label>
                                <input type="text" id="customerName" class="form-control"
                                style="height: 40px !important; width: 200px !important; ">
                            </div>
                            <br>
                            <div class="inputField-1">
                                <label for="cost">Address</label>
                                <input type="text" class="form-control" id="address"
                                style="height: 40px !important; width: 200px !important; ">
                            </div>
                           <br>
                            <div class="inputField-1">
                                <label for="prodName">Contact</label>
                                <input type="text" class="form-control" id="contact"
                                style="height: 40px !important; width: 200px !important; ">

                            </div>
                            <br>
                            <div class="inputField-1">
                                <label for="Model">Select Model</label>
                                <select style="height: 40px !important; width: 200px !important;" name="Select Model"
                                    class="selectpicker form-control" data-live-search="true" id="model" onchange="updateModelData()">

                                </select>

                            </div>
                            <br>
                            
                        </div>
                        <br>
                    <div class="myContentInputs" style="display: flex">
                    
                        <div class="inputField-1">
                            <label for="prodName">Description</label>
                            <input type="text" id="description" class="form-control"
                            style="height: 40px !important; width: 200px !important; ">
                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="cost">Color</label>
                            <input type="text" class="form-control" id="color"
                            style="height: 40px !important; width: 200px !important; ">
                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="prodName">Quotation Validity Time</label>
                            <input type="text" class="form-control" id="qvt"
                            style="height: 40px !important; width: 200px !important; ">

                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="prodName">Delivery Time</label>
                            <input type="text" class="form-control" id="dt"
                            style="height: 40px !important; width: 200px !important; ">

                        </div>
                        <br>
                        
                    </div>
                    <br>
                    <div class="myContentInputs" style="display: flex">
                    
                    <div class="inputField-1">
                            <label for="prodName">Payment To</label>
                            <input type="text" class="form-control" id="paymentTo"
                            style="height: 40px !important; width: 200px !important; ">

                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="cost">Unit Price</label>
                            <input type="text" class="form-control" id="unitPrice" onchange="calculation()"
                            style="height: 40px !important; width: 200px !important; ">
                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="prodName">Quantity</label>
                            <input type="text" class="form-control" id="quantity" onchange="calculation()"
                            style="height: 40px !important; width: 200px !important; ">

                        </div>
                        <br>
                        <div class="inputField-1">
                            <label for="prodName">Total Price</label>
                            <input type="text" class="form-control" id="totalPrice"
                            style="height: 40px !important; width: 200px !important; ">

                        </div>
                    </div>
                    <br>
                    <div class="input-Btn-1">
                            <button class="btn btn-success" style="margin-top: 30px !important;"
                                onclick="createQuotation()">Create Quotation</button>

                        </div>





                    </div>


                </header>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-hover" id="quotationsTable">
                    <thead>
                        <th>QID</th>
                        <th>CustomerName</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>UnitPrice</th>
                        <th>Quantity</th>
                        <th>TotalPrice</th>
                        <th>Model</th>
                        <th>Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 offset-md-6 text-right">
                <button class="btn print ">Print</button>
            </div>
        </div>
    </div>
            </div>
        </div>
        <div class="sidebar-menu">

            <div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
                    <span id="logo"></span>
                </a> </div>
            <div class="menu">
                <ul id="menu">
                    <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span
                                style="font-size: 18px;">Dashboard</span></a>
                    </li>
                    <li><a data-toggle="collapse" data-target=".new"><i class="fab fa-salesforce"></i><span
                                style="font-size:18px;">Operations</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled new">
                            <li><a href="/bo">Book Order</a></li>
                            <li><a href="/rec">Receiving</a></li>
                            <li><a href="/is">Invoice Services</a></li>
                            <li><a href="/sc">Commissions and Taxes</a></li>
                            <li><a href="/as">Add Stock</a></li>
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="/l">Investor Sale Ledger</a></li>
                            <li><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Products</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled firstULs ">
                            <li><a href="/">Category</a></li>
                            <li><a href="/vs">Product Record</a></li>
                            <li><a href="/as">Add Product</a></li>
                            <li><a href="/">Barcode</a></li>

                            <li><a href="/">Stock Audit</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs1"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Customer</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs1">
                            <li><a href="/">Add Customer</a></li>
                            <li><a href="/vs">Customer List</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs2"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Supplier</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs2">
                            <li><a href="/">Add Supplier</a></li>
                            <li><a href="/vs">Supplier List</a></li>
                        </ul>
                    </li>
                    <li id="menu-comunicacao"><a data-toggle="collapse" data-target=".firstULs3"><i
                                class="fab fa-alipay"></i>
                            <span style="font-size: 18px;">Purchase</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs3">
                            <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                            </li>
                            <li><a href="">Daily Purchase</a></li>
                            <li><a href="">Monthly Purchase</a></li>
                            <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs4"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">POS</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs4">
                            <li><a href="/ss">POS</a></li>
                            <li><a href="/sc">Add Sale</a></li>
                            <li><a href="">Daily Sales</a></li>
                            <li><a href="">Monthly Sales</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                                style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs5">
                            <li><a href="/ex">Add Expense</a></li>
                            <li><a href="">Expense List</a></li>
                            <li><a href="">Expense Head</a></li>
                            <li><a href="">Expense Category</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs6"><i class="fas fa-quote-right"></i><span
                                style="font-size: 18px;">Quotation<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs6">
                            <li><a href="/ql">Quotation List</a></li>
                            <li><a href="/is">Add Quotation</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs7"><i class="fas fa-random"></i><span
                                style="font-size: 18px;">Transfer<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs7">
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="">Transfer Funds</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs8"><i class="fas fa-undo-alt"></i><span
                                style="font-size: 18px;">Return<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs8">
                            <li><a href="/ss">Sale</a></li>
                            <li><a href="/is">Purchase</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs9"><i
                                class="fas fa-user-circle"></i><span style="font-size: 18px;">Accounts</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs9">
                            <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                            <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs10"><i class="fab fa-accusoft"></i><span
                                style="font-size: 18px;">HR</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs10" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">Add Employee</a></li>
                            <li id="menu-academico-boletim"><a href="/">View Employee</a></li>
                        </ul>
                    </li>



                    <li><a data-toggle="collapse" data-target=".firstULs11"><i class="fas fa-people-carry"></i><span
                                style="font-size: 18px;">People</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs11" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">User List</a></li>
                            <li id="menu-academico-boletim"><a href="/">Add User</a></li>


                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i
                                style="font-size: 20px;" class="fab fa-stack-overflow"></i><span
                                style="font-size: 18px;">Stock</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs12" id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/as">Add New Stock</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/vs">View Stock</a></li>
                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs13"><i
                                class="fas fa-flag-checkered"></i><span style="font-size: 18px;">Reports</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs13" id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/d">Summary Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Customer Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Best Seller</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Sale</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Monthly Sale</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Purchase</a></li>
                            <li id="menu-academico-boletim"><a href="/d">MonthlyPurchase</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">User Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Supplier Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Due Report</a></li>


                        </ul>
                    </li>
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs14"><i
                                class="fas fa-truck-loading"></i><span style="font-size: 18px;">Order
                                Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
                        <ul class="collapse firstULs14" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

                        </ul>
                    </li>


                    <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                                style="font-size: 18px;">PayRoll</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs15" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                            <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                            <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i
                                class="fas fa-guitar"></i><span style="font-size: 18px;">Attendance</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs16" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                            <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
                        </ul>

                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs17"><i class="fas fa-eye"></i><span
                                style="font-size: 18px;">Task View</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="firstULs17 collapse" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                            <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
                        </ul>
                    </li>

                    <li><a data-toggle="collapse" data-target=".firstULs18"><i class="fas fa-cogs"></i><span
                                style="font-size: 18px;">Account Settings</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs18" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                            <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
 
    <div class="clearfix"></div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
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


        function getQuotations() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#quotationsTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].QID,  a[i].CustomerName, a[i].Address, a[i]
                            .Contact, a[i]
                            .UnitPrice, a[i].Quantity, a[i].TotalPrice, a[i]
                            .Model, a[i].Date, '<button class="btn print" onclick="printQuotation('+a[i].QID+')" >Print</button>'
                        ]);
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewQuotations/", true);

            xhttp.send();
            loadAutos();
        }


        function printQuotation(QID){
            alert(QID);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
                window.open('/testpdf/5');

                }
            }

            xhttp.open("GET", "./getQuotation/" + QID, true);
            xhttp.send();

        }


        function createQuotation(){
            // <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
            //                                     required />
            var customerName = document.getElementById("customerName").value;
            var fatherName ="";
            var CNIC = "";
            var city ="";
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;
            var det=document.getElementById("dt").value;
            var qvt=document.getElementById("qvt").value;
            var payTo=document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity, totalPrice, model,det,qvt,payTo];

            var quotationData = JSON.stringify(data);
            alert(data);
            var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Quotation =" + this.responseText + " is generated");
                        
                        window.open("/qt");
                        window.open("/testpdf/5");
                        

                    }
                };
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./createQuotation/" + quotationData, true);
                xhttp.send();
            
        }


        function updateModelData() {
            var AID = $('#model').find(":selected").val();
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var a = this.response;
                    var data = JSON.parse(a);
                    var price = data[0].Price;
                    var description = data[0].Description;
                    document.getElementById("unitPrice").value = price;
                    document.getElementById("description").value = description;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAutoData/" + AID, true);

            xhttp.send();
        }

        function loadAutos() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("model").innerHTML = this.response;
                    $('#model').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadAutos/", true);

            xhttp.send();
        }

        function calculation(){
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;    
            
            var total = price*quantity;
            document.getElementById("totalPrice").value = total;
        }



    </script>
</body>

</html>
