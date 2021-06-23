<div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Add Customer</h2>

                                    </div>

                                    
                                    <form>
                                                    <input type="text" style="width:232px;" class="form-control item" name="name" id="addCustomerName"
                                                        placeholder="Customer Name" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="title" id="addFatherName"
                                                        placeholder="Father Name" required />

                                                    <input type="number" style="width:232px;" class="form-control item" name="tel" id="addContact"
                                                        placeholder="Contact" required />
                                                    <input type="number" style="width:232px;" class="form-control item" name="title" id="addCNIC" placeholder="ID Card"
                                                        required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="addAddress"
                                                        placeholder="Address" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="addProfession"
                                                        placeholder="Profession" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="email"
                                                        placeholder="Email" required />
                                                        </form>
                                    

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addCustomer()">Add</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @include('sidenavbar')


        <div class="clearfix"></div>
    </div>