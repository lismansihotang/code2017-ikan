<!DOCTYPE html>
<html>
    <head>
        <title>Toko Online Ikan Koki</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Toko Online Jualan Ikan Koki">
        <meta name="author" content="Lisman Tua Sihotang">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php">A Version</a></li>
                        <li><a href="index.php">B Version</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 margin-top-50">
                    <img src="images/header.jpg" class="img-responsive" />
                </div>
                <div class="col-lg-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                if (!isset($_REQUEST['menu'])) {
                                    include_once 'home.php';
                                } else {
                                    include_once 'detail.php';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="panel-footer text-center"><sub>Lisman Tua Sihotang | 14163012</sub></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .margin-top-25{margin-top: 25px;}
            .margin-top-50{margin-top: 51px;}
        </style>
    </body>
</html>
