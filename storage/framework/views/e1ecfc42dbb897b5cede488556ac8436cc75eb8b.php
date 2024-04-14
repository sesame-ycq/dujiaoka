<!-- header start -->
<header class="header sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="header-left clearfix">
                    <div class="logo text-center  d-none d-md-block">
                        <a href="/">
                            <img src="<?php echo e(picture_ulr(dujiaoka_config_get('img_logo')), false); ?>" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="header-right clearfix">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/"><?php echo e(dujiaoka_config_get('text_logo'), false); ?></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarColor">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link fs-6 <?php if(\Illuminate\Support\Facades\Request::path() == '/'): ?> fw-bolder active <?php endif; ?> " href="/"><?php echo e(__('dujiaoka.home_page'), false); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-6 <?php if(\Illuminate\Support\Facades\Request::url() == url('order-search')): ?> fw-bolder active <?php endif; ?>" href="<?php echo e(url('order-search'), false); ?>"><?php echo e(__('dujiaoka.order_search'), false); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-6 <?php if(\Illuminate\Support\Facades\Request::url() == url('token-detail')): ?> fw-bolder active <?php endif; ?>" href="<?php echo e(url('token-detail'), false); ?>"><?php echo e(__('dujiaoka.token_detail'), false); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-6 <?php if(\Illuminate\Support\Facades\Request::url() == url('chat')): ?> fw-bolder active <?php endif; ?>" href="<?php echo e(url('chat'), false); ?>"><?php echo e(__('dujiaoka.chat'), false); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-6 <?php if(\Illuminate\Support\Facades\Request::url() == url('doc')): ?> fw-bolder active <?php endif; ?>" href="<?php echo e(url('doc'), false); ?>"><?php echo e(__('dujiaoka.doc'), false); ?></a>
                                    </li>
                                </ul>
                                <?php if(\Illuminate\Support\Facades\Request::path() == '/'): ?>
                                    <form class="d-flex">
                                        <input class="form-control form-control-sm me-sm-2" id="searchText" type="text" placeholder="<?php echo e(__('dujiaoka.search_goods_name'), false); ?>">
                                        <button class="btn btn-secondary my-2 my-sm-0" type="button" id="searchBtn">
                                            <i class="ali-icon">&#xe65c;</i>
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
<?php /**PATH F:\dujiaoka\resources\views/unicorn/layouts/_nav.blade.php ENDPATH**/ ?>