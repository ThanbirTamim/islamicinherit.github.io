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
            text-align: center;
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
                    <b><h3>আত্মীয়-স্বজনের তালিকা</h3></b>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>

</div>
<form method="post" action="/male" enctype="multipart/form-data"> <!--form for submit-->
    @csrf

        <div class="container">
            <div id="sec2">
            <div class="row">
                <div class="col-md-4">
                    <input type="checkbox" name="wife"> স্ত্রী
                    <input type="text" name="wifeq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="son"> ছেলে
                    <input type="text" name="sonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="ripson"> মৃত ছেলে
                    <input type="text" name="ripsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="daughter"> কন্যা
                    <input type="text" name="daughterq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="ripdaughter"> মৃত কন্যা
                    <input type="text" name="ripdaughterq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="father"> বাবা
                    <input type="text" name="fatherq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="mother"> মা
                    <input type="text" name="motherq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="grandpa"> দাদা
                    <input type="text" name="grandpaq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="grandma"> দাদি
                    <input type="text" name="grandmaq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="grandmother"> নানি
                    <input type="text" name="grandmotherq" style="width:12%; height: 6%"> <br><br>

                </div>
                <div class="col-md-4">
                    <input type="checkbox" name="brother"> সহোদর ভাই
                    <input type="text" name="brotherq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="sister"> সহোদর বোন
                    <input type="text" name="sisterq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="brotherson"> সহোদর ভাইয়ের পুত্র
                    <input type="text" name="brothersonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="brothersonson"> সহোদর ভাইয়ের পুত্রের পুত্র
                    <input type="text" name="brothersonsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepbroM"> সৎ ভাই (বৈমাত্রেয়)
                    <input type="text" name="stepbroMq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepbroF"> সৎ ভাই (বৈপিত্রেয়)
                    <input type="text" name="stepbroFq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepsisM"> সৎ বোন (বৈমাত্রেয়)
                    <input type="text" name="stepsisMq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepsisF"> সৎ বোন (বৈপিত্রেয়)
                    <input type="text" name="stepsisFq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepbroMson"> সৎ ভাই(বৈমাত্রেয়)-এর পুত্র
                    <input type="text" name="stepbroMsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepbroMsonson"> সৎ ভাই(বৈমাত্রেয়)-এর পুত্রের পুত্র
                    <input type="text" name="stepbroMsonsonq" style="width:12%; height: 6%"> <br><br>


                </div>
                <div class="col-md-4">
                    <input type="checkbox" name="uncle"> চাচা
                    <input type="text" name="uncleq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepuncle"> চাচা (বৈমাত্রেয়)
                    <input type="text" name="stepuncleq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="cousin"> চাচাতো ভাই
                    <input type="text" name="cousinq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepcousin"> সৎ চাচাতো ভাই (বৈমাত্রেয়)
                    <input type="text" name="stepcousinq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepcousinson"> সৎ চাচাতো ভাইয়ের পুত্র
                    <input type="text" name="stepcousinsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="cousinson"> চাচাতো ভাইয়ের পুত্র
                    <input type="text" name="cousinsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="cousinsonson"> চাচাতো ভাইয়ের পুত্রের পুত্র
                    <input type="text" name="cousinsonsonq" style="width:12%; height: 6%"> <br><br>
                    <input type="checkbox" name="stepcousinsonson"> সৎ চাচাতো ভাইয়ের পুত্রের পুত্র
                    <input type="text" name="stepcousinsonsonq" style="width:12%; height: 6%"> <br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="sec1">
                    <b><h3>সম্পদের বিবরণা</h3></b>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

        <div class="container">
            <div id="sec2">
            <div class="row">
                <div class="col-md-6">
                    জমি <input type="text" name="property" style=""> শতাংশ<br><br>
                    স্বর্ণ <input type="text" name="gold" style=""> ভরি<br><br>
                </div>
                <div class="col-md-6">
                    রৌপ্য <input type="text" name="silver" style=""> ভরি<br><br>
                    মুদ্রা <input type="text" name="money" style=""> টাকা<br><br>

                </div>
            </div>
            <input class="btn btn-success" type="submit" value="ফলাফল দেখুন">
        </div>
    </div>
</form>

<script>

</script>
</body>
</html>
