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
<link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

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

<body onload="getAllTransactions()">
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

<th>Account Transaction ID</th>
<th>Amount</th>
<th>Account 1 ID</th>
<th>Account 1 Name</th>
<th>Account 1 Number</th>
<th>Account 2 ID</th>
<th>Account 2 Name</th>
<th>Account 2 Number</th>

<th>Remarks</th>



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
<label for="status" style="  width: 273px;">Transaction ID</label>
<input type="text" autocomplete="OFF" class="form-control"
readonly style="margin-left:30px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="TID">
</div><br>
<div class="input-field"><div class="col-md-5">
<label for="status">Account 1</label>
 
   <select style="margin-left:130px; class="selectpicker form-control data-live-search="true" id="account1">
         <option value="All">All Accounts</option>
                                   
  </select>
  </div>   
</div>
<br>

<div class="input-field"><div class="col-md-5">
<label for="status">Account 2</label>
 
   <select style="margin-left:130px; class="selectpicker form-control" data-live-search="true" id="account2">
         <option value="All">All Accounts</option>
                                   
  </select>
  </div>   
</div>
<br>
<div class="input-field">
<label for="status">Amount</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:72px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
id="amount" required>
</div>
<br>
<div class="input-field">
<label for="status">Remarks</label>
<input type="text" autocomplete="OFF" class="form-control"
style="margin-left:68px; display: inline-block !important; height: 30px !important; width: 183px;" name="name"
value="" id="remarks" required>
</div>
<br>

 
<br>
<button style="margin-left:128px;" class="btn btn-success" onclick="editTransactions()">Update </button>

<!-- <button style="margin-left:10px;" class="btn btn-success" onclick="printEmployee()">Print </button> -->


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
                    orderable: true,
                    targets: 0
                }],
                order: [0, 'asc']
            });
        });

    </script>
<script>
function getAllTransactions() {
    loadAllAccounts1();
    loadAllAccounts2();
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {
var data = this.responseText;

var table;
var a = JSON.parse(data);

table = $('#stocktable').DataTable();

$.each(a, function (i, item) {

table.row.add([a[i].ATID, a[i].Amount, a[i].AID1, a[i].Account1Name,a[i].Account1Number, a[i].AID2, a[i].Account2Name,a[i].Account2Number, a[i].Remarks
]);
});
table.draw();
 

}
};

xhttp.open("GET", "./getAllTransactions/", true);
xhttp.send();
}





$("#stocktable").on('click', 'tr', function () {
    document.getElementById("TID").value = this.cells[0].innerText;
  
document.getElementById("amount").value = this.cells[1].innerText;

document.getElementById("remarks").value = this.cells[8].innerText; 
    $('#account1').val(this.cells[2].innerText);
   
    $('#account2').val(this.cells[5].innerText);
    $('#account1').selectpicker('refresh');
   $('#account2').selectpicker('refresh');  



    
 
});

function editTransactions() {
var ATID = document.getElementById("TID").value;
var amount = document.getElementById("amount").value;
var AID1 = $('#account1').find(":selected").val();
var AID2 = $('#account2').find(":selected").val();
var Account1 =$('#account2').find(":selected").text();  
var remarks = document.getElementById("remarks").value;
var updateTransaction = [ATID, amount, AID1,AID2,remarks];


var UT = JSON.stringify(updateTransaction);

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {

alert("Transaction " + this.responseText + " is Updated");


}
};

alert(updateTransaction);
// var MenuID=$('#Menus').find(":selected").val();
xhttp.open("GET", "./editTransactions/" + UT, true);
xhttp.send();

}

</script>
<!-- <script>
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
    </script> -->
    <script>
         function loadAllAccounts1() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var a =this.responseText;
                document.getElementById("account1").innerHTML = '<option value=" "> </option>' +a;
                    
                $('#account1').selectpicker('refresh');
               

            }
        };

        xhttp.open("GET", "./getAccounts", true);
        xhttp.send();
    };


    function loadAllAccounts2() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var a =this.responseText;
                 
                document.getElementById("account2").innerHTML =  a;
                $('#account2').selectpicker('refresh');

            }
        };

        xhttp.open("GET", "./getAccounts", true);
        xhttp.send();
    };
    </script>
@include('mainNavbar')
</body>

</html>