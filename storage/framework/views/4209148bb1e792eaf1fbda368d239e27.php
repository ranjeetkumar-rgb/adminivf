<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8" />
        <title> <?php echo $__env->yieldContent('title'); ?> | <?php echo e($globalSettings->site_name ?? 'IndiaIVF'); ?> - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta content="<?php echo e($globalSettings->site_name ?? 'IndiaIVF'); ?> - Admin & Dashboard Template" name="description" />
        <meta content="<?php echo e($globalSettings->site_name ?? 'Themesdesign'); ?>" name="author" />
        <!-- App favicon -->
        <?php if($globalSettings && $globalSettings->site_favicon): ?>
            <link rel="shortcut icon" href="<?php echo e(asset('storage/' . $globalSettings->site_favicon)); ?>">
        <?php else: ?>
            <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">
        <?php endif; ?>
        <?php echo $__env->make('admin-layouts.head-css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </head>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('admin-layouts.vendor-scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </body>
</html>
<?php /**PATH C:\wamp64\www\adminivf\resources\views/admin-layouts/master-without-nav.blade.php ENDPATH**/ ?>