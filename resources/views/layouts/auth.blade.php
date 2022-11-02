<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('app.APP_NAME') }}">
    <link rel="alternate" hreflang="en-us" href="{{ url()->current() }}">
    <title>{!! !empty($title) ? $title : (!empty($seo['title']) ? $seo['title'] : '') !!}</title>
    @if (!empty($seo))
        <meta name="description" content="{!! !empty($description) ? $description : $seo['description'] !!}">
        <meta property="og:title" content="{!! !empty($title) ? $title : $seo['title'] !!}">
        <meta property="og:description" content="{!! $seo['description'] !!}">
        <meta property="og:image" content="{!! $seo['image'] !!}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="{{ $seo['image_width'] }}">
        <meta property="og:image:height" content="{{ $seo['image_height'] }}">
        <meta name="robots" content="{!! checkIs($seo, ['robots'], 'NOINDEX,NOFOLLOW') !!}">
        @if (!empty($seo['canonical']))
            <link rel="canonical" href="{!! $seo['canonical'] !!}"/>
        @endif
        @if (!empty($seo['schema']))
            {!! $seo['schema'] !!}
        @endif
    @endif

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;family=Poppins:wght@600&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/typo.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/nice-select.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="css/main.css">
    @yield('styles')
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="site-wrapper overflow-hidden">
        @yield('main')
    </div>
    <!-- scripts-->
    <script src="js/lib/jquery.min.js"></script>

    <script src="js/lib/vendor.min.js"></script>
    <script>
        /**
         * Replace all SVG images with inline SVG
         */
        $(document).ready(function() {
            $('img[class*="make-it-inline"]').each(function() {
                var $img = jQuery(this);
                var imgURL = $img.attr('src');
                var attributes = $img.prop("attributes");

                $.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');

                    // Remove any invalid XML tags
                    $svg = $svg.removeAttr('xmlns:a');

                    // Loop through IMG attributes and apply on SVG
                    $.each(attributes, function() {
                        $svg.attr(this.name, this.value);
                    });

                    // Replace IMG with SVG
                    $img.replaceWith($svg);
                }, 'xml');
            });
        });
    </script>
    <script src="js/lib/jquery.fancybox.min.js"></script>
    <script src="js/lib/jquery.nice-select.min.js"></script>
    <script src="js/lib/aos.min.js"></script>
    <script src="js/lib/jquery.counterup.min.js"></script>
    <script src="js/lib/waypoints.min.js"></script>
    <script src="js/lib/slick.min.js"></script>
    <script src="js/lib/skill.bars.jquery.js"></script>
    <script src="js/lib/isotope.pkgd.min.js"></script>
    <!-- Activation Script -->
    <script src="js/lib/custom.js"></script>
    <script src="js/lib/slider-activations.js"></script>
    <script src="js/lib/menu.js"></script>

    @yield('scripts')
</body>

</html>
