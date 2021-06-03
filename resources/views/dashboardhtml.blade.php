<head>
    <style>

        #piechart{
            border-color: grey;
            width: 780px;
            border-radius: 10px;
            margin-left:20px;
            box-shadow: 1px 2px 2px 1px grey ;
        }

        #top_x_div{
            border-color: grey;
            width: 901px;
            border-radius: 10px;
            margin-left:20px;
            box-shadow: 1px 2px 2px 1px grey ;
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
            background-color: #0a549d;
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
            margin: 3px 0px;
        }

        #myBtnGroup button {
            width: 150px;
            height: 35px;
        }

        .rightButtons {
            float: right;
        }

        /* @media only screen and (max-width: 768px) {
            input {
                width: 200px !important;
            }
        } */

        td {
            /* border: 1px solid #333; */
        }

        td:first-child {
            border: none !important;
            display: none;
        }



        tr td:nth-child(2) {
            width: 367px;
        }


        input[type="checkbox"] {
            height: 35px;
            width: 43px;
            /* margin-top: 4px; */
            margin: 3px 0px;
        }

        tr td {}

        .mainButtons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .mainButtons button {
            margin: 0px 3px;
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

        #cardsCanvas {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: row;
            width: 100%;

        }

        .mainContCards .mainCards-1 .card {
            margin: 10px;
            width: 20rem;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;

            }


        }


        .card {
            border-top: 10px solid #e61d2f;
            border-left: 10px solid #0a549d;
            border-radius: 10px;
        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

        



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

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        /* .mainWords {
	width: 500px;
	margin: auto;
} */
        .mainWords {
            height: 383px !important;
            overflow: auto;
            /* border-radius: 20px !important; */
        }

        .chat {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: #f1f0e8;
        }

        .chat-header {
            display: flex;
            cursor: pointer;
        }

        .profile {
            width: 78.5%;
            background: #032360;
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0px 10px;
            position: fixed;
        }

        .profile .pp {
            width: 50px;
            display: inline-block;
            border-radius: 50%;
            margin-left: 32px;
        }

        .profile .arrow {
            display: inline-block;
            width: 30px;
            position: absolute;
            top: 19px;
            cursor: pointer;
        }

        .profile h2 {
            display: inline-block;
            line-height: 60px;
            vertical-align: bottom;
            color: #fff;
            font-size: 20px;
        }

        .profile span {
            color: #ccc;
            position: absolute;
            top: 42px;
            left: 100px;
            font-size: 14px;
        }

        .right .icon {
            display: inline-block;
            width: 25px;
            margin-left: 10px;
        }

        .profile .left {
            flex: 1;
        }

        .chat-box {
            background: url('../img/bg.jpeg');
            background-attachment: fixed;
            padding-left: 20px;
            overflow: hidden;
            flex: 1;

        }

        .chat-box img {
            display: none;
        }

        .chat-box .img_chat {
            width: 280px;
        }

        .chat-r {
            display: flex;
        }

        .chat-r .sp {
            flex: 1;
        }

        .chat-l {
            display: flex;
        }

        .chat-l .sp {
            flex: 1;
        }

        .chat-box .mess {
            max-width: 300px;
            background: #F7FCF6;
            padding: 10px;
            border-radius: 10px;
            margin: 20px 0px;
            cursor: pointer;
        }

        .chat-box .mess p {
            word-break: break-all;
            font-size: 18px;
        }

        .chat-box .mess-r {
            background: #E2FFC7;
        }

        .chat-box .emoji {
            width: 20px;
        }

        .chat-box .check {
            float: right;
        }

        .chat-box .check img {
            width: 20px;
        }

        .chat-box .check span {
            color: #888;
            font-size: 12px;
            font-weight: 700px;
        }

        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        *::-webkit-scrollbar-thumb {
            background: #aaa;
        }



        .chat-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 60px;
            position: fixed;
            cursor: pointer;
            top: 56.5%;
            width: 81%;
            left: 9.5%;
        }

        .chat-footer textarea {
            display: block;
            flex: 1;
            width: 100%;
            height: 50px;
            border-radius: 60px;
            margin: 5px;
            padding: 10px;
            outline: none;
            font-size: 19px;
            padding-left: 40px;
            padding-right: 90px;
            border: 2px solid #ccc;
            color: #555;
            resize: none;
        }

        .chat-footer .mic {
            display: block;
            width: 55px;
            height: 55px;
            margin-right: 20px;
        }

        .chat-footer .emo {
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 10px;
            top: 12px;
        }

        .chat-footer .icons {
            position: absolute;
            right: 100px;
            top: 10px;
        }

        .chat-footer .icons img {
            display: inline-block;
            width: 35px;
            height: 35px;
            margin-left: 5px;
        }

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
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

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 82% !important;
            }
        }
        .chart-layer2-right {
                padding: 0px;
                float: left;
                width: 49%;
            }

            .chart-layer2-right {
                padding: 0em 0.5em 0em 0em;
            }

            .chart-layer2-right {
                padding: 0em 0em 1em 0em;
            }

            .chart-layer2-right {
                padding: 0em 0em 2em 0em;
                float: none;
                width: 100%;
            }


        .colorcard {
            border-left: 10px solid #FA5632;
            border-top: 10px solid #FAB732;
        }

        .colorcard button {
            border-radius: 20px;
            background-color: #FA5632;
            border-color: #FA5632;
            color: #fff;
        }

        .colorcard .mainCardBody .leftCardBody .logo {
            background-color: #FA5632;
            color: #fff;
            border-radius: 50%;
            padding: 10px;
            display: inline-block;
        }

        .colorcard .mainCardBody .mainDots div:nth-child(1) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #FA5632;
            display: inline-block;
        }

        .colorcard .mainCardBody .mainDots div:nth-child(2) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #FAB732;
            display: inline-block;
        }

        .colorcard .mainCardBody .mainDots div:nth-child(3) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: black;
            display: inline-block;
        }

        .colorcard-1 {
            border-left: 10px solid #8B45F1 !important;
            border-top: 10px solid #634492 !important;
        }

        .colorcard-1 button {
            border-radius: 20px;
            background-color: #FA5632 !important;
            border-color: #FA5632 !important;
            color: #fff !important;
        }

        .colorcard-1 .mainCardBody .leftCardBody .logo {
            background-color: #CF1D73 !important;
            color: #fff !important;
            border-radius: 50% !important;
            padding: 10px !important;
            display: inline-block;
        }




        .colorcard-1 .mainCardBody .mainDots div:nth-child(1) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #8B45F1;
            display: inline-block;
        }

        .colorcard-1 .mainCardBody .mainDots div:nth-child(2) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: pink;
            display: inline-block;
        

        .colorcard-1 .mainCardBody .mainDots div:nth-child(3) {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #634492;
            display: inline-block;

        }
.container{
    border: 8px solid black;
   width: 200px;
   height:300px;
    
}
    
      

        :not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
            width: 100%;
        }
        .borderClass{
            border: 5px solid #e61d2f;
            padding: 20px 3px;
            border-radius: 10%;
        }

        @import url('//netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css');
        .container {
            margin-top: 30px;
            width: 400px;
        }
        
    </style>
</head>
<div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg-1" style="margin-left:38px;" tabindex="-1"
role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container">


            <div class="modal-header">
                <h5 class="modal-title">Forland Modern Motors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row p-2" style="border: 2px solid gray; border-radius: 10px;">


                    {{ session()->put('CID','125')}}
                    <div class="col-md-3 mainCol">
                        <label class="labels" for="">Purchase</label>
                        <div style="border-right: 2px solid gray;" class="leftBtns">
                            <button class="btn btn-myPrimary-add"
                                onclick="location.href = '/bo'">Book
                                Order</button><br>
                            <button class="btn btn-mysecondary"
                                onclick="location.href = '/d'">Dilevery</button><br>
                            <button data-toggle="modal" id="killme"
                                data-target="#staticBackdrop"
                                class="btn btn-mysecondary">Quotation</button><br>


                            <button class="btn btn-mysecondary"
                                onclick="location.href = '/dl'">Dilevery
                                letter</button><br>
                            <button class="btn btn-mysecondary"
                                onclick="location.href = '/ct'">Comissions</button><br>
                        </div>

                    </div>
                    <div class="col-md-3 mainCol">
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
                                    class="btn btn-myPrimary-add">taxes</button><br></a>
                            <a href="/vc"><button class="btn btn-myPrimary-add">View
                                    Customer</button><br></a>

                        </div>
                    </div>
                    <div class="col-md-3 mainCol">
                        <label style="margin-left: 30px;" class="labels"
                            for="">Stock</label>
                        <div style="border-right: 2px solid gray;" class="leftBtns">

                            <a href="/as"> <button class="btn btn-myPrimary-add">Add
                                    Stock</button><br></a>
                            <a href="/ip"><button class="btn btn-mysecondary">Increase
                                    In price</button><br></a>
                            <a href="/stock"> <button
                                    class="btn btn-myPrimary">Stock</button><br></a>
                            <a href="/sp"> <button class="btn btn-mysecondary">View
                                    Spare Parts</button><br></a>
                            <a href="/vs"> <button class="btn btn-myPrimary">View
                                    Stock</button><br></a>
                        </div>
                    </div>
                    <div class="col-md-3 mainCol">
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
                                    class="btn btn-myPrimary-add">Expenses</button><br></a>

                            <a href="/ads"><button
                                    class="btn btn-myPrimary-add">Supplier</button><br></a>

                        </div>
                    </div>




                </div>

            </div>

        </div>
    </div>
</div>
</div>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <div class="header-main">
                <div class="modal fade" style="overflow: auto;padding-left: 45px;" id="staticBackdrop"
                    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Quotation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" class="appointment-form" id="appointment-form">
                                    <h2></h2>
                                    <div class="form-group-1">
                                        <input type="text" name="title" id="customerName" placeholder="Customer Name"
                                            required />

                                        <input type="text" name="address" id="address" placeholder="Address" required />
                                        <input type="text" name="phone_number" id="contact" placeholder="Contact"
                                            required />
                                        <label for="Model">Select Model</label>
                                        <select name="Select Model" class="selectpicker form-control"
                                            data-live-search="true" id="model" onchange="updateModelData()">

                                        </select>

                                        <input type="text" name="phone_number" id="description"
                                            placeholder="Description" required />
                                        <input type="text" name="phone_number" id="color" placeholder="Color"
                                            required />
                                        <input type="text" name="phone_number" id="qvt"
                                            placeholder="Quotation Validity Time" required />
                                        <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
                                            required />
                                        <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
                                            required />
                                        <input type="text" name="phone_number" id="unitPrice" onchange="calculation()"
                                            placeholder="Unit Price" required />
                                        <input type="text" name="phone_number" id="quantity" placeholder="Quantity"
                                            onchange="calculation()" required />
                                        <input type="text" name="phone_number" id="totalPrice" placeholder="Total Price"
                                            required />


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

                        </div>

                    </div>
                </div>
                <div class="header-left">
                    <div class="logo-name">
                        <a href="/db">
                            <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <div class="profile_details_left">


                      

                  
                        
                       


                        <div class="clearfix"> </div>
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
                <!-- <ul class="nav nav-pills   mb-3" style="justify-content: center;" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Last 7 Days</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                            aria-controls="pills-contact" aria-selected="false">This Month</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-year-tab" data-toggle="pill" href="#pills-year" role="tab"
                            aria-controls="pills-year" aria-selected="false">This Year</a>
                    </li>
                </ul> -->
                <div class="clearmain"></div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="market-updates">
                            <div class="row">


                                <div class="col-md-4 market-update-gd"  >
                                    <div data-toggle="modal" data-target="#bd-example-modal-lg"
                                        class="market-update-block clr-block-1">
                                        <h3 id = "monthlyamount"> 0</h3><br>
                                        <h4>This Month</h4>
                                        <h4 id = "monthlysale">Total Sales: 0</h4>
                                            
                                    </div>
                                </div>
                                <div class="col-md-4 market-update-gd">
                                    <div class="market-update-block clr-block-3" href="/ac">
                                        <div class="col-md-8 market-update-left">
                                            <h3 id = "monthlyexpense">0</h3><br>
                                            <h4>This Month</h4>
                                            <h4 id= "totalexpense">Total Expenses: 0</h4>

                                        </div>
                                       
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 market-update-gd">
                                    <div class="market-update-block clr-block-3">
                                        <div class="col-md-8 market-update-left">
                                            <h3 id="balance">23</h3><br>
                                            <h4>Balance Due To FJW</h4>

                                        </div>
                                        <div class="col-md-4 market-update-right">
                                           
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                         
             
                
               
       


            </div>


        </div>

            
            <div id="piechart"></div>
            <br>
            <div id="top_x_div" style="width: 900px; height: 500px;"></div>
            <br>
            <div id="chart_div" style="width: 400px; height: 120px;"></div>
            <br>
            


    @include('adminNavbar')

    <div class="clearfix"> </div>


</div>
