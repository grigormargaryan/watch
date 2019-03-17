<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<script type="text/javascript" src="{{ asset('userjs/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/animsition.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/slick-custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/countdowntime.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userjs/sweetalert.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('userjs/main.js') }}"></script>
<script src="{{ asset('js/share.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function () {

        $body = $("body");
        $body.addClass("loading")
        setTimeout(function(){
            $body.removeClass("loading") }, 500);

        var d = new Date();
        var n = d.getFullYear();
        document.getElementById("demo").innerHTML = '2ntOne ' + n

        var v = document.cookie.match('(^|;)?shop=([^;]*)(;|$)');
        var heart = document.cookie.match('(^|;)?heart=([^;]*)(;|$)');

//        product add to basket with cookie

        $(".flex-c-m").click(function (e) {
            var d = new Date;
            d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * 2);
            var v = document.cookie.match('(^|;)?shop=([^;]*)(;|$)');
            if (v) {
                if (v[2].search(e.target.id) !== -1) {
                    $('.block2-btn-addcart').each(function () {
//                        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                        $(this).on('click', function () {
                            if(e.target.name){
                                swal(e.target.name, "Ապրանքը զամբյուղում առկա է !", "info");
                            }else{
                                swal($(this).parent().parent().parent().find('.block2-name').html(), "Ապրանքը զամբյուղում առկա է !", "info");
                            }

                        });
                    });
                    return
                }
                var product = [];
                product.push(v[2]);
                product.push(e.target.id);
                document.cookie = "shop" + "=" + product + ";expires=" + d +"; path=/";
            } else {
                var product = [];
                product.push(e.target.id);
                document.cookie = "shop" + "=" + product + ";expires=" + d +"; path=/";
            }
            $('.block2-btn-addcart').each(function () {
//                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function () {
                    if(e.target.name){
                        swal(e.target.name, "Ապրանքը ավելացվեց զամբյուղում !", "success");
                    }else{
                        swal($(this).parent().parent().parent().find('.block2-name').html(), "Ապրանքը ավելացվեց զամբյուղում !", "success");
                    }
                });
            });
            var menu_span = parseInt($('.header-icons-noti').html()) + 1;
            $('.header-icons-noti').html(menu_span)
        });

//        product add to basket with cookie end


//        product add to heart with cookie

        $(".dis-none").click(function (e) {
            var d = new Date;
            d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * 2);
            var heart = document.cookie.match('(^|;)?heart=([^;]*)(;|$)');
            if (heart) {
                if (heart[2].search($(this).attr('attr')) !== -1) {
                    var nameProduct = $('.block2-name-' + $(this).attr('attr')).html();
                    swal(nameProduct, "Ապրանքը կա ընտրյալների ցանկում !", "info");
                    return
                }
                var product = []
                product.push(heart[2])
                product.push($(this).attr('attr'));
                document.cookie = "heart" + "=" + product + ";expires=" + d +"; path=/";
            } else {
                var product = []
                product.push($(this).attr('attr'));
                document.cookie = "heart" + "=" + product + ";expires=" + d +"; path=/";
            }
            $('.block2-btn-addwishlist').each(function () {
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function () {
                    swal(nameProduct, "Ապրանքը ավելացվել է ընտրյալների ցանկում !", "success");
                });
            });
            var menu_span = parseInt($('.header-icons-noti-heart').html()) + 1
            $('.header-icons-noti-heart').html(menu_span)
        });

//        product add to heart with cookie end

        if (window.location.pathname === '/basket') {

            var productName = '';

            //		order

			var orderData = {
			    product: [],
				info: []
			};

            $('#order').click( function () {
                if (v) {
                    if (v[2]) {
//                        console.log(v[2].split(','))
                    }
                }else{
                    $('#myTable').hide();
                    $('.danger-msg').show();
                    $('.danger-msg').html('Ձեր զամբյուղը դատարկ է խնդրում եմ ընտրեք ապրանքեր');
                    return false;
				}
				var reqErr = 'Պարտադիր լրացման դաշտ';
                var globalErr = false;
				$('.req').each(function () {
				    if(!$(this).val()){
                        $('.'+$(this).attr('name')+'-err').show();
                        $('.'+$(this).attr('name')+'-err').html(reqErr);
                        globalErr = true;
					}else{
                        $('.'+$(this).attr('name')+'-err').hide();
                        orderData.info.push($(this).val());
					}
                });
				if(globalErr) {
				    return false;
				}

                if(phone_validate($('.phone').val()) && $('.phone').val().length >=9)
                {
                    $('.phone-err').hide();
                }
                else
                {
                    globalErr = true
                    $('.phone-err').show();
                    $('.phone-err').html('Սխալ հեռախոսահամար');
                    event.preventDefault();
                }

                function phone_validate(phno)
                {
                    var regexPattern=new RegExp(/^[0-9-+]+$/);
                    return regexPattern.test(phno);
                }

                if(!globalErr) {
                    orderData.info.push(productName);
                    if($('.description').val()){
                        orderData.info.push($('.description').val());
					}
                    orderData.product = v[2].split(',')

                    $body.addClass("loading")
                    $.ajax({
                        url: '/add-order',
                        type: 'POST',
                        data: {_token: CSRF_TOKEN, data: orderData},
                        dataType: 'JSON',
                        success: function (data) {
                            if(data === true){
                                $('.req').each(function () {
                                    $(this).val('')
                                });
                                $('.description').val('')
                                removeCookie()
                                $body.removeClass("loading")

							}else{
                                $('.req').each(function () {
                                    $(this).val('')
                                });
                                $('#myTable').hide();
                                $('.danger-msg').show();
                                $('.danger-msg').html(data);
                                $('.description').val('')
                                removeCookie()
                                $body.removeClass("loading")
							}
                        }
                    });

                }



            });

            var v = document.cookie.match('(^|;)?shop=([^;]*)(;|$)');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            if (v) {
                var data = []
                if (v[2].length > 0) {
                    data = v[2].split(',')
                } else {
                    data.push(v[2])
                }
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/add-basket',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, id: data},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        $.each(data, function (index, value) {
                            productName +=  value.name + ',';
                            var markup = "<tr class='table-row'>"
                                + "<td class='column-1'>"
                                + "<div class='cart-img-product b-rad-4 o-f-hidden basket-img' title='Ջնջել' attr='" + value.id + "'>"
                                + "<img src='/storage/upload/" + value.projects_img[0].filename + "' alt='IMG-PRODUCT'>"
                                + "</div> "
                                + "</td> "
                                + "<td class='column-2'> <a title='Դիտել ապրանքը' href='/product/"+value.id + "'>" + value.name + " </a> </td>"
                                + "<td class='column-3 old-value-" + value.id + "' >" + value.price + ""
                                + "<snap> Դրամ</snap>"
                                + "</td>"
                                + "<td class='column-4'>"
                                + "<div class='flex-w bo5 of-hidden styl-input'>"
//                                + "<button class='btn-num-product-down color1 flex-c-m size7 bg8 eff2 plus-minus' add='minus' attr='" + value.id + "'>"
//                                + "<i class='fs-12 fa fa-minus' aria-hidden='true'></i>"
//                                + "</button>"

                                + "<input readonly class='size8 m-text18 t-center num-product' id='" + value.id + "' type='number' name='num-product1' value='1'>"

//                                + "<button class='btn-num-product-up color1 flex-c-m size7 bg8 eff2 plus-minus' add='plus' attr='" + value.id + "'>"
//                                + "<i class='fs-12 fa fa-plus' aria-hidden='true'></i>"
//                                + "</button>"
                                + "</div>"
                                + "</td>"
                                + "<td class='column-5 total " + value.id + "'>" + value.price + ""
                                + "<snap> Դրամ</snap>"
                                + "</td>"
                                + "</tr>";
                            $('#myTable tbody').append(markup);
                        });
                        var total = 0
                        $('.total').each(function () {
                            total = total + parseInt($(this).html())
                        });
                        $('.alltotal').html(total + ' Դրամ')
                    }
                });
            }

            setTimeout(function () {

                $('.plus-minus').click(function () {
                    var total = 0
                    var at = $(this).attr('attr')
                    var old_value = parseInt($('.old-value-' + at).html());
                    if ($(this).attr('add') === 'plus') {
                        var count = parseInt($('#' + at).val()) + 1;
                    } else {
                        var fl = parseInt($('#' + at).val()) - 1
                        if (fl > 1) {
                            var count = parseInt($('#' + at).val()) - 1;
                        } else {
                            var count = 1
                        }
                    }
                    $('#' + at).val(count);
                    $('.' + at).html(count * old_value + ' Դրամ');
                    $('.total').each(function () {
                        total = total + parseInt($(this).html())
                    });
                    $('.alltotal').html(total + ' Դրամ')
                });
//                cookiic jnjel hat hat
                $('.basket-img').click(function () {
                    var array = v[2].split(',');
                    if (array.length <= 1) {
                        var res = document.cookie;
                        var multiple = res.split(";");
                        for (var i = 0; i < multiple.length; i++) {
                            var key = multiple[i].split("=");
                            if (key[0] === 'shop') {
                                document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                            }
                            if (key[0] === ' shop') {
                                document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                            }
                        }
                        $("#myTable").remove();
                        $(".header-icons-noti").html(0)
                    } else {
                        var index = array.indexOf($(this).attr('attr'));
                        if (index > -1) {
                            array.splice(index, 1);
                        }
                        document.cookie = 'shop' + "=" + array;
                        window.location.reload()
                    }
                });
//                cookiic jnjel hat hat verj
            }, 500);

        }
        if (v) {
            if (v[2]) {
                $('.header-icons-noti').html(v[2].split(',').length)
            }
        }

        if (heart) {
            if(heart[2]){
                $('.header-icons-noti-heart').html(heart[2].split(',').length)
            }
        }

        $('.remove-cook').click(function () {
            removeCookie()
        });

        function removeCookie() {
            var res = document.cookie;
            var multiple = res.split(";");
            var flag = false;
            for (var i = 0; i < multiple.length; i++) {
                var key = multiple[i].split("=");
                if (key[0] === 'shop') {
                    document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                    flag = true;
                }
                if (key[0] === ' shop') {
                    document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                    flag = true;
                }
            }
            if(flag) {
                $("#myTable").remove();
            }
            $(".header-icons-noti").html(0)
        }

        //filter start

        var data = {
            'sort': '',
            'name': '',
            'color': '',
            'category': '',
            'lowerPrice': '',
            'higherPrice': '',

        };
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page, data);
        });

        $('.sort-select').change(function (e) {
            data.sort = e.target.value;
            fetch_data(1, data)
        });

        $('.category-radio').change(function (e) {
            if(e.target.id !== 'all') {
                $('.section-text').text($('#'+e.target.id).attr('val'))
            }else{
                $('.section-text').text('2ntone')
            }
            data.category = e.target.value;
            fetch_data(1, data)
        });

        $('.checkbox-color-filter').change(function (e) {
            if (!data.color) {
                data.color = [];
                data.color.push(e.target.value);
                fetch_data(1, data)
            } else {
                for (var i = 0; i < data.color.length; i++) {
                    if (data.color[i] === e.target.value) {
                        data.color.splice(i, 1);
                        if (data.color.length === 0) {
                            data.color = '';
                        }
                        fetch_data(1, data)
                        return
                    }
                }
                data.color.push(e.target.value);
                fetch_data(1, data)
            }
        });

        $('.search-product').keyup(function (e) {
            data.name = e.target.value;
            fetch_data(1, data)
        });
//    price mijakayq start
        var val;
        var val1;
        $('.price-inp').keyup(function (e) {
            this.value = this.value.replace(/[^0-9\.]/g, '');
                if (e.target.name === 'lowerPrice') {
                    val = e.target.value;
                    if (!$('.higher-price').val()) {
                        val1 = '';
                    }
                    if (val.length > 0) {
                        if (val.length > 0 && val.replace(/[^0-9]/g, '')) {
                            val = parseInt(val.replace(/[^0-9]/g, ''))
                        } else {
                            $('.err').html('Սխալ մուտքագրում');
                            return
                        }
                    }
                }
                if (e.target.name === 'higherPrice') {
                    val1 = e.target.value;
                    if (!$('.lower-price').val()) {
                        val = '';
                    }
                    if (val1.length > 0) {
                        if (val1.length > 0 && val1.replace(/[^0-9]/g, '')) {
                            val1 = parseInt(val1.replace(/[^0-9]/g, ''))
                        } else {
                            $('.err').html('Սխալ մուտքագրում');
                            return
                        }
                    }

                }
                if (val && val1) {
                    if (val > val1) {
                        $('.err').html('Սխալ մուտքագրում');
                        return
                    } else {
                        $('.err').html('');
                    }
                }

                if (val && !val1) {
                    $('.err').html('');
                }

                data.lowerPrice = val;
                data.higherPrice = val1;
                console.log(val);
                fetch_data(1, data)
        });
        //    price mijakayq end

        function fetch_data(page, data) {
            $.ajax({
                url: '/pagination/fetch_data?page=' + page,
                data: {data: data},
                success: function (data) {
                    $('#new_data').html(data);
                }
            })
        }

//    filter end
    });


//    srtiki het kapvac start

    $('.heart-ajax').click(function () {

        var heart = document.cookie.match('(^|;)?heart=([^;]*)(;|$)');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        if (heart) {
            $('#open-page').show();
            var data = []
            if (heart[2].length > 0) {
                data = heart[2].split(',')
            } else {
                data.push(heart[2])
            }
            $.ajax({
                /* the route pointing to the post function */
                url: '/add-heart',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: CSRF_TOKEN, id: data},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    $('.header-cart-item').remove()
                    $.each(data, function (index, value) {
                        var markup = '<li class="header-cart-item">'
                            +'<div class="header-cart-item-img heart-one" attr="' + value.id + '">'
                            +'<img src="/storage/upload/'+value.projects_img[0].filename +'" alt="IMG">'
                            +'</div>'

                            +'<div class="header-cart-item-txt">'
                            +'<a href="#" class="header-cart-item-name">'
                            +'White Shirt With Pleat Detail Back'
                            +'</a>'

                            +'<span class="header-cart-item-info">1 x $19.00 </span>'
                            +'</div>'
                            +'</li>'
                        $('#heart-ul').append(markup);
                    });
                }
            });
        }else{
            $('#open-page').hide();
        }

        //    cookiic jnjel srtik hat hat

        setTimeout(function () {
            $('.heart-one').click(function () {
                var array = heart[2].split(',');
                if (array.length <= 1) {
                    var res = document.cookie;
                    var multiple = res.split(";");
                    for (var i = 0; i < multiple.length; i++) {
                        var key = multiple[i].split("=");
                        if (key[0] === 'heart') {
                            document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                        }
                        if (key[0] === ' heart') {
                            document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC";
                        }
                    }
                    $('#open-page').hide();
                    $(".header-icons-noti-heart").html(0)
                } else {
                    var index = array.indexOf($(this).attr('attr'));
                    if (index > -1) {
                        array.splice(index, 1);
                    }
                    document.cookie = 'heart' + "=" + array;
                    window.location.reload()

                }
            });
        },500);


//    cookiic jnjel srtik hat hat end
    })

//    end

//    cookiic jnjel srtik
    $('.heart-remove').click(function () {
        var res = document.cookie;
        var multiple = res.split(";");
        for (var i = 0; i < multiple.length; i++) {
            var key = multiple[i].split("=");
            if (key[0] === 'heart') {
                document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/";
            }
            if (key[0] === ' heart') {
                document.cookie = key[0] + "=; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/";
            }
        }
        $('#open-page').hide();
        $(".header-icons-noti-heart").html(0)
        window.location.reload()
    });

//    cookiic jnjel srtik end


</script>


