<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{-- Admin Sidbar Css--}}
    <link rel="stylesheet" href="/css/cssSidebar.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/bootstrap-rtl.min.css">
    <link href="/css/persianFont.css" rel="stylesheet">
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>

</head>
<body>
@include('Template.admin.nav')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            @include('Template.admin.sidebar')
        </div>
        <div class="col-xs-12 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('panel_title')</h3>
                </div>
                <div class="panel-body">@yield('content')</div>
            </div>
        </div>

    </div>
</div>

{{--<div class="content-panel">--}}
    {{--<h3>@yield('panel_title')</h3>--}}
    {{--@yield('content')--}}
</div>
<script src="/js/jquery.min.js"></script>

<script src="/js/bootstrap.min.js"></script>
</body>
</html>