<div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <div class="header-main">
                    <div class="modal fade" style="overflow: auto;padding-left: 45px;" id="staticBackdrop"
                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create Quotation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" class="appointment-form" id="appointment-form">
                                        <h2></h2>
                                        <div class="form-group-1">
                                            <input type="text" name="title" id="customerName"
                                                placeholder="Customer Name" required />

                                            <input type="text" name="address" id="address" placeholder="Address"
                                                required />
                                            <input type="text" name="phone_number" id="contact" placeholder="Contact"
                                                required />
                                                <label for="Model">Select Model</label>
<select style="height: 40px !important; width: 200px !important;" name="Select Model"
class="selectpicker form-control" data-live-search="true" id="model" onchange="updateModelData()">

</select>

                                            <input type="text" name="phone_number" id="description"
                                                placeholder="Description" required />
                                            <input type="text" name="phone_number" id="color" placeholder="Color"
                                                required />
                                            <input type="text" name="phone_number" id="qvt"
                                                placeholder="Quotation Validity Time" required />
                                            <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
                                                required />
                                            <input type="text" name="phone_number" id="paymentTo"
                                                placeholder="Payment To" required />
                                            <input type="text" name="phone_number" id="unitPrice"
                                                onchange="calculation()" placeholder="Unit Price" required />
                                            <input type="text" name="phone_number" id="quantity" placeholder="Quantity"
                                                onchange="calculation()" required />
                                            <input type="text" name="phone_number" id="totalPrice"
                                                placeholder="Total Price" required />


                                        </div>

                                        <div class="login-box">
                                            <a onclick="createQuotation()">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                Create Quotation</a>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="/db">
                                <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png"
                                    class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details_left">


                            <button class="btn-my btn1" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Operations</button>

                            <div class="modal fade bd-example-modal-lg" style="margin-left:38px;" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row p-2"
                                                    style="border: 2px solid gray; border-radius: 10px;">


                                                    {{ session()->put('CID','125')}}
                                                    <div class="col-md-3 mainCol">
                                                        <label class="labels" for="">Purchase</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/bo'">Book
                                                                Order</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/d'">Dilevery</button><br>
                                                            <button data-toggle="modal" id="killme"
                                                                data-target="#staticBackdrop"
                                                                class="btn btn-mysecondary">Quotation</button><br>


                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/dl'">Dilevery
                                                                letter</button><br>
                                                            <button class="btn btn-mysecondary"
                                                                onclick="location.href = '/ct'">Comissions</button><br>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 mainCol">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Sales</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">
                                                            <a href="/is"><button class="btn btn-myPrimary-add">invoice
                                                                    services</button><br></a>
                                                            <a href="/psi"><button class="btn btn-mysecondary">Print
                                                                    Sale Invoice</button><br></a>
                                                            <a href="/sc"><button class="btn btn-myPrimary">Sales&
                                                                    comission</button><br></a>
                                                            <a href="/ct"> <button
                                                                    class="btn btn-myPrimary-add">taxes</button><br></a>
                                                            <a href="/vc"><button
                                                                    class="btn btn-myPrimary-add">View Customer</button><br></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mainCol">
                                                        <label style="margin-left: 30px;" class="labels"
                                                            for="">Stock</label>
                                                        <div style="border-right: 2px solid gray;" class="leftBtns">

                                                            <a href="/as"> <button class="btn btn-myPrimary-add">Add
                                                                    Stock</button><br></a>
                                                            <a href="/ip"><button class="btn btn-mysecondary">Increase
                                                                    In price</button><br></a>
                                                            <a href="/stock"> <button
                                                                    class="btn btn-myPrimary">Stock</button><br></a>
                                                            <a href="/sp"> <button class="btn btn-mysecondary">View
                                                                    Spare Parts</button><br></a>
                                                            <a href="/vs"> <button class="btn btn-myPrimary">View
                                                                    Stock</button><br></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mainCol">
                                                        <label style="margin-left: 22px;" class="labels"
                                                            for="">Ledger</label>
                                                        <div class="leftBtns">
                                                            <button class="btn btn-myPrimary-add"
                                                                onclick="location.href = '/cl'">Company
                                                                ledger</button><br>
                                                            <a href="/l"> <button
                                                                    class="btn btn-mysecondary">ledger</button><br></a>
                                                            <a href="/th"><button class="btn btn-myPrimary">Transaction
                                                                    History</button><br></a>
                                                            <a href="/ex"><button
                                                                    class="btn btn-myPrimary-add">Expenses</button><br></a>

                                                            <a href="/ads"><button
                                                                    class="btn btn-myPrimary-add">Supplier</button><br></a>

                                                        </div>
                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                        </div>
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img style="height: 50px; border-radius: 50%; "
                                                    src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-1.2.1&w=1000&q=80"
                                                    alt=""> </span>
                                            <div class="user-name">
                                                <p style="color: #e61d2f;">{{ Session::get('UserName')}}</p>
                                                <span>Administrator</span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                         
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });

                </script>
                <div class="inner-block">
                    <ul class="nav nav-pills   mb-3" style="justify-content: center;" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Last 7 Days</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">This Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-year-tab" data-toggle="pill" href="#pills-year" role="tab"
                                aria-controls="pills-year" aria-selected="false">This Year</a>
                        </li>
                    </ul>
                    <div class="clearmain"></div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3 id="saleAmount" value=""></h3>
                                                <h4>Todays Sale Amount</h4>
                                                <h4>New Messages</h4>

                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>

                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>

                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                                <p>{{ Session::get('dailySale')}}</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                            <div class="market-updates">
                                <div class="row">


                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-1">
                                            <div class="col-md-8 market-update-left">
                                                <h3>83</h3>
                                                <h4>Sales Today</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-file-text-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-2">
                                            <div class="col-md-8 market-update-left">
                                                <h3>135</h3>
                                                <h4>Leads</h4>
                                                <p>Team visited 230 people</p>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-eye"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 market-update-gd">
                                        <div class="market-update-block clr-block-3">
                                            <div class="col-md-8 market-update-left">
                                                <h3>23</h3>
                                                <h4>New Messages</h4>
                                            </div>
                                            <div class="col-md-4 market-update-right">
                                                <i class="fa fa-envelope-o"> </i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>


                    <div class="chit-chat-layer1">
                        <div class="row">

                            <div class="col-md-6 chit-chat-layer1-left">
                                <div class="work-progres">
                                    <div class="chit-chat-heading">
                                        Recent Orders
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client</th>
                                                    <th>Manager</th>

                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>PELL </td>
                                                    <td>Mushtaq</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-info">50%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Qarshi</td>
                                                    <td>Sultan</td>

                                                    <td><span class="label label-success">completed</span></td>
                                                    <td><span class="badge badge-success">100%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Gormets</td>
                                                    <td>John</td>

                                                    <td><span class="label label-danger">Delayed</span></td>
                                                    <td><span class="badge badge-warning">75%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Khadi</td>
                                                    <td>Danial</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-info">65%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>J.</td>
                                                    <td>Amjad</td>

                                                    <td><span class="label label-warning">in progress</span></td>
                                                    <td><span class="badge badge-danger">95%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>UCP</td>
                                                    <td>Ali</td>

                                                    <td><span class="label label-info">in progress</span></td>
                                                    <td><span class="badge badge-success">95%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 chart-blo-1">
                                <div class="dygno" style="height: 431px !important;">
                                    <h2>Ring Chart</h2>

                                    <canvas id="doughnut" height="300" width="470"
                                        style="width: 470px; height: 300px;"></canvas>

                                </div>
                            </div>

                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="main-page-charts">
                        <div class="main-page-chart-layer1">
                            <div class="row">


                                <div class="col-md-6 chart-layer1-left">
                                    <div class="glocy-chart">
                                        <div class="span-2c">
                                            <h3 class="tlt">Sales Analytics</h3>
                                            <canvas id="bar" height="300" width="400"
                                                style="width: 400px; height: 300px;"></canvas>
                                            <script>
                                                var barChartData = {
                                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "jul"],
                                                    datasets: [{
                                                            fillColor: "#e61d2f",
                                                            data: [65, 59, 90, 81, 56, 55, 40]
                                                        },
                                                        {
                                                            fillColor: "#337AB7",
                                                            data: [28, 48, 40, 19, 96, 27, 100]
                                                        }
                                                    ]

                                                };
                                                new Chart(document.getElementById("bar").getContext("2d")).Bar(
                                                    barChartData);

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 chart-blo-1">
                                    <div class="line-chart">
                                        <h3>Line Chart</h3>
                                        <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;">
                                        </canvas>
                                        <script>
                                            var lineChartData = {
                                                labels: ["", "", "", "", "", "", ""],
                                                datasets: [{
                                                        fillColor: "#337AB7",
                                                        strokeColor: "#e61d2f",
                                                        pointColor: "#e61d2f",
                                                        pointStrokeColor: "#fff",
                                                        data: [65, 59, 90, 81, 56, 55, 40]
                                                    },
                                                    {
                                                        fillColor: "#e61d2f",
                                                        strokeColor: "#337AB7",
                                                        pointColor: "#337AB7",
                                                        pointStrokeColor: "#fff",
                                                        data: [28, 48, 40, 19, 96, 27, 100]
                                                    }
                                                ]

                                            };
                                            new Chart(document.getElementById("line").getContext("2d")).Line(
                                                lineChartData);

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="chart-layer-2">
                        <div class="row">


                            <div class="col-md-6 chart-layer2-right">
                                <div class="prograc-blocks">
                                    <div class="home-progres-main">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class='bar_group'>
                                        <div class='bar_group__bar thin' label='Rating' show_values='true'
                                            tooltip='true' value='343'></div>
                                        <div class='bar_group__bar myBlueColor thin' style="background: #0a549d;"
                                            label='Quality' show_values='true' tooltip='true' value='235'></div>
                                        <div class='bar_group__bar thin' label='Amount' show_values='true'
                                            tooltip='true' value='550'></div>
                                        <div class='bar_group__bar thin' style="background: #0a549d;" label='Farming'
                                            show_values='true' tooltip='true' value='456'></div>
                                    </div>
                                    <script src="js/bars.js"></script>

                                </div>
                            </div>
                            <div class="col-md-6 chart-layer2-left">
                                <div class="content-main revenue">
                                    <h3>Total Revenue</h3>
                                    <canvas id="radar" height="300" width="300"
                                        style="width: 300px; height: 300px;"></canvas>
                                    <script>
                                        var radarChartData = {
                                            labels: ["", "", "", "", "", "", ""],
                                            datasets: [{
                                                    fillColor: "#e61d2f",
                                                    strokeColor: "#0a549d",
                                                    pointColor: "#0a549d",
                                                    pointStrokeColor: "#fff",
                                                    data: [65, 59, 90, 81, 56, 55, 40]
                                                },
                                                {
                                                    fillColor: "#0a549d",
                                                    strokeColor: "#e61d2f",
                                                    pointColor: "#e61d2f",
                                                    pointStrokeColor: "#fff",
                                                    data: [28, 48, 40, 19, 96, 27, 100]
                                                }
                                            ]

                                        };
                                        new Chart(document.getElementById("radar").getContext("2d")).Radar(
                                            radarChartData);

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                </div>

            </div>
        </div>
 <div class="sidebar-menu">

<div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
        <span id="logo"></span>
    </a> </div>
<div class="menu">
    <ul id="menu">
        <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span
                    style="font-size: 18px;">Dashboard</span></a>
        </li>
        <li><a data-toggle="collapse" data-target=".new"><i class="fab fa-salesforce"></i><span
                    style="font-size:18px;">Operations</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse list-unstyled new">
                <li><a href="/bo">Book Order</a></li>
                <li><a href="/rec">Receiving</a></li>
                <li><a href="/is">Invoice Services</a></li>
                <li><a href="/sc">Commissions and Taxes</a></li>
                <li><a href="/as">Add Stock</a></li>
                <li><a href="/th">Transaction History</a></li>
                <li><a href="/l">Investor Sale Ledger</a></li>
                <li><a href="/cl">Company Ledger</a></li>

            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs"><i class="fab fa-salesforce"></i><span
                    style="font-size: 18px;">Products</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse list-unstyled firstULs ">
                <li><a href="/ac">Category</a></li>
                <li><a href="/vs">Product Record</a></li>
                <li><a href="/as">Add Product</a></li>
                <li><a href="/gb">Barcode</a></li>
                <li><a href="/sh">Stock Audit</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs1"><i class="fab fa-salesforce"></i><span
                    style="font-size: 18px;">Customer</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs1">
                <li><a href="/adc">Add Customer</a></li>
                <li><a href="/vc">Customer List</a></li>

            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs2"><i class="fab fa-salesforce"></i><span
                    style="font-size: 18px;">Supplier</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs2">
                <li><a href="/">Add Supplier</a></li>
                <!-- <li><a href="/vs">Supplier List</a></li> -->
            </ul>
        </li>
        <li id="menu-comunicacao"><a data-toggle="collapse" data-target=".firstULs3"><i
                    class="fab fa-alipay"></i>
                <span style="font-size: 18px;">Purchase</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs3">
                <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                </li>
                <li><a href="/dp">Daily Purchase</a></li>
                <li><a href="">Monthly Purchase</a></li>
                <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs4"><i class="fab fa-salesforce"></i><span
                    style="font-size: 18px;">POS</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs4">
                <li><a href="/ss">POS</a></li>
                <li><a href="/sc">Add Sale</a></li>
                <li><a href="/ds">Daily Sales</a></li>
                <li><a href="">Monthly Sales</a></li>

            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                    style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs5">
                <li><a href="/ex">Add Expense</a></li>
                <li><a href="/exv">Expense List</a></li>
                <li><a href="">Expense Head</a></li>
                <li><a href="">Expense Category</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                    style="font-size: 18px;">Transfer</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs5">
                <li><a href="/ex">Add Expense</a></li>
                <li><a href="/exv">Expense List</a></li>
                <li><a href="">Expense Head</a></li>
                <li><a href="">Expense Category</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                    style="font-size: 18px;">Return</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs5">
                <li><a href="/ex">Add Expense</a></li>
                <li><a href="/exv">Expense List</a></li>
                <li><a href="">Expense Head</a></li>
                <li><a href="">Expense Category</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                    style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs5">
                <li><a href="/ex">Add Expense</a></li>
                <li><a href="">Expense List</a></li>
                <li><a href="">Expense Head</a></li>
                <li><a href="">Expense Category</a></li>
            </ul>
        </li>
    
        <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs9"><i
                    class="fas fa-user-circle"></i><span style="font-size: 18px;">Accounts</span><span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul class="collapse firstULs9">
                <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs10"><i class="fab fa-accusoft"></i><span
                    style="font-size: 18px;">HR</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs10" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/ae">Add Employee</a></li>
                <li id="menu-academico-boletim"><a href="/ee">View Employee</a></li>
            </ul>
        </li>



        <li><a data-toggle="collapse" data-target=".firstULs11"><i class="fas fa-people-carry"></i><span
                    style="font-size: 18px;">People</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs11" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/eu">User List</a></li>
                <li id="menu-academico-boletim"><a href="/au">Add User</a></li>


            </ul>
        </li>



        <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i
                    style="font-size: 20px;" class="fab fa-stack-overflow"></i><span
                    style="font-size: 18px;">Stock</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs12" id="menu-academico-sub">
                <li id="menu-academico-boletim"><a href="/eam">Add and Edit Stock</a></li>
                <!-- <li id="menu-academico-avaliacoes"><a href="/eam">View Stock</a></li> -->
            </ul>
        </li>



        <!-- <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs13"><i
                    class="fas fa-flag-checkered"></i><span style="font-size: 18px;">Reports</span><span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul class="collapse firstULs13" id="menu-academico-sub">
                <li id="menu-academico-boletim"><a href="/d">Summary Report</a></li>

                <li id="menu-academico-boletim"><a href="/dl">Customer Report</a></li>
                <li id="menu-academico-boletim"><a href="/d">Best Seller</a></li>

                <li id="menu-academico-boletim"><a href="/dl">Daily Sale</a></li>
                <li id="menu-academico-boletim"><a href="/d">Monthly Sale</a></li>

                <li id="menu-academico-boletim"><a href="/dl">Daily Purchase</a></li>
                <li id="menu-academico-boletim"><a href="/d">MonthlyPurchase</a></li>

                <li id="menu-academico-boletim"><a href="/dl">User Report</a></li>
                <li id="menu-academico-boletim"><a href="/d">Supplier Report</a></li>

                <li id="menu-academico-boletim"><a href="/dl">Due Report</a></li>


            </ul>
        </li> -->
        <!-- <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs14"><i
                    class="fas fa-truck-loading"></i><span style="font-size: 18px;">Order
                    Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
            <ul class="collapse firstULs14" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

            </ul>
        </li> -->


        <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                    style="font-size: 18px;">PayRoll</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs15" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                    style="font-size: 18px;">Print Documents</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs15" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/pds">Documents</a></li>
            </ul>
        </li>

        <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                    style="font-size: 18px;">Quotations</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs15" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/ql">Quotation List</a></li>
            </ul>
        </li>


        <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i
                    class="fas fa-guitar"></i><span style="font-size: 18px;">Attendance</span><span
                    class="fa fa-angle-right" style="float: right"></span></a>
            <ul class="collapse firstULs16" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
            </ul>

        </li>
        <li><a data-toggle="collapse" data-target=".firstULs17"><i class="fas fa-eye"></i><span
                    style="font-size: 18px;">Task View</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="firstULs17 collapse" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
            </ul>
        </li>

        <!-- <li><a data-toggle="collapse" data-target=".firstULs18"><i class="fas fa-cogs"></i><span
                    style="font-size: 18px;">Account Settings</span><span class="fa fa-angle-right"
                    style="float: right"></span></a>
            <ul class="collapse firstULs18" id="menu-academico-sub">
                <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
            </ul>
        </li> -->
    </ul>
</div>
</div>

        <div class="clearfix"> </div>
    </div>