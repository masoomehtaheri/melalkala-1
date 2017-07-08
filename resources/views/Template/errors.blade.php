@if(count($errors) >0)
<div class="alert alert-danger" style="width: 30%;text-align: center;margin-left: 33%">
    <ul>
    @foreach($errors->all() as $error)
        <li> خطایی رخ داده است </li>
@endforeach
    </ul>
</div>
@endif