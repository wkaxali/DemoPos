<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Title Stock</title>


    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */


        }

        .stockLabels label {
            width: 235px;
        }

        .stockLabels {
            padding: 20px 10px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 10px;
        }

        .containerMy {
            max-width: 1400px;
            margin: 0 auto;

        }

    </style>
</head>

<body onload="searchRawMatirial()">

@include('accesorieshtml')






                                        <!--end::Demo Panel-->

                                        <!-- jQuery and JS bundle w/ Popper.js -->
                                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                                            crossorigin="anonymous">
                                        </script>
                                        <script
                                            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                                            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                                            crossorigin="anonymous">
                                        </script>
                                        <script type="text/javascript" charset="utf8"
                                            src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
                                        </script>
                                            <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                $('#stocktable').DataTable();
                                            });

                                        </script>
                                        <!--end::Global Theme Bundle-->

                                        <script>
                                            function searchRawMatirial() {
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function () {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        var data = this.responseText;
                                                        //alert(data);
                                                        var table;
                                                        var a = JSON.parse(data);

                                                        table = $('#stocktable').DataTable();

                                                        $.each(a, function (i, item) {

                                                            table.row.add([a[i].InvoiceNumber, a[i].EngineNumber,
                                                                a[i].ChasisNumber,  a[i]
                                                                .color, a[i].NetTotal, a[i]
                                                                .NetTotal, 
                                                            ]);
                                                        });
                                                        table.draw();

                                                    }
                                                };

                                                xhttp.open("GET", "./getDocuments/", true);
                                                xhttp.send();
                                            }
                                            // $("#stocktable").on('click', 'tr', function () {
                                            //     document.getElementById("invoicenumber").value = this.cells[0]
                                            //         .innerText;
                                                
                                            //     document.getElementById("toolkit").value = this.cells[1]
                                            //         .innerText;
                                            //     document.getElementById("sparetyre").value = this.cells[2]
                                            //         .innerText;
                                            //     document.getElementById("orignalkeys").value = this.cells[3]
                                            //         .innerText;

                                            //     document.getElementById("warrentybook").value = this.cells[4]
                                            //         .innerText;
                                                
                                            // });

                                            $("#stocktable").on('click', 'tr', function () {
                                        document.getElementById("invoicenumber").value = this.cells[0].innerText;
                                    
                         
                                                 });

                                            function setStock() {
                                                var invoicenumber = document.getElementById("invoicenumber").value;
                                                //alert("updated  "+purchasePrice);
                                                
                                                var t = document.getElementById("toolkit");
                                                var toolkit = t.options[t.selectedIndex].text;
                                                //alert("updated  "+PID);
                                                
                                                var s = document.getElementById("sparetyre");
                                                var sparetyre = s.options[s.selectedIndex].text;
                                                //alert("updated  "+company);
                                                
                                                var orignalkeys = document.getElementById("orignalkeys").value;
                                                var w = document.getElementById("warrentybook");
                                                var warrentybook = w.options[w.selectedIndex].text;

                                                var UpdateStock = [invoicenumber,toolkit, sparetyre, orignalkeys, warrentybook, 
                                            
                                                ];
                                                alert(UpdateStock);

                                                var UC = JSON.stringify(UpdateStock);

                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function () {
                                                    if (this.readyState == 4 && this.status == 200) {

                                                        alert("acessories " + this.responseText + " is added");


                                                    }
                                                };
                                                alert(UC);
                                                // var MenuID=$('#Menus').find(":selected").val();
                                                xhttp.open("GET", "./AddAcessories/" + UC, true);
                                                xhttp.send();

                                            }

                                        </script>

</body>

</html>
