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
            /* overflow: auto; */
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
                    <input type="text" name="" value="1279" id="">
                    <button class="btn btn-info"></button>
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
                                        <th>Eng No</th>
                                        <th>Tranport Charges</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Forland C12</td>
                                        <td>Chassis No</td>
                                        <td>E56921</td>
                                        <td>2500</td>
                                        <td> <select
                                                class="selectpicker form-control" data-live-search="true" id="category"
                                                tabindex="null">
                                                <option value=1>Received</option>
                                                <option value=2>Not Received</option>
                                                <option value=3>In Process</option>
                                                <option value=4>Pending</option>


                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Forland C12</td>
                                        <td>112231Fn</td>
                                        <td>E56921</td>
                                        <td>2500</td>
                                        <td><select  
                                                class="selectpicker form-control" data-live-search="true" id="category"
                                                tabindex="null">
                                                <option value=1>Received</option>
                                                <option value=2>Not Received</option>
                                                <option value=3>In Process</option>
                                                <option value=4>Pending</option>


                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Forland C12</td>
                                        <td>1132421Fn</td>
                                        <td>C130816</td>
                                        <td>2100</td>
                                        <td><select  
                                                class="selectpicker form-control" data-live-search="true" id="category"
                                                tabindex="null">
                                                <option value=1>Received</option>
                                                <option value=2>Not Received</option>
                                                <option value=3>In Process</option>
                                                <option value=4>Pending</option>


                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Forland C12</td>
                                        <td>Pending</td>
                                        <td>Pending</td>
                                        <td>Null</td>
                                        <td><select  
                                                class="selectpicker form-control" data-live-search="true" id="category"
                                                tabindex="null">
                                                <option value=1>Received</option>
                                                <option value=2>Not Received</option>
                                                <option value=3>In Process</option>
                                                <option value=4>Pending</option>


                                            </select></td>
                                    </tr>
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
                        <a class="btn btn-update" href="viewStock.html">Update</a>
                      
                     
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

</body>

</html>