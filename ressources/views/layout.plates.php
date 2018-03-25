<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css">
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Mon Blog</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil
                    <span class="sr-only">(current)</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    <div class="container">
    <?=$this->section('content')?>
    </div>
    <!--Footer-->
<footer class="page-footer font-small blue pt-4 mt-4">

<!--Footer Links-->
<div class="container-fluid text-center text-md-left">
    <div class="row">

        <!--First column-->
        <div class="col-md-6">
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-6">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled">
                <li>
                    <a href="#!">Link 1</a>
                </li>
                <li>
                    <a href="#!">Link 2</a>
                </li>
                <li>
                    <a href="#!">Link 3</a>
                </li>
                <li>
                    <a href="#!">Link 4</a>
                </li>
            </ul>
        </div>
        <!--/.Second column-->
    </div>
</div>
<!--/.Footer Links-->

<!--Copyright-->
<div class="footer-copyright py-3 text-center">
    © 2018 Copyright:
    <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> mon site.com </a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>