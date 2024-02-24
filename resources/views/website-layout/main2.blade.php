<!DOCTYPE html>
<html lang="en">

<!-- getting head data from head section -->
@include('website-layout.head')

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- getting loader code from load section -->
@include('website-layout.loader')

<!-- getting header code -->
@include('website-layout.header1')

<!-- yielding body content -->
@yield('content')



@include('website-layout.footer')

<!-- JavaScript -->

<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/vendor/js/bundle.min.js') }}"></script>
<!--to view items on reach-->
<script src="{{ asset('/vendor/js/jquery.appear.js') }}"></script>
<!--Owl Slider-->
<script src="/vendor/js/owl.carousel.min.js"></script>
<!--Parallax Background-->
<script src="{{ asset('/vendor/js/parallaxie.min.js') }}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!--Fancybox js-->
<script src="{{ asset('/vendor/js/jquery.fancybox.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('/vendor/js/wow.min.js') }}"></script>
<!--number counters-->
<script src="{{ asset('/vendor/js/jquery-countTo.js') }}"></script>
<!--tooltip js-->
<script src="{{ asset('/vendor/js/tooltipster.min.js') }}"></script>
<!--Revolution SLider-->
<script src="{{ asset('/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
<!--custom functions and script-->
<script src="js/functions.js"></script>
</body>
</html>
