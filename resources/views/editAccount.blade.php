<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Edit Account</title>


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

<body onload="getAccountsData()">
<div class="container">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Edit Account</h3>
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
                        <table style="width: 100%; text-align:center;" id="stocktable" >
                            <thead>

                                <th>Account ID</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Balance</>
                            
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
                        <label for="status">Account ID</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="AID" readonly>
                    </div>
                    <div class="input-field">
                        <label for="status">Account Name</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="AccountName">
                    </div>

            

                    <div class="input-field">
                        <label for="status">Account Number</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="AccountNumber" required>
                    </div>

                    <div class="input-field">
                        <label for="status">Balance</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="Balance" required>
                    </div>

            
<br>
                    <button class="btn btn-success" onclick="editAccounts()">Update </button>


                </div>
            </div>
        </div>
    </section>
</div>









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
                        function getAccountsData() {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    var data = this.responseText;
                                   
                                    var table;
                                    var a = JSON.parse(data);

                                    table = $('#stocktable').DataTable();

                                    $.each(a, function (i, item) {

                                        table.row.add([a[i].AID, a[i].AccountName, a[i].AccountNumber, a[i].Balance
                                        ]);
                                    });
                                    
                                    table.draw();
                           
                                }
                            };

                            xhttp.open("GET", "./getAccountsData/", true);
                            xhttp.send();
                        }
                        $("#stocktable").on('click', 'tr', function () {
                            document.getElementById("AID").value = this.cells[0].innerText;
                            document.getElementById("AccountName").value = this.cells[1].innerText;
                            document.getElementById("AccountNumber").value = this.cells[2].innerText;
                            document.getElementById("Balance").value = this.cells[3].innerText;
                         
                        });

                        function editAccounts() {
                            var AID = document.getElementById("AID").value;
                            var AccountName = document.getElementById("AccountName").value;
                            var AccountNumber = document.getElementById("AccountNumber").value;
                            var Balance = document.getElementById("Balance").value;
                          
                            if (AccountName == "" || AccountNumber == "" || Balance == "") {      

                            alert("please fill all fields");
                                }  else{
                            var editAccount = [AID, AccountName, AccountNumber, Balance
                            ]};

                            var EA = JSON.stringify(editAccount);
                            
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {

                                    alert("Account " + this.responseText + " is Updated");


                                }
                            };

                            // var MenuID=$('#Menus').find(":selected").val();
                            xhttp.open("GET", "./editAccounts/" + EA, true);
                            xhttp.send();

                        }

                    </script>

</body>

</html>
