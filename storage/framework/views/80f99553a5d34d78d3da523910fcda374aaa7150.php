<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            <?php echo $__env->yieldContent('title','Eshop'); ?>
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/foundation.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/app.css')); ?>"/> 
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                      Home
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="<?php echo e(route('products')); ?>">
                            Products
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo e(route('offers')); ?>">
                            Offers
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo e(route('men')); ?>">
                            Men
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo e(route('women')); ?>">
                            Women
                        </a>
                    </li>     
                                  
                   
                </ol>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
<footer class="footer">
  <div class="row full-width ">
  
  </div>
</footer>

    <script src="<?php echo e(asset('dist/js/vendor/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/app.js')); ?>"></script> 
    </body>
</html>
