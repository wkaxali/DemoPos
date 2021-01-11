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
            margin-right: 140px;
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
            border: 1px solid #333;
            padding: 10px !important;
            border-radius: 10px;
            margin-top: 10px;

            /* width: 1200px; */
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
            margin: 0;
            padding: 10px 0px;
            width: 1048px;
            border: 1px solid #333;
            margin-left: 79px;
            border-radius: 10px;
        }

        .redBg {
            background-color: #e61d2f;
            color: #ffffff;
            padding: 4px;
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
            margin-top: 100px;
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
    </style>
</head>

<body onload="loadEmployeeInfo()">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Empoyee Pay Role</h4>
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
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control"  data-live-search="true"  id="id" >
                            
                            </select>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <label for="">Name</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control"  data-live-search="true"  id="name" >
                            
                            </select>
                        </div>
                        <div class="col-md-5  ">
                            <label for="">Contact</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control"  data-live-search="true"  id="contact" >
                            
                            </select>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <label for="">CNIC</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control"  data-live-search="true"  id="cnic" >
                            
                            </select>
                        </div>
                        <div class="col-md-12 ">
                            <label for="">Address</label>
                            <input type="text" style="display: inline-block; width: 810px;" class="form-control" name=""
                                id="">
                        </div>
                        <div class="col-md-5 ">
                            <label for="">Status</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                                <option value=1>Probatum</option>
                                <option value=2>1279</option>
                                <option value=3>1342</option>
                                <option value=4>9754</option>


                            </select>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <label for="">Joining</label>
                            <input type="text" value="21/12/2020" class="form-control"
                                style="display: inline-block; width: 200px;margin-top: 3px;" name="" id="">
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
    <br>
    <section class="PayDetailsSection">
        <div class="container">


            <div class="row ">
                <div class="col-md-5 payRow  offset-md-1">
                    <h4 class="redBg">Pay Details</h4>
                    <label for="">Basic Pay</label>
                    <input type="text" class="form-control" value="13,000" style="display: inline-block; width: 200px;"
                        name="" id="">
                    <br>
                    <label for="">Allows Rent/+</label>
                    <input type="text" class="form-control" value="50,000" style="display: inline-block; width: 200px;"
                        name="" id="">
                    <br>
                    <label for="">Comission On Sale</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category" tabindex="null">
                        <option value=1>5%</option>
                        <option value=2>1279</option>
                        <option value=3>1342</option>
                        <option value=4>9754</option>


                    </select>
                    <br>
                    <label for="">Allowed Holidays</label>
                    <input type="text" class="form-control" value="5" style="display: inline-block; width: 200px;"
                        name="" id="">
                    <br>
                    <label for="">Target Sales</label>
                    <input type="text" class="form-control" value="10" style="display: inline-block; width: 200px;"
                        name="" id="">
                    <br>
                    <label for="">Total</label>
                    <input type="text" class="form-control" value="48,000" style="display: inline-block; width: 200px;"
                        name="" id="">
                    <span>+ 5%</span>
                    <div class="updateButtons">
                        <button class="btn">Update</button>
                    </div>
                </div>
                <div class="col-md-5  payRow myOwnOffset">
                    <h4 class="blueBg">Current Status</h4>
                    <div class="common">

                        <h4 class="smallFont">Until 25 December</h4>
                        <label for="">With 4 Sales</label> <input type="text" class="form-control"
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

<script>
function loadEmployeeInfo(){
    loadEmployeeNames();
    loadEmployeeCNIC();
    loadEmployeeID();
    loadEmployeeContact();;
}
</script>


<script>
function loadEmployeeNames(){
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
function loadEmployeeCNIC(){
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
function loadEmployeeID(){
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
function loadEmployeeContact(){
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
</script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
</body>

</html>
