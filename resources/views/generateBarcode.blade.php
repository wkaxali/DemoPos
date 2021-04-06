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
            background-color: #fec73c;
            color: #ffffff;
        }

        .print {
            width: 77px;
        }

        .row {
            margin: 15px 0px;
        }

        .btn:hover {
            color: #ffffff;
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
                        <div class="col-md-12 text-center">
                            <h1>Generate Barcode</h1>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Product</label>
                            <select 
                                class="selectpicker form-control" data-live-search="true" id="costComissionHeads">
                            </select>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <label for="">Product Id</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Company</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">

                        </div>
                        <div class="col-md-5 offset-md-1">
                            <label for="">Sale Price</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Category</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">

                        </div>
                        <div class="col-md-5 offset-md-1">
                            <label for="">Stock Available</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Barcode</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">

                        </div>
                        <div class="col-md-3 offset-md-3">
                            <button class="btn update" style="margin-left: -10px;">Update</button>
                            <button class="btn print">Print</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Print Quotation</label>
                            <input type="text" style="width: 200px !important; display: inline-block !important;"
                                class="form-control" name="" id="">

                        </div>
                        <div class="col-md-5 offset-md-1">
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
