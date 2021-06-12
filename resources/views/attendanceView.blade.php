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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">



    <title>ATTANDANCE</title>
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

        .dropdown.bootstrap-select.form-control-1 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .dropdown.bootstrap-select.form-control-2 {
            width: 120px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        label {
            width: 145px;
        }

        th,
        td {
            text-align: center;
        }

        .customButtons button {
            width: 150px;
            margin: 10px 15px;
        }

        .customButtons {
            text-align: right;
        }

        #TblSection label {
            width: auto !important;

        }

        .customClassBorder {
            border: 1px solid #333;
            padding: 10px 0px;
            border-radius: 20%;
        }

        .customClassBorder label {
            width: 58px !important;
        }

        th,
        td {
            padding: 2px !important;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        @media print {
            body * {
                visibility: hidden;
            }

            #mainHeader,
            #mainHeader * {
                visibility: visible;
            }

            #mainHeader {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        .controlTables {
            overflow: auto;
        }

        @media only screen and (max-width: 768px) {


            .inner-block {
                padding: .5em 1em 2em 1em;
            }

            .customClassBorder {
                border: none !important;
            }

            .dataTables_wrapper .dataTables_filter {
                float: right !important;
                text-align: right !important;
            }
        }

    </style>
</head>

<body onload="loadFunctions()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">
                <main id="mainHeader">
                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3>ATTANDANCE VIEW</h3>
                                </div>
                            </div>
                        </div>
                    </main>
                    <br>
                    <header>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <label for="">Employee ID</label>
                                    <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="employeeID">

                                    </select>

                                </div>

                                <div class="col-md-5 ">
                                    <label for="">Employee Name</label>
                                    <select style="height: 25px !important; width: 158px !important; "
                                        class="selectpicker form-control" data-live-search="true" id="employeeName">

                                    </select>

                                </div>
                            </div>
                            <br>
                            <div class="row customClassBorder my-3">
                                <div class="col-md-5 offset-md-1">
                                    <h4>Mohsin Jabbar</h4>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Month</label>
                                    <select class="selectpicker form-control-1 form-control" data-live-search="true"
                                        id="category" tabindex="null">
                                        <option value=1>January</option>
                                        <option value=2>Febraury</option>
                                        <option value=3>March</option>
                                        <option value=4>April</option>
                                        <option value=1>May</option>
                                        <option value=2>June</option>
                                        <option value=3>July</option>
                                        <option value=4>August</option>
                                        <option value=1>Sepetember</option>
                                        <option value=2>October</option>
                                        <option value=3>November</option>
                                        <option value=4>December</option>





                                    </select>
                                    &nbsp;
                                    <label for="">Year</label>
                                    <select class="selectpicker form-control-1 form-control" data-live-search="true"
                                        id="category" tabindex="null">
                                        <option value=1>2020</option>
                                        <option value=2>2019</option>
                                        <option value=3>2018</option>
                                        <option value=4>2017</option>


                                    </select>
                                    <button style="height: 25px; margin-top: -5px;" class="btn btn-info"></button>

                                </div>


                            </div>
                        </div>
                    </header>
                    <br>
                    <section id="TblSection">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" id="attendanceTableDiv">
                                    <div class="controlTables">
                                        <table class="table table-striped display nowrap"
                                            style="width: 100%; text-align: center;" id="attendanceTable">
                                            <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Employee ID</th>
                                                    <th>Date</th>
                                                    <th>Time In</th>
                                                    <th>Time Out</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                        <td>First Name</t>
                                        <td>Last Name</th>
                                        <td>Employee ID</th>
                                        <td>Date</th>
                                        <td>Time In</th>
                                        <td>Time Out</th>
                                        <td>Status</th>
                                        <td>Edit</th>
                                    </tr> -->

                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 customButtons offset-md-6">
                                <button style="background-color: #e61d2f;color: #ffffff;" class="btn ">Update</button>
                                <button onclick="printWindow()" style="background-color: #0a549d;color: #ffffff;"
                                    class="btn ">Print</button>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
        @include('adminNavbar')
        <div class="clearfix"></div>
    </div>




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
        function loadFunctions() {
            getAttendance();
            loadEmployeeID();
            loadEmployeeName();
        }


        function getAttendance() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#attendanceTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].EID, a[i].FirstName, a[i].LastName, a[i].Date, a[i]
                            .ReportingTime, a[i].TimeIn, a[i].Status, a[i].Remarks
                        ]);

                    });
                    //$('#attendanceTable').DataTable({ "order": []});
                    table.columns.adjust().draw();
                    setColors();


                }
            };
            //alert("ljd");

            xhttp.open("GET", "./getAttendance/", true);

            xhttp.send();


        }

        function setColors() {
            $('#attendanceTable tbody tr').each(function (row, tr) {

                var status = $(tr).find('td:eq(6)').html();
                // alert(status);
                if (status == "Late") {

                    $(tr).css('background', '#f8aeae');


                } else {
                    $(tr).css('background', '#dcf9b1');
                }

            });


        }

    </script>

    <script>
        $(document).ready(function () {
            $('#attendanceTable').DataTable({
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


        function loadEmployeeName() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("employeeName").innerHTML = this.response;
                    $('#employeeName').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeName/", true);

            xhttp.send();


        }


        function loadEmployeeID() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("employeeID").innerHTML = this.response;
                    $('#employeeID').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeID/", true);

            xhttp.send();


        }

    </script>
    <script>
        function printWindow() {
            var divToPrint = document.getElementById("attendanceTable");
            divToPrint.style.textAlign = "center";
            divToPrint.style.border = "1px solid #333";
            newWin = window.open("");
            newWin.document.write(
                '<html><head><title>Print it!</title><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"></head><body>'
            );
            newWin.document.write(divToPrint.outerHTML);
            newWin.document.write('</body></html>');

            newWin.print();
            newWin.close();
        }

    </script>

</body>

</html>
