<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side nav</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href=https://fonts.googleapis.com/css2?family=Righteous&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>





    <style>
        body{
            font-family:'Roboto',sans-serif;
        }
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }
        .side-bar{
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #042331;
            transition: all .5s ease;
        }
        .side-bar header{
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            user-select: none;
        }
        .side-bar ul a{
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size: 20px;
            color: white;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(255,255,255,.1);
            border-bottom: 1px solid black;
            transition: .4s;
        }
        ul li:hover a{
            padding-left: 60px;
        }
        side-bar ul a i{
            margin-right: 16px;
        }
        #check{
            display: none;
        }
        label #btn,label #cancel{
            position: absolute;
            cursor: pointer;
            border-radius: 3px;
            background: #042331;
        }
        label #btn{
            left: 10px;
            top: 25px;
            font-size: 35px;
            color: white;
            padding: 6px 12px;
            transition: all .5s;
        }
        label #cancel{
            z-index: 1111;
            left: -195px;
            top: 35px;
            font-size: 30px;
            color: #0a5275;
            padding: 4px 9px;
            transition: all .5s ease;
        }
        #check:checked ~ .side-bar{
            left: 0;
        }
        #check:checked ~ label #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }
        #check:checked ~ label #cancel{
            left: 195px;
        }
        #check:checked ~ .main{
            margin-left: 250px;
        }
        .main{

            margin-right: 20px;
            margin-left: 95px;
            transition: all .5s;

        }

        .clock {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            color: #17D4FE;
            font-size: 60px;
            font-family: Orbitron;
            letter-spacing: 7px;
        }

    </style>
</head>
<body>

<input type="checkbox" id="check">
<label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancel"></i>
</label>

<div class="side-bar">
    <header>My App</header>
    <ul>
        <li><a href="/student"><i class="fas fa-qrcode"></i>&nbsp;&nbsp;Home</a></li>
        <li><a href="/student"><i class="fas fa-link"></i>&nbsp;&nbsp;STUDENTS</a></li>
        <li><a href="/teacher"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;TEACHERS</a></li>
        <li><a href="/grade"><i class="fas fa-calendar"></i>&nbsp;&nbsp;GRADE</a></li>
        <li><a href="/subject"><i class="fas fa-question-circle"></i>&nbsp;&nbsp;SUBJECT</a></li>
        <li><a href="/class"><i class="fas fa-sliders-h"></i>&nbsp;&nbsp;CLASS</a></li>
        <li><a href="/attendance"><i class="fas fa-envelope"></i>&nbsp;&nbsp;ATTENDANCE</a></li>
    </ul>
</div>

<div class="main">

        <div class="">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class=" col-lg-3 col-xlg-8" href="/student">
                    <div class="card card-hover" >
                        <div class="box bg-megna text-center">
                            <h3 class="text-white">STUDENTS</h3>
                            <i class="fas fa-user-secret fa-8x"></i>
                            <h1 class="font-light text-white"></h1>


                            <br>
                            <h2 class="text-white">10</h2>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h3 class="text-white">TEACHERS</h3>
                            <i class="fas fa-user-graduate fa-8x"></i>
                            <h1 class="font-light text-white"></h1>


                            <br>
                            <h2 class="text-white">10</h2>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h3 class="text-white">CLASSES</h3>
                            <i class="fas fa-school fa-8x"></i>
                            <h1 class="font-light text-white"></h1>

                            <br>
                            <h2 class="text-white">5</h2>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h3 class="text-white">Subjects</h3>
                            <i class="fas fa-book-reader fa-8x"></i>
                            <h1 class="font-light text-white"></h1>

                            <br>
                            <h2 class="text-white">5</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h == 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
