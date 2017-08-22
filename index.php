<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>MOMENTOGRAM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="MOMENTOGRAM" />
        <meta name="keywords" content="MOMENTOGRAM" />
        <meta name="author" content="MOMENTOGRAM" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="vendor/prettyphoto/css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="vendor/eufont/eufont.css" />
        <link rel="stylesheet" type="text/css" href="vendor/flipster/jquery.flipster.css" />
        <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="vendor/owlcarousel/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="vendor/owlcarousel/owl.theme.css" />
        <link rel="stylesheet" type="text/css" href="vendor/owlcarousel/owl.transitions.css" />
        <link rel="stylesheet" type="text/css" href="css/momentogram.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <script src="vendor/jquery.js"></script>
        <script src="vendor/jquery-ui.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="vendor/modernizr.js"></script>
        <script src="vendor/instafeed.min.js"></script>
        <script src="vendor/flipster/jquery.flipster.min.js"></script>
    </head>
    <body>
        <?php  include("header.php"); ?>
        <?php 
        if($_GET['page']=='home'){
            include("home.php");
        }else if($_GET['page']=='food'){ 
            include("food.php");
        }else if($_GET['page']=='egg'){ 
            include("egg.php");
        }else if($_GET['page']=='drink'){ 
            include("drink.php");
        }else if($_GET['page']=='location'){ 
            include("location.php");
        }else if($_GET['page']=='news'){ 
            include("news.php");
        }else if($_GET['page']=='news-detail'){ 
            include("news-detail.php");
        }else if($_GET['page']=='gallery'){ 
            include("gallery.php");
        }else if($_GET['page']=='disclaimer'){ 
            include("disclaimer.php");
        }else{ 
            include("home.php");
        }?>
        <?php  include("footer.php"); ?>
        <script src="vendor/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="vendor/magnific-popup/magnific-popup.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="vendor/wowanimate/wow.js"></script>
        <script src="vendor/custom.js"></script>
    </body>
</html>