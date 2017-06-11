<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">صفحه اصلی</a>
                    </li>
                    <li>ثبت سفارشات - مشاهده سفارشات</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
                    <form method="post" action="{{route('checkout4')}}">
                        {{csrf_field()}}
                        <h1>مشاهده سفارشات</h1>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="{{route('checkout4')}}"><i class="fa fa-eye"></i><br>مشاهده سفارشات</a>
                            </li>
                            <li><a href="{{route('checkout3')}}"><i class="fa fa-money"></i><br>روش پرداخت</a>
                            </li>
                            <li><a href="{{route('checkout2')}}"><i class="fa fa-truck"></i><br>طریقه تحویل</a>
                            </li>
                            <li><a href="{{route('checkout1')}}"><i class="fa fa-map-marker"></i><br>آدرس</a>
                            </li>


                        </ul>

                        <div class="content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>کل</th>
                                        <th>تخفیف</th>
                                        <th>فی</th>
                                        <th>تعداد</th>
                                        <th colspan="2">محصولات</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>$246.00</td>
                                        <td>$0.00</td>
                                        <td>$123.00</td>
                                        <td>2</td>
                                        <td><a href="#">نام کالا</a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="images/p1.jpg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>$200.00</td>
                                        <td>$0.00</td>
                                        <td>$200.00</td>
                                        <td>1</td>
                                        <td><a href="#">نام کالا</a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="images/p2.jpg" alt="">
                                            </a>
                                        </td>

                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>$446.00</th>
                                        <th colspan="5">جمع کل</th>

                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.content -->

                        <div class="box-footer">
                            <div class="pull-right">
                                <a href="{{route('checkout3')}}" class="btn btn-primary">بازگشت به مرحله قبل<i
                                            class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-chevron-left"></i>تکمیل
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

                                <th>$446.00</th>
                                <td> متن متن متن متن متن متن</td>
                            </tr>
                            <tr>

                                <th>$10.00</th>
                                <td>متن</td>
                            </tr>
                            <tr>

                                <th>$0.00</th>
                                <td>متن</td>
                            </tr>
                            <tr class="total">

                                <th>$456.00</th>
                                <td>متن</td>
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