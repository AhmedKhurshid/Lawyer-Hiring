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
  <link rel="icon" href="img/law.png">
  <!-- end linking -->
  <title>Law Services - admin</title>
</head>

<style>
  .image{
    width:100%;
  }
  </style>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <div class="sidebar" style="background-color: #fff; z-index: 1000;">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img class="image" src="img/law.png" alt="">
      </div>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <!-- end user interface submenu -->
        
        <li class="nav-item"><a href="home.php" class="nav-link"><i class="fa fa-edit"></i>Index</a></li>

        <li class="nav-item"><a href="Lawyer_category.php" class="nav-link"><i class="fa fa-edit"></i>Categories</a></li>

        <li class="nav-item"><a href="about.php" class="nav-link"><i class="fa fa-edit"></i>About</a></li>

        <li class="nav-item"><a href="blog.php" class="nav-link"><i class="fa fa-edit"></i>Blog</a></li>

        <li class="nav-item"><a href="contact.php" class="nav-link"><i class="fa fa-edit"></i>Contact</a></li>
        <!-- start with charts -->
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
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="logout.php">log out</a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->