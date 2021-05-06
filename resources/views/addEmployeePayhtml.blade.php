<div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="registration-form">

                                <form>

                                    <div class="CustomerAddition  mb-3" style="margin-top:-20px !important;">
                                        <h2 class="text-center addCut">Add Employee Pay</h2>

                                    </div>
                                    <label for="" >Employee</label>
                                    <select class="selectpicker form-control"  data-live-search="true"  id="paidTo" onchange="getAmount()">
                            
                                        </select>
                                    <br><br>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF"
                                            id="BasicPay" placeholder="Basic Pay">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF"
                                            id="Allowance" placeholder="Allowance">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="TotalPay"
                                            placeholder="Total Pay">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control item" autocomplete="OFF"
                                            id="AllowedHolidays" placeholder="Allowed Holidays">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="SaleTarget"
                                            placeholder="Sale Target">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control item" autocomplete="OFF" id="WorkingHours"
                                            placeholder="Working Hours">
                                    </div>
                                
                                    <div class="form-group" style="text-align: center;">
                                        <button type="button" class="btn  create-account" onclick="addEmpPay()">Add</button>
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