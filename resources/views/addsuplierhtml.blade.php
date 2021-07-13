<div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Add Supplier</h2>

                                    </div>

                                    
                                    <form>
                                                    <input type="text" style="width:232px;" class="form-control item" name="name" id="name"
                                                        placeholder="Supplier Name" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="title" id="balance"
                                                        placeholder="Balance" required />
                                                    <input type="number" style="width:232px;" class="form-control item" name="tel" id="contact"
                                                        placeholder="Contact" required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="title" id="address" placeholder="Address"
                                                        required />
                                                    <input type="text" style="width:232px;" class="form-control item" name="phone_number" id="InitialInvestment"
                                                        placeholder="Initial Investment" required />
                                                        </form>
                                    

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addSupplier()">Add</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @include('mainNavbar')


        <div class="clearfix"></div>
    </div>