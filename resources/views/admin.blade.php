<!doctype html>

<form action="enter" method="post">
    @Csrf
       用户名 : <input type="text" name="username" value=""><br/>
       密 &nbsp;&nbsp;码 : <input type="password" name="password" value=""><br/>
    <input type="submit" value="提交">
</form>

-----------------------------------------------------------
{{--{{count($errors)}}  --}}{{-- //错误行数--}}
{{--  $errors->any() --}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


