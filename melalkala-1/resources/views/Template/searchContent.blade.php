
<div class="container">
    <div class="row">
<table>
    <tr>
        <th>تصویر </th>
        <th> نام کالا</th>
        <th>رنگ</th>
        <th>قیمت</th>
        <th>تخفیف</th>
        <th>توضیحات</th>
        <th>عملیات</th>

    </tr>
    <tr>
        @foreach($SearchProducts as $Sproduct)
        <td>{{$Sproduct->name}}</td>
        <td>{{$Sproduct->name}}</td>
        <td>{{$Sproduct->color}}</td>
        <td>{{$Sproduct->price}}</td>
        <td>{{$Sproduct->discount}}</td>
        <td>{{$Sproduct->introdoction}}</td>
        <td><a  class="btn btn-primary" href="{{route('admin.users.remove',$Sproduct->id)}}" >
          بیشتر  </a></td>

            @endforeach
    </tr>

</table>
    </div>
</div>