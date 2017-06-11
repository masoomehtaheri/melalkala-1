@extends('Template.admin.adminLayout')
@section('panel_title')
    {{$page_data["panel_title"]}}
@endsection

@section('content')
    @include('admin.users.notification')
    <div class="row">
        <div class="col-xs-12">
            <div class="operations">
                <a href="{{route('admin.users.create')}}" class="btn btn-primary">
                    ایجاد کاربر جدید
                </a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
    <thead>
    <tr>
        @include('admin.users.cloumns')
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        @include('admin.users.item',$user)
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        @include('admin.users.cloumns')
    </tr>
    </tfoot>
</table>
@endsection