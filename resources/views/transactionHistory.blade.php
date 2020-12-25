<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Transaction History</title>
    <style>
        .ThirdColor {
            background-color: blue;
            height: 30px;
            border-radius: 10px;
        }

        .FourthColor {
            background-color: Green;
            height: 30px;
            border-radius: 10px;
        }

        label {
            width: 100px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Transaction History</h3>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor mt-1 mb-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="transactionTable">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>Sale ID</th>
                                    <th>Invoice Type</th>
                                    <th>Total</th>
                                    <th>Amount Paid By Customer</th>
                                    <th>Manager</th>

                                    <th>Date</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#21</td>
                                    <td>Cash</td>
                                    <td>1230000</td>
                                    <td>1200000</td>
                                    <td>30000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Cash</td>
                                    <td>1230000</td>
                                    <td>1200000</td>
                                    <td>30000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Written</td>
                                    <td>5000</td>
                                    <td>10000</td>
                                    <td>20000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Written</td>
                                    <td>5000</td>
                                    <td>10000</td>
                                    <td>20000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Written</td>
                                    <td>5000</td>
                                    <td>10000</td>
                                    <td>20000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Written</td>
                                    <td>5000</td>
                                    <td>10000</td>
                                    <td>20000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>#21</td>
                                    <td>Written</td>
                                    <td>5000</td>
                                    <td>10000</td>
                                    <td>20000</td>
                                    <td>10/10/2020</td>
                                    <td>5000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor mt-1 mb-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>From Date :</td>
                            <td>24/11/2020</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 offset-md-4">
                    <table>
                        <tr>
                            <td>To Date :</td>
                            <td>24/11/2020</td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="Total">Total Amount</label>
                    <input type="text" name="total" value="1000" id="total">
                </div>
                <div class="col-md-4 offset-md-4">
                    <label for="Total">Paid by MM</label>
                    <input type="text" name="total" value="1000" id="total"><br>
                    <label for="Total">Paid by Customer</label>
                    <input type="text" name="total" value="1000" id="total">
                    <label for="Total">Balance</label>
                    <input type="text" name="total" value="1000" id="total">


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>The Amount <strong>24,600</strong> is payable by the company to MM </h3>
                </div>
            </div>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right offset-md-8">
                    <button class="btn btn-warning">Print</button>
                    <button class="btn btn-danger">Close</button>
                </div>
            </div>
        </div>
    </footer>







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
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>