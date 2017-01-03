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
        <link rel="stylesheet" href="cercador.css">
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>


    <!-- TODO: posar links a tot -->
    <body>
        <?php include "header.html" ?>
        <!-- ################################################################## -->
        <main>

            <div id="fons-titol">
                <h2>SHOP GRID VIEW</h2>
                <p>HOME / <a href="#">SHOP</a></p>
            </div>

            <div class="container productes">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3 filtre">
                        <h3>SHOP BY</h3>
                        <hr>
                        <h4>BY CATEGORIES</h4>
                        <hr>
                        <div id="categories">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Clothing</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Bags</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Shoes</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Jewelry</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Clothing</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Bags</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Shoes</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Jewelry</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Watch</a></li>
                                <li><i class="fa-li fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Other</a></li>
                            </ul>
                        </div>
                        <h4>BY PRICE</h4>
                        <hr>
                        <div id="price">
                            <p>
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range"></div>
                        </div>

                        <h4>BY COLOR</h4>
                        <hr>

                        <div id="colors">
                            <a href="#"><div class="blau"></div></a>
                            <a href="#"><div class="taronja"></div></a>
                            <a href="#"><div class="blanc"></div></a>
                            <a href="#"><div class="vermell"></div></a>
                            <a href="#"><div class="negre"></div></a>
                            <a href="#"><div class="rosa"></div></a>
                        </div>

                        <h4>BY SIZE</h4>
                        <hr>

                        <div id="mida">
                            <a href="#"><div>XS</div></a>
                            <a href="#"><div>S</div></a>
                            <a href="#"><div>M</div></a>
                            <a href="#"><div class="selected">L</div></a>
                            <a href="#"><div>XL</div></a>
                        </div>

                        <h4>PRODUCT TAGS</h4>
                        <hr>

                        <div id="tags">
                            <a href="#"><div class="selected">Clothing</div></a>
                            <a href="#"><div>Bag</div></a>
                            <a href="#"><div>Women</div></a>
                            <a href="#"><div>Tie</div></a>
                            <a href="#"><div>Women</div></a>
                            <a href="#"><div>Dress</div></a>
                        </div>

                        <h4>COMPARE</h4>
                        <hr>
                        <div id="compare">
                            <div class="item-compare">
                                <p>White men's polo</p>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </div>
                            <div class="item-compare">
                                <p>T-shirt for style girl</p>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </div>
                            <div class="item-compare">
                                <p>Basic dress for women</p>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </div>
                            <div class="botons">
                                <a href="#">CLEAR ALL</a>
                                <button class="btn">COMPARE</button>
                            </div>
                        </div>

                        <h4>BEST SELLER</h4>
                        <hr>

                        <div id="best-seller">
                            <a href="#"><div>
                                    <img src="imatges/slider2/3.jpg"  class="img-responsive">
                                    <p>His duobus, sicariorum.</p>
                                    <p>$79.99</p>
                                </div></a>
                            <a href="#"><div>
                                    <img src="imatges/slider2/4.jpg" class="img-responsive">
                                    <p>His duobus, sicariorum.</p>
                                    <p>$79.99</p>
                                </div></a>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-8 col-md-9 grid-productes">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-md-5">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Default sorting <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Show by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs text-center hidden-sm">
                                <p>Showing 1-12 of 1033 products</p>
                            </div>
                            <div class="col-sm-3 hidden-xs text-right">
                                <button class="btn text-taronja"><i class="fa fa-th" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-th-list" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-xs-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/1.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/9.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/3.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/4.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/5.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/6.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/7.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/8.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/1.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/2.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/3.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-item">
                                    <div class="photo"> <img src="imatges/slider2/4.jpg" class="img-responsive" alt="a" />
                                        <div class="hover-item"> 
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true">
                                                    <div class="hover-carrito">
                                                        <p>Add to cart</p>
                                                        <div class="arrow-up">
                                                        </div>
                                                    </div>
                                                </i></a> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="preu">
                                        <p><span class="dolar"><i class="fa fa-usd" aria-hidden="true"></i></span>95 <strike>108</strike></p>
                                    </div>
                                    <div class="peu-slider">
                                        <p>Very Me Smoothie Foundation</p>
                                        <div class="estrelles"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star estrella-gris" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pagines">
                                <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">...</a>
                                <a href="#">10</a>
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <?php include "abans_footer.html" ?>


        </main>
        <!-- ################################################################## -->

        <?php include "footer.html" ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 1000,
                    values: [75, 300],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
            });
        </script>
    </body>

</html>