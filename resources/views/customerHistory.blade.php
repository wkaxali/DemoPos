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

    <title>Customer History</title>
    <style>
        @media (max-width: 480px) {
            .inner-block {
                padding: 0em;
            }

            main {
                margin-bottom: 50px;
            }

            .col-md-4 {
                margin: 10px 0px;
            }
        }

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


        }

        .mainCard {
            /* display: flex;
            justify-content: space-between; */
        }

        .card {

            padding: 0px 0px 0px 0px;
            -webkit-box-shadow: 10px 10px 29px -16px #13579a;
            -moz-box-shadow: 10px 10px 29px -16px #13579a;
            box-shadow: 10px 10px 29px -16px #13579a;

            border-radius: 10px;
            border: 1px solid #aaa;
            cursor: pointer;
            margin: 0.3px 0px;
            transition: .6s;
        }

        .card:hover {
            /* transform: translateX(-10px); */
            transition: .6s;
        }




        .mainCards {
            /* border: 1px solid #13579a; */
            padding: 20px 50px;


        }

        .myown {
            padding: 0px 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            height: 100px;

        }

        hr {
            margin: 0 !important;
            padding: 0 !important;
        }

        .box {
            background-color: #f3f3f3;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 5px;
            padding-left: 15px;
        }

        @media only screen and (max-width: 768px) {

            /* .mainCards {
                width: 196%;
            }
            .card{
                margin: 5px 0px;
            } */
            .ownmargins {
                margin-left: 49px !important;
            }

            .card {
                width: 21rem;
            }

        }

        .container {
            padding: 0px !important;
        }

    </style>
</head>

<body>


    <main style="margin:0px 0px 20px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mainHed">
                    <h4>Customer History</h4>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-md-10 ownmargins" style="margin-left: 137px;">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box-1" style=" background-color: #13579a; color: #fff; padding: 10px 20px;
                    border-radius: 10px;">

                            <div style="display: flex; justify-content: space-between;">
                                <div>
                                    <p>Waqas Ali</p>

                                </div>
                                <div>
                                    <p>03091422045</p>


                                </div>
                            </div>
                            <div>
                                <p style="font-size: 13px;"> 8-Km Lahore opposite Millat Tractors Ltd,</p>
                            </div>




                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="box">
                            <div>
                                <h6 style=" color: #000; font-weight: bold;">Total Amount</h6>
                                <p>12,000</p>
                            </div>
                            <div>
                                <h6 style="color: #000; font-weight: bold;">Total Paid</h6>
                                <p>10,000</p>
                            </div>
                            <div>
                                <h6 style="color: #000; font-weight: bold;">Remaining</h6>
                                <p style="color: #e61d2f; font-weight: bold;">2,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning"
                            style="margin-top: 13px;">
                            +
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Forland Modern Motors
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-10 offset-md-1">
                                                    <label style="width: 150px;" for="">Invoice ID</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br>
                                                    <label style="width: 150px;" for="">Name</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Name</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Contact No</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Customer ID</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">CNIC</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Last
                                                        Balance</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Current
                                                        Balance</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Invoice
                                                        Total</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Amount Paid</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Remaining
                                                        Balance</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Discount</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br> <label style="width: 150px;" for="">Cash Received
                                                        New</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br>
                                                    <label style="width: 150px;" for="">Remaining
                                                        Balance</label>
                                                    <input type="text" class="form-control"
                                                        style="display: inline-block !important; width: 150px;" name=""
                                                        id="">
                                                    <br>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row" style="width: 96% ;">
                <div class="col-md-11 offset-md-1">
                    <div class="mainCards">
                        <div class="card" data-toggle="collapse" data-target=".mainC" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                         padding: 5px 20px;
                        display: flex; justify-content: space-between; align-items: center;">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: red; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: #e61d2f; font-weight: bold;">
                                        2000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC1" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                         padding: 5px 20px;
                        display: flex; justify-content: space-between; ">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: green; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: green; font-weight: bold;">
                                        0
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC1">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC2" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                     padding: 5px 20px;
                    display: flex; justify-content: space-between; align-items: center;">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: red; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: #e61d2f; font-weight: bold;">
                                        2000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC2">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC3" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                 padding: 5px 20px;
                display: flex; justify-content: space-between; align-items: center;">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: red; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: #e61d2f; font-weight: bold;">
                                        2000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC3">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC4" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                 padding: 5px 20px;
                display: flex; justify-content: space-between; ">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: green; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: green; font-weight: bold;">
                                        0
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC4">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC5" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
             padding: 5px 20px;
            display: flex; justify-content: space-between; align-items: center;">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: red; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: #e61d2f; font-weight: bold;">
                                        2000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC5">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC6" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                     padding: 5px 20px;
                    display: flex; justify-content: space-between; ">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: green; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: green; font-weight: bold;">
                                        0
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC6">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC7" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                 padding: 5px 20px;
                display: flex; justify-content: space-between; align-items: center;">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: red; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: #e61d2f; font-weight: bold;">
                                        2000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC7">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target=".mainC8" title="Click  To View Details"
                            id="myCard">
                            <div class="bgColors" style="background-color: #fff;  border-radius: 10px;
                 padding: 5px 20px;
                display: flex; justify-content: space-between; ">
                                <div class="mainCard">
                                    <div class="leftcard" style="display: flex; align-items: center; ">
                                        <div
                                            style="height: 30px; width: 30px; background-color: green; border-radius: 50%;">

                                        </div>
                                        <div class="mainCard" style="margin-left: 20px;">
                                            <div class="leftcard" style="color: #000; font-weight: bold;">
                                                Invoice Number 5312
                                            </div>
                                            <div class="rightCard" style="color: rgb(145, 143, 143);">
                                                11-April-2019
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mainCard">
                                    <div class="leftcard" style="color: #000; font-weight: bold;">
                                        15,000
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        13,000 Paid
                                    </div>

                                </div>
                                <div class="mainCard">
                                    <div class="leftcard" style="color: green; font-weight: bold;">
                                        0
                                    </div>
                                    <div class="rightCard" style="color: rgb(145, 143, 143);">
                                        Due
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="mainOwn collapse mainC8">
                                <div class="myown " style="text-align: center;">

                                    Information will be here
                                </div>
                            </div>
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



</body>

</html>
