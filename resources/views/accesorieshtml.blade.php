<div class="container">
<header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-1">Accessories  With Autos</h3>
                </div>
            </div>

        </div>
</header>
    <br>
    <section class="mt-2">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr ondblclick="SetStockIdeal()">

                                    <th>Invoice Number</th>
                                    <th>Engine Number</th>
                                    <th>Chasis Number</th>
                                    <th>Color</th>
                                    <th>Net Total</th>
                                  
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">

                <label for="id">Invoice Number</label>
                    
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="invoicenumber"><br><br>
                    <label for="id">Tool Kit</label>
                    <select  class="selectpicker form-control"
                        data-live-search="true" id="toolkit">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br>
                    <label for="id">Spare Tyre</label>
                    <select  class="selectpicker form-control"
                        data-live-search="true" id="sparetyre">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br>
                    <label for="id">Original Keys</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="orignalkeys"><br><br>
                    <label for="id">Warranty Book</label>
                    <select  class="selectpicker form-control"
                        data-live-search="true" id="warrentybook">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br><br>

                    <div class="st-button" style="margin-top: 15px;">
                        <button class="btn btn-success" onclick="setStock()">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    