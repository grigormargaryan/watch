<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80 container-product">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="slick3">
                    @foreach($products->projectsImg as $filename)
                        <div class="item-slick3" data-thumb="{{ asset('/storage/upload/'.$filename->filename)}}">
                            <div class="wrap-pic-w">
                                <img src="{{ '/storage/upload/'.$filename->filename}}" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                {{$products->name}}
            </h4>

            <span class="m-text17">
					{{$products->price}}<span> Դրամ</span>
            </span>

            <!--  -->
            <div class="p-t-33 p-b-60">
                <div class="flex-m flex-w p-b-10">
                    <div class="s-text15 w-size15 ">
                        Ժամացույց
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                            {{$products->category->name}}
                    </div>
                </div>

                <div class="flex-m flex-w p-t-13">
                    <div class="s-text15 w-size15">
                        Գույն
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        {{$products->color->name}}
                    </div>
                </div>

                <div class="flex-m flex-w p-t-13">
                    <div class="s-text15 w-size15">
                        Գոտի
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        {{$products->belt->name}}
                    </div>
                </div>
                <div class="flex-m flex-w p-t-13">
                    <div class="s-text15 w-size15">

                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        <div id="social-links">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http://2ntone.com/product/{{$products->id}}" title="Կիսվել Ֆեյսբուքում" target="_blank" class="btn btn-facebook"><i class="fa
                                           fa-facebook"></i>Share
                                </a>
                        </div>
                    </div>
                </div>

            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Նկարագրություն
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-8">
                    <p class="s-text8">
                        {{$products->description}}
                    </p>
                </div>
            </div>
            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 block2-btn-addcart ankap">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="{{$products->name}}" id="{{$products  ->id}}">
                    Գցել զամբյուղը
                </button>
            </div>

        </div>
    </div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container slick-container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Այլ ապրանքներ
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($allproducts as $allproduct)
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="{{ asset('/storage/upload/'. $allproduct->projectsImg[0]->filename)}}"
                                     alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" attr="{{$allproduct->id}}"
                                           aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
                                                id="{{$allproduct->id}}">
                                            Գցել զամբյուղը
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="{{'/product/'.$allproduct->id}}"
                                   class="block2-name dis-block s-text3 p-b-5 block2-name-{{$allproduct->id}}">
                                    {{$allproduct->name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                           {{$allproduct->price}} <span>Դրամ</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
