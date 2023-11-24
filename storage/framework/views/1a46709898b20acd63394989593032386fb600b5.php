<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Printy: <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div id="app">

        <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="main">

            <?php echo $__env->yieldContent('content'); ?>

        </main>

        <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <script src="/js/app.js"></script>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/layouts/default.blade.php ENDPATH**/ ?>