@extends('layouts.logoutlay')
@section('content')
<form action ="{{route('users.login.submit')}}" method="post" allign="justified" style="margin: auto; width: 220px;">
{{@csrf_field()}}

Email: <input type = "text" value = "{{old('email')}}" name ="email"></br>
@error('email')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Password: <input type="password" name="password"></br>

@error('password')
        <span class="text-danger">{{$message}}</span><br>
@enderror

</br>
<input type="submit" value="Login">
</form>
@endsection