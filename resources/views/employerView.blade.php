<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Task</title>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">



    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("hello");
            });
        });

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #e1ecf2;
        }

        .wrapper {
            margin: 10px;
        }

        .wrapper .top_navbar {
            width: calc(100% - 20px);
            height: 60px;
            display: flex;
            position: fixed;
            top: 10px;
        }

        .wrapper .top_navbar .hamburger {
            width: 70px;
            height: 100%;
            background: #2e4ead;
            padding: 15px 17px;
            border-top-left-radius: 20px;
            cursor: pointer;
        }

        .wrapper .top_navbar .hamburger div {
            width: 35px;
            height: 4px;
            background: #92a6e2;
            margin: 5px 0;
            border-radius: 5px;
        }

        .wrapper .top_navbar .top_menu {
            width: calc(100% - 70px);
            height: 100%;
            background: #fff;
            border-top-right-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .top_navbar .top_menu .logo {
            color: #2e4ead;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .wrapper .top_navbar .top_menu ul {
            display: flex;
        }

        .wrapper .top_navbar .top_menu ul li a {
            display: block;
            margin: 0 10px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border: 1px solid #2e4ead;
            border-radius: 50%;
            color: #2e4ead;
        }

        .wrapper .top_navbar .top_menu ul li a:hover {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .top_navbar .top_menu ul li a:hover i {
            color: #fff;
        }

        .wrapper .sidebar {
            position: fixed;
            top: 70px;
            left: 10px;
            background: #0a549d;
            width: 200px;
            height: calc(100% - 80px);
            border-bottom-left-radius: 20px;
            transition: all 0.3s ease;
        }

        .wrapper .sidebar ul li a {
            display: block;
            padding: 20px;
            color: #fff;
            position: relative;
            margin-bottom: 1px;
            color: #92a6e2;
            white-space: nowrap;
        }

        .wrapper .sidebar ul li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: #92a6e2;
            display: none;
        }

        .wrapper .sidebar ul li a span.icon {
            margin-right: 10px;
            display: inline-block;
        }

        .wrapper .sidebar ul li a span.title {
            display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active {
            background: #4360b5;
            color: #fff;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before {
            display: block;
        }

        .wrapper .main_container {
            width: (100% - 200px);
            margin-top: 70px;
            margin-left: 200px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .wrapper .main_container .item {
            background: #fff;
            margin-bottom: 10px;
            padding: 15px;
            font-size: 14px;
            line-height: 22px;
        }

        .wrapper.hello .sidebar {
            width: 70px;
        }

        .wrapper.hello .sidebar ul li a {
            text-align: center;
        }

        .wrapper.hello .sidebar ul li a span.icon {
            margin: 0;
        }

        .wrapper.hello .sidebar ul li a span.title {
            display: none;
        }

        .wrapper.hello .main_container {
            width: (100% - 70px);
            margin-left: 70px;
        }

        .container .row {
            margin: 5px 0px !important;
        }

        #movetop {
            position: fixed;
            bottom: 40px;
            right: 15px;
            z-index: 9;
            font-size: 16px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            width: 40px;
            height: 40px;
            background-color: #0abf53 !important;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -o-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            padding: 0;
        }

        .top_menu label {
            width: 100px !important;
        }

        .leftCardBody button {

            width: 100px;
        }

        .rightCardBody button {

            width: 100px;
        }

        .mainCardBody {
            display: flex;
            justify-content: space-between;
        }


        ol li {
            margin: 3px 0px;
        }

        #myBtnGroup {
            margin-left: 49px;
        }

        #myBtnGroup button {
            width: 121px;
        }

        .rightButtons {
            float: right;
        }

        td:first-child {
            border: none !important;
            width: 50px;

        }



        tr td:nth-child(2) {
            width: 332px;


        }



        .mainButtons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .mainButtons button {
            margin: 0px 3px;
            width: 116px !important;
            font-size: 14px;
        }

        @media (min-width: 768px) {
            .offset-md-3 {
                margin-left: 31% !important;
            }
        }

        @media only screen and (max-width: 768px) {

            tr td:nth-child(1) {
                width: 320px;
            }

        }

        .card-header {
            background-color: #e61d2f;
            padding: 3px;
        }

        .mainContCards {
            display: flex;
            justify-content: space-between;
            flex: 1;
            margin: 10px 0px;

        }

        .mainContCards .mainCards-1 {
            background: none !important;
            border-radius: 10px;
            width: 20rem;
            -webkit-box-shadow: 10px 10px 31px 0px #4360b5;
            -moz-box-shadow: 10px 10px 31px 0px#e61d2f;
            box-shadow: 10px 10px 31px 0px #4360b5;
            transition: .7s;

        }

        .mainCards-1:hover {
            transform: translateY(-10px);
            transition: .7s;
        }

        .card {
            border-left: 10px solid #4360b5;
            border-top: 10px solid #e61d2f;
            border-radius: 10px !important;
        }

        @media screen and (max-width: 1202px) {
            .mainContCards {
                flex-direction: column;
            }

            .mainCards-1 {
                margin: 10px 0px;
                width: 30rem !important;

            }

            .wrapper .main_container {

                margin-top: 70px;
                margin-left: 336px;
                padding: 15px;
                transition: all 0.3s ease;
            }

            .btn-group span {
                margin-top: 20px;
                margin-left: 30px !important;
                width: 120px;
                text-align: center;
            }
        }




        #groupButtons {
            margin-left: 49px;
        }

        #groupButtons button {
            width: 121px;

        }

        .btn-secondary-1 {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;

        }

        .btn-secondary-1:hover {
            background-color: #e61d2f;
            outline: none !important;
            color: #ffffff;



        }

        .btn-dark-1 {
            background-color: #0a549d;
            border-color: #2e4ead;
            outline: none !important;
            color: #ffffff;

        }

        .btn-dark-1:hover {
            background-color: #0a549d;
            border-color: #2e4ead;
            color: #ffffff;

            outline: none !important;


        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            .mainCards-1 {

                width: 850px !important;

            }



        }

    </style>
</head>

<body>

    <div class="wrapper">
        <div class="top_navbar">
            <div class="hamburger">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="top_menu">
                <div class="logo"><label for="">Date</label>
                    <input class="form-control" style="width: 200px; display: inline-block;" type="date">
                </div>
                <div class="rightSide">
                    <label for="">Search</label>
                    <input type="text" class="form-control" style="width: 200px; display: inline-block;" name="" id="">
                </div>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="title">User</span></a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>
                        <span class="title">Add Task</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-minus-circle"></i></span>
                        <span class="title">Decrease</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-blog"></i></span>
                        <span class="title">Blogs</span>
                    </a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-leaf"></i></span>
                        <span class="title">Nature</span>
                    </a></li>
            </ul>
        </div>

        <div class="main_container">
            <div class="mainContCards">
                <div class="mainCards-1">
                    <div class="card">

                        <div class="card-body">
                            <div class="mainCardBody">
                                <div class="leftCardBody">
                                    <img style="height: 50px; width: 50px; border-radius: 50%;"
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBAQEBAKEBAKDQ0NDQkJDg8ICQ4NIB0iIiAdHx8kKDQsGCYxJxYTITEhMSstMC4uFys/RDMtNygtLisBCgoKDg0OGhAQFy0lHyUtLS0tLS0tKy0tLS0tKy0tLS0tKystLS0tKysrLSstLS0tLS04LTgtLy0tLS0rLS03Lf/AABEIAMgAyAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAwECBAUGBwj/xAA7EAABBAEBBgIIAwcEAwAAAAABAAIDEQQhBQYSMUFRYXEHEyIygZHB8FKx4RQjM0JiodEVJENyFkTC/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAECAwQF/8QAIREBAQADAAICAwEBAAAAAAAAAAECAxESITFRBCJBE2H/2gAMAwEAAhEDEQA/APcUREBERAREQFHLI1rS5xDWsBLnuIa0BSLyP0x71OBGDBI3hLeLKMZt99G/ogwPSJ6RHTuONhvc2BtiTIZbXynw8F5zZPMuPnZCjCkZfTi+GipamRNG8cvyCt5GxxHtRAN/RXRRE/dFZAoe8Pj1pV6tMUIlJPc6akC/1Ujm9Tz+StkroB58ireI9eXfmKULcWkntY7GgnqzzF2NdAQ4f5UrH8OvyIv7KudkjlQF/hottOo4ztj7VnxZGTwuc17SCeG/VyjsV7puhvXDtCK2lrJmCpcVx9tp7juPFfPDMosJ6tdfEw6kHuFkYW0pIJWzQPLJGG2yM0vz7q0qlj6hRch6Pd7/APUo3h7GsmxS0SBhtjgeoXXrRAiIgIiICIiAiIgIiICIiDTb2bdZgYsmQ/UtHDFH+KU8gvmfKndK98jjbpnue46k2SvWPTpnmsXHF07jnd2vkPqvKseEkhUyvEydq/EwnP5An5810GBuw51cRrwA4ithu/iAAaLq8WMDouHZuy76ehr04ye3Nf8AiGmjyfgAVBLuo/kOI/Kl3sbFLwLP/TP7af54/TzyDc+QkcRDW9SOdfVbIbmxgaukP5LsiFThS7Mr/SYYz+OGk3OABokjp3BWsyt2SOXMfEfovS3ha3LjCj/TKf1Phjf48xyNjuF6ahaWVpaaPiF6llY4IOgXE7wYYa7Tqt9O628rDfpknY7T0FSM9dl24esdFGGx9XNvU/l817KvmPdHNdiZ2NK0uAErWvA6sJojxX02Cu6OBVERSCIiAiIgIiICIiAiIg8S9Nzyc2Bt6Nxga8bK4bFfqAOq9C9OMFZGNJX8SB7C7xB/VcXuzicclkaMrmsNt5LW2rHt46vYsRDQTpy+S6GBaafJbEBfPsOaxW7eI5N0HQAvNLz/ABuV69G2Y+nYxFS2Vy2PvawVxsd8KW9wdtQSjRwHg72SpuFisylZtKhCmaQdVFkZMbBbi0AamzQpR4rdRPKxJwoJt5MYWA8E+AJFrBl3ihPf6JcKjzi/IC4zeAe15fBdaMxkmrTd3p1XMb1wUWvHJ1td5qdXrP2jb7w9NPgOb66Pi5xva8HvR+/kvpuB4c1rhyc1rh5UvlQP9oHuKrra+odhsIxccOskY8IJPO+EL08XmZM5ERXVEREBERAREQEREBERB5T6cBrh+U30XH7nAF0ngGrrN4P95kztm9psby2Jp14GjstJu9gCHJnYL4WcLRfzXDt2TKWO/XpuFlbPJwg4gu5N81RmZDFpTOunvO+Q5rbvjsLEwsERvc5rWnjsHiAdYXNP+uhhOzcaU8Pq2k3p+6cDdX8NFjtxGA2ywHfy3bVudn4LIJDJHE3jdYDnEvDfJVycfUk+88guAAY21bLnPSMZ9psSV4YBd0OvNanaMZkJD30NdfBbfGZpSwcqGyfj81Tq0xa+LZ2Iz37J53I71YKyJMTEcNGt/wCzDxNv6KfIwYZohG5ha4GxPFq/43zWNNseJsYEXrvWXZyXHgc74dVp/PlXnv4Yjdmhjg6Nxq9WHUUsbeeK4ST/ACkFb3Cxi0AON+PVYG9EX+2lro21XG25QykkscDs3EMs8MYu5pY2DrzK+pImcLWj8LQ1eEbubGlgkhy3cJMXDLHERYJ6X2XtOwdpftMDJq4S+w5nMBwXoa9kt5Hn7NWWM8q2KIi2YiIiAiIgIiICIiAiIg8x2ziGHPeCDwz+209D9/Ra+MVM88uINHxFr0DezZ3rYhI0fvMYh7SOfD1C884iJdQdWhwPQi1527Dxyenq2eeE+43mO21mNiAWFilZwcsV1r66D6LCyBXmVmyFavKnY0F0jg1rTWuuqi1aRkYoKjmjp2vJ35rN2dJG+NrmnR3UailjZ+TDxcBkja4+6HODHFOBEwfqpzACoYllsKFYckFarUbabcUgPVjlv8grRbUOhUz1VWVLQgBuzwN8gKXa7mwlmHECKvidXLQrlNn4JyHRQj3SS6UjkGD7C9DijDWho0DAAB4Lr/Gxvbk5/wArKTGYJERF2OEREQEREBERAREQEREFCL07ryfbkXqp65VNIwN6AdPovWVqtubJjniktjPWFltlDR6wOGo1+Cy26/ONdOzwri8N2gWXx6LW4b9PvmpM6YtYSOxrzXm16US5e0Y4weJzfKxxLn8/bcVgtDjz9xax8Bc63k+0SeI2Vs8WCFvNnEdNXA8P6qeQnb8LcHbQffvMLWlxAo6Kv+sY5N8LeJw/jOaHOpZf7g2TGwEggllx2FCcPG6M4evsGynpbxyja4GXG4aOBr5rYtcuJydnlusb9O4PAbWy2PnSXwSG+VO5qOf1XroZnLRZ44nNaBZe4Dh6Ec/8rbPk0Vdg7H/apnEvcwY4sOYA63nT/KthjcryK5ZTGdro9zcQCJ0tC5XFoA0DWjoujWLs7DEMYYCTRJLjoSVlL0sMfHGR5uzLyytERFdQREQEREBERAREQEREBERB5vt7F/ZclzBfBNcsZPKjzHw1WBlTAsNlbb0mv4nQsYf3kLXyFo50en9iuCdtInQkiubToQV527D97x6OnL9J11WNE0sGg5eavdwRizoG/Klqdk7SBoE/4W2mmjILTR4hy6UsfcraVhO29jcrfpzqlm408UzbYb86tao7Li58I1PLVoWfs9kUVgCuI304Va36T5X7XybOY46gHw5BQNgDZBXY6clmZeS1gu+3kufk2rb77aeCrO1W1vJZwASTVWuy3KxeDG9YRTspxk8eDp9+K4XYOz5M+YNFtiiNyyVYrt4r1iNgaA0AANAAA0AC7Pxtdn7Vx/kbO/rF6Ii63KIiICIiAiIgIiICIiAiKLJyGRtL5HMY1upfIQxoQSrX7c2mzEgknkIqJpIaebndAuI3m9J8UXFHht9a8aftMnswA+H4l5pn7YyMpxfPLJISfdcSIx5Doq2tMddroNkbQkypciaVxc+R7TZ5Adh/ZSbU2Y2TXUP19tv3qtbujKBJIw/zta5vw+wuqdFa83bbM7Xo4SePHCl0kLva5AmndFn4+0tQb/vS3OXhg6EAg9DqFq5t3xzjc5pPQ+21T5Y35V8cp8JH7WIoXyv5KOXaRPjosN278/Qg89dQFLDu9Kffka0dm25yn9PtH7/SLL2lpVnXkNbTZuBNMeKjGz8Z94+S22FsWNh5FzvxSe0fvmt3HHQpVuck/VMwt9103o5fE2OWBp/eRPEjwdSWkaH+xXYrwfG3jkws+SaMNfQ9U+J9ta5tBeobt784eaA0PEU3I42QQ11+B6rv1X9I4t2PMrXUIqKq1YiIiAiIgIiICIiAiinmZG0ve5rWsFue8hrQF5tvX6R/fhwvI5x/+R9VFvFscbl8Ok3u30hwRwN4ZZyDUDT7LPF3ZeQbf3iyc1/FM8luvDAy2QsHktbPI5xLnFznOJLnuJc4n6q0Klrqw1yIyxXMFK5CFVpxkYWQY5GyD+Qix3avRcOVsjGvabDgCvN8YiwCAeKxrpVjn+S2+wdrmA8LrMbjqOZaVhu1+XuNMbx2E0NqIR+CmZkNeAWkEHqFc2j96rkaIw4dvkopASsoxhWOFfdIIYo1bnziKNzydGtLishlcyuR3q2j6x3qWe7HTpXD3b6BThj5XiLeOflkLiXHnIXPPmVjQuPEasUeY52sifRtnrfnSx8caX+KyvRnpzWddVsDffNxCGiQyxj/ANfJuRteB5hen7ub/wCJl0xx9RK7T1U5AY4+BXhpCtVpkzy1SvqEH75qq8P3Q3+nxKjlLp4LA4XkmZg8D9F7Dsja0OXGJYHh7TzHJ7T2I6K8vXPlhcWeiIpVEREBcrvNvxi4dtBE0w/4IiCGnxPRcZvh6QXzF0OIXRxah2Tq2aTy/CFwDnXrzJ6nU2q3Jthq77rd7w705OcblfwxtJLMaK2xD/K0gcqIFTrpxknwpIVcArHcwpmhQtFrwqhXOCtpErapZcE4uy1vT2qt191jFW/fghzrfQZNasJHL3TWviFssPapsCStaqVugvx7LkWPI7g/IqdmW7kTfmAVnnrxyRPLH4r0NpNfVRzP4QS7QCySdNFibv5/HC2zq226nssHevaHC0RtNufqa7Lj8Lbxt1Dm7TLgadwM11vhc4fRc/lZA1DRoefS1DLxfzBwvldg0oXLtwwmM5GN9+6gyHFx+nIKVjaodqVY4+qvV0cVcLCjpSsQtCJ4xW3ZWz2PtmfEeJIJHMcKsDVjh2I6rXSCneaqQpU49p3X9IuPk1HkcMEpocRP+3efPou3a4EAggg6gjUUvl0ldfulv3kYRax5dNj6AwvNvYP6T08leZOfLV9PdUWBsfasOXEJoHhzHdtHNPYjoqqzF84uCtAVX9PMKUili7+IyEAVaVSEWRge0sgBQxDUlThExR4VrVIFSkStLVRzVLStKIRcPxH91afshTKOQILYJj7QBdVggXpf3S2WyIPWScR/4xYvlfRa/ZMIe9jCaEjzroDVcvjoPiumw8QRvkouItg9qnEGro/MKZGeV9NLtZ1yu/p0HPl92sEMs6rJynW9x7ucVEoXk9KUqcKvIVQESgulfeiSNUbD0QWTDkexVUcOYVGnQKVVhbqry3RXO5WqhEcbrc7eeTZ83GOJ0Umk2ODQcO48UWgIVFaVllrlqaQ61/UFMVDPzB8QpXKjeKKiqqOCJIhp5qRqpSBErwVcVEHKRqJoqq0q1xKIVJUWQfZPjopeSx5dSP8AsERV0La+FLo9k/wHVWhd9/kufaFv9j/wXebvOqVopn8NG86qgKq4BUpVXVKuAVFdaJWuCxX6ELLtY+Q3qpQscdQVaBRI+I8lU6hUuwD1bz8kQqeR+CubyVAOfiCqMOihC3v8UVQEUnFZHX8K+SnKIoSNVaVURK0q+kREo3NV0L+iIgkIVERBaVY9mrfNEQXUtphZgjiLebnuOnIAKiKUWda6lUBEUJArgqIgoVZILCIpGPEenZW8neDkRQqkaOnb8lGOQHc/2RFIkaPqiIiX/9k="
                                        alt="">
                                </div>
                                <div class="rightCardBody">
                                    <h4>Mohsin</h4>

                                </div>

                            </div>
                            <div class="btn-group ml-3 mt-3" id="basicExample" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary-1">66%</button>
                                <button type="button" class="btn btn-dark-1">2/3 Complete</button> <button id="MainSpan"
                                    type="button" class="btn btn-secondary-1"><i
                                        class="fas fa-plus-circle"></i></button>


                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
    </div>
    <button id="movetop" data-toggle="modal" data-target="#exampleModal" title="Go to top">
        <span class="fas fa-plus-circle" aria-hidden="true"></span>

    </button>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                    class="selectpicker form-control" data-live-search="true"
                                                    id="assignTo">

                                                </select>
                                    <label for="">Details</label>
                                    <table id="subTasks">
                                        <tr>
                                            <td id="td-1">1</td>
                                            <td id="td-2"><input type="text" class="form-control" name="" id=""></td>
                                           
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
                                            <div class="btn-group" id="groupButtons" role="group" aria-label="Basic example">
                                                <button onclick="GetDates()" type="button" id="Today"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Today</button>
                                                <button onclick="TomorrowDate()" type="button" id="Tomorrow"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn ">Tomorrow</button>
                                                <button type="button" id="Date"
                                                    style="background-color:  #ffffff; border: 1px solid #aaa;"
                                                    class="btn "><input class="hello" onchange="customDate()" type="date"
                                                        style="background: none !important; width:103px; border: none !important;"
                                                        name="" id="date"></button>
                                                <input type="text" class="form-control" name="" id="dateValue">
                                            </div>
                                            <!-- <input type="text" class="form-control" id="changeme" name="" id=""> -->
                                            <br>
                                    <label for="">Priority</label><br>

                                    <div class="btn-group" id="myBtnGroup" role="group" aria-label="Basic example">
                                        <button type="button" id="Urgent"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;" class="btn "
                                            onclick="priority1()">Urgent</button>
                                        <button type="button" id="Normal"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;" class="btn "
                                            onclick="priority2()">Normal</button>
                                        <button type="button" id="Easily"
                                            style="background-color:  #ffffff; border: 1px solid #aaa;" class="btn"
                                            onclick="priority3()">Easily</button>
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
                    <button type="button" class="btn btn-secondary-1" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addTasks()">Send</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $("#Today").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",

                });
                $("#Tomorrow").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Date").css({
                    "backgroundColor": "#fff",
                    "color": "#333",
                });

            });
            $("#Tomorrow").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",
                });
                $("#Today").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Date").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });

            });
            $("#Date").click(function () {
                $(this).css({
                    "backgroundColor": "Green",
                    "color": "#fff",


                });
                $("#Today").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });
                $("#Tomorrow").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });

            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $("#Urgent").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",

                });
                $("#Normal").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Easily").css({
                    "backgroundColor": "#fff",
                    "color": "#333",
                });

            });
            $("#Normal").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",
                });
                $("#Easily").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });
                $("#Urgent").css({
                    "backgroundColor": "#fff",
                    "color": "#333",

                });

            });
            $("#Easily").click(function () {
                $(this).css({
                    "backgroundColor": "#e61d2f",
                    "color": "#fff",



                });
                $("#Urgent").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });
                $("#Normal").css({
                    "backgroundColor": "#fff",
                    "color": "#333",


                });

            });
        });

    </script>
    <script>
        function priority1() {
            document.getElementById("priority").value = "Urgent"
        }

        function priority2() {
            document.getElementById("priority").value = "Normal"
        }

        function priority3() {
            document.getElementById("priority").value = "Easily"
        }
        function GetDates() {
            var dateFull = new Date();
            y = dateFull.getFullYear();
            m = dateFull.getMonth() + 1;
            d = dateFull.getDate()
            date = y + '-' + m + '-' + d;
            document.getElementById("dateValue").value = date
            var mainValue = document.getElementById("changeme");
            mainValue.value = date;

            }


        }

        function TomorrowDate() {
            const today = new Date()
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            y = tomorrow.getFullYear();
            m = tomorrow.getMonth() + 1;
            d = tomorrow.getDate()
            date = y + '-' + m + '-' + d;
            document.getElementById("dateValue").value = date;
            var mainValue = document.getElementById("changeme");
            mainValue.value = date;

        }

        function customDate() {
            var custumDate = document.getElementById("date").value;
            document.getElementById("dateValue").value = custumDate;
            alert(custumDate);
        }

    </script>

    <script>
        $(document).ready(function () {
            $("#MainSpan").click(function () {
                $('#exampleModal').modal('show')
            })
        })

    </script>
    <script>
        function getRowId() {
            var t = document.getElementById("subTasks");
            var x = document.getElementById("subTasks").rows.length;
            var totalRow = 0;
            for (var i = 0; i < x; i++) {
                totalRow = Number(t.rows[i].cells[0].innerText);
                totalRow++;

            }


            var cell2 = document.getElementById("td-2").innerHTML;
         
            var row = t.insertRow(-1);
            var mcell1 = row.insertCell(0);
            var mcell2 = row.insertCell(1);

            mcell1.innerHTML = totalRow;
            mcell2.innerHTML = cell2;
        }

    </script>


    <script>
        function addTasks() {

            var taskSubject = document.getElementById("taskSubject").value;
            var assignedTo = document.getElementById("assignedTo").value;
            var dueDate = document.getElementById("date").value;
            var category = document.getElementById("category").value;
            //var taskSubject = document.getElementById("taskSubject").value;
            var priority = document.getElementById("priority").value;

            var taskDetails = [];
            var OverallTask = [];

            //alert(sp);
            $('#subTasks tr').each(function (row, tr) {
                taskDetails[row] = [
                    $(tr).find('td:eq(1)').text(), //Amount
                ];
            });
            
            OverallTask = [taskDetails, taskSubject, assignedTo, dueDate, category, priority];
            var taskTable = JSON.stringify(OverallTask);
            alert(taskTable);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Expense number " + this.responseText + " is added");


                }
            };
            alert(taskTable);
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addTasks/" + taskTable, true);
            xhttp.send();
        }

    </script>





</body>

</html>
