<form><input type="hidden" value="{{$roletitle=$user->role}}">

</form>


<tr>
    <th>{{$user -> first_name}}</th>
    <th>{{$user->last_name}}</th>
    <th>{{$user->email}}</th>
    <th> @if($roletitle==1)


            مدیر
             @elseif($roletitle==2)
نویسنده
             @else
             کاربر
    @endif</th>
    <th>{{$user->tel}}</th>
    <th>{{$user->created_at}}</th>
    <th>
        <a href="{{route('admin.users.remove',$user->id)}}">
            <span class="glyphicon glyphicon-remove"></span>
        </a>

        <a href="{{route('admin.users.edit',$user->id)}}">
            <span class="glyphicon glyphicon-edit"></span>
        </a>
    </th>
</tr>
