<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="Description" content="Enter your description here" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <title>Attendance</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        #mainSection label {
            width: 100px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 27% !important;
            }
        }

        .borderDiv {
            border: 1px solid #333;
            width: 100%;
            height: 30px;
            border-radius: 10px;
            margin-top: 10px;

        }

        .footerBtns {
            float: right !important;
            margin-bottom: 10px;
        }

        .summaryLabels {
            float: right !important;
            margin-top: 20px !important;
        }

        #Summary label {
            width: 225px;
        }

        .borderCustom {
            background-color: #e61d2f;
            border-radius: 10%;
            margin-top: 5px;
        }

        .borderCustom h4 {
            color: #ffffff;
        }

        .borderCustom-1 {
            border: 1px solid #333;
            border-radius: 10px;
            margin-top: 5px;
            padding: 3px;
        }

        .borderCustom-1 input {
            margin: 3px 0px;
        }

        #myTable th,
        td {
            padding: 3px !important;
        }

        .circle {
            border: 1px solid #333;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            position: relative;
            float: right;
            margin-right: 50px !important;
            background-color: #0a549d;
            color: #ffffff;
        }

        .circleContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loginButtons {
            margin-top: 30px;
            margin-left: 134px;
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
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

        .mainRows {
            width: 910px;
            margin: 50px auto;
            padding: 10px;
            border-radius: 10px;
        }
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body onload="myFunction()">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Attendance</h4>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="row mainRows" style="border: 1px solid #333;">
                <div class="col-md-4 offset-md-1">
                    <h4 id="demo"></h4>
                    <h4>Forland MM</h4>
                </div>
                <div class="col-md-7 ">
                    <div class="circle">
                        <div class="circleContent">
                            <h4 id="timeDemo"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <label style="width: 200px;" for="">Employee ID</label>
                    <input type="text" class="form-control"
                        style="display: inline-block; width: 200px; margin: 5px 0px;" name="" id="employeeID">
                    <br>
                    <label style="width: 200px;" for="">Password</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px;" name="" id="">
                    <br>
                    <div class="loginButtons">
                        <button class="btn" style="background-color: #e61d2f; color: #ffffff;">View Previous</button>
                        <button class="btn" style="background-color:  #0a549d; color: #ffffff;" onclick="markAttendance()">Mark Attandance</button>
                    </div>
                </div>
            </div>

        </div>
    </section>




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
    <script>
        function myFunction() {
            setTimeout(function () {
                var id = document.getElementById("demo");
                var mytime = document.getElementById("timeDemo");
                var today = new Date();


                var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

                var dateTime = date;
                var myTime = time;

                id.innerHTML = dateTime;
                mytime.innerHTML = time;
            }, 1000);
        }
        window.setInterval(function () {
            myFunction()
        }, 1000);

    </script>



<script>
    function markAttendance(){
    
        var employeeID = [document.getElementById("employeeID").value];

        alert(employeeID);

        //var taskTable = JSON.stringify(OverallTask);
    
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Expense number " + this.responseText + " is added");
                
            }
        };
        alert(employeeID);
        xhttp.open("GET", "./markAttendance/" + employeeID, true);
        xhttp.send();
    }
</script>


</body>

</html>
