<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- <link href="/css/app.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ URL::asset('css/datatables.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
        

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    


    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.recepi-table {
    border: 1px solid rgb(196, 218, 243);
    overflow: auto;
    height: 500px;
    padding: 10px;
}

.sale-buttons {
    text-align: center;
}

.sale-buttons button {
    /* display: block; */
    width: 90px !important;
    height: 50px;
    margin: 5px 5px;


}

.raw-table {
    border: 1px solid rgb(196, 218, 243);
    height: 500px;
}

.raw-table table tbody tr td:nth-child(3),
.raw-table table tbody tr td:nth-child(5) {
    width: 50px;
    /* height: 10px; */
}

.raw-table table tbody tr td:nth-child(1) {
    width: 50px;
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus,
.btn-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.menu-table {
    border: 1px solid rgb(196, 218, 243);
    height: 500px;
}

.idi label {
    width: 210px !important;
}

/* .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 520px; } */
.menu-i {
    border: 1px solid #E5EAEE;
    padding: 10px 10px;
    border-radius: 10px;
}

.ent-table {
    border: 1px solid #E5EAEE;
    padding: 10px 10px;
    border-radius: 10px;
}

.ent-table {
    height: 200px !important;
}

.up-btn {
    margin-top: 5px;
    height: 120px !important;
    width: 120px !important;
}

.offme input {
    margin: 5px 0px;
}

.stock-table {
    height: 500px;
    overflow: auto;
}

.salePr-buttons {
    text-align: center;
}

.salePr-buttons button {
    height: 96px;
    width: 150px;
}

/* .esti-1{
        border: 1px solid #E5EAEE;
        padding: 10px;
    } */
.offme-10 label {
    width: 221px !important;
}

.offme-10 input {
    margin: 5px 0px !important;
}

.mainWebPro {
    background-image: url(https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 100vh;
    width: 100vw;
    position: relative;
    z-index: 0;
}

.mainWebPro::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.57);
    min-height: 100%;
    z-index: -1;


}
.btn-cp{
    height:42px;
    margin-top:-15px;
    width:50px;
}

.mainWebcontent {

    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;

}

.mainWebcontent h3 {
    font-size: 35px;
    text-align: center;
    color: #E5EAEE;
}

.mainWebcontent h1 {
    font-size: 55px;
    color: #E5EAEE;
    text-align: center;


}

.mainWebButtons {
    margin-top: 50px !important;
}

.mainWebButtons button {
    margin: 20px 10px !important;
}

.mainWebButtons a {
    width: 150px;
    height: 100px;
    text-align: center;
    line-height: 80px;
    margin: 10px 10px;
}

.leftMaterial label {
    margin-right: 50px;
}



.ownButton{
    margin: 20px auto;
    padding: 20px 40px;
}
.rightmtButton{
    float: right;
} 
#mt_header{
    margin-top: 20px;}
/* }
.bg-blue{
    background-color: blue;

}
.bg-yel{
    background-color: burlywood;
}
.bg-ideal{
    background-color: darkslateblue;
}
.bg-est{
    background-color: greenyellow;
}
.bg-order{
background-color: red;
} */

  </style>


</head>

<body onload="getAllMenuItems()"> 
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-5 mb-5">Recipe Management</h3>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4  ">
                <label for="carte">Category</label>
                    <select style="height: 25px !important; width: 58px !important;" class="selectpicker form-control"
                        data-live-search="true" tabindex="null">
                        <option>&nbsp; </option>
                        <option>Beef Steak</option>
                        <option>Chiken Steak</option>
                        <option>020121</option>
                        <option>875454</option>
                        <option>Rayan</option>
                        <option>Naeem</option>
                    </select>
                </div>
              
                <div class="col-md-4"   >
                <label for="carte">Category</label>

                    <!-- the Select menu is comming from database -->
                    <select   class="selectpicker form-control" style="height: 25px !important; width: 208px !important;"name="n" id="Menus" data-live-search="true"
                    onchange="getRecipes()">
                
                </select>


                    <!-- there is select field it field are commig from database Select Menu -->
                </div>

<!-- there is the search modal -->


<div class="col-md-4 ">
                    <button type="button" class="btn btn-info btn-cp" style="margin-top:29px;" data-toggle="modal"
                        data-target=".bd-example-modal-xl"></button>
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="searchModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            
                            

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12  mt-5 mb-5">
                                            <table class="table table-striped table-bordered " id="searchTable">
                                                <thead>
                                                    <tr>
                                                        <th>Material Id</th>
                                                        <th>Item Name</th>

                                                       
                                                        <th>Unit</th>
                                                        <th>Unit Sale Price</th>
                                                        


                                                    </tr>
                                                </thead>
                                                <tbody id="searchData" >

                                                    <!-- <-Data will be comming from database-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 text-right mb-2  offset-md-8">
                                            <button type="button" class="btn btn-danger btn-org-1"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" data-dismiss="modal"
                                                class="btn btn-org-1 btn-success">Okay</button>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>







                
            </div>
        </div>
    </section>
    <br>
    <section class="mt-5">

        <div class="container">
  
        
            <div class="row">
                <div class="col-md-8 ">
                    <div class="recepi-table" style="overflow-y: auto;">
                        <table class="table table-striped table-bordered ">
                            <!-- <caption>Drag a column here to group by this column</caption> -->
                            <thead>
                                <tr>
                                    <th>Raw Item Id</th>
                                    <th>Item Name</th>

                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Cost</th>
                                    




                                </tr>
                            </thead>
                            <tbody id="dataTable" onchange='calc()'>

                                     <!-- this is the Recipe Matirial is displaying from database -->
                                


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="Estimate">Estimate Cost</label>
                    <input type="text" class="form-control" name="TotalEstimatePrice" id="TotalEstimatePrice" value="0.0">
                    <label for="Sale">Sale Price</label>
                    <input type="text" class="form-control" name="TotalsalePrice" id="TotalsalePrice" value="0.0">
                    <br>
                    <div class="textAREA">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Procedure</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                style="height: 180px; resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="sale-buttons">
                        <button class="btn btn-info" onclick='showDelButton()'>Edit</button>
                        <button class="btn btn-danger" onclick='check()'>Delete</button>
                        <button class="btn btn-success" onclick="insertRecipeDataToDatabase()">Save</button>
                        
                    </div>
                </div>
            </div>
           
        
        </div>
        
    </section>

</body>













    <!--end::Demo Panel-->
  
    <!--begin::Global Config(global config for global JS scripts)-->
    
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--end::Global Theme Bundle-->
    <script>
 /////////////////////////
function check(){


    var data=table.$('input, select').serialize();
   // alert(data);
}
 function calc() {

var table = document.getElementById('dataTable');
var rows = table.rows;
var total = 0;
var cell;

// Assume first row is headers, adjust as required
// Assume last row is footer, addjust as required
for (var i=0, iLen=rows.length ; i<iLen; i++) {
    cell = rows[i].cells[4];
    total += Number(cell.textContent || cell.innerText);
}
document.getElementById('TotalEstimatePrice').value = total.toFixed(2);

}


 ////////////////////////
 function getRecipes() {
    
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("dataTable").innerHTML =
      this.responseText;
      alert( this.responseText);
      
      $( "#dataTable" ).removeAttr( "style" ).hide().fadeIn(1200);
      getSaleAndRecipeCost();
      //calc();
      
    }
  };
  var selectedValue=$('#Menus').find(":selected").val();
  //alert(selectedValue);

  xhttp.open("GET", "./getAllRecipes/"+selectedValue, true);
  xhttp.send();
 
 };



 

 function getSaleAndRecipeCost(){
    var PID=$('#Menus').find(":selected").val();
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var mydata = JSON.parse(this.response);
       // alert( mydata[0]['SalePrice']);
        document.getElementById("TotalEstimatePrice").value=mydata[0]['RecipeCost'];
        document.getElementById("TotalsalePrice").value=mydata[0]['SalePrice'];
        
      //  alert( mydata[0]['SalePrice']);

      
     // $( "#dataTable" ).removeAttr( "style" ).hide().fadeIn(1000);
      
     // calc();
    }
  };
  var selectedValue=$('#Menus').find(":selected").val();

  xhttp.open("GET", "./getSalePurchasePrice/"+PID, true);
  xhttp.send();
 
 }


 

function searchRawMatirial() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       //alert(data);
       var table;
       var a=JSON.parse(data);
       table = $('#searchTable').DataTable(); 
        
       $.each(a, function(i, item) {
             table.row.add([ a[i].RawMatirialID, a[i].MatirialName, a[i].Unit,a[i].PerUnitPurchasePrice ]);
         });   
         table.draw();            
    }
  };
  
  xhttp.open("GET", "./getRawMatirial/", true);
  xhttp.send();
    
};



 function getAllMenuItems() {
   
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Menus").innerHTML =
      this.responseText;
      $('#Menus').selectpicker('refresh');
     // alert(this.responseText);
      searchRawMatirial();
      //alert(this.responseText);
    }
  };
  
  xhttp.open("GET", "./getAllMenuItems", true);
  xhttp.send();
 };

 

//  $(document).ready(function () {

// $("#searchTable").dblclick('.btnSelect', function () {

//     var currentRow=$(this).closest("tr"); 
//     var col1=currentRow.find("td:eq(0)").text();
//     var data = col1;

//     alert(data);
//     $('.bd-example-modal-xl').modal('hide');
// });
// $("input").click(function () {
//     $(this).css({
//         "border": "none",
//     })
// })
// });
$(document).ready(function(){

// code to read selected table row cell data (values).
$("#searchTable").on('click','tr',function(){
     // get the current row



     var table = document.getElementById("dataTable");
    //  var idx = table.cell(this, 0).index();
    //  var currentRow=$(this).closest("tr").index(); 
    //  alert(currentRow);
    //  var data = table.rows( idx.row ).data();
    //  alert (data[idx.row][0] ) ;
    // alert (data[idx.row]['M']) ; 
     var MID=this.cells[0].innerText; // get current row 1st TD value
     var Mname=this.cells[1].innerText; // get current row 2nd TD
     //var qty=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var unit=this.cells[2].innerText; // get current row 3rd TD
     var pppu=this.cells[3].innerText; // get current row 3rd TD
if(IsItemExistInDataTable(MID)){
   
     
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);    
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7=row.insertCell(6);

  cell1.innerHTML = MID;
  cell2.innerHTML = Mname; 
  cell3.innerHTML= '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
  
 
  
  //$("#searchModal").modal('hide');
  //calculation than enter price
  alert("Item added");

  if(unit=="KG"){

    cell4.innerHTML="<select onchange=\"calculationForUnitAndQtyIfUnitChanges(this)\" id='unitCellInDataTable'>  <option value=\"KG\">KG</option>  <option value=\"Grams\">Grams</option>    <option value=\"MiliGrams\">MiliGrams</option></select>";;   
    //alert("whatssss");
  }
  else if (unit=="Litters" || unit=="litter"){
    cell4.innerHTML="<select onchange=\"calculationForUnitAndQtyIfUnitChanges(this)\" id='unitCellInDataTable'>  <option value=\"Litters\">Litters</option>  <option value=\"MiliLitters\">MiliLitters (ml)</option>    </select>";;   

  }
  else if (unit=="Pc"){
    cell4.innerHTML="<select onchange=\"calculationForUnitAndQtyIfUnitChanges(this)\" id='unitCellInDataTable'>  <option value=\"Pc\">Pc</option>     </select>";;   

  }
  else{

    cell4.innerHTML="<select onchange=\"calculationForUnitAndQtyIfUnitChanges(this)\" id='unitCellInDataTable'>  <option value="+unit+">"+unit+"</option>     </select>";

  }

  cell6.innerHTML=pppu;
  cell6.style.display = "none";
  cell7.innerHTML="<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";
  
}
});
});







function calculationTrigerOnQtyValueChange(x){
    
    var currentRow=x.parentElement.parentElement;
    //alert(currentRow);
   //alert(currentRow.cells[3].children[0]);
   var j=currentRow.cells[3].children[0];
   calculationForUnitAndQtyIfUnitChanges(j)
   
    ///////working here
};



function calculationForUnitAndQtyIfUnitChanges(x) {
    var theRow=x.parentElement.parentElement;
  var rx=x.parentElement.parentElement.rowIndex;

    var cx= x.parentElement.cellIndex;
   var  PerUnitPurPrice=theRow.cells[5].innerText;
    var qty=theRow.cells[2].children[0].value;
   
 //  alert(qty);
   theUnitSelected=x.value;
    
   if(theUnitSelected=="MiliGrams"){
     valu=(PerUnitPurPrice*qty)/1000000;
   
   }
   else if(theUnitSelected=="Grams"){


    valu=(PerUnitPurPrice*qty)/1000;
   
   }
   else  if(theUnitSelected=="MiliLitter"){
     valu=(PerUnitPurPrice*qty)/1000;
  
   }
   else if(theUnitSelected=="KG"){
    valu=(PerUnitPurPrice*qty);
   

   }
   else if(theUnitSelected=="Litter"){

    valu=(PerUnitPurPrice*qty);
   
    }
    else if(theUnitSelected=="Pc"){

        valu=(PerUnitPurPrice*qty);
       // alert("JBIUG");

}

  theRow.cells[4].innerText=valu;
  calc();
  


   // value of per unit price is got in 

};


function IsItemExistInDataTable(item){



var table = document.getElementById("dataTable");
for (var i = 0, row; row = table.rows[i]; i++) {
//iterate through rows
//rows would be accessed using the "row" variable assigned in the for loop
//    for (var j = 0, col; col = row.cells[j]; j++) {
 
//    } 

   alert(row.cells[0].innerHTML);
   alert(item);
   if(item==row.cells[0].innerHTML){


    alert("This item is already Exist in Recipe");
    

    return false;
   }

}

return true;
};


function insertRecipeDataToDatabase(){

    var myTrows=[];
    var table = document.getElementById("dataTable");
    
    var ec=document.getElementById('TotalEstimatePrice').value;
    var sp=document.getElementById('TotalsalePrice').value;
    //alert(sp);
    $('#dataTable tr').each(function(row, tr){

    myTrows[row]=[
        // //col1 =RMID
        // col2 =itemName
        // col3 =qty
        // clo4 =unitPrice
        // col5 = PUPP (this is hidden)
        $(tr).find('td:eq(0)').text(),
        $(tr).find('td:eq(1)').text(),
        $(tr).find('td:eq(2) input[type="text"]').val(),
        $(tr).find('td:eq(3)').find(":selected").val(),
        $(tr).find('td:eq(4)').text(),
        $(tr).find('td:eq(5)').text()
    
    ];
    

});
   
   alert(myTrows[0]);
   

var a=JSON.stringify(myTrows);



var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
      alert("This is comming from Controller ==" +this.responseText);
      
    }
  };
  var MenuID=$('#Menus').find(":selected").val();
  xhttp.open("GET", "./UpdateRecipe/"+a+"/"+MenuID+"/"+ec+"/"+sp, true);
  xhttp.send();
};


function RemoveThisRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  //alert(i);
  document.getElementById("dataTable").deleteRow(i-1);
  calc();
}

function showDelButton(){

   
  
}
 </script>
 <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>

    <!--end::Global Theme Bundle-->
   
 

</html>