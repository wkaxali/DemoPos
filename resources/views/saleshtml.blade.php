<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="mainHeadings">Sales</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="selectFirst">
                        <div class="col-xl-3  col-lg-6 col-md-6   okay-invo">
                            <label for="invo-1">Invoice Number</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="InvoiceID">
                            <button class="btn" style="height: 25px; margin-top: -5px; background-color:#0a549d;"
                                onclick="getInvoiceCustomer()"></button>
                            <br class="hideBr"> <label for="prod-1">Product Number</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="invo-1">
                            <button type="button" class="btn"
                                style="height: 25px; margin-top: -5px; background-color: #e61d2f;" data-toggle="modal"
                                data-target=".bd-example-modal-xl"></button>

                            </button>



                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-xl">
                                    <div class="modal-content">
                                        <div class="container">
                                            <div class="row">

                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="overFlowingTable"
                                                    style="overflow: auto !important; width: 1118px !important; margin: 15px auto !important; ">


                                                    <table class="table table-bordered " id="searchProductTable">
                                                        <thead>
                                                            <tr>

                                                                <th>Product Id</th>

                                                                <th>Product Name</th>
                                                                <th>Company</th>
                                                                <th>Price</th>
                                                                <th>Stock</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                                    <button type="button" class="btn btn-org-1"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" data-dismiss="modal"
                                                        class="btn btn-org-1">Okay</button>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <label style="visibility: hidden;" for="prod-hour">Product Number</label>
                            <!-- <input type="text" class="form-control" style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="invo-1"> -->

                            <div class="centhour">
                                <button class="btn" style="background-color: #13579a;" onclick="pageReload()">New</button>
                                <button class="btn" style="background-color: #e61d2f;">Edit</button>
                                <button class="btn" style="background-color: #13579a;">Delete</button>
                            </div>
                            <!-- <button class="btn btn-danger ctrl-1">Delete Invoice</button> -->
                        </div>

                        <div class="col-md-6  okay-invo-1">
                            <div class="o-inv">
                                <label for="invo-1">Customer Id</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CID">
                                <button class="btn"
                                    style="height: 25px; margin-top: -5px; background-color: #e61d2f;"></button>
                                <br>
                                <label for="prod-1">Last Balance</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="LastBalance">
                                <button class="btn"
                                    style="height: 25px; margin-top: -5px;background-color: #13579a;"></button> <br>
                                <label for="prod-1">Current Balance</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CurrentBalance">

                            </div>
                            <div class="o-inv-2">


                                <label for="issue-3">Customer Name</label>
                                <select class="selectpicker" data-live-search="true" tabindex="null" id="CustomerName"
                                    onchange="getCurrentCustomerInfo()">
                                    <!-- from database -->
                                </select>


                                </button>

                                <br>
                                <label for="prod-1">Contact Number</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block; width: 107px; height: 30px;" name="invo-1" id="CNO">
                                <br>
                                <label for="prod-1">Category</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block; width: 107px; height: 30px;" name="invo-1"
                                    id="CustomerCategory">
                                <br>
                            </div>
                            <div class="clear">

                            </div>
                            <div class="inv-bor-btns">
                                <button class="btn" style="background-color: #e61d2f;" data-toggle="modal"
                                    data-target="#staticBackdrop">Add</button>



                                <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background:none;">

                                            <div class="modal-body">

                                                <div class="registration-form">

                                                    <form>

                                                        <div class="CustomerAddition  mb-3"
                                                            style="margin-top:-20px !important;">
                                                            <h2>Add Customer</h2>

                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="username"
                                                                placeholder="Customer ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control item"
                                                                autocomplete="OFF" id="password"
                                                                placeholder="Customer Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="button"
                                                                class="btn btn-block create-account">Add</button>
                                                        </div>


                                                    </form>

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <button class="btn" style="background-color: #13579a;">View</button>
                                <button class="btn" style="background-color: #e61d2f;">History</button>
                                <button class="btn" style="background-color: #13579a;">Info</button>
                            </div>
                        </div>

                        <div class="col-md-3 okay-invo okay-invo-hide">
                            <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" class="img-fluid"
                                alt="">

                        </div>



                    </div>

                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 myGoggle" style="overflow-x: auto; overflow-y: auto;">
                            <div>
                                <table style="border:1px solid rgb(196, 218, 243); width:100%;  margin-top:10px;  "
                                    id="ProductSaleTable">

                                    <thead>
                                        <tr>

                                            <th>Product ID</th>

                                            <th>Product Name</th>
                                            <th>Company</th>
                                            <th>Sale Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- this will be populated from database -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-3 okay-invo-3">
                            <label for="invo-1" style="width: 130px;">Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="Total">

                            <label for="prod-1" style="width: 130px;">Discount</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="DiscountOverall" onchange="calc()">
                            <label for="invo-1" style="width: 130px;">Gross Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="grossTotal">
                            <label for="prod-1" style="width: 130px;"> Tax 17%</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="tax"
                                onchange="calc()">
                            <label for="prod-1" style="width: 130px;">Net Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="NetTotal">
                            <label for="invo-1" style="width: 130px; font-weight: 500;">Amount Paid</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="AmountPaid"
                                onchange="calcForBalance()">
                            <label for="prod-1" style="width: 130px; font-weight: 500;">Remaining Balance</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="RemainingBalance">

                            <label id="paidme" for="">Paid From</label>
                            <select class="selectpicker form-control" data-live-search="true" id="accounts">

                            </select>
                            <div class="total-buttons" id="hideme">
                                <button class="btn" style="background-color: #e61d2f;"
                                    id="saveBtn"onclick="insertInSales()">Save</button>
                                <button class="btn" style="background-color: #0a549d;" onclick="print()">Print</button>
                                <button class="btn" style="background-color: #e61d2f;">Edit</button>
                                <button class="btn" style="background-color: #0a549d;">Hold</button>
                                <button class="btn" style="background-color: #e61d2f;"
                                     id="updateBtn" onclick="UpdateSaleInvoice()">Update</button>
                                <button class="btn" style="background-color: #0a549d;">Delete</button>
                            </div>
                           




                        </div>
                    </div>
                </div>

                <section>
                    <div class="total-buttons mb-5" id="holdPlz" style="text-align: center;">
                        <button class="btn btn-info">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>

                        <button class="btn btn-info">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>
                    </div>
                </section>
            </div>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>