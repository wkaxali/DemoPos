<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Users</title>


    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .stockLabels label {
            width: 100px;
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

<body onload="getUsers()">

    <div class="container">

        <header class="idi">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="mt-1">Edit Users</h3>
                    </div>
                </div>

            </div>
        </header>
        <br>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="stock-table"
                            style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                            <table style="width: 100%;" id="usertable">
                                <thead>

                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Password</th>
                                    <th>Designation</th>
                                    <th>Enable</th>
                                    <th>Last Login</th>



                                    </tr>
                                </thead>
                                <tbody id="stocktableBody">
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-4 stockLabels">
                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <label for="status">User ID</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="UserID">
                            </div>
                            <div class="input-field">
                                <label for="status">User Name</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="UserName">
                            </div>

                            <div class="input-field">
                                <label for="status">Password</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Password">
                            </div>

                            <div class="input-field">
                                <label for="status">Designation</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Designation">
                            </div>

                            <div class="input-field">
                                <label for="status">Enable</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Enable">
                            </div>

                            <div class="input-field">
                                <label for="status">Last Login</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="LastLogin">
                            </div>




                            <div class="st-button  " style="margin-top: 15px;">
                                <button class="btn btn-success" id="edit" onclick="editUsers()">Update </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>








    <!--end::Demo Panel-->

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
            $('#usertable').DataTable();
        });

    </script>
    <!--end::Global Theme Bundle-->

    <script>
        function getUsers() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;

                    var table;
                    var a = JSON.parse(data);

                    table = $('#usertable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].UserID, a[i].UserName, a[i].Password, a[i].Designation, a[i]
                            .Enable, a[i].LastLogin
                        ]);
                    });


                    table.draw();

                }
            };

            xhttp.open("GET", "./getUsers/", true);
            xhttp.send();
        }
        $("#usertable").on('click', 'tr', function () {

            document.getElementById("UserID").value = this.cells[0].innerText;
            document.getElementById("UserName").value = this.cells[1].innerText;
            document.getElementById("Password").value = this.cells[2].innerText;
            document.getElementById("Designation").value = this.cells[3].innerText;
            document.getElementById("Enable").value = this.cells[4].innerText;
            document.getElementById("LastLogin").value = this.cells[5].innerText;


        });

        function editUsers() {
            var UID = document.getElementById("UserID").value;
            var username = document.getElementById("UserName").value;
            var pass = document.getElementById("Password").value;
            var desgination = document.getElementById("Designation").value;
            var enable = document.getElementById("Enable").value;
            var lastlogin = document.getElementById("LastLogin").value;

            var edituser = [UID, username, pass, desgination, enable, lastlogin];

            var EU = JSON.stringify(edituser);
            alert(EU);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("User " + this.responseText + " is Updated");

                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editUsers/" + EU, true);
            xhttp.send();

        }

    </script>








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
            $('#usertable').DataTable();
        });

    </script>
    <!--end::Global Theme Bundle-->

    <script>
        function getUsers() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;

                    var table;
                    var a = JSON.parse(data);

                    table = $('#usertable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].UserID, a[i].UserName, a[i].Password, a[i]
                            .Designation, a[i].Enable, a[i].LastLogin
                        ]);
                    });
                    table.draw();

                }
            };

            xhttp.open("GET", "./getUsers/", true);
            xhttp.send();
        }
        $("#usertable").on('click', 'tr', function () {
            document.getElementById("UserID").value = this.cells[0].innerText;
            document.getElementById("UserName").value = this.cells[1].innerText;
            document.getElementById("Password").value = this.cells[2].innerText;
            document.getElementById("Designation").value = this.cells[3].innerText;
            document.getElementById("Enable").value = this.cells[4].innerText;
            document.getElementById("LastLogin").value = this.cells[5].innerText;


        });

        function editUsers() {
            var UID = document.getElementById("UserID").value;
            var username = document.getElementById("UserName").value;
            var pass = document.getElementById("Password").value;
            var desgination = document.getElementById("Desgination").value;
            var enable = document.getElementById("Enable").value;
            var lastlogin = document.getElementById("LastLogin").value;

            var edituser = [UID, username, pass, desgination, enable, lastlogin];

            var EU = JSON.stringify(edituser);
            alert(EU);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("User " + this.responseText + " is Updated");

                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editUsers/" + EU, true);
            xhttp.send();

        }

    </script>

</body>

</html>
