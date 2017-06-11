<tr>
    <th>{{$user -> first_name}}</th>
    <th>{{$user->last_name}}</th>
    <th>{{$user->email}}</th>
    <th>{{$user->role}}</th>
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
