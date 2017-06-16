
<form action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="image">تصویر:</label>
        <input
                type="file"
                name="image"
                class="form-control"
                id="image"
                value="{{old('image',isset($product)?$product->image:"") }}">
    </div>
    <div class="form-group">
        <label for="name">نام کالا:</label>
        <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                value="{{old('name',isset($product)?$product->name:"") }}">
    </div>
    <div class="form-group">
        <label for="price">قیمت:</label>
        <input
                type="text"
                name="price"
                class="form-control"
                id="price"
                value="{{old('price',isset($product)?$product->price:"") }}">
    </div>
    <div class="form-group">
        <label for="cat">دسته بندی:</label>
        <select name="cat" id="cat" class="form-control">
            @foreach($pro_cat as $cat_id=>$cat_title)
                <option value="{{$cat_id}}" {{ isset($product) && $product->cat==$cat_id?'selected':''}}>{{$cat_title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="introdoction">توضیحات:</label>
        <input
                type="text"
                name="introdoction"
                class="form-control"
                id="introdoction"
                >
    </div>

    <div class="form-group">
        <label for="count">تعداد :</label>
        <input
                type="text"
                name="count"
                class="form-control"
                id="count"
                value="{{old('count',isset($product))?$product->count:"" }}">
    </div>
    <div class="form-group">
        <label for="discount">تخفیف :</label>
        <input type="text"
               name="discount"
               class="form-control"
               id="discount"
               value="{{old('discount',isset($product))?$product->discount:"" }}">
    </div>
    <div class="form-group">
        <label for="color">رنگ:</label>
        <select name="color" id="color" class="form-control">
            @foreach($colors as $color_id=>$color_title)
                <option value="{{$color_id}}" {{ isset($product) && $product->cat==$color_id?'selected':''}}>{{$color_title}}</option>
            @endforeach
        </select>
    </div>
    @if(isset($product))
        <input type="hidden" name="pro_id" value="{{$product->product_id }}">
        @endif
    <button type="submit" class="btn btn-default">ذخیره</button>
</form>