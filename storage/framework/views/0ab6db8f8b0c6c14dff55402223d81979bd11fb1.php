<style>
    .number-group .input-group{flex-wrap: nowrap}
</style>

<div class="<?php echo e($viewClass['form-group'], false); ?>">

    <div  class="<?php echo e($viewClass['label'], false); ?> control-label">
        <span><?php echo $label; ?></span>
    </div>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group number-group">

            <?php if($prepend): ?>
                <span class="input-group-prepend"><span class="input-group-text bg-white"><?php echo $prepend; ?></span></span>
            <?php endif; ?>
            <input <?php echo $attributes; ?> />

            <?php if($append): ?>
                <span class="input-group-append"><?php echo $append; ?></span>
            <?php endif; ?>
        </div>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<script require="@number-input" init="<?php echo $selector; ?>">
    $this.bootstrapNumber(<?php echo admin_javascript_json($options); ?>);
</script>
<?php /**PATH F:\dujiaoka\vendor\dcat\laravel-admin\src/../resources/views/form/number.blade.php ENDPATH**/ ?>