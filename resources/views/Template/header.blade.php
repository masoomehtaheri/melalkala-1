<!-- header -->


<header>
{{--top_nav--}}
    <div class="top_bg">
        <div class="container">
            <div class="header_top-sec">
                <div class="user-info">
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
<p>
    <a href="{{route('login')}}"><i class="fa fa-user"></i>حساب من</a>
    <a href="{{route('contact_us')}}"><i class="fa fa-phone"></i>تماس با ما</a>
    <a href="{{route('about_us')}}"><i class="fa fa-info"></i>درباره ما</a>
    <a href="{{route('wishlist')}}"><i class="fa fa-heart-o"></i>علاقه مندی</a>
@if(Auth::guest() <> true)
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> خروج</a>

@endif

                        @include('Template.notification')

                    </p>

                </div>

                <div class="top-call-to-acction">
                    <p>
                        <a href="#"> <i class="fa fa-phone"></i> پشتیبانی: 88437435</a>
                        <a href="#"> <i class="fa fa-envelope-o"></i> ایمیل: Melalkala@gmail.com </a>
                    </p>
                </div>

            </div>
{{-- end top_nav--}}
            <div class="clearfix"></div>
        </div>
    </div>

<!-- start logo,search and basket -->
    <div class="header_top">
        <div class="container">
            <div class="logo">
                <a href="{{route('index')}}"><img src="/images/logo-m.png" alt=""/></a>
            </div>
            <div class="header_right">
                <div class="search-and-cart">
                    <div class="search-categori">
                        <div class="search-box">
                            <form action="{{route('search')}}" method="get">
                                <button type="submit" >جستجو</button>
                                <input type="text" name="name" class="form-control input-sm"  placeholder="نام کالا را وارد کنید" />

                            </form>
                        </div>
                    </div>
                    <div class="shoping-cart">
                        <a href="#"><span>سبد خرید</span></a>
                        <div class="add-to-cart-product">
                            <div class="cart-product product-item11">
                                <div class="cart-product-image">
                                    <a href="#"><img src="/images/faded-short-sleeves-tshirt.jpg" alt="Product"></a>
                                </div>
                                <div class="cart-product-info">
                                    <p><a href="#">کالای یک</a></p>
                                    <a href="#">سفید</a>
                                    <span class="price">100.000 تومان</span>
                                </div>
                                <div class="cart-product-remove">
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            {{--<div class="cart-product">--}}
                                {{--<div class="cart-product-image">--}}
                                    {{--<a href="#"><img src="/images/printed-dress.jpg" alt="Product"></a>--}}
                                {{--</div>--}}
                                {{--<div class="cart-product-info">--}}
                                    {{--<p><a href="#">کالای دو</a></p>--}}
                                    {{--<a href="#">سیاه</a>--}}
                                    {{--<span class="price">100.000 تومان</span>--}}
                                {{--</div>--}}
                                {{--<div class="cart-product-remove">--}}
                                    {{--<i class="fa fa-times"></i>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="cart-product">--}}
                                {{--<div class="cart-product-image">--}}
                                    {{--<a href="#"><img src="/images/printed-summer-dress.jpg" alt="Product"></a>--}}
                                {{--</div>--}}
                                {{--<div class="cart-product-info">--}}
                                    {{--<p><a href="#">کالای سه</a></p>--}}
                                    {{--<a href="#">سفید</a>--}}
                                    {{--<span class="price">100.000 تومان</span>--}}
                                {{--</div>--}}
                                {{--<div class="cart-product-remove">--}}
                                    {{--<i class="fa fa-times"></i>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="cart-price">
                                <div class="cart-product-line fast-line">
                                    <span>تخفیف</span>
                                    <span class="free-shiping">20.000 تومان</span>
                                </div>
                                <div class="cart-product-line">
                                    <span>مبلغ کل</span>
                                    <span class="total">280.000 تومان</span>
                                </div>
                            </div>
                            <div class="cart-checkout">
                                <a href="{{route('cart')}}"> تکمیل خرید  <i class="fa fa-chevron-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- end logo,search and basket-->
    <div class="clearfix"></div>

{{--include nav bar--}}
@include('Template.nav')
</header>