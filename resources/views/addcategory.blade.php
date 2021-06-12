<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <style>
        .print {
            background-color: #0a549d;
            color: aliceblue;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84% !important;
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84% !important;
            }
        }

        .mainCat label {
            width: 150px;
        }

        .new {
            background-color: #0a549d;
            color: #fff;
        }

        .delete {
            background-color: #e61d2f;
            color: #fff;
        }

        .edit {
            border: 1px solid #0a549d;
        }

        .edit:hover {
            border: 1px solid #0a549d;
            background-color: #0a549d;
            color: #fff;

        }

        .add {
            background-color: #0a549d;
            color: #ffffff;
        }

        .btn:hover {
            color: #fff;
        }

        .ctrlTable {
            overflow: auto;
        }

    </style>
    <title>Add Category</title>
</head>

<body>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Add Category</h2>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="row">
                        <div class="col-md-4 offset-md-2 mainCat">
                            <label for="">Product Categories</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; width: 200px;" name="" id="">
                        </div>
                        <div class="col-md-4 text-right">
                            <button class="btn new">Add New</button>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="ctrlTable">
                                <table class="table table-hover table-bordered table-striped  display nowrap"
                                    id="myTables">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-4 text-right">
                            <button class="btn delete">Delete</button>
                            <button class="btn edit">Edit</button>
                            <button class="btn add">Add</button>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">

    </script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTables').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: 'tr'
                    }
                },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: 0
                }],
                order: [1, 'asc']
            });
        });

    </script>
    <script>
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
