<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <title>Quotation</title>
    <style>
        /*!
 * Bootstrap-select v1.13.1 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2018 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */
        .bootstrap-select>select.bs-select-hidden,
        select.bs-select-hidden,
        select.selectpicker {
            display: none !important
        }

        .bootstrap-select {
            width: 220px\9
        }

        .bootstrap-select>.dropdown-toggle {
            position: relative;
            width: 100%;
            z-index: 1;
            text-align: right;
            white-space: nowrap
        }

        .bootstrap-select>.dropdown-toggle.bs-placeholder,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
            color: #999
        }

        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:hover {
            color: rgba(255, 255, 255, .5)
        }

        .bootstrap-select>select {
            position: absolute !important;
            bottom: 0;
            left: 50%;
            display: block !important;
            width: .5px !important;
            height: 100% !important;
            padding: 0 !important;
            opacity: 0 !important;
            border: none
        }

        .bootstrap-select>select.mobile-device {
            top: 0;
            left: 0;
            display: block !important;
            width: 100% !important;
            z-index: 2
        }

        .bootstrap-select.is-invalid .dropdown-toggle,
        .error .bootstrap-select .dropdown-toggle,
        .has-error .bootstrap-select .dropdown-toggle,
        .was-validated .bootstrap-select .selectpicker:invalid+.dropdown-toggle {
            border-color: #b94a48
        }

        .bootstrap-select.is-valid .dropdown-toggle,
        .was-validated .bootstrap-select .selectpicker:valid+.dropdown-toggle {
            border-color: #28a745
        }

        .bootstrap-select.fit-width {
            width: auto !important
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 220px
        }

        .bootstrap-select .dropdown-toggle:focus {
            outline: thin dotted #333 !important;
            outline: 5px auto -webkit-focus-ring-color !important;
            outline-offset: -2px
        }

        .bootstrap-select.form-control {
            margin-bottom: 0;
            padding: 0;
            border: none
        }

        :not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
            width: 100%
        }

        .bootstrap-select.form-control.input-group-btn {
            z-index: auto
        }

        .bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .bootstrap-select:not(.input-group-btn),
        .bootstrap-select[class*=col-] {
            float: none;
            display: inline-block;
            margin-left: 0
        }

        .bootstrap-select.dropdown-menu-right,
        .bootstrap-select[class*=col-].dropdown-menu-right,
        .row .bootstrap-select[class*=col-].dropdown-menu-right {
            float: right
        }

        .form-group .bootstrap-select,
        .form-horizontal .bootstrap-select,
        .form-inline .bootstrap-select {
            margin-bottom: 0
        }

        .form-group-lg .bootstrap-select.form-control,
        .form-group-sm .bootstrap-select.form-control {
            padding: 0
        }

        .form-group-lg .bootstrap-select.form-control .dropdown-toggle,
        .form-group-sm .bootstrap-select.form-control .dropdown-toggle {
            height: 100%;
            font-size: inherit;
            line-height: inherit;
            border-radius: inherit
        }

        .bootstrap-select.form-control-lg .dropdown-toggle,
        .bootstrap-select.form-control-sm .dropdown-toggle {
            font-size: inherit;
            line-height: inherit;
            border-radius: inherit
        }

        .bootstrap-select.form-control-sm .dropdown-toggle {
            padding: .25rem .5rem
        }

        .bootstrap-select.form-control-lg .dropdown-toggle {
            padding: .5rem 1rem
        }

        .form-inline .bootstrap-select .form-control {
            width: 100%
        }

        .bootstrap-select.disabled,
        .bootstrap-select>.disabled {
            cursor: not-allowed
        }

        .bootstrap-select.disabled:focus,
        .bootstrap-select>.disabled:focus {
            outline: 0 !important
        }

        .bootstrap-select.bs-container {
            position: absolute;
            top: 0;
            left: 0;
            height: 0 !important;
            padding: 0 !important
        }

        .bootstrap-select.bs-container .dropdown-menu {
            z-index: 1060
        }

        .bootstrap-select .dropdown-toggle:before {
            content: '';
            display: inline-block
        }

        .bootstrap-select .dropdown-toggle .filter-option {
            position: absolute;
            top: 0;
            left: 0;
            padding-top: inherit;
            padding-right: inherit;
            padding-bottom: inherit;
            padding-left: inherit;
            height: 100%;
            width: 100%;
            text-align: left
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner {
            padding-right: inherit
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
            overflow: hidden
        }

        .bootstrap-select .dropdown-toggle .caret {
            position: absolute;
            top: 50%;
            right: 12px;
            margin-top: -2px;
            vertical-align: middle
        }

        .input-group .bootstrap-select.form-control .dropdown-toggle {
            border-radius: inherit
        }

        .bootstrap-select[class*=col-] .dropdown-toggle {
            width: 100%
        }

        .bootstrap-select .dropdown-menu {
            min-width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .bootstrap-select .dropdown-menu>.inner:focus {
            outline: 0 !important
        }

        .bootstrap-select .dropdown-menu.inner {
            position: static;
            float: none;
            border: 0;
            padding: 0;
            margin: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .bootstrap-select .dropdown-menu li {
            position: relative
        }

        .bootstrap-select .dropdown-menu li.active small {
            color: #fff
        }

        .bootstrap-select .dropdown-menu li.disabled a {
            cursor: not-allowed
        }

        .bootstrap-select .dropdown-menu li a {
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .bootstrap-select .dropdown-menu li a.opt {
            position: relative;
            padding-left: 2.25em
        }

        .bootstrap-select .dropdown-menu li a span.check-mark {
            display: none
        }

        .bootstrap-select .dropdown-menu li a span.text {
            display: inline-block
        }

        .bootstrap-select .dropdown-menu li small {
            padding-left: .5em
        }

        .bootstrap-select .dropdown-menu .notify {
            position: absolute;
            bottom: 5px;
            width: 96%;
            margin: 0 2%;
            min-height: 26px;
            padding: 3px 5px;
            background: #f5f5f5;
            border: 1px solid #e3e3e3;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            pointer-events: none;
            opacity: .9;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .bootstrap-select .no-results {
            padding: 3px;
            background: #f5f5f5;
            margin: 0 5px;
            white-space: nowrap
        }

        .bootstrap-select.fit-width .dropdown-toggle .filter-option {
            position: static;
            display: inline;
            padding: 0
        }

        .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
        .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
            display: inline
        }

        .bootstrap-select.fit-width .dropdown-toggle .caret {
            position: static;
            top: auto;
            margin-top: -1px
        }

        .bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
            position: absolute;
            display: inline-block;
            right: 15px;
            top: 5px
        }

        .bootstrap-select.show-tick .dropdown-menu li a span.text {
            margin-right: 34px
        }

        .bootstrap-select .bs-ok-default:after {
            content: '';
            display: block;
            width: .5em;
            height: 1em;
            border-style: solid;
            border-width: 0 .26em .26em 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle,
        .bootstrap-select.show-menu-arrow.show>.dropdown-toggle {
            z-index: 1061
        }

        .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
            content: '';
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid rgba(204, 204, 204, .2);
            position: absolute;
            bottom: -4px;
            left: 9px;
            display: none
        }

        .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
            content: '';
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #fff;
            position: absolute;
            bottom: -4px;
            left: 10px;
            display: none
        }

        .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
            bottom: auto;
            top: -4px;
            border-top: 7px solid rgba(204, 204, 204, .2);
            border-bottom: 0
        }

        .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
            bottom: auto;
            top: -4px;
            border-top: 6px solid #fff;
            border-bottom: 0
        }

        .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
            right: 12px;
            left: auto
        }

        .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
            right: 13px;
            left: auto
        }

        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:after,
        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:before,
        .bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:after,
        .bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:before {
            display: block
        }

        .bs-actionsbox,
        .bs-donebutton,
        .bs-searchbox {
            padding: 4px 8px
        }

        .bs-actionsbox {
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .bs-actionsbox .btn-group button {
            width: 50%
        }

        .bs-donebutton {
            float: left;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .bs-donebutton .btn-group button {
            width: 100%
        }

        .bs-searchbox+.bs-actionsbox {
            padding: 0 8px 4px
        }

        .bs-searchbox .form-control {
            margin-bottom: 0;
            width: 100%;
            float: none
        }

        th,
        td {
            border: 1px solid #333;
        }

        tbody tr td:nth-child(1) {
            width: 50px;
            text-align: center;
        }

        a {
            color: black;
        }

        span i {
            font-size: 30px !important;
            color: #e61d2f;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }
        @media only screen and (max-width: 768px) {
            img {
                width: 300px !important;
            }
            footer{
                margin-top: 200px !important;
            }
        }

    </style>
</head>

<body>

    <main style="margin-top: 5px;">
        <div class="container">
            <div class="row my-2">
                <div class="col-md-12 text-center">
                    <img src="{{asset('assets/img/rayan.jpg')}}" style="width: 600px;" title="Forland" alt="Forland">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>{{ Session::get('customerName')}}</h5>
                </div>
                <div class="col-md-4 text-right offset-md-4">
                    <h5>{{ Session::get('invoiceDate')}}</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 text-center offset-md-4">
                    <h5>Quotation for {{ Session::get('productName')}}</h5>
                </div>
            </div>
        </div>
    </main>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Color</th>
                                <th>Unit Price</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Session::get('productName')}}</td>
                                <td rowspan="2">{{ Session::get('color')}}</td>
                                <td>Rs.</td>
                                <td rowspan="2">{{ Session::get('quantity')}}</td>
                                <td>Rs.</td>
                            </tr>
                            <tr>
                                <td>{{ Session::get('description')}}</td>
                                <td>={{ Session::get('price')}}/-</td>

                                <td>={{ Session::get('total')}}/-</td>
                            </tr>
                            <tr>
                                <td colspan="5">({{ Session::get('amountInWords')}} Only.)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <h5>Terms & Conditions</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <table style="width: 100%;">

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Delivery Time.</td>
                                <td>{{ Session::get('DeliveryTime')}} days after receipt of 100% advance payment.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Validity</td>
                                <td>This Quotation is Valid For {{ Session::get('ValidityPeriod')}} Days Only.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Payment</td>
                                <td>100% Advance Payment In shape of DD/PO in favor of {{ Session::get('PayTo')}}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Duty / Taxes</td>
                                <td>Any Change In Govt. Fiscal Policies , RGST/VAT and tariff structures will be on
                                    customer's Account.</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Force Majeure</td>
                                <td>Manufacture will Not be responsible for any delay in delivery due to force majeure
                                    circumstance.</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Warranty</td>
                                <td>Manufacture's Standard Warranty 120,000 Km or 02-Years , Whichever is occurs first
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Model</td>
                                <td>{{ Session::get('productName')}}(2021)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section style="margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right offset-md-8">
                    <h5 style="border-top: 1px solid #333; display: inline-block;">Forland Modern Motors</h5>
                </div>
            </div>
        </div>
    </section>


    <footer style="margin-top: 400px;">
        <div class="container">
            <div class="row" style="border-top: 1px solid #333;">
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fa fa-map-marker"></i></span>
                    <h5 style="text-transform: uppercase;">BKM, {{ Session::get('UserName')}}Road,OM MILLAT Tractors,Lhr
                    </h5>
                </div>
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fa fa-phone"></i></span>

                    <h5>Mob: <a href="+92-300-0600061">+92-300-0600061</a></h5>
                    <h5>Tel: <a href="+92-300-0600061">+92-42-37925218/318</a></h5>
                </div>
                <div class="col-md-4 p-2 text-center">
                    <span><i class="fas fa-envelope"></i></span>
                    <h5>forlandmodernmotors@gmail.com</h5>

                </div>
            </div>
        </div>
    </footer>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

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
</body>

</html>
