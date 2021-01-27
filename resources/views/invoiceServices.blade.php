<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />


    <title>Invoice</title>
    <style>
        #SmallFontlabel label {
            width: 200px;
        }



        .SecondColor {
            background-color: #0a549d;
            border-radius: 10px;
            height: 35px;

        }

        .firstColor {
            background-color: #e61d2f;
            border-radius: 10px;

        }

        .ThirdColor {
            background-color: #e61d2f;
            border-radius: 10px;
            height: 35px;

        }

        label {
            width: 130px;
        }

        .head-left {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);

        }

        .input-field {
            margin: 5px 0px;
        }

        .btn-Search {
            background-color: #e61d2f;
            border-color: #e61d2f;
        }

        .head-right {
            /* border: 1px solid #333; */

            padding: 10px;
            border-radius: 10px;
        }

        table td:nth-child(2) {
            padding-left: 50px;
            font-weight: 800;
        }

        .date {
            padding: 0px 5px;
            padding-top: 3px;
            padding-bottom: 2px;
            color: #fff;

        }

        .head-right {
            height: 223px;
        }

        .LastInput {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            height: 229px !important;


        }

        .myMainRow {
            display: flex;
            justify-content: space-between;
            border: 1px solid #333;
            /* padding: 10px ; */
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }

        .myOwnRow-left {
            width: 50%;
            padding: 10px;
        }

        .myOwnROw {
            width: 50%;
            border-left: 1px solid #333;
            padding: 10px;
        }

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .myFooterButtons {
            text-align: right;
        }

        .myFooterButtons .btn {
            width: 150px !important;


        }

        .myFooterButtons a:nth-child(1) {
            background-color: #0a549d;
            color: #fff;
        }

        .myFooterButtons a:nth-child(2) {
            background-color: #0a549d;
            color: #fff;

        }

        .myFooterButtons a:nth-child(3) {
            background-color: #e61d2f;
            color: #fff;

        }

        .myFooterButtons a:nth-child(4) {
            background-color: #0a549d;
            color: #fff;

        }

        .image-Head h5 {
            font-weight: 800;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        /* @extend display-flex; */
        display-flex {
            display: flex;
            display: -webkit-flex;
        }

        /* @extend list-type-ulli; */
        list-type-ulli,
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        /* roboto-slab-300 - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Light"), local("RobotoSlab-Light"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        /* roboto-slab-regular - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        /* roboto-slab-700 - latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            src: url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot");
            /* IE9 Compat Modes */
            src: local("Roboto Slab Bold"), local("RobotoSlab-Bold"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.svg#RobotoSlab") format("svg");
            /* Legacy iOS */
        }

        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
            transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -webkit-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
        }

        input,
        select,
        textarea {
            outline: none;
            appearance: unset !important;
            -moz-appearance: unset !important;
            -webkit-appearance: unset !important;
            -o-appearance: unset !important;
            -ms-appearance: unset !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            appearance: none !important;
            -moz-appearance: none !important;
            -webkit-appearance: none !important;
            -o-appearance: none !important;
            -ms-appearance: none !important;
            margin: 0;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -o-box-shadow: none !important;
            -ms-box-shadow: none !important;
        }

        input[type=checkbox] {
            appearance: checkbox !important;
            -moz-appearance: checkbox !important;
            -webkit-appearance: checkbox !important;
            -o-appearance: checkbox !important;
            -ms-appearance: checkbox !important;
        }

        input[type=radio] {
            appearance: radio !important;
            -moz-appearance: radio !important;
            -webkit-appearance: radio !important;
            -o-appearance: radio !important;
            -ms-appearance: radio !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        figure {
            margin: 0;
        }

        p {
            margin-bottom: 0px;
        }

        input:-webkit-autofill {
            box-shadow: 0 0 0 30px white inset;
            -moz-box-shadow: 0 0 0 30px white inset;
            -webkit-box-shadow: 0 0 0 30px white inset;
            -o-box-shadow: 0 0 0 30px white inset;
            -ms-box-shadow: 0 0 0 30px white inset;
        }

        h2 {
            line-height: 1.8;
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #222;
            font-family: 'Roboto Slab';
            font-size: 20px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        h3 {
            font-weight: bold;
            color: #222;
            font-size: 15px;
            margin: 0px;
            margin-bottom: 35px;
        }

        .clear {
            clear: both;
        }


        .main {
            padding: 60px 0;
            position: relative;
        }


        .appointment-form {
            padding: 10px 60px 0px 60px;
        }

        .appointment-form input,
        select {
            width: 100%;
            display: block;
            border: none;
            border-bottom: 2px solid #ebebeb;
            padding: 5px 0;
            color: #222;
            margin-bottom: 11px;
            font-family: 'Roboto Slab';
        }

        .appointment-form input:focus,
        select:focus {
            color: #222;
            border-bottom: 2px solid #4966b1;
        }

        .appointment-form input[type=checkbox]:not(old) {
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            display: none;
        }

        .appointment-form input[type=checkbox]:not(old)+label {
            display: inline-block;
            margin-top: 7px;
            margin-bottom: 25px;
        }

        .appointment-form input[type=checkbox]:not(old)+label>span {
            display: inline-block;
            width: 13px;
            height: 13px;
            margin-right: 15px;
            margin-bottom: 3px;
            border: 1px solid #ebebeb;
            background: white;
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
            vertical-align: bottom;
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span {
            background-image: -moz-linear-gradient(white, white);
            background-image: -ms-linear-gradient(white, white);
            background-image: -o-linear-gradient(white, white);
            background-image: -webkit-linear-gradient(white, white);
            background-image: linear-gradient(white, white);
        }

        .appointment-form input[type=checkbox]:not(old):checked+label>span:before {
            content: '\f26b';
            display: block;
            color: #222;
            font-size: 11px;
            line-height: 1.2;
            text-align: center;
            font-family: 'Material-Design-Iconic-Font';
            font-weight: bold;
        }

        .appointment-form .label-agree-term {
            color: #999;
        }

        .appointment-form .term-service {
            color: #222;
        }

        .appointment-form .submit {
            width: auto;
            background: #4966b1;
            color: #fff;
            padding: 16px 17px;
            font-size: 13px;
            border: none;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -ms-border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
        }

        .appointment-form .submit:hover {
            background: #3a518d;
        }

        .appointment-form ul {
            background: 0 0;
            z-index: 9;
        }

        .appointment-form ul li {
            padding: 3px 0px;
            z-index: 2;
            color: #999;
        }

        ul li:last-child {
            border-bottom: 1px solid #ebebeb;
        }

        .appointment-form ul li:not(.init) {
            display: none;
            background: #fff;
            color: #222;
            padding: 5px 10px;
            border-left: 1px solid #ebebeb;
            border-right: 1px solid #ebebeb;
            border-top: 1px solid #ebebeb;
        }

        .appointment-form ul li:not(.init):hover,
        ul li.selected:not(.init) {
            background: #4966b1;
            color: #fff;
        }

        .appointment-form li.init {
            cursor: pointer;
            position: relative;
            border-bottom: 2px solid #ebebeb;
        }

        .appointment-form li.init:after {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            font-size: 20px;
            color: #999;
            font-family: 'Material-Design-Iconic-Font';
            content: '\f2f9';
        }

        .appointment-form #confirm_type {
            margin-bottom: 30px;
        }

        .appointment-form .form-group-2 {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .appointment-form .form-check {
            margin-bottom: 20px;
        }

        .appointment-form .select-list {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 55px;
        }

        .appointment-form .list-item {
            position: absolute;
            width: 100%;
        }

        .appointment-form #confirm_type {
            z-index: 99;
        }

        .appointment-form #hour_appointment {
            z-index: 9;
        }

        @media screen and (max-width: 1024px) {
            .container {
                margin: 0 auto;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                width: calc(100% - 30px);
                max-width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .appointment-form {
                padding: 50px 30px 70px 30px;
            }
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
            box-shadow: 0 10px 8px#0a549d inset, 0 13 15px #0a549d !important;
            outline: 0 none;
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

        @media only screen and (max-width: 641px) {

            .myMainRow {
                display: block;
            }

            .head-left {
                margin: 20px 0px;
            }

            .myFooterButtons .btn {
                margin: 10px 0px !important;
            }

            .LastInput {
                height: 315px !important;
            }

        }

        /* Invoice Services Media Query Starts */
        /* Invoice Services Media Query Ends */
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif;" onload="fetchAccounts()">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-1">
                <h4>Create Invoice</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="">Category</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Auto</option>
                    <option value=2>Service</option>
                    <option value=3>Parts</option>



                </select>
            </div>
            <div class="col-md-5 offset-md-3">
                <label for="">Modal / Services</label>
                <select class="selectpicker form-control" data-live-search="true" id="category" tabindex="null">
                    <option value=1>Forland C13</option>
                    <option value=2>Forland C12</option>
                    <option value=3>Forland C12</option>



                </select>
           
                <button class="btn btn-Search" data-toggle="modal" data-target=".bd-example-modal-lg"
                    style="height: 25px;" onclick="loadStock()"></button>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="firstColor my-4">
                        <div class="date text-right">
                            <h6> <strong>Date :</strong> 27/11/2020</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myMainRow">


                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <label for="status">Product ID</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="PID">
                            </div>
                            <div class="input-field">
                                <label for="status">Model</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ProductName">
                            </div>

                            <div class="input-field">
                                <label for="status">Color</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="color">
                            </div>

                            <div class="input-field">
                                <label for="status">Chassis Number </label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="ChasisNumber">
                            </div>
                            <div class="input-field">
                                <label for="status">Engine Number</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="EngineNumber">
                            </div>
                            <div class="input-field">
                                <label for="status">Status</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="Status">
                            </div>

                            <div class="input-field">
                                <label for="status">Description</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="description">
                            </div>

                            <div class="input-field">
                                <label for="status">Price + tax</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="TotalPrice">
                                <a style="font-size: 14px;" href="increaseInPrice.html" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">View Details</a>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Purchase Price Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="SmallFontlabel">
                                                <div class="input-field">
                                                    <label for="">Invoice Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                                <div class="input-field">
                                                    <label for="">Price With Additional Tax</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>


                                                <div class="input-field">
                                                    <label for="">Increase In Price</label>
                                                    <input type="text" name=""
                                                        style="display: inline-block; width: 200px;"
                                                        class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="status">Discount</label>
                                <input type="number" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" value="0" id="Discount" onkeyup="calc()">
                            </div>
                            <div class="input-field">
                                <label for="status">Net Total</label>
                                <input type="text" readonly class="form-control"
                                    style=" pointer-events: none; display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="NetTotal">
                            </div>
                        </div>
                        <div class="myOwnROw">



                            <div class="row">
                                <div class="col-md-5">
                                    <div class="image-Head px-1 ">
                                        <h5>Forland</h5>
                                        <p>
                                            Customer is always captured after sales
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="head-right">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="SecondColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="head-left">


                        <div class="input-field">
                            <label for="status">Client Name</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="CustomerName">
                            <button data-toggle="modal" data-target="#staticBackdrop" style="    height: 30px;
                               margin-top: -5px;" class="btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="input-field">
                            <label for="status">Client's Father Name</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="fatherName">
                        </div>
                        <div class="input-field">
                            <label for="status">Customer CNIC</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="CID">

                        </div>
                        <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <form method="POST" class="appointment-form" id="appointment-form">
                                            <h2>Create Invoice</h2>
                                            <div class="form-group-1">
                                                <input type="text" name="name" id="name" placeholder="Customer ID"
                                                    required />
                                                <input type="text" name="title" id="title" placeholder="Customer"
                                                    required />

                                                <input type="number" name="tel" id="tel" placeholder="Contact"
                                                    required />
                                                <input type="number" name="title" id="title" placeholder="ID Card"
                                                    required />
                                                <input type="number" name="phone_number" id="Profession"
                                                    placeholder="Address" required />
                                                <input type="number" name="phone_number" id="Profession"
                                                    placeholder="Profession" required />
                                                <input type="number" name="phone_number" id="Balance"
                                                    placeholder="Balance" required />

                                                <input type="number" name="phone_number" id="Profession"
                                                    placeholder="Comments" required />

                                                <div class="select-list">
                                                    <select name="course_type" id="course_type">
                                                        <option slected value="">Category</option>
                                                        <option value="society">Society</option>
                                                        <option value="language">Language</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-submit">
                                                <input onclick="modalValidation()" name="submit" id="submit"
                                                    class="submit" value="Add Customer" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-org-1" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="input-field">
                            <label for="status">Address</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="Address">
                        </div>
                        <div class="input-field">
                            <label for="status">Contact</label>
                            <input type="text" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="contact">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="LastInput">

                        <div class="input-field">
                            <label for="status">Amount Paid</label>
                            <input type="number" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountPaid" onkeyup="calcRemainingAmount()">
                        </div>
                        <div class="input-field">
                            <label for="status">Remaining</label>
                            <input type="number" autocomplete="OFF" class="form-control"
                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                name="name" id="amountRemaining">
                        </div>
                        <div class="input-field">
                            <label for="status">Payment Mode</label>
                            <select data-live-search="true" class=" selectpicker" id='slctAccounts'>



                            </select>
                        </div>
                        <div class="input-field">
                            <label for="status">Paid To</label>
                            <select data-live-search="true" class=" selectpicker" id="paidTo">
                                <option value=1>Forland Modren Motors</option>
                                <option value=2>FJW</option>


                            </select> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ThirdColor my-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center mt-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 offset-md-4 mb-2 myFooterButtons">
                    <a class="btn" href="viewCustomers.html">view Customers</a>
                    <a class="btn" href="deliveryLetter.html">Print Docs</a>
                    <a class="btn" onclick="validPlz()">Generate Sale</a>
                    <a class="btn" href="#">Close Form</a>




                </div>

            </div>
        </div>

    </footer>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-left:100px;">
            <div class="modal-content" style="width: 1300px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center my-4">Products Table</h4>
                            <table class="table  table-bordered mb-5" id="searchProductTable">
                                <thead>
                                    <tr>

                                        <th>Product Id</th>

                                        <th>Product Name</th>
                                        <th>Color</th>
                                        <th>Engine Number</th>

                                        <th>Chasis Number</th>

                                        <th>Purchse Price</th>
                                        <th>Cost with Additional charges</th>
                                        <th>Status</th>
                                        <th>Description</th>








                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script>
        (function ($) {
            // USE STRICT
            "use strict";

            $(".form-radio .radio-item").click(function () {
                //Spot switcher:
                $(this).parent().find(".radio-item").removeClass("active");
                $(this).addClass("active");
            });

            $('#course_type').parent().append('<ul class="list-item" id="newcourse_type" name="course_type"></ul>');
            $('#course_type option').each(function () {
                $('#newcourse_type').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#course_type').remove();
            $('#newcourse_type').attr('id', 'course_type');
            $('#course_type li').first().addClass('init');
            $("#course_type").on("click", ".init", function () {
                $(this).closest("#course_type").children('li:not(.init)').toggle('slow');
            });

            $('#confirm_type').parent().append(
                '<ul class="list-item" id="newconfirm_type" name="confirm_type"></ul>');
            $('#confirm_type option').each(function () {
                $('#newconfirm_type').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#confirm_type').remove();
            $('#newconfirm_type').attr('id', 'confirm_type');
            $('#confirm_type li').first().addClass('init');
            $("#confirm_type").on("click", ".init", function () {
                $(this).closest("#confirm_type").children('li:not(.init)').toggle('slow');
            });

            $('#hour_appointment').parent().append(
                '<ul class="list-item" id="newhour_appointment" name="hour_appointment"></ul>');
            $('#hour_appointment option').each(function () {
                $('#newhour_appointment').append('<li value="' + $(this).val() + '">' + $(this).text() +
                    '</li>');
            });
            $('#hour_appointment').remove();
            $('#newhour_appointment').attr('id', 'hour_appointment');
            $('#hour_appointment li').first().addClass('init');
            $("#hour_appointment").on("click", ".init", function () {
                $(this).closest("#hour_appointment").children('li:not(.init)').toggle('slow');
            });

            var allOptions = $("#course_type").children('li:not(.init)');
            $("#course_type").on("click", "li:not(.init)", function () {
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#course_type").children('.init').html($(this).html());
                allOptions.toggle('slow');
            });

            var FoodOptions = $("#confirm_type").children('li:not(.init)');
            $("#confirm_type").on("click", "li:not(.init)", function () {
                FoodOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#confirm_type").children('.init').html($(this).html());
                FoodOptions.toggle('slow');
            });

            var AppointmentOptions = $("#hour_appointment").children('li:not(.init)');
            $("#hour_appointment").on("click", "li:not(.init)", function () {
                AppointmentOptions.removeClass('selected');
                $(this).addClass('selected');
                $("#hour_appointment").children('.init').html($(this).html());
                AppointmentOptions.toggle('slow');
            });
        })(jQuery);

    </script>
</body>
<script>
    $(document).ready(function () {
        $('#myTables').DataTable();
    });

</script>
<script>
    function loadStock() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = this.responseText;
                //alert(data);
                var table;
                var a = JSON.parse(data);
                //  alert(a[0].ProductSerial);
                table = $('#searchProductTable').DataTable();
                table.clear();
                $.each(a, function (i, item) {

                    table.row.add([a[i].ProductID, a[i].ProductName, a[i].color, a[i].ChasisNumber, a[i].EngineNumber,
                        a[i].ActualPurchsePrice, a[i].TotalCost, a[i].StatusInStock, a[i].Remarks
                    ]);
                });
                table.draw();
            }
        };

        xhttp.open("GET", "./getAvailableProducts/", true);
        xhttp.send();
    }


    $(document).ready(function () {

        // code to read selected table row cell data (values).
        $("#searchProductTable").on('click', 'tr', function () {
            // get the current row



            var table = document.getElementById("ProductSaleTable");

            document.getElementById("PID").value = this.cells[0]
                .innerText; // get current row 1st TD value
            document.getElementById("ProductName").value = this.cells[1].innerText;
            document.getElementById("color").value = this.cells[2].innerText;
            document.getElementById("ChasisNumber").value = this.cells[3].innerText;

            document.getElementById("EngineNumber").value = this.cells[4].innerText;
            document.getElementById("Status").value = this.cells[7].innerText;
            document.getElementById("description").value = this.cells[8].innerText;
            document.getElementById("TotalPrice").value = this.cells[5].innerText;
            document.getElementById("Discount").value = "0";


            alert(this.cells[0].innerText);
        });
        calc();
    });

    function calc() {

        var tot = document.getElementById("TotalPrice").value;
        var dis = document.getElementById("Discount").value;

        var netTot = Number(tot) - Number(dis);

        document.getElementById("NetTotal").value = netTot;
        document.getElementById("amountPaid").value = netTot;

        calcRemainingAmount();


    }

    function calcRemainingAmount() {

        var tot = document.getElementById("NetTotal").value;
        var ap = document.getElementById("amountPaid").value;
        var rem = Number(tot) - Number(ap);
        document.getElementById("amountRemaining").value = rem;


    }



    function generateSale() {


        var pid = document.getElementById("PID").value;
        var totwT = document.getElementById("TotalPrice").value;
        var discount = document.getElementById('Discount').value;
        var netTotal = document.getElementById('NetTotal').value;
        var amp = document.getElementById('amountPaid').value;
        var rmb = document.getElementById("amountRemaining").value;
        var CID = document.getElementById("CID").value;
        var paidTo = document.getElementById("paidTo").value;
        var AID = document.getElementById("slctAccounts").value;

        var customerName = document.getElementById("CustomerName").value;
        var CNIC = document.getElementById("CID").value;
        var address = document.getElementById('Address').value;
        var contact = document.getElementById('contact').value;
        var fatherName = document.getElementById('fatherName').value;

        var engineNo = document.getElementById("EngineNumber").value;
        var chassisNo = document.getElementById('ChasisNumber').value;
        var color = document.getElementById('color').value;
        var description = document.getElementById('description').value;
        var productName = document.getElementById('ProductName').value;
       
        order = [pid, totwT, discount, netTotal, amp, rmb,
                CID, paidTo, AID, customerName, CNIC, address, 
                contact, fatherName, engineNo, chassisNo, color, description, productName];

        var array = JSON.stringify(order);

        alert(array);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Invoice =" + this.responseText + " is generated");


            }
        };
        // var MenuID=$('#Menus').find(":selected").val();
        xhttp.open("GET", "./addSales/" + array, true);
        xhttp.send();
        alert("Generated");
    };

</script>
<script>
    function fetchAccounts() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("slctAccounts").innerHTML = this.response;
                $('#slctAccounts').selectpicker('refresh');
            }
        };
        //alert("ljd");
        xhttp.open("GET", "./getAccountHeads/", true);

        xhttp.send();


    }

</script>
<script>
    function validPlz() {

        var PID = document.getElementById("PID").value;
        var ProductName = document.getElementById("ProductName").value;
        var ChasisNumber = document.getElementById("ChasisNumber").value;
        var EngineNumber = document.getElementById("EngineNumber").value;

        var Status = document.getElementById("Status").value;

        var TotalPrice = document.getElementById("TotalPrice").value;
        var Discount = document.getElementById("Discount").value;
        var NetTotal = document.getElementById("NetTotal").value;

        var CustomerName = document.getElementById("CustomerName").value;
        var CID = document.getElementById("CID").value;
        var Address = document.getElementById("Address").value;
        var contact = document.getElementById("contact").value;
        var fatherName = document.getElementById("fatherName").value;
        var amountPaid = document.getElementById("amountPaid").value;
        var amountRemaining = document.getElementById("amountRemaining").value;
        

        if (PID == "") {
            // alert("Product Id Field Must Be Valid");
            document.getElementById("PID").focus();
        } else if (ProductName == "") {
            // alert("Product Name Field Must Be Valid");
            document.getElementById("ProductName").focus();
        } else if (ChasisNumber == "") {
            // alert("Chasis Number Field Must Be Valid");
            document.getElementById("ChasisNumber").focus();


        } else if (EngineNumber == "") {
            // alert("Engine Number Field Must Be Valid");
            document.getElementById("EngineNumber").focus();


        } else if (Status == "") {
            // alert("Status Must Be Mentioned");
            document.getElementById("Status").focus();


        } else if (TotalPrice == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("Status").focus();

            document.getElementById("TotalPrice").focus();


        } else if (isNaN(TotalPrice)) {
            alert("Total Price Field Must Be Numeric");
            document.getElementById("TotalPrice").value = "";



        } else if (Discount == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("Discount").focus();


        } else if (isNaN(Discount)) {
            alert("Discount Field Must Be Numeric");
            document.getElementById("Discount").value = "";


        } else if (NetTotal == "") {
            // alert("Total Price Field Must Be Valid");
            document.getElementById("NetTotal").focus();


        } else if (CustomerName == "") {
            // alert("Customer Name Field Must Be Valid");
            document.getElementById("CustomerName").focus();


        } else if (CID == "") {
            // alert("Customer ID Field Must Be Valid");
            document.getElementById("CID").focus();


        } else if (Address == "") {
            // alert("Address  Must Be Mentioned");
            document.getElementById("Address").focus();


        } else if (contact == "") {
            // alert("Contact Field Must Be Valid");
            document.getElementById("contact").focus();


        } else if (isNaN(contact)) {

            alert("Contact Field Must Be Number");
            document.getElementById("contact").value = "";


        } else if (fatherName == "") {
            // alert("Manager Name Must Be Mentioned");
            document.getElementById("fatherName").focus();


        } else if (amountPaid == "") {
            // alert("Amount Paid  Must Be Mentioned");
            document.getElementById("amountPaid").focus();


        } else if (amountRemaining == "") {
            // alert("Amount Remaining  Must Be Mentioned");
            document.getElementById("amountRemaining").focus();


        } else {
            generateSale();

        }


    }

    $("body").on('keypress', function (event) {
        if (event.keyCode === 13) {
            validPlz();
        } else {}
    })




    function addCustomer() {



        alert("Customer Added");








    }

    function modalValidation() {
        var tel = document.getElementById("tel").value;
        var Balance = document.getElementById("Balance").value;

        if (tel == "") {
            document.getElementById("tel").focus();
        } else if (isNaN(tel)) {
            alert("Contact Should Be A Number");
        } else if (Balance == "") {
            document.getElementById("Balance").focus();
        } else if (isNaN(Balance)) {
            alert("Balance Field Should Be  Numeric");
        } else {
            addCustomer();
        }
    }

</script>

</html>
