<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="#">صفحه اصلی</a>
                </li>
                <li>محصولات</li>
            </ul>
        </div>
    </div>
</div>

<!-- PRODUCT-OFFER -->
<div class="product_wrap">

    <div class="container">
        <div class="row">

            <div class="span9 product-grid">

                <div class=" clearfix">
                    @foreach($products as $product)

                        <div class="span3 product">

                            <div>
                                <figure>
                                    <a href="#"><img src="/storage/images/{{$product -> image}}" alt=""></a>
                                    <div class="overlay">
                                        <a href="/storage/images/{{$product -> image}}" class="zoom"></a>
                                        <a href="{{route('product.single',$product->product_id)}}" class="link" title="مشاهده جزییات کالا"></a>
                                    </div>
                                </figure>
                                <div class="detail">

                                    <h4>{{$product -> name}}</h4>
                                    <span>{{number_format($product -> price)}}</span>
                                    <div class="icon">


                                        <a href="{{ route('addcart',$product->product_id) }}" class="one tooltip" title="افزودن به سبد خرید"></a>

                                        <a href="#" class="two tooltip " title="افزودن به علاقه مندیها"></a>
                                        <a href="#" class="three tooltip" title="افزودن برای مقایسه"></a>

                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
                <div>{{$products->links()}}</div>

                {{--<div class="pagination-area">--}}
                    {{----}}
                    {{--<ul class="pagination">--}}
                        {{----}}
                        {{--<li><a href="" class="active">1</a></li>--}}
                        {{--<li><a href="">2</a></li>--}}
                        {{--<li><a href="">3</a></li>--}}
                        {{--<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>

            <div class="span3">
                <div id="sidebar">
                    <div class="widget">
                        <h4>دسته بندی</h4>

                        <div id="accordion">
                            <h5><a href="#">چینی (5)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">تکنولوژی (3)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">وسایل برقی (4)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">الکترونیک (4)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">تست (5)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">آشپزخانه (5)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">آرکوپال (5)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>

                            <h5><a href="#">قابلمه (5)</a></h5>
                            <div>
                                <ul>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                    <li>تست (5)</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="widget">
                        <h4>رنج قیمت</h4>

                        <div class="price-range">
                            <div id="slider-range"></div>
                            <p class="clearfix">
                                <input type="text" id="amount"/>
                                <input type="text" id="amount2"/>
                            </p>
                        </div>
                    </div>

                    <div class="widget">
                        <h4>محصولات ویژه</h4>

                        <div class="featured">
                            <ul>
                                <li class="clearfix">
                                    <figure>
                                        <a href="#"><img src="images/single-product/s501.jpg" alt=""></a>
                                    </figure>
                                    <div>
                                        <h5>Brown Wood Chair</h5>
                                        <span>$244.00</span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <figure>
                                        <a href="#"><img src="images/single-product/s502.jpg" alt=""></a>
                                    </figure>
                                    <div>
                                        <h5>Brown Wood Chair</h5>
                                        <span>$244.00</span>
                                    </div>
                                </li>

                                <li class="clearfix last">
                                    <figure>
                                        <a href="#"><img src="images/single-product/s503.jpg" alt=""></a>
                                    </figure>
                                    <div>
                                        <h5>Brown Wood Chair</h5>
                                        <span>$244.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT-OFFER -->
