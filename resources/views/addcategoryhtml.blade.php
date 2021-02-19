<div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Add Category</h2>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="row">
                        <div class="col-md-4 offset-md-2 mainCat">
                            <label for="">Product Categories</label>
                            <input type="text" class="form-control"
                                style="display: inline-block !important; width: 200px;" name="" id="">
                        </div>
                        <div class="col-md-4 text-right">
                            <button class="btn new">Add New</button>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="ctrlTable">
                                <table class="table table-hover table-bordered table-striped  display nowrap"
                                    id="myTables">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-4 text-right">
                            <button class="btn delete">Delete</button>
                            <button class="btn edit">Edit</button>
                            <button class="btn add">Add</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('sidenavbar')

        <div class="clearfix"></div>
    </div>