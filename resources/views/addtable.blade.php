<html>
<style>
.receivingTable,th, td{
    border: 1px solid black;
}
</style>
<body onload="getStock()">
                    <div class="receivingTable">
                           <table id="data" class=" table-striped"
                                            style="width: 100%; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>Product Serial</th>
                                                    <th>Product Name</th>
                                                    <th>Engine Number</th>
                                                    <th>Chasis Number</th>
                                                    <th>Color</th>
                                                    
                                                </tr>
                                            </thead>
                                      <tbody>

                                      </tbody>

                                        </table>    

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>


<script>
function getStock() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var data = this.responseText;
                    
                    var table;
                    var a = JSON.parse(data);
                    alert(a[0].ProductName);
                    
                    table = $('#data').DataTable();

                    $.each(a, function (i, item) {

                    table.row.add([a[i].ProductSerial, a[i].ProductName, a[i]
                            .EngineNumber, a[i].ChasisNumber, a[i].Color
                         ]);
                     });
                     table.draw();

                }
            };
           
            xhttp.open("GET", "./addtable/", true);

            xhttp.send();
        
        }</script>


</html>