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


    <title>ATTANDANCE</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .dropdown.bootstrap-select.form-control-1 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .dropdown.bootstrap-select.form-control-2 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        label {
            width: 145px;
        }

        th,
        td {
            text-align: center;
        }

        .customButtons button {
            width: 150px;
            margin: 10px 15px;
        }

        .customButtons {
            text-align: right;
        }

        #TblSection label {
            width: auto !important;

        }

        .customClassBorder {
            border: 1px solid #333;
            padding: 10px 0px;
            border-radius: 20%;
        }

        .customClassBorder label {
            width: 70px !important;
        }

        th,
        td {
            padding: 2px !important;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>ATTANDANCE VIEW</h3>
                </div>
            </div>
        </div>
    </main>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <label for="">Employee ID</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>

                </div>

                <div class="col-md-5 ">
                    <label for="">Name</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>

                </div>
            </div>
            <div class="row customClassBorder my-3">
                <div class="col-md-5 offset-md-1">
                    <h4>Mohsin Jabbar</h4>
                </div>
                <div class="col-md-5">
                    <label for="">Month</label>
                    <select class="selectpicker form-control-1 form-control" data-live-search="true" id="category"
                        tabindex="null">
                        <option value=1>January</option>
                        <option value=2>Febraury</option>
                        <option value=3>March</option>
                        <option value=4>April</option>
                        <option value=1>May</option>
                        <option value=2>June</option>
                        <option value=3>July</option>
                        <option value=4>August</option>
                        <option value=1>Sepetember</option>
                        <option value=2>October</option>
                        <option value=3>November</option>
                        <option value=4>December</option>





                    </select>
                    <label for="">Year</label>
                    <select class="selectpicker form-control-1 form-control" data-live-search="true" id="category"
                        tabindex="null">
                        <option value=1>2020</option>
                        <option value=2>2019</option>
                        <option value=3>2018</option>
                        <option value=4>2017</option>


                    </select>
                    <button style="height: 25px; margin-top: -5px;" class="btn btn-info"></button>

                </div>


            </div>
        </div>
    </header>
    <section id="TblSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>01/10/2020</td>
                                <td>8:23pm</td>
                                <td>10:00pm</td>
                                <td> <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="category"
                                        tabindex="null">
                                        <option value=1>Late</option>
                                        <option value=2>Ontime</option>
                                        <option value=3>Absent</option>
                                        <option value=4>Share Leave</option>
                                        <option value="5">Ontime</option>


                                    </select></td>
                                <td>+</td>
                            </tr>
                        </tbody>



                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 customButtons offset-md-6">
                    <button style="background-color: #e61d2f;color: #ffffff;" class="btn ">Update</button>
                    <button style="background-color: #0a549d;color: #ffffff;" class="btn ">Print</button>
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
