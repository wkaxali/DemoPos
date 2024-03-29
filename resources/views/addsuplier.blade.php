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
                width: 81%;
            }
        }

        .left-content {
            float: right;
            width: 81%;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 3px 0px;


        }


        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 81%;
        }

        .Update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .endButtons {
            margin-top: 166px;
        }

        .endButtons button {
            width: 100px;
        }






        img {
            border-radius: 10%;
            height: 150px;
            width: 150px;
        }

        .mainImg {
            margin-top: 10px;
        }

        label {
            width: 200px;
        }

        .input-groups {
            margin: 20px 0px;

        }

        .endButtons .update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .endButtons .save {
            background-color: #0a549d;
            color: #ffffff;
        }

        .mainInputs {
            margin: 0 auto !important;
        }
        @media only screen and (max-width: 600px) {
         

            .inner-block {
                padding: .5em 1em 2em 1em;
            }

           
        }
    </style>
    <title>Add Supplier</title>
</head>

<body>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>Add Supplier</h3>

                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mainInputs">
                                <div class="input-groups">
                                    <label for="">Supplier ID</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                                <div class="input-groups">
                                    <label for="">Supplier Name</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                                <div class="input-groups">
                                    <label for="">Address</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                                <div class="input-groups">
                                    <label for="">CNIC</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                                <div class="input-groups">
                                    <label for="">Status</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                                <div class="input-groups">
                                    <label for="">Category</label>
                                    <select class="selectpicker form-control" data-live-search="true" id="accounts">

                                    </select>
                                </div>
                                <div class="input-groups">
                                    <label for="">Balance</label>
                                    <input type="text"
                                        style="display: inline-block !important; width: 200px !important;"
                                        class="form-control" name="" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mainImg text-center">
                                <div class="centerImg">
                                    <img src="https://scontent.flhe3-1.fna.fbcdn.net/v/t1.0-0/p206x206/70200548_545063982708579_5871539444061831168_o.jpg?_nc_cat=105&ccb=2&_nc_sid=da31f3&_nc_eui2=AeE_MjUK7AzlckHsL2MhUPsk8zBFb5t2DM_zMEVvm3YMz8X_aqbbMzYr8uFgghjeSwLd-MOjBkBnEHXSYLXDRR2k&_nc_ohc=o1_1vrV8TU4AX8GSplI&_nc_ht=scontent.flhe3-1.fna&tp=6&oh=76f9151a04bb19e4750fc37eac0f65ac&oe=602E9AF8"
                                        alt="">
                                </div>
                                <div class="headings mt-2">
                                    <label class="btn btn-default" style="text-decoration: underline; color: #0a549d;">
                                        Upload Image <input type="file" hidden>
                                    </label> </div>
                                <div class="endButtons">
                                    <button class="btn save">Save</button>
                                    <button class="btn Update">Update</button>
                                </div>
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
