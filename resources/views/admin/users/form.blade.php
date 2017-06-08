
<form action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="first_name">نام :</label>
        <input
                type="text"
                name="first_name"
                class="form-control"
                id="first_name"
                value="{{old('first_name',isset($user)?$user->first_name:"") }}">
    </div>
    <div class="form-group">
        <label for="last_name">نام خانوادگی:</label>
        <input
                type="text"
                name="last_name"
                class="form-control"
                id="last_name"
                value="{{old('last_name',isset($user)?$user->last_name:"") }}">
    </div>
    <div class="form-group">
        <label for="last_name">نام کاربری:</label>
        <input
                type="text"
                name="user_name"
                class="form-control"
                id="user_name"
                value="{{old('user_name',isset($user)?$user->user_name:"") }}">
    </div>
    <div class="form-group">
        <label for="email">ایمیل:</label>
        <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                value="{{old('email',isset($user)?$user->email:"") }}">
    </div>
    <div class="form-group">
        <label for="password">کلمه عبور:</label>
        <input type="password"
               name="password"
               class="form-control"
               id="password"
              >
    </div>
    <div class="form-group">
        <label for="password_confirmation">تکرار کلمه عبور:</label>
        <input
                type="password"
                name="password_confirmation"
                class="form-control"
                id="password_confirmation"
                >
    </div>
    <div class="form-group">
        <label for="role">نقش کاربری:</label>
        <select name="role" id="role" class="form-control">
            @foreach($user_role as $role_id=>$role_title)
                <option value="{{$role_id}}" {{ isset($user) && $user->role==$role_id?'selected':''}}>{{$role_title}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tel">تلفن :</label>
        <input
                type="text"
                name="tel"
                class="form-control"
                id="tel"
                value="{{old('tel',isset($user)?$user->tel:"")}}">
    </div>
    <div class="form-group">
        <label for="address">آدرس :</label>
        <input
                type="text"
                name="address"
                class="form-control"
                id="address"
                value="{{old('address',isset($user)?$user->address:"")}}">
    </div>
    <div class="form-group">
        <label for="avatar">تصویر پروفایل :</label>
        <input type="file" name="avatar" class="form-control" id="avatar">
    </div>
    @if(isset($user))
        <input type="hidden" name="user_id" value="{{$user->id }}">
        @endif
    <button type="submit" class="btn btn-default">ذخیره</button>
</form>