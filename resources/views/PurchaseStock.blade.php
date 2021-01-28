<!DOCTYPE html>

<html lang="en">


<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Purchase Stock</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


        @-moz-document url-prefix() {

            input {
                width: 150px;

            }

            #prod-1-contact {
                width: 155px;
            }

            #prod-1-category {
                width: 155px;

            }
        }



        .inv-bor-btns {
            text-align: center !important;
            margin-top: 10px;
        }

        #kt_bodys .okay-invo label {
            font-size: 13px !important;
            width: 100px;
        }

        .okay-invo-1 label {
            font-size: 14px !important;
        }

        .bootstrap-select .dropdown-toggle {
            width: 107px !important;
            height: 30px !important;

        }

        .bootstrap-select .dropdown-toggle .filter-option {
            position: absolute;
            top: -5px !important;
            left: 0;
            padding-top: inherit;
            padding-right: inherit;
            padding-bottom: inherit;
            padding-left: inherit;
            height: 100%;
            width: 100%;
            text-align: left;
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
            color: black;

        }

        .okay-invo-3 label {
            font-size: 15px !important;

        }

        .okay-invo-3 input {
            width: 150px !important;
        }

        input {
            border-color: #aaaaaa !important;
        }

        .input-field input {
            border: none !important;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


















        .btn:hover {
            color: #fff;
        }


        .dropdown-toggle::after {
            transition: transform 0.15s linear;
        }

        .show.dropdown .dropdown-toggle::after {
            transform: translateY(3px) !important;
        }



        .btn-bill-1 {
            background-color: #ff4400;
            padding: 5px 35px;
            margin: 10px 0px;
            float: right;

        }



        .main-cards-10 {
            padding: 10px;
        }

        .clear {
            clear: both;
        }

        .bill-content .container {
            max-width: 1360px;
        }

        .btn-back-1 {
            background-color: #333;
        }

        .main-cards-card {
            padding: 10px;
        }

        .main-cards-card .row {
            margin: 10px 0px;
        }

        .main-cards-cust {
            padding: 10px;
        }

        .main-cards-cust .row {
            margin: 10px 0px;
        }

        .main-cards-10 .row {
            margin: 10px 0px;
        }



        .my-div {
            background-color: #ffffff;
            height: 300px;
            padding: 20px;
            border-radius: 20px;
        }

        .group-tables thead {
            background-color: #FF8C00;

        }

        table th {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;
        }

        table td {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;

        }

        /* thead tr th {
			border-right: 1px solid #333;
		} */

        .input-games .row {
            margin: 10px 0px;
        }

        .btn-save {
            background-color: #ff4400;

            width: 150px;
            margin: 5px 0px;
            color: #fff;

        }


        .btn-save:hover {
            color: #fff;
        }


        .btn {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .complete {
                text-align: center;
                margin: 0 auto;
            }

            #last-balance {
                margin: 10px 0px !important;
            }

            .bill-content .container {
                max-width: auto;
            }

            #Supplier {
                margin: 10px 0px !important;

            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .myLabel header label {
            width: 120px;
            font-size: 14px;
        }

        .myLabel fieldset {
            border: 1px solid #333;
            padding: 10px;
        }

        .myLabel legend {
            width: auto;
        }

        .myLabel .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .myLabel .btn-my {
            float: right;
            width: 180px;
            font-size: 14px;
        }

        .myLabel .main-section label {
            width: 120px;
            font-size: 10px;
        }

        .myLabel .main-3 label {
            width: 120px;
            font-size: 10px;

        }

        .myLabel fieldset input {
            height: 20px;
        }

        .myLabel fieldset label {
            font-size: 10px !important;
        }


        .stocks input::placeholder {
            padding-left: 10px;
        }

        .stocks .table-section {
            border: 1px solid #333;
        }

        .stocks .myTable {
            margin: 30px 0px;
        }

        .my-main-tables {
            height: 425px !important;
        }


        .labels label {
            width: 120px;
            font-size: 14px;
        }

        .labels fieldset {
            border: 1px solid #333;
            padding: 20px;
        }

        .labels legend {
            width: auto;
        }

        .labels .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .labels .btn-my {
            float: right;
        }

        .invoice-head-1 input {
            height: 20px;
            width: 120px;
        }

        .invoice-head-1 label {
            font-size: 11px;
            width: 150px;
        }

        .inv-border {
            border: 1px solid #333;
            padding: 5px;
        }

        .inv-border-1 label {
            width: 80px;
        }

        .inv-border-1 {
            border: 1px solid #333;
            padding: 5px;

        }

        .invoice-succ {
            display: inline-block;
        }

        .btn-inv-btn {
            height: 21px;

        }

        .inv-border-1 label {
            font-size: 11px;
        }



        .text-center .btn {
            width: 100px;
            font-size: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .AZD label {
            width: 83px;
            font-size: 12px;
        }

        .AZD a {
            text-decoration: none;
        }

        .main-cof a {
            background-color: #f9f9f9;
            padding: 15px;
            display: inline-block;
            margin: 10px 0px;
        }

        .main-ids input {


            margin: 10px 0px;

        }

        #sub {
            display: block;

        }

        .cent {
            text-align: center !important;
        }



        .clear {
            clear: right;
        }








        td input {
            border: none;
            outline: none;
        }

        .container {
            max-width: 1350px;
        }

        .text-center .btn {
            font-size: 11px;
            letter-spacing: .3px;
            font-weight: 400;

        }





        .okay-invo {
            border: 1px solid rgb(196, 218, 243);
            border-radius: 10px;
            padding: 10px 10px;
        }

        .okay-invo label {
            width: 110px;
        }



        .ctrl-1 {
            width: 93px;
            font-size: 9px;
        }

        .okay-invo-1 label {
            width: 111px;

        }

        .o-inv {
            float: left;
        }

        .o-inv-2 {
            float: right;

        }


        .dropdown {
            width: 160px !important;



        }

        /* .select{
    height: 20px !important;
    width: 120px !important;
} */
        .bs-placeholder.btn {
            border: 1px solid #222 !important;
        }

        #kt_bodys input {
            border: 1px solid #222;
        }

        #kt_bodys .okay-invo label {
            font-size: 10px;
            width: 100px;
        }

        #kt_bodys .okay-invo .modal-content label {
            font-size: 10px;
            width: 190px;
        }

        #kt_bodys .okay-invo-1 label {
            font-size: 10px;
        }

        #kt_bodys .okay-invo-3 label {
            font-size: 10px;
        }

        .okay-invo-3 label {
            width: 100px;
        }

        .myGoggle {
            border: 1px solid rgb(196, 218, 243);
            height: 425px;
            border-radius: 10px;
        }

        .inv-bor-btns {
            text-align: right;
            margin-top: 10px;
        }

        .inv-bor-btns button {
            width: 90px;
        }

        .centhour {
            text-align: center;
            margin-top: 10px;
        }

        .centhour button {
            width: 76px !important;
        }

        #prod-hour {
            visibility: hidden;
        }



        /* add */

        /* .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    
    
    } */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
    overflow: hidden;
} */

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;


        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title {
            font-size: 2.2rem;
            color: #444;
            margin-bottom: 10px;

        }

        .input-field {
            max-width: 380px;
            width: 80%;
            height: 40px;
            background-color: #f0f0f0;
            margin: 5px 0;

            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 .5rem;
        }

        .input-field a {
            text-align: center;
            line-height: 40px;
            color: #FF8C00;
            font-size: 1.1rem;


        }

        select {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        #holdPlz {
            display: none;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }



        .social-text {
            padding: .7rem 0;
            font-size: 1rem;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            border: 1px solid #333;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #FF8C00;
            border-color: #e24911;
        }

        .header-data {
            position: relative;
            height: 100vh;
            width: 100vw;
        }

        .header-data-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .header-data-main button {
            margin: auto 7px;
        }

        .btn-org {
            background-color: #ff4400;
        }

        .btn-org-2 {
            color: #FF8C00;
            border: 1px solid #FF4500;
        }

        .btn-org-2:hover {
            background-color: #FF4500;
            color: #fff;
        }

        .btn-org:hover {
            color: #fff;
        }

        .btn-org-1 {
            background-color: #FF8C00;
        }

        .btn-submit {
            margin-top: 10px;

        }

        .btn-submit:hover {
            color: #fff;
        }

        .modal {
            overflow: hidden;
        }



        #kt_body .sign-in-form input {
            border: none !important;
        }

        #gross {
            height: 3em !important;
        }

        #a-paid {
            height: 2.5em;
            margin-top: 7px !important;
        }

        #R-balance {
            height: 2.5em !important;
        }

        .total-buttons button {
            width: 75px;
            height: 35px;
        }

        .total-buttons {
            margin-top: 10px;
        }

        .hye-1 {
            border: 1px solid rgb(196, 218, 243);
            height: 430px;
            border-radius: 10px;

        }

        .okay-invo-1 {
            border: 1px solid rgb(196, 218, 243);
            padding-top: 10px;
            border-radius: 10px;

        }

        .bg-success {
            background-color: #28a745 !important
        }

        .btn.btn-primary:hover {
            border-color: #007bff;
        }

        @media only screen and (max-width: 768px) {
            #kt_bodys {
                text-align: center;
            }
        }

        @media only screen and (max-width: 1024px) {
            .o-inv-2 {
                float: left;
            }

            .o-inv-2 label {
                width: 100px;
                text-align: left;
            }

            .o-inv {
                /* width: 100px; */
                text-align: left;
            }

            .inv-bor-btns {
                text-align: center;
            }

            .inv-bor-btns button {
                margin: 5px 0px;
            }

            .clear {
                clear: left;
            }




            .okay-invo label {
                width: 90px;
            }

            .okay-invo #prod-1 {
                width: 100px !important;
            }

            .okay-invo label {
                font-size: 8px;
            }

            .centhour button {
                width: 70px !important;
                font-size: 10px;
            }

            .okay-invo-1 label {
                width: 60px !important;
                font-size: 7px;

            }

            .total-buttons button {
                width: 48px;
                height: 40px;
                font-size: 10px;
            }

            .total-buttons {
                margin-top: 10px;
            }

            .myGoggle {
                height: 477px;

            }

            .inv-bor-btns {
                margin-top: 10px;
            }
        }


        .registration-form {
            padding: 50px 0;
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
            margin-bottom: 5px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }

        .registration-form input {
            width: auto !important;
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

        input[type="number"]:focus,
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


        @media only screen and (max-width: 768px) {


            .okay-invo-1 label {
                width: 120px !important;
                font-size: 7px;
                text-align: left !important;

            }

            .dropdown {
                width: auto !important;
            }

            .o-inv-2 {
                margin-left: 20px;
            }

        }

        @media only screen and (max-width: 686px) {

            .o-inv-2 {
                margin-left: 0px;
            }

        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
            /* .okay-invo {
                display: none;
            } */
        }

        /* your css rules for ipad landscape */


        @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {

            .okay-invo-hide {
                display: none;
            }

            .okay-invo {
                width: 100% !important;
            }


        }

        @media only screen and (max-width: 768px) {

            .overFlowingTable table thead th {
                font-size: 10px !important;
            }




        }

        /* Landscape*/

        @media only screen and (min-device-width: 1366px) and (max-device-height: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {}

        /* Portrait*/
        @media only screen and (min-device-width: 1024px) and (max-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {

            .okay-invo-hide {
                display: none;
            }
        }


        @media screen and (device-aspect-ratio: 40/71) {
            #InvoiceID {
                width: 150px !important;
            }

            #invo-1 {
                width: 150px !important;
            }
        }

        @media screen and (device-aspect-ratio: 16/9) {
            .okay-invo-hide {
                display: none;
            }
        }

        @media only screen and (max-width: 1197px) {
            .okay-invo-hide {
                display: none;
            }
        }


        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .dropdown {
            width: 117px !important;
            height: 30px !important;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        .okay-invo input {
            width: 107px;
        }

        .okay-invo-1 input {
            width: 107px;
        }

        .fa-bars {
            color: #fff;
        }

        .okay-invo-3 label {
            width: 80px;
        }

        .modal-content {
            border: none !important;
            margin-left: 130px;
            margin-top: -29px;
        }

        .okay-invo-3 .bootstrap-select .dropdown-toggle {
            width: 150px !important;
            height: 30px !important;

        }

        .img-fluid {
    max-width: 100% !important;
    height: 151px!important;
  
}
img{
    width:100% !important;
}
    </style>
</head>


<body id="kt_bodys" onload="getPartsAndServices()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Purchase Stock</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3  col-lg-6 col-md-6  okay-invo">
                            <label for="invo-1">Invoice Number</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="InvoiceID">
                            <button class="btn" style="height: 25px; margin-top: -5px;background-color: rgb(231 172 61);"
                                onclick="getInvoiceStock()"></button>
                            <label for="prod-1">Product Number</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="invo-1">
                            <button type="button" class="btn"
                                style="height: 25px; margin-top: -5px;background-color:#000000;" data-toggle="modal"
                                data-target=".bd-example-modal-xl"></button>

                            </button>



                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-xl">
                                    <div class="modal-content">
                                        <div class="container">
                                            <div class="row">

                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="overFlowingTable"
                                                    style="overflow: auto !important; width: 1118px !important; margin: 15px auto !important; ">


                                                    <table class="table  table-bordered " id="searchProductTable">
                                                        <thead>
                                                            <tr>

                                                                <th>Product Id</th>

                                                                <th>Product Name</th>
                                                                <th>Company</th>
                                                                <th>Price</th>
                                                                <th>Stock</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                                    <button type="button" class="btn btn-org-1"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" data-dismiss="modal"
                                                        class="btn btn-org-1">Okay</button>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <label style="visibility: hidden;" for="prod-hour">Product Number</label>
                            <!-- <input type="number" class="form-control" style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="invo-1"> -->
                            <br>
                            <div class="centhour">
                                <button class="btn btn-new" style="background-color: rgb(231 172 61)">New</button>
                                <button class="btn btn-edit" style="background-color: #000000;">Edit</button>
                                <button class="btn" style="background-color: rgb(231 172 61);">Delete</button>
                            </div>
                            <!-- <button class="btn btn-danger ctrl-1">Delete Invoice</button> -->
                        </div>

                        <div class="col-md-6  okay-invo-1">
                            <div class="o-inv">
                                <label for="invo-1">Supplier Id</label>
                                <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="SID">
                                <button class="btn "
                                    style="height: 25px; margin-top: -5px; background-color: rgb(231 172 61);"></button>
                                <br>
                                <label for="prod-1">Last Balance</label>
                                <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="LastBalance">
                                <button class="btn "
                                    style="height: 25px; margin-top: -5px; background-color:#000000"></button>
                                <br>
                                <label for="prod-1">Current Balance</label>
                                <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CurrentBalance">

                            </div>
                            <div class="o-inv-2">


                                <label for="issue-3">Supplier Name</label>
                                <select class="selectpicker" data-live-search="true" tabindex="null" id="SupplierName"
                                    onchange="getCurrentSupplierInfo()">
                                    <!-- from database -->
                                </select>


                                </button>

                                <br>
                                <label for="prod-1">Contact Number</label>
                                <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CNO">
                                <br>
                                <label for="prod-1">Category</label>
                                <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="SupplierCategory">
                                <br>
                            </div>
                            <div class="clear">

                            </div>
                            <div class="inv-bor-btns">
                                <button class="btn " style="background-color:rgb(231 172 61);" data-toggle="modal"
                                    data-target="#staticBackdrop">Add</button>



                                <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background:none;">

                                            <div class="modal-body">

                                                <div class="registration-form">
                                                    <form>
                                                        <div class="SupplierAddition  mb-3"
                                                            style="margin-top:-20px !important;">
                                                            <h2>Add Supplier</h2>

                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="username"
                                                                placeholder="Supplier ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="password"
                                                                placeholder="Supplier Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Dummy">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="button"
                                                                class="btn btn-block create-account">Add</button>
                                                        </div>


                                                    </form>

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <button class="btn " style="background-color: #000000;">View</button>
                                <button class="btn " style="background-color:rgb(231 172 61);">History</button>
                                <button class="btn " style="background-color: #000000;">Info</button>
                            </div>
                        </div>

                        <div class="col-md-3 okay-invo okay-invo-hide">
                            <img src="data:image/png;base64,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" class="img-fluid"
                                alt="">
                        </div>



                    </div>

                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 myGoggle" style="overflow-x: auto; overflow-y: auto;">
                            <div>
                                <table style="border:1px solid rgb(196, 218, 243); width:100%;  margin-top:10px;  "
                                    id="ProductSaleTable">

                                    <thead>
                                        <tr>

                                            <th>Product ID</th>

                                            <th>Product Name</th>
                                            <th>Company</th>
                                            <th>Purchase Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- this will be populated from database -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-3 okay-invo-3">
                            <label for="invo-1">Total</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="Total">

                            <label for="prod-1">Discount</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="DiscountOverall" value="00" onchange="calc()">
                            <label for="invo-1">Gross Total</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="grossTotal">
                            <label for="prod-1"> Tax 17%</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="tax" onchange="calc()">
                            <label for="prod-1">Net Total</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="NetTotal">
                            <label for="invo-1" style=" font-weight: 500;">Amount Paid</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="AmountPaid" onchange="calcForBalance()">
                            <label for="prod-1" style=" font-weight: 500;">Remaining Balance</label>
                            <input type="number" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="RemainingBalance">
                            <label for="">Paid From</label>
                            <select class="selectpicker form-control" data-live-search="true" id="accounts"
                                tabindex="null">



                            </select>

                            <div class="total-buttons" id="hideme">
                                <button class="btn" style="background-color: rgb(231 172 61);"
                                    onclick="insertInOrder()">Save</button>
                                <button class="btn" style="background-color: #000000;">Print</button>
                                <button class="btn" style="background-color:rgb(231 172 61);">Edit</button>
                            </div>
                            <div class="total-buttons" id="hideme">
                                <button class="btn" style="background-color: #000000;">Hold</button>
                                <button class="btn" style="background-color: rgb(231 172 61);">Update</button>
                                <button class="btn" style="background-color: #000000;">Delete</button>
                            </div>




                        </div>
                    </div>
                </div>

                <section>
                    <div class="total-buttons mb-5" id="holdPlz" style="text-align: center;">
                        <button class="btn" style="background-color:#0a549d;">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>

                        <button class="btn btn-info">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>
                    </div>
                </section>
            </div>
        </div>
        <div class="sidebar-menu">

            <div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
                    <span id="logo"></span>
                </a> </div>
            <div class="menu">
                <ul id="menu">
                    <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span
                                style="font-size: 18px;">Dashboard</span></a>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Products</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled firstULs ">
                            <li><a href="/">Category</a></li>
                            <li><a href="/vs">Product Record</a></li>
                            <li><a href="/as">Add Product</a></li>
                            <li><a href="/">Barcode</a></li>

                            <li><a href="/">Stock Audit</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs1"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Customer</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs1">
                            <li><a href="/">Add Customer</a></li>
                            <li><a href="/vs">Customer List</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs2"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Supplier</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs2">
                            <li><a href="/">Add Supplier</a></li>
                            <li><a href="/vs">Supplier List</a></li>
                        </ul>
                    </li>
                    <li id="menu-comunicacao"><a data-toggle="collapse" data-target=".firstULs3"><i
                                class="fab fa-alipay"></i>
                            <span style="font-size: 18px;">Purchase</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs3">
                            <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                            </li>
                            <li><a href="">Daily Purchase</a></li>
                            <li><a href="">Monthly Purchase</a></li>
                            <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs4"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">POS</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs4">
                            <li><a href="/ss">POS</a></li>
                            <li><a href="/sc">Add Sale</a></li>
                            <li><a href="">Daily Sales</a></li>
                            <li><a href="">Monthly Sales</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                                style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs5">
                            <li><a href="/ex">Add Expense</a></li>
                            <li><a href="">Expense List</a></li>
                            <li><a href="">Expense Head</a></li>
                            <li><a href="">Expense Category</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs6"><i class="fas fa-quote-right"></i><span
                                style="font-size: 18px;">Quotation<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs6">
                            <li><a href="/ql">Quotation List</a></li>
                            <li><a href="/is">Add Quotation</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs7"><i class="fas fa-random"></i><span
                                style="font-size: 18px;">Transfer<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs7">
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="">Transfer Funds</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs8"><i class="fas fa-undo-alt"></i><span
                                style="font-size: 18px;">Return<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs8">
                            <li><a href="/ss">Sale</a></li>
                            <li><a href="/is">Purchase</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs9"><i
                                class="fas fa-user-circle"></i><span style="font-size: 18px;">Accounts</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs9">
                            <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                            <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs10"><i class="fab fa-accusoft"></i><span
                                style="font-size: 18px;">HR</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs10" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">Add Employee</a></li>
                            <li id="menu-academico-boletim"><a href="/">View Employee</a></li>
                        </ul>
                    </li>



                    <li><a data-toggle="collapse" data-target=".firstULs11"><i class="fas fa-people-carry"></i><span
                                style="font-size: 18px;">People</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs11" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">User List</a></li>
                            <li id="menu-academico-boletim"><a href="/">Add User</a></li>


                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i
                                style="font-size: 20px;" class="fab fa-stack-overflow"></i><span
                                style="font-size: 18px;">Stock</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs12" id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/as">Add New Stock</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/vs">View Stock</a></li>
                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs13"><i
                                class="fas fa-flag-checkered"></i><span style="font-size: 18px;">Reports</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs13" id="menu-academico-sub">
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
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs14"><i
                                class="fas fa-truck-loading"></i><span style="font-size: 18px;">Order
                                Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
                        <ul class="collapse firstULs14" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

                        </ul>
                    </li>


                    <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                                style="font-size: 18px;">PayRoll</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs15" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                            <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                            <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i
                                class="fas fa-guitar"></i><span style="font-size: 18px;">Attendance</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs16" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                            <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
                        </ul>

                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs17"><i class="fas fa-eye"></i><span
                                style="font-size: 18px;">Task View</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="firstULs17 collapse" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                            <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
                        </ul>
                    </li>

                    <li><a data-toggle="collapse" data-target=".firstULs18"><i class="fas fa-cogs"></i><span
                                style="font-size: 18px;">Account Settings</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs18" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                            <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
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
            $('#myTables').DataTable();
        });

    </script>
</body>




<script>
    function getPartsAndServices() {
        var xhttp = new XMLHttpRequest();
        var CatID = 21;
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                //alert(data);
                var table;
                var a = JSON.parse(data);
                //  alert(a[0].ProductSerial);
                table = $('#searchProductTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i].PerUnitSalePrice, a[
                        i].StockIn]);
                });
                table.draw();
            }
        };

        xhttp.open("GET", "./getPartsAndServices", true);
        xhttp.send();
        calc();
        LoadAllSupliers();
        loadAccounts();
        getInvoiceID();


    };



    function LoadAllSupliers() {



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // alert(this.responseText);
                document.getElementById("SupplierName").innerHTML =
                    this.responseText;
                $('#SupplierName').selectpicker('refresh');

            }
        };

        xhttp.open("GET", "./getAllSupliers", true);
        xhttp.send();
    };

    function getCurrentSupplierInfo() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                var a = JSON.parse(data);
                document.getElementById("SID").value = a[0].LID;
                document.getElementById("LastBalance").value = a[0].Balance;
                document.getElementById("CurrentBalance").value = a[0].Balance;
                calc();
                document.getElementById("CNO").value = a[0].ContantNo;
                //  document.getElementById("SupplierCategory").value = a[0].SupplierCatogery;




            } else {
                //alert( this.responseText);
            }
        };
        var SupplierID = $('#SupplierName').find(":selected").val();

        xhttp.open("GET", "./getSuppliersInfo/" + SupplierID, true);
        xhttp.send();


    }



    function AddSupplier() {

        var SupplierName = document.getElementById("SupplierName").value;
        //	alert("It is working"+SupplierName);

        var password = document.getElementById("password").value;
        //	alert("It is working"+password);

        var SupplierContact = document.getElementById("Contact").value;
        //alert("It is working"+SupplierContact);


        var SupplierProfession = document.getElementById("Profession").value;
        //alert("It is working"+SupplierProfession);


        var SupplierBalance = 0;
        //alert("It is working"+SupplierBalance);

        var SupplierAddress = document.getElementById("Address").value;
        //alert("It is working"+SupplierAddress);

        var SupplierComments = document.getElementById("Comments").value;
        //alert("It is working"+SupplierComments);

        var Supplier = [SupplierName, password, SupplierContact, SupplierProfession, SupplierBalance, SupplierAddress,
            SupplierComments
        ];

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //  alert( this.responseText);
            }
        };
        var EC = JSON.stringify(Supplier);
        xhttp.open("GET", "./addSupplier/" + EC, true);
        xhttp.send();


    };


    function getInvoiceID() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("InvoiceID").value = this.response;
            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getOrderId", true);

        xhttp.send();


    }



    $(document).ready(function () {

        // code to read selected table row cell data (values).
        $("#searchProductTable").on('click', 'tr', function () {
            // get the current row



            var table = document.getElementById("ProductSaleTable");

            var PID = this.cells[0].innerText; // get current row 1st TD value
            var PNAME = this.cells[1].innerText; // get current row 2nd TD
            //var qty=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
            var CompanyName = this.cells[2].innerText; // get current row 3rd TD
            var SalePrice = this.cells[3].innerText; // get current row 3rd TD
            var qty = 1;
            if (IsItemExistInDataTable(PID)) {


                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);


                cell1.innerHTML = PID;
                cell2.innerHTML = PNAME;
                cell3.innerHTML = CompanyName;
                cell4.innerHTML = SalePrice;
                cell5.innerHTML =
                    '<input type="number" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
                cell6.innerHTML =
                    '<input type="number" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
                var tot = SalePrice * 1;
                cell7.innerHTML = tot;
                calc();






                //$("#searchModal").modal('hide');
                //calculation than enter price
                alert("Item added");


                cell8.innerHTML =
                    "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";

            } else {
                alert("Quantity Increased");
            }
        });
    });



    function taxCalculation() {





        var taxRate = 17.00;
        var grosstotal = document.getElementById('grossTotal').value;
        //alert(taxRate/100);
        var tax = Number(grosstotal) * (taxRate / 100);
        //	alert(tax);
        return tax;
    }

    function calc() {

        var table = document.getElementById('ProductSaleTable');
        var rows = table.rows;
        var total = 0;
        var cell;

        // Assume first row is headers, adjust as required
        // Assume last row is footer, addjust as required
        for (var i = 1, iLen = rows.length; i < iLen; i++) {
            cell = rows[i].cells[6];
            total += Number(cell.textContent || cell.innerText);
        }
        document.getElementById('Total').value = total.toFixed(2);
        var discount = document.getElementById('DiscountOverall').value;


        var gross = 0;
        gross = (Number(total) - Number(discount));
        document.getElementById('grossTotal').value = gross.toFixed(2);
        var net = 0;
        var tax = 0;
        var tax = taxCalculation();

        document.getElementById('tax').value = tax.toFixed(2);
        net = gross + Number(tax);
        //alert(net);
        document.getElementById('NetTotal').value = net.toFixed(2);
        document.getElementById('AmountPaid').value = net.toFixed(2);

        calcForBalance();
    }


    function RemoveThisRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        //alert(i);
        document.getElementById("ProductSaleTable").deleteRow(i);
        calc();
    }







    function calculationTrigerOnQtyValueChange(x) {

        var theRow = x.parentElement.parentElement;
        //	alert(theRow);
        var rx = x.parentElement.parentElement.rowIndex;
        //alert(rx);

        var salePrice = theRow.cells[3].innerText;
        //alert(salePrice);
        var qty = theRow.cells[4].children[0].value;
        var dis = theRow.cells[5].children[0].value;
        //  alert(dis);
        //  alert(qty);
        var tot = (salePrice * qty) - dis;


        theRow.cells[6].innerText = tot;
        calc();
        calcForBalance();



        // value of per unit price is got in 

    };

    function calcForBalance() {
        document.getElementById("CurrentBalance").value = document.getElementById('LastBalance').value;

        var Ap = document.getElementById('AmountPaid').value;
        var tot = document.getElementById('NetTotal').value
        var RBForInvoice = 0;
        RBForInvoice = (Number(tot) - Number(Ap)).toFixed(2);
        document.getElementById('RemainingBalance').value = RBForInvoice;
        var SupplierLastBalance = document.getElementById('LastBalance').value;
        var newBalance = Number(SupplierLastBalance) + Number(RBForInvoice);
        document.getElementById("CurrentBalance").value = newBalance;





    }

    function loadAccounts() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("accounts").innerHTML = this.response;
                $('#accounts').selectpicker('refresh');
            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getAccounts/", true);

        xhttp.send();
    }

    function IsItemExistInDataTable(item) {



        var table = document.getElementById("ProductSaleTable");
        for (var i = 0, row; row = table.rows[i]; i++) {


            if (item == row.cells[0].innerHTML) {


                var qty = row.cells[4].children[0].value;
                qty++;
                row.cells[4].children[0].value = qty;
                calculationTrigerOnQtyValueChange(row.cells[4].children[0]);




                return false;
            }

        }

        return true;
    };







    function insertInOrder() {

        var myTrows = [];
        var table = document.getElementById("ProductSaleTable");
        var myRow2 = [];

        //alert(sp);
        $('#ProductSaleTable tr').each(function (row, tr) {

            myTrows[row] = [

                $(tr).find('td:eq(0)').text(), //productID
                $(tr).find('td:eq(3)').text(), //purchase
                $(tr).find('td:eq(4) input[type="number"]').val(), //qty
                $(tr).find('td:eq(5) input[type="number"]').val(), //discount
                $(tr).find('td:eq(6)').text() //totamount


            ];


        });
        myTrows.shift();

        //var invoiceNumber=getInvoiceID();
        var tot = document.getElementById("Total").value;
        var discount = document.getElementById('DiscountOverall').value;
        var gross = document.getElementById('grossTotal').value;




        var tax = document.getElementById('tax').value;

        var netTotal = document.getElementById('NetTotal').value;
        var amp = document.getElementById('AmountPaid').value;
        var rmb = document.getElementById("RemainingBalance").value;


        var SID = document.getElementById("SID").value;
        var SLB = document.getElementById("LastBalance").value;

        var SCB = document.getElementById("CurrentBalance").value;
        var AID = $('#accounts').find(":selected").val();
        myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, SID, SLB, SCB, AID];




        var array = JSON.stringify(myRow2);



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Invoice =" + this.responseText + " is generated");

            }
        };

        xhttp.open("GET", "./addPurchaseForSS/" + array, true);

        // var MenuID=$('#Menus').find(":selected").val();




        xhttp.send();
    };

    function validation() {

    }

</script>

<script>
    function getInvoiceStock() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                //alert(data);
                var a = JSON.parse(data);
                document.getElementById("SID").value = a[0].SID;
                document.getElementById("LastBalance").value = a[0].Balance;
                document.getElementById("CurrentBalance").value = a[0].Balance;
                calc();
                document.getElementById("CNO").value = a[0].Contect;
                document.getElementById("SupplierCategory").value = a[0].Category;
                document.getElementById("SupplierName").value = a[0].SID;




            } else {
                //alert( this.responseText);
            }
        };
        var invoiceNumber = document.getElementById("InvoiceID").value;

        xhttp.open("GET", "./getInvoiceStock/" + invoiceNumber, true);
        xhttp.send();


    }

</script>

</html>
