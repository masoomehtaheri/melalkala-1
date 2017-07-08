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

                            @include('Template.notification',['login'=>true])
                        @endif


                    </p>

                </div>

                <div class="top-call-to-acction">
                    <p>
                        <a href="#"> <i class="fa fa-phone"></i> پشتیبانی: 88437435</a>


                        @if(Auth::guest() <> true)

                            <a href="#"> <i class="fa fa-envelope-o"></i>ایمیل شما:{{auth()->user()->email}}</a>
                    @endif
                    <div style="color:#FFFFFF; font-size: 13px ">{{\Morilog\Jalali\jDate::forge('Today')->format(' %d،%B، %Y')}}</div>
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
                                <button type="submit">جستجو</button>
                                <input type="text" name="name" class="form-control input-sm"
                                       placeholder="نام کالا را وارد کنید"/>

                            </form>
                        </div>
                    </div>
                    <div class="shoping-cart">
                        <a href="{{route('cart')}}"><span>سبد خرید</span></a>
                        <?php
                        $cookie = \App\Utility\userUtility::getcookie();

                        ?>

                        @if((Auth::guest() == false)&&($cookie<>null))
                            @foreach($cookie['id'] as $coo)
                                <form>
                                    <input type="hidden" value="{{$kala=\App\products::find($coo)}}">
                                </form>
                                <div class="add-to-cart-product">
                                    <div class="cart-product product-item11">
                                        <div class="cart-product-image">
                                            <a href="/storage/images/{{$kala -> image}}"><img
                                                        src="/storage/images/{{$kala -> image}}" alt="Product"></a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p><a href="#">{{$kala -> name}}</a></p>
                                            <span class="price">{{$kala -> price}}</span>
                                        </div>

                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- end logo,search and basket-->
    <div class="clearfix"></div>


    @include('Template.nav')
</header>