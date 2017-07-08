<form><input type="hidden" value="{{$color=$product -> color}}">
    <input type="hidden" value="{{$cat=$product -> cat}}">

</form>



<tr>
    <th><img src="/storage/images/{{$product -> image}}" alt=""></th>

    <th>{{$product -> name}}</th>
    <th>{{$product -> price}}</th>
    <th>@if($cat==1)
            چینی زرین
        @elseif($cat==2)
            کریستال
        @elseif($cat==3)
            دکوراسیون
        @elseif($cat==4)
            لوازم برقی خانگی
        @elseif($cat==5)
            آرکوپال
        @else
            لوازم آشپزخانه
        @endif</th>
    <th>{{$product -> introdoction}}</th>
    <th>{{$product -> count}}</th>
    <th>{{$product -> discount}}</th>
    <th>@if($color==1)
            سفید
        @elseif($color==2)
            مشکی
        @elseif($color==3)
            قرمز
        @elseif($color==4)
            نقره ای
        @elseif($color==5)
            سبز
        @elseif($color==6)
            صورتی

        @else
           آبی
        @endif</th>
    <th>
        <a href="{{route('admin.product.remove',$product->product_id)}}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>

        <a href="{{route('admin.product.edit',$product->product_id)}}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </th>
</tr>
