<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <style>
        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 70px;
            border-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }



        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 15px;
            padding: 10px 20px;
            margin: 0px auto 15px auto;
        }

        .form-control {
            width: 250px !important;
        }


        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #0a549d;
            border: none;
            color: white;
            margin-top: 20px;
            /* width: 100px; */
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }




        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84%;
            }
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 3px 0px;


        }

        label {
            width: 150px;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84%;
        }

        .update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .print {
            width: 77px;
        }

        .inner-block {
            padding: 3em 2em 0em 2em;
        }

        @media only screen and (max-width: 1440px) {
            .inner-block {
                padding: 1em 2em 0em 2em;
            }
        }

        @media only screen and (max-width: 768px) {
            .form-control {
                width: 180px !important;
            }

            .addCut{
font-size: 25px;
margin-bottom: 50px;
            }
            .registration-form {
            padding: 60px 0;
            /* background-color: #fff; */

        }
        }

    </style>
    <title>Generate Barcode</title>
</head>

<body>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Add Customer</h2>

                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="username"
                                            placeholder="Customer ID">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control item" autocomplete="OFF"
                                            id="password" placeholder="Customer Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF"
                                            id="phone-number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="birth-date"
                                            placeholder="Birth Date">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF"
                                            id="phone-number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="birth-date"
                                            placeholder="Birth Date">
                                    </div>

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account">Add</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @include('sidenavbar')


        <div class="clearfix"></div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#myTables').DataTable();
        });
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute",

                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative",

                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>
</body>

</html>
