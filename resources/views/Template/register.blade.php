<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">صفحه اصلی</a>
                </li>
                <li>صفحه ورود</li>
            </ul>
        </div>
    </div>
</div>
@include('Template.errors')
<!-- register -->
<div class="register">
    <div class="container">
        <h2>حساب من</h2>
        <div class="login-form-grids">
            <h5>ورود به حساب کاربری</h5>
            <form role="form" method="POST" action="{{ url('/login') }}" >
                {{@csrf_field()}}
                <input type="email" placeholder="ایمیل"  name="email" value="{{ old('email') }}" required autofocus >
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <input type="password" placeholder="رمز ورود " name="password" required >
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    رمز خود را فراموش کرده اید؟
                </a>
                <input type="submit" value="تایید">
            </form>

            <div class="clear"></div>


            <h6>ایجاد حساب کاربری</h6>

            <form role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" placeholder="نام "  name="first_name" required value="{{old('first_name')}}" >
                <input type="text" placeholder="نام خانوادگی "  name="last_name" required value="{{old('last_name')}}">
                <input type="email" placeholder=" ایمیل" name="email" required value="{{old('email')}}">
                <input type="password" placeholder=" رمز"  name="password" required>
                <input type="password" placeholder=" تایید رمز" name="password_confirmation" required >
                <input type="text" placeholder=" آدرس " name="address"  required value="{{old('address')}}" >
                <input type="text" placeholder=" تلفن " name="tel" required value="{{old('tel')}}">
                <div class="register-check-box">
                    <div class="check">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox" required>
                            <i> </i>من همه قوانین این سایت را می پذیرم
                        </label>
                    </div>
                </div>
                <div class="clear"></div>
                <input type="submit" value="تایید">
            </form>
        </div>
    </div>
</div>
<!-- //register -->