<!DOCTYPE HTML>
<html>

<head>
    <title>FORLAND MODERN MOTORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Forland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <style>
        :not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
            width: 100%;
            z-index: 1;
        }

        .dataTables_length {
            display: none !important;
        }

        .dataTables_filter {
            display: none !important;
        }

        .leftBtns .btn {
            color: #333333;
            background: none !important;
            font-size: 15px;
            border: 1px solid #e61d2f;
            margin: 10px 5px;
            font-weight: bold;

            -webkit-box-shadow: 10px 10px 5px -10px gray;
            -moz-box-shadow: 10px 10px 5px -10px gray;
            box-shadow: 10px 10px 5px -10px gray;
        }



        .leftBtns .btn:hover {
            color: #ffffff;
            background: #e61d2f !important;
            border: 1px solid #e61d2f;
            transition: .1s;
        }

        .leftBtns .btn-myPrimary-add {
            background-color: #e61d2f;

            width: 110px;
        }

        .leftBtns .btn-myPrimary {
            background-color: #e61d2f;

            /* width: 97px; */
            width: 110px;


        }

        .leftBtns .btn-mysecondary {
            background-color: #0a549d;
            /* width: 97px; */
            width: 110px;



        }

        .leftBtns .btn {
            margin: 5px 0px;
            height: 59px;
        }

        .labels {
            margin-left: 12px;
            font-weight: bold;
            font-size: 20px;
            color: #0a549d;
        }

        body {
            margin: 0;
            padding: 0;
        }


        .btn-my {
            border: 1px solid #3498db;
            background: none;
            padding: 10px 20px;
            font-size: 20px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
        }



        .btn1 {
            color: #3498db;
            border-radius: 10px;
        }

        .btn1:hover {
            color: #fff !important;
        }

        .btn-my::before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 0%;
            background: #349fdb;
            z-index: -1;
            transition: 0.8s;
        }

        .btn1::before {
            top: 0;
            border-radius: 0 0 50% 50%;
        }

        .btn1:hover::before {
            height: 180%;
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .nav-pills {
            float: right !important;
            background-color: #0a549d;
            border-radius: 15px;
        }

        input {
            outline: none;
        }

        .login-box {
            text-align: center;
        }

        .login-box a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #d01818;
            font-size: 20px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            /* margin-top: 40px; */
            font-weight: 700;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #d01818;
            color: #fff !important;
            border-radius: 5px;
            box-shadow: 0 0 5px #d01818,
                0 0 25px#d01818,
                0 0 50px #d01818,
                0 0 100px #d01818;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #d01818);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #d01818);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #d01818);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #d01818);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        input:focus~label,
        input:valid~label {
            top: -25px;
            left: 0;
            color: #f1c40f;
            font-size: 12px;
        }

        .clearmain {
            clear: both;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #fff;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #e61d2f;
            border-radius: 15px;
            padding: 10px;

        }

        i::before {
            margin-right: 30px;
        }

        @media only screen and (max-width: 600px) {
            .profile_details {
                display: none;
            }

            .col-md-3 {
                position: relative;
                width: auto !important;
                padding-right: 15px;
                padding-left: 15px;
            }



            #staticBackdrop::-webkit-scrollbar-track {
                border: 1px solid #000;
                padding: 2px 0;
                background-color: #66ff33;
            }

            #staticBackdrop::-webkit-scrollbar {
                width: 12px;
            }

            #staticBackdrop::-webkit-scrollbar-thumb {
                border-radius: 10px;
                box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
                background-color: #66ff33 !important;
                border: 1px solid #000;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #e61d2f !important;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #0a549d !important;
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

        .market-update-block {
            height: 258px;
            border-radius: 10px;
        }

        label {
            color: #000 !important;
        }

    </style>
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

</head>

<body onload="loadFields()">



    @include('dashboardhtml')


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            //alert(this.responseText);
            var d = JSON.parse(this.responseText);

            var data = google.visualization.arrayToDataTable(d);
            var options = {'title':'Stock Details',pieHole: 0.5, 'width':760, 'height':450};
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);

        }
    };

    xhttp.open("GET", "./autosPieChart/", true);
    xhttp.send();

}
</script>

    <button id="movetop" data-toggle="modal" data-target="#myModal" title="Go to top">
        <span class="fas fa-plus-circle" aria-hidden="true"></span>

    </button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mainAbs">
                                    <label for="">Task</label>
                                    <input type="text" class="form-control" name="" id="taskSubject">

                                    <label for="">Assign To</label><br>
                                    <select 
                                        class="selectpicker form-control" data-live-search="true" id="assignTo">

                                    </select>
                                    <label for="">Details</label>
                                    <table id="subTasks">
                                        <tr>
                                            <td id="td-1">1</td>
                                            <td id="td-2"><input type="text" style="margin: 4px 0px;"
                                                    class="form-control" name="" id="">
                                            </td>

                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-left:20px;">
                                            <div class="mainButtons">
                                                <button class="btn btn-info">Progress</button>
                                                <button onclick="getRowId()" class="btn btn-success">Add New
                                                    List</button>

                                                <button class="btn btn-success">Done</button>
                                            </div>


                                        </div>
                                    </div>
                                    <label for="">Due On</label><br>
                                    <div class="btn-group" id="groupButtons" role="group" aria-label="Basic example">
                                        <button onclick="GetDates()" type="button" id="Today"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Today</button>
                                        <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Tomorrow</button>
                                        <button type="button" id="Date"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn "><input class="hello" onchange="customDate()" type="date"
                                                style="background: none !important; width:103px; border: none !important;"
                                                name="" id="date"></button>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                    <br>
                                    <label for="">Priority</label><br>

                                    <div class="btn-group" id="myBtnGroup" role="group" aria-label="Basic example">
                                        <button type="button" id="Urgent"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Urgent</button>
                                        <button type="button" id="Normal"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Normal</button>
                                        <button type="button" id="Easily"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                            class="btn">Easily</button>
                                    </div><br>
                                    <label for="">Category</label><br>
                                    <select 
                                        class="selectpicker form-control" data-live-search="true" id="category">

                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary-1" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mydialog" role="document">
            <div class="modal-content myshadow">
                <div class="modal-header">
                    <h5 class="modal-title">Forland Modern Motors</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="myshadow">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4>Tasks View</h4>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Task" class="form-control" name="" id="mainTask">
                                    <input type="text" placeholder="Task" class="form-control" name="" id="mainTaskID"
                                        style="display:none">
                                    <input type="text" placeholder="Task" class="form-control" name="" id="employeeID"
                                        style="display:none">
                                </div>

                            </div>
                            <div id="AllSubTasks"></div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Last Comment</label>
                                    <textarea name="" placeholder="Last Comment" class="form-control"
                                        style="height: 100%; width: 100%; resize: none;" id="comment"></textarea>

                                </div>

                            </div>
                            <br> <br>
                            <button onclick="updateEmployeeStatus()" style="margin-left: 17px;" type="button"
                                id="updateEmployeeStatus" class="btn btn-primary  ">Update</button>
                            <br>
                            <div class="row" id="adminUseOnly">
                                <div class="col-md-8">
                                    <label for="">Remarks</label>
                                    <input type="text" class="form-control" name="" id="remarks">
                                </div>
                                <div class="col-md-4">
                                    <label for="">&nbsp;</label>
                                    <select style="height: 35px !important; width: 120px !important; "
                                        class="form-control" id="adminStatus">
                                        <option value="Pending">Pending</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="adminUseOnly2">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Task" class="form-control" name="" id="dateValue"
                                        style="display:none">
                                    <label for="">Due On</label><br>
                                    <div class="btn-group" id="groupButtons" role="group" aria-label="Basic example">
                                        <button onclick="GetDates()" type="button" id="Today"
                                            style="background-color: #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Today</button>
                                        <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                            style="background-color: #ffffff; border: 1px solid #aaa;"
                                            class="btn ">Tomorrow</button>
                                        <button type="button" id="Date"
                                            style="background-color: #ffffff; border: 1px solid #aaa;"
                                            class="btn "><input class="hello" onchange="customDate()" type="date"
                                                style="background: none !important; width:103px; border: none !important;"
                                                name="" id="date"></button>

                                    </div>
                                </div>
                                <br>
                                <button onclick="updateAdminStatus()" type="button" id="updateAdminStatus"
                                    class="btn primary ">Update</button>
                                <br>
                            </div>

                            <br>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">

    </script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    <script>
        function getStock() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#stockTable').DataTable();
                  
                    $.each(a, function (i, item) {

                        table.row.add([  a[i].ProductID,a[i].ProductID, a[i].ProductName, a[i]
                            .PerUnitSalePrice, a[i].PerUnitPurchasePrice, a[i].StockIn, a[i]
                            .EngineNumber, a[i].ChasisNumber, a[i].Status
                        ]);
                      
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewStock/", true);

            xhttp.send();
        }

    </script>

    <!-- <script>
        $(document).ready(function () {
            $('#stockTable').DataTable();
        });

    </script>  -->
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

    <script>
        function getEmployeeData() {
            var employeeName = $('#employee').find(":selected").text();
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeData/", true);

            xhttp.send();
            loadEmployees();
            displayOptions();
            getStock();

        }


        function displayOptions() {
            var userCategor = ('{{ Session::get('
                EMPID ')}}');

            if (userCategor == 2) {


            }


        }

        function searchEmployeeData() {
            var employeeID = document.getElementById("employee").value;
            var employeeName = $('#employee').find(":selected").text();
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchEmployeeData/" + employeeID + "/" + employeeName, true);

            xhttp.send();
        }

        function searchTaskWithStatus() {
            var employeeID = document.getElementById("employee").value;
            var employeeName = $('#employee').find(":selected").text();
            var status = document.getElementById("status").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cardsCanvas").innerHTML = "";
                    document.getElementById("cardsCanvas").innerHTML = this.responseText;


                }
            };
            //alert("ljd");
            xhttp.open("GET", "./searchTaskWithStatus/" + employeeID + "/" + status + "/" + employeeName, true);

            xhttp.send();
        }

        function loadTaskDetails(taskID) {

            // alert(taskID);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("mainTask").value = a[0].Subject;
                    document.getElementById("mainTaskID").value = a[0].TaskID;
                    document.getElementById("employeeID").value = a[0].EID;
                    a[0].TaskID;
                    a[0].STaskID;
                    a[0].Subject;
                    a[0].Status;
                    a[0].DueDate;
                    a[0].taskDetails;
                    a[0].StockIn;
                    a[0].AssignedBy;
                    a[0].AssignedTo;
                    a[0].DueDate;
                    a[0].taskDetails;
                    a[0].Priority;
                    a[0].Remarks;
                    a[0].EID;
                    a[0].FirstName;
                    a[0].LastName;

                    document.getElementById("AllSubTasks").innerHTML = "";
                    var st = "";



                    $.each(a, function (i, item) {
                        if (a[i].Status == "Pending") {
                            // document.getElementById("AllSubTasks").innerHTML=;
                            st = st + '<div class="row">\
                    <div class="col-md-8 ">\
                    <input type="text" class="form-control" name="subTasksFromDB" id="subTask[]" value="' +
                                item.taskDetails + '">\
                    </div>\
                    <div class="col-md-4">\
                    <select style="height: 35px !important; width: 120px !important; "\
                    class="form-control" \
                    id="TaskStatus[]">\
                    <option value="' + item.STaskID + '">Pending</option>\
                    <option value="' + item.STaskID + '">Completed</option>\
                    </select>\
                    </div>\
                    </div>';
                        }
                        if (a[i].Status != "Pending") {

                            st = st + '<div class="row">\
                    <div class="col-md-8 ">\
                    <input type="text" class="form-control" name="subTasksFromDB" id="subTask[]" value="' +
                                item.taskDetails + '">\
                    </div>\
                    <div class="col-md-4">\
                    <input style="height: 35px !important; width: 120px !important; " readonly\
                    class="form-control" value="' + item.Status + '">\
                    </input>\
                    </div>\
                    </div>';
                        }
                        var userCategory = ('{{ Session::get('
                            EMPID ')}}');
                        if (userCategory != 1) {
                            document.getElementById("adminUseOnly").style.visibility = "hidden";
                            document.getElementById("adminUseOnly2").style.visibility = "hidden";

                        } else {
                            document.getElementById("updateEmployeeStatus").style.visibility = "hidden";
                        }
                    });
                }

                document.getElementById("AllSubTasks").innerHTML = st;


            }

            //alert("ljd");
            xhttp.open("GET", "./loadTaskDetails/" + taskID, true);

            xhttp.send();

        }

    </script>

    <script>
        function loadFields() {
            dailySaleAmount();
            loadAutos();
            
            
            getMonthlySales();
            getMonthlyExpenses();
            
            getCustomerSales();
        }

        function updateModelData() {
            var AID = $('#model').find(":selected").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var a = this.response;
                    var data = JSON.parse(a);
                    var price = data[0].Price;
                    var description = data[0].Description;
                    document.getElementById("unitPrice").value = price;
                    document.getElementById("description").value = description;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAutoData/" + AID, true);

            xhttp.send();
        }

        function loadAutos() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("model").innerHTML = this.response;
                    $('#model').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadAutos/", true);

            xhttp.send();
        }



        $(document).ready(function () {
                $("#killme").click(function () {
                    $('.bd-example-modal-lg').modal('hide');
                })
            })
            (function () {
                "use strict";

                // custom scrollbar

                $("html").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '10px',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0',
                    zindex: '1000'
                });

                $(".scrollbar1").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '0',
                    autohidemode: 'false',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0'
                });



                $(".scrollbar1").getNiceScroll();
                if ($('body').hasClass('scrollbar1-collapsed')) {
                    $(".scrollbar1").getNiceScroll().hide();
                }

            })(jQuery);

    </script>
    <script>
        function dailySaleAmount() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("saleAmount").innerHTML = a[0].DailySale;

                }
            }

            xhttp.open("GET", "./dailySaleAmount/", true);
            xhttp.send();


        }



        function bar_group() {
            group_ident = 1, $(".bar_group").each(function () {
                $(this).addClass("group_ident-" + group_ident), $(this).data("gid", group_ident), group_ident++
            })
        }

        function get_max() {
            $(".bar_group").each(function () {
                var t = [];
                $(this).children().each(function () {
                    t.push($(this).attr("value"))
                }), max_arr["group_ident-" + $(this).data("gid")] = t, void 0 !== $(this).attr("max") ? $(
                    this).data("bg_max", $(this).attr("max")) : $(this).data("bg_max", Math.max.apply(null,
                    t))
            })
        }

        function data_labels() {
            $(".bar_group__bar").each(function () {
                void 0 !== $(this).attr("label") && $('<p class="b_label">' + $(this).attr("label") + "</p>")
                    .insertBefore($(this))
            })
        }

        function show_values() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("show_values") && ($(this).css("margin-bottom", "40px"), void 0 !== $(
                    this).attr("unit") ? ($(this).append('<p class="bar_label_min">0 ' + $(this).attr(
                    "unit") + "</p>"), $(this).append('<p class="bar_label_max">' + $(this).parent()
                    .data("bg_max") + " " + $(this).attr("unit") + "</p>")) : ($(this).append(
                    '<p class="bar_label_min">0</p>'), $(this).append('<p class="bar_label_max">' +
                    $(this).parent().data("bg_max") + "</p>")))
            })
        }

        function show_tooltips() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("tooltip") && ($(this).css("margin-bottom", "40px"), $(this).append(
                    '<div class="b_tooltip"><span>' + $(this).attr("value") +
                    '</span><div class="b_tooltip--tri"></div></div>'))
            })
        }

        function in_view(t) {
            var a = $(t),
                i = $(window),
                s = i.scrollTop(),
                r = s + i.height(),
                n = a.offset().top,
                o = n + a.height();
            r > o - 45 && a.css("width", a.attr("value") / a.parent().data("bg_max") * 100 + "%")
        }

        function bars() {
            bar_group(), get_max(), data_labels(), show_tooltips(), show_values()
        }
        max_arr = {}, $(".bar_group__bar").each(function () {
            in_view($(this))
        }), $(window).scroll(function () {
            $(".bar_group__bar").each(function () {
                in_view($(this))
            })
        }), bars();

    </script>
    <script>
        function infoPass() {

            var customerName = "Waqas";
            var id = "78";


            window.location.href = "./pm/" + customerName;
            //redirect


        }

        function calculation() {
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;

            var total = price * quantity;
            document.getElementById("totalPrice").value = total;
        }

        function createQuotation() {
            // <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
            // required />
            // <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
            // required />
            // <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
            // required />
            var customerName = document.getElementById("customerName").value;
            var fatherName = "";
            var CNIC = "";
            var city = "";
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;
            var det = document.getElementById("dt").value;
            var qvt = document.getElementById("qvt").value;
            var payTo = document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity,
                totalPrice, model, det, qvt, payTo
            ];

            var quotationData = JSON.stringify(data);

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Quotation =" + this.responseText + " is generated");


                    window.open("/testpdf/5");


                }
            };
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./createQuotation/" + quotationData, true);
            xhttp.send();

        }

        function loadEmployees() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("employee").innerHTML = this.response;
                    $('#employee').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployees/", true);

            xhttp.send();


        }

    </script>
    <script>
        function GetDates() {
            var dateFull = new Date();
            y = dateFull.getFullYear();
            m = dateFull.getMonth() + 1;
            d = dateFull.getDate()
            date = y + '-' + m + '-' + d;
            alert(date);
            document.getElementById("dateValue").value = date

        }

        function TomorrowDate() {
            const today = new Date()
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            y = tomorrow.getFullYear();
            m = tomorrow.getMonth() + 1;
            d = tomorrow.getDate()
            date = y + '-' + m + '-' + d;
            alert(date);
            document.getElementById("dateValue").value = date;

        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
            document.getElementById("dateValue").value = custumDate;
            alert(custumDate);

        }


        function getMonthlySales() {
           

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var a = this.responseText;
                    var data= JSON.parse(a);
                    document.getElementById("monthlysale").innerHTML  = "Total Sales: "+ data[0].TotalSales;
                    document.getElementById("monthlyamount").innerHTML  = data[0].Amount;

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getMonthlySales/", true);

            xhttp.send();
        }


        function getMonthlyExpenses() {
           

           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function () {

               if (this.readyState == 4 && this.status == 200) {

                   var b = this.responseText;
                   var data= JSON.parse(b);
                   document.getElementById("totalexpense").innerHTML  = "Total Expenses: "+ data[0].TotalSales;
                   document.getElementById("monthlyexpense").innerHTML  = data[0].TotalAmount;

               }
           };
           //alert("ljd");
           xhttp.open("GET", "./getMonthlyExpenses/", true);

           xhttp.send();
       }


        var progress = setInterval(function () {
            var $bar = $('.bar');

            if ($bar.width() >= 400) {
                clearInterval(progress);
                $('.progress').removeClass('active');
            } else {
                $bar.width($bar.width() + 40);
            }
            $bar.text($bar.width() / 4 + "%");
        }, 800);



    </script>
    <script>
     function getCustomerSales() {
            
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    
                    document.getElementById("allcards").innerHTML =data ; 
                   
                }
            };
            
            xhttp.open("GET", "./getCustomerSales/", true);

            xhttp.send();
            
        }

    </script>


</body>

</html>
