@if(session('insertSuccess'))
    <div class="alert alert-success">
        <p>
            کاربر باموفقیت ساخته شد.
        </p>
    </div>
    @endif


@if(session('deleteSuccess'))
    <div class="alert alert-danger">
        <p>
            کاربر مورد نظر با موفقیت حذف شد.
        </p>
    </div>
@endif
@if(session('failDelete'))
    <div class="alert alert-info">
        <p>
            کاربر مورد نظر وجود ندارد.
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