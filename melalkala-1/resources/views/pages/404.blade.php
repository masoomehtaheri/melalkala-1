<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')

    <title>صفحه اصلی</title>
</head>
<body>

@include('Template.header')
<!-- Start page content -->
<div class="page-content">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="#">صفحه اصلی</a>
            </li>
            <li></li>
        </ul>
    </div>
    <br><br><br>
    <div class="erroe-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="error" class="wow fadeInRight" data-wow-duration="0.7s">0</h1>
                    <p class="wow bounceIn" data-wow-delay="0.6s">صفحه مورد نظر یافت نشد</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cflask-holder" class="wow fadeIn" data-wow-delay="0.5s">
                                    <span class="wow tada " data-wow-delay="300ms"><i class="fa fa-flask fa-5x flask wow flip" data-wow-delay="3300ms"></i>
                                        <i id="b1" class="bubble"><span class="err-text">4</span></i>
                                        <i id="b2" class="bubble"><span class="err-text">0</span></i>
                                        <i id="b3" class="bubble"><span class="err-text">4</span></i>
                                    </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="links-wrapper col-md-6 col-md-offset-3">
                        <ul class="links col-md-9">
                            <li><a href="index.html"><i class="fa fa-home fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End page content -->
@include('Template.footer')

</body>
</html>