<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

  
    <title>Increase In Price</title>
    <style>

.dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }

        th,
        td {
            border: 1px solid #aaaaaa;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            padding:10px;
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 400px;
            overflow: auto;
        }

        .modal-body .input-group-1 label {
            width: 200px;
        }
        .input-group-1{
            display: inline-block;
            width: 200px !important;
        }
        .receivingTable table tr th{
            padding: 5px 0px;
        }
        .receivingTable table tr td{
            padding: 5px 0px;
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
            border-color: #f0e580;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #f0e580;
            outline: 0 none;
        }
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Increase In Price</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label style="width: 150px ;" for="OrderNo">Order No</label>
                    <select 
                    class="selectpicker form-control" data-live-search="true" id="category"
                    tabindex="null">
                    <option value=1>1242</option>
                    <option value=2>1279</option>
                    <option value=3>1342</option>
                    <option value=4>9754</option>


                </select>
                </div>
                <div class="col-md-5 offset-md-2 ">
                    <label  style="width: 150px ;" for="OrderNo">Model</label>
                    <select 
                    class="selectpicker form-control" data-live-search="true" id="category"
                    tabindex="null">
                    <option value=1>Forland C13</option>
                    <option value=2>Forland Trucks</option>
                    <option value=3>Land Trucks</option>
                    <option value=4>Continantal Trucks</option>


                </select>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="receivingMain">


                        <div class="receivingTable">
                            <table class="table-striped " id="stockTable" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                      
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Chasis No</th>
                                        <th>Engine No</th>
                                        <th>Invoice PR</th>
                                        <th>Increase In Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Forland C12</td>
                                        <td>Chassis No</td>
                                        <td>E56921</td>
                                        <td>13,500,000</td>
                                        <td><a data-toggle="modal" data-target="#exampleModal" style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Forland C12</td>
                                        <td>Chassis No</td>
                                        <td>E56921</td>
                                        <td>13,500,000</td>
                                        <td><a data-toggle="modal" data-target="#exampleModal" style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Forland C12</td>
                                        <td>Chassis No</td>
                                        <td>E56921</td>
                                        <td>13,500,000</td>
                                        <td><a data-toggle="modal" data-target="#exampleModal" style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Forland C12</td>
                                        <td>Chassis No</td>
                                        <td>E56921</td>
                                        <td>13,500,000</td>
                                        <td><a data-toggle="modal" data-target="#exampleModal" style="text-decoration: underline;" href="#">Details</a></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



  

    <!-- Modal -->
    <div class="modal fade" style="    padding-left: 143px;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 314px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Break Down</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="input-group-1">
                        <label style="text-align: left !important;" for="">Invoice Price</label>
                        <input type="text" style="width: 200px !important;" class="form-control" value="13,60,000"
                            name="" id="">
                    </div>
                    <br>
                    <div class="input-group-1">
                        <label style="text-align: left !important;" for="">Additional Tax</label>
                        <input type="text" style="width: 200px !important;" class="form-control" value="13,000" name=""
                            id="">
                    </div>
                    <br>
                    <div class="input-group-1">
                        <label  style="text-align: left !important;" for="">Increase In Price</label>
                        <input type="text" style="width: 200px !important;" class="form-control" value="50,000" name=""
                            id="">
                    </div>
                    <br>
                    <div class="input-group-1">
                        <label style="text-align: left !important;" for="">Total Invoice Price Now</label>
                        <input type="text" style="width: 200px !important;" class="form-control" value="14,23,000"
                            name="" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    
    </script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
    $(document).ready(function () {
        $('#stockTable').DataTable({
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
</body>

</html>