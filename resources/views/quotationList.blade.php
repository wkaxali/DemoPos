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
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <style>
        .print {
            background-color: #0a549d;
            color: aliceblue;
        }
        @media print {
            body * {
                visibility: hidden;
            }

            .mains,
            .mains * {
                visibility: visible;
            }

            .mains {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
.btn:hover{
    color:#fff;
}
    </style>
    <title>Quotation List</title>
</head>

<body onload="getQuotations()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">

    <div class="container-fluid">
        <div class="mains">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Quotation List</h1>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-hover" id="quotationsTable">
                    <thead>
                        <th>QID</th>
                        <th>CustomerName</th>
                        
                        <th>CNIC</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Contact</th>
                        
                        
                        <th>UnitPrice</th>
                        <th>Quantity</th>
                        <th>TotalPrice</th>
                        <th>Model</th>
                        <th>Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 offset-md-6 text-right">
                <button class="btn print ">Print</button>
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


        function getQuotations() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#quotationsTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].QID,  a[i].CustomerName, a[i]
                            .CNIC, a[i].City, a[i].Address, a[i]
                            .Contact, a[i]
                            .UnitPrice, a[i].Quantity, a[i].TotalPrice, a[i]
                            .Model, a[i].Date, '<button class="btn print" onclick="printQuotation('+a[i].QID+')" >Print</button>'
                        ]);
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewQuotations/", true);

            xhttp.send();
        }


        function printQuotation(QID){
            alert(QID);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                
                window.open('/qt');

                }
            }

            xhttp.open("GET", "./getQuotation/" + QID, true);
            xhttp.send();

        }



    </script>
</body>

</html>
