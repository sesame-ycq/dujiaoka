<!-- header start -->
<header class="header sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="header-left clearfix">
                    <div class="logo text-center  d-none d-md-block">
                        <a href="/">
                            <img src="{{ dujiaoka_config_get('img_logo') }}" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="header-right clearfix">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid p-md-0">
                            <!-- <a class="navbar-brand" href="/">{{ dujiaoka_config_get('text_logo') }}</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> -->

                            <div class="collapse navbar-collapse" id="navbarColor">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item nav-icon-container">
                                        <i ><?=assets_svg_get('house-door-fill')?></i>
                                        <a class="nav-link fs-6 @if(\Illuminate\Support\Facades\Request::path() == '/') fw-bolder active @endif " href="/">{{__('dujiaoka.home_page')}}
                                        </a>
                                    </li>
                                    <li class="nav-item nav-icon-container">
                                        <i style="color:#f0ad4e;"><?=assets_svg_get('credit-card')?></i>
                                        <a class="nav-link fs-6 @if(\Illuminate\Support\Facades\Request::url() == url('order-search')) fw-bolder active @endif" href="{{ url('order-search') }}">{{ __('dujiaoka.order_search') }}</a>
                                    </li>
                                    <li class="nav-item nav-icon-container">
                                        <i style="color:blueviolet;"><?=assets_svg_get('list')?></i>
                                        <a class="nav-link fs-6 @if(\Illuminate\Support\Facades\Request::url() == url('token-detail')) fw-bolder active @endif" href="{{ url('token-detail') }}">{{ __('dujiaoka.token_detail') }}</a>
                                    </li>
                                    <li class="nav-item nav-icon-container">
                                        <i style="color:green;"><?=assets_svg_get('chat-dots')?></i>
                                        <a class="nav-link fs-6 @if(\Illuminate\Support\Facades\Request::url() == url('chat')) fw-bolder active @endif" href="{{ url('chat') }}">{{ __('dujiaoka.chat') }}</a>
                                    </li>
                                    <li class="nav-item nav-icon-container">
                                        <i style="color:#d9534f;"><?=assets_svg_get('question-circle')?></i>
                                        <a class="nav-link fs-6 @if(\Illuminate\Support\Facades\Request::url() == url('doc')) fw-bolder active @endif" href="{{ url('doc') }}">{{ __('dujiaoka.doc') }}</a>
                                    </li>
                                </ul>
                                @if(\Illuminate\Support\Facades\Request::path() == '/')
                                    <form class="d-flex">
                                        <input class="form-control form-control-sm me-sm-2" id="searchText" type="text" placeholder="{{ __('dujiaoka.search_goods_name') }}">
                                        <button class="btn btn-primary my-2 my-sm-0" type="button" id="searchBtn">
                                            <i class="ali-icon">&#xe65c;</i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
