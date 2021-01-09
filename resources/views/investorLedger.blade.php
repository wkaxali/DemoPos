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


    <title>Investors Ledger</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        #LabelSection label {
            width: 100px;
        }

        th,
        td {
            text-align: center;
        }

        #Summary label {
            width: 225px;
        }

        .summaryLabels {
            float: right !important;
            margin-top: 20px !important;
        }

        .footerButtons {
            float: right !important;
        }

        #myTable th,
        td {
            padding: 2px !important;
        }

        .customBorder {
            border: 1px solid #333;
            border-radius: 10px;
            background-color: #e61d2f;
            margin: 10px 0px;
        }

        .borderCustom {
            border: 1px solid #333;
            border-radius: 10px;
        }

        .customBorder h4 {
            color: #ffffff;
        }

        .borderCustom input {
            margin: 3px 0px;
        }

        a {
            text-decoration: underline !important;
        }

        .summary-2 label {
            width: 150px !important;
        }

        .summary-2 {
            margin-top: 35px;

        }

        #mainRowGame {
            pointer-events: none !important;
        }

    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row  my-2">
                <div class="col-md-12 text-center">
                    <h4>Investors Sales Ledger</h4>
                </div>
            </div>
        </div>
    </main>
    <section id="LabelSection">
        <div class="container">
            <div class="row borderCustom">
                <div class="col-md-5 offset-md-1">
                    <label for="">Name</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select><br>
                    <label for="">Budget</label>
                    <input type="text" class="form-control" style="width: 200px; display: inline-block;" value="15Lac"
                        name="" id="">
                </div>
                <div class="col-md-5">
                    <label for="">From</label>
                    <input type="date" name="" style="width: 200px; display: inline-block; margin: 5px 0px;"
                        class="form-control" id="">
                    <br>
                    <label for="">To</label>
                    <input type="date" name="" class="form-control" style="width: 200px; display: inline-block;" id="">

                </div>
                <div class="col-md-1" style="margin-left: -40px;margin-top: 2px; ">
                    <button type="button" style="height: 90px; background-color: #e61d2f; color: #ffffff;" class="btn "
                        data-toggle="modal" data-target=".bd-example-modal-lg">Assign
                        Data</button>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th>Sale ID</th>
                                <th>Modal</th>
                                <th>Total Cost</th>
                                <th>Sale Pr</th>
                                <th>Share</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20242</td>
                                <td>2021</td>
                                <td>13,000,000</td>
                                <td>14,500,300</td>
                                <td>Waqas</td>
                                <td>Received</td>
                                <td><a href="#">Details</a></td>

                            </tr>
                            <tr>
                                <td>20242</td>
                                <td>2021</td>
                                <td>13,000,000</td>
                                <td>14,500,300</td>
                                <td>Waqas</td>
                                <td>Received</td>
                                <td><a href="#">Details</a></td>

                            </tr>
                            <tr>
                                <td>20242</td>
                                <td>2021</td>
                                <td>13,000,000</td>
                                <td>14,500,300</td>
                                <td>Waqas</td>
                                <td>Received</td>
                                <td><a href="#">Details</a></td>

                            </tr>
                            <tr>
                                <td>20242</td>
                                <td>2021</td>
                                <td>13,000,000</td>
                                <td>14,500,300</td>
                                <td>Waqas</td>
                                <td>Received</td>
                                <td><a href="#">Details</a></td>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row customBorder">
                <div class="col-md-4">
                    <h4>SUMMARY</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="Summary">
        <div class="container">
            <div class="row borderCustom">
                <div class="col-md-5">
                    <div class="summaryLabels">
                        <label for="">Total Profit</label>
                        <input type="text" value="11,33,000" class="form-control"
                            style="display: inline-block; width: 200px;" name="" id=""><br>

                        <label for="">Capital</label>
                        <input type="text" value="80,000,000" class="form-control"
                            style="display: inline-block; width: 200px;" name="" id=""><br>

                        <label for="">Net Total</label>
                        <input type="text" value="91,33,000" class="form-control"
                            style="display: inline-block; width: 200px;" name="" id=""><br>



                    </div>

                </div>
                <div class="col-md-5 summary-2 offset-md-2">
                    <label for="">Amount Received By</label>
                    <input type="text" value="65,000,00" class="form-control"
                        style="display: inline-block; width: 200px;" name="" id=""><br>

                    <label for="">Remaining</label>
                    <input type="text" value="35,11,200" class="form-control"
                        style="display: inline-block; width: 200px;" name="" id=""><br>
                </div>
            </div>

        </div>



    </section>
    <section>

     


        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sales Ledger</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table style="width: 100%;" class=" table table-bordered" id="myTables">
                            <thead>
                                <tr id="mainRowGame">
                                    <th>Sale ID</th>
                                    <th>Modal</th>
                                    <th>Total Cost</th>
                                    <th>Sale Pr</th>
                                    <th>Share</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20242</td>
                                    <td>2021</td>
                                    <td>13,000,000</td>
                                    <td>14,500,300</td>
                                    <td>Waqas</td>
                                    <td>Received</td>
                                    <td><a href="#">Details</a></td>

                                </tr>
                                <tr>
                                    <td>20242</td>
                                    <td>2021</td>
                                    <td>13,000,000</td>
                                    <td>14,500,300</td>
                                    <td>Waqas</td>
                                    <td>Received</td>
                                    <td><a href="#">Details</a></td>

                                </tr>
                                <tr>
                                    <td>20242</td>
                                    <td>2021</td>
                                    <td>13,000,000</td>
                                    <td>14,500,300</td>
                                    <td>Waqas</td>
                                    <td>Received</td>
                                    <td><a href="#">Details</a></td>

                                </tr>
                                <tr>
                                    <td>242</td>
                                    <td>2021</td>
                                    <td>13,000,000</td>
                                    <td>14,500,300</td>
                                    <td>Waqas</td>
                                    <td>Received</td>
                                    <td><a href="#">Details</a></td>

                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <script>
        $("#myTables").on('click', 'tr', function () {




            var cell1 = this.cells[0].innerText;
            var cell2 = this.cells[1].innerText;
            var cell3 = this.cells[2].innerText;
            var cell4 = this.cells[3].innerText;
            var cell5 = this.cells[4].innerText;
            var cell6 = this.cells[5].innerText;
            var cell7 = this.cells[6].innerText;

            var addtable = document.getElementById("myTable");
            var row = addtable.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);
            var mcell3 = row.insertCell(2);
            var mcell4 = row.insertCell(3);
            var mcell5 = row.insertCell(4);
            var mcell6 = row.insertCell(5);
            var mcell7 = row.insertCell(6);
            var mcell8 = row.insertCell(7);


            mcell1.innerHTML = cell1;
            mcell2.innerHTML = cell2;
            mcell3.innerHTML = cell3;
            mcell4.innerHTML = cell4;
            mcell5.innerHTML = cell5;
            mcell6.innerHTML = cell6;
            mcell7.innerHTML = cell7;







        });

    </script>
</body>

</html>
