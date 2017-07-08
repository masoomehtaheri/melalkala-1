@if(session('delivery'))
    <div class="alert alert-success">
        <p>
            پیام شما ارسال شد.
        </p>
    </div>
@endif
@if(session('login'))
    <div class="alert alert-success">
        <p>
           ورود شما با موفقیت انجام شد
        </p>
    </div>
@endif

