<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jsPDF library -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



    <style>

        th,
        td {
            border: 1px solid #333;
            padding: 3px 0px;
        }

        label {
            width: 55px;
        }

        tr th {
            height: 50px;
            font-size: 20px;
        }

        tr th:nth-child(1) {
            padding-left: 5px;
        }

        tr th:nth-child(2) {
            width: 600px;
            text-align: center;
        }

        .mainDivs input {

            margin: 4px 0px;
        }

        @media print {
            textarea {
                border: none !important;
                outline: none !important;
            }
        }
        @media only screen and (max-width: 768px) {
        .maing table{
            width: 800px !important;
        }

        
        }
        

    </style>
    <title>Forland Modern Motors</title>
</head>

<body>
    <br><br>
    <hr>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
            <img src="{{asset('assets/img/rayan.jpg')}}" style="width: 600px;" title="Forland" alt="Forland">
            </div>
        </div>
    </div>



    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <label style="font-weight: 700; font-size: 20px; width: 100px;" for="">To,</label>
                <input type="text" value="{{ Session::get('customerName')}}" class="form-control"
                    style="display: inline-block !important; width: 200px !important;" name="" id=""><br>
                <label style="font-weight: 700; font-size: 20px; width: auto !important;" for="">Foton JW Auto Park
                    (PVT) Limited.</label>
                <br>
                <label style="font-weight: 700; font-size: 20px; width: 100px;" for="">Subject</label>
                <input type="text" value="{{ Session::get('productName')}}" class="form-control"
                    style="display: inline-block !important; width: 200px !important;" name="" id="">


            </div>
            <div class="col-md-4 offset-md-2">
                <label for="">Date: </label>
                <input type="date" name="" value="{{ Session::get('invoiceDate')}}" class="form-control"
                    style="display: inline-block; width: 200px;" id="">
            </div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1" id="testTable">
            <div class="maing">
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>{{ Session::get('customerName')}}</th>

                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>{{ Session::get('address')}}.</th>
                        </tr>
                        <tr>
                            <th>Contact Details</th>
                            <th>{{ Session::get('contact')}}</th>
                        </tr>
                        <tr>
                            <th>NTN / CNIC #</th>
                            <th>{{ Session::get('CNIC')}}</th>
                        </tr>
                        <tr>
                            <th>Salesperson</th>
                            <!-- <th>Forland Modern Motors</th> -->
                            <th></th>
                        </tr>
                        <tr>
                            <th>Dealer</th>
                            <!-- <th>Forland Modern Motors</th> -->
                            <th></th>
                        </tr>
                        <tr>
                            <th>Vehicle</th>
                            <th>{{ Session::get('productName')}}</th>
                        </tr>
                        <tr>
                            <th>Chassis No</th>
                            <th>{{ Session::get('chassisNo')}}</th>
                        </tr>
                        <tr>
                            <th>Engine No</th>
                            <th>{{ Session::get('engineNo')}}</th>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <th>{{ Session::get('color')}}</th>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <th></th>
                            <!-- <th>PKR {{ Session::get('price')}}/-</th> -->
                        </tr>
                        <tr>
                            <th>Payment Details</th>
                            <!-- <th>Payment Details Attached</th> -->
                            <th></th>
                        </tr>
                    </thead>

                </table>
                <p>Note:</p>
                <h5 id="leftUnits">1- 04<sup>RD</sup> Unit Out of 55 Units </h5>
                <button onclick="printPDF()">Download</button>
            </div>
                <p style="font-size: 18px; margin-top: 5px;">Note:</p>
                <div class="mainDivs">
                    <textarea name="" id="" cols="113" rows="3"></textarea>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="row mt-5">


            <div class="col-md-10 offset-md-1 text-right">
                <label style="border-top: 1px solid #333; width:230px; text-align: center; !important" for="">Stamp &
                    Sign</label>

            </div>
        </div>
    </div>
    <hr>
    </main>




<!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</body>
<script>
function printPDF(){
var doc = new jsPDF();
	
    doc.text(20, 20, 'This is the default font.');
    
    doc.setFont("courier");
    doc.setFontType("normal");
    doc.text(65, 30, 'This is courier normal.');
    
    doc.setFont("times");
    doc.setFontType("italic");
    doc.text(20, 40, 'This is times italic.');
    
    doc.setFont("helvetica");
    doc.setFontType("bold");
    doc.text(20, 50, 'This is helvetica bold.');
    
    doc.setFont("courier");
    doc.setFontType("bolditalic");
    doc.text(20, 60, 'This is courier bolditalic.');
    var source=$('body')[0];
   
var elem = document.getElementById("andy");
var res = doc.autoTableHtmlToJson(elem);
doc.autoTable(res.columns, res.data);

    // Save the PDF
    doc.save('document.pdf');
}
</script>

</html>
