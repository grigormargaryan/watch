<header class="header3">
    <!-- Header desktop -->
    <div class="container-menu-header-v3">
        <div class="wrap_header3 p-t-74">
            <!-- Logo -->
            <a href="/" class="logo3">
                <img src="{{ asset('images/logo.png') }}" alt="IMG-LOGO">
            </a>

            <!-- Header Icon -->
            <div class="header-icons3 p-t-38 p-b-60 p-l-8">
                <div class="header-wrapicon2">
                        <i class="icon-wishlist icon_heart heart-ajax dis-none-menu header-icon1 js-show-header-dropdown" aria-hidden="true"></i>
                        <span class="header-icons-noti-heart">0</span>
                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown" id="open-page">
                        <ul class="header-cart-wrapitem" id="heart-ul">

                        </ul>

                        <div class="header-cart-total">
                        </div>

                        <div class="header-cart-buttons">

                            <div class="header-cart-wrapbtn w-100">
                                <!-- Button -->
                                <button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 fs-12 heart-remove">
                                    Դատարկել
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="linediv"></span>

                <div class="header-wrapicon2">
                    <a href="/basket">
                        <img src="{{ asset('images/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown"
                             alt="ICON">
                        <span class="header-icons-noti">0</span>
                    </a>

                </div>
            </div>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/">ԳԼԽԱՎՈՐ</a>
                            {{--<ul class="sub_menu">--}}
                            {{--<li><a href="index.html">Homepage V1</a></li>--}}
                            {{--<li><a href="home-02.html">Homepage V2</a></li>--}}
                            {{--<li><a href="home-03.html">Homepage V3</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li>
                            <a href="/basket">ԶԱՄԲՅՈՒՂ</a>
                        </li>
                        <li>
                            <a href="/about">ՄԵՐ ՄԱՍԻՆ</a>
                        </li>

                        <li>
                            <a href="/contact">ԿԱՊ ՄԵԶ ՀԵՏ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="bottombar flex-col-c p-b-65">
            <div class="bottombar-social t-center p-b-8">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/" class="logo-mobile">
            <img src="{{ asset('images/logo.png')}}" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <i class="icon-wishlist icon_heart dis-none-menu" aria-hidden="true"></i>
                    <span class="header-icons-noti-heart">0</span>
                    {{--<img src="{{ asset('images/icon-header-01.png')}}" class="header-icon1" alt="ICON">--}}
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <a href="/basket">
                        <img src="{{ asset('images/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown"
                             alt="ICON">
                        <span class="header-icons-noti">0</span>
                    </a>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="{{ asset('images/item-cart-02.jpg')}}" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="{{ asset('images/item-cart-03.jpg')}}" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="/basket" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Դիտել զամբյուղը
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Դատարկել
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
        <nav class="side-menu">
            <ul class="main-menu">

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">ԳԼԽԱՎՈՐ</a>
                    {{--<ul class="sub-menu">--}}
                    {{--<li><a href="index.html">Homepage V1</a></li>--}}
                    {{--<li><a href="home-02.html">Homepage V2</a></li>--}}
                    {{--<li><a href="home-03.html">Homepage V3</a></li>--}}
                    {{--</ul>--}}
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="/basket">ԶԱՄԲՅՈՒՂ</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="/about">ՄԵՐ ՄԱՍԻՆ</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/contact">ԿԱՊ ՄԵԶ ՀԵՏ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>