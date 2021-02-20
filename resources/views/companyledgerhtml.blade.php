<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h3 id="mainComapnyLedger">Company Ledger</h3>
                            </div>
                        </div>
                        <br>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="receivingMain">


                                    <div class="receivingTable" id="companyLedgerTable">
                                        <main id="mainHeader">
                                            <div class="responseTable">
                                                <table id="companyLedgerData" class="table table-striped"
                                                    style="width: 100%; text-align: center;">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th id="Cusname">Transaction ID</th>
                                                            <th id="CusCont">Order No</th>
                                                            <th id="Cusaddr">Transaction Category</th>
                                                            <th id="CusMeet">Net Total</th>
                                                            <th id="CusIntrs">Amount Paid</th>
                                                            <th id="CusMeet">Balance</th>
                                                            <th id="CusMeet">Date</th>

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
                        </main>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label style="width: 185px;" for="">Total Amount</label>
                                <input type="number" value="" name="" id="totalAmount">
                            </div>
                            <div class="col-md-4">
                                <label style="width: 185px;" for="">Amount Paid</label>
                                <input type="number" value="" name="" id="totalPaid">
                            </div>
                            <div class="col-md-4">

                                <label style="width: 185px;" for="">Remaining</label>
                                <input type="number" value="" name="" id="remaining">
                                <h4 style="font-size: 16px; font-weight: 600;">Has To Be Paid By MM Motors To JWW </h4>


                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="Footerbtns">
                                    <a class="btn" onclick="printWindow()">Print</a>
                                    <a class="btn" href="#">Export To Pdf</a>

                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                    </div>
                </header>
            </div>
        </div>
        @include('sidenavbar')
        <div class="clearfix"></div>
    </div>