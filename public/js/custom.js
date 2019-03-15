jQuery( document ).ready(function() {
    jQuery("#languageSwitcher").change(function () {
        var locale  = jQuery(this).val();
        var _token  = jQuery("#input_token").val();
        jQuery.ajax({
            url:"/language",
            type:"POST",
            data:{locale:locale,_token: _token},
            datatype:'json',
            success:function (data) {

            },
            error:function (data) {

            },
            beforeSend:function () {

            },
            complete:function (data) {
                window.location.reload(true);
            }
        });
    });

    var explode = function(){
        jQuery('#lin').css('color', '#fdc716');
    };
    var inplode = function(){
        jQuery('#lin').css('color', '#ffff');
    };
    setInterval(explode, 500);
    setInterval(inplode, 1000);
});