<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <h3>View Stock</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="receivingMain">


                    <div class="receivingTable">
                        <table id="stockTable" class=" table-striped display nowrap"
                            style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Id</th>
                                    <th>Company</th>
                                    <th>Product Name</th>
                                    <th>Invoice Price</th>
                                    <th>Unit Purchase Price</th>
                                    <th>Stock</th>
                                    <th>Engine Number</th>
                                    <th>Chasis Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        <button onclick="hideColumn()">Hide</button>
                        <button class="btn btn-success" onclick="printStockData()">Print </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- <script>
        function getStock() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#stockTable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].ProductID,  a[i].Company, a[i].ProductName, a[i]
                            .PerUnitSalePrice, a[i].PerUnitPurchasePrice, a[i].StockIn, a[i]
                            .EngineNumber, a[i].ChasisNumber, a[i].Status
                        ]);
                    });
                    table.columns.adjust().draw();

                }
            };
            //alert("ljd");
            xhttp.open("GET", "./viewStock/", true);

            xhttp.send();
        }

    </script> -->