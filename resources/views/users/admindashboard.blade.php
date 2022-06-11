@extends('layouts.loginlay')
@section('content')
<h1>Admin Dashboard</h1>
<table border= "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        
    </tr>
    @foreach($users as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td><a href="{{route('users.details',['id'=>$s->id,'name'=>$s->name,'email'=>$s->email])}}">{{$s->name}}</a></td>
        <td>{{$s->email}}</td>
        <td>{{$s->type}}</td>
        
    </tr>
    @endforeach
</table>
@endsection
