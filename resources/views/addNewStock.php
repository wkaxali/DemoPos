<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        .recepi-table {
            border: 1px solid rgb(196, 218, 243);
            overflow: auto;
            height: 500px;
            padding: 10px;
        }

        .sale-buttons {
            text-align: center;
        }

        .sale-buttons button {
            /* display: block; */
            width: 90px !important;
            height: 50px;
            margin: 5px 5px;


        }

        .raw-table {
            border: 1px solid rgb(196, 218, 243);
            height: 500px;
        }

        .raw-table table tbody tr td:nth-child(3),
        .raw-table table tbody tr td:nth-child(5) {
            width: 50px;
            /* height: 10px; */
        }

        .raw-table table tbody tr td:nth-child(1) {
            width: 50px;
        }

        .btn-success {
            color: #fff;
            background-color: #e61d2f;
            border-color: #e61d2f
        }

        .btn-success:hover {
            color: #fff;
            background-color: #e61d2f;
            border-color: #e61d2f;
        }

        .btn-success.focus,
        .btn-success:focus {
            box-shadow: 0 0 0 .2rem #e61d2f;
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .menu-table {
            border: 1px solid rgb(196, 218, 243);
            height: 400px;
        }

        .menu-table table {
            padding: 10px !important;

        }

        .menu-table table th,
        td {
            border: 1px solid #ced4da;
            padding: 2px !important;
        }

        .idi label {
            width: 210px !important;
        }

        /* .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 520px; } */
        .menu-i {
            border: 1px solid #E5EAEE;
            padding: 10px 10px;
            border-radius: 10px;
        }

        .ent-table {
            border: 1px solid #E5EAEE;
            padding: 10px 10px;
            border-radius: 10px;
            height: 465px;
        }



        .up-btn {
            margin-top: 5px;
            height: 120px !important;
            width: 120px !important;
        }

        .offme input {
            margin: 5px 0px;
        }

        .stock-table {
            height: 500px;
            overflow: auto;
        }

        .salePr-buttons {
            text-align: center;
        }

        .salePr-buttons button {
            height: 96px;
            width: 150px;
        }

        /* .esti-1{
        border: 1px solid #E5EAEE;
        padding: 10px;
    } */
        .offme-10 label {
            width: 221px !important;
        }

        .offme-10 input {
            margin: 5px 0px !important;
        }

        .mainWebPro {
            background-image: url(https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
            width: 100vw;
            position: relative;
            z-index: 0;
        }

        .mainWebPro::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.57);
            min-height: 100%;
            z-index: -1;


        }

        .mainWebcontent {

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%;

        }

        .mainWebcontent h3 {
            font-size: 35px;
            text-align: center;
            color: #E5EAEE;
        }

        .mainWebcontent h1 {
            font-size: 55px;
            color: #E5EAEE;
            text-align: center;


        }

        .mainWebButtons {
            margin-top: 50px !important;
        }

        .mainWebButtons button {
            margin: 20px 10px !important;
        }

        .mainWebButtons a {
            width: 150px;
            height: 100px;
            text-align: center;
            line-height: 80px;
            margin: 10px 10px;
        }

        .leftMaterial label {
            margin-right: 50px;
        }



        .ownButton {
            margin: 20px auto;
            padding: 20px 40px;
        }

        .rightmtButton {
            float: right;
        }

        #mt_header {
            margin-top: 20px;
        }

        table th,
        td {
            text-align: center;
        }

        /* 
        .ent-table {
            height: 350px !important;
        } */



        .myContentInputs {
            display: flex;
            justify-content: space-between;
        }

        .myContentInputs input {
            width: 200px !important;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
        }

        /* tr:nth-child(1n++) {
            background-color: #0a549d;
        } */

        @media only screen and (max-width: 993px) {
            .myContentInputs {
                display: flex;
                flex-wrap: wrap;
            }
            .ent-table table {
                width: 595px !important;
            }


        }

    

    </style>

</head>

<body id="mainBody" onload="loadData()">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Add new Stock</h2>
                </div>
            </div>

            <div class="myContentInputs">
                <div class="inputField-1">
                    <label for="prodName">Category</label> <br>

                    <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control"  data-live-search="true"  id="category">
                            
                            </select>
                </div>
                <div class="inputField-1">
                    <label for="cost">Cost</label>
                    <input type="text" class="form-control" id="cost">
                </div>
                <div class="inputField-1">
                    <label for="prodName">Product Name</label>
                    <input type="text" id="productName" class="form-control">
                </div>
                <div class="inputField-1">
                    <label for="prodName">Sale Price</label>
                    <input type="text" class="form-control" id="salePrice">

                </div>
                <div class="inputField-1">
                    <label for="prodName">Description</label>
                    <input type="text" class="form-control" id="description">

                </div>
                <div class="input-Btn-1">
                    <button class="btn btn-success" style="margin-top: 30px !important;" onclick="AddItemInGrid()">Add
                        Menu</button>

                </div>
            </div>





        </div>


    </header>

    <section class="mt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ent-table" style="overflow: auto;">
                        <table class="table table-bordered table-striped " id="MenuTable">
                            <thead>
                                <tr>
                                    <th>Product Name </th>
                                    <th>Category</th>

                                    <th>Sale Price</th>
                                    <th>Cost</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="contact-list">


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 offset-md-10 text-right">
                    <button class="btn btn-success  mt-1" style="height: 102px;width: 102px;  color: #ffffff;"
                        onclick="AddProduct()">PlaceOrder</button>
                </div>
            </div>
        </div>

    </section>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>




<script>
    function AddItemInGrid() {
        var table = document.getElementById("MenuTable");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var e = document.getElementById("category");
        var cateValue = e.options[e.selectedIndex].value;
        var catetext = e.options[e.selectedIndex].text;
        cell1.innerHTML = document.getElementById("productName").value;
        cell2.innerHTML = catetext;
        cell3.innerHTML = document.getElementById("cost").value;
        cell4.innerHTML = document.getElementById("salePrice").value;
        cell5.innerHTML = document.getElementById("description").value;
        cell6.innerHTML =
            "<button onclick='deleteRow(this)' class=\"btn btn-danger \" style=\"height: 25px;width: 25px; padding:auto;\"></button>";
        


    }



    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("MenuTable").deleteRow(i);
    }






    function insertProducts() {

        var myTrows = [];
        var table = document.getElementById("MenuTable");


        $('#MenuTable tr').each(function (row, tr) {

            myTrows[row] = [

                $(tr).find('td:eq(0)').text(),
                $(tr).find('td:eq(1)').text(),
                // $(tr).find('td:eq(2) input[type="text"]').val(),
                // $(tr).find('td:eq(3)').find(":selected").val(),
                $(tr).find('td:eq(2)').text(),
                $(tr).find('td:eq(3)').text(),
                $(tr).find('td:eq(4)').text()


            ];


        });
        myTrows.shift();
        alert(myTrows[0]);


        var a = JSON.stringify(myTrows);



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("This is comming from Controller ==" + this.responseText);

            }
        };

        xhttp.open("GET", "./insertProducts/" + a, true);
        xhttp.send();

    };

</script>
</script>
<script>
    function AddProduct() {

        var ProductName = document.getElementById("productName").value;
        

        var ProductCat = document.getElementById("category").value;
        

        var Productsaleprice = document.getElementById("salePrice").value;
        

        var ProductCost = document.getElementById("cost").value;
        

        var Description = document.getElementById("description").value;
        

        var Product = [ProductName, ProductCat, Productsaleprice, ProductCost, Description];


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        var EC = JSON.stringify(Product);
        xhttp.open("GET", "./AddProduct/" + EC, true);
        xhttp.send();


    };

    function FetchMenu(CID) {
        var xhttp = new XMLHttpRequest();


        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pills-tabContent").innerHTML = this.responseText;
                // alert();
                calculation();


            }

        };



        xhttp.open("GET", "./fetchMenu/" + CID, true);
        xhttp.send();



    };

    function getAllCategories() {



        var xhttp = new XMLHttpRequest();


        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pills-tab").innerHTML = this.responseText;
                FetchMenu(11);



            }

        };

        xhttp.open("GET", "./fetchCategories", true);
        xhttp.send();
    }

</script>


<script>
function loadData(){
    clearAll();
    loadProductCategory();
}
</script>

<script>
function clearAll(){
    // document.getElementById("date").value = "";
    // document.getElementById("address").value = "";
    // document.getElementById("basicPay").value = "";
    // document.getElementById("allowedHolidays").value = "";
    // document.getElementById("allownces").value = "";
    // document.getElementById("saleTarget").value = "";
    // document.getElementById("address").value = "";
    // document.getElementById("address").value = "";
}
</script>


<script>
function loadProductCategory(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            document.getElementById("category").innerHTML = this.response;
            $('#category').selectpicker('refresh');
        }
    };
    //alert("ljd");
    xhttp.open("GET", "./loadProductCategory/", true);
    
    xhttp.send();


    }
</script>


</html>
