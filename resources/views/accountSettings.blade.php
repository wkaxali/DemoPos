<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Account Settings</title>
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
            width: 135px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        label {
            padding-top: .0625rem;
            font-size: 0.875rem;
        }

        .row {
            margin: 10px 0px;
        }
        .inner-block {
    padding: 0em !important;
}

    </style>
</head>

<body id="mainBody">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header id="myHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12  text-center">
                                <h3>Account Settings</h3>
                            </div>
                        </div>



                    </div>
                </header>
                <br>
                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 offset-md-1">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="" id="">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <label for="">Email address</label>
                                <input type="text" class="form-control" name="" id="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <label for="">Current Password</label>
                                <input type="password" class="form-control"  id="Current">

                                <input style="margin-top: 13px;" type="checkbox" onclick="password()"> Show Password
                          

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <label for="">New Password</label>
                                <input type="password" class="form-control"  id="newpass">

                                <input style="margin-top: 13px;" type="checkbox" onclick="newpassword()"> Show Password
                                                      </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <label for="">Confirm New Password</label>
                                <input type="password" class="form-control"  id="Confirm">

                                <input style="margin-top: 13px;" type="checkbox" onclick="confrimpassword()"> Show Password
                            </div>
                        </div>   <div class="row">
                            <div class="col-md-10 offset-md-1">
                      <button class="btn w-100 btn-success">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </section>










            </div>
        </div>
        @include('sidenavbar')
    </div>



    <div class="clearfix"></div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        function password() {
            var x = document.getElementById("Current");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function newpassword() {
            var x = document.getElementById("newpass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function confrimpassword() {
            var x = document.getElementById("Confirm");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
    
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
    <script>
    
    function editUsers() {
            var UID = document.getElementById("UserID").value;
            var username = document.getElementById("UserName").value;
            var pass = document.getElementById("Password").value;
            var desgination = document.getElementById("Designation").value;
            var enable = document.getElementById("Enable").value;
            var lastlogin = document.getElementById("LastLogin").value;

            var edituser = [UID, username, pass, desgination, enable, lastlogin];

            var EU = JSON.stringify(edituser);
            alert(EU);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("User " + this.responseText + " is Updated");

                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editUsers/" + EU, true);
            xhttp.send();

        }

    </script>
    </script>

</body>

</html>
