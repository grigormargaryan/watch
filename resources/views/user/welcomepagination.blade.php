<div class="row">
    @foreach($products as $product)
        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                    <img src="{{ asset('/storage/upload/'. $product->projectsImg[0]->filename)}}" alt="IMG-PRODUCT">

                    <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none heart-add-cook" attr="{{$product->id}}" aria-hidden="true"></i>
                        </a>

                        <div class="block2-btn-addcart w-size1 trans-0-4">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" id="{{$product->id}}">
                                Գցել զամբյուղը
                            </button>
                        </div>
                    </div>
                </div>

                <div class="block2-txt p-t-20">
                    <a href="{{'/product/'.$product->id}}" class="block2-name dis-block s-text3 p-b-5 block2-name-{{$product->id}}">
                        {{$product->name}}
                    </a>

                    <span class="block2-price m-text6 p-r-5">
                                           {{$product->price}} <span>Դրամ</span>
                                    </span>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="pagination flex-m flex-w p-t-26">
    {{$products->links("pagination::bootstrap-4")}}
    {{--http://localhost:8000/ es hatvacum piti drvi mer apranqi link!--}}
</div>