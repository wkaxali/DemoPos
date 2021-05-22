<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Employee</title>


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

        label {
            width: 150px;
        }

        .row {
            margin: 10px 0px;
        }
.inner-block {
    padding: 1em 1em 2em 1em !important;
}
    </style>
</head>

<body onload="getEmployees()">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-1">Edit Employee</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="">
        <div class="container">
            <div class="row">
              
           
      
                <div class="col-md-8">
                    <div class="stock-table"
                        style="height: 640px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr ondblclick="getEmployee()">
                                    <th>Employee ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>CNIC</th>
                                    <th>Contact No</th>
                                    <th>Home Address</th>
                                    <th>Email ID</th>
                                    <th>Designation ID</th>
                                    <th>JoiningDate</th>

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
                        <label for="status">Employee ID</label>
                        <input readonly autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="EID">
                    </div>
                    <div class="input-field">
                        <label for="status">First Name</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="firstName">
                    </div>
                    <div class="input-field">
                        <label for="status">Last Name</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="lastName">
                    </div>

                    <div class="input-field">
                        <label for="status">CNIC</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="CNIC">
                    </div>

                    <div class="input-field">
                        <label for="status">Contact</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="contact">
                    </div>
                    <div class="input-field">
                        <label for="status">Address</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            value="" id="address">
                    </div>


                    <div class="input-field">
                        <label for="status">Email ID</label>
                        <input type="email" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="email">
                    </div>

                    <div class="input-field">
                        <label for="status">Designation</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="designation">
                    </div>

                    <div class="input-field">
                        <label for="status">Joining Date</label>
                        <input type="date" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="date">

                    </div><br>
                    <button class="btn btn-success" onclick="editEmployee()">Update </button>
                </div>
            </div>


        </div>
        </div>
    </section>







    <!-- jQuery and JS bundle w/ Popper.js -->
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
        function getEmployees() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    
                    var table;
                    var a = JSON.parse(data);

                    table = $('#stocktable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].EID, a[i].FirstName, a[i].LastName, a[i].CNIC, a[i].ContactNo,
                            a[i].HomeAddress, a[i].EmailID, a[i].DesignationID, a[i].JoiningDate
                        ]);
                    });
                    table.draw();

                }
            };

            xhttp.open("GET", "./getAllEmployees/", true);
            xhttp.send();
        }
        $("#stocktable").on('click', 'tr', function () {
            document.getElementById("EID").value = this.cells[0].innerText;
            document.getElementById("firstName").value = this.cells[1].innerText;
            document.getElementById("lastName").value = this.cells[2].innerText;
            document.getElementById("CNIC").value = this.cells[3].innerText;
            document.getElementById("contact").value = this.cells[4].innerText;
            document.getElementById("address").value = this.cells[5].innerText;
            document.getElementById("email").value = this.cells[6].innerText;
            document.getElementById("designation").value = this.cells[7].innerText;
            document.getElementById("date").value = this.cells[8].innerText;









        });

        function editEmployee() {
            var EID = document.getElementById("EID").value;
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var CNIC = document.getElementById("CNIC").value;
            var contact = document.getElementById("contact").value;
            var address = document.getElementById("address").value;
            var email = document.getElementById("email").value;
            var designation = document.getElementById("designation").value;
            var date = document.getElementById("date").value;

            var updateEmployee = [EID, firstName, lastName, CNIC, contact, address, email, designation, date];

            var UE = JSON.stringify(updateEmployee);
           
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Employee " + this.responseText + " is Updated");


                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editEmployee/" + UE, true);
            xhttp.send();

        }

    </script>

</body>

</html>
