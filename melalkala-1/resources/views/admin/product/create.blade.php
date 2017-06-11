@extends('Template.admin.adminLayout')
@section('panel_title')
    {{$page_data["panel_title"]}}
@endsection

@section('content')
    @include('admin.product.errors')
@include('admin.product.form',[$pro_cat,$colors])
@endsection