<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')
    <script src="/js/logoslider.js" type="text/javascript"></script>
    <script src="/js/logoslider.js" type="application/x-javascript"></script>
    <link rel="stylesheet" href="/css/search_table.css" type="text/css">
    <title>صفحه اصلی</title>
</head>
<body>
@include('Template.header')
@include('Template.notification')

<div class="clearfix"></div>
@include('Template.searchContent',$SearchProducts)
<div class="clearfix"></div>
@include('Template.footer')

</body>
</html>