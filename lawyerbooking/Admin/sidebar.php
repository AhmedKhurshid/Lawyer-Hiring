<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- icon -->
  <link rel="icon" href="img/log.png">
  <!-- end linking -->
  <title>NutFlix - admin</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img src="img/logo-admin.png" alt="">
      </div>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <!-- end user interface submenu -->
        <li class="nav-item"><a href="Lawyer_category.php" class="nav-link"><i class="fa fa-inbox"></i>Categories</a></li>

        <li class="nav-item"><a href="about.php" class="nav-link"><i class="fa fa-inbox"></i>About</a></li>

        <li class="nav-item"><a href="blog.php" class="nav-link"><i class="fa fa-inbox"></i>Blog</a></li>
        <!-- start with charts -->
        <li class="nav-item"><a href="#menu3" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>ui<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="menu3">
            <a href="ui-alerts.html" class="nav-link" data-parent="#menu3">alerts</a>
            <a href="ui-btns.html" class="nav-link" data-parent="#menu3">buttons</a>
            <a href="ui-cards.html" class="nav-link" data-parent="#menu3">cards</a>
            <a href="ui-list.html" class="nav-link" data-parent="#menu3">list</a>
            <a href="ui-progress-bars.html" class="nav-link" data-parent="#menu3">progress</a>
        </li>
        <!-- end charts submenue -->
        <!-- end with charts -->
        <li class="nav-item"><a href="inbox.html" class="nav-link"><i class="fa fa-inbox"></i>inbox</a></li>
        <li class="nav-item"><a href="contacts.html" class="nav-link"><i class="fa fa-user"></i>contact</a></li>
        <li class="nav-item"><a href="forms.html" class="nav-link"><i class="fa fa-edit"></i>forms</a></li>
        <li class="nav-item"><a href="tabels.html" class="nav-link"><i class="fa fa-table"></i>tables</a></li>
        <li class="nav-item"><a href="profile.html" class="nav-link"><i class="fa fa-users"></i>profile</a></li>
        <li class="nav-item"><a href="invoice.html" class="nav-link"><i class="fa fa-money-bill-alt"></i>invoice</a></li>
        <li class="nav-item"><a href="price.html" class="nav-link"><i class="fa fa-dollar-sign"></i>price</a></li>
        <li class="nav-item"><a href="support.html" class="nav-link"><i class="fa fa-life-ring"></i>support</a></li>
      </ul>
    </div>
    <!-- end the list -->
  </div>
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-expand-arrows-alt"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button>
        </div>
        <div class="right">
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button>
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mohamed</button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">profile</a>
             <a class="dropdown-item" href="#">sitting</a>
             <a class="dropdown-item" href="#">log out</a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->