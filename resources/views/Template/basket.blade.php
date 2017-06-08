<!-- Start page content -->
<div class="page-content">

    <div class="cart-page-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">سبد خرید</h4>
                    <div class="table-responsive">
                        <table class="cart-table" dir="rtl">
                            @foreach($Cproducts as $cproduct)
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

                            <tr>
                                <td>
                                    <a href="single-product.html"><img alt="" class="img-responsive" src="/storage/images/{{$cproduct->image}}"></a>
                                </td>
                                <td>
                                    <h6><a href="single-product.html">{{$cproduct->name}}</a></h6>
                                </td>

                                <td>
                                    <div class="cart-price">{{$cproduct->price}}</div>
                                </td>
                                <td>
                                    <div >{{$cproduct->discount}}</div>
                                </td>
                                <td>
                                    <div >{{$cproduct->discount}}</div>
                                </td>

                                <td><a class="delete" href="{{route('deletecart',$cproduct->product_id)}}"><i class="fa fa-trash-o" ></i></a></td>
                            </tr>




                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="3">
                                    <a href="#"></a>
                                </td>
                                <td>
                                    <h6><a href="#">مجموع</a></h6>
                                </td>


                                <td>
                                    <span class="total-price">3000</span>
                                </td>

                                <td></td>
                            </tr>
                            </tfoot>
                            @endforeach
                            <script src="/js/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                                    $('.delete').hover(function(){
                                        $(this).parent().prev().fadeToggle();
                                    });

                                    var price = $('.cart-price');
                                    var total = $('.total-price');
                                    var gheimat = 0;

                                    for(var i = 0 ; i < price.length ; i++) {
                                        gheimat += parseInt($(price[i]).text());
                                    }

                                    $(total).text(gheimat);});
                                    </script>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End page content -->