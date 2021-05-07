<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Add Accounts</title>



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

<body >
<div class="container">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Add Accounts</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section >
   
              
                <div class="col-lg-5 stockLabels">
                    <div class="input-field">
                        <label for="status">CustomerID</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="CID">
                    </div>
                    <div class="input-field">
                        <label for="status">Account Name</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="customerName">
                    </div>

            

                    <div class="input-field">
                        <label for="status">Account Number</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="Contact" required>
                    </div>

                    <!-- <div class="input-field">
                        <label for="status">Address</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="Address" required>
                    </div>

                    <div class="input-field">
                        <label for="status">CNIC</label>
                        <input type="text" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            value="" id="CNIC" required>
                    </div>
 -->

                    <div class="input-field">
                        <label for="status">Balance</label>
                        <input type="email" autocomplete="OFF" class="form-control"
                            style="display: inline-block !important; height: 30px !important; width: 183px;" name="name"
                            id="balance" required>
                    </div>

            
<br>
                    <button class="btn btn-success" onclick="Add()"  style=" width: 183px; margin-left:200px;">Add </button>


              
    </section>
</div>


    <script>
      function Add() {
                            var CID = document.getElementById("CID").value;
                            var customerName = document.getElementById("customerName").value;
                            var contact = document.getElementById("Contact").value;
                            var balance = document.getElementById("balance").value;
                          
            var array = [CID, customerName, contact,balance];
            var UC = JSON.stringify(array);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    alert(this.response);

                }
            };
            xhttp.open("GET", "./AddAccounts/" + UC, true);

        

            xhttp.send();

        }

    </script>
</body>

</html>
