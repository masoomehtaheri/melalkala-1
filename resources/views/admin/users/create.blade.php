@extends('Template.admin.adminLayout')
@section('panel_title')
    {{$page_data["panel_title"]}}
@endsection

@section('content')
    @include('admin.users.errors')
@include('admin.users.form',$user_role)
@endsection