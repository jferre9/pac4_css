<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="estil.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header pull-left"> <a class="navbar-brand" href="#">Brand</a> </div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header pull-right">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="navbar-header pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="pull-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li class="pull-right"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="pull-right"><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEGAMENU <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- ################################################################## -->
    <main>
        <div class="container productes">
            <div class="titol text-center">
                <h2>FEATURES PRODUCTS</h2>
                <div class="linia-llarga"></div>
                <div class="linia-curta"></div>
                <div class="linia-llarga"></div>
                <p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</p>
            </div>
            <div class="text-center">
                <button class="boto-quadrat boto-taronja">All</button>
                <button class="boto-quadrat">Blazers</button>
                <button class="boto-quadrat">Cap &amp; Hats</button>
                <button class="boto-quadrat">Shoes</button>
                <button class="boto-quadrat">Hodies</button>
            </div>
        </div>
        
        <?php include "slider2.html" ?>
        
        <div class="carrousel-petit">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="text-carousel">
                                    <h3>2016 TREND</h3>
                                    <h2>NEW COLLECTION</h2>
                                    <p>Hodor. Hodor hodor hodor? Hodor hodor - hodor, hodor. Hodor hodor... Hodor hodor hodor hodor! Hodor hodor - hodor - hodor</p>
                                </div>
                                <div class="imatge-carousel"> <img class="img-responsive" src="imatges/botes.png" /> </div>
                                <div class="boto-carousel">
                                    <button class="btn boto-blanc">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="text-carousel">
                                    <h3>2016 TREND</h3>
                                    <h2>NEW COLLECTION</h2>
                                    <p>Hodor. Hodor hodor hodor? Hodor hodor - hodor, hodor. Hodor hodor... Hodor hodor hodor hodor! Hodor hodor - hodor - hodor</p>
                                </div>
                                <div class="imatge-carousel"> <img class="img-responsive" src="imatges/botes.png" /> </div>
                                <div class="boto-carousel">
                                    <button class="btn boto-blanc">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="text-carousel">
                                    <h3>2016 TREND</h3>
                                    <h2>NEW COLLECTION</h2>
                                    <p>Hodor. Hodor hodor hodor? Hodor hodor - hodor, hodor. Hodor hodor... Hodor hodor hodor hodor! Hodor hodor - hodor - hodor</p>
                                </div>
                                <div class="imatge-carousel"> <img class="img-responsive" src="imatges/botes.png" /> </div>
                                <div class="boto-carousel">
                                    <button class="btn boto-blanc">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ###################################################### -->
        <!-- SLIDER STANDARD LOREM IPSUM -->
        <?php include "slider3.html" ?>
        <!-- ###################################################### -->
        <div class="ceo">
        
        </div>
        <!-- ###################################################### -->
        <!-- SLIDER BLOG -->
        <?php include "slider4.html" ?>
        <!-- ###################################################### -->
        
        <div class="newsletter parallax-window" androidFix="false" data-parallax="scroll" data-image-src="imatges/parallax1.jpg">
            <div class="container">
                <div class="row">
                    <div class="text-blanc text-center">
                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        <p>Permanence of the stars Drake Equation emerged into consciousness.</p>
                    </div>
                    <form>
                        <div class="col-xs-2"></div>
                        <!-- Posant offsets no anava be -->
                        <div class="form-group col-sm-7 col-xs-8">
                            <input type="text" placeholder="keyword search..." class="form-control formulari-transparent"> </div>
                        <div class="form-group col-sm-3 col-xs-12 centrar-petit">
                            <button type="submit" class="btn boto-taronja">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ############# -->
        <div class="container abansFooter">
            <div class="row">
                <div class="col-md-4"> <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    <h3>Free Shipping Worldwide</h3>
                    <p>On order over 150$ - 7 week</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-money" aria-hidden="true"></i>
                    <h3>Money Back Guarantee</h3>
                    <p>Send within 30 days</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h3>24/7 Customer Services</h3>
                    <p>Call us 24/7 at 2568-88</p>
                </div>
            </div>
        </div>
        
    </main>
    <!-- ################################################################## -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-md-push-9">
                    <h3 class="logotip">FABRIC</h3>
                    <p>His duobus, sicariorum. Et orci aetate erat, sed nescio quo modo se gerendo levir meus aufert a me.</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4>ABOUT</h4>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Customer Service</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Careers</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Help</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Shipping Information</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4>OUR STORY</h4>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Where To Buy</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Wholesale</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Offers</li>
                        <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i>Discount Off</li>
                    </ul>
                </div>
                <div class="col-xs-10 col-sm-6 col-md-3 col-md-pull-9">
                    <div class="itemFooter">
                        <button type="button" class="btn btn-default"><i class="fa fa-home" aria-hidden="true"></i></button>
                        <p> 27, North circular road,
                            <br> New York city. </p>
                    </div>
                    <div class="itemFooter">
                        <button type="button" class="btn boto-taronja"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                        <p> info@yourname.com
                            <br> www.yourweb.com </p>
                    </div>
                    <div class="itemFooter">
                        <button type="button" class="btn btn-default"><i class="fa fa-phone" aria-hidden="true"></i></button>
                        <p> +088-653-221-55
                            <br> +088-332-777-11 </p>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-6 col-md-3 col-md-push-9 social"> <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-google-plus" aria-hidden="true"></i> <i class="fa fa-connectdevelop" aria-hidden="true"></i> <i class="fa fa-behance" aria-hidden="true"></i> <i class="fa fa-youtube" aria-hidden="true"></i> </div>
            </div>
        </div>
        <div id="finalDeTot">
            <div class="container">
                <div class="col-sm-6">
                    <p>Copyright &copy;2016 All right reserved</p>
                </div>
                <div class="col-sm-6 hidden-xs"> fotos </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>