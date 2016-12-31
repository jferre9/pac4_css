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
        <link rel="stylesheet" href="cistell.css">
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

            <div id="fons-titol">
                <h2>SHOPING CART</h2>
                <p>HOME / <a href="#">SHOPING CART</a></p>
            </div>

            <div class="container cistell">
                <div class="row">
                    <div class="col-xs-12">
                        <table>
                            <tr>
                                <th class="hidden-xs">PRODUCTS</th>
                                <th>NAME OF PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th class="hidden-sm hidden-xs">TOTAL</th>
                                <th>CART</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn">CONTINUE SHOPPING</button>    
                    </div>
                    <div class="col-xs-6 text-right">
                        <button class="btn">UPDATE</button>
                        <button class="btn boto-taronja">CHECKOUT</button>
                    </div>
                    <div class="col-xs-12">
                        <hr>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div id="discount">
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div id="cart-total">
                            
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
    </body>

</html>