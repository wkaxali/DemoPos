<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Task</title>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("hello");
            });
        });

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {}

        .wrapper {
            margin: 10px;
        }

        .wrapper .top_navbar {
            width: calc(100% - 20px);
            height: 60px;
            display: flex;
            position: fixed;
            top: 10px;
        }

        .wrapper .top_navbar .hamburger {
            width: 70px;
            height: 100%;
            background: #2e4ead;
            padding: 15px 17px;
            border-top-left-radius: 20px;
            cursor: pointer;
        }

        .wrapper .top_navbar .hamburger div {
            width: 35px;
            height: 4px;
            background: #92a6e2;
            margin: 5px 0;
            border-radius: 5px;
        }

        .wrapper .top_navbar .top_menu {
            width: calc(100% - 70px);
            height: 100%;
            background: #fff;
            border-top-right-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .top_navbar .top_menu .logo {
            color: #2e4ead;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .wrapper .top_navbar .top_menu ul {
            display: flex;
        }

        .wrapper .top_navbar .top_menu ul li a {
            display: block;
            margin: 0 10px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border: 1px solid #2e4ead;
            border-radius: 50%;
            color: #2e4ead;
        }

        .wrapper .top_navbar .top_menu ul li a:hover {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .top_navbar .top_menu ul li a:hover i {
            color: #fff;
        }

        .wrapper .sidebar {
            position: fixed;
            top: 70px;
            left: 10px;
            background: #0a549d;
            width: 200px;
            height: calc(100% - 80px);
            border-bottom-left-radius: 20px;
            transition: all 0.3s ease;
        }

        .wrapper .sidebar ul li a {
            display: block;
            padding: 20px;
            color: #fff;
            position: relative;
            margin-bottom: 1px;
            color: #92a6e2;
            white-space: nowrap;
        }

        .wrapper .sidebar ul li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: #92a6e2;
            display: none;
        }

        .wrapper .sidebar ul li a span.icon {
            margin-right: 10px;
            display: inline-block;
        }

        .wrapper .sidebar ul li a span.title {
            display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before {
            display: block;
        }

        .wrapper .main_container {
            width: (100% - 200px);
            margin-top: 70px;
            margin-left: 200px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .wrapper .main_container .item {
            background: #fff;
            margin-bottom: 10px;
            padding: 15px;
            font-size: 14px;
            line-height: 22px;
        }

        .wrapper.hello .sidebar {
            width: 70px;
        }

        .wrapper.hello .sidebar ul li a {
            text-align: center;
        }

        .wrapper.hello .sidebar ul li a span.icon {
            margin: 0;
        }

        .wrapper.hello .sidebar ul li a span.title {
            display: none;
        }

        .wrapper.hello .main_container {
            width: (100% - 70px);
            margin-left: 70px;
        }

        .container .row {
            margin: 5px 0px !important;
        }

        #movetop {
            position: fixed;
            bottom: 40px;
            right: 15px;
            z-index: 9;
            font-size: 16px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            width: 40px;
            height: 40px;
            background-color: #0abf53 !important;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -o-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            padding: 0;
        }

        .top_menu label {
            width: 100px !important;
        }

        .top_menu {
            float: left;
        }

        .leftCardBody button {

            width: 100px;
        }

        .rightCardBody button {

            width: 100px;
        }

        .mainCardBody {
            display: flex;
            justify-content: space-between;
        }


        ol li {
            margin: 3px 0px;
        }

        #myBtnGroup {
            margin-left: 49px;
        }

        #myBtnGroup button {
            width: 121px;
        }

        .rightButtons {
            float: right;
        }

        td:first-child {
            border: none !important;
            width: 50px;

        }



        tr td:nth-child(2) {
            width: 332px;


        }



        .mainButtons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .mainButtons button {
            margin: 0px 3px;
            width: 116px !important;
            font-size: 14px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 31% !important;
            }
        }

        @media only screen and (max-width: 768px) {

            tr td:nth-child(1) {
                width: 320px;
            }

        }

        .card-header {
            background-color: #e61d2f;
            padding: 3px;
        }

        .mainContCards {
            display: flex;
            justify-content: space-between;
            flex: 1;
            margin: 10px 0px;

        }

        .mainContCards .mainCards-1 {
            background: none !important;
            border-radius: 10px;
            width: 20rem;
            -webkit-box-shadow: 10px 10px 31px 0px #4360b5;
            -moz-box-shadow: 10px 10px 31px 0px#e61d2f;
            box-shadow: 10px 10px 31px 0px #4360b5;
            transition: .7s;

        }

        .mainCards-1:hover {
            transform: translateY(-10px);
            transition: .7s;
        }

        .card {
            border-left: 10px solid #4360b5;
            border-top: 10px solid #e61d2f;
            border-radius: 10px !important;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;
                width: 30rem !important;

            }

            .wrapper .main_container {

                margin-top: 70px;
                margin-left: 336px;
                padding: 15px;
                transition: all 0.3s ease;
            }

            .btn-group span {
                margin-top: 20px;
                margin-left: 30px !important;
                width: 120px;
                text-align: center;
            }
        }




        #groupButtons {
            margin-left: 49px;
        }

        #groupButtons button {
            width: 121px;

        }

        .btn-secondary-1 {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;

        }

        .btn-secondary-1:hover {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;



        }

        .btn-dark-1 {
            background-color: #0a549d;
            border-color: #2e4ead;
            outline: none !important;
            color: #ffffff;

        }

        .btn-dark-1:hover {
            background-color: #0a549d;
            border-color: #2e4ead;
            color: #ffffff;

            outline: none !important;


        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            .mainCards-1 {

                width: 850px !important;

            }



        }


        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .rightSide {
            float: right;
        }

        .mainNewDiv {
            display: flex !important;
            justify-content: space-between;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 83% !important;
        }

    </style>
</head>

<body onload="loadHeads()">

    @include('employerviewhtml')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
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
    <script>
        $(document).ready(function () {
            $("#Today").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",

                });
                $("#Tomorrow").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Date").css({
                    "backgroundColor": "#fff",
                    "color": "#333",
                });

            });
            $("#Tomorrow").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",
                });
                $("#Today").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Date").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });

            });
            $("#Date").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",


                });
                $("#Today").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });
                $("#Tomorrow").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });

            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $("#Urgent").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",

                });
                $("#Normal").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Easily").css({
                    "backgroundColor": "#fff",
                    "color": "#333",
                });

            });
            $("#Normal").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",
                });
                $("#Easily").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Urgent").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });

            });
            $("#Easily").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",



                });
                $("#Urgent").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });
                $("#Normal").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });

            });
        });

    </script>
    <script>
        function priority1() {
            document.getElementById("priority").value = "Urgent"
        }

        function priority2() {
            document.getElementById("priority").value = "Normal"
        }

        function priority3() {
            document.getElementById("priority").value = "Easily"
        }

        function GetDates() {
            var dateFull = new Date();
            y = dateFull.getFullYear();
            m = dateFull.getMonth() + 1;
            d = dateFull.getDate()
            date = y + '-' + m + '-' + d;
            
            document.getElementById("dateValue").value = date
            var mainValue = document.getElementById("changeme");
            mainValue.value = date;

            var mainValue = document.getElementById("changeme");
            mainValue.value = tomorrow;
        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
           
        }


        function TomorrowDate() {
            const today = new Date()
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            y = tomorrow.getFullYear();
            m = tomorrow.getMonth() + 1;
            d = tomorrow.getDate()
            date = y + '-' + m + '-' + d;
          
            document.getElementById("dateValue").value = date;
            var mainValue = document.getElementById("changeme");
            mainValue.value = date;

        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
            document.getElementById("dateValue").value = custumDate;
            

        }

    </script>

    <script>
        $(document).ready(function () {
            $("#MainSpan").click(function () {
                $('#exampleModal').modal('show')
            })
        })

    </script>
    <script>
        function RemoveThisRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            
            document.getElementById("subTasks").deleteRow(i);
        }


        function getRowId() {
            var t = document.getElementById("subTasks");
            var x = document.getElementById("subTasks").rows.length;
            var totalRow = 0;
            for (var i = 0; i < x; i++) {
                totalRow = Number(t.rows[i].cells[0].innerText);
                totalRow++;

            }


            var cell2 = document.getElementById("td-2").innerHTML;

            var row = t.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);
            var mcell3 = row.insertCell(2);

            mcell1.innerHTML = totalRow;
            mcell2.innerHTML = cell2;
            mcell3.innerHTML =
                "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";
        }

        function loadHeads() {
            document.getElementById("dateValue").style.display = "none";
            document.getElementById("priority").style.display = "none";
            loadEmployees();
            loadCategory();
        }

        function addTasks() {

            var taskSubject = document.getElementById("taskSubject").value;
            var assignedTo = document.getElementById("assignTo").value;
            var dueDate = document.getElementById("dateValue").value;
            var category = document.getElementById("category").value;
            //var taskSubject = document.getElementById("taskSubject").value;
            var priority = document.getElementById("priority").value;

            var taskDetails = [];
            var OverallTask = [];

            
            $('#subTasks tr').each(function (row, tr) {
                taskDetails[row] = [
                    $(tr).find('td:eq(1) input[type="text"]').val(), //Amount
                ];
            });


            OverallTask = [taskDetails, taskSubject, assignedTo, dueDate, category, priority];
            var taskTable = JSON.stringify(OverallTask);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Task " + this.responseText + " is added");


                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addTasks/" + taskTable, true);
            xhttp.send();
        }

        function loadEmployees() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("assignTo").innerHTML = this.response;
                    $('#assignTo').selectpicker('refresh');
                }
            };
            
            xhttp.open("GET", "./getEmployees/", true);

            xhttp.send();


        }

        function loadCategory() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("category").innerHTML = this.response;
                    $('#category').selectpicker('refresh');
                }
            };
            
            xhttp.open("GET", "./getCategory/", true);

            xhttp.send();


        }

    </script>





</body>

</html>
