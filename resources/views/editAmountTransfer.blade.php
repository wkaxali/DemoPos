<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<title>Edit Amount Transactions</title>


<link rel="stylesheet" href="assets/css/style.css">

<style>
table th,
td {
border: 1px solid rgb(202, 202, 202);
padding: 5px;
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

}#stocktable_length label {
            width: auto !important;
        }
        #TblSection label {
            width: auto !important;

        }
</style>
</head>

<body onload="getCustomers()">
<div class="container">

<header class="idi">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h3 class="mt-3">Edit Amount Transactions</h3>
</div>
</div>

</div>
</header>
<br>
<section id="TblSection">
<div class="container-fluid">
<div class="row">
<div class="col-md-8" id="attendanceTableDiv">
<div class="stock-table"
style="height:580px; width:102%; border: 1px solid rgb(202, 202, 202); overflow: auto;">
<table  class="table table-striped display nowrap"
  style="width: 50%; text-align: center;"   id="stocktable">
<thead>

<th>Customer ID</th>
<th>Customer Name</th>
<th>Contact</th>
<th>Address</>

<th>CNIC</th>
<th>Balance</th>



</tr>
</thead>
<tbody id="stocktableBody">
<!-- data wil be from databse -->
</tbody>
</table>
</div>

</div>
<div class="col-md-4 stockLabels">
<div class="input-field"><br>
<label for="status" style="  width: 273px;">CustomerID</label>
<input type="text" autocomplete="OFF" class="form-control"
readonly style="margin-left:30px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="CID">
</div><br>
<div class="input-field">
<label for="status">CustomerName</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:6px;  display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="customerName">
</div>

<br>

<div class="input-field">
<label for="status">Contact</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:58px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="Contact" required>
</div>
<br>
<div class="input-field">
<label for="status">Address</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:58px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="Address" required>
</div>
<br>
<div class="input-field">
<label for="status">CNIC</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:75px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
value="" id="CNIC" required>
</div>
<br>

<div class="input-field">
<label for="status">Balance</label>
<input type="email" autocomplete="OFF" class="form-control"
style="margin-left:61px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="balance" required>
</div>
<br>

<br>
<button style="margin-left:110px;" class="btn btn-success" onclick="editEmployee()">Update </button>

<button style="margin-left:10px;" class="btn btn-success" onclick="printEmployee()">Print </button>


</div>
</div>
</div>
</section>
</div>









<!--end::Demo Panel-->

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
crossorigin="anonymous">
</script>
<script type="text/javascript" charset="utf8"
src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</script>
<!-- <script>
$(document).ready(function () {
$('#stocktable').DataTable();
});

</script> -->
<!--end::Global Theme Bundle-->
<script>
        $(document).ready(function () {
            $('#stocktable').DataTable({
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
function getCustomers() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {
var data = this.responseText;

var table;
var a = JSON.parse(data);

table = $('#stocktable').DataTable();

$.each(a, function (i, item) {

table.row.add([a[i].CustomerID, a[i].CustomerName, a[i].Contect, a[i].Address,
a[i].CNIC, a[i].Balance
]);
});
table.draw();
// <th>Customer ID</th>
// <th>Customer Name</th>
// <th>Father Name</th>
// <th>Address</th>
// <th>Contact</th>
// <th>CNIC</th>
// <th>Balance</th>
// <th>Comments</th>

}
};

xhttp.open("GET", "./getCustomers/", true);
xhttp.send();
}
$("#stocktable").on('click', 'tr', function () {
document.getElementById("CID").value = this.cells[0].innerText;
document.getElementById("customerName").value = this.cells[1].innerText;
document.getElementById("Contact").value = this.cells[2].innerText;
document.getElementById("Address").value = this.cells[3].innerText;

document.getElementById("CNIC").value = this.cells[4].innerText;
document.getElementById("balance").value = this.cells[5].innerText;








});

function editEmployee() {
var CID = document.getElementById("CID").value;
var customerName = document.getElementById("customerName").value;
var contact = document.getElementById("Contact").value;
var address = document.getElementById("Address").value;

var CNIC = document.getElementById("CNIC").value;
var balance = document.getElementById("balance").value;

if (customerName == ""  ) {

alert("Please Enter The Name Of Customer");
} else{
var updateCustomer = [CID, customerName, contact, address, CNIC, balance,
]};

var UC = JSON.stringify(updateCustomer);

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {

alert("Customer " + this.responseText + " is Updated");


}
};

// var MenuID=$('#Menus').find(":selected").val();
xhttp.open("GET", "./editCustomer/" + UC, true);
xhttp.send();

}

</script>
<script>
    function printEmployee(){
                   
                  
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    window.open('/printEmployee/' );
                  
                }
            }
            
            // alert("hello");
            xhttp.open("GET", "./printEmployee/" , true);
            xhttp.send();

        }
    </script>
</body>

</html>