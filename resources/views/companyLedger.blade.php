<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Company Ledger</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


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
            padding: 1px !important;
        }

        .receivingTable {
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            padding: 10px;
        }

        .receivingMain {

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

        .Footerbtns {
            float: right;
        }

        .clear {
            clear: both;
        }

        .Footerbtns .btn {
            width: 180px;
        }

        .Footerbtns .btn:nth-child(2) {
            background-color: #0a549d;
            color: #fff;
        }

        .Footerbtns .btn:nth-child(1) {
            background-color: #e61d2f;
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

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        @media print {
            .left-content {
                width: 100% !important;
            }

            .sidebar-menu {
                display: none;
            }

            body * {
                visibility: hidden;
            }

            #mainHeader,
            #mainHeader * {
                visibility: visible;
            }

            #mainHeader {
                position: absolute;
                left: 0;
                top: 0;
            }

            #mainComapnyLedger {
                visibility: visible !important;
            }

            table {
                page-break-before: always;
            }
        }

        .responseTable {
            overflow: auto;
        }

        @media only screen and (max-width: 600px) {
        
            .inner-block {
                padding: .5em 1em 2em 1em;
            }

            .Footerbtns .btn {
                margin: 5px 0px;
            }
            .dataTables_length{
                display:none !important;
            }
        }

    </style>
</head>

<body onload="loadFunctions()">
@include('companyledgerhtml')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

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
        function loadFunctions() {
            getCompanyLedger();
        }

    </script>


    <script>
        function totalAmount() {
            var table = document.getElementById("companyLedgerData");
            var sum = 0;

            for (var i = 1; i < table.rows.length; i++) {
                sum = sum + parseInt(table.rows[i].cells[3].innerHTML);
            }

            document.getElementById("totalAmount").value = sum;
        }

        function totalPaid() {
            var table = document.getElementById("companyLedgerData");
            var sum = 0;

            for (var i = 1; i < table.rows.length; i++) {
                sum = sum + parseInt(table.rows[i].cells[4].innerHTML);
            }

            document.getElementById("totalPaid").value = sum;
        }


        function remaining() {
            var totalPaid = document.getElementById("totalPaid").value;
            var totalAmount = document.getElementById("totalAmount").value;
            var remaining = totalAmount - totalPaid;
            document.getElementById("remaining").value = remaining;
        }

    </script>


    <script>
        function getCompanyLedger() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#companyLedgerData').DataTable();

                    $.each(a, function (i, item) {

                        if (a[i].NetTotal == null) {
                            a[i].NetTotal = 0;
                        }
                        if (a[i].Amount == null) {
                            a[i].Amount = 0;
                        }
                        if (a[i].Balance == null) {
                            a[i].Balance = 0;
                        }

                        table.row.add([a[i].TransactionID,a[i].TransactionID, a[i].InvoiceNo, a[i].TransactionCatogery, a[i]
                            .NetTotal,
                            a[i].AmountPaid,  a[i].Balance,a[i].DateStamp
                        ]);
                    });
                    table.draw();
                    totalAmount();
                    totalPaid();
                    remaining();

                }

            };
            //alert("ljd");
            xhttp.open("GET", "./companyLedger/", true);

            xhttp.send();
        }

    </script>


    }

    </script>

  
      <script>
    $(document).ready(function () {
        $('#companyLedgerData').DataTable({
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
            columnDefs: [{
                className: 'control',
                orderable: false,
                targets: 0
            }],
            order: [1, 'asc']
        });
    });

</script>

    <script>
        function printWindow() {
            var divToPrint = document.getElementById("companyLedgerData");
            divToPrint.style.textAlign = "center";
            divToPrint.style.border = "1px solid #333";
            newWin = window.open("");
            newWin.document.write(
                '<html><head><title>Print it!</title><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"></head><body>'
            );

            newWin.document.write(divToPrint.outerHTML);
            newWin.document.write('</body></html>');
            newWin.print();
            newWin.close();
        }

    </script>

</body>

</html>
