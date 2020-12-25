<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <title>Document</title>
    <style>
        .emmetTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            height: 500px;

        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Stock View</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="emmetTable">
                        <table class="table table-striped" style="width: 100%;" id="myTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sale Price </th>
                                    <th>Cost</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                                <tr>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                    <td>DUmmy</td>
                                </tr>
                          
                            
                             
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </header>










    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>