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

        .btn:hover {
            color: #fff;
        }

        .myContentInputs {
            display: flex;
            justify-content: space-between;
        }

        .input-Btn-1 {
            text-align: center;
            margin: 10px 0px;
        }

        @media only screen and (max-width: 600px) {
            .myContentInputs {
                display: block !important;
            }

            .inner-block {
                padding: .5em 1em 2em 1em;
            }
        }

        .left-content {
            width: 85% !important;
        }

    </style>
    <title>Quotation List</title>
</head>

<body onload="getQuotations()">
    @include('quotationlisthtml')





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

                        table.row.add([a[i].QID, a[i].CustomerName, a[i].Address, a[i]
                            .Contact, a[i]
                            .UnitPrice, a[i].Quantity, a[i].TotalPrice, a[i]
                            .Model, a[i].Date,
                            '<button class="btn print" onclick="printQuotation(' + a[i].QID +
                            ')" >Print</button>'
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


        function printQuotation(QID) {
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


        function createQuotation() {
            // <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
            //                                     required />
            var customerName = document.getElementById("customerName").value;
            var fatherName = "";
            var CNIC = "";
            var city = "";
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;
            var det = document.getElementById("dt").value;
            var qvt = document.getElementById("qvt").value;
            var payTo = document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity,
                totalPrice, model, det, qvt, payTo
            ];

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
                   // $('#model').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadAutos/", true);

            xhttp.send();
        }

        function calculation() {
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;

            var total = price * quantity;
            document.getElementById("totalPrice").value = total;
        }

    </script>
</body>

</html>
