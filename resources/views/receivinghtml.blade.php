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
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="footerBtns text-right">
                                
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