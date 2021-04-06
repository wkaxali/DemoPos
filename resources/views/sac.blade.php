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


    <title>Sales And Comission</title>
    <style>
        .mainSales {
            display: flex;
            justify-content: space-between;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .unit {
            background-color: #fec73c;
            color: #ffffff;
        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid #333;
            /* padding: 10px ; */
            border-radius: 10px;

        }

        .myOwnRow-left {
            width: 50%;
            padding: 10px;
        }

        .myOwnROw {
            width: 50%;
            border-left: 1px solid #333;
            padding: 10px;
        }

        a {
            text-decoration: underline !important;
        }

        label {
            width: 150px !important;
        }

        .checkbox-1 {
            display: none;
        }

        .checkbox-3 {
            display: none;
        }

        .checkMain-5 {
            display: none;
        }

        .myMain {
            display: inline-block;
        }

        #checkboxe-1 {}

        /* #BankLabel{
            display: block;
        } */
        /* .myOwnRow-left label {
            width: 210px !important;
        } */
        .permanentLabel label {

            width: 250px !important;
        }

        .checkMain-5 label {
            width: 270px !important;
        }

        .checkbox-7 {
            display: none;
        }

        .checkbox-9 {
            display: none;
        }

        .checkbox-11 {
            display: none;

        }

        .sales-1 input[type="text"]:focus,
        .sales-1 input[type="password"]:focus,
        .sales-1 input[type="datetime"]:focus,
        .sales-1 input[type="datetime-local"]:focus,
        .sales-1 input[type="date"]:focus,
        .sales-1 input[type="month"]:focus,
        .sales-1 input[type="time"]:focus,
        .sales-1 input[type="week"]:focus,
        .sales-1 input[type="number"]:focus,
        .sales-1 input[type="email"]:focus,
        .sales-1 input[type="url"]:focus,
        .sales-1 input[type="search"]:focus,
        .sales-1 input[type="tel"]:focus,
        .sales-1 input[type="color"]:focus,
        .sales-1 .uneditable-input:focus {
            border-color: #fec73c;
            box-shadow: 0 1px 1px #e61d2f inset, 0 0 8px #fec73c;
            outline: 0 none;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Sales And Comission</h4>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Status</label>
                    <select  class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>
                    <button class="btn">+</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <label for="status">Model</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="Cash">
                            </div>

                            <div class="input-field">
                                <label for="status">Chassis Number </label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="137000">
                            </div>
                            <div class="input-field">
                                <label for="status">Engine Number</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="10000">
                            </div>
                            <div class="input-field">
                                <label for="status">Status</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="0">
                            </div>

                            <div class="input-field">
                                <label for="status">Price + tax</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="138000">
                                <a style="font-size: 14px;" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">View Details</a>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="status">Discount</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="0">
                            </div>
                            <div class="input-field">
                                <label for="status">Net Total</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="0">
                            </div>
                        </div>
                        <div class="myOwnROw">





                            <div class="input-field">
                                <label for="status">Client Name</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="PEL">
                            </div>
                            <div class="input-field">
                                <label for="status">Address</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name">
                            </div>
                            <div class="input-field">
                                <label for="status">contact</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="923124617477">
                            </div>
                            <div class="input-field">
                                <label for="status">Manager</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="name" value="Mushtaq ">
                            </div>


                        </div>
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
</body>

</html>
