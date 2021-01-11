<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">

    <title>Company Ledger</title>
    <style>
        input {

            color: red;
            font-weight: bold;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-style: hidden;

            width: 100%;
            max-width: 100%;
        }



        th,
        td {
            border: 1px solid #aaaaaa;
            padding: 5px;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            
        }

        .receivingMain {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            height: 450px;
            overflow: auto;
        }

        .ledgerFloat {
            float: right;
        }

        label {
            font-weight: bold;
        }
        .Footerbtns{
            float: right;
        }
        .clear{
            clear: both;
        }
        .Footerbtns .btn{
            width: 120px;
        }
        .Footerbtns .btn:nth-child(2){
            background-color: #0a549d;
            color: #fff;        }
            .Footerbtns .btn:nth-child(1){
                background-color: #e61d2f;
            color: #fff;    }

    </style>
</head>

<body onload="getCompanyLedger()">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Company Ledger</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="receivingMain">


                        <div class="receivingTable" id = "companyLedgerTable">
                        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th id ="Cusname">Name</th>
                                <th id="CusCont">Contact</th>
                                <th id ="Cusaddr">Address</th>
                                <th id="CusIntrs">Interested In</th>
                                <th id ="CusMeet"> Who Meet</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-4">
                    <label style="width: 185px;" for="">Total Amount</label>
                    <input type="text" value="127,000,000" name="" id="footerInput">
                </div>
                <div class="col-md-4">
                    <label style="width: 185px;" for="">Amount Paid</label>
                    <input type="text" value="122,000,000" name="" id="footerInput">
                </div>
                <div class="col-md-4">
              
                    <label style="width: 185px;" for="">Remaining</label>
                    <input type="text" value="5,000,000" name="" id="footerInput">
                    <h4 style="font-size: 16px; font-weight: 600;">Has To Be Paid By MM Motors To JWW </h4>

                
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="Footerbtns">
                        <a class="btn">Print</a>
                        <a class="btn" href="#">Export To Pdf</a>
        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
      
        </div>
    </header>








    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
function companyLedger(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
    
            var data = this.responseText;
                //alert(data);
                var table;
                var a = JSON.parse(data);
                //  alert(a[0].ProductSerial);
                table = $('#myTable').DataTable();

                $.each(a, function (i, item) {

                    table.row.add([a[i].TransactionID, a[i].InvoiceNo, a[i].TransactionCatogery, a[i].Amount, a[
                        i].DateStamp]);
                });
                table.draw();

        }
    };
    //alert("ljd");
    xhttp.open("GET", "./viewCustomer/", true);
    
    xhttp.send();
    }

    </script>

<script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });


    </script>


</body>

</html>