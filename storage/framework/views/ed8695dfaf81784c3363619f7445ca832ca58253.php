<!doctype html>
<html>

<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container">
        <header class="row">
            <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <div id="main" class="row">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer class="row">
            <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </div>
</body>

</html><?php /**PATH C:\wamp64\www\virtualhosts\webrevo\resources\views/layouts/master.blade.php ENDPATH**/ ?>