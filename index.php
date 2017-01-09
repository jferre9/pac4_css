<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fabric</title>
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
                        <div class="segon"> <div class="evitar-calc">

                                <img src="imatges/shoes2.png" class="img-responsive" /> 
                                <div class="hover"><h2>MEN'S<br>SHOES</h2></div>
                            </div> </div>
                        <div class="tercer"> <div class="evitar-calc">
                                <img src="imatges/belt.png" class="img-responsive" /> 
                                <div class="new">
                                    <h2>NEW</h2>
                                    <div class="triangle-esquerra"></div>
                                    <div class="triangle-dreta"></div>
                                </div>
                            </div></div>
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
                                            <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men.</p>
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
                                            <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men.</p>
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
                                            <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men.</p>
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
            <div class="ceo parallax-window" data-parallax="scroll" data-image-src="imatges/parallax2.jpg">
                <div id="carousel-ceo" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-ceo" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-ceo" data-slide-to="1"></li>
                        <li data-target="#carousel-ceo" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                                        <div class="centrar">
                                        <div class="persona">
                                            <div class="foto">
                                                <img src="imatges/ceo.jpg">
                                            </div>
                                            
                                            <div class="nom-persona">
                                                <h3>Jonathan Doe</h3>
                                                <p>CEO of company</p>

                                            </div>
                                        </div>
                                        </div>
                                        <p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. <sub><b><i class="fa fa-quote-right" aria-hidden="true"></i></b></sub></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                                        <div class="centrar">
                                        <div class="persona">
                                            <div class="foto">
                                                <img src="imatges/ceo.jpg">
                                            </div>
                                            
                                            <div class="nom-persona">
                                                <h3>Jonathan Doe</h3>
                                                <p>CEO of company</p>

                                            </div>
                                        </div>
                                        </div>
                                        <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. <sub><b><i class="fa fa-quote-right" aria-hidden="true"></i></b></sub></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                                        <div class="centrar">
                                        <div class="persona">
                                            <div class="foto">
                                                <img src="imatges/ceo.jpg">
                                            </div>
                                            
                                            <div class="nom-persona">
                                                <h3>Jonathan Doe</h3>
                                                <p>CEO of company</p>

                                            </div>
                                        </div>
                                        </div>
                                        <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. <sub><b><i class="fa fa-quote-right" aria-hidden="true"></i></b></sub></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="left carousel-control hidden-xs hidden-sm" href="#carousel-ceo" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control hidden-xs hidden-sm" href="#carousel-ceo" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
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