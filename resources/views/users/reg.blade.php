@extends('layouts.logoutlay')
@section('content')
<form action ="{{route('users.reg.submit')}}" method="post" style="margin: auto; width: 220px;">
{{@csrf_field()}}
Name: <input type = "text" value = "{{old('name')}}" name ="name"></br>
@error('name')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Email: <input type = "text" value = "{{old('email')}}" name ="email"></br>
@error('email')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Password: <input type="password" value = "{{old('password')}}" name="password"></br>
@error('password')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Confirm Password : <input type="password" value = "{{old('conf_password')}}" name="conf_password"></br>
@error('conf_password')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Type : <input type="radio" value="user" name="type"> User  <input type="radio" value="admin" name="type"> Admin  </br>
@error('type')
        <span class="text-danger">{{$message}}</span><br>
@enderror
   

</br>


<input type="submit" value="Register">
</form>
@endsection