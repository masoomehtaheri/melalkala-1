
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
    @foreach($SearchProducts as $Sproduct)
    <tr>

        <td><img src="/storage/images/{{$Sproduct -> image}}" alt="mm"></td>
        <td>{{$Sproduct->name}}</td>
        <td>{{$Sproduct->color}}</td>
        <td>{{$Sproduct->price}}</td>
        <td>{{$Sproduct->discount}}</td>
        <td>{{$Sproduct->introdoction}}</td>
        <td><a  class="btn btn-primary" href="{{route('product.single',$Sproduct->product_id)}}" >
          بیشتر  </a></td>


    </tr>
    @endforeach
</table>
    </div>
</div>