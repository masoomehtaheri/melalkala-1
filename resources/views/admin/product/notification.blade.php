@if(session('insertSuccess'))
    <div class="alert alert-success">
        <p>
           کالای مورد نظر با موفقیت اضافه شد.
        </p>
    </div>
    @endif


@if(session('deleteSuccess'))
    <div class="alert alert-danger">
        <p>
            کالای مورد نظر با موفقیت حذف شد.
        </p>
    </div>
@endif
@if(session('failDelete'))
    <div class="alert alert-info">
        <p>
          خطا در حذف  کالای مورد نظر .
        </p>
    </div>
@endif
@if(session('updateSuccess'))
    <div class="alert alert-info">
        <p>
            عملیات با موفقیت انجام شد.
        </p>
    </div>
@endif