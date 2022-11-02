<html style="overflow: hidden" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pricing - Bingsport</title>
    @yield('metas')
    <link rel="shortcut icon" href="/images/favicon.ico?2">
    <link href="{{ mix('/css/bingsport_v2/common.min.css') }}1" rel="stylesheet" media="all">
    @yield('styles')

</head>
<body>
<main class="bingsport">
    @yield('main')
</main>

<script src="/plugins/jQuery/jquery-3.2.1.min.js?v1.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
<script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
{{--<script src="{{ mix('/js/common.min.js') }}"></script>--}}
@yield('scripts')
<script>

</script>
</body>
</html>
