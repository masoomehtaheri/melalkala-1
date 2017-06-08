
@extends('Template.admin.adminLayout')
@section('panel_title')
    {{$page_data["panel_title"]}}
    @endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-md-3">
              <ul class="list-group">
                  <li class="list-group-item"><span class="badge">{{$stat["total_user"]}}</span>تعداد کاربران:</li>
                  <li class="list-group-item"><span class="badge">{{$stat["total_post"]}}</span>تعداد مطالب:</li>
                  <li class="list-group-item"><span class="badge">{{$stat["total_comments"]}}</span>تعداد نظرات:</li>
              </ul>
          </div>
      </div>
  </div>
    @endsection