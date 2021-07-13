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
            background-color: #264653;
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
@include('mainNavbar')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <h4>INVESTORS</h4>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <div class="AddButton">
                        <button data-toggle="modal" data-target="#exampleModal" class="btn">Add</button>
                    </div>
                </div>
            </div>
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
                    <h5>Investors Details</h5>
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
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; color: #fff; font-size: 20px;background-color: #e76f51;">
                                            <p class="WordWrap-2 text-center">
                                                L<br>O<br>S<br>S </p>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2 "
                                            style="width: 20%; color: black; color: #fff; font-size: 20px; background-color: #336600;">
                                            <p class="WordWrap-2 text-center">
                                                P<br>R<br>O<br>F<br>I<br>T
                                            </p>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; color: #fff; font-size: 20px;  background: #2a9d8f;">
                                            <p class="WordWrap-2 text-center">
                                                R<br>U<br>N<br>N<br>I<br>N<br>G
                                            </p>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="mainDiv">
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; font-size: 20px; color: #fff; background-color: #e9c46a;">
                                            <p class="WordWrap-2 text-center">
                                                P<br>R<br>O<br>F<br>I<br>T
                                            </p>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; background-color: #f4a261; font-size: 20px; color: #fff;">
                                            <p class="WordWrap-2 text-center">
                                                R<br>U<br>N<br>N<br>I<br>N<br>G
                                            </p>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="child" style="width: 30%;">
                                        <div class="lastChild-1" style="width: 100%;">
                                            <table>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Forland</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td>80Lac</td>
                                                </tr>
                                                <tr>
                                                    <td>Partner</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>4-March-2020</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="lastChild-2"
                                            style="width: 20%; background-color: #e76f51; color: #fff; font-size: 20px;">
                                            <p class="WordWrap-2 text-center">
                                                P<br>R<br>O<br>F<br>I<br>T
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


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Forland</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modalView">
                        
                                    <label style="width: 100px;" for="">Name</label>
                                    <input type="text" name="companyName" id="name"> <br>
                                    <label style="width: 100px;" for="">Category</label>
                                    <input type="text" name="category" id="category"> <br>
                                    <label style="width: 100px;" for="">Investment</label>
                                    <input type="text" name="investment" id="investment"><br>
                                    <label style="width: 100px;" for="">Contact No</label>
                                    <input type="text" name="contactNo" id="contactNo"> <br>
                                    <label style="width: 100px;" for="">Address</label>
                                    <input type="text" name="address" id="address"> <br>
                                    <label style="width: 100px;" for="">Self Profit Ratio</label>
                                    <input style="width: 50px;" type="text" value="60" name="selfRatio" id="selfRatio"><br>
                                    <label style="width: 100px;" for="">Investor Profit Ratio</label>
                                    <input style="width: 50px;" type="text" value="60" name="investorRatio" id="investorRatio"><br>
                                  
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick = "addInvestors()">Save changes</button>
                </div>
            </div>
        </div>
    </div>




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
    <script>
        function addInvestors(){
        
      var name=  document.getElementById("name").value;
      var category=      document.getElementById("category").value;
      var investment=      document.getElementById("investment").value;
      var contactNo=      document.getElementById("contactNo").value;
      var address=      document.getElementById("address").value;
      var selfRatio=      document.getElementById("selfRatio").value;
      var investorRatio=      document.getElementById("investorRatio").value;
        
        var investorData=[name, category, investment, contactNo, address, selfRatio, investorRatio];
        var iA = JSON.stringify(investorData);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert("Investor Number " + this.responseText + " is generated");

            }
        };
        // var MenuID=$('#Menus').find(":selected").val();
        xhttp.open("GET", "./addInvestor/" + iA, true);
        xhttp.send();
    }
    </script>
</body>

</html>
