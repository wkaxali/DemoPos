<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Receiving</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="orderNOLabel" for="OrderNo">Order No</label>
                                <input type="text" name="" value="" id="OrderId">
                                <button class="btn" style="background-color: #e61d2f; height: 30px;"
                                    onclick="getOrderDetails()">Add</button>

                            </div>
                            <div class="col-md-4 offset-md-4">
                                <label for="">Payment Method</label>
                                <select 
                                    class="selectpicker form-control" data-live-search="true" id="accounts">

                            </div>


                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="receivingMain">


                                <div class="receivingTable">
                                    <table class=" table-striped" style="width: 100%; text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Name</th>
                                                <th>Color</th>
                                                <th>Chasis No</th>
                                                <th>Engine No</th>
                                                <th>Tranport Charges</th>

                                                <th>Status</th>


                                            </tr>
                                        </thead>
                                        <tbody id="autoTableBody">
                                            <!-- Rows are comming from OrderFlowController -->
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
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
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="footerBtns text-right">
                            <button class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"
                                style="height: 38px;" onclick="getPendingOrders()">Pending Orders</button>
                                <a class="btn btn-update" onclick="UpdateStatusAndTransaction()">Update</a>


                            </div>
                        </div>
                    </div>
            </div>
            </header>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>
    </div>