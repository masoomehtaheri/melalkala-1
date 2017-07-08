<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')
    <link href="/css/single_product.css" rel="stylesheet">
    <link href="/css/css_single_product/owl.carousel.css" rel="stylesheet">
    <link href="/css/css_single_product/owl.theme.css" rel="stylesheet">
    <link href="/css/css_single_product/owl.transitions.css" rel="stylesheet">
    <script type="text/javascript" src="/js/js_single_product/owl.carousel.min.js"></script>
    <title>محصولات</title>
</head>
<body>

@include('Template.header')
@include('Template.contente_single_product',$products)
<script src="/js/js_single_product/quantty.js"></script>
<script src="/js/js_single_product/plugins.js"></script>
<script src="/js/js_single_product/main.js"></script>
<script src="/js/bootstrap.min.js"></script>
@include('Template.footer')


</body>
</html>