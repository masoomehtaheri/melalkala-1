<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')
    <link href="/css/Products.css" rel='stylesheet' type='text/css'/>
    <link href="/css/zarincss.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/css/checkOut/css/tooltipster.css">
    <link rel="stylesheet" href="/css/checkOut/css/prettyPhoto.css">
    <link rel="stylesheet" href="/css/checkOut/css/responsive.css">
    <link href="/css/checkOut/css/ie.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/css/checkOut/css/bootstrap.css">
    <title>محصولات</title>
</head>
<body>

@include('Template.header')
@include('Template.contentProducts',$products)
<script src="/js/js/jquery-ui.js"></script>
<script src="/js/js/jquery.cycle.all.js"></script>
<script src="/js/js/jquery.elastislide.js"></script>
<script src="/js/js/jquery.carouFredSel-6.0.4-packed.js"></script>
<script src="/js/js/jquery.selectBox.js"></script>
<script src="/js/js/jquery.tooltipster.min.js"></script>
<script src="/js/js/jquery.prettyPhoto.js"></script>
<script src="/js/js/custom.js"></script>
@include('Template.footer')


</body>
</html>