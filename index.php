<?php
    @session_start();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Citrus Showcase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="./js/modernizr-3.5.0.min.js"></script>
</head>
<body>

<?php
    include('connection.inc');
?>

<div class="row top-bar">
    <div class="col-sm-1"></div>
    <div class="col-sm-5 d-sm-block d-none" style="font-size: 13px">
        <i class="fa fa-envelope"></i> mladen.karic1@yahoo.com &nbsp;
        <i class="fa fa-phone"></i> +381616342379 &nbsp;
    </div>
    <div class="col-sm-2 col-6 text-center">
        <a href="https://www.linkedin.com/in/mladen-karic/"><i class="fa fa-linkedin"></i></a>
    </div>
    <?php
    if(isset($_SESSION['role'])){
        echo('
            <div class="col-sm-3 col-6 login">
                <a href="logout.php">Logout</a>
            </div>
            ');
    }
    else{
        echo '
                <div class="col-sm-3 col-6 login">
                    <a href="login.php" class="text-white">Login</a>
                </div>
            ';
    }
    ?>
</div>

<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CITRUS <span class="navbar-brand2"> SHOWCASE</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navi">
                <li class="nav-item">
                    <a class="nav-link nav-btn active" href="#">HOME</a>
                </li>
                <?php
                if(isset($_SESSION['role'])){
                    echo('
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="admin_panel.php">ADMIN PANEL</a>
                    </li>
                    ');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="smoke">
    <div class="container" id="fh5co-pricing">

        <div class="heading animate-box"><h2><b>CITRUSES</b></h2></div>
        <br><br>

        <div class="row">

            <?php
                include('products.inc');
            ?>

        </div>
    </div>
</div>

<div class="white">
    <div class="container" id="fh5co-features">
        <div class="heading animate-box"><h2><b><span class="text-org">COMMENTS</span> </b></h2>
        </div>
        <br><br>
        <div class="row">

            <?php
                include('comments.inc');
            ?>

        </div>
    </div>
</div>

<div class="smoke">
    <div class="container" id="fh5co-contact">
        <div class="heading animate-box"><h2><b>SEND A COMMENT</b></h2></div>
        <div class="text-center animate-box"><h3>Thoughts on our products or company? Share with us!</h3></div><br>
        <div class="row animate-box">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>" id="formComment" name="formComment">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" class="form-control" id="tbName" name="tbName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="text" class="form-control" id="tbEmail" name="tbEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Comment</label>
                        <textarea class="form-control" rows="5" placeholder="Msg Here" id="txtComment" name="txtComment"></textarea>
                    </div>
                    <input class="btn btn-banner" type="submit" value="Send" class="button" id="btnSubmit" name="btnSubmit" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include('insert_comment.inc');
?>

<div class="dark">
    <div class="container animate-box" id="fh5co-footer">
        <div class="row">
            <div class="col-sm-4">
                <div><a class="nsavbar-brand" href="#">CITRUS <span class="navbar-brand2"> SHOWCASE</span></a></div>
                <br>
                <div class="text-white">We are a company selling citrus fruits. Enjoy our finest selection!
                </div>
            </div>
            <div class="col-sm-4">
                <div class="icons">Explore Our Pages</h3></div>
                <br>
                <table width="100%">
                    <tr>
                        <td><a class="text-white" href="index.php">Home</a></td>
                    </tr>

                </table>
            </div>
            <div class="col-sm-4">
                <div class="icons">Get in Touch</h3></div>
                <br>
                <div>
                    <a href="https://www.linkedin.com/in/mladen-karic/"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="darker">
    <div class="container" id="fh5co-legal">
        <div class="row">
            <div class="col-sm-8 text-white mtext-center">
                &copy; 2020 <a class="text-gr" href="#">FreeHTML5 <span class="navbar-brand2"> HOST</span></a>. Design
                by <a href="https://freehtml5.co" target="_blank">FreeHTML5</a>, BackEnd by &copy;Giomlly
            </div>
        </div>
    </div>
</div>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>-->
<script src="./js/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<script src="./js/bootstrap.min.js"></script>
<!--<script src="https://use.fontawesome.com/8e45396e2e.js"></script>-->
<script src="./js/fontawesome.js"></script>
<script src="./js/jquery.waypoints.min.js"></script>
<script src="./js/animate.js"></script>

</body>
</html>