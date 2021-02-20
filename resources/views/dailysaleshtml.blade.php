<div class="page-container">
        <div class="left-content">
            <div class="inner-block">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>Daily Sales</h3>
                        </div>
                    </div>
                    <br><br>
                    <div class="myflex">
                        <div class="inputs">
                            <label for="">From</label>
                            <input class="form-control"
                                style="display: inline-block !important; width: 200px !important;" type="date" name=""
                                id="">
                        </div>

                        <div class="inputs">
                            <label for="">To</label>
                            <input class="form-control"
                                style="display: inline-block !important; width: 200px !important;" type="date" name=""
                                id="">
                        </div>
                        <div class="inputs">
                            <button class="btn okay">Search</button>
                        </div>
                    </div>
                    <br>
                    <div class="myflex-2">

                        <table id="myTables">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Company</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>GatePass</th>
                                    <th>Invoice Reques</th>
                                    <th>Delivery Letter</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#123</td>
                                    <td>Forland C-10</td>
                                    <td>Forland</td>
                                    <td>12,300</td>
                                    <td>12,000</td>
                                    <td><a href="/fgp">GatePass</a></td>
                                    <td><a href="/is">Invoice Request</a></td>
                                    <td><a href="" onclick="mfun()">Delivery Letter</a></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>


        @include('sidenavbar')





        <div class="clearfix"></div>
    </div>