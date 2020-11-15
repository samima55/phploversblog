<?php include 'config/config.php' ?>
<?php include 'libraries/Database.php' ?>
<?php include 'helpers/format_helpers.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="php lovers blog">
    <meta name="author" content=" samima hassan ">

    <title>POSTS: Blog ForPHP Lovers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="css/custome.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row  align-items-center">
          <div class=" col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">PHP LOVERS</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="p-2 text-muted" href="index.php">Home</a>
          <a class="p-2 text-muted" href="posts.php">All Posts</a>
        </nav>
      </div>

      <div class="jumbotron p-3  text-white  bg-dark">
        <div class="row justify-content-center">
        <div class="col-md-3 float-right">
            <img  class="logo" src="images/logo.png">
        </div>
        <div class="col-md-9 padd">
           <h1 class="dislpay-4 font-italic ">PHP LOVERS BLOG</h1>
           <p >PHP News , tutorials , videos ,events & more .</p>
        </div>
      </div>
  </div>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
