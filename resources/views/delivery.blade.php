<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        @page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
        .invoiceLabel {
            font-size: 20px;


        }

        th,
        td {
            border: 1px solid rgb(207, 203, 203);
            text-align: center;
        }

        .deliverTable {
            border: 1px solid #333;
            height: 450px;
            overflow: auto;
            border-radius: 10px;
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

    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <label class="invoiceLabel" for="invoice">Invoice</label>
                <br>
                <input type="text" name="text" style="display: inline-block; width: 200px;" class="form-control" id="">

                <button class="btn " style="height: 30px; margin-top: -5px; background-color: #000;"> </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="deliverTable">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Sale Price</th>
                                <th>Cost</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Waqas Ali</td>
                                <td>Developer</td>
                                <td>100$</td>
                                <td>500$</td>
                                <td>Developer</td>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</a></td>
                            </tr>
                            <tr>
                                <td>Waqas Ali</td>
                                <td>Developer</td>
                                <td>100$</td>
                                <td>500$</td>
                                <td>Developer</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Waqas Ali</td>
                                <td>Developer</td>
                                <td>100$</td>
                                <td>500$</td>
                                <td>Developer</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Waqas Ali</td>
                                <td>Developer</td>
                                <td>100$</td>
                                <td>500$</td>
                                <td>Developer</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>




    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="modalInput">Dummy</label><br>
                                <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                                    name="modalInput" id="modalInput"><br>


                            </div>
                            <div class="col-md-6">
                                <label for="modalInput">Dummy</label><br>
                                <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                                    name="modalInput" id="modalInput"><br>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="modalInput">Dummy</label><br>
                                <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                                    name="modalInput" id="modalInput"><br>


                            </div>
                            <div class="col-md-6">
                                <label for="modalInput">Dummy</label><br>
                                <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                                    name="modalInput" id="modalInput"><br>


                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
