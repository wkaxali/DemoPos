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


    <title>Investors</title>
    <style>
        .footerBtns {
            float: right !important;
            margin-top: 10px;
        }

        .footerBtns button {
            width: 100px;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        .mainButtons button {
            width: 150px;
        }

        th,
        td {
            text-align: center;
        }

        .mainTableEnd {
            float: right !important;
            margin-top: 10px;
        }

        .AddButton {
            float: right !important;
        }

        .borderDIv {
            border: 1px solid #aaaaaa;
            width: 100%;
            height: 30px;
            border-radius: 10px;
            margin: 10px 0px;
            background-color: #0a549d;
        }

        .table-border {
            border: 1px solid #aaaaaa;
            width: 100%;
            height: 430px;
            border-radius: 10px;
            margin: 10px 0px;
        }

        .modalView {
            margin-left: 70px;
        }

        .modalButton {
            float: right !important;
        }

        .ThirdColor {
            background-color: green;
            height: 30px;
            border-radius: 10px;
            margin: 30px 0px !important;
        }

        .card-left {
            border-right: 1px solid #333;
        }

        .mainDiv {
            display: flex;
            justify-content: space-between;
        }

        .child {
            display: flex;

            /* border: 3px solid blue; */
            width: 100%;
            border-radius: 10px;

            margin: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;

            color: #495057;
            background-color: #fff;
            background-clip: padding-box;


            box-shadow: 0 15px 25px#264653;





        }

        td:nth-child(2) {
            padding-left: 30px;
        }

        .lastChild-1 {
            border-right: 1px solid #333;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;


        }


        .lastChild-2 {
            /* color: #ffffff; */
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;

        }

        .lastChild-1 {
            padding: 10px 5px;
        }

        .lastChild-2 {
            padding: 10px 5px;
        }

        .myButtonsSection {
            text-align: center;
        }

        .myButtonsSection button {
            width: 160px;
        }

        .myButtonsOWn {
            border: 1px solid #333;
            padding: 10px 5px;
        }

        .WordWrap {
            width: 1px;
            word-wrap: break-word;
            margin: 0 auto;

        }

        .myRow {
            border: 1px solid #333;
            padding: 10px;
            border-radius: 10px;
        }

        table td:nth-child(2) {
            padding-left: 20px;
        }
        
        .lastChild-1 {
            background-color: #0a549d;
            color: #fff;
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
        #myTable_length label{
            width: auto !important;
        }
        .dataTables_filter label{
            width: auto !important;

        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <h4>Summary</h4>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="row">
                <div class="borderDIv">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Details</h5>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">

                    <section>
                        <div class="container">
                            <div class="myRow">
                                <div class="mainDiv">
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Account Name:</td>
                                                    <td>Balance</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; font-size: 20px; color: #fff; background-color: #e76f51;">
                                            <p class="WordWrap-2 text-center">
                                                A<br>C<br>C<br>O<br>U<br>N<br>T<br>S
                                            </p>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </section>

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
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

       
    </script>
</body>

</html>
