<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>View Customers</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .printBtns {

            background-color: #ffffff;
            border: 1px solid#0a549d;
            color: #0a549d;
            transition: .7s;
        }

        .printBtns:hover {
            background-color: #0a549d;
            border-color: #0a549d;
            color: #ffffff;
            transition: .7s;
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 550px;
            padding: 10px;
            /* overflow: auto; */
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            padding: 10px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }

        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 5px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Customers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <input type="checkbox" name="" id="">
                    <label for="Old">Old Customers</label>

                </div>
                <div class="col-md-4 offset-md-2">
                    <input type="checkbox" name="" id="">
                    <label for="Old">New Leads</label>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">



                    <div class="receivingTable">
                        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Interested In</th>
                                    <th> Who Meet</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 offset-md-8 text-right">
                    <button class="btn printBtns">
                        Print
                    </button>
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>