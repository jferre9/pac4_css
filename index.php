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
    <link rel="stylesheet" href="comu.css">
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
<!-- TODO: posar links a tot -->

<body>
    <?php include "header.html" ?>
        <!-- ################################################################## -->
        <main>
            
            
            <div id="primerCarousel" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <!--ol class="carousel-indicators">
    <li data-target="#primerCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#primerCarousel" data-slide-to="1"></li>
  </ol-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imatges/primera.jpg" alt="Chania">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <h2>Fasion for <span class="text-taronja">New Trend</span></h2>
                    <p>Well, the way they make shows is, they make one show. <br>That show's called a pilot.</p>
                    <button class="btn read-more">READ MORE</button>
                    <button class="btn boto-taronja">SHOP NOW</button>
                </div>
            </div>
        </div>
        <div class="next-img right carousel-control">
            <img src="imatges/miniatura.png">
        </div>
    </div>

    <div class="item">
      <img src="imatges/primera.jpg" alt="Chania">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <h2>Fasion for <span class="text-taronja">New Trend</span></h2>
                    <p>Well, the way they make shows is, they make one show. <br>That show's called a pilot.</p>
                    <button class="btn read-more">READ MORE</button>
                    <button class=" btn boto-taronja">SHOP NOW</button>
                </div>
            </div>
        </div>
        <div class="next-img right carousel-control">
            <img src="imatges/miniatura.png">
        </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#primerCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#primerCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
            
            <div class="container quadrats">
                <div class="row">
                    <div class="col-md-4">
                        <div class="primer"> <img src="imatges/mens_wear.jpeg" class="img-responsive" />
                            <div class="hover"><h2>MEN'S WEAR</h2></div>
                        </div>
                        <div class="segon"> <img src="imatges/shoes2.png" class="img-responsive" /> 
                            <div class="hover"><h2>MEN'S<br>SHOES</h2></div>
                        </div>
                        <div class="tercer"> <img src="imatges/belt.png" class="img-responsive" /> 
                            <div class="new">
                                <h2>NEW</h2>
                                <div class="triangle-esquerra"></div>
                                <div class="triangle-dreta"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12"><div class="quart"><img src="imatges/women.png" class="img-responsive" /> 
                        <div class="women">
                            <h2>WOMEN'S COLLECTION</h2>
                            <p>You think water moves fast? You should see ice. It moves like it has a mind.</p>
                            <button class="btn boto-taronja">SHOP NOW</button>
                        </div>
                        </div> </div>
                </div>
            </div>
            <!-- ################################################################## -->
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
            <!-- ####################################################### -->
            <div class="carrousel-petit">
                <div class="container">
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
            </div>
            <!-- ###################################################### -->
            <!-- SLIDER STANDARD LOREM IPSUM -->
            <?php include "slider3.html" ?>
            <!-- ###################################################### -->
            <div class="ceo"> </div>
            <!-- ###################################################### -->
            <!-- SLIDER BLOG -->
            <?php include "slider4.html" ?>
            <!-- ###################################################### -->
            <?php include "abans_footer.html" ?>
    </main>
    <!-- ################################################################## -->
    <?php include "footer.html" ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>

</html>