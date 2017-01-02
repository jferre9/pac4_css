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
                            <tr>
                                <td class="hidden-xs"><img class="img-responsive" src="imatges/slider2/1.jpg"></td>
                                <td>Very Me Smoothie Foundation</td>
                                <td>$128.00</td>
                                <td>
                                    <input type="text" name="quant[2]" class="input-number"  value="1" min="1" max="100" readonly="">
                                    <div>
                                        <a class="btn-number" data-type="plus" data-field="quant[2]">
                                            +
                                        </a>
                                        <a class="btn-number"  data-type="minus" data-field="quant[2]">
                                            -
                                        </a>
                                    </div>
                                </td>
                                <td class="hidden-sm hidden-xs">$128.00</td>
                                <td><i class="fa fa-shopping-basket" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                    <!--div class="col-xs-6">
                        <button class="btn">CONTINUE SHOPPING</button>    
                    </div>
                    <div class="col-xs-6 text-right">
                        <button class="btn">UPDATE</button>
                        <button class="btn boto-taronja">CHECKOUT</button>
                    </div-->
                    <div class="col-xs-12 botons-cistell">
                        <button class="btn">CONTINUE SHOPPING</button>
                        <div class="text-right">
                            <button class="btn">UPDATE</button>
                            <button class="btn boto-taronja">CHECKOUT</button>
                        </div>
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
        <script type="text/javascript">

            //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
            $('.btn-number').click(function (e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });
            $('.input-number').focusin(function () {
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function () {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                        // Allow: Ctrl+A
                                (e.keyCode == 65 && e.ctrlKey === true) ||
                                // Allow: home, end, left, right
                                        (e.keyCode >= 35 && e.keyCode <= 39)) {
                            // let it happen, don't do anything
                            return;
                        }
                        // Ensure that it is a number and stop the keypress
                        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                            e.preventDefault();
                        }
                    });
        </script>
    </body>

</html>