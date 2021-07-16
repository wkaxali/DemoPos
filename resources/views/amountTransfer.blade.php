<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">


    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

    <title>Amount Transfer</title>
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


        .ThirdColor {
            background-color: blue;
            height: 30px;
            border-radius: 10px;
        }

        .FourthColor {
            background-color: Green;
            height: 30px;
            border-radius: 10px;
        }

        label {
            width: 100px;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        .bootstrap-select .dropdown-toggle {
            display: inline-block !important;

            width: 83%;
        }

        .bootstrap-select {
            background: none;
        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }

        @media print {
            .left-content {
                width: 100% !important;
            }

            .sidebar-menu {
                display: none;
            }

        }
        th { font-size: 13px;   }
        td { font-size: 13px; }

        .inner-block {
            padding: 1em 1em 2em 1em;
        }
        .bootstrap-select > select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {
    display: block !important;
}
    </style>
</head>

<body onload="getAccounts()" id="allData">

    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-12 text-center ">
                                <h1 id="firsthello">Amount Transfer</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <section><br><br><br>
                    <div class="container">
                        <div class="row my-2" style="margin-left:317px;" >
                            <div class="col-md-3">
                                <label style="width:117px;" for="">From Account</label>
                                <select class="selectpicker form-control" data-live-search="true" id="acc1"   >
                                    

                                </select>
                            </div>
                        <br>
                            <div class="col-md-3  ">
                                <label for="" id="pname">To Account</label>
                                <select 
                                    class="selectpicker form-control" data-live-search="true" id="acc2" >
                                    <option value=""></option>
                                </select>
                                </div> <br>
                            <div class="col-md-7 ">
                            <br>
                                <label for=""  >Enter Amount</label>
                                 <input type="text" id="amount">
                                </div> 
                                <div class="col-md-7 ">
                            <br>
                                <label for=""  >Remarks</label>
                                 <input type="text" id="Remarks">
                                </div> 
                            <div class="col-md-6">
                                <button 
                                    class="btn  btn-info" data-live-search="true"  style="margin-top:32px;"
                                    onclick="amountTransfer()">
                                    Send
                                </button>
                                </div>
                        </div>
                    </div>
                                 
                          
                </section>
                 
                    
                @include('mainNavbar')
        <div class="clearfix"></div>
            </div>



            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
            </script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" language="javascript"
                src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>


            <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js'></script>
            

        
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-365466-5']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                        '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>
 
 
            <script>

            function dateFormat(data){
                monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
                var date = new Date(data);
                var d = date.getDate();
                var m = monthNames[date.getMonth()];
                var y = date.getFullYear();
                finalDate = d+"-"+m+"-"+y;
                return finalDate;
            }
                function getAccounts() {
                  
                 
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            // alert(this.response);
                            document.getElementById("acc1").innerHTML ='<option value=""> </option>'+ this.response;
                            $('#acc1').selectpicker('refresh');
                            document.getElementById("acc2").innerHTML = this.response;
                            $('#acc2').selectpicker('refresh');
                        }
                    };
                    
                    xhttp.open("GET", "./getAccounts/" , true);

                    xhttp.send();

                }

                function amountTransfer(){
                    
                    var account1 = $('#acc1').find(":selected").val();
                    var account2 = $('#acc2').find(":selected").val();
                    var amount = document.getElementById("amount").value;
                    var remarks = document.getElementById("Remarks").value;
                    var array = [account1,account2,amount,remarks];
                    var Amt = JSON.stringify(array);
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            alert(this.response);
                            
                        }
                    };
                    //    alert(account1);
                    xhttp.open("GET", "./amountTransfer/"+Amt , true);

                    xhttp.send();

                
                }
 
            </script>
 
            <script>
                var toggle = true;

                $(".sidebar-icon").click(function () {
                    if (toggle) {
                        $(".page-container").addClass("sidebar-collapsed").removeClass(
                            "sidebar-collapsed-back");
                        $("#menu span").css({
                            "position": "absolute",

                        });
                    } else {
                        $(".page-container").removeClass("sidebar-collapsed").addClass(
                            "sidebar-collapsed-back");
                        setTimeout(function () {
                            $("#menu span").css({
                                "position": "relative",

                            });
                        }, 400);
                    }
                    toggle = !toggle;
                });
 

            </script>
      
         

 
</body>

</html>
