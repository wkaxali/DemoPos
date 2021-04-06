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
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <title>Pay Roll</title>
    <style>
        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .PaySection label {
            width: 150px;
        }

        .payButtons button {
            margin-right: 45px !important;
        }

        .PayDetailsSection label {
            width: 150px;
        }

        .updateButtons {
            text-align: right;

        }

        .updateButtons button {
            margin-right: 187px;
            margin-top: 5px;
        }

        .smallFont {
            font-size: 16px;
            font-weight: bold;
        }

        .leftMrg {
            padding-left: 210px;
        }

        .payRow {
            border-right: 1px solid #333;
            padding: 10px !important;
            border-radius: 10px;
            margin-top: 10px;

            /* width: 1200px; */
        }

        .payRow-1 {
            border-left: 1px solid #333;
            padding: 10px !important;
            border-radius: 10px;
            margin-top: 10px;
        }

        .backGround {
            background-color: #000;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            color: #ffffff !important;
        }

        .backGround-1 {
            background-color: #f0e580;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            color: #ffffff !important;
        }

        .EmpRow {
            margin: 5px 0px;
            padding: 10px 0px;
            width: auto !important;
            border: 1px solid #333;
            margin-left: 79px;
            border-radius: 10px;
        }

        .redBg {
            background-color: #000;
            color: #ffffff;
            padding: 4px;
            margin: 5px 0px;
            border-radius: 10px;
            text-align: center;
        }

        .container {
            max-width: 1238px !important;
        }

        .myOwnOffset {
            margin-left: 1%;
        }

        .common {
            margin-left: 80px;
            margin-top: 20px;
        }

        .updateButtons-1 {
            text-align: right !important;
        }

        .updateButtons-1 button {
            margin-right: 56px !important;
        }

        .blueBg {
            background-color: #f0e580;
            color: #ffffff;
            text-align: center;
            padding: 4px;
            border-radius: 10px;
        }

        .updateButtons-1 {
            margin-top: 157px;
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

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .clear {
            clear: both;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }


        @media only screen and (max-width: 768px) {
            #address {
                width: 200px !important;
            }

            .EmpRow {
                margin: 5px 0px;
                padding: 10px 0px;
                width: auto !important;
                border: 1px solid #333;
                margin-left: 0px;
                border-radius: 10px;
            }

            .leftMrg {
                padding-left: 0px;
            }

            .common {
                margin-left: 0px;
                margin-top: 20px;
            }

            .inner-block {
                padding: 0em !important;
            }

            .epr {
                font-size: 25px;
                font-weight: 600;
            }
        }

    </style>
</head>

<body onload="loadEmployeeInfo()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">


                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="epr">Employee Pay Role</h4>
                            </div>
                        </div>
                    </div>
                </main>

                <section class="PaySection">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row EmpRow">
                                    <div class="col-md-5 ">

                                        <label for="">Employee ID</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="id"
                                            onchange="getByID()">

                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2" id="divName">
                                        <label for="">Name</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="name"
                                            onchange="getByName()">

                                        </select>
                                    </div>
                                    <div class="col-md-5  ">
                                        <label for="">Contact</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="contact">

                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2">
                                        <label for="">CNIC</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="cnic">

                                        </select>
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="">Address</label>
                                        <input type="text" style="display: inline-block; width: 810px;"
                                            class="form-control" name="" id="address">
                                    </div>
                                    <div class="col-md-5 ">
                                        <label for="">Status</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="category"
                                            tabindex="null">
                                            <option value=1>Probatum</option>
                                            <option value=2>1279</option>
                                            <option value=3>1342</option>
                                            <option value=4>9754</option>


                                        </select>
                                    </div>
                                    <div class="col-md-5 offset-md-2">
                                        <label for="">Joining</label>
                                        <input type="text" value="date" class="form-control"
                                            style="display: inline-block; width: 200px;margin-top: 3px;" name=""
                                            id="date">
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="payButtons text-right">
                                            <button class="btn">Add Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </section>

                <section class="PayDetailsSection">
                    <div class="container">


                        <div class="row EmpRow">
                            <div class="col-md-6 payRow ">
                                <h4 class="redBg">Pay Details</h4>
                                <label for="">Basic Pay</label>
                                <input type="text" class="form-control" value="13,000"
                                    style="display: inline-block; width: 200px;" name="" id="basicPay">
                                <br>
                                <label for="">Allows Rent/+</label>
                                <input type="text" class="form-control" value="50,000"
                                    style="display: inline-block; width: 200px;" name="" id="allownces">
                                <br>
                                <label for="">Comission On Sale (%)</label>
                                <input type="text" class="form-control" value="50,000"
                                    style="display: inline-block; width: 200px;" name="" id="comission">
                                <br>
                                <label for="">Allowed Holidays</label>
                                <input type="text" class="form-control" value="5"
                                    style="display: inline-block; width: 200px;" name="" id="allowedHolidays">
                                <br>
                                <label for="">Target Sales</label>
                                <input type="text" class="form-control" value="10"
                                    style="display: inline-block; width: 200px;" name="" id="saleTarget">
                                <br>
                                <label for="">Working Hours</label>
                                <input type="text" class="form-control" value="10"
                                    style="display: inline-block; width: 200px;" name="" id="workingHours">
                                <br>
                                <label for="">Total</label>
                                <input type="number" class="form-control" value="48000"
                                    style="display: inline-block; width: 200px;" name="" id="total">
                                <span>+ 5%</span>
                                <div class="updateButtons">
                                    <button class="btn" onclick="payCalculation()">Update</button>
                                </div>
                            </div>
                            <div class="col-md-6 payRow-1 ">
                                <h4 class="blueBg">Current Status</h4>
                                <div class="common">

                                    <h4 class="smallFont">Until 25 December</h4>
                                    <label for="">With 4 Sales</label> <input type="number" class="form-control"
                                        style="display: inline-block; width: 200px;" value="21,500" name="" id="">
                                    <h4 class="smallFont leftMrg">Under Performance</h4>
                                    <h4 class="smallFont" style="display: inline-block; width: 153px;">and 3 Leaves</h4>
                                    <input type="text" style="display: inline-block;width: 200px;" class="form-control">
                                    <div class="updateButtons-1 ">
                                        <button class="btn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        @include('sidenavbar')
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
        function loadEmployeeInfo() {
            clearAll();
            loadEmployeeNames();
            loadEmployeeCNIC();
            loadEmployeeID();
            loadEmployeeContact();;
        }

    </script>

    <script>
        function clearAll() {
            document.getElementById("date").value = "";
            document.getElementById("address").value = "";
            document.getElementById("basicPay").value = "";
            document.getElementById("allowedHolidays").value = "";
            document.getElementById("allownces").value = "";
            document.getElementById("saleTarget").value = "";
            document.getElementById("address").value = "";
            document.getElementById("address").value = "";
        }

    </script>

    <script>
        function getByID() {
            var xhttp = new XMLHttpRequest();
            var id = $('#id').find(":selected").val();
            //alert(id);
            $("#name").val(id);

            $('#contact').val(id);
            $('#cnic').val(id);
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    //  alert(this.response);
                    var a = JSON.parse(this.response);

                    document.getElementById("date").value = a[0].JoiningDate;
                    document.getElementById("address").value = a[0].HomeAddress;
                    document.getElementById("basicPay").value = a[0].BasicPay;
                    document.getElementById("allowedHolidays").value = a[0].AllowedHolidays;
                    document.getElementById("allownces").value = a[0].Alownces;
                    document.getElementById("saleTarget").value = a[0].SaleTarget;
                    document.getElementById("total").value = a[0].TotalPay;
                    $('#contact').val(a[0].EID);
                    $("#contact").selectpicker('refresh');
                    $('#cnic').val(a[0].EID);
                    $("#cnic").selectpicker('refresh');
                    $('#name').val(a[0].EID);
                    $("#name").selectpicker('refresh');
                    //alert();
                    //payCalculation();


                    //     // alert(a[0].FirstName);
                    //     // alert(a[0].LastName);
                    // alert(a[0].CNIC);
                    // alert(a[0].ContactNo);
                    // alert(a[0].HomeAddress);
                    // alert(a[0].EmailID);
                    // alert(a[0].DesignationID);

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmpbyID/" + id, true);

            xhttp.send();
        }

    </script>

    <script>
        function loadEmployeeNames() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("name").innerHTML = this.response;
                    $('#name').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeName/", true);

            xhttp.send();


        }

    </script>
    <script>
        function loadEmployeeCNIC() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("cnic").innerHTML = this.response;
                    $('#cnic').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeCNIC/", true);

            xhttp.send();


        }

    </script>


    <script>
        function loadEmployeeID() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("id").innerHTML = this.response;
                    $('#id').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeID/", true);

            xhttp.send();


        }

    </script>

    <script>
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
        function updatePay() {
            var data = [];
            var basicPay = document.getElementById("basicPay").value;
            var allowedHolidays = document.getElementById("allowedHolidays").value;
            var comission = document.getElementById("comission").value;
            var saleTarget = document.getElementById("saleTarget").value;
            var allownces = document.getElementById("allownces").value;
            var total = document.getElementById("total").value;
            var workingHours = document.getElementById("workingHours").value;
            var EID = $('#id').find(":selected").val();

            data = [basicPay, allowedHolidays, comission, saleTarget, allownces, total, workingHours, EID]
            payData = JSON.stringify(data);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    alert(this.response);

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./updatePay/" + payData, true);

            xhttp.send();


        }



        function loadEmployeeContact() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("contact").innerHTML = this.response;
                    $('#contact').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getEmployeeContact/", true);

            xhttp.send();

        }

        function payCalculation() {
            var bp = document.getElementById("basicPay").value;
            var alounsec = document.getElementById("allownces").value;
            tot = Number(alounsec) + Number(bp);
            document.getElementById("total").value = tot;
            updatePay();

        }

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
    <script>

    </script>
</body>

</html>
