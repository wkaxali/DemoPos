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
 
    <title>Book Order</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .receivingMain {
            /* border: 1px solid #aaaaaa; */
            border-radius: 10px;
            height: 550px;
            /* overflow: auto; */
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
                <div class="col-md-12 mt-3 text-center">
                    <h3>View Stock</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="receivingMain">


                        <div class="receivingTable">
                            <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Product Id</th>
                                        <th>Model</th>
                                        <th>Status</th>
                                        <th>Chasis No</th>
                                        <th> Engine No</th>
                                        <th>Sale Price</th>
                                        <th>Details</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(211, 211, 19); font-weight: 700;">On Hold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: red; font-weight: 700;">In Stock</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(0, 19, 128); font-weight: 700;">Pending</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(128, 41, 0); font-weight: 700;">In Progress</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: green; font-weight: 700;">Sold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(211, 211, 19); font-weight: 700;">On Hold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(211, 211, 19); font-weight: 700;">On Hold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: red; font-weight: 700;">In Stock</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(0, 19, 128); font-weight: 700;">Pending</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(128, 41, 0); font-weight: 700;">In Progress</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: green; font-weight: 700;">Sold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1245</td>
                                        <td>Fc130</td>
                                        <td style="color: rgb(211, 211, 19); font-weight: 700;">On Hold</td>
                                        <td>E56921</td>
                                        <td>32FNK</td>
                                        <td>1423,000</td>
                                        <td><a href="salesandcommission.html">View Details</a></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
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
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>