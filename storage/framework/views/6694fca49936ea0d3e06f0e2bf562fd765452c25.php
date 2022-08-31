<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <?php echo e($slot); ?>

    </div>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/components/layout.blade.php ENDPATH**/ ?>