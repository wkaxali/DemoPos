<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-1">
                            <h4>Add New Account</h4>
                        </div>
                    </div>
                    
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="firstColor my-4">
                                    <div class="date text-right">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="myMainRow">


                                    <div class="myOwnRow-left">
                                        <div class="input-field">
                                            <label for="status">Account Name</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 240px;"
                                                name="name" id="AccountName">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Account Number</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 240px;"
                                                name="name" id="AccountNumber">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Balance</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 240px;"
                                                name="name" id="Balance">
                                        </div>

                                       
                                        
                                        

                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                        <br>
                        <button type="button" class="btn" style="background-color: #2F2F2F;color: #fff;" 
                        onclick="addAccount()">Add New Account</button>
                    </div>
                </section>
               
                @include('sidenavbar') 
    </div>