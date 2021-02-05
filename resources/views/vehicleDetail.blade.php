<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .paras{
            padding: 10px 150px;
        }
        label {
            width: 150px;
            font-size: 14px;
        }

        .ownClass {
            background-color: #000000;
            color: aliceblue;
        }
        .borderMain {
            border: 1px solid #333;
            border-radius: 10px;
        }

        .mainBorder {
            border: 3px double #333;
            border-radius: 10px;
            margin: 10px;
        }
        th,
        td {
            border: 1px solid #333;
        }

        thead {
            background-color: #000000;
            color: aliceblue;
            text-align: center;
        }

        tr td:nth-child(5) {
            text-align: center;
        }

        tr td:nth-child(6) {
            text-align: center;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

    </style>
    <title>Forland Modern Motors</title>
</head>

<body>
    
<div class="borderMain">
        <div class="borderMain">
            <div class="borderMain">
                <div class="borderMain">
                    <div class="mainBorder">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4>Forland Modern Motors</h4>
                <p>8-Km Sheikupura Road Opposite Millat Tractors Ltd.
                    Lahore.</p>
                <p>Sales Tax No. 3277876204764</p>
                <p>NTN # 8258676</p>
                <p>Email: forlandmodernmotors@yahoo.com</p>
            </div>
            <div class="col-md-5 offset-md-3 text-right">
                <h2>INVOICE</h2>
                <label for="">Date</label>
                <input type="text" name="" id="" value="{{ Session::get('ivd')}}"><br>
                <label for="">INVOICE #</label>
                <input type="text" value="{{ Session::get('iu')}}" name="" id=""><br>
                <label for="">CUSTOMER ID #</label>
                <input type="text" value="{{ Session::get('customerID')}}" name="" id="">

            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ownClass text-center">
                    <h4>BILL TO:</h4>
                </div>
                <div class="col-md-4 ownClass offset-md-5 text-center">
                    <h4>Vehicle Detail</h4>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <label for="">Customer Name</label>
                    <input type="text" value="{{ Session::get('customerName')}}" name="" id=""><br>
                    <label for="">City</label>
                    <input type="text" value="{{ Session::get('city')}}" name="" id=""><br>
                    <label for="">Province</label>
                    <input type="text" value="{{ Session::get('province')}}" name="" id=""><br>
                    <label for="">Contact</label>
                    <input type="text" value="{{ Session::get('contact')}}" name="" id="">
                </div>
                <div class="col-md-5 offset-md-2">
                    <label for="">Vehicle Name</label>
                    <input type="text" value="{{ Session::get('model')}}" name="" id=""><br>
                    <label for="">Vehicle Registration#</label>
                    <input type="text" value="{{ Session::get('vehicalRegNo')}}" name="" id=""><br>
                    <label for="">Kilometer Driven:</label>
                    <input type="text" value="{{ Session::get('distanceTraveled')}}" name="" id=""><br>

                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ITEM#</th>
                                <th>DESCRIPTION</th>
                                <th>QTY</th>
                                <th>UNIT PRICE</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach(Session::get('ProductNames') as $p)
                            <td>{{$p[0]}}</td>
                         
                            <td>{{$p[1]}}</td>

                            <td>{{$p[2]}}</td>
                            <td>{{$p[3]}}</td>
                            <!-- <td>{{$p[4]}}</td> -->
                            <td>{{$p[5]}}</td>
                                <!-- <td>{{ Session::get('quantity')}}</td>
                                <td>{{ Session::get('UnitPrice')}}</td>
                                <td>{{ Session::get('tax')}}</td>
                                <td>{{ Session::get('total')}}</td> -->
                                <!-- PID,$productName,$qty,$unitPrice,$tax,$Pt) -->

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Other Comments or Special Instructions
                        </div>
                        <div class="card-body">
                            <h6></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <label for="">SUBTOTAL</label>
                    <input type="text" value="{{ Session::get('total')}}" name="" id=""><br>
                    <label for="">TAX</label>
                    <input type="text" value="{{ Session::get('tax')}}" name="" id=""><br>
                    <label for="">Discount</label>
                    <input type="text" value="{{ Session::get('overallDiscount')}}" name="" id=""><br>
                    
                  
                    <label for="">TOTAL</label>
                    <input type="text" value="{{ Session::get('netTotal')}}" name="" id=""><br>
                    <hr>
                    <label for="">Amount Paid</label>
                    <input type="text" value="{{ Session::get('amountPaid')}}" name="" id=""><br>
                    <label for="">Remaining</label>
                    <input type="text" value="{{ Session::get('InvBalance')}}" name="" id=""><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Stamp & Signature</h5>
                </div>
                <div class="col-md-6 text-center">
                    <p class="paras">If you have any questions about this invoice, please contact Mohsin Jabbar , 0321-3888893 #, mohsinjabbar560@gmail.com
                        
                    </p>
                    <h5>Expertise. Convenience. Reliability</h5>
                </div>
                <div class="col-md-3">
                    <h5>Service Manager</h5>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
