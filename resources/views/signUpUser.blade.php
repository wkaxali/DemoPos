<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
<title>Sign Up Users</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83% !important;
            }
        }

        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 70px;
            border-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }



        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 15px;
            padding: 10px 20px;
            margin: 0px auto 15px auto;
        }

        .form-control {
            width: 250px !important;
        }


        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #0a549d;
            border: none;
            color: white;
            margin-top: 20px;
            /* width: 100px; */
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }




        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84%;
            }
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 3px 0px;


        }

        label {
            width: 150px;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84%;
        }

        .update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .print {
            width: 77px;
        }

        .inner-block {
            padding: 3em 2em 0em 2em;
        }

        @media only screen and (max-width: 1440px) {
            .inner-block {
                padding: 1em 2em 0em 2em;
            }
        }

        @media only screen and (max-width: 768px) {
            .form-control {
                width: 180px !important;
            }

            .addCut {
                font-size: 25px;
                margin-bottom: 50px;
            }

            .registration-form {
                padding: 60px 0;
                /* background-color: #fff; */

            }
        }

    </style>
</head>

<body>
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin:20px !important;">
                                        <h2 class="text-center addCut">Sign Up Users</h2>

                                    </div>

                                    <div class="form-group">
                                    <label for="">Employee Name:</label>
                                        <select name="" class="form-control item" id="designation">
                                            <option value="1">Admin</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Employee</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="Password"
                                            placeholder="username" readonly >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="Password"
                                            placeholder="Password" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="rePassword"
                                            placeholder="ReEnter Password" >
                                    </div>
                                    <div class="form-group">
        <label for="">Designation:</label>
                                        <select name="" class="form-control item" id="designation">
                                            <option value="1">Admin</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Employee</option>
                                        </select>
                                    </div>


                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" id="addUsers" onclick="addNewUser()"
                                            class="btn  create-account">Add</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
    function addNewUser() {
        var Username = document.getElementById("UserName").value;

        var password = document.getElementById("Password").value;
        
        var designation = $('#designation').find(":selected").text();

        var addUsers = [Username, password, designation];

        if(Username=="" || password==""){
            alert("Fill in all Fields")
        }else{
        var AU = JSON.stringify(addUsers);
        alert(AU)
        var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("User " + this.responseText + " is Added");


                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addUsers/" + AU, true)
            xhttp.send()

        }
    }

    
    </script>
</body>

</html>
