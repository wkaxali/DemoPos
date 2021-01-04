<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <title>Expense</title>
    <style>
        .footerBtns {
            float: right !important;
            margin-top: 10px;
        }

        .footerBtns button {
            width: 100px;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .mainButtons button {
            width: 150px;
        }

        th,
        td {
            text-align: center;
        }

        .mainTableEnd {
            float: right !important;
            margin-top: 10px;
        }

        .customBorder {
            border: 1px solid #333;
            border-radius: 10px;
            background-color: #0a549d;
            margin: 10px 0px;
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .expenseButtons {
            text-align: right;
            margin-top: 10px;
        }

        .expenseTable {
            border: 1px solid #333;
            height: 400px;
            overflow: auto !important;
            border-radius: 10px;
        }

        .borderCustom-2 {
            border: 1px solid #333;
            border-radius: 10px;
        }

    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Expense</h4>
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row borderCustom-2">
                        <div class="col-md-5 offset-md-1">
                            <h5>Current Expenses</h5>
                            <input type="tel" value="43,360" name="" id="">
                            <h5>From Dec 25 to Jan 20</h5>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            <h5>Your Expenses</h5>
                            <input type="tel" value="50,000" name="" id="">
                            <div class="mainButtons my-1">
                                <button style="background-color: #0a549d; color: #ffffff;" class="btn ">Add</button>
                                <button style="background-color: #e61d2f; color: #ffffff;" class="btn ">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row customBorder">
                <div class="col-md-4">
                    <h4>Add Expense</h4>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" style="display: inline-block; width: 192px;"
                                value="230" name="" id=""><br>
                            <label for="">Paid To</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                                <option value=1>Mohsin</option>
                                <option value=2>Ali</option>
                                <option value=3>Malik</option>
                                <option value=4>Rayyan</option>


                            </select>
                            <button class="btn btn-info">+</button><br>
                            <label for="">Paid To</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                                <option value=1>Mamu</option>
                                <option value=2>Ali</option>
                                <option value=3>Malik</option>
                                <option value=4>Rayyan</option>


                            </select>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            <label for="">Expense Head</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                                <option value=1>Bill</option>
                                <option value=2>Document</option>
                                <option value=3>Malik</option>
                                <option value=4>Rayyan</option>


                            </select>
                            <button class="btn">+</button>
                            <br>
                            <label style="width: 100px !important;" for="">Date</label>
                            <input type="date" style="width: 240px;" name="" id=""><br>
                            <div class="expenseButtons">
                                <button class="btn">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12">
                    <h4>Today's Expense</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="expenseTable">
                        <table class="table-bordered table-striped table-hover" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Expense</th>
                                    <th>Paid To</th>
                                    <th>Paid By</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20-1-2020</td>
                                    <td>13,000</td>
                                    <td>Transport</td>
                                    <td>Mohsin</td>
                                    <td>Waqas</td>
                                    <td>Good Deal</td>
                                    <td>&times;</td>
                                </tr>
                                <tr>
                                    <td>20-5-2020</td>
                                    <td>13,000</td>
                                    <td>Transport</td>
                                    <td>Ali Asghar Malik</td>
                                    <td>Waqas</td>
                                    <td>Good Deal</td>
                                    <td>&times;</td>

                                </tr>
                                <tr>
                                    <td>25-1-2020</td>
                                    <td>13,000</td>
                                    <td>Transport</td>
                                    <td>Usama Mehar</td>
                                    <td>Waqas</td>
                                    <td>Good Deal</td>
                                    <td>&times;</td>

                                </tr>
                                <tr>
                                    <td>20-1-2020</td>
                                    <td>13,000</td>
                                    <td>Transport</td>
                                    <td>Mohsin</td>
                                    <td>Waqas</td>
                                    <td>Good Deal</td>
                                    <td>&times;</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="mainTableEnd">
                        <label for="">Total Expense</label>
                        <input type="text" value="11,300" name="" id="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-7">
                    <div class="footerBtns">
                        <button class="btn">Close</button>
                        <button class="btn">Print</button>
                        <button class="btn">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>






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
