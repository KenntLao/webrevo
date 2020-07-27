<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(config('app.name')); ?></title>
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>">
        <?php echo $__env->yieldContent('css'); ?>
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/font-awesome.min.js')); ?>" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php echo $__env->yieldContent('js'); ?>
    </head>
    <body class="d-flex flex-column">
        <main id="page-content">
            <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container-fluid" id="app">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\wamp64\www\virtualhosts\webrevo\resources\views/layouts/app.blade.php ENDPATH**/ ?>