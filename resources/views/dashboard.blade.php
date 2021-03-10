<!DOCTYPE HTML>
<html>

<head>
    <title>FORLAND MODERN MOTORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Forland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

   
    <link href="css/font-awesome.css" rel="stylesheet">







    <style>
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

        #staticBackdrop {
            position: absolute !important;
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
        
        input{
            outline:none;
        }
        .login-box {
            text-align:center;
        }
        .login-box  a {
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

<<<<<<< HEAD
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
    <script>
        function loadFields() {
            dailySaleAmount();
            loadAutos();
            getEmployeeData();
            getStock()
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

<<<<<<< HEAD

=======
=======
>>>>>>> 4fbfdc9eec35479205bae44ef33503e40c099211
    </style>
</head>

<body onload="loadFields()">
<<<<<<< HEAD
>>>>>>> 1d6e325b84c354065c75c94dde2439ba16f07a97

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
<<<<<<< HEAD
=======
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
<script>
function loadFields() {
dailySaleAmount();
loadAutos();
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

function calculation(){
var price = document.getElementById("unitPrice").value;
var quantity = document.getElementById("quantity").value;

var total = price*quantity;
document.getElementById("totalPrice").value = total;
}

function createQuotation(){
// <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
// required />
// <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
// required />
// <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
// required />
var customerName = document.getElementById("customerName").value;
var fatherName ="";
var CNIC = "";
var city ="";
var address = document.getElementById("address").value;
var contact = document.getElementById("contact").value;
var description = document.getElementById("description").value;
var color = document.getElementById("color").value;
var unitPrice = document.getElementById("unitPrice").value;
var quantity = document.getElementById("quantity").value;
var totalPrice = document.getElementById("totalPrice").value;
var model = document.getElementById("model").value;
var det=document.getElementById("dt").value;
var qvt=document.getElementById("qvt").value;
var payTo=document.getElementById("paymentTo").value;

var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity, totalPrice, model,det,qvt,payTo];

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

</script>

<script>
var doughnutData = [{
value: 30,
color: "#e61d2f"
},
{
value: 50,
color: "#0a549d"
},
{
value: 100,
color: "#e61d2f"
},
{
value: 40,
color: "#0a549d"
},
];
new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(
doughnutData);

</script>
=======

    <div class="page-container">
        <div class="left-content">
        <!-- nav bar -->
            <div class="mother-grid-inner">
                <div class="header-main">
                    <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <form method="POST" class="appointment-form" id="appointment-form">
                                        <h2></h2>
                                        <div class="form-group-1">
                                            <input type="text" name="title" id="customerName" placeholder="Customer Name"
                                                required />
                                           
                                            <input type="text" name="address" id="address" placeholder="Address"
                                                required />
                                            <input type="text" name="phone_number" id="contact"
                                                placeholder="Contact" required />
                                            <label for="Model">Select Model</label>
                                            <select style="height: 40px !important; width: 200px !important;" name="Select Model"
                                                class="selectpicker form-control" data-live-search="true" id="model" onchange="updateModelData()">

                                            </select>
                                            <input type="text" name="phone_number" id="description"
                                                placeholder="Description" required />
                                            <input type="text" name="phone_number" id="color" placeholder="Color"
                                                required />
                                                <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
                                                required />
                                                <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
                                                required />
                                                <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
                                                required />
                                            <input type="text" name="phone_number" id="unitPrice"
                                                onchange="calculation()" placeholder="Unit Price" required />
                                            <input type="text" name="phone_number" id="quantity" placeholder="Quantity"
                                                onchange="calculation()" required />
                                            <input type="text" name="phone_number" id="totalPrice"
                                                placeholder="Total Price" required />


                                        </div>

                                        <div class="login-box">
                                            <a onclick="createQuotation()">
                                            <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                            Create Quotation</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="/db">
                                <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png"
                                    class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details_left">


                            <button class="btn-my btn1" style="margin-left: 200px;" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Operations</button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row p-2"
                                                    style="border: 2px solid gray; border-radius: 10px;">


                                                    {{ session()->put('CID','125')}}
                                                    <div class="col-md-3">
                                                        <label class="labels" for="">Purchase</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/bo'">Book
                                                                Order</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/d'">Dilivery</button><br>
                                                            <button data-toggle="modal" id="killme"
                                                                data-target="#staticBackdrop"
                                                                class="btn btn-mysecondary">Quotation</button><br>


                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/dl'">Dilivery
                                                                letter</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/ct'">Comissions</button><br>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Sales</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <a href="/is"><button class="btn btn-myPrimary-add">invoice
                                                                    services</button><br></a>
                                                            <a href="/psi"><button class="btn btn-mysecondary">Print
                                                                    Sale Invoice</button><br></a>
                                                            <a href="/sc"><button class="btn btn-myPrimary">Sales&
                                                                    comission</button><br></a>
                                                            <a href="/ct"> <button
                                                                    class="btn btn-myPrimary-add">texes</button><br></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Stock</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">

                                                            <a href="/as"> <button class="btn btn-myPrimary-add">Add
                                                                    Stock</button><br></a>
                                                            <a href="/ip"><button class="btn btn-mysecondary">Increase
                                                                    In price</button><br></a>
                                                            <a href="/stock"> <button
                                                                    class="btn btn-myPrimary">Stock</button><br></a>
                                                            <a href="/vc"><button
                                                                    class="btn btn-myPrimary-add">ViewCustmer</button><br></a>
                                                            <a href="/sp"> <button class="btn btn-mysecondary">View
                                                                    Spareoarts</button><br></a>
                                                            <a href="/vs"> <button class="btn btn-myPrimary">View
                                                                    Stock</button><br></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="margin-left: 22px;" class="labels"
                                                            for="">Ledger</label>
                                                        <div class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/cl'">Company
                                                                ledger</button><br>
                                                            <a href="/l"> <button
                                                                    class="btn btn-mysecondary">ledger</button><br></a>
                                                            <a href="/th"><button class="btn btn-myPrimary">Transaction
                                                                    History</button><br></a>
                                                            <a href="/ex"><button
                                                                    class="btn btn-myPrimary-add">Expance</button><br></a>

                                                        </div>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                        </div>
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img style="height: 50px; border-radius: 50%; "
                                                    src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-1.2.1&w=1000&q=80"
                                                    alt=""> </span>
                                            <div class="user-name">
                                                <p style="color: #e61d2f;">{{ Session::get('UserName')}}</p>
                                                <span>Administrator</span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <!-- <ul class="dropdown-menu drp-mnu">
										<li> <a ><i class="fa fa-cog"></i> Settings</a> </li>
										<li> <a ><i class="fa fa-user"></i> Profile</a> </li>
										<li> <a ><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });

                </script>
                <div class="inner-block">
                    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Last 7 Days</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">This Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-year-tab" data-toggle="pill" href="#pills-year" role="tab"
                                aria-controls="pills-year" aria-selected="false">This Year</a>
                        </li>
                    </ul>
                    <div class="clearmain"></div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3 id="saleAmount" value=""></h3>
                                                <h4>Todays Sale Amount</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>{{ Session::get('dailySale')}}</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>80% cash sales</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                                <p>get reply</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>


                    <div class="chit-chat-layer1">
                        <div class="row">

                            <div class="col-md-6 chit-chat-layer1-left">
                                <div class="work-progres">
                                    <div class="chit-chat-heading">
                                        Recent Orders
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client</th>
                                                    <th>Manager</th>

                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>PELL </td>
                                                    <td>Mushtaq</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-info">50%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Qarshi</td>
                                                    <td>Sultan</td>

                                                    <td><span class="label label-success">completed</span></td>
                                                    <td><span class="badge badge-success">100%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Gormets</td>
                                                    <td>John</td>

                                                    <td><span class="label label-danger">Delayed</span></td>
                                                    <td><span class="badge badge-warning">75%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Khadi</td>
                                                    <td>Danial</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-info">65%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>J.</td>
                                                    <td>Amjad</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-danger">95%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>UCP</td>
                                                    <td>Ali</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-success">95%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 chart-blo-1">
                                <div class="dygno" style="height: 431px !important;">
                                    <h2>Ring Chart</h2>

                                    <canvas id="doughnut" height="300" width="470"
                                        style="width: 470px; height: 300px;"></canvas>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="main-page-charts">
                        <div class="main-page-chart-layer1">
                            <div class="row">


                                <div class="col-md-6 chart-layer1-left">
                                    <div class="glocy-chart">
                                        <div class="span-2c">
                                            <h3 class="tlt">Sales Analytics</h3>
                                            <canvas id="bar" height="300" width="400"
                                                style="width: 400px; height: 300px;"></canvas>
                                            <script>
                                                var barChartData = {
                                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "jul"],
                                                    datasets: [{
                                                            fillColor: "#e61d2f",
                                                            data: [65, 59, 90, 81, 56, 55, 40]
                                                        },
                                                        {
                                                            fillColor: "#337AB7",
                                                            data: [28, 48, 40, 19, 96, 27, 100]
                                                        }
                                                    ]

                                                };
                                                new Chart(document.getElementById("bar").getContext("2d")).Bar(
                                                    barChartData);

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 chart-blo-1">
                                    <div class="line-chart">
                                        <h3>Line Chart</h3>
                                        <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;">
                                        </canvas>
                                        <script>
                                            var lineChartData = {
                                                labels: ["", "", "", "", "", "", ""],
                                                datasets: [{
                                                        fillColor: "#337AB7",
                                                        strokeColor: "#e61d2f",
                                                        pointColor: "#e61d2f",
                                                        pointStrokeColor: "#fff",
                                                        data: [65, 59, 90, 81, 56, 55, 40]
                                                    },
                                                    {
                                                        fillColor: "#e61d2f",
                                                        strokeColor: "#337AB7",
                                                        pointColor: "#337AB7",
                                                        pointStrokeColor: "#fff",
                                                        data: [28, 48, 40, 19, 96, 27, 100]
                                                    }
                                                ]

                                            };
                                            new Chart(document.getElementById("line").getContext("2d")).Line(
                                                lineChartData);

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="chart-layer-2">
                        <div class="row">


                            <div class="col-md-6 chart-layer2-right">
                                <div class="prograc-blocks">
                                    <div class="home-progres-main">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class='bar_group'>
                                        <div class='bar_group__bar thin' label='Rating' show_values='true'
                                            tooltip='true' value='343'></div>
                                        <div class='bar_group__bar myBlueColor thin' style="background: #0a549d;"
                                            label='Quality' show_values='true' tooltip='true' value='235'></div>
                                        <div class='bar_group__bar thin' label='Amount' show_values='true'
                                            tooltip='true' value='550'></div>
                                        <div class='bar_group__bar thin' style="background: #0a549d;" label='Farming'
                                            show_values='true' tooltip='true' value='456'></div>
                                    </div>
                                    <script src="js/bars.js"></script>

                                </div>
                            </div>
                            <div class="col-md-6 chart-layer2-left">
                                <div class="content-main revenue">
                                    <h3>Total Revenue</h3>
                                    <canvas id="radar" height="300" width="300"
                                        style="width: 300px; height: 300px;"></canvas>
                                    <script>
                                        var radarChartData = {
                                            labels: ["", "", "", "", "", "", ""],
                                            datasets: [{
                                                    fillColor: "#e61d2f",
                                                    strokeColor: "#0a549d",
                                                    pointColor: "#0a549d",
                                                    pointStrokeColor: "#fff",
                                                    data: [65, 59, 90, 81, 56, 55, 40]
                                                },
                                                {
                                                    fillColor: "#0a549d",
                                                    strokeColor: "#e61d2f",
                                                    pointColor: "#e61d2f",
                                                    pointStrokeColor: "#fff",
                                                    data: [28, 48, 40, 19, 96, 27, 100]
                                                }
                                            ]

                                        };
                                        new Chart(document.getElementById("radar").getContext("2d")).Radar(
                                            radarChartData);

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="sidebar-menu">

            <div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
                    <span id="logo"></span>
                </a> </div>
            <div class="menu">
                <ul id="menu">
                    <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                    </li>
                    
                    <li><a><i class="fab fa-salesforce"></i><span>Operations</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
                        <ul>
                            <li><a href="/bo">Book Order</a></li>
                            <li><a href="/rec">Receiving</a></li>
                            <li><a href="/is">Invoice Services</a></li>
                            <li><a href="/sc">Commissions and Taxes</a></li>
                            <li><a data-toggle="modal" id="killme" data-target="#staticBackdrop">Quotation</a></li>
                            <li><a href="/as">Add Stock</a></li>
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="/l">Investor Sale Ledger</a></li>
                            <li><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fab fa-salesforce"></i><span>Products</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/">Category</a></li>
                            <li><a href="/vs">Product Record</a></li>
                            <li><a href="/as">Add Product</a></li>
                            <li><a href="/">Barcode</a></li>

                            <li><a href="/">Stock Audit</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fab fa-salesforce"></i><span>Customer</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/">Add Customer</a></li>
                            <li><a href="/vs">Customer List</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fab fa-salesforce"></i><span>Supplier</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/">Add Supplier</a></li>
                            <li><a href="/vs">Supplier List</a></li>
                        </ul>
                    </li>
                    <li id="menu-comunicacao"><a><i class="fab fa-alipay"></i>
                            <span>Purchase</span><span class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-comunicacao-sub">
                            <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                            </li>
                            <li><a href="">Daily Purchase</a></li>
                            <li><a href="">Monthly Purchase</a></li>
                            <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fab fa-salesforce"></i><span>POS</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/ss">POS</a></li>
                            <li><a href="/sc">Add Sale</a></li>
                            <li><a href="">Daily Sales</a></li>
                            <li><a href="">Monthly Sales</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fas fa-vials"></i><span>Expense</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/ex">Add Expense</a></li>
                            <li><a href="">Expense List</a></li>
                            <li><a href="">Expense Head</a></li>
                            <li><a href="">Expense Category</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-quote-right"></i><span>Quotation<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul>
                            <li><a href="/ql">Quotation List</a></li>
                            <li><a href="/is">Add Quotation</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-random"></i><span>Transfer<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul>
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="">Transfer Funds</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-undo-alt"></i><span>Return<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul>
                            <li><a href="/ss">Sale</a></li>
                            <li><a href="/is">Purchase</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico"><a href="/l"><i class="fas fa-user-circle"></i><span>Accounts</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                            <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fab fa-accusoft"></i><span>HR</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">Add Employee</a></li>
                            <li id="menu-academico-boletim"><a href="/">View Employee</a></li>
                        </ul>
                    </li>

                    <!-- <li><a><i class="fas fa-address-book"></i><br><span>Customer</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul>
                            <li><a href="/">Add Customer</a></li>
                            <li><a href="/">View Customer</a></li>
                            <li><a href="/">Delete Customer</a></li>
                        </ul>
                    </li> -->

                    <li><a><i class="fas fa-people-carry"></i><span>People</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">User List</a></li>
                            <li id="menu-academico-boletim"><a href="/">Add User</a></li>


                        </ul>
                    </li>



                    <li id="menu-academico"><a href="/stock"><i style="font-size: 20px;"
                                class="fab fa-stack-overflow"></i><span>Stock</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/as">Add New Stock</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/vs">View Stock</a></li>
                        </ul>
                    </li>



                    <li id="menu-academico"><a href="/d"><i class="fas fa-flag-checkered"></i><span>Reports</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/d">Summary Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Customer Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Best Seller</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Sale</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Monthly Sale</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Purchase</a></li>
                            <li id="menu-academico-boletim"><a href="/d">MonthlyPurchase</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">User Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Supplier Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Due Report</a></li>


                        </ul>
                    </li>
                    <li id="menu-academico"><a href="/d"><i class="fas fa-truck-loading"></i><span>Order
                                Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

                        </ul>
                    </li>


                    <li><a><i class="fab fa-amazon-pay"></i><span>PayRoll</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                            <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                            <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
                        </ul>
                    </li>
                    <li><a href="/at"><i class="fas fa-guitar"></i><span>Attendance</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                            <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
                        </ul>

                    </li>
                    <li><a><i class="fas fa-eye"></i><span>Task View</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                            <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fas fa-cogs"></i><span>Account Settings</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                            <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
                            <li id="menu-academico-boletim"><a href="./logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="clearfix"> </div>
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
    <script>
        function loadFields() {
            dailySaleAmount();
            loadAutos();
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
                document.getElementById("saleAmount").innerHTML  = a[0].DailySale;

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
>>>>>>> 1d6e325b84c354065c75c94dde2439ba16f07a97
        function infoPass() {

            var customerName = "Waqas";
            var id = "78";


            window.location.href = "./pm/" + customerName;
            //redirect


        }

<<<<<<< HEAD
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
=======
        function calculation(){
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;    
            
            var total = price*quantity;
            document.getElementById("totalPrice").value = total;
        }

        function createQuotation(){
            // <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
            //                                     required />
            //                                     <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
            //                                     required />
            var customerName = document.getElementById("customerName").value;
            var fatherName ="";
            var CNIC = "";
            var city ="";
>>>>>>> 1d6e325b84c354065c75c94dde2439ba16f07a97
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;
<<<<<<< HEAD
            var det = document.getElementById("dt").value;
            var qvt = document.getElementById("qvt").value;
            var payTo = document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity,
                totalPrice, model, det, qvt, payTo
            ];
=======
            var det=document.getElementById("dt").value;
            var qvt=document.getElementById("qvt").value;
            var payTo=document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity, totalPrice, model,det,qvt,payTo];
>>>>>>> 1d6e325b84c354065c75c94dde2439ba16f07a97

            var quotationData = JSON.stringify(data);

            var xhttp = new XMLHttpRequest();

<<<<<<< HEAD
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

    </script>

=======
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Quotation =" + this.responseText + " is generated");
                        
                        //window.open("/qt");
                        window.open("/testpdf/5");
                        

                    }
                };
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.open("GET", "./createQuotation/" + quotationData, true);
                xhttp.send();
            
        }

    </script>

<script>
    var doughnutData = [{
            value: 30,
            color: "#e61d2f"
        },
        {
            value: 50,
            color: "#0a549d"
        },
        {
            value: 100,
            color: "#e61d2f"
        },
        {
            value: 40,
            color: "#0a549d"
        },
    ];
    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(
        doughnutData);

</script>


>>>>>>> 4fbfdc9eec35479205bae44ef33503e40c099211
>>>>>>> 1d6e325b84c354065c75c94dde2439ba16f07a97

</body>

</html>
