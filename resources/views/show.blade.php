<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>সম্পত্তি বণ্টন</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;
        }

        #navbar {
            overflow: hidden;
            background-color: #333;
        }

        #navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-family: "Siyam Rupali ANSI";
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }
        body{
            background-image: url('/images/cover.jpg');
            background-repeat: repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: auto;
        }
        #sec1{
            font-family: 'Siyam Rupali ANSI';
            color: white;
            background: #19194d;
            border-radius: 30px;
            padding: 20px;
            text-align: center;
            border: 3px solid white;
            margin-top: 20px;
        }
        #sec2{
            /*font-family: 'Siyam Rupali ANSI';*/
            color: black;
            background: #d9d9d9;
            border-radius: 30px;
            padding: 20px;
            text-align: left;
            border: 3px solid white;
            font-size: 18px;
            padding-bottom: 50px;
        }


    </style>

</head>
<body>
<div id="navbar" style="text-align: center">
    <a class="active" href="/">সম্পত্তি বণ্টন</a>
    <a href="/rule">সম্পত্তি ভাগের নিয়ম</a>
    {{--<a href="#">প্রশ্ন</a>--}}
    <a href="/communication">যোগাযোগ</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div id="sec1">
                <b><h3>ফলাফল</h3></b>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>

</div>

    <div class="container">
        <div id="sec2">

                    <div class="row">

                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">আত্মীয়</th>
                                    <th scope="col">সম্পত্তিয়ের অংশ</th>
                                    <th scope="col">জমি(শতাংশ)</th>
                                    <th scope="col">স্বর্ণ(ভরি)</th>
                                    <th scope="col">রূপা(ভরি)</th>
                                    <th scope="col">টাকা</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($AllPortionRelatives as $name=>$portion)
                                    @if($portion != 0)
                                        <tr>
                                            <th>{{$name}}</th>
                                            <td>{{$portion}}</td>
                                            <td>{{$portion*$property}}</td>
                                            <td>{{$portion*$gold}}</td>
                                            <td>{{$portion*$silver}}</td>
                                            <td>{{$portion*$money}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                {{--@endif--}}
        </div>
    </div>

<script>

</script>
</body>
</html>
