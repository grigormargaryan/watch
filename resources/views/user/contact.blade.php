<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background: #e65440">
    <h2 class="l-text2 t-center">
        Կապ մեզ հետ
    </h2>
</section>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container wlecome-container float-lg-right">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <div style="width: 500px; height: 500px;">
                        {!! Mapper::render() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-b-30">

                <form action="/contact" method="post" class="leave-comment">
                    {{ csrf_field() }}
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Հետադարձ կապ
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" required name="your-name" placeholder="Անուն">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" required name="your-phone" placeholder="Հեռախոսահամար">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="email" required name="email" placeholder="Էլ. փոստ">
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" required name="your-message" placeholder="Հաղորդագրություն"></textarea>

                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            ՈՒղարկել
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>