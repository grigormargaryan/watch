jQuery(function($){
    $("#description_en3").summernote({
        placeholder: 'Description',
        minHeight: 100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript', 'fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph', 'style']],
            ['height', ['height']],
            ['misc',['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ['insert',['link', 'table', 'hr']]
        ]

    });
    $("#description_am1").summernote({
        placeholder: 'Info',
        minHeight: 100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript', 'fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph', 'style']],
            ['height', ['height']],
            ['misc',['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ['insert',['link', 'table', 'hr']]
        ]
    });
    $("#description_ru2").summernote({
        placeholder: 'Requirements',
        minHeight: 100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript', 'fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph', 'style']],
            ['height', ['height']],
            ['misc',['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ['insert',['link', 'table', 'hr']]
        ]
    });
$('#carousel-example-generic').carousel({wrap: true});
    $('#carusel3').carousel({wrap: true});
    $('#carusel2').carousel({wrap: true});
    $('#carusel1').carousel({wrap: true});
    $('#myCarousel').carousel({wrap: true});
    

    
});
$( document ).ready(function() {
$('.carousel').carousel({
  interval: 5000
});
$('.checked_input').click(function() {

if ($(this).is(':checked')) {
$(this).next().css( "background-color", "green" );
}else{
    $(this).next().css( "background-color", "#a90202" );
}
var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
});
if(val.length == 1){
    $("div.item").children().css('display','none');
    $("div.sub" + val[0]).css('display','block');
}
if(val.length == 0){
   $("div.item").children().css('display','block'); 
}
if(val.length>1){
    var i;
    $("div.item").children().css('display','none');
   for(i = 0;i<val.length;i++){
     $("div.sub" + val[i]).css('display','block');
   } 
}
});
$('.username').click(function() {
    $('.settings').css('display','block');
});
$('.account').click(function() {
    $(this).css('border-bottom','none');
    $('.account-setting').css('display','block');
});
$('.save-change').click(function () {
    $('.errors_pass').css('display','none'); 
    var oldpassword = $('#old-password').val();
    var password = $('#new-password').val();
    var password_confirmation = $('#conf-password').val();
    var token = $("input[name='_token']").val();
    if(password.length<6){
       $('.errors_pass').text('Min password length should be 6');
      $('.errors_pass').css('display','block'); 
       return false;  
    }
       if(password !== password_confirmation){
           $('.errors_pass').text('The password confirmation does not match');
          $('.errors_pass').css('display','block'); 
          return false;
       }
    var base_url = window.location.origin;
    var url = "/change-password";

    var url = "/filter-sub";

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: url,
        data: {
            'oldpassword': oldpassword,
            'password': password,
            'password_confirmation':password_confirmation,
            '_token':token
        },
        success: function (data) {
            if(data.success == true ){
                $('.dangpass').css('display','none')
               $('.seccpass').css('display','block')
            }if(data.success == false){
                $('.seccpass').css('display','none')
                $('.dangpass').css('display','block')
        }
        }
    });
});
$('.fast').click(function () {
var count=5;
var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
var clear = setInterval(clear,6000)
  
function timer()
{
  $('#timer').text(count); 
  $('.tim').css('display','block'); 
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     return;
  }
}
function clear(){
   $('.tim').css('display','none');  
   clearInterval(clear);
     return;
}

});
$('.dead-file').click(function () {
alert("Thanks for reporting the dead file, we'll upload a replacement right away!");
});
    $("#closes").click(function () {
        $("#imgInp").val('');
        $(this).hide();
        $("#blah").attr('src','#');

    })

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('blah').src =  e.target.result;
        }

        reader.readAsDataURL(input.files[0]);
    }

    document.getElementById("closes").style.display = 'block';
}
