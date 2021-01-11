<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <title>Book Order</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


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

        label {
            font-weight: bold;
            font-size: 16px;
        }

        #myHeader label {

            width: 250px !important;
        }

        .mainSection label {
            width: 250px !important;

        }

        a {
            text-decoration: none !important;
        }

        a:hover {
            color: #ffffff;
            text-decoration: none !important;
        }

        .printBtns {

            background-color: #ffffff;
            border: 1px solid#0a549d;
            color: #0a549d;
            transition: .7s;
        }

        .placeBtns {
            background-color: #e61d2f;
            color: #ffffff;


        }

        .printBtns:hover {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
            transition: .7s;
        }

        .successButtons button {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
        }

        .footerBtn {
            text-align: right;
            /* text-align: center; */
            float: right;
            /* margin-top: 120px !important; */
        }

        .footerBtn .btn:nth-child(1) {

            margin-right: 20px;
        }


        table {


            width: 100%;
            max-width: 100%;
        }


        th,
        td {
            padding: 3px;
            border: 1px solid #aaaaaa;
        }

        .myBookingBorder {
            border: 1px solid #aaaaaa;
            padding: 5px 8px;
            border-radius: 10px;
        }

        table tr:last-child td {
            border-bottom: 1px solid #aaaaaa !important;
        }

        .bookingRightTable {
            border-radius: 10px;
            height: 514px !important;
            border: 1px solid #aaaaaa;
            padding: 0px 10px;
        }

        .tableDiv {

            height: 285px;
            overflow: auto;

        }



        .input-group {
            margin: 10px 0px;
        }

        .mainInputGroups {
            float: right;
            margin-top: 5px;

        }

        .clear {
            clear: both;
        }

        .mainInputGroups input {
            width: 120px !important;
        }

        th,
        td {
            border-bottom: 1px solid #333;
        }

        .mainSection {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;

        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
</head>

<body id="mainBody" onload="getOrderID()">

    <header id="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-2 mb-5 text-center">
                    <h3>Book Order</h3>
                </div>
            </div>



        </div>
    </header>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="myBookingBorder">

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Order No</label>
                                <input type="text" class="form-control"
                                    style="width: 200px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                    name="" id="OrderId" readonly="true">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Model">Model :</label>
                                <select class="selectpicker form-control" data-live-search="true" id="category"
                                    tabindex="null">
                                    <option value=1>Forland C13</option>
                                    <option value=2>Forland Trucks</option>
                                    <option value=3>Land Trucks</option>
                                    <option value=4>Continantal Trucks</option>


                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Invoice Price :</label>
                                <input type="number" onchange="product()" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name=""
                                    id="invoice">

                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Qty :</label>
                                <input type="number" onchange="product()" class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name="" id="qty">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Total</label>
                                <input type="text" class="form-control"
                                    style="width: 200px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                    name="" id="total" readonly="true">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Amount Paid</label>
                                <input type="number" title="Press Enter To Submit" onkeyup="subtract()"
                                    class="form-control"
                                    style="width: 200px !important; display: inline-block !important;" name=""
                                    id="amount">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Remaining For This Order</label>
                                <input type="text" class="form-control"
                                    style="width: 200px !important; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                    name="" id="remaining" readonly="true">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="successButtons text-right" style="margin-right: 7px !important;">
                                    <button onclick="valid()" class="btn ">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bookingRightTable">

                        <div class="tableContent  text-center">
                            <h3>Your Current Orders </h3>
                        </div>



                        <div class="tableDiv">


                            <table id="BookingRecordTable" class=" table-striped"
                                style="width: 100%; text-align: center; ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Model</th>
                                        <th>Price</th>
                                        <th>QTY</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Remain</th>
                                        <th>Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>




                                </tbody>
                            </table>
                        </div>
                        <div class="mainInputGroups">
                            <div class="input-group">
                                <label style="width: 150px !important;" for="">Total Amount</label>
                                <input type="number" name="" id="mainTotal">
                            </div>

                            <div class="input-group ">
                                <label style="width: 150px  !important;" for="">Total Paid</label>
                                <input type="number" name="" id="totalPaid" onchange="calculatonInTable()">
                            </div>
                            <div class="input-group ">
                                <label style="width: 150px  !important;" for="">Total Remaining</label>
                                <input type="number" name="" id="totRemaining">
                            </div>

                        </div>
                        <div class="clear"></div>


                        <div class="footerBtn">
                            <a href="#" class="printBtns btn">Print Order</a>
                            <button class="placeBtns btn" onclick="placeOrder()">Place Order</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>




    <script>
        function valid() {
            var OrderID = document.getElementById("OrderId").value;
            var category = document.getElementById("category");
            var invoicePrice = document.getElementById("invoice").value;
            var qty = document.getElementById("qty").value;
            var tot = document.getElementById("total").value;
            var amontPaid = document.getElementById("amount").value;
            var remaining = document.getElementById("remaining").value;
            if (invoicePrice == "") {
                document.getElementById('invoice').focus();

            } else if (isNaN(invoicePrice)) {
                alert("Input Field Should Be Numeric");
                document.getElementById("invoice").value = "";


            } else if (qty == "") {
                document.getElementById('qty').focus();
            } else if (isNaN(amontPaid)) {
                alert("Input Field Should Be Numeric");
                document.getElementById("amount").value = "";

            } else if (amontPaid == "") {
                document.getElementById('amount').focus();
            } else {
                add();

                // document.getElementById("OrderId").value = "";

                // document.getElementById("category");

                // document.getElementById("invoice").value = "";

                // document.getElementById("qty").value = "";

                // document.getElementById("total").value = "";

                // document.getElementById("amount").value = "";

                // document.getElementById("remaining").value = "";

            }

        }
        // setInterval(function () {
           
        // }, 0)

    </script>

    <script>
        function add() {

            var OrderID = document.getElementById("OrderId").value;
            var category = document.getElementById("category");
            var invoicePrice = document.getElementById("invoice").value;
            var qty = document.getElementById("qty").value;
            var tot = document.getElementById("total").value;
            var amontPaid = document.getElementById("amount").value;
            var remaining = document.getElementById("remaining").value;

            var table = document.getElementById("BookingRecordTable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);



            cell1.innerHTML = OrderID;
            cell2.innerHTML = category.options[category.selectedIndex].text;
            cell3.innerHTML = invoicePrice;
            cell4.innerHTML = qty;
            cell5.innerHTML = tot;
            cell6.innerHTML = amontPaid;
            cell7.innerHTML = remaining;
            cell8.innerHTML = '<button  calss="" onclick="deleteRow(this)">X</button>';
            calculatonInTable();



        }




        var body = document.getElementById("mainBody");

        body.addEventListener('keypress', function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                valid();
            }
        })


        function deleteRow(ele) {
            var conf = confirm("Do You Want To Delete This Row");

            var a = ele.parentNode.parentNode;
            if (conf === true) {
                a.remove();
            } else {
                return false;
            }


            a.remove();
            calculatonInTable();
        }


        function product() {
            var invoice = document.getElementById("invoice").value;
            var qty = document.getElementById("qty").value;

            var product = invoice * qty;
            document.getElementById("total").value = product;
            // document.getElementById("mainTotal").value = product;

        }

        function subtract() {
            var total = document.getElementById("total").value;
            var amount = document.getElementById("amount").value;
            //  document.getElementById("totalPaid").value = amount;

            var subtract = total - amount;
            document.getElementById("remaining").value = subtract;


        }

        function calculatonInTable() {

            var t = document.getElementById("BookingRecordTable");
            var tot = 0;
            var rem = 0;
            var paid = 0;

            var x = document.getElementById("BookingRecordTable").rows.length;

            for (var i = 1; i < x; i++) {
                tot = tot + Number(t.rows[i].cells[4].innerText);
                paid = paid + Number(t.rows[i].cells[5].innerText);
                rem = rem + Number(t.rows[i].cells[6].innerText);





            }
            document.getElementById("mainTotal").value = tot;
            document.getElementById("totalPaid").value = paid;
            document.getElementById("totRemaining").value = rem;


        }

        function placeOrder() {
            var orderDetails = [];
            var table = document.getElementById("BookingRecordTable");
            var myRow2 = [];

            //alert(sp);
            $('#BookingRecordTable tr').each(function (row, tr) {

                orderDetails[row] = [

                    $(tr).find('td:eq(0)').text(), //AutoCategory
                    $(tr).find('td:eq(2)').text(), //Price
                    $(tr).find('td:eq(3)').text(), //qty


                    $(tr).find('td:eq(4)').text(), //totamount
                    $(tr).find('td:eq(5)').text(), //Paid
                    $(tr).find('td:eq(6)').text(), //remAmount
                    $(tr).find('td:eq(1)').text() //productName



                ];


            });
            orderDetails.shift();


            alert("array for order" + orderDetails);

            var mainTotal = document.getElementById("mainTotal").value;
            var totlpaid = document.getElementById("totalPaid").value;
            var totRemaining = document.getElementById("totRemaining").value;
            alert(mainTotal);
            var Order = [mainTotal, totlpaid, totRemaining, orderDetails];


            alert(Order);



            var OrderArray = JSON.stringify(Order);

            alert(OrderArray);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Invoice =" + this.responseText + " is generated");
                    getOrderID();

                }
            };
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./placeOrder/" + OrderArray, true);
            xhttp.send();
        }

        function getOrderID() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("OrderId").value = this.response;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getOrderId/", true);
            xhttp.send();
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</body>

</html>
