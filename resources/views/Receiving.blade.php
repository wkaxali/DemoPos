<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <title>Document</title>


    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none !important;
            color: #ffffff;
        }
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;




        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }

        table tr td:last-child {
            width: 100px;
        }

   

        th,
        td {
            border: 1px solid #aaaaaa;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 400px;
             overflow: auto; 
        }

        .btn-print {

            background-color: #ffffff;
            border: 1px solid#0a549d;
            color: #0a549d;

            transition: .7s;
        }

        .btn-print:hover {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
            transition: .7s;
        }

        .btn-view {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .btn-update {
            background-color: #e61d2f;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Receiving</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label style="width:130px ;" for="OrderNo">Order No</label>
                    <input type="text" name="" value="" id="OrderId">
                    <button class="btn btn-info" onclick="getOrderDetails()">o</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="receivingMain">


                        <div class="receivingTable">
                            <table class=" table-striped" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Chasis No</th>
                                        <th>Engine No</th>
                                        <th>Tranport Charges</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody id="autoTableBody">
                                    <!-- Rows are comming from OrderFlowController -->
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="footerBtns text-right">
                        <a class="btn btn-view" href="viewStock.html">View Stock</a>
                        <a class="btn btn-print" href="viewStock.html">Print Details</a>
                        <a class="btn btn-update"  onclick="UpdateStatusAndTransaction()">Update</a>
                      
                     
                    </div>
                </div>
            </div>
        </div>
    </header>













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
<script>
  function getOrderDetails() {


var oid=document.getElementById("OrderId").value;
var xhttp = new XMLHttpRequest();


xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("autoTableBody").innerHTML = this.responseText;
       



    }

};

xhttp.open("GET", "./getOrderId/"+oid, true);
xhttp.send();
}





function UpdateStatusAndTransaction(){

    var products = [];
        var table = document.getElementById("autoTableBody");
       

        //alert(sp);
        $('#autoTableBody tr').each(function (row, tr) {

            products[row] = [

                $(tr).find('td:eq(1)').text(), //PID
                
                $(tr).find('td:eq(3) input[type="text"]').val(),//chasisNumber
               
               
                $(tr).find('td:eq(4) input[type="text"]').val(), //EngineNumber
                $(tr).find('td:eq(5) input[type="text"]').val(), //Transport charges
                $(tr).find('td:eq(6)').find(":selected").val()//Status
                



            ];


        });
        //products.shift();
        alert(products);
        var prod = JSON.stringify(products);
        alert(prod);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Stock =" + this.responseText + " Updated");
               

            }
        };
        // var MenuID=$('#Menus').find(":selected").val();
        xhttp.open("GET", "./ruautos/" + prod, true);
        xhttp.send();


}
</script>
</body>

</html>