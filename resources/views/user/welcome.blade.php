<?php // dd(\Session::get('name')); ?>
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background: #e65440">
    <h2 class="l-text2 t-center section-text">
        2ntOne
    </h2>
    <p class="m-text13 t-center">
        {{--New Arrivals Women Collection 2018--}}
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container wlecome-container float-lg-right">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        ԺԱՄԱՑՈՒՅՑՆԵՐ
                    </h4>

                    <ul class="p-b-54 radio-toolbar">
                        <li class="p-t-4">
                            <input class="category-radio" id="all" val="all" type="radio" value="all" name="color-filter1" checked>
                            <label class="category-label" for="all">Բոլորը</label>
                        </li>
                        @foreach($categorys as $category)
                            <li class="p-t-4">
                                <input class="category-radio" id="{{$category->id}}" val="{{$category->name}}" type="radio" value="{{$category->id}}" name="color-filter1">
                                <label class="category-label" for="{{$category->id}}">{{$category->name}}</label>
                            </li>
                        @endforeach
                    </ul>

                    <!--  -->
                    <h4 class="m-text14 p-b-32">
                        ՖԻԼՏՐ
                    </h4>

                    <div class="filter-price p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-17">
                            ԳԻՆԸ
                        </div>

                        <div class="">
                            <input class="price-inp lower-price"  type="string" name="lowerPrice" maxlength="5"  min="0" /> -
                            <input class="price-inp higher-price" name="higherPrice" type="string" maxlength="5" min="0"/>
                            <span class="danger err"></span>
                        </div>
                    </div>

                    <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-12">
                            ԳՈՒՅՆԸ
                        </div>

                        <ul class="flex-w">
                            @foreach($colors as $color)
                                <li class="m-r-10">
                                    <input class="checkbox-color-filter" id="{{$color->title}}" type="checkbox" value="{{$color->id}}" name="">
                                    <label title="{{$color->name}}" class="{{'b-shadow color-filter color-filter-'.$color->title}}" for="{{$color->title}}"></label>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50 search-product" type="text" name="search-product" placeholder="Փնտրել ըստ անվան...">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!--  -->
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2 sort-select" name="sorting">
                                <option value="">Տեսակավորում</option>
                                <option value="ASC">Գինը: Աճման կարգով</option>
                                <option value="DESC">Գինը: Նվազման կարգով</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div id ='new_data'>
                    @include('user.welcomepagination')
                </div>
            </div>
        </div>
    </div>
</section>

