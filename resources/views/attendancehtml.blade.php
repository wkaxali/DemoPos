<div class="page-container">

<div class="left-content">
    <div class="inner-block">

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Attendance</h4>
                    </div>
                </div>
            </div>
        </main>
        <section>
            <div class="container">
                <div class="row mainRows" style="border: 1px solid #333;">
                    <div class="col-md-4 offset-md-1">
                        <h4 id="demo"></h4>
                        <h4>Forland MM</h4>
                    </div>
                    <div class="col-md-7 ">
                        <div class="circle">
                            <div class="circleContent">
                                <h4 id="timeDemo"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <label style="width: 200px;" for="">Employee ID</label>
                        <input type="text" class="form-control"
                            style="display: inline-block; width: 200px; margin: 5px 0px;" name=""
                            id="employeeID">
                        <br>
                        <label style="width: 200px;" for="">Password</label>
                        <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                            name="" id="">
                        <br>
                        <div class="loginButtons">
                            <button class="btn" style="background-color: #e61d2f; color: #ffffff;">View
                                Previous </button>
                            <button class="btn" style="background-color:  #0a549d; color: #ffffff;"
                                onclick="markAttendance()">Mark Attandance</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
@include('sidenavbar')
<div class="clearfix"></div>
</div>