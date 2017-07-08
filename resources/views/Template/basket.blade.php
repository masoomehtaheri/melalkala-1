
<div class="page-content">


    <div class="cart-page-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">سبد خرید</h4>
                    <div class="table-responsive">
                        @if(count($Cproducts)== 0)
                            <div class="alert alert-success" style="text-align: center">
                                <p>
                                    محصولی در سبد خرید وجود ندارد
                                </p>
                            </div>

                        @else
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
                                            <a href="/storage/images/{{$cproduct -> image}}"><img alt="" class="img-responsive"
                                                                                                  src="/storage/images/{{$cproduct->image}}"></a>
                                        </td>
                                        <td>
                                            <h6>{{$cproduct->name}}</h6>
                                        </td>

                                        <td>
                                            <div class="cart-price">{{number_format($cproduct->price)}}</div>
                                            <form><input type="hidden" value="{{ $totalpric=$totalpric+ $cproduct->price}}">
                                            </form>

                                        </td>
                                        <td>
                                            <div>{{number_format($cproduct->discount)}}</div>
                                            <form><input type="hidden" value="{{ $takhpric=$takhpric+ $cproduct->discount}}">
                                            </form>
                                        </td>
                                        <td>
                                            <div>{{number_format($cproduct->price-$cproduct->discount)}}</div>
                                        </td>

                                        <td><a href="{{route('deletecart',$cproduct->product_id)}}">
                                                <i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td >
                                        <h6>مجموع</h6>
                                    </td>
                                    <td>
                                        <h6>{{number_format($totalpric)}}</h6>
                                    </td>


                                    <td>
                                        <h6>{{number_format($takhpric) }}</h6>
                                    </td>

                                    <td>{{number_format($totalpric-$takhpric)}}</td>
                                    <td></td>
                                </tr>

                                </tfoot>



                                <script src="/js/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        $('.delete').hover(function () {
                                            $(this).parent().prev().fadeToggle();
                                        });
                                    });
                                </script>
                            </table>


                            <a href="{{route('checkout1',[auth()->id()])}}" class="btn btn-primary" style="outline: none;
    border: none;
    padding: 10px 0;
    font-size: 1em;
    color: #fff;
    display: block;
    width: 30%;
    background: #cc4347;
    margin-left:370px;
margin-bottom: 20px;
cursor: hand">تکمیل خرید</a>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </div>

    <?php
    $adad = array();
    foreach($Cproducts as $cproduct){
        $adad['id'][]=$cproduct->product_id;
    }
$adad['d'][0]=$totalpric-$takhpric;
     \Illuminate\Support\Facades\Cookie::queue("pp",$adad);



     ?>

</div>
<!-- End page content -->
