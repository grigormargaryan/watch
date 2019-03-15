<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('user.include.head')
</head>
<body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-10 kingcomposer kc-css-system">


<div class="boxed_wrapper">

    @include('user.include.header')


    @yield('content')


    @include('user.include.footer')

</div>


<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


@include('user.include.javascripts')

</body>
</html>



