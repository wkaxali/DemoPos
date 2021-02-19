<div class="page-container">

<div class="left-content">
    <div class="inner-block">
        <main id="mainHeader">
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>ATTANDANCE VIEW</h3>
                        </div>
                    </div>
                </div>
            </main>
            <br>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <label for="">Employee ID</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="employeeID">

                            </select>

                        </div>

                        <div class="col-md-5 ">
                            <label for="">Employee Name</label>
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="employeeName">

                            </select>

                        </div>
                    </div>
                    <br>
                    <div class="row customClassBorder my-3">
                        <div class="col-md-5 offset-md-1">
                            <h4>Mohsin Jabbar</h4>
                        </div>
                        <div class="col-md-5">
                            <label for="">Month</label>
                            <select class="selectpicker form-control-1 form-control" data-live-search="true"
                                id="category" tabindex="null">
                                <option value=1>January</option>
                                <option value=2>Febraury</option>
                                <option value=3>March</option>
                                <option value=4>April</option>
                                <option value=1>May</option>
                                <option value=2>June</option>
                                <option value=3>July</option>
                                <option value=4>August</option>
                                <option value=1>Sepetember</option>
                                <option value=2>October</option>
                                <option value=3>November</option>
                                <option value=4>December</option>





                            </select>
                            &nbsp;
                            <label for="">Year</label>
                            <select class="selectpicker form-control-1 form-control" data-live-search="true"
                                id="category" tabindex="null">
                                <option value=1>2020</option>
                                <option value=2>2019</option>
                                <option value=3>2018</option>
                                <option value=4>2017</option>


                            </select>
                            <button style="height: 25px; margin-top: -5px;" class="btn btn-info"></button>

                        </div>


                    </div>
                </div>
            </header>
            <br>
            <section id="TblSection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" id="attendanceTableDiv">
                            <div class="controlTables">
                                <table class="table table-striped display nowrap"
                                    style="width: 100%; text-align: center;" id="attendanceTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Employee ID</th>
                                            <th>Date</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                <td>First Name</t>
                                <td>Last Name</th>
                                <td>Employee ID</th>
                                <td>Date</th>
                                <td>Time In</th>
                                <td>Time Out</th>
                                <td>Status</th>
                                <td>Edit</th>
                            </tr> -->

                                    </tbody>



                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 customButtons offset-md-6">
                        <button style="background-color: #e61d2f;color: #ffffff;" class="btn ">Update</button>
                        <button onclick="printWindow()" style="background-color: #0a549d;color: #ffffff;"
                            class="btn ">Print</button>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>
@include('adminNavbar')
<div class="clearfix"></div>
</div>