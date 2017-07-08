<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">صفخه اصلی</a>
                    </li>
                    <li>سفارشات - طریقه تحویل</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
                    <form method="post" action="{{route('checkout3')}}">
                        {{csrf_field()}}
                        <h1>طریقه تحویل کالا</h1>
                        <ul class="nav nav-pills nav-justified">
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>مشاهده سفارشات</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>روش پرداخت</a>
                            </li>
                            <li class="active"><a href="{{route('checkout2')}}"><i class="fa fa-truck"></i><br>طریقه تحویل</a>
                            </li>
                            <li><a href="{{route('checkout1')}}"><i class="fa fa-map-marker"></i><br>آدرس</a>
                            </li>



                        </ul>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box shipping-method">

                                        <h4>روش اول</h4>

                                        <p>توضیحات</p>

                                        <div class="box-footer text-center">

                                            <input type="radio" name="delivery" value="delivery1" title="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box shipping-method">

                                        <h4>روش دوم</h4>

                                        <p>توضیحات</p>
                                        <div class="box-footer text-center">

                                            <input type="radio" name="delivery" value="delivery2" title="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="box shipping-method">

                                        <h4>روش سوم</h4>

                                        <p>توضیحات</p>

                                        <div class="box-footer text-center">

                                            <input type="radio" name="delivery" value="delivery3" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.content -->

                        <div class="box-footer">
                            <div class="pull-right">
                                <a href="{{route('checkout1')}}" class="btn btn-primary">بازگشت به مرحله قبل<i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-chevron-left"></i>ادامه
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">

                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>خلاصه سفارشات</h3>
                    </div>
                    <p class="text-muted">توضیحات</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>

                                <th></th>
                                <td></td>
                            </tr>

                            <tr class="total">

                                <th>{{$cookie['d'][0]}}</th>
                                <td>مجموع</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
</div>