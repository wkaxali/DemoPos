<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-1">
                            <h4>Add New Employee</h4>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 offset-md-10">


                            <button class="btn btn-Search" data-toggle="modal" data-target=".bd-example-modal-lg"
                                style="height: 25px;" onclick="loadStock()"></button>
                        </div>
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
                            <div class="col-md-12">
                                <div class="myMainRow">


                                    <div class="myOwnRow-left">
                                        <div class="input-field">
                                            <label for="status">First Name</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="firstName">
                                        </div>
                                        <div class="input-field">
                                            <label for="status">Last Name</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="lastName">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">CNIC</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="CNIC">
                                        </div>

                                        <div class="input-field">
                                            <label for="status">Contact</label>
                                            <input type="text" autocomplete="OFF" class="form-control"
                                                style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                name="name" id="contact">
                                        </div>
                                        
                                        

                                    </div>
                                    <div class="myOwnROw">



                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <label for="status">Address</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" value="" id="address">
                                                </div>


                                                <div class="input-field">
                                                    <label for="status">Email ID</label>
                                                    <input type="email" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="email">
                                                </div>

                                                <div class="input-field">
                                                    <label for="status">Designation</label>
                                                    <input type="text" autocomplete="OFF" class="form-control"
                                                        style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                        name="name" id="designation">
                                                </div>
                                                    
                                                <div class="input-field">
                                                <label for="status">Joining Date</label>
                                                    <input type="date" autocomplete="OFF" class="form-control"
                                                            style="display: inline-block !important; height: 30px !important; width: 183px;"
                                                            name="name" id="date">
                                                    
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input type="button" value="Add Employee" style="display: inline-block !important; 
                        height: 30px !important; width: 120px;" onclick="addEmployee()">
                    </div>
                </section>
               
                @include('sidenavbar') 
    </div>