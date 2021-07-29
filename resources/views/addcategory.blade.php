<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<title>Add & Edit Category</title>




<style>
    table th,
    td {
        border: 1px solid rgb(202, 202, 202);
        padding: 5px;
        text-align:center;
    }

    .stockLabels label {
        width: 100px;
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
    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83% !important;
            }
        }

        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 70px;
            border-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }



        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 15px;
            padding: 10px 20px;
            margin: 0px auto 15px auto;
        }

        .form-control {
            width: 250px !important;
        }


        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #0a549d;
            border: none;
            color: white;
            margin-top: 20px;
            /* width: 100px; */
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }




        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

        @media (max-width: 1366px) {
            .left-content {
                width: 84%;
            }
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 3px 0px;


        }

        label {
            width: 150px;
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }


        .update {
            background-color: #e61d2f;
            color: #ffffff;
        }

        .print {
            width: 77px;
        }

        .inner-block {
            padding: 3em 2em 0em 2em;
        }

        @media only screen and (max-width: 1440px) {
            .inner-block {
                padding: 1em 2em 0em 2em;
            }
        }

        @media only screen and (max-width: 768px) {
            .form-control {
                width: 180px !important;
            }

            .addCut {
                font-size: 25px;
                margin-bottom: 50px;
            }

            .registration-form {
                padding: 60px 0;
                /* background-color: #fff; */

            }
        }

    </style>
</head>

<body onload="getPCategory()">
    <div class="page-container">

        <div class="left-content">
            <div class="inner-block">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin:20px !important;">
                                        <h2 class="text-center addCut">Add Product Category</h2>

                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="category"
                                            placeholder="Category Name">
                                    </div>
                                    


                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" id="addUsers" onclick="addCategory()"
                                            class="btn  create-account">Add</button>
                                    </div>


                                </form>
                               
                            </div>
                        </div>
                    </div>
                     <br><br><div class="col-md-12 text-center"><h2 class="mt-1">Edit Product Category</h2></div>
                <br>
                     <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="stock-table"
                            style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                            <table style="width: 100%;" id="usertable">
                                <thead>

                                    <th> Category ID</th>
                                    <th> Category Name</th>

                                    </tr>
                                </thead>
                                <tbody id="stocktableBody">
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-4 stockLabels">
                        <div class="myOwnRow-left">
                            <div class="input-field">
                                <label for="status">Category ID</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="CategoryID" readonly>
                            </div>
                            <div class="input-field">
                                <label for="status">Category Name</label>
                                <input type="text" autocomplete="OFF" class="form-control"
                                    style="display: inline-block !important; height: 30px !important; width: 183px;"
                                    name="name" id="CategoryName">
                            </div>

                            <div class="st-button  " style="margin-top: 15px;">
                                <button class="btn btn-success" id="edit" onclick="editCategory()">Update </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                
                
                
                
                </div>
            </div>
        </div>
    </div>




    
    @include('mainNavbar')
    <div class="clearfix"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
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
        
    function addCategory() {
        var Category = document.getElementById("category").value;

        var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Category " + this.responseText + " is Added");


                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addCategory/" + Category, true)
            xhttp.send()

        }
    
    </script>
    <script>
        $(document).ready(function () {
            $('#usertable').DataTable();
        });

    </script>
    <script>
        function getPCategory() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                            
                    var table;
                    var a = JSON.parse(data);

                    table = $('#usertable').DataTable();

                    $.each(a, function (i, item) {

                        table.row.add([a[i].PCID, a[i].CategoryName
                        ]);
                    });


                    table.draw();

                }
            };

            xhttp.open("GET", "./getPCategory/", true);
            xhttp.send();
        }
        $("#usertable").on('click', 'tr', function () {

            document.getElementById("CategoryID").value = this.cells[0].innerText;
            document.getElementById("CategoryName").value = this.cells[1].innerText;
        });

        function editCategory() {
            var categoryID = document.getElementById("CategoryID").value;
            var categoryName = document.getElementById("CategoryName").value;
            var editcategory = [categoryID, categoryName];

            var EC = JSON.stringify(editcategory);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Category " + this.responseText + " is Updated");

                }
            };

            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./editCategory/" + EC, true);
            xhttp.send();

        }

    </script>
</body>

</html>
