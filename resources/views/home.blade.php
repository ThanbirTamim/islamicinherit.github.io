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
            margin-top: 200px;
        }
        #sec2{
            font-family: 'Siyam Rupali ANSI';
            color: white;
            background: #99003d;
            border-radius: 30px;
            padding: 20px;
            text-align: center;
            border: 3px solid white;
            margin-top: 10px;
        }
        #sec3{
            font-family: 'Siyam Rupali ANSI';
            color: white;
            background: #267326;
            border-radius: 30px;
            padding: 20px;
            text-align: center;
            border: 3px solid white;
            margin-top: 10px;
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
                <b><h3>যার সম্পত্তি বণ্টন হবে তিনি পুরুষ নাকি মহিলা?</h3></b>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
            <a href="/male" style="text-decoration: none"><div id="sec2"><b> <h3>পুরুষ</h3></b></div></a>
        </div>
        <div class="col-md-3">
            <a href="/female" style="text-decoration: none"><div id="sec3"><b><h3>মহিলা</h3></b></div></a>
        </div>
        <div class="col-md-3">
        </div>
    </div>

</div>

<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
