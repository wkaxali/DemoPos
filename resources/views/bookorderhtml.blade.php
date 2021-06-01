<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header id="myHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12  text-center">
                                <h3>Book Order</h3>
                            </div>
                        </div>



                    </div>
                </header>
                <section class="mainSection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="myBookingBorder">


                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="">Order No</label>
                                            <input type="text" class="form-control"
                                                style="width: 135px; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="OrderId" readonly="true">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="Model">Model</label>
                                            <select 
                                                class="selectpicker form-control" data-live-search="true" id="category">

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Booking Price</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px ; display: inline-block !important;" name=""
                                                id="bookingPrice">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Invoice Price</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px ; display: inline-block !important;" name=""
                                                id="invoice">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Description</label>
                                            <input type="text" class="form-control"
                                                style="width: 135px; display: inline-block !important;" name=""
                                                id="description">

                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Qty</label>
                                            <input type="number" onchange="product()" class="form-control"
                                                style="width: 135px; display: inline-block !important;" name=""
                                                id="qty">
                                        </div>
                                    </div>


                                    <div class="row">



                                        <div class="col-md-3">
                                            <label style="width: 50px !important;" for="">Total</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px ; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="total" readonly="true">
                                        </div>

                                        <div class="col-md-3">
                                            <label style="width: 100px !important;" for="">Amount Paid</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px ; display: inline-block !important;" name=""
                                                id="amount" onchange="subtract()">
                                        </div>

                                        <div class="col-md-3">
                                            <label style="width: 50px !important;" for="">Remaining</label>
                                            <input type="text" class="form-control"
                                                style="width: 200px ; display: inline-block !important; cursor: not-allowed !important;pointer-events: none !important;"
                                                name="" id="remaining" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="successButtons text-right"
                                                style=" margin-right:15px;margin-top:35px;">
                                                <button onclick="valid()" class="btn ">Add</button>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>


                        </div>
                        <br>
                        <main id="mainHeader">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bookingRightTable">

                                        <div class="tableContent  text-center">
                                            <h3>Your Current Orders </h3>
                                        </div>



                                        <div class="tableDiv">


                                            <table id="BookingRecordTable" class=" table-striped"
                                                style="width: 100%; text-align: center; ">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Model</th>
                                                        <th>Price</th>
                                                        <th>QTY</th>
                                                        <th>Total</th>
                                                        <th>Paid</th>
                                                        <th>Remain</th>
                                                        <th>Delete
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>




                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mainInputGroups">

                                            <label style="width: 150px;" for="">Payment Method</label>
                                            <select class="selectpicker form-control" data-live-search="true"
                                                id="accounts">

                                            </select><br>


                                            <label style="width: 150px;" for="">Total Amount</label>
                                            <input class="form-control"
                                                style="display: inline-block !important; width: 135px !important;"
                                                type="number" name="" id="mainTotal"><br>



                                            <label style="width: 150px  ;" for="">Total Paid</label>
                                            <input type="number" name="" class="form-control"
                                                style="display: inline-block !important; width: 135px !important;"
                                                id="totalPaid" onchange="calculatonInTable()"><br>


                                            <label style="width: 150px  ;" for="">Total Remaining</label>
                                            <input type="number" name="" class="form-control"
                                                style="display: inline-block !important; width: 135px !important;"
                                                id="totRemaining">


                                        </div>
                        </main>
                        <div class="clear"></div>

                <br>
                        <div class="footerBtn">
                        <button class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"
                                style="height: 38px;" onclick="getPendingOrders()">Pending Orders</button>
                      
                            <button class="placeBtns btn" onclick="placeOrder()">Place Order</button>
                        </div>
                    </div>
                </section>



                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" >
                        <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="text-center my-3">Pending Orders</h4>
                                        <table class="table  table-bordered mb-5 " id="searchProductTable">
                                            <thead>
                                                <tr>

                                                    <th>Order Number</th>

                                                    <th>Product Name</th>
                                                    <th>Color</th>
                                                    <th>Chasis Number</th>
                                                    <th>Engine Number</th>

                                                    

                                                    <!-- <th>Purchse Price</th> -->
                                                    <th>Invoice Price</th>
                                                    <!-- <th>Cost with Additional charges</th> -->
                                                    
                                                    <th>Date Purchase</th>








                                                </tr>
                                            </thead>
                                            <tbody>
                                                


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sidenavbar')
    </div>



    <div class="clearfix"></div>
    </div>