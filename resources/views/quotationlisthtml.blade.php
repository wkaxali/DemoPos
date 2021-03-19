<div class="page-container">
        <div class="left-content">
            <div class="inner-block">

                <div class="container-fluid">
                    <div class="mains">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Quotation List</h1>
                            </div>
                        </div>
                        <header>
                            <div class="container">

                                <div class="myContentInputs" style="display: flex">

                                    <div class="inputField-1">
                                        <label for="prodName">Customer Name</label>
                                        <input type="text" id="customerName" class="form-control"
                                            style="height: 40px !important; width: 200px !important; ">
                                    </div>

                            

                                    <div class="inputField-1">
                                        <label for="Model">Select Model</label>
                                        <select style="height: 40px !important; width: 200px !important;"
                                            name="Select Model" class="selectpicker form-control"
                                            data-live-search="true" id="model" onchange="updateModelData()">

                                        </select>

                                    </div>


                                </div>

                                <div class="myContentInputs" style="display: flex">

                                    <div class="inputField-1">
                                        <label for="prodName">Description</label>
                                        <input type="text" id="description" class="form-control"
                                            style="height: 40px !important; width: 200px !important; ">
                                    </div>

                                    <div class="inputField-1">
                                        <label for="cost">Color</label>
                                        <input type="text" class="form-control" id="color"
                                            style="height: 40px !important; width: 200px !important; ">
                                    </div>

                                    <div class="inputField-1">
                                        <label for="prodName">Quotation Validity Time</label>
                                        <input type="text" class="form-control" id="qvt"
                                            style="height: 40px !important; width: 200px !important; ">

                                    </div>

                                    <div class="inputField-1">
                                        <label for="prodName">Delivery Time</label>
                                        <input type="text" class="form-control" id="dt"
                                            style="height: 40px !important; width: 200px !important; ">

                                    </div>


                                </div>

                                <div class="myContentInputs" style="display: flex">

                                    <div class="inputField-1">
                                        <label for="prodName">Payment To</label>
                                        <input type="text" class="form-control" id="paymentTo"
                                            style="height: 40px !important; width: 200px !important; ">

                                    </div>

                                    <div class="inputField-1">
                                        <label for="cost">Unit Price</label>
                                        <input type="text" class="form-control" id="unitPrice" onchange="calculation()"
                                            style="height: 40px !important; width: 200px !important; ">
                                    </div>

                                    <div class="inputField-1">
                                        <label for="prodName">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" onchange="calculation()"
                                            style="height: 40px !important; width: 200px !important; ">

                                    </div>

                                    <div class="inputField-1">
                                        <label for="prodName">Total Price</label>
                                        <input type="text" class="form-control" id="totalPrice"
                                            style="height: 40px !important; width: 200px !important; ">

                                    </div>
                                </div>

                                <div class="input-Btn-1">
                                    <button class="btn btn-success" style="margin-top: 30px !important;"
                                        onclick="createQuotation()">Create Quotation</button>

                                </div>





                            </div>


                        </header>

                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-6 text-right">
                            <button class="btn print " style="visibility: hidden;">Print</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="quotationsTable">
                            <thead>
                                <th>QID</th>
                                <th>CustomerName</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>UnitPrice</th>
                                <th>Quantity</th>
                                <th>TotalPrice</th>
                                <th>Model</th>
                                <th>Date</th>
                                <th>Action</th>
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
        @include('sidenavbar')

        <div class="clearfix"></div>
    </div>