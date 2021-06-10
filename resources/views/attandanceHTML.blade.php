<style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        .dropdown.bootstrap-select.form-control {
            width: 200px !important;
            display: inline-block !important;
            /* background-color:#0a549d !important; */
            margin: 5px 0px !important;

        }

        #mainSection label {
            width: 100px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 27% !important;
            }
        }

        .borderDiv {
            border: 1px solid #333;
            width: 100%;
            height: 30px;
            border-radius: 10px;
            margin-top: 10px;

        }

        .footerBtns {
            float: right !important;
            margin-bottom: 10px;
        }

        .summaryLabels {
            float: right !important;
            margin-top: 20px !important;
        }

        #Summary label {
            width: 225px;
        }

        .borderCustom {
            background-color: #e61d2f;
            border-radius: 10%;
            margin-top: 5px;
        }

        .borderCustom h4 {
            color: #ffffff;
        }

        .borderCustom-1 {
            border: 1px solid #333;
            border-radius: 10px;
            margin-top: 5px;
            padding: 3px;
        }

        .borderCustom-1 input {
            margin: 3px 0px;
        }

        #myTable th,
        td {
            padding: 3px !important;
        }

        .circle {
            border: 1px solid #333;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            position: relative;
            float: right;
            margin-right: 50px;
            background-color: #0a549d;
            color: #ffffff;
        }

        .circleContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loginButtons {
            margin-top: 30px;
            margin-left: 134px;
        }

        .loginButtons button {
            width: 150px;
            margin: 3px 0px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }

        .mainRows {

            margin: 50px auto;
            padding: 10px;
            border-radius: 10px;
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .loginButtons {
                margin-left: 0px;
            }

            input {
                width: 150px !important;
            }

            .circle {
                border: 1px solid #333;
                height: 150px;
                width: 150px;
                border-radius: 50%;
                position: relative;
                float: right;
                margin-right: 0px !important;
                margin: 20px 0px;
                background-color: #0a549d;
                color: #ffffff;
            }

            .inner-block {
                padding: .5em 1em 2em 1em;
            }
        }

    </style>
</head>

<body onload="loadEmployeeNames()">
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
                                <label style="width: 200px;" for="">Employees</label>
                                    <select 
                                        class="selectpicker form-control" data-live-search="true" id="name">

                                    </select>
                                <br>
                                <label style="width: 200px;" for="">Password</label>
                                <input type="text" class="form-control" style="display: inline-block; width: 200px;"
                                    name="" id="">
                                <br>
                                <div class="loginButtons">
                                    <!-- <button class="btn" style="background-color: #e61d2f; color: #ffffff;">View
                                        Previous </button> -->
                                    <button class="btn" style="background-color:  #0a549d; color: #ffffff;  "
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
