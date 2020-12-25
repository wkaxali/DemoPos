<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <title>Sales And Commission</title>

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
            background-color: #e61d2f;
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
            border-color: #e61d2f;
            box-shadow: 0 1px 1px #e61d2f inset, 0 0 8px #e61d2f;
            outline: 0 none;
        }
    </style>

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Comission & Taxes</h4>
                </div>
            </div>
        </div>

    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainSales">
                        <div class="sales-1">
                            <label style="width: 100px !important;" for="">Status</label>
                            <select class="selectpicker form-control" data-live-search="true" id="category"
                                tabindex="null">
                                <option value=1>Sold</option>
                                <option value=2>In Stock</option>
                                <option value=3>Pending</option>
                                <option value=4>Delivered</option>


                            </select>

                        </div>
                        <div class="sales-1">
                            <button class="btn unit ">Sold Unit</button>
                        </div>
                        <div class="sales-1">
                            <label for="">Profit / Loss</label>
                            <input type="text" class="form-control" style="display: inline-block; width: 200px;" name=""
                                id="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
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
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left permanentLabel">


                            <input type="checkbox" name="" id="checkboxe-1"> <label for="">Bank Person</label>
                            <div class="checkbox-1">

                                <input type="text" name="" id="">
                            </div><br> <br>

                            <input type="checkbox" name="" id="checkboxe-2"> <label for="">Sales
                                Per Commission</label>
                            <div class="checkbox-3">

                                <input type="text" name="" id="">
                            </div>
                            <br><br>
                            <input type="checkbox" name="" id="checkboxe-3"> <label for="">Third
                                Party Per Commission</label>
                            <div class="checkMain-5">
                                <div class="checkbox-5">
                                    <label for="">Remarks</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="checkbox-6">
                                    <label for="">Amount</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>



                        </div>
                        <div class="myOwnROw">

                            <input type="checkbox" name="" id="checkboxe-4"> <label for="">Promotion
                                Charges</label><br><br>
                            <div class="checkbox-7">
                                <input type="text" name="" id="">
                            </div>

                            <input type="checkbox" name="" id="checkboxe-5"> <label for="">PRA
                                %</label><br><br>
                            <div class="checkbox-9">
                                <input type="text" name="" id="">
                            </div>

                            <input type="checkbox" name="" id="checkboxe-6"> <label for="">Nothing</label><br><br>
                            <div class="checkbox-11">
                                <input type="text" name="" id="">
                            </div>



                        </div>

                    </div>
                </div>
    </section>
    <br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Total Cost</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Total Sale Price</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Profit</label>
                    <input type="text" class="form-control" name="" id="">
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
    <script>
        $(document).ready(function () {
            $("#checkboxe-1").click(function () {
                $(".checkbox-1").toggleClass("myMain");


            });

            $("#checkboxe-2").click(function () {
                $(".checkbox-3").toggleClass("myMain");
            });

            $("#checkboxe-3").click(function () {
                $(".checkMain-5").toggleClass("myMain");
            });
            $("#checkboxe-4").click(function () {
                $(".checkbox-7").toggleClass("myMain");
            });

        });
    </script>
</body>

</html>