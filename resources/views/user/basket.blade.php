<!-- Title Page -->
<div class="modal1"> </div>
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
             style="background-image: url({{ asset('images/heading-pages-01.jpg')}})">
        <h2 class="l-text2 t-center">
            Cart
        </h2>
    </section>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart" id="myTable">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Ապրանք</th>
                            <th class="column-3">Գին</th>
                            <th class="column-4 p-l-70">Քանակ</th>
                            <th class="column-5">Ընդհանուր</th>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24 font-weight-bold">
                    Ձեր տվյալները
                </h5>

                <!--  -->
                <!--  -->
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Shipping:
                </span>

                    <div class="w-size20 w-full-sm">
                        <p class="s-text8 p-b-23">
                            There are no shipping methods available. Please double check your address, or contact us if
                            you
                            need any help.
                        </p>

                    </div>
                </div>
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm font-weight-bold">
                    Անուն:
                </span>

                    <div class="w-size20 w-full-sm">
                        <input class="sizefull s-text7 p-l-7 p-r-15 border" type="text" name="postcode"
                               placeholder="Անուն">

                    </div>
                </div>
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm font-weight-bold">
                    Հեռախոս:
                </span>

                    <div class="w-size20 w-full-sm">
                        <input class="sizefull s-text7 p-l-7 p-r-15 border" type="text" name="postcode"
                               placeholder="077-15-15-15">

                    </div>
                </div>
                <div class="flex-w flex-sb bo10 p-t-10 p-b-20">
                <span class="s-text18 w-size19 w-full-sm font-weight-bold">
                    Հասցե:
                </span>

                    <div class="w-size20 w-full-sm">
                        <input class="sizefull s-text7 p-l-7 p-r-15 border" type="text" name="postcode"
                               placeholder="Հասցե">

                    </div>
                </div>
                <div class="flex-w flex-sb bo10 p-t-10 p-b-20">
                <span class="s-text18 w-size19 w-full-sm font-weight-bold">
                    Այլ նշումներ:
                </span>

                    <div class="w-size20 w-full-sm">
                    <textarea class="sizefull s-text7 p-l-7 p-r-15 border min-h" type="text" name="postcode"
                              placeholder="Այլ նշումներ"> </textarea>

                    </div>
                </div>


                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Ընդհանուր:
					</span>

                    <span class="m-text21 w-size20 w-full-sm alltotal">
						0 <span>Դրամ</span>
					</span>
                </div>

                <div class="size15 trans-0-4 dis-flex">
                    <!-- Button -->
                    <button class="flex-c-m sizefull1 bg1 bo-rad-23 hov1 s-text1 trans-0-4 mr-1">
                        Պատվիրել
                    </button>
                    <button class="flex-c-m sizefull1 bg1 bo-rad-23 hov1 s-text1 trans-0-4 mr-1 remove-cook">
                        Դատարկել
                    </button>
                </div>
            </div>
        </div>
    </section>