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
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>View Accounts</title>
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

        .receivingMain {
            /* border: 1px solid #aaaaaa; */
            border-radius: 10px;
            height: 550px;
            marigin-left:1200px;
            /* overflow: auto; */
        }



        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 2px !important;
        }

        .receivingTable {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            overflow: auto !important;
        }
        
        @media (max-width: 768px) {
       
            
            .inner-block {
                padding: .5em 1em 2em 1em;
            }
       

            .dataTables_length{
                display: none !important;
            }
        }

    </style>
</head>

<body onload="getallaccounts()">
  
<div class="page-container">
 
@include('sidenavbar')
<div class="clearfix"></div>
</div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center" margin-left: 150px;>
                <h3>View Accounts</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10">
                <div class="receivingMain">


                    <div class="receivingTable">
                        <table id="accountstable" class=" table-striped display nowrap"
                            style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                   
                                    <th>Account Id</th>
                                    <th>Account Name</th>
                                    <th>Account Number</th>
                                    <th>Balance</th>
                                     
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    
    </script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    <script>
        function getallaccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#accountstable').DataTable();

                    $.each(a, function (i, item) {
                        
                        table.row.add([  a[i].AID,a[i].AccountName, a[i].AccountNumber, a[i]
                            .Balance 
                        ]);
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAccountsData/", true);

            xhttp.send();
        }

    </script>

    <!-- <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();
        });

    </script> -->
   
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
