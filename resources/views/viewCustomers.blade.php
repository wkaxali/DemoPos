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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

     <title>View Customers</title>
     <style>
          @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }
         .dropdown.bootstrap-select.form-control {
             width: 200px !important;
             display: inline-block !important;
             /* background-color:#0a549d !important; */


         }

         .printBtns {

             background-color: #ffffff;
             border: 1px solid#0abf53;
             color: #0abf53;
             transition: .7s;
         }

         .printBtns:hover {
             background-color: #0abf53;
             border-color: #0abf53;
             color: #ffffff;
             transition: .7s;
         }

         .receivingMain {
             border: 1px solid #aaaaaa;
             border-radius: 10px;
             height: 550px;
             padding: 10px;
             overflow: auto;
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
             padding: 5px;
         }

         .mainRows {
             display: flex;
             justify-content: space-between;
         }

         .receivingTable {
             border: 1px solid #aaaaaa;
             border-radius: 10px;
             padding: 10px;
             overflow: auto !important;
         }
         
        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0abf53;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #fec73c;
        }

        .fa-bars {
            color: #fff;
        }
.inner-block {
    padding: 1em 1em 2em 1em;
}

     </style>
 </head>

 <body onload="getCustomers()">
     <div class="page-container">

         <div class="left-content">
             <div class="inner-block">

                 <header>
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12 text-center">
                                 <h3>Customers</h3>
                             </div>
                         </div>
                         <div class="mainRows">
                             <div class="leftmain">

                                 <input type="checkbox" name="" id="">
                                 <label for="Old">Old Customers</label>
                             </div>
                             <div class="rightmain">

                                 <input type="checkbox" name="" id="">
                                 <label for="Old">New Leads</label>

                             </div>


                         </div>
                         <div class="row">
                             <div class="col-md-12">



                                 <div class="receivingTable" id="tableDiv">
                                     <table id="myTable" class=" table-striped"
                                         style="width: 100%; text-align: center;">
                                         <thead>
                                             <tr>
                                                 <th id="Cusname">Name</th>
                                                 <th id="CusCont">Contact</th>
                                                 <th id="Cusaddr">Address</th>
                                                 <th id="CusIntrs">Balance</th>
                                                 <th id="CusMeet">CNIC</th>

                                             </tr>
                                         </thead>
                                         <tbody>
                                         </tbody>
                                     </table>

                                 </div>

                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4 offset-md-8 text-right">
                                 <button class="btn printBtns" onclick=" CustomerInfo()">
                                     Print
                                 </button>
                             </div>
                         </div>
                     </div>
                 </header>
             </div>
         </div>
         @include('sidenavbar')
         <div class="clearfix"></div>
     </div>








     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
     <!-- <script src="js/bootstrap.min.js"></script> -->

     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
     </script>
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
         function CustomerInfo() {

             var CusName = documenty.getElementById(" Cusname").value;
             alert(" coming from blade" + CusName);


             var cuscont = document.getElementById("CusCont").value;
             alert("acceptable  " + cuscont);


             var cusAddrs = document.getElementById("Cusaddr").value;
             alert("acceptable  " + cusAddrs);

             var CusIntr = document.getElementById("CusIntrs").value;
             alert("acceptable  " + CusIntr);

             var CusMeet = document.getElementById("CusMeet").value;
             alert("acceptable  " + CusMeet);


             var custinfo = [CusName, cuscont, cusAddrs, CusIntr, CusMeet];


             var xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function () {
                 if (this.readyState == 4 && this.status == 200) {
                     alert(this.responseText);
                 }
             };
             var EC = JSON.stringify(custinfo);
             xhttp.open("GET", "./customer/" + EC, true);
             xhttp.send();


         };

     </script>


     <script>
         function getCustomers() {
             var xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function () {

                 if (this.readyState == 4 && this.status == 200) {

                     var data = this.responseText;
                     //alert(data);
                     var table;
                     var a = JSON.parse(data);
                     //  alert(a[0].ProductSerial);
                     table = $('#myTable').DataTable();

                     $.each(a, function (i, item) {

                         table.row.add([a[i].CustomerName, a[i].Contect, a[i].Address, a[i].Balance, a[
                             i].CNIC]);
                     });
                     table.draw();

                 }
             };
             //alert("ljd");
             xhttp.open("GET", "./viewCustomer/", true);

             xhttp.send();
         }

     </script>

     <script>
         $(document).ready(function () {
             $('#myTable').DataTable();
         });

     </script>

 </body>


 </html>
