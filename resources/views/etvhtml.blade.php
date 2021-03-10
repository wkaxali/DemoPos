<div class="left-content" onload="getEmployeeData()">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog mydialog modal-dialog-centered" role="document">
        <div class="modal-content myshadow">
            <div class="myshadow">


                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Tasks View</h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Task" class="form-control" name="" id="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8 ">
                            <input type="text" class="form-control" name="" id="">

                        </div>
                        <div class="col-md-4">
                            <select style="height: 25px !important; width: 158px !important; "
                                class="selectpicker form-control" data-live-search="true" id="category">

                            </select>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="rightButtons">
                                <button class="btn">Update</button>
                                <button class="btn">Ok</button>
                                <button class="btn">History</button>
                            </div>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog mydialog" role="document">
        <div class="modal-content myshadow">

            <div class="modal-body">
                <div class="myshadow">


                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Tasks View</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Task" class="form-control" name=""
                                    id="mainTask">
                                <input type="text" placeholder="Task" class="form-control" name=""
                                    id="mainTaskID" style="display:none">
                                <input type="text" placeholder="Task" class="form-control" name=""
                                    id="employeeID" style="display:none">
                            </div>

                        </div>
                        <div id="AllSubTasks"></div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Last Comment</label>
                                <textarea name="" placeholder="Last Comment" class="form-control"
                                    style="height: 100%; width: 100%; resize: none;"
                                    id="comment"></textarea>

                            </div>

                        </div>
                        <br>
                        <button onclick="updateEmployeeStatus()" type="button" id="updateEmployeeStatus"
                            class="btn primary ">Update</button>
                        <br>
                        <div class="row" id="adminUseOnly">
                            <div class="col-md-8">
                                <label for="">Remarks</label>
                                <input type="text" class="form-control" name="" id="remarks">
                            </div>
                            <div class="col-md-4">
                                <label for="">&nbsp;</label>
                                <select style="height: 35px !important; width: 120px !important; "
                                    class="form-control" id="adminStatus">
                                    <option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" id="adminUseOnly2">
                            <div class="col-md-12">
                                <input type="text" placeholder="Task" class="form-control" name=""
                                    id="dateValue" style="display:none">
                                <label for="">Due On</label><br>
                                <div class="btn-group" id="groupButtons" role="group"
                                    aria-label="Basic example">
                                    <button onclick="GetDates()" type="button" id="Today"
                                        style="background-color: #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Today</button>
                                    <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                        style="background-color: #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Tomorrow</button>
                                    <button type="button" id="Date"
                                        style="background-color: #ffffff; border: 1px solid #aaa;"
                                        class="btn "><input class="hello" onchange="customDate()"
                                            type="date"
                                            style="background: none !important; width:103px; border: none !important;"
                                            name="" id="date"></button>

                                </div>
                            </div>
                            <br>
                            <button onclick="updateAdminStatus()" type="button" id="updateAdminStatus"
                                class="btn primary ">Update</button>
                            <br>
                        </div>

                        <br>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container mainMarg">
    <div class="row">
        <div class="col-md-4">

            <label for="">Employee ID</label><br>
            <select style="height: 25px !important; width: 158px !important; "
                class="selectpicker form-control" data-live-search="true" id="employee"
                onchange="searchEmployeeData()">

            </select>
        </div>
        <div class="col-md-4 ">
            <label for="">Task Status</label><br>
            <select style="height: 25px !important; width: 158px !important; "
                class="selectpicker form-control" data-live-search="true" id="status"
                onchange="searchTaskWithStatus()">
                <option value=" "></option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="col-md-3 ">
            <label for="">Date</label><br>
            <input type="date" name="" class="form-control" id=""></div>
        <div class="col-md-1">
            <button class="btn btn-primary" style="margin-top: 31px;">Search</button>
        </div>
    </div>



</div>

<div class="mainContCards">
    <div class="mainCards-1" id="cardsCanvas">


    </div>

</div>








<button id="movetop" data-toggle="modal" data-target="#myModal" title="Go to top">
    <span class="fas fa-plus-circle" aria-hidden="true"></span>

</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainAbs">
                                <label for="">Task</label>
                                <input type="text" class="form-control" name="" id="taskSubject">

                                <label for="">Assign To</label><br>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="assignTo">

                                </select>
                                <label for="">Details</label>
                                <table id="subTasks">
                                    <tr>
                                        <td id="td-1">1</td>
                                        <td id="td-2"><input type="text" class="form-control" name="" id="">
                                        </td>

                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-md-12" style="margin-left:20px;">
                                        <div class="mainButtons">
                                            <button class="btn btn-info">Progress</button>
                                            <button onclick="getRowId()" class="btn btn-success">Add New
                                                List</button>

                                            <button class="btn btn-success">Done</button>
                                        </div>


                                    </div>
                                </div>
                                <label for="">Due On</label><br>
                                <div class="btn-group" id="groupButtons" role="group"
                                    aria-label="Basic example">
                                    <button onclick="GetDates()" type="button" id="Today"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Today</button>
                                    <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Tomorrow</button>
                                    <button type="button" id="Date"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn "><input class="hello" onchange="customDate()"
                                            type="date"
                                            style="background: none !important; width:103px; border: none !important;"
                                            name="" id="date"></button>
                                </div>
                                <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                <br>
                                <label for="">Priority</label><br>

                                <div class="btn-group" id="myBtnGroup" role="group"
                                    aria-label="Basic example">
                                    <button type="button" id="Urgent"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Urgent</button>
                                    <button type="button" id="Normal"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn ">Normal</button>
                                    <button type="button" id="Easily"
                                        style="background-color:  #ffffff; border: 1px solid #aaa;"
                                        class="btn">Easily</button>
                                </div><br>
                                <label for="">Category</label><br>
                                <select style="height: 25px !important; width: 158px !important; "
                                    class="selectpicker form-control" data-live-search="true" id="category">

                                </select>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary-1" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
            </div>
        </div>
    </div>
</div>

</div>