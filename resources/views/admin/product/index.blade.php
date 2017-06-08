@extends('Template.admin.adminLayout')
@section('panel_title')
    {{$page_data["panel_title"]}}
@endsection

@section('content')
    @include('admin.product.notification')
    <div class="row">
        <div class="col-xs-12">
            <div class="operations">
                <a href="{{route('admin.product.create')}}" class="btn btn-primary">
                     اضافه کردن محصول
                </a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            @include('admin.product.cloumns')
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            @include('admin.product.item',$product)
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            @include('admin.product.cloumns')
        </tr>
        </tfoot>
    </table>
@endsection