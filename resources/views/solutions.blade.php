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

    </style>
    <title>Forland Modern Motors</title>
</head>

<body>
    <hr>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" alt="">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <label for="">To,</label>
               
                <h5>{{ Session::get('customerName')}}</h5>
                <h5>Foton Auto Park (PVT) Ltd.</h5>
                <h5>Subject: Invoice Request {{ Session::get('productName')}}</h5>
            </div>
            <div class="col-md-4 offset-md-3">
                <h5>Date: {{ Session::get('invoiceDate')}}</h5>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table style="width: 100%; text-align: center;" id="andy">
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
                            <th>Forland Modern Motors</th>
                        </tr>
                        <tr>
                            <th>Dealer</th>
                            <th>Forland Modern Motors</th>
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
                            <th>PKR {{ Session::get('price')}}/-</th>
                        </tr>
                        <tr>
                            <th>Payment: Cheque Details</th>
                            <th>Payment Details Attached</th>
                        </tr>
                    </thead>

                </table>
                <p>Note:</p>
                <h5 id="leftUnits">1- 04<sup>RD</sup> Unit Out of 55 Units </h5>
                <button onclick="printPDF()">Download</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-8">
                <input type="text" style="border-top: none; border-left: none; border-right: none;" name="" id="">
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-map-marker"></i>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-phone"></i>

                </div>
                <div class="col-md-4">
                    <i class="fas fa-envelope"></i>

                </div>
               
            </div>
        </div>
    </footer>
    <br><br>





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
