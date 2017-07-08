
<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}">صفحه اصلی</a>
                    </li>
                    <li>ثبت سفارشات-آدرس</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
                    <form method="post" action="{{route('checkout2')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h1>سفارش</h1>
                        <ul class="nav nav-pills nav-justified">
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>مشاهده سفارشات</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>روش پرداخت</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>طریقه تحویل</a>
                            </li>
                            <li class="active"><a href="{{route('checkout1')}}"><i class="fa fa-map-marker"></i><br>آدرس</a>
                            </li>


                        </ul>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">نام</label>
                                        <input type="text" class="form-control" id="firstname" value="{{$user->first_name}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">نام خانوادگی</label>
                                        <input type="text" class="form-control" id="lastname" value="{{$user->last_name}}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">خیابان</label>
                                        <input type="text" class="form-control" id="company"value="{{$user->address}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">شرکت</label>
                                        <input type="text" class="form-control" id="street">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">


                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="state">متن</label>
                                        <select class="form-control" id="state"></select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="country">متن</label>
                                        <select class="form-control" id="country"></select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="city">متن</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="zip">متن</label>
                                        <input type="text" class="form-control" id="zip">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">تلفن</label>
                                        <input type="text" class="form-control" id="phone"value="{{$user->tel}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">ایمیل</label>
                                        <input type="text" class="form-control" id="email"value="{{$user->email}}">
                                    </div>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>

                        <div class="box-footer">
                            <div class="pull-right">
                                <a href="#" class="btn btn-primary">بازگشت
                                    به سبد خرید<i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div class="pull-left">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-chevron-left"></i>ادامه
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
                           {{-- <tr>

                                <th>$10.00</th>
                                <td>متن</td>
                            </tr>
                            <tr>

                                <th>$0.00</th>
                                <td>متن</td>
                            </tr>--}}
                            <tr class="total">

                                <th>{{$cookie['d'][0]}}</th>
                                <td>مجموع پرداخت</td>
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
</div>