<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">صفحه اصلی</a>
                </li>
                <li>چینی زرین</li>
            </ul>
        </div>
    </div>
</div>

<div id="site_zarincontent">
    <ul id="imageszarin">
        <li><img src="/images/1.jpg" width="600" height="300" alt="seascape_one"/></li>
        <li><img src="/images/2.jpg" width="600" height="300" alt="seascape_two"/></li>
        <li><img src="/images/3.jpg" width="600" height="300" alt="seascape_three"/></li>
        <li><img src="/images/4.jpg" width="600" height="300" alt="seascape_four"/></li>
        <li><img src="/images/5.jpg" width="600" height="300" alt="seascape_five"/></li>
        <li><img src="/images/6.jpg" width="600" height="300" alt="seascape_seascape"/></li>
    </ul>
    <div id="sidebar_container">
        <div class="sidebar">

        </div>
    </div>
    <div class="zarincontent">

    </div>
</div>

<!--   content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">چینی زرین</h2>

                    <div class="single-blog-post">
                        @foreach($zarinProducts as $pzarin)

                            <h3>{{$pzarin->name}}</h3>
                            <a href="">
                                <img src="/storage/images/{{$pzarin->image}}" alt="">
                            </a>
                            <p>{{$pzarin->introdoction}}</p>
                            <a class="btn btn-primary" href="{{route('product.single',$pzarin->product_id)}}">مشاهده بیشتر</a>
                        @endforeach

                    </div>
                </div>
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
</section>
<div style="margin-left: 168px;" >{{$zarinProducts->links()}}</div>
<!-- load script  -->
<script src="/js/js/jquery-ui.js"></script>
<script src="/js/js/jquery.cycle.all.js"></script>
<script src="/js/js/jquery.elastislide.js"></script>
<script src="/js/js/jquery.carouFredSel-6.0.4-packed.js"></script>
<script src="/js/js/jquery.selectBox.js"></script>
<script src="/js/js/jquery.tooltipster.min.js"></script>
<script src="/js/js/jquery.prettyPhoto.js"></script>
<script src="/js/js/custom.js"></script>
<script type="text/javascript" src="/js/jquery.kwicks-1.5.1.js"></script>
<script type="text/javascript" src="/js/loadpage.js"></script>