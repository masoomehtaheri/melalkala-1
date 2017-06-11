<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')
    <link href="/css/filmcss.css" rel='stylesheet' type='text/css'/>


    <title>نمایش خرید</title>
</head>
<body>
@include('Template.header')
<div class="contact">
    <div class="row">
        <video class="film" width="600" height="400" controls="controls" poster="/images/film/7440.jpg">
            <source src="/images/film/gcc.mp4" type="video/mp4">
            <source src="/images/film/gcc.ogg" type="video/ogg">
            لطفا مرور گر خود را ارتقاء دهید.
        </video>
    </div>
</div>


@include('Template.footer')

</body>
</html>