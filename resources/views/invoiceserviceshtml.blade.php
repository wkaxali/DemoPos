<body onload="myFunction()">
<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-1">
                            <h4>Create Invoice</h4>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 offset-md-10">


                            <button class="btn btn-Search" data-toggle="modal" data-target=".bd-example-modal-lg"
                                style="height: 25px;" onclick="loadStock()"></button>
                                <div class="col-md-7 ">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="firstColor my-4">
                                    <div class="date text-right">
                                    <h5 id="demo"></h5>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="myMainRow">


                                    <div class="myOwnRow-left">
                                        <div class="input-field">
                                            <label for="status">Product ID</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="PID">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Model</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="ProductName">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Color</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="color">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Chassis Number </label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="ChasisNumber">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Engine Number</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="EngineNumber">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Status</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="Status">
                                        </div>

                                    </div>
                                    <div class="myOwnROw">



                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <label for="status">Invoice Number</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" value="" id="InvoiceID">

                                                    <button class="btn" onclick="getInvoiceRequest()"><img
                                                            src="https://img.icons8.com/officel/16/000000/cloud-print.png" /></button>

                                                </div>


                                                <div class="input-field">
                                                    <label for="status">Description</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="description">
                                                </div>

                                                <div class="input-field">
                                                    <label for="status">Invoice Price</label>
                                                    <input type="number" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="TotalPrice">
                                                    <!-- <label for="status">Total Cost</label> -->
                                                    <input type="number" autocomplete="OFF" class="form-control"
                                                        style="display: none !important; height: 30px !important; width: 183px;"
                                                        name="name" id="TotalCost"><br>
                                                    <!-- <label for="status">17 % Tax on Price</label> -->
                                                    <input type="number" autocomplete="OFF" class="form-control"
                                                        style="display: none !important; height: 30px !important; width: 183px;"
                                                        name="name" id="tax">

                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Purchase
                                                                        Price Details
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body" id="SmallFontlabel">
                                                                    <div class="input-field">
                                                                        <label for="">Invoice Price</label>
                                                                        <input type="text" name=""
                                                                            style="display: inline-block; width: 200px;"
                                                                            class="form-control" id="">
                                                                    </div>
                                                                    <div class="input-field">
                                                                        <label for="">Price With Additional Tax</label>
                                                                        <input type="text" name=""
                                                                            style="display: inline-block; width: 200px;"
                                                                            class="form-control" id="">
                                                                    </div>


                                                                    <div class="input-field">
                                                                        <label for="">Increase In Price</label>
                                                                        <input type="text" name=""
                                                                            style="display: inline-block; width: 200px;"
                                                                            class="form-control" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-field">
                                                    <label for="status">Discount</label>
                                                    <input type="number" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" value="0" id="Discount" onchange="calc()">
                                                </div>
                                                <div class="input-field">
                                                    <label for="status">Net Total</label>
                                                    <input type="text" readonly class="form-control"
                                                        style=" pointer-events: none; display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="NetTotal">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="SecondColor my-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="head-left">


                                    <div class="input-field">
                                        <label for="issue-3">Customer Name</label>
                                        <select class="selectpicker" data-live-search="true" tabindex="null"
                                            id="CustomerName" onchange="getCurrentCustomerInfo()">
                                            <!-- from database -->
                                        </select>
                                        <button data-toggle="modal" data-target="#staticBackdrop" style="height: 40px;
                               margin-top: -5px;width:41px;" class="btn"><i class="fas fa-user-plus"></i></button>
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Client's Father Name</label>
                                        <input type="text" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="fatherName">
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Customer CNIC</label>
                                        <input type="number" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="CNIC">

                                    </div>
                                    <div class="input-field">
                                        <label for="status">Movement City/Area</label>
                                        <input type="text" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="city">

                                    </div>
                                    <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <div class="appointment-form" id="appointment-form">
                                                        <h2>Add New Customer</h2>
                                                        <div class="form-group-1">
                                                            <input type="text" name="name" id="addCustomerName"
                                                                placeholder="Customer Name" required />
                                                            <input type="text" name="title" id="addFatherName"
                                                                placeholder="Father Name" required />

                                                            <input type="number" name="tel" id="addContact"
                                                                placeholder="Contact" required />
                                                            <input type="number" name="title" id="addCNIC"
                                                                placeholder="ID Card" required />
                                                            <input type="text" name="phone_number" id="addAddress"
                                                                placeholder="Address" required />
                                                            <input type="text" name="phone_number" id="addProfession"
                                                                placeholder="Profession" required />
                                                            <input type="email" name="phone_number" id="email"
                                                                placeholder="Email" required />

                                                            <input type="text" name="phone_number" id="addComments"
                                                                placeholder="Comments" required />

                                                        </div>

                                                        <div class="form-submit">
                                                            <button onclick="addCustomer()" name="submit" id="submit"
                                                                class="submit" value="">Add Customer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-org-1"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Address</label>
                                        <input type="text" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="Address">
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Contact</label>
                                        <input type="text" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="contact">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="LastInput">

                                    <div class="input-field">
                                        <label for="status">Amount Paid</label>
                                        <input type="number" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="amountPaid" onkeyup="calcRemainingAmount()">
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Remaining</label>
                                        <input type="number" autocomplete="OFF" class="form-control"
                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                            name="name" id="amountRemaining">
                                    </div>

                                    <div class="input-field">
                                        <label for="status">Sales Person</label>
                                        <select data-live-search="true" class=" selectpicker" id='employees'>



                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label for="status">Payment Mode</label>
                                        <select data-live-search="true" class=" selectpicker" id='slctAccounts'>



                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label for="status">Paid To</label>
                                        <select data-live-search="true" class=" selectpicker" id="paidTo">
                                            <option value=1>Forland Modren Motors</option>
                                            <option value=2>FJW</option>


                                        </select> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ThirdColor my-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="text-center mt-2">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-8 offset-md-4 mb-2 myFooterButtons">
                                
                                <a class="btn" onclick="printDocs()">Print Docs</a>
                                <a class="btn" onclick="validPlz()">Generate Sale</a>
                                




                            </div>

                        </div>
                    </div>

                </footer>
                
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" >
                        <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="text-center my-3">Products Table</h4>
                                        <table class="table  table-bordered mb-5 " id="searchProductTable">
                                            <thead>
                                                <tr>

                                                    <th>Product Id</th>

                                                    <th>Product Name</th>
                                                    <th>Color</th>
                                                    <th>Engine Number</th>

                                                    <th>Chasis Number</th>

                                                    <!-- <th>Purchse Price</th> -->
                                                    <th>Invoice Price</th>
                                                    <!-- <th>Cost with Additional charges</th> -->
                                                    <th>Status</th>
                                                    <th>Description</th>








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