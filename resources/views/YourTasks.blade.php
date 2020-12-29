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


        }

        .mainDIv {
            position: relative;
            height: 100vh;
            width: 100%;
        }

        .myTasks {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .mainTasks {
            display: flex;

        }

        .leftTask {
            margin: 5px 10px;
        }

        .rightTask {
            margin: 0px 10px;
            margin-top: -2px;

        }

        .mainTaskInput {
            margin: 5px 10px;
        }

        .mainTaskInput input {
            height: 45px;
        }

        @media only screen and (max-width: 768px) {

            .mainTasks {
                display: block;

            }

        }

    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row  my-2">
                <div class="col-md-12 text-center">
                    <h4>Your Tasks</h4>
                </div>
            </div>
        </div>
    </main>
    <div class="mainDIv">
        <div class="myTasks">
            <div class="mainTasks">
                <div class="leftTask">
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="rightTask" style="margin-top: 3px;">
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>
                </div>
            </div>
            <div class="mainTaskInput">
                <input type="text" class="form-control" style="width: 100%;" name="" id="">
            </div>
            <div class="mainTasks">
                <div class="leftTask">
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="rightTask" style="margin-top: 2px;">
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>
                </div>
            </div>
            <div class="mainTaskInput">
                <input type="text" class="form-control" style="width: 100%;" name="" id="">
            </div>
            <div class="mainTasks">
                <div class="leftTask">
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="rightTask" style="margin-top: 3px;">
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>1242</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>
                </div>
            </div>
            <div class="mainTaskInput">
                <input type="text" style="width: 100%;" readonly="true" value="Submit" class="btn btn-success" name=""
                    id="">
            </div>
        </div>

    </div>






















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
