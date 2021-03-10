<div class="page-container">
        <div class="left-content">

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog mydialog modal-dialog-centered" role="document">
                    <div class="modal-content myshadow">
                        <div class="myshadow">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h4>sks View</h4>
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        class="selectpicker form-control" data-live-search="true"
                                                        id="assignTo">

                                                    </select>
                                                    <label for="">Details</label>
                                                    <table id="subTasks">
                                                        <tr>
                                                            <td id="td-1">1</td>
                                                            <td id="td-2"><input type="text" class="form-control"
                                                                    name="" id=""></td>

                                                        </tr>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-12" style="margin-left:20px;">
                                                            <div class="mainButtons">
                                                                <button class="btn btn-info">Progress</button>
                                                                <button onclick="getRowId()" class="btn btn-success">Add
                                                                    New
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
                                                        <input type="text" class="form-control" name="" id="dateValue">
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                                    <br>
                                                    <label for="">Priority</label><br>

                                                    <div class="btn-group" id="myBtnGroup" role="group"
                                                        aria-label="Basic example">
                                                        <button type="button" id="Urgent"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn " onclick="priority1()">Urgent</button>
                                                        <button type="button" id="Normal"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn " onclick="priority2()">Normal</button>
                                                        <button type="button" id="Easily"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn" onclick="priority3()">Easily</button>
                                                        <input type="text" class="form-control" name="" id="priority">
                                                    </div><br>
                                                    <label for="">Category</label><br>
                                                    <select style="height: 25px !important; width: 158px !important; "
                                                        class="selectpicker form-control" data-live-search="true"
                                                        id="category">

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary-1"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>

        
                <div class="container">
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







            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Meet Rayan Naeem</h4>
                                        <label for="">Due Date</label>
                                        <input type="text" class="form-control" name="" id="">

                                        <label for="">Details</label>
                                        <table id="MainTables">
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" class="form-control" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="td-1">3</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td id="td-3"> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mainWords">
                                            <div class="chat">
                                                <div class="chat-header">
                                                    <div class="profile">
                                                        <div class="left">
                                                            <img src="img/arrow.png" class="arrow">
                                                            <img src="img/pp.png" class="pp">
                                                            <h2>Waqas Ali </h2>
                                                            <span>online</span>
                                                        </div>
                                                        <div class="right">
                                                            <img src="img/phone.png" class="icon">

                                                            <img src="img/phone.png" class="icon">
                                                            <img src="img/more.png" class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mainChats" class="chat-box">
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div id="mess-r" class="mess mess-r">
                                                            <p><img src="img/emoji-1.png" class="emoji">
                                                                Hi, Elias
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Oh! hi <img src="img/emoji-2.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>


                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                Not too bad. The weather is great isn't it?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Yes. It's absolutely beautiful today.
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>

                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <img src="img/post2.jpg" class="img_chat">
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>I wish it was like this more frequently.</p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Me too. <img src="img/heart.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                So where are you going now?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-1.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="chat-footer">
                                                    <img src="img/emo.png" style="visibility: hidden;" class="emo">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="getValuesmsg"
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="sendData()"
                                                                id="basic-addon2">Send</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">History</label>
                                        <div class="card">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <label for="">ALi</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Mohsin</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Waqas</label>
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
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

        @include('sidenavbar')
        <div class="clearfix"></div>

    </div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #FA5632;
            border-top: 10px solid #FAB732;" >

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
                    <div class="mainCardBody">
                        <div class="leftCardBody">
                            <button
                                style="border-radius: 20px; background-color: #FA5632; border-color: #FA5632; color: #fff;">Logistic</button>
                        </div>
                        <div class="rightCardBody">
                            <span><i class="fa fa-fire"></i></span>
                            <span><i class="fa fa-wifi"></i></span>
                        </div>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #FA5632; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #FA5632; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #FAB732; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: black; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


                </div>

            </div>







            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Meet Rayan Naeem</h4>
                                        <label for="">Due Date</label>
                                        <input type="text" class="form-control" name="" id="">

                                        <label for="">Details</label>
                                        <table id="MainTables">
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" class="form-control" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="td-1">3</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td id="td-3"> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mainWords">
                                            <div class="chat">
                                                <div class="chat-header">
                                                    <div class="profile">
                                                        <div class="left">
                                                            <img src="img/arrow.png" class="arrow">
                                                            <img src="img/pp.png" class="pp">
                                                            <h2>Waqas Ali </h2>
                                                            <span>online</span>
                                                        </div>
                                                        <div class="right">
                                                            <img src="img/phone.png" class="icon">

                                                            <img src="img/phone.png" class="icon">
                                                            <img src="img/more.png" class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mainChats" class="chat-box">
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div id="mess-r" class="mess mess-r">
                                                            <p><img src="img/emoji-1.png" class="emoji">
                                                                Hi, Elias
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Oh! hi <img src="img/emoji-2.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>


                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                Not too bad. The weather is great isn't it?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Yes. It's absolutely beautiful today.
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>

                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <img src="img/post2.jpg" class="img_chat">
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>I wish it was like this more frequently.</p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Me too. <img src="img/heart.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                So where are you going now?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-1.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="chat-footer">
                                                    <img src="img/emo.png" style="visibility: hidden;" class="emo">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="getValuesmsg"
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="sendData()"
                                                                id="basic-addon2">Send</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">History</label>
                                        <div class="card">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <label for="">ALi</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Mohsin</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Waqas</label>
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
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
        </div>
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #8B45F1;
            border-top: 10px solid #634492;">

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
               
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #634492; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #8B45F1; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #634492; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


                </div>

            </div>







            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Meet Rayan Naeem</h4>
                                        <label for="">Due Date</label>
                                        <input type="text" class="form-control" name="" id="">

                                        <label for="">Details</label>
                                        <table id="MainTables">
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" class="form-control" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="td-1">3</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td id="td-3"> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mainWords">
                                            <div class="chat">
                                                <div class="chat-header">
                                                    <div class="profile">
                                                        <div class="left">
                                                            <img src="img/arrow.png" class="arrow">
                                                            <img src="img/pp.png" class="pp">
                                                            <h2>Waqas Ali </h2>
                                                            <span>online</span>
                                                        </div>
                                                        <div class="right">
                                                            <img src="img/phone.png" class="icon">

                                                            <img src="img/phone.png" class="icon">
                                                            <img src="img/more.png" class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mainChats" class="chat-box">
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div id="mess-r" class="mess mess-r">
                                                            <p><img src="img/emoji-1.png" class="emoji">
                                                                Hi, Elias
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Oh! hi <img src="img/emoji-2.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>


                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                Not too bad. The weather is great isn't it?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Yes. It's absolutely beautiful today.
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>

                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <img src="img/post2.jpg" class="img_chat">
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>I wish it was like this more frequently.</p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Me too. <img src="img/heart.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                So where are you going now?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-1.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="chat-footer">
                                                    <img src="img/emo.png" style="visibility: hidden;" class="emo">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="getValuesmsg"
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="sendData()"
                                                                id="basic-addon2">Send</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">History</label>
                                        <div class="card">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <label for="">ALi</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Mohsin</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Waqas</label>
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
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
        </div>
        <div class="col-md-4">
            <div class="card" style="    border-left: 10px solid #CF1D73;
            border-top: 10px solid #634492;" >

                <div class="card-body" data-toggle="modal" data-target="#exampleModal" onclick="loadTaskDetails('.$obj->TaskID.')">
                    <div class="mainCardBody">
                        <div class="leftCardBody">
                            <button
                                style="border-radius: 20px; background-color: #634492; border-color: #CF1D73; color: #fff;">Logistic</button>
                        </div>
                        <div class="rightCardBody">
                            <span><i class="fa fa-fire"></i></span>
                            <span><i class="fa fa-wifi"></i></span>
                        </div>
                    </div>
                    <h4 style="font-size: 20px; font-weight: 600px;" class="text-left mt-5">Development</h4>
                    <div class="mainCardBody" style="padding-top: 20px;">
                        <div class="leftCardBody">
                            <div
                                style="background-color: #CF1D73; color: #fff; border-radius: 50%; padding: 10px; display: inline-block;">
                                W A</div>
           
                            <span>Mian Abdullah</span>
                        </div>
                        <div class="rightCardBody">
           
                            <div>Overdue</div>
                            <div class="mainDots text-center">
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: #634492; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color: pink; display: inline-block;">
                                </div>
                                <div
                                    style="height: 10px;width: 10px;border-radius: 50%; background-color:#CF1D73; display: inline-block;">
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            <div class="mainContCards">
                <div class="mainCards-1" id="cardsCanvas">


                </div>

            </div>







            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Meet Rayan Naeem</h4>
                                        <label for="">Due Date</label>
                                        <input type="text" class="form-control" name="" id="">

                                        <label for="">Details</label>
                                        <table id="MainTables">
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" class="form-control" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="td-1">3</td>

                                                <td><input type="text" class="form-control" name="" id=""></td>
                                                <td id="td-3"> <input type="checkbox" name="" id="">
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mainWords">
                                            <div class="chat">
                                                <div class="chat-header">
                                                    <div class="profile">
                                                        <div class="left">
                                                            <img src="img/arrow.png" class="arrow">
                                                            <img src="img/pp.png" class="pp">
                                                            <h2>Waqas Ali </h2>
                                                            <span>online</span>
                                                        </div>
                                                        <div class="right">
                                                            <img src="img/phone.png" class="icon">

                                                            <img src="img/phone.png" class="icon">
                                                            <img src="img/more.png" class="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mainChats" class="chat-box">
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div id="mess-r" class="mess mess-r">
                                                            <p><img src="img/emoji-1.png" class="emoji">
                                                                Hi, Elias
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Oh! hi <img src="img/emoji-2.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>


                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                Not too bad. The weather is great isn't it?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Yes. It's absolutely beautiful today.
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>

                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <img src="img/post2.jpg" class="img_chat">
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>I wish it was like this more frequently.</p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-2.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-l">
                                                        <div class="mess">
                                                            <p>
                                                                Me too. <img src="img/heart.png" class="emoji">
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="sp"></div>
                                                    </div>
                                                    <div class="chat-r">
                                                        <div class="sp"></div>
                                                        <div class="mess mess-r">
                                                            <p>
                                                                So where are you going now?
                                                            </p>
                                                            <div class="check">
                                                                <span>4:00 PM</span>
                                                                <img src="img/check-1.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="chat-footer">
                                                    <img src="img/emo.png" style="visibility: hidden;" class="emo">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="getValuesmsg"
                                                            placeholder="Type A Message"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="sendData()"
                                                                id="basic-addon2">Send</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">History</label>
                                        <div class="card">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <label for="">ALi</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Mohsin</label>
                                                <input type="text" class="form-control" name="" id="">
                                                <label for="">Waqas</label>
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <button id="movetop" data-toggle="modal" data-target="#exampleModal" title="Go to top">
                <span class="fas fa-plus-circle" aria-hidden="true"></span>

            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        class="selectpicker form-control" data-live-search="true"
                                                        id="assignTo">

                                                    </select>
                                                    <label for="">Details</label>
                                                    <table id="subTasks">
                                                        <tr>
                                                            <td id="td-1">1</td>
                                                            <td id="td-2"><input type="text" class="form-control"
                                                                    name="" id=""></td>

                                                        </tr>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-12" style="margin-left:20px;">
                                                            <div class="mainButtons">
                                                                <button class="btn btn-info">Progress</button>
                                                                <button onclick="getRowId()" class="btn btn-success">Add
                                                                    New
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
                                                        <input type="text" class="form-control" name="" id="dateValue">
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                                    <br>
                                                    <label for="">Priority</label><br>

                                                    <div class="btn-group" id="myBtnGroup" role="group"
                                                        aria-label="Basic example">
                                                        <button type="button" id="Urgent"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn " onclick="priority1()">Urgent</button>
                                                        <button type="button" id="Normal"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn " onclick="priority2()">Normal</button>
                                                        <button type="button" id="Easily"
                                                            style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                            class="btn" onclick="priority3()">Easily</button>
                                                        <input type="text" class="form-control" name="" id="priority">
                                                    </div><br>
                                                    <label for="">Category</label><br>
                                                    <select style="height: 25px !important; width: 158px !important; "
                                                        class="selectpicker form-control" data-live-search="true"
                                                        id="category">

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary-1"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
        </div>
    </div>
</div>