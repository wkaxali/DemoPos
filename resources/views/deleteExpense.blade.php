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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Print Documents</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }
        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        .receivingMain {
            /* border: 1px solid #aaaaaa; */
            border-radius: 10px;
            height: 550px;
            /* overflow: auto; */
        }



        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 2px !important;
            text-align: center;
        }

        .receivingTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            overflow: auto !important;
        }

    </style>
</head>
<body onload="getExpenses()">
<div class="page-container">
<div class="container">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Delete Expense</h3>
                </div>
            </div>

        </div>
    </header>
    <br><br><br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto; margin-left: 80px;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>

                                <th>Expanse ID</th>
                                <th>Expanse Head ID</th>
                                <th>Remarks</th>
                                <th>DateStamp</>
                                <th>Amount</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
           
            </div>
        </div>
    </section>
    
</div>
@include('sidenavbar')<div class="clearfix"></div>








    <!--end::Demo Panel-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#stocktable').DataTable();
        });

    </script>
    <!--end::Global Theme Bundle-->

    <script>
        function getExpenses() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    
                    var table;
                    var a = JSON.parse(data);

                    table = $('#stocktable').DataTable();

                    $.each(a, function (i, item) {
                        expanseID=a[i].ExpanseID;
                        table.row.add([a[i].ExpanseID, a[i].ExpanseHeadID, a[i].Remarks, a[i].DateStamp,
                            a[i].Amount,
                            '<button class="btn print" onclick="deleteExpense('+expanseID+')" >Delete</button>'
                            
                            ]);
                    });
                    table.draw();

                }
            };

            xhttp.open("GET", "./getExpenses/", true);
            xhttp.send();
        }
        function deleteExpense(expanseID){
            var EID = expanseID;
            if (confirm("Do you want to permanently delete record "+EID)){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                    location.reload();
                    }
                };
                xhttp.open("GET", "./deleteExpense/" + EID, true);
                xhttp.send();
            }
        }
        

    </script>

</body>

</html>
