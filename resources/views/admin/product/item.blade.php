<tr>
    <th><img src="/storage/images/{{$product -> image}}" alt=""></th>

    <th>{{$product -> name}}</th>
    <th>{{$product -> price}}</th>
    <th>{{$product -> cat}}</th>
    <th>{{$product -> introdoction}}</th>
    <th>{{$product -> count}}</th>
    <th>{{$product -> discount}}</th>
    <th>{{$product -> color}}</th>
    <th>
        <a href="{{route('admin.product.remove',$product->product_id)}}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>

        <a href="{{route('admin.product.edit',$product->product_id)}}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </th>
</tr>
