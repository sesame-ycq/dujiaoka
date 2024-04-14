<?php $__env->startSection('content'); ?>
    <section class="main-container">
        <iframe class="chat-iframe" src="<?php echo e($chatUrl, false); ?>" allowfullscreen></iframe>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\dujiaoka\resources\views/unicorn/static_pages/chat.blade.php ENDPATH**/ ?>