<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MDBootstrap Datatables  -->
    <link href="public/dist/css/addons/datatables.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href=https://fonts.googleapis.com/css2?family=Righteous&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
</head>
<body>

<div class="container-fluid">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
  <a class="navbar-brand" href="#">S_M_S</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/student"><i class="fas fa-user-astronaut"></i>&nbsp;&nbsp;STUDENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/teacher"><i class="fas fa-user-graduate"></i>&nbsp;&nbsp;TEACHER</a>
      </li>
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="/subject"><i class="fas fa-edit"></i>&nbsp;&nbsp;SUBJECT</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="/section"><i class="fas fa-door-open"></i>&nbsp;&nbsp;SECTION</a>--}}
{{--      </li>--}}
        <li class="nav-item">
            <a class="nav-link" href="/class"><i class="fas fa-door-open"></i>&nbsp;&nbsp;CLASS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/grade"><i class="fas fa-door-open"></i>&nbsp;&nbsp;GRADE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/attendance"><i class="fas fa-door-open"></i>&nbsp;&nbsp;ATTENDANCE</a>
        </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <br><br><br><br>




