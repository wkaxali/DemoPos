<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Test</title>
    
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Customers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <input type="checkbox" name="" id="">
                    <label for="Old">Old Customers</label>

                </div>
                <div class="col-md-4 offset-md-2">
                    <input type="checkbox" name="" id="">
                    <label for="Old">New Leads</label>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">



                    <div class="receivingTable">
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
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                                <tr>
                                    <td>Rayan</td>
                                    <td>030914200**</td>
                                    <td>Chah Miran Lahore</td>
                                    <td>Yes</td>
                                    <td>Usama Mehar</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 offset-md-8 text-right">
                    <button class="btn printBtns" onclick=" tablePDF()">
                        Print
                    </button>
                </div>
            </div>
        </div>
    </header>








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
    
    function CustomerInfo(){

        var CusName=documenty.getElementById(" Cusname").value;
        alert(" coming from blade"+CusName);

        
        var cuscont=document.getElementById("CusCont").value;
        alert("acceptable  "+cuscont);


    var cusAddrs=document.getElementById("Cusaddr").value;
    alert("acceptable  "+cusAddrs);

    var CusIntr=document.getElementById("CusIntrs").value;
    alert("acceptable  "+CusIntr);

    var CusMeet=document.getElementById("CusMeet").value;
    alert("acceptable  "+CusMeet);


    var custinfo = [CusName,cuscont,cusAddrs,CusIntr,CusMeet];

    
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  alert( this.responseText);
}
};
var EC=JSON.stringify(custinfo);
xhttp.open("GET", "./customer/"+EC, true);
xhttp.send();


}; 



function tablePDF(){


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
alert( this.responseText);
}
};
var table=document.getElementById("myTable").innerHTML;
var EC=JSON.stringify(table);
xhttp.open("GET", "./testpdf/"+table, true);
xhttp.send();


}; 
    
    </script>
</body>


</html>