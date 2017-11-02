<!-- Javascript files -->
<!-- jQuery -->
<script src="{{ asset('theme_web/js/jquery.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('theme_web/js/bootstrap.min.js') }}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ asset('theme_web/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme_web/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- FLEX SLIDER SCRIPTS  -->
<script defer src="{{ asset('theme_web/js/jquery.flexslider-min.js') }}"></script>
<!-- Pretty Photo JS -->
<script src="{{ asset('theme_web/js/jquery.prettyPhoto.js') }}"></script>
<!-- Respond JS for IE8 -->
<script src="{{ asset('theme_web/js/respond.min.js') }}"></script>
<!-- HTML5 Support for IE -->
<script src="{{ asset('theme_web/js/html5shiv.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('theme_web/js/custom.js') }}"></script>
<!-- JS code for this page -->
<script>
    /* ******************************************** */
    /*  JS for SLIDER REVOLUTION  */
    /* ******************************************** */
    jQuery(document).ready(function() {
        jQuery('.tp-banner').revolution(
                {
                    stopLoop: 'on',
                    stopAfterLoops:0,
                    stopAtSlide:1,
                    delay:9000,
                    startheight:500,
                    hideThumbs:10,
                    navigationType:"bullet",
                    hideArrowsOnMobile:"on",
                    touchenabled:"on",
                    onHoverStop:"on",
                    navOffsetHorizontal:0,
                    navOffsetVertical:20,
                    shadow:0,
                    fullWidth:"off",
                    fullScreen:"off"
                });
    });
    /* ******************************************** */
    /*  JS for FlexSlider  */
    /* ******************************************** */

    $(window).load(function(){
        $('.flexslider-recent').flexslider({
            animation:		"fade",
            animationSpeed:	1000,
            controlNav:		true,
            directionNav:	false
        });
        $('.flexslider-testimonial').flexslider({
            animation: 		"fade",
            slideshowSpeed:	5000,
            animationSpeed:	1000,
            controlNav:		true,
            directionNav:	false
        });
    });

    /* Gallery */

    jQuery(".gallery-img-link").prettyPhoto({
        overlay_gallery: false, social_tools: false
    });

</script>