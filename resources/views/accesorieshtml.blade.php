<header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Accessories  With Autos</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr ondblclick="SetStockIdeal()">

                                    <th>Tool Kit</th>
                                    <th>Spare Tyre</th>
                                    <th>Original Keys</th>
                                    <th>Warranty Book</th>
                                  
                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">Tool Kit</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br>
                    <label for="id">Spare Tyre</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br>
                    <label for="id">Original Keys</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="company"><br><br>
                    <label for="id">Warranty Book</label>
                    <select style="height: 25px !important; width: 158px !important; " class="selectpicker form-control"
                        data-live-search="true" id="category">
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select><br><br>

                    <div class="st-button  " style="margin-top: 15px; margin-left: 362px;">
                        <button class="btn btn-success" onclick="SetStockIdeal()">Update </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    