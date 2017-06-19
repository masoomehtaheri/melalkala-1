<!-- Start page content -->
<div class="page-content">

    <div class="cart-page-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">سبد خرید</h4>
                    <div class="table-responsive">
                        <table class="cart-table" dir="rtl">
                            <thead>
                            <tr>
                                <th>کالا</th>
                                <th>نام کالا</th>
                                <th>قیمت واحد</th>
                                <th> تخفیف</th>
                                <th> قیمت پرداختی</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <form><input type="hidden" value="{{ $totalpric=0}}">
                                <input type="hidden" value="{{ $takhpric=0}}">

                            </form>
                            @foreach($Cproducts as $cproduct)
                                <tr>
                                    <td>
                                        <a href="single-product.html"><img alt="" class="img-responsive"
                                                                           src="/storage/images/{{$cproduct->image}}"></a>
                                    </td>
                                    <td>
                                        <h6><a href="single-product.html">{{$cproduct->name}}</a></h6>
                                    </td>

                                    <td>
                                        <div class="cart-price">{{$cproduct->price}}</div>
                                        <form><input type="hidden" value="{{ $totalpric=$totalpric+ $cproduct->price}}">
                                        </form>

                                    </td>
                                    <td>
                                        <div>{{$cproduct->discount}}</div>
                                        <form><input type="hidden" value="{{ $takhpric=$takhpric+ $cproduct->discount}}">
                                        </form>
                                    </td>
                                    <td>
                                        <div>{{$cproduct->price-$cproduct->discount}}</div>
                                    </td>

                                    <td><a href="{{route('deletecart',$cproduct->product_id)}}">
                                            <i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endforeach
                            <tfoot>
                            <tr>
                                <td></td>
                                <td >
                                    <h6>مجموع</h6>
                                </td>
                                <td>
                                    <h6>{{$totalpric}}</h6>
                                </td>


                                <td>
                                    <h6>{{ $takhpric}}</h6>
                                </td>

                                <td>{{$totalpric-$takhpric}}</td>
                                <td></td>
                            </tr>
                            </tfoot>
                            </tbody>

                            <script src="/js/jquery.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.delete').hover(function () {
                                        $(this).parent().prev().fadeToggle();
                                    });
                                });

                            </script>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End page content -->