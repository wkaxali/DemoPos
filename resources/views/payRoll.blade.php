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
            background-color: #e61d2f;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            color: #ffffff !important;
        }

        .backGround-1 {
            background-color: #0a549d;
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
            background-color: #e61d2f;
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
            background-color: #0a549d;
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
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
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
                                    
                                    <div class="col-md-5" id="divName">
                                        <label for="">Name</label>
                                        <select 
                                            class="selectpicker form-control" data-live-search="true" id="name"
                                            onchange="getByID()">

                                        </select>
                                    </div>
                                    <div class="col-md-5  ">
                                        <label for="">Contact</label>
                                        <input readonly type="text" value="date" class="form-control"
                                            style="display: inline-block; width: 200px;margin-top: 3px;" name=""
                                            id="contact">
                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">CNIC</label>
                                        <input readonly type="text" value="date" class="form-control"
                                            style="display: inline-block; width: 200px;margin-top: 3px;" name=""
                                            id="cnic">
                                     
                                    </div>
                                    <div class="col-md-5  ">
                                        <label for="">Joining</label>
                                        <input readonly type="text" value="date" class="form-control"
                                            style="display: inline-block; width: 200px;margin-top: 3px;" name=""
                                            id="date">
                                    </div>
                                    <div class="col-md-12 ">
                                        <label for="">Address</label>
                                        <input readonly type="text" style="display: inline-block; width: 810px;"
                                            class="form-control" name="" id="address">
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
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="basicPay" onchange="payCalculation()">
                                <br>
                                <label for="">Total Allowances</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="allownces" readonly>
                                <br>
                                <label for="">Comission %</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="comission" onchange="payCalculation()">
                                <br>
                                <label for="">Allowed Holidays</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="allowedHolidays" onchange="payCalculation()">
                                <br>
                                <label for="">Target Sales</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="saleTarget" onchange="payCalculation()">
                                <br>
                                <label for="">Working Hours</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="workingHours" onchange="payCalculation()">
                                <br>
                                <label for="">Reporting Time</label>
                                <input type="time" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="reportingTime" onchange="payCalculation()">
                                <br>
                                <label for="">Total Pay</label>
                                <input type="number" class="form-control" value=""
                                    style="display: inline-block; width: 200px;" name="" id="total" readonly >
                                
                                <div class="updateButtons">
                                    <button class="btn" onclick="updatePay()">Update</button>
                                </div>
                            </div>
                            <div class="col-md-6 payRow-1 ">
                                <h4 class="blueBg">Commission</h4>
                                <div class="common">

                                <label for="">Salary of</label>
                                        <select id='month' onchange="searchMonthlyCommission()" style="display: inline-block;width: 150px;">
                                            <option selected value=''>--Select Month--</option>
                                            <option value='0'>Janaury</option>
                                            <option value='1'>February</option>
                                            <option value='2'>March</option>
                                            <option value='3'>April</option>
                                            <option value='4'>May</option>
                                            <option value='5'>June</option>
                                            <option value='6'>July</option>
                                            <option value='7'>August</option>
                                            <option value='8'>September</option>
                                            <option value='9'>October</option>
                                            <option value='10'>November</option>
                                            <option value='11'>December</option>
                                        </select>
                                        <select id='year' onchange="searchMonthlyCommission()" style="display: inline-block;width: 100px;">
                                            <option selected value=''>--Year--</option>
                                            <option value='1'>2016</option>
                                            <option value='2'>2017</option>
                                            <option value='3'>2018</option>
                                            <option value='4'>2019</option>
                                            <option value='5'>2020</option>
                                            <option selected value='6'>2021</option>
                                            <option value='7'>2022</option>
                                            <option value='8'>2023</option>
                                            <option value='9'>2024</option>
                                            <option value='10'>2025</option>
                                            <option value='11'>2026</option>
                                            <option value='12'>2027</option>
                                        </select> 
                                    <br>
                                    <label for="">Total Sales</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="totalSales">
                                    <br>
                                    <label for="">Total Commission</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="totalCommission">
                                    <br>
                                    <label for="">Total Absents</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="absents">
                                    <br>
                                    <label for="">Absents Deductions</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="absentdeduction">
                                    <br>
                                    <label for="">Month Salary</label>
                                    <h1 id="monthSalary">0</h1><br>
                                    
                                    <label for="">Employee Balance</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="balance">
                                    <br>
                                    <label for="">Total Deduction</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="deduction">
                                    <br><br>
                                    <label for="">Total Payable</label>
                                    <h1 id="payable">0</h1>
                                    <br>
                                   
                                    <label for="">Date</label>
                                    <input type="date" style="display: inline-block;width: 150px;" class="form-control" id="paymentDate">
                                    <br>
                                    <label for="">Amount Paid</label>
                                    <input onchange="calRemaining()" type="number" style="display: inline-block;width: 150px;" class="form-control" id="amountPaid">
                                    <br>
                                    <label for="">Paid by</label>
                                    <select
                                    class="form-control" data-live-search="true" id="paidBy" style="width: 150px;">

                                    </select>
                                    <br>
                                    <label for="">Amount Remaining</label>
                                    <input readonly type="text" style="display: inline-block;width: 150px;" class="form-control" id="amountRemaining">
                                    <br>
                                    <label for="">Remarks</label>
                                    <input type="text" style="display: inline-block;width: 150px;" class="form-control" id="remarks">
                                    
                                        <button onclick="paySalary()" class="btn">Update</button>
                                        <button onclick="printSalary()" class="btn">Print Salary</button>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        @include('mainNavbar')
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
            loadAccounts();
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
            var id = $('#name').find(":selected").val();

            document.getElementById("contact").value = "";
            document.getElementById("cnic").value = "";
            document.getElementById("date").value = "";
            document.getElementById("address").value = "";
            document.getElementById("basicPay").value = "";
            document.getElementById("allowedHolidays").value = "";
            document.getElementById("allownces").value = "";
            document.getElementById("saleTarget").value = "";
            document.getElementById("total").value = "";
            document.getElementById("payable").innerHTML = "";
            document.getElementById("workingHours").value = "";
            document.getElementById("comission").value = "";
            document.getElementById("reportingTime").value = "";
            document.getElementById("totalSales").value = "";
            document.getElementById("totalCommission").value = "";
            document.getElementById("balance").value = "";
            document.getElementById("absents").value = "";
            document.getElementById("absentdeduction").value = "";
            document.getElementById("payable").innerHTML = "";
            document.getElementById("paymentDate").value = "";
            document.getElementById("amountPaid").value = "";
            document.getElementById("amountRemaining").value = "";
            document.getElementById("remarks").value = "";
            
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    
                    var a = JSON.parse(this.response);

                    document.getElementById("contact").value = a[0].ContactNo;
                    document.getElementById("cnic").value = a[0].CNIC;
                    document.getElementById("date").value = a[0].JoiningDate;
                    document.getElementById("address").value = a[0].HomeAddress;
                    document.getElementById("basicPay").value = a[0].BasicPay;
                    document.getElementById("allowedHolidays").value = a[0].AllowedHolidays;
                    document.getElementById("allownces").value = a[0].Alownces;
                    document.getElementById("saleTarget").value = a[0].SaleTarget;
                    document.getElementById("total").value = a[0].TotalPay;
                    document.getElementById("payable").innerHTML = a[0].TotalPay;
                    document.getElementById("workingHours").value = a[0].WorkingHours;
                    document.getElementById("comission").value = a[0].commission;
                    document.getElementById("reportingTime").value = a[0].ReportingTime;
                    searchMonthlyCommission();
                }
            };
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
           
            xhttp.open("GET", "./getEmployeeName/", true);

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
        function updatePay() {
            var data = [];
            var basicPay = document.getElementById("basicPay").value;
            var allowedHolidays = document.getElementById("allowedHolidays").value;
            var comission = document.getElementById("comission").value;
            var saleTarget = document.getElementById("saleTarget").value;
            var allownces = document.getElementById("allownces").value;
            var total = document.getElementById("total").value;
            var reportingTime = document.getElementById("reportingTime").value ;
            var workingHours = document.getElementById("workingHours").value;
            var EID = $('#name').find(":selected").val();

            if (EID == " ") {
                alert("Employee Not Selected")
                
            }else if (basicPay == "") {
                alert('Please fill in "Basic Pay" Field');
            }
            else if (allowedHolidays == "") {
                alert('Please fill in "Alowed Holidays" Field');
            }
            else if (comission == "") {
                alert('Please fill in "Commission" Field');
            }
            else if (saleTarget == "") {
                alert('Please fill in "Sale Target" Field');
            }
            else if (allownces == "") {
                alert('Please fill in "Allowance" Field');
            }
            
            else if (total == "") {
                alert('Please fill in "Total Pay" Field');
            }
            else if (reportingTime == "") {
                alert('Please fill in "Reporting Time" Field');
            }
            else if (workingHours == "") {
                alert('Please fill in "Working Hours" Field');
            }else{

            

            data = [basicPay, allowedHolidays, comission, saleTarget, allownces, total, workingHours, EID, reportingTime]
            payData = JSON.stringify(data);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    alert(this.response);

                }
            };
            
            xhttp.open("GET", "./updatePay/" + payData, true);

            xhttp.send();

        }
        }


        function payCalculation() {
            var bp = document.getElementById("basicPay").value;
            var alounsec = document.getElementById("allownces").value;
            tot = Number(alounsec) + Number(bp);
            document.getElementById("total").value = tot;

        }

   
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        function searchMonthlyCommission(){
            var month = $('#month').find(":selected").val();
            var year = $('#year').find(":selected").text();
            var EID = $('#name').find(":selected").val();
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    data=this.responseText;
                   
                    a=JSON.parse(data);
                    document.getElementById("totalSales").value = a[0];
                    document.getElementById("totalCommission").value = Math.round(Number(a[1]));
                    totalPay = document.getElementById("total").value;
                    document.getElementById("balance").value = a[4];
                    document.getElementById("absents").value = a[2];
                    document.getElementById("absentdeduction").value = a[3];
                    document.getElementById("deduction").value = a[3]-a[4];
                    document.getElementById("payable").innerHTML = Math.round(a[1]+Number(totalPay)-Number(a[3]) + Number(a[4]));
                    document.getElementById("monthSalary").innerHTML = Math.round(a[1]+Number(totalPay)-Number(a[3]));
                }
            };
            
            xhttp.open("GET", "./getCommissionData/"+year+"/"+month+"/"+EID, true);

            xhttp.send();
        } 

        function calRemaining(){
            amountPaid=document.getElementById("amountPaid").value;
            monthSalary=document.getElementById("monthSalary").innerHTML;
            amountRemaining=Number(monthSalary)-amountPaid;
            document.getElementById("amountRemaining").value=amountRemaining;

        }
            function printSalary(){
                 var EID = $('#name').find(":selected").val();
                 var date=document.getElementById("paymentDate").value;
                 var adv= document.getElementById("balance").value;
                 var month = $('#month').find(":selected").val();
                 var year = $('#year').find(":selected").text();
               
                 alert(month);
                 alert(year);
                var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {

                            if (this.readyState == 4 && this.status == 200) {
                                window.open('/printsse/'+EID+'/'+adv+'/'+month+'/'+year);
                            }
                        };
                            
                            xhttp.open("GET", "./printSalaries/"+EID+"/"+adv+"/"+month+"/"+year, true);

                            xhttp.send();
            }
        function paySalary(){
            amountPaid=document.getElementById("amountPaid").value;
            payable=document.getElementById("payable").innerHTML;
            amountRemaining=document.getElementById("amountRemaining").value;
            date=document.getElementById("paymentDate").value;
            remarks=document.getElementById("remarks").value;
            var month = $('#month').find(":selected").val();
            var year = $('#year').find(":selected").text();
            var yearVal = $('#year').find(":selected").val();
            var EID = $('#name').find(":selected").val();
            var AID = $('#paidBy').find(":selected").val();
            monthSalary=document.getElementById("monthSalary").innerHTML;
            totalDeduction=document.getElementById("deduction").value;
            totalComission=document.getElementById("totalCommission").value;
            absentDeduction=document.getElementById("absentdeduction").value;
            balance=document.getElementById("balance").value;

            if(EID == " "){
                alert('Employee Not Selected');

            } else if (AID == " ") {
                alert('Account Not Selected');

            }
            else if (yearVal == "") {
                alert("Year Not Selected")
                
            }else if (month == "") {
                alert('Month Not Selected');
            }
            else if (date == "") {
                alert('Please fill in "Date" Field');
            }
            else if (amountPaid == "") {
                alert('Please fill in "Amount Paid" Field');
            }
            else if (remarks == "") {
                alert('Please fill in "Remark" Field');
            }
            else{

            payData=[amountPaid, payable, amountRemaining, date, month, year, EID, AID, remarks,
            totalDeduction, totalComission, absentDeduction, balance, monthSalary];
            data=JSON.stringify(payData);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    alert("Payment "+this.responseText+" added!");
                }
            };
            
            xhttp.open("GET", "./paySalary/"+data, true);

            xhttp.send();
        }
        }

        function loadAccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

            document.getElementById("paidBy").innerHTML = this.response;
            $('#paidBy').selectpicker('refresh');
            }
            };

            xhttp.open("GET", "./getAccounts/", true);

            xhttp.send();
            }

    </script>
    
</body>

</html>
