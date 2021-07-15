<div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Add Investor</h2>

                                    </div>

                                    
                                    <form>
                                        <input type="text" style="width:232px;" class="form-control item" name="name" id="name"
                                        placeholder="Investor Name" required />

                                        <input type="number" style="width:232px;" class="form-control item" name="title" id="Investment"
                                        placeholder="Investment" required />

                                        <input type="number" style="width:232px;" class="form-control item" name="tel" id="contactNo"
                                        placeholder="Contact" required />

                                        <input type="text" style="width:232px;" class="form-control item" name="title" id="address" placeholder="Address"
                                        required />

                                        <input type="number" style="width:232px;" class="form-control item" name="phone_number" id="selfRatio"
                                        placeholder="Self Profit Ratio" required onchange="calc()"/>

                                        <input readonly type="number" style="width:232px;" class="form-control item" name="phone_number" id="investorRatio"
                                        placeholder="Investor Profit Ratio" required />

                                        
                                    </form>
                                    

                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addInvestors()">Add</button>
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