<?php $__env->startSection('content'); ?>
<!-- main start -->
<section class="main-container">
    <div class="container bg-white">
        <form style="margin: 1px 0px 16px 0px;" class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(url('token-detail'), false); ?>" method="post" >
            <?php echo e(csrf_field(), false); ?>

            <div class="col-12">
                <input type="text" style="width: 500px;" class="form-control form-control-sm"
                        id="token"  name="token" required placeholder="请输入查询token">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-outline-primary btn-sm">
                    <i class="ali-icon">&#xe65c;</i> <?php echo e(__('dujiaoka.search_now'), false); ?></button>
            </div>
            <div class="col-12"><?php echo e($token, false); ?></div>
        </form>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>时间</th>
                    <th>模型</th>
                    <th>提示</th>
                    <th>补全</th>
                    <th>消耗额度</th>
                    <th>详情</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(date('Y-m-d',$group['created_at']/1000), false); ?></td>
                    <td><?php echo e($group['model_name'], false); ?></td>
                    <td><?php echo e($group['prompt_tokens'], false); ?></td>
                    <td><?php echo e($group['completion_tokens'], false); ?></td>
                    <td><?php echo e($group['quota'], false); ?></td>
                    <td><?php echo e($group['content'], false); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>
<!-- main end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\dujiaoka\resources\views/unicorn/static_pages/token_detail.blade.php ENDPATH**/ ?>