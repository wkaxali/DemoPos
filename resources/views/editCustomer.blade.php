<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Customer</title>


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
            padding: 20px 10px;
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

<body onload="getCustomers()">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Customer</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>

                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Father Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>CNIC</th>
                                <th>Balance</th>
                                <th>Comments</th>


                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <div class="input-field">
                        <label for="status">CustomerID</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="CID">
                    </div>
                    <div class="input-field">
                        <label for="status">CustomerName</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="customerName">
                    </div>

                    <div class="input-field">
                        <label for="status">FatherName</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="fatherName">
                    </div>

                    <div class="input-field">
                        <label for="status">Address</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="address">
                    </div>

                    <div class="input-field">
                        <label for="status">Contact</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="contact">
                    </div>

                    <div class="input-field">
                        <label for="status">CNIC</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            value="" id="CNIC">
                    </div>


                    <div class="input-field">
                        <label for="status">Balance</label>
                        <input type="email" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="balance">
                    </div>

                    <div class="input-field">
                        <label for="status">Comments</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="comments">
                    </div>

                    <button class="btn btn-success" onclick="editEmployee()">Update </button>











                    <!--end::Demo Panel-->

                    <!-- jQuery and JS bundle w/ Popper.js -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                        crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                        crossorigin="anonymous">
                    </script>
                    <script type="text/javascript" charset="utf8"
                        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
                    </script>
                    <script>
                        $(document).ready(function () {
                            $('#stocktable').DataTable();
                        });

                    </script>
                    <!--end::Global Theme Bundle-->

                    <script>
                        function getCustomers() {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    var data = this.responseText;
                                    //alert(data);
                                    var table;
                                    var a = JSON.parse(data);

                                    table = $('#modeltable').DataTable();

                                    $.each(a, function (i, item) {

                                        table.row.add([a[i].MID, a[i].company, a[i].modelname, a[i].Address,
                                            a[i].Contect, a[i].CNIC, a[i].Balance, a[i].Comments
                                        ]);
                                    });
                                    table.draw();

                                }
                            };

                            xhttp.open("GET", "./getCustomers/", true);
                            xhttp.send();
                        }
                        $("#stocktable").on('click', 'tr', function () {
                            document.getElementById("CID").value = this.cells[0].innerText;
                            document.getElementById("customerName").value = this.cells[1].innerText;
                            document.getElementById("fatherName").value = this.cells[2].innerText;
                            document.getElementById("address").value = this.cells[3].innerText;
                            document.getElementById("contact").value = this.cells[4].innerText;
                            document.getElementById("CNIC").value = this.cells[5].innerText;
                            document.getElementById("balance").value = this.cells[6].innerText;
                            document.getElementById("comments").value = this.cells[7].innerText;







                        });

                        function editEmployee() {
                            var CID = document.getElementById("CID").value;
                            var customerName = document.getElementById("customerName").value;
                            var fatherName = document.getElementById("fatherName").value;
                            var address = document.getElementById("address").value;
                            var contact = document.getElementById("contact").value;
                            var CNIC = document.getElementById("CNIC").value;
                            var balance = document.getElementById("balance").value;
                            var comments = document.getElementById("comments").value;

                            var updateCustomer = [CID, customerName, fatherName, address, contact, CNIC, balance,
                                comments
                            ];

                            var UC = JSON.stringify(updateCustomer);
                            alert(UC);
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {

                                    alert("Customer " + this.responseText + " is Updated");


                                }
                            };

                            // var MenuID=$('#Menus').find(":selected").val();
                            xhttp.open("GET", "./editCustomer/" + UC, true);
                            xhttp.send();

                        }

                    </script>

</body>

</html>
